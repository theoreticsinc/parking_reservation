<?php
// app/Http/Controllers/RepairPriceController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RepairPriceController extends Controller
{
    public function index()
    {
        return view('RepairPrice');
    }
}
