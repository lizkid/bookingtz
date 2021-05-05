<?php

namespace App\Http\Controllers\ListProperty;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ListPropertyController extends Controller
{
    //
    public function index()
    {
        return view('listProperty.index');

    }
}
