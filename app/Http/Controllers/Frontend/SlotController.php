<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
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
        $totaldue = "50000";
        return view('frontend.slot.postbooking', compact('totaldue'));
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

