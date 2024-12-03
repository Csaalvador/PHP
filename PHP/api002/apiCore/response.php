<?php

class Response
{
    public static function json($status = 200, $message = 'success', $data = null)
    {
        header('Content-Type: application/json');

        if(!API_IS_ACTIVE){
            return json_encode([
                'status' => 400,
                'message' => 'Api is not running',
                'data' => null,
                'api_version' => API_VERSION,
                'time_response' => time(),
                'dateTimeResponse' => date('Y-m-d H:i:s')
            ]);
        }

        return json_encode([
            'status' => $status,
                'message' => $message,
                'data' => $data,
                'api_version' => API_VERSION,
                'time_response' => time(),
                'dateTimeResponse' => date('Y-m-d H:i:s')
        ]);
    }
}