<?php

namespace App\Http\Controllers\Myprofile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TouringDetailsController extends Controller
{
    //
    public function index()
    {
        return view('myProfile.touring-information.index');
    }

}
