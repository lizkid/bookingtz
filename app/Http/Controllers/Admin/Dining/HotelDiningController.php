<?php

namespace App\Http\Controllers\Admin\Dining;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HotelDiningController extends Controller
{
    //
    public function index()
    {
        return view('admin.dining.index');

    }

    public function create()
    {
        return view('admin.dining.create');
    }
}
