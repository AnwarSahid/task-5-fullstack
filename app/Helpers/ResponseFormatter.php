<?php

namespace App\Helpers;

class ResponseFormatter
{
    public static function format($status, $message, $code)
    {
        return [
            'success'   => $status,
            'status'    => $code,
            'message'   => $message,
        ];
    }

    public static function success($message = 'Successfully', $data = [], $code = 200)
    {
        $respon = self::format(true, $message,  $code);
        $respon['data'] = $data;

        return response()->json($respon, $code);
    }

    public static function created($message = 'Successfully', $data = [], $code = 201)
    {
        $respon = self::format(true, $message,  $code);
        $respon['data'] = $data;

        return response()->json($respon, $code);
    }

    public static function error($message = 'Failed', $data = [], $code = 400)
    {
        $respon = self::format(false, $message,  $code);
        $respon['error'] = $data;
        return response()->json($respon, $code);
    }

    public static function unauthorized($message = 'Unauthorized', $data = [], $code = 401)
    {
        $respon = self::format(false, $message,  $code);
        $respon['error'] = $data;

        return response()->json($respon, $code);
    }
}
