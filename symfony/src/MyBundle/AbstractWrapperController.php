<?php

namespace App\MyBundle;

class AbstractWrapperController
{
    public static function camelToSnakeForClass()
    {
        preg_match_all('/\w+$/m', get_called_class(), $matches, PREG_SET_ORDER, 0);
        $snake = preg_replace('/[A-Z]/', '_$0', end($matches)[0]);
        return ltrim(strtolower($snake), '_');
    }

}