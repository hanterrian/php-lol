<?php

use Bayfront\ArrayHelpers\Arr;
use Core\Application;

if (!function_exists('app')) {
    function app(): Application
    {
        return Application::getInstance();
    }
}

if (!function_exists('env')) {
    function env($name, $default = null): mixed
    {
//        dd(app()->getConfig()->getConfig());
//        return Arr::get(app()->getConfig()->getConfig(), $name, $default);
    }
}
