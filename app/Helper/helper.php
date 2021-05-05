<?php

use Illuminate\Support\Facades\Config;

function bookingApi()
{
    return  Config::get('api_url.booking_api');
}


function token(){

    return  \Illuminate\Support\Facades\Request::cookie('token');
}


?>


