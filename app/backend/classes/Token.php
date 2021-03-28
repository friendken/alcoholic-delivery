<?php

class Token
{
    public static function generate($is_reuse = false)
    {
        if (!$is_reuse)
        {
            return Session::put(Config::get('session/token_name'), Hash::make(uniqid()));
        }

        return Session::get(Config::get('session/token_name'));
    }

    public static function check($token)
    {
        $tokenName = Config::get('session/token_name');
        if(Session::exists($tokenName) && $token === Session::get($tokenName))
        {
            return true;
        }

        return false;
    }
}