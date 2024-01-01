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

class SlotController extends Controller
{

    public function SlotSearch(Request $request){

        $request->flash();

        if ($request->check_in >= $request->check_out) {

            $notification = array(
                'message' => 'Check In must not be less than or equal to Check Out',
                'alert-type' => 'error'
            );

            return redirect()->back()->with($notification);
        }

        $sdate = date('Y-m-d',strtotime($request->check_in));
        $edate = date('Y-m-d',strtotime($request->check_out));
        $alldate = Carbon::create($edate)->subDay();
        $d_period = CarbonPeriod::create($sdate,$alldate);
        $dt_array = [];
        foreach ($d_period as $period) {
           array_push($dt_array, date('Y-m-d', strtotime($period)));
        }

        $slots = Slot::withCount('slot')->get();
        //echo $slots;
        return view('frontend.slot.index', compact('slots', 'sdate','edate'));

    } // End Method 

}

