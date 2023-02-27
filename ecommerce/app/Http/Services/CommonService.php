<?php

namespace App\Http\Services;

class CommonService
{
    public static function arrFilter($arr, $type = '')
    {
        switch ($type) {
            case 1:
                $data = array_filter($arr);
                break;
            default:
                $data = array_values(array_filter($arr));
        }

        return $data;
    }

    public static function jsonEncode($arr)
    {
        return json_encode($arr, JSON_UNESCAPED_UNICODE);
    }

    public static function jsonDecode($str)
    {
        return json_decode($str, true);
    }
}
