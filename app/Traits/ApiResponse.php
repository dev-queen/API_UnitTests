<?php

namespace App\Traits;

use Response;

class ApiResponse
{
    public function sendResponse($result, $message, $code)
    {
        return Response::json(self::MakeResponse($message, $result), $code);
    }
}
