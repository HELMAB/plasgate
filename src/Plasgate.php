<?php

namespace Asorasoft\Plasgate;

class Plasgate
{
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
    }

    public function send($gwTo, $gwText)
    {

    }
}
