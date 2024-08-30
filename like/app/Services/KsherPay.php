<?php

namespace App\Services;

use Exception;
use Illuminate\Support\Facades\Log;

class KsherPay
{
    public $time;
    public $appid; // ksher appid
    public $privatekey; // 私钥
    public $pubkey; // ksher 公钥
    public $version; // SDK 版本
    public $pay_domain;
    public $gateway_domain;

    public function __construct($appid = '', $privatekey = '', $version = '3.0.0')
    {
        $this->time = date("YmdHis", time());
        $this->appid = $appid;
        $this->privatekey = $privatekey;
        $this->version = $version;
        $this->pay_domain = 'https://api.mch.ksher.net/KsherPay';
        $this->gateway_domain = 'https://gateway.ksher.com/api';

        $this->pubkey = <<<EOD
-----BEGIN PUBLIC KEY-----
MFwwDQYJKoZIhvcNAQEBBQADSwAwSAJBAL7955OCuN4I8eYNL/mixZWIXIgCvIVE
ivlxqdpiHPcOLdQ2RPSx/pORpsUu/E9wz0mYS2PY7hNc2mBgBOQT+wUCAwEAAQ==
-----END PUBLIC KEY-----
EOD;
    }

    public function gateway_pay($data)
    {
        // Log the data being passed to the gateway_pay method
        Log::info('Data passed to gateway_pay:', $data);

        $data['appid'] = $this->appid;
        $data['nonce_str'] = $this->generate_nonce_str();
        $data['time_stamp'] = $this->time;
        $response = $this->_request($this->gateway_domain . '/gateway_pay', $data);
        return $response;
    }

    public function generate_nonce_str($len = 16)
    {
        $nonce_str = "";
        $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";

        for ($i = 0; $i < $len; $i++) {
            $nonce_str .= $chars[mt_rand(0, strlen($chars) - 1)];
        }
        return $nonce_str;
    }

    private function _request($url, $data = array())
    {
        try {
            $data['sign'] = $this->ksher_sign($data);
            $queryData = http_build_query($data);

            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $queryData);
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                'Content-Type: application/x-www-form-urlencoded'
            ));
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
            $output = curl_exec($ch);

            if ($output !== false) {
                $response_array = json_decode($output, true);
                if ($response_array['code'] == 0) {
                    if (!$this->verify_ksher_sign($response_array['data'], $response_array['sign'])) {
                        $temp = array(
                            "code" => 0,
                            "data" => array(
                                "err_code" => "VERIFY_KSHER_SIGN_FAIL",
                                "err_msg" => "verify signature failed",
                                "result" => "FAIL"
                            ),
                            "msg" => "ok",
                            "sign" => "",
                            "status_code" => "",
                            "status_msg" => "",
                            "time_stamp" => $this->time,
                            "version" => $this->version
                        );
                        return json_encode($temp);
                    }
                }
            }
            curl_close($ch);
            return $output;
        } catch (Exception $e) {
            Log::error('Curl error: ' . $e->getMessage());
            return false;
        }
    }

    public function ksher_sign($data)
    {
        $message = $this->paramData($data);
        $private_key = openssl_get_privatekey($this->privatekey);
        openssl_sign($message, $encoded_sign, $private_key, OPENSSL_ALGO_MD5);
        openssl_free_key($private_key);
        $encoded_sign = bin2hex($encoded_sign);
        return $encoded_sign;
    }

    private function verify_ksher_sign($data, $sign)
    {
        $sign = pack("H*", $sign);
        $message = $this->paramData($data);
        $res = openssl_get_publickey($this->pubkey);
        $result = openssl_verify($message, $sign, $res, OPENSSL_ALGO_MD5);
        openssl_free_key($res);
        return $result;
    }

    private function paramData($data)
    {
        ksort($data);
        $message = '';
        foreach ($data as $key => $value) {
            // Handle array conversion issue
            if (is_array($value)) {
                $message .= $key . '=' . json_encode($value);
            } else {
                $message .= $key . '=' . $value;
            }
        }
        $message = mb_convert_encoding($message, "UTF-8");
        return $message;
    }

    public function gateway_order_query($data)
    {
        // Log the data being passed to the gateway_order_query method
        Log::info('Data passed to gateway_order_query:', $data);

        $data['appid'] = $this->appid;
        $data['nonce_str'] = $this->generate_nonce_str();
        $data['time_stamp'] = $this->time;

        // Send the request to the Ksher gateway
        $response = $this->_request($this->gateway_domain . '/gateway_order_query', $data);

        return $response;
    }
}
