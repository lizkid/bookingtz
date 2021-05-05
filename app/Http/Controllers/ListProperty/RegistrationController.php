<?php

namespace App\Http\Controllers\ListProperty;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class RegistrationController extends Controller
{
    //
    public function index()
    {
        return view('listProperty.registration.index');
    }

    public function store(Request $request)
    {
        $api = bookingApi().'/merchant/register';

        $fname = $request->fname;
        $mname = $request->mname;
        $lname = $request->lname;
        $email = $request->email;
        $phone = $request->phone;
        $password = $request->password;

        $result = Http::post($api, [
           'fName'=>$fname,
           'mName'=>$mname,
            'lName'=>$lname,
            'email'=>$email,
            'phoneNo'=>$phone,
            'password'=>$password

        ]);

        $result = json_decode($result);

//        dd($result);

        if ($result->resultcode == '01')
        {
            $error = json_encode($result->message);

            Session::flash('alert-danger', ''.$error);

            return redirect('list-your-property/user-registration');
        }

        else
        {
            Session::flash('alert-success', ''.$result->message);

            return redirect('list-your-property/login-form');
        }

    }
}
