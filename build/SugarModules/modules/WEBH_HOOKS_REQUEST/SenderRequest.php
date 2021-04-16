<?php

/**
 * Created by PhpStorm.
 * User: alex
 * Date: 11.04.21
 * Time: 12:40
 */
class SenderRequest
{
    public $curl;

    public function __construct($url, $fields, $type_request)
    {
        $this->curl_init($url, $fields, $type_request);
    }

    public function sendRequest(): array
    {
        $response = curl_exec($this->curl);
        if ($response === false) {
            return ['status' => 'error', 'result' => curl_error($this->curl)];
        }
        curl_close($this->curl);

        return ['status' => 'ok', 'result' => $response];
    }

    public function curl_init($url, $fields, $type_request)
    {
        $this->curl = curl_init();

        if ($type_request == 'json') {
            $headers = array(
                'Content-Type: application/json',
            );
        } else {
            $headers = array(
                'Content-Type: multipart/form-data',
            );
        }
        curl_setopt_array($this->curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => $fields,
            CURLOPT_HTTPHEADER => $headers,
        ));
    }
}