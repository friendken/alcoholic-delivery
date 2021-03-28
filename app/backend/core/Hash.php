<?php

class Hash
{
    public static function make($string)
    {
        return hash(Config::get('hash/algo_name'), $string);
    }

    public static function unique()
    {
        return Hash::make(uniqid());
    }
}
