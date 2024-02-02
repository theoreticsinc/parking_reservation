<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function showForm()
    {
        return view('popup-form');
    }

    public function submitForm(Request $request)
    {
        // Handle form submission logic here
        // You can use $request to retrieve form data
        return response()->json(['message' => 'Form submitted successfully']);
    }
}