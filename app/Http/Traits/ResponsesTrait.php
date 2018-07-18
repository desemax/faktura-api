<?php
/**
 * Created by PhpStorm.
 * User: richard
 * Date: 7/18/18
 * Time: 6:40 PM
 */

namespace App\Http\Traits;

trait ResponsesTrait
{
    public function success(array $data, $statusCode = 200)
    {
        return response()->json([
            'data' => $data,
        ], $statusCode);
    }

    public function error($message = 'An unexpected error occurred.', $statusCode = 500)
    {
        return response()->json([
            'message' => $message,
        ], $statusCode);
    }
}