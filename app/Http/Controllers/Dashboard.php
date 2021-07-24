<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class Dashboard extends Controller
{
    public function index()
    {
        // print_r(auth()->user()->username);
        return view('dashboard.index');
    }
}
