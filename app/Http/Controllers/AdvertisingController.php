<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdvertisingController extends Controller
{
    public function index()
    {
        return view('advertisingopportunities');
    }
}
