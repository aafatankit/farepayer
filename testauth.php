<?php

// Getting User IP Address.
// $ip = getenv('HTTP_CLIENT_IP')?:
// getenv('HTTP_X_FORWARDED_FOR')?:
// getenv('HTTP_X_FORWARDED')?:
// getenv('HTTP_FORWARDED_FOR')?:
// getenv('HTTP_FORWARDED')?:
// getenv('REMOTE_ADDR');

// if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
//     $ip = $_SERVER['HTTP_CLIENT_IP'];
// } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
//     $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
// } else {
//     $ip = $_SERVER['REMOTE_ADDR'];
// }
//

$ip = $_SERVER['REMOTE_ADDR'];
$dash = $ip;
$ip = "\"".$ip."\"";

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.travelboutiqueonline.com/SharedAPI/SharedData.svc/rest/Authenticate",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "{\n\"ClientId\": \"tboprod\",\n\"UserName\": \"DELF121\",\n\"Password\": \"live/tbo-121@\",\n\"EndUserIp\": $ip \n}",
  CURLOPT_HTTPHEADER => array(
    "Content-Type: application/json",
    "Postman-Token: 257d0731-bbdf-4bb5-b7a9-e656ea1353ab",
    "cache-control: no-cache"
  ),
));

$response = curl_exec($curl);
$response = json_decode($response, true);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response['Status'].'<br>';
  echo $response['TokenId'].'<br>';
  echo $response['Member']['LoginDetails'].'<br>';
  echo $dash;
  // echo $response[''];
  // echo $response[''];
}

?>
