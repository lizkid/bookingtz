<?php

namespace App\Http\Controllers\ListProperty;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AmenityController extends Controller
{
    //
    public function index($categoryId, $starTypeId)
    {
        return view('listProperty.propertyRegistration.amenities', compact('categoryId', 'starTypeId'));
    }
}
