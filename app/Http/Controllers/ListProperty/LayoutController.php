<?php

namespace App\Http\Controllers\ListProperty;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LayoutController extends Controller
{
    //
    public function index($categoryId, $starTypeId)
    {
        return view('listProperty.propertyRegistration.layout', compact('categoryId', 'starTypeId'));
    }
}
