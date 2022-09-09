<?php

namespace App\Traits;

use Response;

trait ApiResponse
{
    /**
     * @param $result
     * @param $message
     * @param $code
     * @return mixed
     */
    public function sendResponse($result, $message, $code): mixed
    {
        return Response::json(self::makeResponse($message, $result), $code);
    }

    /**
     * @param $error
     * @param int $code
     * @param array $data
     * @return mixed
     */
    public function sendError($error, int $code = 400, array $data = []): mixed
    {
        return Response::json(self::makeError($error, $data), $code);
    }

    /**
     * @param string $message
     * @param mixed $data
     *
     * @return array
     */
    public static function makeResponse(string $message, mixed $data): array
    {
        return [
            'success' => true,
            'data' => $data,
            'message' => $message,
        ];
    }

    /**
     * @param string $message
     * @param array $data
     *
     * @return array
     */
    public static function makeError(string $message, array $data = []): array
    {
        $res = [
            'success' => false,
            'message' => $message,
        ];

        if (!empty($data)) {
            $res['data'] = $data;
        }

        return $res;
    }
}
