<?php

namespace App\Http\Controllers\Admin\Booking;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminBookingController extends Controller
{
    //
    public function index()
    {
        return view('admin.booking.requests');
    }

    public function cancelledBookings()
    {
        return view('admin.booking.cancelled');
    }

    public function viewBookings()
    {
        return view('admin.booking.view');
    }
}
