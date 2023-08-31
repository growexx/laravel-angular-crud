<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function successResponse($data = [], $message = null)
    {
        $response = [
            'success' => true,
            'data' => $data,
            'message' => $message ? $message : trans('api-response-messages.success')
        ];
        return response()->json($response);
    }
}
