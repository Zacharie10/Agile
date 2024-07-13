<?php

use Illuminate\Support\Facades\Request;

if (!function_exists('is_active_class')) {
    function is_active_class($route, $output = "active")
    {
        return Request::routeIs($route) ? $output : '';
    }
}
