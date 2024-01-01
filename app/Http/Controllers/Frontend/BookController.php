<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class BookController extends Controller
{
    public function BookSearch(){
        return view('frontend.book');
     } //End Method

     public function BookReserve(){
        return view('frontend.registered');
     } //End Method

}

