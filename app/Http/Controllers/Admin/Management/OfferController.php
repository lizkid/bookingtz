<?php

namespace App\Http\Controllers\Admin\Management;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    //
    public function index()
    {
        return view('admin.management.offers.index');
    }

    public function create()
    {
        return view('admin.management.offers.create');
    }
}
