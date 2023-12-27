<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VehicleRepairController extends Controller
{
    public function index()
    {
        return view('vehicle_repair');
    }
}
