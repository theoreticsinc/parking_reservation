<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use App\Models\Booking;
use GuzzleHttp\Client as GuzzleClient; // Import Guzzle Client with an alias

class BookingsManagementController extends Controller
{
    /**
     * Display the bookings management view.
     */
    public function manage(): View
    {
        $specificBooking = Booking::find(1);

        //$model = new Booking;
        $data = Booking::paginate(10); // Paginate with 10 items per page
        // Add miscellaneous data to each item in the paginated result
        
        //$data->getCollection()->transform(function ($item) {
        //    $item->miscData = ['key1' => 'value1'];
        //        return $item;
        //});
        $startDate = "2024-02-14 00:02:03";
        $endDate = "2024-02-14 23:02:03";
        
        $allBookings = Booking::all();
        $bookingsInDateRange = Booking::whereBetween('booking_date', [$startDate, $endDate])->get();

        // Dump and die to see the result
        foreach ($bookingsInDateRange as $booking) {
            // Access and use attributes of each booking
            echo "Booking ID: " . $booking->id . ", Description: " . $booking->refNumber . "<br>";
        }

        
        return view('admin.bookings_management', ['data' => $data]);
    }

    public function retrieveLink($id)
    {
        $client = new GuzzleClient();

        try {
            $response = $client->request('GET', 'https://api.paymongo.com/v1/links/' . $id, [
                'headers' => [
                    'accept' => 'application/json',
                    'authorization' => 'Basic c2tfdGVzdF9MYnBxSmR5YnZTNFZqMmRmQ0R2NFdzdlI6',
                ],
            ]);

            $body = $response->getBody();
            $responseData = response()->json(json_decode($body, true));
            //dd($responseData);
            
            $responseString = response()->json($responseData);
            //dd($responseString);
            // Extract JSON data from the response string
            $jsonStartPos = strpos($responseString, '{');
            $jsonEndPos = strrpos($responseString, '}');
            
            $jsonData = substr($responseString, $jsonStartPos, $jsonEndPos - $jsonStartPos + 1);

        
            $decodedData = json_decode($jsonData, true);
            //dd($decodedData);            
            $status = $decodedData['original']['data']['attributes']['status'];
            if ($status === 'unpaid') {          
                return 'The Parker is still unpaid';
            } else {                
                $sourceType = $decodedData['original']['data']['attributes']['payments'][0]['data']['attributes']['source']['type'];
                if ($sourceType === 'gcash') {
                    echo 'The source type is GCash.';
                } else {
                    echo 'The source type is not GCash.';
                }
            }
            return response()->json(json_decode($body, true));
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function retrieveAllPaymentRecords(Request $request) {
        //ParkNFly
        //sk_live_MbZ5HZ5oSStmyeXcS5TQafhM
        //c2tfbGl2ZV9NYlo1SFo1b1NTdG15ZVhjUzVUUWFmaE06
        //Theoretics test Account
        //c2tfdGVzdF9MYnBxSmR5YnZTNFZqMmRmQ0R2NFdzdlI6
        $client = new GuzzleClient();

        try {
            $response = $client->request('GET', 'https://api.paymongo.com/v1/payments?limit=10', [
                'headers' => [
                    'accept' => 'application/json',
                    'authorization' => 'Basic c2tfdGVzdF9MYnBxSmR5YnZTNFZqMmRmQ0R2NFdzdlI6',
                ],
            ]);

            $body = $response->getBody();
            //return response()->json(json_decode($body, true));
        } catch (\Exception $e) {
            //return response()->json(['error' => $e->getMessage()], 500);
        }
        //dd(response()->json(json_decode($body, true)));
        // Access the response data if needed
        $responseData = response()->json(json_decode($body, true));
        //dd($responseData);
        // Your further logic here

        $responseString = response()->json($responseData);
        //dd($responseString);
        // Extract JSON data from the response string
        $jsonStartPos = strpos($responseString, '{');
        $jsonEndPos = strrpos($responseString, '}');
        
        $jsonData = substr($responseString, $jsonStartPos, $jsonEndPos - $jsonStartPos + 1);

    
        $decodedData = json_decode($jsonData, true);
        dd($decodedData);
        // Access the checkout_url
        $checkoutUrl = $decodedData['original']['data'][0]['attributes']['balance_transaction_id'];
        //$reference_number = $decodedData['data']['attributes']['external_reference_number'];
        //$payment_id = $decodedData['data']['id'];
        dd($checkoutUrl);
        // Redirect to the checkout_url        
        $record = Booking::where('refNumber', $refNumber)->first();

        if ($record) {    
            return response()->json(['message' => 'Record found', 'data' => $record]);
        } else {
            // Record not found
            return response()->json(['message' => 'Record not found'], 404);
        }
    }
}
