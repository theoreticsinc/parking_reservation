<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Booking;
use Illuminate\Support\Facades\Hash;
use App\Models\BookArea;
use Intervention\Image\Facades\Image;
use Carbon\Carbon;
use Carbon\CarbonPeriod;
use App\Models\Slot;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class SlotController extends Controller
{
    
    public function slotHome() {
        //return redirect()->to('https://onlinebooking.parknfly.com.ph/');
        return view('frontend.slot.index');
    }

    public function slotBooking(Request $request){

        $request->flash();

        if ($request->check_in >= $request->check_out) {

            $notification = array(
                'message' => 'Check In must not be less than or equal to Check Out',
                'alert-type' => 'error'
            );

            return redirect()->back()->with($notification);
        }
        $rates = 475;
        $destination = $request->destination;
        $flightnumber = $request->flightnumber;
        $sdate = date('Y-m-d',strtotime($request->check_in));
        $edate = date('Y-m-d',strtotime($request->check_out));
        
        $date1 = strtotime($sdate);
        $date2 = strtotime($edate);
        $diff = $date2 - $date1;
        $days = floor($diff / (60 * 60 * 24));
        //echo $days;
        $daysparked = $days;
        $totaldue = $days * $rates;
        //echo $totaldue;
        $alldate = Carbon::create($edate)->subDay();
        $d_period = CarbonPeriod::create($sdate,$alldate);
        $dt_array = [];
        foreach ($d_period as $period) {
           array_push($dt_array, date('Y-m-d', strtotime($period)));
        }

        $slots = Slot::withCount('slot')->get();
        return view('frontend.slot.booking', compact('slots','sdate','edate','destination','flightnumber', 'daysparked', 'totaldue'));

    } // End Method 

    public function postBooking(Request $request) {
        
        $model = new Booking;
        $data = [
            'check_in' => 'value', // Add any data needed for the email view
            'check_out' => 'value',
            'name' => 'value',
            'email' => 'value',
            'phone' => 'value',
        ];
        /*
        $validatedData = $request->validate([
            'check_in' => 'required',
            'check_out' => 'required',
            'destination' => 'required',
            'flightnumber' => 'required',
            'firstName' => 'required',
            'lastName' => 'required',
            'mobileNumber' => 'required',
            'typeOfCar' => 'required',
            'plateNumber' => 'required',
            'email' => 'required',
            'confirmEmail' => 'required',
            
        ]);*/
        $model->fill($request->all());
        
        // Create a new instance of the model
        

        // Fill the model with the validated data
        //$model->fill($validatedData);
        //$model->check_in = 'value1';
        //$model->check_out = 'value2';
        //$model->destination = 'value3';

        // Save the model to the database
        $model->save();
// Log or dd/dump the model data for debugging
// \Log::info('Model saved:', ['data' => $model->toArray()]);
// or
//dd($model->toArray());

        $totaldue = "50000";
        // Redirect or respond as needed
        //return redirect('/')->with('success', 'Record created successfully!');
        //return "tested";
        return view('frontend.slot.postbooking', compact('totaldue'));
    }
    
    public function storeZZZ(Request $request)
    {
        // Create a new instance of the model
        $model = new YourModelName;

        // Fill the model with the request data
        $model->fill($request->all());

        // Save the model data to the session
        $request->session()->put('pending_model', $model->toArray());

        // Redirect to a confirmation page or perform additional actions
        return redirect('/confirmation')->with('success', 'Data saved to session. Confirm and save to database.');
    }

    // Add a method for confirmation, if needed
    public function confirm()
    {
        // Retrieve the pending model data from the session
        $pendingModelData = session('pending_model');

        // Use this data to display a confirmation page or take further action
        // ...

        return view('confirmation', compact('pendingModelData'));
    }

    // Add a method to save to the database
    public function saveToDatabase()
    {
        // Retrieve the pending model data from the session
        $pendingModelData = session('pending_model');

        // Create a new instance of the model
        $model = new YourModelName;

        // Fill the model with the data from the session
        $model->fill($pendingModelData);

        // Save the model to the database
        $model->save();

        // Clear the session data
        session()->forget('pending_model');

        // Redirect or respond as needed
        return redirect('/')->with('success', 'Record created successfully!');
    }

    
    public function store(Request $request)
    {
        $title = $request->input('check_in');
        $content = $request->input('amount');

        // Process the data, e.g., save to the database
        echo $title . $content;
        //return redirect()->route('posts.index'); // Redirect to a different page after processing
    }

}

