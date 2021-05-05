<?php

namespace App\Http\Controllers\Hotels;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HotelsController extends Controller
{
    //
    public function index()
    {
        return view('hotels.index');

    }

    public function booking()
    {
        return view('hotels.booking');
    }

    public function payment()
    {
        return view('hotels.payment');
    }
}
