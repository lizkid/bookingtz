<?php

namespace App\Http\Controllers\ListProperty;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;

class AuthPropertyController extends Controller
{
    //
    public function index()
    {
        return view('listProperty.login.index');
    }


    public function login(Request $request)
    {
        $api = bookingApi().'/merchant/login';

        $email = $request->email;
        $password = $request->password;

        $result = Http::post($api, [
            'email'=>$email,
            'password'=>$password

        ]);

        $result = json_decode($result);
//
//        dd($result);

        if (isset($result->result_code) && $result->result_code == '01')
        {
            $error = json_encode($result->message);

            Session::flash('alert-danger', ''.$error);

            return back();
        }

            $cookie = cookie('token', $result->access_token, $result->expires_in/60);

            Session::flash('alert-success', ''.$result->message);

        Session::flash('jina', ''.$email);

        return redirect('list-your-property/propertyCategories')->withCookie($cookie);

    }


    public function logout()
    {
        $logout = Http::get(bookingApi().'/merchant/logout?token='.token());

        $result = json_decode($logout);

        dd($result);

        if ($result)

        {
            $cookie = Cookie::forget('token');

//            Session::flash('alert-info',''.$result->message);

            return redirect('/list-your-property')->withCookie($cookie);
        }

        else

        {
//            Session::flash('alert-danger',''.$result->message);

            return back();
        }
    }
}
