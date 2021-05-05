<?php

namespace App\Http\Controllers\ListProperty;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HelperController extends Controller
{
    //
    public function getSub($CountryID)
    {

        $sub = bookingApi().'/location/sub-countries-location/'.$CountryID.'';

        $result = Http::get($sub, [
           'token'=>token(),
        ]);


        $result2 = json_decode($result);

//        dd($result2);

        return response($result2->countries);
    }

    public function getReg($CountryID, $SubCountryID )
    {
        $reg = Http::get(bookingApi().'/location/regions-by-sub-country/'.$CountryID.'/'.$SubCountryID.'?token='.token());

        $reg = json_decode($reg);

        return response()->json($reg->regions);
    }
}
