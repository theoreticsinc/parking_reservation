<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;
use App\Mail\BookConfirm;
use App\Models\Booking;
use GuzzleHttp\Client as GuzzleClient;
use Exception;

class CheckPaymongo implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $reference_number;
    protected $amount;
    /**
     * Create a new job instance.
     */
    public function __construct($reference_number)
    {
        $this->reference_number = $reference_number;
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
        //dd($reference_number, $apiLink);
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
        $this->amount = $decodedData['data'][0]['attributes']['amount'];
        $checkoutUrl = $decodedData['data'][0]['attributes']['checkout_url'];
        $reference_number = $decodedData['data'][0]['attributes']['reference_number'];
        $status = $decodedData['data'][0]['attributes']['status'];
        //dd($reference_number);
        return $status;
        //return redirect($checkoutUrl)->with('data1', $reference_number)->with('data2', $status);
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $timezone = 'Asia/Manila';
        $formattedAmount = number_format($this->amount / 100, 2, '.', ',');
        
        $paymentFullIntents = Booking::where('payment_status', 'Awaiting Full')->get();
        //dd($paymentFullIntents);
        $paymentHalfIntents = Booking::where('payment_status', 'Awaiting Half')->get();
        //dd($paymentHalfIntents);
        // Iterate through the collection and perform actions
        foreach ($paymentFullIntents as $paymentIntent) {
        // Access individual attributes
            $referenceNumber = $paymentIntent->payment_reference;
            $status = $this->checkPayment($referenceNumber);
            //echo $status . "<br>";        
            if($status == "paid") {
                //dd($referenceNumber, $status);
            }    
        // Perform actions with the reference_number or any other attributes
        
            $recipients = ['theoreticsinc@gmail.com', $paymentIntent->email];
            $mailData = [
                'refNumber' => $paymentIntent->payment_reference,
                'firstName' => $paymentIntent->firstName,
                'lastName' => $paymentIntent->lastName,
                'mobileNumber' => $paymentIntent->mobileNumber,
                'booking_date' => $paymentIntent->booking_date,
                'check_in' => $paymentIntent->check_in,
                'check_out' => $paymentIntent->check_out,
                'total_days' => $paymentIntent->total_days,
                'total_price' => $paymentIntent->total_price,
                'destination' => $paymentIntent->destination,
                'flightnumber' => $paymentIntent->flightNumber,
                'recipient_email' => $paymentIntent->email,
                'confirmEmail' => $paymentIntent->confirmEmail,
                'typeOfCar' => $paymentIntent->typeOfCar,
                'plateNumber' => $paymentIntent->plateNumber,
                'payment_status' => $paymentIntent->payment_status,
                'downpayment' => $paymentIntent->downpayment,
                'other_total_price' => $paymentIntent->total_price,
                // Add other data as needed
            ];
            //dd($mailData);
        // For example, you can echo the reference_number
            //echo $referenceNumber . PHP_EOL;
            
            if ($status == "paid") {
                $paymentIntent->update([
                    'status' => '1',
                    'payment_status' => 'Half Paid'
                ]);
                Mail::to($recipients)->send(new BookConfirm($mailData));
            }
        }

        foreach ($paymentHalfIntents as $paymentIntent) {
            // Access individual attributes
            $referenceNumber = $paymentIntent->payment_reference;
            $status = $this->checkPayment($referenceNumber);
            //dd($status);
        // Perform actions with the reference_number or any other attributes
            $recipients = ['theoreticsinc@gmail.com', $paymentIntent->email];
            $mailData = [
                'refNumber' => $paymentIntent->payment_reference,
                'firstName' => $paymentIntent->firstName,
                'lastName' => $paymentIntent->lastName,
                'mobileNumber' => $paymentIntent->mobileNumber,
                'booking_date' => $paymentIntent->booking_date,
                'check_in' => $paymentIntent->check_in,
                'check_out' => $paymentIntent->check_out,
                'total_days' => $paymentIntent->total_days,
                'total_price' => $paymentIntent->total_price,
                'destination' => $paymentIntent->destination,
                'flightnumber' => $paymentIntent->flightNumber,
                'recipient_email' => $paymentIntent->email,
                'confirmEmail' => $paymentIntent->confirmEmail,
                'typeOfCar' => $paymentIntent->typeOfCar,
                'plateNumber' => $paymentIntent->plateNumber,
                'payment_status' => $paymentIntent->payment_status,
                'downpayment' => $paymentIntent->downpayment,
                'other_total_price' => $paymentIntent->total_price,
                // Add other data as needed
            ];
            //dd($mailData);
        // For example, you can echo the reference_number
            //echo $referenceNumber . PHP_EOL;
            if ($status == "paid") {
                
                $paymentIntent->update([
                    'status' => '1',
                    'payment_status' => 'Half Paid'
                ]);
                Mail::to($recipients)->send(new BookConfirm($mailData));
            }
        }    
        
        
        //dd($status,$this->reference_number, $formattedAmount);
    }

}
