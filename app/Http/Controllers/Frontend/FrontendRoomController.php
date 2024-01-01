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
use App\Models\Room;
use App\Models\RoomNumber;
use App\Models\MultiImage;
use App\Models\Facility;
use App\Models\RoomBookedDate;

class FrontendRoomController extends Controller
{
    public function AllFrontendRoomList(){

        $rooms = Room::latest()->get();
        return view('frontend.room.all_rooms',compact('rooms'));
    } // End Method 

    public function BookingSearch(Request $request){

        $request->flash();

        if ($request->check_in == $request->check_out) {

            $notification = array(
                'message' => 'Check In must not be equal to Check Out',
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

        $posts = Post::withCount('post')->get();

        return view('frontend.post.index', compact('posts'));

        //$room_numbers = RoomNumber::withCount('room_number')->where('status', 'Active')->get();
        //$room_numbers = RoomNumber :: withCount ('roomnumber') -> get();        
        //$room_numbers = RoomNumber::where('status', 'Active')->get();
        //$room_numbers = RoomNumber::all();
        //return view('frontend.room.search_room',compact('room_numbers'));

        //$check_date_booking_ids = RoomBookedDate::whereIn('book_date',$dt_array)->distinct()->pluck('booking_id')->toArray();

        //$rooms = Room::withCount('room_numbers')->where('status',1)->get();

        //echo $rooms;
        //return view('frontend.room.search_room',compact('rooms','check_date_booking_ids'));
    } // End Method 

}

