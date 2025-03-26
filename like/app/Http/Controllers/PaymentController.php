<?php

namespace App\Http\Controllers;

use App\Models\customer;
use App\Models\orders;
use App\Models\payment;
use App\Models\carts;
use App\Models\promotions;
use App\Models\rewards;
use Cart;
use Illuminate\Http\Request;
use App\Services\KsherPayService;
use Illuminate\Support\Facades\Log;

class PaymentController extends Controller
{
    protected $ksherPayService;

    protected $client_id = '2006130622';
    protected $client_secret = '8af0060c4e981e4b22fefe678b40f042';
    protected $user_id = 'U4d8234c7f104e9a8b1df9195bc61f39e';

    public function __construct(KsherPayService $ksherPayService)
    {
        $this->ksherPayService = $ksherPayService;
    }

    public function showPaymentForm(Request $request)
    {
        if (session('data') == null) {
            return redirect('/login');
        }
        $id = session('data')[0]->id;
        $user = customer::find($id);
        $count = count(Cart::getContent());

        $query = payment::where('user_id', $id);
        if ($request->has('status') && $request->status != 'all') {
            $query->where('status', $request->status);
        }
        $query->orderBy('id', 'desc');
        $history = $query->paginate(10);

        return view('admin.payment', [
            "userInfo" => $user,
            'counting' => $count,
            'histories' => $history,
            'status' => $request->status ?? 'all',
        ]);
    }

    public function createOrder(Request $request)
    {
        try {
            // Log the incoming request data
            Log::info('Incoming request data:', $request->all());
            if ($request->input('amount') < 10) {
                return response()->json(['error' => 'กรุณาเติมเงินขั้นต่ำ 10 บาท', 'title' => 'เติมน้อยเกิ๊น..'], 500);
            }
            if ($request->input('amount') > 30000) {
                return response()->json(['error' => 'กรุณาเติมเงินน้อยกว่า 30,000 บาท', 'title' => 'เติมเยอะเกินไปแล้ว!'], 500);
            }
            $amount = $request->input('amount');
            if (strpos($amount, '.') !== false && strlen(explode('.', $amount)[1]) > 2) {
                return response()->json(['error' => 'กรุณากรอกจำนวนเงินที่มีทศนิยมไม่เกิน 2 ตำแหน่ง', 'title' => 'ทศนิยมเยอะไป!'], 500);
            }
            // Prepare the order data
            $orderData = [
                'mch_order_no' => 'order_' . time(),
                'total_fee' => $request->input('amount') * 100,
                'fee_type' => 'THB',
                'channel_list' => $request->input('channel'),
                'mch_redirect_url' => route('payment.return'),
                'notify_url' => 'https://b844-124-120-108-17.ngrok-free.app/payment/notify',
                'product_name' => 'Gain-Like Service : Top Up',
                'device' => 'PC',
                'mch_code' => env('KSHER_MERCHANT_ID'), // Ensure this is set in your .env file
                'mch_redirect_url_fail' => route('payment.fail'),
                'refer_url' => env('APP_URL') // Add the refer_url parameter
            ];

            // Log the order data for debugging
            Log::info('Order Data:', $orderData);

            // Create the order
            $response = $this->ksherPayService->createOrder($orderData);

            // Log the response from Ksher
            Log::info('Ksher Response:', ['response' => $response]);

            // Handle the response
            $responseArray = json_decode($response, true);

            if (isset($responseArray['code']) && $responseArray['code'] == 0 && isset($responseArray['data'])) {
                return response()->json(['data' => $responseArray['data']]);
            } else if ($responseArray['msg'] == "SUCCESS") {
                return response()->json(['msg' => 'It success!', 'response' => $responseArray], 200);
            } else {
                return response()->json(['error' => $responseArray['msg'] ?? 'Unknown error'], 500);
            }
        } catch (\Exception $e) {
            Log::error('Error creating order: ' . $e->getMessage());
            return response()->json(['error' => 'Server error: ' . $e->getMessage()], 500);
        }
    }

    public function return(Request $request)
    {
        $data = $request->all();
        Log::info('Ksher notification return:', $data);

        if (isset($data['mch_order_no'])) {
            // Query the order status using the mch_order_no
            $queryData = [
                'mch_order_no' => $data['mch_order_no']
            ];
            $orderStatus = $this->ksherPayService->queryOrder($queryData);

            // Parse the order status response
            $orderStatus = json_decode($orderStatus, true);

            // Create payment history
            $amountCredited = $orderStatus['data']['total_fee'] / 100; // Convert from cents to THB
            $bonus = 0;
            if ($amountCredited >= 200) {
                $bonus = $amountCredited * 0.05; // 5% bonus
                $amountCredited += $bonus; // Add bonus to the credited amount
            }

            $payment = new payment();
            $payment->amount = $amountCredited;
            $payment->type = $orderStatus['data']['channel'];
            $payment->status = $orderStatus['data']['result'];
            $payment->user_id = session('data')[0]->id;
            $payment->save();

            // Determine the status and message based on the response
            if ($orderStatus && isset($orderStatus['data']['result']) && $orderStatus['data']['result'] === 'SUCCESS') {
                $status = 'success';
                $message = 'เติมเงินสำเร็จ!';
                if ($bonus > 0) {
                    $message .= ' ยินดีด้วยคุณได้รับโบนัส 5% จากการเติมเงินขั้นต่ำ 200!';
                }
                $customer = customer::find(session('data')[0]->id);
                $customer->wallet += $amountCredited;
                session('data')[0]->wallet += $amountCredited;
                $customer->save();
            } else {
                $status = 'failed';
                $message = 'เกิดข้อผิดพลาดกรุณาลองใหม่อีกครั้ง';
            }

            // Send the response and redirect
            return redirect('/payment')->with([
                'status' => $status,
                'message' => $message,
            ]);
        } else {
            // Handle case where mch_order_no is missing
            return redirect('/payment')->with([
                'status' => 'failed',
                'message' => 'ไม่พบรายการที่คุณต้องการกรุณาลองใหม่อีกครั้ง',
            ]);
        }
    }

