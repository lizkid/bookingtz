<?php

namespace App\Http\Controllers\Admin\Management;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index()
    {
        return view('admin.management.users.index');
    }

    public function create()
    {
        return view('admin.management.users.create');
    }
}
