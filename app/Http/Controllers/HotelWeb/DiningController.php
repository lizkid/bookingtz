<?php

namespace App\Http\Controllers\HotelWeb;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DiningController extends Controller
{
    //
    public function index()
    {
        return view('hotelView.dining.index');
    }
}
