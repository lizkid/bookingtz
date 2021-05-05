<?php

namespace App\Http\Controllers\HotelWeb;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookHotelController extends Controller
{
    //
    public function index()
    {
        return view('hotelView.booking.index');
    }

    public function searchedRoom()
    {
        return view('hotelView.booking.searchedRoom');
    }

    public function book()
    {
        return view('hotelView.booking.payment');
    }
}