    public function notify(Request $request)
    {
        $data = $request->all();

        Log::info('Ksher notification:', $data);

        if (isset($data['mch_order_no'])) {
            return response()->json(['status' => 'success']);
        } else {
            return response()->json(['status' => 'error', 'message' => 'Invalid status'], 400);
        }
    }

    public function buy(Request $request)
    {
        $data = is_string($request->items) ? json_decode($request->items, true) : $request->items;
        $subtotal = $request->input('total');  // Subtotal before applying the coupon
        $coupon = $request->input('coupon');      // Coupon details passed in the request

        try {
            // Validate the coupon if provided
            $discount = 0;
            if ($coupon) {
                $validCoupon = rewards::where('id', $coupon['id'])->where('limit', '>', 0)->first();
                if (!$validCoupon) {
                    throw new \Exception('คูปองไม่ถูกต้องหรือหมดอายุ');
                }

                // Calculate discount based on coupon type
                if ($validCoupon->unit === 'percent') {
                    $discount = ($subtotal * $validCoupon->amount) / 100;
                } else {
                    $discount = $validCoupon->amount;
                }

                // Ensure discount doesn't exceed the subtotal
                $discount = min($discount, $subtotal);

                // Decrement the coupon limit
                $validCoupon->decrement('limit');
            }

            // Adjust the subtotal after applying the discount
            $total = $subtotal - $discount;

            // Validate user wallet balance
            $id = session('data')[0]->id;
            $user = customer::find($id);
            if (empty($data)) {
                throw new \Exception('ไม่พบสินค้าหรือบริการในตะกร้า กรุณาเพิ่มสินค้าหรือบริการ');
            }
            if ($user->wallet < $total) {
                throw new \Exception('ยอดเงินไม่เพียงพอ กรุณาเติมเงิน');
            }

            // Create order
            $order = new orders();
            $order->status = 'กำลังดำเนินการ';
            $order->user_id = $id;
            $order->price = $total; // Store the discounted total
            // $order->coupon_id = $coupon['id'] ?? null; // Optionally store the coupon ID
            // $order->discount = $discount; // Store the discount amount
            $order->save();

            // Add items to the order
            foreach ($data as $item) {
                $cart = new carts();
                $cart->item_id = $item['id'];
                $cart->item_name = $item['name'];
                $cart->price = $item['price'];
                $cart->amount = $item['attributes']['amount'];
                $cart->type = $item['attributes']['type'];
                $cart->service = $item['attributes']['service'];
                $cart->platform = $item['attributes']['platform'];
                $cart->link = $item['attributes']['link'];
                $cart->quantity = $item['quantity'];
                if ($item['attributes']['service'] === 'comment' || strpos($item['attributes']['service'], 'like') !== false) {
                    $cart->comments = $item['attributes']['comments'];
                }
                $cart->order_id = $order->id;
                $cart->save();
            }

            // Send Line notification
            $line_access_token = $this->getLineAccessToken();
            $message = "📣  ออเดอร์ใหม่จากเว็บ GainLike‼️ \n\n - 📌 ตรวจสอบทันที! \n\n admin.gainlike-service.com";
            $this->sendLineNotification($line_access_token, $message);

            // Deduct the total from the user's wallet
            $user->wallet -= $total;
            $user->save();

            // Clear the cart
            Cart::clear();

            return response()->json([
                'status' => 'success',
                'message' => 'การสั่งซื้อสำเร็จแล้ว สามารถดูประวัติการสั่งซื้อได้ในประวัติการสั่งซื้อ'
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => $e->getMessage(),
                'data' => $data
            ], 400);
        }
    }

    // Helper method to get Line Access Token
    private function getLineAccessToken()
    {
        $shortUrl = 'https://api.line.me/v2/oauth/accessToken';
        $stur = [
            'grant_type' => 'client_credentials',
            'client_id' => $this->client_id,
            'client_secret' => $this->client_secret,
        ];

        $stch = curl_init($shortUrl);
        curl_setopt($stch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($stch, CURLOPT_POST, true);
        curl_setopt($stch, CURLOPT_POSTFIELDS, http_build_query($stur));
        $response = curl_exec($stch);
        curl_close($stch);

        $responseData = json_decode($response, true);
        return $responseData['access_token'] ?? null;
    }

    // Helper method to send Line Notification
    private function sendLineNotification($accessToken, $message)
    {
        $url = 'https://api.line.me/v2/bot/message/push';
        $headers = [
            'Content-Type: application/json',
            'Authorization: Bearer ' . $accessToken
        ];
        $postData = [
            'to' => $this->user_id,
            'messages' => [
                [
                    'type' => 'text',
                    'text' => $message
                ]
            ]
        ];

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($postData));
        $response = curl_exec($ch);
        curl_close($ch);

        Log::info('Line message response:', ['response' => $response]);
    }
}
