<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class Dashboard extends Controller
{
    public function __construct()
    {
        // if (auth()->user()) {
        //     Redirect::to('dashboard')->send();
        // } else {
        //     Redirect::to('login')->send();
        // }
    }
    //
    public function index()
    {
        print_r(auth()->user()->username);
        return view('dashboard.index');
    }
}
