<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

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
        $jsonData = '{"data":{"id":"link_M4qrg6TBHURqaVuwoTnfxrgM","type":"link","attributes":{"amount":950000,"archived":false,"currency":"PHP","description":"Parking Fees","livemode":false,"fee":0,"remarks":null,"status":"unpaid","tax_amount":null,"taxes":[],"checkout_url":"https://pm.link/theoreticsinc/test/MWAA3o3","reference_number":"MWAA3o3","created_at":1704590270,"updated_at":1704590270,"payments":[]}}}';
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
        $amount = $request->input('amount') . "00";

        // Process the data, e.g., save to the database
        //echo $title . $amount;
        $request->flash();
        $sdate = date('Y-m-d',strtotime($request->check_in));
        $edate = date('Y-m-d',strtotime($request->check_out));

        //$title = "Date:".$amount;
        //echo $title;
        //ParkNFly
        //sk_live_MbZ5HZ5oSStmyeXcS5TQafhM
        //c2tfbGl2ZV9NYlo1SFo1b1NTdG15ZVhjUzVUUWFmaE06
        //Theoretics test Account
        //c2tfdGVzdF9MYnBxSmR5YnZTNFZqMmRmQ0R2NFdzdlI6
        $response = Http::withHeaders([
            'accept' => 'application/json',
            'authorization' => 'Basic c2tfbGl2ZV9NYlo1SFo1b1NTdG15ZVhjUzVUUWFmaE06',
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
        
        // Access the checkout_url
        $checkoutUrl = $decodedData['data']['attributes']['checkout_url'];

        // Redirect to the checkout_url        
        return redirect($checkoutUrl);
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
