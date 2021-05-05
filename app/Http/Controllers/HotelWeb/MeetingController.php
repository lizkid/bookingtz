<?php

namespace App\Http\Controllers\HotelWeb;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MeetingController extends Controller
{
    public function index()
    {
        return view('hotelView.meetings.index');
    }
}
