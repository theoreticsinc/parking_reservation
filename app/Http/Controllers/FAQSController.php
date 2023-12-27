<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FAQSController extends Controller
{
    public function index()
    {
        return view('faqs');
    }
}
