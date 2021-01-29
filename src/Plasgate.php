<?php

namespace Asorasoft\Plasgate;

use GuzzleHttp\Client;

class Plasgate
{
    public $token;
    public $senderId;
    public $base_url;
    public $client;

    public function __construct()
    {
        $this->token = config('plasgate.token');
        $this->senderId = config('plasgate.sender_id');
        $this->base_url = config('plasgate.base_url');
        $this->client = new Client();
    }

    public function send($phone, $text)
    {
        try {
            $token = $this->token;
            $senderID = $this->senderId;
            $baseUrl = $this->base_url;
            return $this->client->request("GET", "$baseUrl?token=$token&phone=$phone&senderID=$senderID&text=$text", [
                "headers" => [
                    "Content-Type" => "application/json"
                ]
            ]);
        } catch (\Exception $exception) {
            return $exception;
        }
    }
}
