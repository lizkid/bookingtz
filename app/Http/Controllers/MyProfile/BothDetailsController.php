<?php

namespace App\Http\Controllers\MyProfile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BothDetailsController extends Controller
{
    //
    public function index()
    {
        return view('myProfile.both.index');
    }
}
