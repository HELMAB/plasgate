<?php

return [
    'username' => env('PLASGATE_USERNAME', null),
    'password' => env('PLASGATE_PASSWORD', null),
    'sender_name' => env('PLASGATE_SENDER_NAME', null),
    'ssl_certificate' => env('PLASGATE_SSL_GERTIFICATE', false),
    'end_point' => env('PLASGATE_END_POINT', 'https://tool.plasgate.com:11041/cgi-bin/sendsms'),
];
