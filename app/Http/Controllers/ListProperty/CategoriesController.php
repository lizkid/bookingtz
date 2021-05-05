<?php

namespace App\Http\Controllers\ListProperty;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CategoriesController extends Controller
{
    //

    public function category()
    {
        $category = Http::get(bookingApi().'/hotel/property-categories?token='.token());

        $category = json_decode($category);

//        dd($category);


        return view('listProperty.propertyCategories.index', compact('category'));
    }

    public function star($categoryId)
    {
        $stars = Http::get(bookingApi().'/hotel/star-type?token='.token());

        $stars = json_decode($stars);

//        dd($stars);

        return view('listProperty.propertyCategories.starType', compact('stars', 'categoryId'));
    }
}
