<?php

if (!function_exists('message_error')) {
    function message_error ($message, $statusCode = 404)
    {
        return response()->json([
            'data' => null,
            'message' => $message
        ], $statusCode);
    }
}
