<?php

namespace App\Http\Controllers\Admin\Management;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RoomAmenityController extends Controller
{
    //
    public function index()
    {
        return view('admin.management.amenities.index');
    }
}
