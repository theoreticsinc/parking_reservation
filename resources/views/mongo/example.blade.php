<?php
require_once('../vendor/autoload.php');

$client = new \GuzzleHttp\Client();

$response = $client->request('POST', 'https://api.paymongo.com/v1/links', [
  'body' => '{"data":{"attributes":{"amount":950000,"description":"Parking Fees"}}}',
  'headers' => [
    'accept' => 'application/json',
    'authorization' => 'Basic c2tfdGVzdF9MYnBxSmR5YnZTNFZqMmRmQ0R2NFdzdlI6',
    'content-type' => 'application/json',
  ],
]);
//$data = $response->getBody();
$rooms = json_decode($response->getBody(), true);

echo $response->getBody();
$jsonData = $response->getBody();
//$jsonData = '{"data":{"id":"link_M4qrg6TBHURqaVuwoTnfxrgM","type":"link","attributes":{"amount":950000,"archived":false,"currency":"PHP","description":"Parking Fees","livemode":false,"fee":0,"remarks":null,"status":"unpaid","tax_amount":null,"taxes":[],"checkout_url":"https://pm.link/theoreticsinc/test/MWAA3o3","reference_number":"MWAA3o3","created_at":1704590270,"updated_at":1704590270,"payments":[]}}}';

// Decode JSON data
$decodedData = json_decode($jsonData, true);

// Access the checkout_url
$checkoutUrl = $decodedData['data']['attributes']['checkout_url'];

// Output the result
echo $checkoutUrl;
?>
