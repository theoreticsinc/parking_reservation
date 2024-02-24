<?php

namespace App\Http\Controllers\Frontend;

use Gloudemans\Shoppingcart\Facades\Cart;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
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
use Illuminate\Support\Facades\Mail;
use App\Mail\BookConfirm;

class SlotController extends Controller
{
    
    public function slotHome() {
        //return redirect()->to('https://onlinebooking.parknfly.com.ph/');
        return view('frontend.slot.index');
    }

    public function slotBooking(Request $request){

        $request->flash();
        $startDate = $request->check_in;
        if ($request->check_in >= $request->check_out) {

            $notification = array(
                'message' => 'Check In must not be less than or equal to Check Out',
                'alert-type' => 'error'
            );

            return redirect()->back()->with($notification);
        }
        $record = Slot::where('name', $startDate)->first();
        $avail = $record->is_exit - $record->is_entry;
        $msg = 'Those Dates are not available, Sorry ';
        if ($avail <= 0) {
            $notification = array(
                'message' => $msg,
                'alert-type' => 'error'
            );

            return redirect()->back()->with($notification);
        } else {
            $record->is_entry -= 1;
            try {
                $record->save();
            } catch (\Exception $e) {
                // Handle the exception
                dd($e->getMessage());
            }
        }
        $responseData = [
            'message' => 'Booking Dates Available',
            'is_entry' => $record->is_entry,
            'is_exit' => $record->is_exit,
            'name' =>  $record->name,
            'data' => 'success?',
        ];
        $rates = 475;
        $destination = $request->destination;
        $flightnumber = $request->flightnumber;
        $checkIndate = $request->check_in;
        $checkOutdate = $request->check_out;
        
        $sdate = date('M d, Y',strtotime($request->check_in));
        $edate = date('M d, Y',strtotime($request->check_out));
        
        $date1 = strtotime($sdate);
        $date2 = strtotime($edate);
        $diff = $date2 - $date1;
        $days = floor($diff / (60 * 60 * 24));
        //echo $days;
        $daysparked = $days;
        $totaldue = $days * $rates;
        $downpayment = $totaldue / 2;
        $downpayment = number_format($downpayment, 2, '.', ',');
        $totaldue = number_format($totaldue, 0, '.', ',');
        //echo $totaldue;
        /*
        $alldate = Carbon::create($edate)->subDay();
        $d_period = CarbonPeriod::create($sdate,$alldate);
        $dt_array = [];
        foreach ($d_period as $period) {
           array_push($dt_array, date('Y-m-d', strtotime($period)));
        }
        */
        $slots = 0;
        //$slots = Slot::withCount('slot')->get();
        return view('frontend.slot.booking', compact('slots', 'checkIndate', 'checkOutdate', 'sdate','edate','destination','flightnumber', 'daysparked', 'downpayment', 'totaldue'));

    } // End Method 

    public function postBooking(Request $request) {
        $timezone = 'Asia/Manila';
        $model = new Booking;
        $request->validate([
            'mobileNumber' => ['required', 'regex:/^\+639\d{9}$/'], // Validate as +639xxxxxxxxx
            'email' => ['required', 'email'],
        ]);
    
        //dd($request->all());
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

        $inputData = $request->all();
        
        $firstName = $request->input('firstName');
        $lastName = $request->input('lastName');
        $mobileNumber = $request->input('mobileNumber');
        $email = $request->input('email');
        $confirmEmail = $request->input('confirmEmail');
        $typeOfCar = $request->input('typeOfCar');
        $plateNumber = $request->input('plateNumber');  
        $check_in = $request->input('check_in');
        $check_out = $request->input('check_out');
        $checkIndate = $request->input('checkIndate');
        $checkOutdate = $request->input('checkOutdate');
        $sdate = date('M d, Y',strtotime($check_in));
        $edate = date('M d, Y',strtotime($check_out));
        
        $date1 = strtotime($sdate);
        $date2 = strtotime($edate);
        $diff = $date2 - $date1;
        $days = floor($diff / (60 * 60 * 24));
        //echo $days;
        $daysparked = $days;
        $destination = $request->input('destination');
        $flightnumber = $request->input('flightnumber');
        $payment_status = $request->input('payment_status');
        $downpayment = $request->input('downpayment');
        $total_price = $request->input('total_price');
        $parsedDownpayment = (float) str_replace([',', ' '], '', $downpayment);
        $parsedTotal_price = (float) str_replace([',', ' '], '', $total_price);

        $refNumber = Carbon::now($timezone)->format('ymd');
        
        $formattedINDate = \Carbon\Carbon::parse($check_in)->format('Y-m-d');
        $formattedOUTDate = \Carbon\Carbon::parse($check_out)->format('Y-m-d');
        $inputData['check_in'] = $formattedINDate;
        $inputData['check_out'] = $formattedOUTDate;
        
        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        $randomString = substr(str_shuffle($characters), 0, 10);
        $refNumber =  $refNumber . $randomString;
        $inputData['check_in'] = $formattedINDate;
        
        if ($payment_status == "Awaiting Full") {
            $downpayment = $total_price;
            $parsedDownpayment = $parsedTotal_price;
            $cartItem = Cart::add([
                'id' => '908070',
                'name' => 'Booking Downpayment',
                'qty' => 1,
                'options' => ['color' => $refNumber],                
                'price' => $parsedTotal_price,           
            ]);
        } else {
            
            $cartItem = Cart::add([
                'id' => '908070',
                'name' => 'Booking',
                'qty' => 1,
                'options' => ['color' => $refNumber],
                'price' => $parsedDownpayment,           
            ]);

        }
            $mailData = [
                'refNumber' => $refNumber,
                'firstName' => $firstName,
                'lastName' => $lastName,
                'mobileNumber' => $mobileNumber,
                'booking_date' => now()->timezone($timezone),
                'check_in' => $check_in,
                'check_out' => $check_out,
                'total_days' => $days,
                'total_price' => $total_price,
                'destination' => $destination,
                'flightnumber' => $flightnumber,
                'email' => $email,
                'confirmEmail' => $confirmEmail,
                'typeOfCar' => $typeOfCar,
                'plateNumber' => $plateNumber,
                'payment_status' => $payment_status,
                'downpayment' => $downpayment,
                'total_price' => $total_price,
                // Add other data as needed
            ];
            
            //
            //***Mail::to('customer_care@parknfly.com.ph')->send(new BookConfirm($mailData));
            //Mail::to('theoreticsinc@gmail.com')->send(new BookConfirm($mailData));
            //Mail::to('theoreticsinc@gmail.com')->send(new GeneralInquiry($request->all()));
    
           //return redirect()->back()->with('success', 'Inquiry sent successfully!');
           
        $modelData = [
            'refNumber' => $refNumber,
            'firstName' => $firstName,
            'lastName' => $lastName,
            'mobileNumber' => $mobileNumber,
            'booking_date' => now()->timezone($timezone),
            'check_in' => $checkIndate,
            'check_out' => $checkOutdate,
            'total_days' => $days,
            'total_price' => $total_price,
            'destination' => $destination,
            'flightnumber' => $flightnumber,
            'email' => $email,
            'confirmEmail' => $confirmEmail,
            'typeOfCar' => $typeOfCar,
            'plateNumber' => $plateNumber,
            'payment_status' => $payment_status,
            'downpayment' => $parsedDownpayment,
            'total_price' => $parsedTotal_price,
            
        ];

        
        $model->fill($modelData);
        
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

