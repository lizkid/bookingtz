<?php

namespace App\Http\Controllers\Admin\Management;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BedController extends Controller
{
    //
    public function index()
    {
        return view('admin.management.bed.index');
    }
}
