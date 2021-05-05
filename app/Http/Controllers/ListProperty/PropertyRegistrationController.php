<?php

namespace App\Http\Controllers\ListProperty;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PropertyRegistrationController extends Controller
{
    //
    public function index($categoryId, $starTypeId)
    {
        $categories = Http::get(bookingApi().'/hotel/property-categories?token='.token());

        $categories = json_decode($categories);

//        dd($categories);

        $countries = Http::get(bookingApi().'/location/countries?token='.token());

        $countries = json_decode($countries);

//        dd($countries);

//        dd($stars);
        return view('listProperty.propertyRegistration.index', compact('categories', 'countries', 'categoryId', 'starTypeId'));
    }

    public function save(Request  $request)
    {
        $api = bookingApi().'hotel/save?token='.token();

        $hotel_name = $request->hotel_name;

        $full_name = $request->full_name;

        $m_location = $request->multiple_location;



        $result = Http::post($api, [
           'hotelName'=>$hotel_name,
            'ownerFullName'=>$full_name,
            'hasMultipleLocation'=>$m_location,
            'createdById'=>'1'
        ]);

        $result = json_decode($result);

//        dd($request->all());

        if ($result)
        {
            return "yes";
        }

        else
        {
            return  "no";
        }

    }
}