<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class SdvController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function payment()
    {
        return view('payment');
    }
    
}
