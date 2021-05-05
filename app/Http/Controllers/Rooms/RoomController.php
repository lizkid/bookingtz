<?php

namespace App\Http\Controllers\Rooms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    //
    public function index()
    {
        return view('hotelView.rooms.index');
    }
}
