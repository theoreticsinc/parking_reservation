<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Booking;
use Illuminate\Support\Facades\Session;
use App\Jobs\CheckPaymongo;
use GuzzleHttp\Client as GuzzleClient;

class PaymongoController extends Controller
{
    //
    public function store(Request $request)
    {
        $title = $request->input('check_in');
        $content = $request->input('amount');

        // Process the data, e.g., save to the database
        echo $title . $content;
        //return redirect()->route('posts.index'); // Redirect to a different page after processing
    }

    public function home()
    {
        //return view('mongo.example');
        $jsonData = '{"data":{"id":"link_M4qrg6TBHURqaVuwoTnfxrgM","type":"link","attributes":{"amount":500,"archived":false,"currency":"PHP","description":"Parking Fees","livemode":false,"fee":0,"remarks":null,"status":"unpaid","tax_amount":null,"taxes":[],"checkout_url":"https://pm.link/theoreticsinc/test/MWAA3o3","reference_number":"MWAA3o3","created_at":1704590270,"updated_at":1704590270,"payments":[]}}}';
        //$jsonData = createLink();
        // Decode JSON data
        $decodedData = json_decode($jsonData, true);

        // Access the checkout_url
        $checkoutUrl = $decodedData['data']['attributes']['checkout_url'];

        // Redirect to the checkout_url
        return redirect($checkoutUrl);
    }


    public function createLinkfromPost(Request $request) {
        
        $title = $request->input('title');
        $refNumber = $request->input('refNumber');
        $amount = $request->input('amount');
        session(['global_data' => $amount]);

        $amount = str_replace('.', '', $amount);
        //dd($amount);
        // Process the data, e.g., save to the database
        //echo $title . $amount;
        $request->flash();
        //$sdate = date('Y-m-d',strtotime($request->check_in));
        //$edate = date('Y-m-d',strtotime($request->check_out));

        //$title = "Date:".$amount;
        //echo $title;
        //ParkNFly
        //sk_live_MbZ5HZ5oSStmyeXcS5TQafhM
        //c2tfbGl2ZV9NYlo1SFo1b1NTdG15ZVhjUzVUUWFmaE06
        //Theoretics test Account
        //c2tfdGVzdF9MYnBxSmR5YnZTNFZqMmRmQ0R2NFdzdlI6
        $response = Http::withHeaders([
            'accept' => 'application/json',
            'authorization' => 'Basic c2tfdGVzdF9MYnBxSmR5YnZTNFZqMmRmQ0R2NFdzdlI6',
            'content-type' => 'application/json',
        ])->post('https://api.paymongo.com/v1/links', [
            'data' => [
                'attributes' => [
                    'amount' => intval($amount),
                    'description' => $title,
                ],
            ],
        ]);

        // Access the response data if needed
        $responseData = $response->json();

        // Your further logic here

        $responseString = response()->json($responseData);
        
        // Extract JSON data from the response string
        $jsonStartPos = strpos($responseString, '{');
        $jsonEndPos = strrpos($responseString, '}');
        
        $jsonData = substr($responseString, $jsonStartPos, $jsonEndPos - $jsonStartPos + 1);

    
        $decodedData = json_decode($jsonData, true);
        //dd($decodedData);
        // Access the checkout_url
        $checkoutUrl = $decodedData['data']['attributes']['checkout_url'];
        $reference_number = $decodedData['data']['attributes']['reference_number'];
        $payment_id = $decodedData['data']['id'];
        //dd($reference_number);
        // Redirect to the checkout_url        
        $record = Booking::where('refNumber', $refNumber)->first();

        if ($record) {
            // Record found
            // Edit the value (for example, updating the 'status' field)
            $record->payment_reference = $reference_number; // Replace 'updated_status' with the new value

            // Save the changes
            $record->save();
            
            //return response()->json(['message' => 'Record found', 'data' => $record]);
        } else {
            // Record not found
            //return response()->json(['message' => 'Record not found'], 404);
        }

        CheckPaymongo::dispatch($reference_number)->delay(now()->addMinutes(10));

        //dd($reference_number);
        // In a controller or any part of your application
        
        session()->put('data1', $reference_number);
        
        return redirect($checkoutUrl)->with('data1', $reference_number)->with('data2', $payment_id);
    }

    
    public function checkPayment($reference_number): string {
        $client = new GuzzleClient();

        //$title = "Date:".$amount;
        //echo $title;
        //ParkNFly
        //sk_live_MbZ5HZ5oSStmyeXcS5TQafhM
        //c2tfbGl2ZV9NYlo1SFo1b1NTdG15ZVhjUzVUUWFmaE06
        //Theoretics test Account
        //c2tfdGVzdF9MYnBxSmR5YnZTNFZqMmRmQ0R2NFdzdlI6
        $apiLink = 'https://api.paymongo.com/v1/links?reference_number=' . $reference_number;
        $response = $client->request('GET', $apiLink, [
            'headers' => [
              'accept' => 'application/json',
              'authorization' => 'Basic c2tfdGVzdF9MYnBxSmR5YnZTNFZqMmRmQ0R2NFdzdlI6',
            ],
          ]);

        // Access the response data if needed
        //$responseData = $response->json();
        // Get the response body as a string
        $body = $response->getBody()->getContents();
        $responseData = json_decode($body, true);
        // Your further logic here

        $responseString = response()->json($responseData);
        
        // Extract JSON data from the response string
        $jsonStartPos = strpos($responseString, '{');
        $jsonEndPos = strrpos($responseString, '}');
        
        $jsonData = substr($responseString, $jsonStartPos, $jsonEndPos - $jsonStartPos + 1);

    
        $decodedData = json_decode($jsonData, true);
        //dd($decodedData);
        // Access the checkout_url
        $checkoutUrl = $decodedData['data'][0]['attributes']['checkout_url'];
        $reference_number = $decodedData['data'][0]['attributes']['reference_number'];
        $status = $decodedData['data'][0]['attributes']['status'];
        //dd($reference_number);
        // Redirect to the checkout_url        
        
        
        CheckPaymongo::dispatch($status)->delay(now()->addMinutes(5));
        // In a controller or any part of your application
        
        dd($checkoutUrl, $reference_number, $status);
        return $status;
        //return redirect($checkoutUrl)->with('data1', $reference_number)->with('data2', $status);
    }


    public function createLink($title, $amount)
    {
        $response = Http::withHeaders([
            'accept' => 'application/json',
            'authorization' => 'Basic c2tfdGVzdF9MYnBxSmR5YnZTNFZqMmRmQ0R2NFdzdlI6',
            'content-type' => 'application/json',
        ])->post('https://api.paymongo.com/v1/links', [
            'data' => [
                'attributes' => [
                    'amount' => $amount + 0,
                    'description' => $title,
                ],
            ],
        ]);

        // Access the response data if needed
        $responseData = $response->json();

        // Your further logic here

        $responseString = response()->json($responseData);
        
        // Extract JSON data from the response string
        $jsonStartPos = strpos($responseString, '{');
        $jsonEndPos = strrpos($responseString, '}');
        
        $jsonData = substr($responseString, $jsonStartPos, $jsonEndPos - $jsonStartPos + 1);

    
        $decodedData = json_decode($jsonData, true);
        
        // Access the checkout_url
        $checkoutUrl = $decodedData['data']['attributes']['checkout_url'];

        // Redirect to the checkout_url
        //return redirect($checkoutUrl);
        //return response()->json($responseData);
    }
}
