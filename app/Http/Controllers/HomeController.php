<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use App\Mail\GeneralInquiry;

use App\Models\CartItem;
use App\Models\Booking;
use App\Models\Slot;
use App\Models\Product;  // Update this import statement

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function email(Request $request)
    {
        // Validate the form data
        $request->validate([
            'fullname' => 'required|string',
            'mobile' => 'required',
            'message' => 'required|string',
        ]);

        // Send email
        //
        Mail::to('customer_care@parknfly.com.ph')->send(new GeneralInquiry($request->all()));
        //Mail::to('theoreticsinc@gmail.com')->send(new GeneralInquiry($request->all()));

        return redirect()->back()->with('success', 'Inquiry sent successfully!');
    }

    public function calendar() {
        $event = "Hoy World";
        $id = 2;
        $limit = 30;
        $slots = Slot::limit($limit)->get();
        
        //dd($slots);
        return view('calendar', compact('slots'));
    }

    public function modifyCalendar(Request $request) {
        // Get data from the request
        $eventId = $request->input('eventId');
        $eventTitle = $request->input('eventTitle');

        $firstTwoLetters = substr($eventId, 0, 2);
        $comparisonResult = strcmp($firstTwoLetters, "EN");

        if ($comparisonResult == 0) {
            $startDate = str_replace('EN', '', $eventId);
        } else {
            $startDate = str_replace('EX', '', $eventId);
        }
            
        
        // Perform any modifications or business logic here

        // Return a response
        
        $id = 12;
        //$name = "2024-01-29";
        //$record = Slot::find($id);
        $record = Slot::where('name', $startDate)->first();
        //return response()->json(['message' => $comparisonResult, 'eventId' => $eventId, 'eventTitle' => $eventTitle, 'startDate' => $startDate]);
    
        if (!$record) {
            return response()->json(['message' => 'Record not found', 'eventId' => $eventId, 'eventTitle' => $eventTitle, 'startDate' => $startDate]);
        } else {
            //return response()->json(['message' => $record->is_entry, 'eventId' => $eventId, 'eventTitle' => $eventTitle, 'startDate' => $startDate]);
        
            // Subtract one digit from the column
            if ($comparisonResult == 0) {
                $record->is_entry -= 1;
                //$eventId.concat("EN", $eventId);
                $eventTitle = $eventTitle - 1;
            } else {
                $record->is_exit -= 1;
                //$eventId.concat("EX", $eventId);
                $eventTitle = $eventTitle + 1;
            }
            
            // Save the updated record
            try {
                $record->save();
            } catch (\Exception $e) {
                // Handle the exception
                dd($e->getMessage());
            }
        }
        //return response()->json(['message' => 'RECORD Saved Event modified successfully', 'eventId' => $eventId, 'eventTitle' => $eventTitle, 'startDate' => $startDate]);
    
        $responseData = [
            'message' => 'Event modified successfully',
            'eventId' => $eventId,
            'eventTitle' => $eventTitle,
            'startDate' => $startDate,
            'data' => 'success?',
        ];
        //return response()->json(['message' => 'Event modified successfully', 'eventId' => $eventId, 'eventTitle' => $eventTitle, 'startDate' => $startDate]);
    
        return response()->json($responseData);
    }
    

}
