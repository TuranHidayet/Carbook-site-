<?php

namespace Core;

class Route
{
    private array $route = array();

    public static function get($uri, $method)
    {
        if(gettype($method) === "string"){
            $res = Helper::explodeController($method);
        }
    }
}