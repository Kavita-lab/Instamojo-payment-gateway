<?php
session_start();
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://test.instamojo.com/api/1.1/payment-requests/');
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER,
            array("X-Api-Key:test_27d70704fec4863c8a0c1c24b94",
                  "X-Auth-Token:test_76f3a4cdc36f465fc0a19718313"));
$payload = Array(
    'purpose' => 'BUY A CAr',
    'amount' => '3000',
    'phone' => '9999999999',
    'buyer_name' => 'kavita ',
    'redirect_url' => 'http://localhost:8080/mini%20project/success.php',
    'send_email' => true,
    
    'send_sms' => true,
    'email' => 'kaviig1996@gmail.com',
    'allow_repeated_payments' => false
);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($payload));
$response = curl_exec($ch);
curl_close($ch); 

$response=json_decode($response);
$_SESSION['TID']=$response->payment_request->id;
header('location:'.$response->payment_request->longurl);
die();
?>
