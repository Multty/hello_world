<?php

function sendsms_post ($url, array $params) {
$params = http_build_query($params);
$ch = curl_init(); 
curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch, CU
RLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $params);   
$output=curl_exec($ch);
curl_close($ch);
return $output;        
}
$message = "Your verification code is: 3456778";
$senderid = "CashClub";
$recipients = $pfone;
$sms_array = array (
'username' => $newmeq,
'password' => $ictclub,
'message'   => $message,
'sender'    => $senderid,
'recipient' => $recipients
);

$url = "https://api.smartsmssolutions.com/smsapi.php";
$post_sms = sendsms_post($url, $sms_array);
echo $post_sms;


?>
