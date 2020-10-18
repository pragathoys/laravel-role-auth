<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('roles:Admin');
    }

    public function home()
    {
        return view('admin.home');
    }
}
