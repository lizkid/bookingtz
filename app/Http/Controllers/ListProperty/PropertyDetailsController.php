<?php

namespace App\Http\Controllers\ListProperty;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PropertyDetailsController extends Controller
{
    //
    public function index($categoryId, $starTypeId)
    {
        $categories = Http::get(bookingApi().'/hotel/property-categories?token='.token());

        $categories = json_decode($categories);

//        dd($categories);

        $countries = Http::get(bookingApi().'/location/countries?token='.token());

        $countries = json_decode($countries);

        return view('listProperty.propertyRegistration.propertyDetails', compact('categories', 'countries', 'categoryId', 'starTypeId'));
    }

    public function save(Request $request)
    {
        $api = bookingApi().'/hotel/save-location?token='.token();

        $countrId = $request->country_id;
        $sub_country_id = $request->sub_country_id;
        $region_id = $request->region_id;
        $sa1 = $request->sa1;
        $sa2 = $request->sa2;
        $zip_code = $request->zip_code;
        $star = $request->star;
        $category = $request->category;
        $createdById = $request->createdById;

        $result = Http::post($api, [
            'hotelId'=>'1',
           'countryId'=>$countrId,
            'regionId'=>$region_id,
            'streetAddress1'=>$sa1,
            'zipCode'=>$zip_code,
            'starTypeId'=>$star,
            'contactPhone'=>'0766557778',
            'contactFullName'=>'Juma Chagga',
            'city'=>'Dar es salaam',
            'propertyCategoryId'=>$category,
            'createdById'=>'2',
            'streetAddress2'=>$sa2,

        ]);

        $result = json_decode($result);

        dd($result);
    }
}
