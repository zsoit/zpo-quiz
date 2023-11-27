<?php

class DataController
{
    public static function fetchGET($GET)
    {
        return $_GET[$GET] ?? null;
    }

    public static function fetchPOST($POST)
    {
        return $_POST[$POST] ?? null;
    }

    public static function randomNumerFromArray($array)
    {
            $number_random= null;
            if (!empty($array)) {
                $index_random = array_rand($array);
                $number_random= $array[$index_random];
            }
            return $number_random;
    }
}