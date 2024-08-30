<?php

namespace App\Services;

use App\Services\KsherPay;
use Illuminate\Support\Facades\Http;

class KsherPayService
{
    protected $ksherPay;

    public function __construct()
    {
        $this->ksherPay = new KsherPay(env('KSHER_MERCHANT_ID'), env('KSHER_PRIVATE_KEY'));
    }

    public function createOrder($orderData)
    {
        return $this->ksherPay->gateway_pay($orderData);
    }

    public function createQRCodeOrder($orderData)
    {
        $orderData['appid'] = env('KSHER_MERCHANT_ID');
        $orderData['nonce_str'] = $this->ksherPay->generate_nonce_str();
        $orderData['sign'] = $this->ksherPay->ksher_sign($orderData);

        $response = Http::asForm()->post('https://api.mch.ksher.net/KsherPay/native_pay', $orderData);

        return $response->json();
    }

    public function queryOrder($orderData)
    {
        return $this->ksherPay->gateway_order_query($orderData);
    }
}
