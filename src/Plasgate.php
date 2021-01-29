<?php

namespace Asorasoft\Plasgate;

use GuzzleHttp\Client;

class Plasgate
{
    public $client;

    public $option;

    public $end_point;

    public $verify;

    public function __construct()
    {
        $this->option = [
            'gw-username' => config('plasgate.username'),
            'gw-password' => config('plasgate.password'),
            'gw-from' => config('plasgate.sender_name'),
        ];
        $this->end_point = config('plasgate.end_point');
        $this->verify = config('plasgate.ssl_certificate');
        $this->client = new Client();
    }

    public function send($gwTo, $gwText)
    {
        try {
            return $this->client->request('POST', $this->end_point, [
                'form_params' => array_merge($this->option, [
                    'gw-to' => $gwTo,
                    'gw-text' => $gwText,
                ]),
                'verify' => $this->verify
            ]);
        } catch (\Exception $exception) {
            return $exception;
        }
    }
}
