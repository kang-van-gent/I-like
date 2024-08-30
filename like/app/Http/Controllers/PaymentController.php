<?php

namespace App\Http\Controllers;

use App\Models\customer;
use App\Models\orders;
use App\Models\payment;
use App\Models\carts;
use Cart;
use Illuminate\Http\Request;
use App\Services\KsherPayService;
use Illuminate\Support\Facades\Log;

class PaymentController extends Controller
{
    protected $ksherPayService;
    protected $line_access_token = 'GOYDtVZBXG5LUQnTnLUKz3Bd+0IYgZlS4wY5doFTh8uzcqe5+ThB/2nIxhIy0Nji9s36s7EvAUgm49cutRbvo7vApS6EerKuJ8HtW9SGmbzkzEG9bxQgjLMI2+Gbpp2gqkY9frch0D4bo4N9RfHHwQdB04t89/1O/w1cDnyilFU=';
    protected $user_id = 'U4d8234c7f104e9a8b1df9195bc61f39e';

    public function __construct(KsherPayService $ksherPayService)
    {
        $this->ksherPayService = $ksherPayService;
    }

    public function showPaymentForm()
    {
        if (session('data') == null) {
            return redirect('/login');
        }
        $id = session('data')[0]->id;
        $user = Customer::find($id);
        $count = count(Cart::getContent());
        return view('admin.payment', ["userInfo" => $user, 'counting' => $count]);
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

            //create payment history
            $data = new payment();
            $data->amount = $orderStatus['data']['total_fee'] / 100;
            $data->type = $orderStatus['data']['channel'];
            $data->status = $orderStatus['data']['result'];
            $data->user_id = session('data')[0]->id;
            $data->save();

            // Determine the status and message based on the response
            if ($orderStatus && isset($orderStatus['data']['result']) && $orderStatus['data']['result'] === 'SUCCESS') {
                $status = 'success';
                $message = 'เติมเงินสำเร็จ!';
                $customer = customer::find(session('data')[0]->id);
                $customer->wallet = $customer->wallet + $orderStatus['data']['total_fee'] / 100;
                session('data')[0]->wallet = session('data')[0]->wallet + $orderStatus['data']['total_fee'] / 100;
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
        $data = json_decode($request->items, true);
        try {

            $url = 'https://api.line.me/v2/bot/message/push';

            $headers = [
                'Content-Type: application/json',
                'Authorization: Bearer ' . $this->line_access_token
            ];

            //code...
            $id = session('data')[0]->id;
            $user = Customer::find($id);


            if (empty($data)) {
                throw new \Exception('ไม่พบสินค้าหรือบริการในตะกร้า กรุณาเพิ่มสินค้าหรือบริการ');
            }
            if ($user->wallet < $request->price) {
                throw new \Exception('ยอดเงินไม่เพียงพอ กรุณาเติมเงิน');
            } else {


                $order = new orders();
                $order->status = 'กำลังดำเนินการ';
                $order->user_id = $id;
                $order->price = $request->price;
                $order->save();
                foreach ($data as $item) {
                    $cart = new carts();
                    $cart->item_id = $item['id'];
                    $cart['item_name'] = $item['name'];
                    $cart->price = $item['price'];
                    $cart->amount = $item['attributes']['amount'];
                    $cart->type = $item['attributes']['type'];
                    $cart->service = $item['attributes']['service'];
                    $cart->platform = $item['attributes']['platform'];
                    $cart->link = $item['attributes']['link'];
                    if ($item['attributes']['service'] == 'comment') {
                        $cart->comments = $item['attributes']['comments'];
                    }
                    $cart->order_id = $order->id;
                    $cart->save();

                    // Log::info('Line API messaging:', $response);
                }

                $message = "📣  ออเดอร์ใหม่จากเว็บ GainLike‼️ \n\n - 📌 ตรวจสอบทันที!";

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

                $user->wallet = $user->wallet - $request->price;
                session('data')[0]->wallet = session('data')[0]->wallet - $request->price;
                $user->save();

                Cart::clear();
                return response()->json(['status' => 'success', 'message' => 'การสั่งซื้อสำเร็จแล้ว สามารถดูประวัติการสั่งซื้อได้ในประวัติการสั่งซื้อ'], 200);
            }
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => $e->getMessage(), 'data' => json_decode($request->items, true)], 400);
        }
    }
}
