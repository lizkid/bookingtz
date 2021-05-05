<?php

namespace App\Http\Controllers\MyProfile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookingDetailsController extends Controller
{
    //
    public function index()
    {
        return view('myProfile.booking-information.index');
    }
}
