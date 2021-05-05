<?php

namespace App\Http\Controllers\ListProperty;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

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

        $hotelId = $request->hotel_id;
        $countrId = $request->country_id;
        $sub_country_id = $request->sub_country_id;
        $region_id = $request->region_id;
        $sa1 = $request->sa1;
        $sa2 = $request->sa2;
        $zip_code = $request->zip_code;
        $star = $request->star;
        $category = $request->category;
        $createdById = $request->CreatedByID;
        $contactFName = $request->contactFName;
        $contactPhone = $request->contactPhone;

        $result = Http::post($api, [
            'hotelId'=>$hotelId,
           'countryId'=>$countrId,
            'regionId'=>$region_id,
            'streetAddress1'=>$sa1,
            'zipCode'=>$zip_code,
            'starTypeId'=>$star,
            'contactPhone'=>$contactPhone,
            'contactFullName'=>$contactFName,
            'city'=>'Dar es salaam',
            'propertyCategoryId'=>$category,
            'createdById'=>$createdById,
            'streetAddress2'=>$sa2,

        ]);

        $result = json_decode($result);

//        dd($result);

        if ($result->resultcode == '01')
        {

            $error = json_encode($result->message);

            Session::flash('alert-danger', ''.$error);

            return back()->withInput();
        }

        else
        {
            Session::flash('alert-success', ''.$result->result);

            return redirect('list-your-property/property-layout/3/3', );

            Session::forget('hotelId', ''.$hotelId);

            Session::forget('CreatedByID', ''.$createdById);
        }
    }
}
