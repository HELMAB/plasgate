<?php

return [
    'base_url' => env('PLASGATE_BASE_URL', 'https://api.plasgate.com/send'),
    'token' => env('PLASGATE_TOKEN', null),
    'sender_id' => env('PLASGATE_SENDER_ID', null),
];
