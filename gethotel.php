<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.travelboutiqueonline.com/HotelAPI_V10/HotelService.svc/rest/GetHotelResult/",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "{\n\"CheckInDate\": \"23/01/2019\",\n\"NoOfNights\": \"1\",\n\"CountryCode\": \"NL\",\n\"CityId\": \"14621\",\n\"ResultCount\": null,\n\"PreferredCurrency\": \"INR\",\n\"GuestNationality\": \"IN\",\n\"NoOfRooms\": \"1\", \n\"RoomGuests\": [\n\t{\n\t\t\"NoOfAdults\": 1,\n\t\t\"NoOfChild\": 0,\n\t\t\"ChildAge\": null\n\t}\n],\n\"PreferredHotel\": \"\",\n\"MaxRating\": 5,\n\"MinRating\": 0,\n\"ReviewScore\": null,\n\"IsNearBySearchAllowed\": false,\n\"EndUserIp\": \"49.205.179.181\",\n\"TokenId\": \"e9f36210-13c6-4e16-9fae-3a0cbedeaf6a\"\n}",
  CURLOPT_HTTPHEADER => array(
    "Content-Type: application/json",
    "Postman-Token: ba3fb393-5a2b-4c88-9ec7-6b6f60eea142",
    "cache-control: no-cache"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}
?>
