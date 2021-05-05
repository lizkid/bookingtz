<?php

namespace App\Http\Controllers\TrendingHotels;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TrendingHotelsController extends Controller
{
    //
    public function index()
    {
        return view('trendingHotels.index');
    }
}
