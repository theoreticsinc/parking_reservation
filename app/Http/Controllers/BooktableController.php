<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BooktableController extends Controller
{
    public function index()
    {
        return view('booktable'); // Create this view shortly
    }
}