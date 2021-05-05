<?php

namespace App\Http\Controllers\ListProperty;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PaymentPropertyController extends Controller
{
    //
    public function index($categoryId, $starTypeId)
    {
        return view('listProperty.propertyRegistration.payment', compact('categoryId', 'starTypeId'));
    }
}
