<?php

namespace App\Http\Controllers\HotelWeb;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    //
    public function index()
    {
        return view('hotelView.gallery.index');
    }
}
