<?php

namespace App\Http\Controllers\Admin\HotelDetails;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HotelDetailsController extends Controller
{
    public function index()
    {
        return view('admin.hotel.index');
    }

    public function create()
    {
        return view('admin.hotel.create');
    }
}
