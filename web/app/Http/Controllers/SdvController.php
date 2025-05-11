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
        $phone = env('phone');
        $norek = env('norek');
        $namerek = env('namerek');
       
        return view('payment', ['phone' => $phone, 'norek' => $norek, 'namerek' => $namerek]);
    }
    
}
