<?php
  include 'connect.php';

  $destination = $_POST['city'];
  $ip = $_SESSION['userip'];                            // EndUserIp
  $token = $_SESSION['token'];                          // TokenID
  $city = $_POST['cityId'];                             // CityId

  // Fetching Country Code
  $q1 = "select * from hotelCityList where cityId = $city";
  $result = mysqli_query($con,$q1);
  $row = mysqli_fetch_array($result);
  $country = $row['countryCode'];                       // CountryCode
  // Ends

  $checkIn = $_POST['indate'];
  $checkOut = $_POST['outdate'];

  // Changing Date Format
  $checkIn = date_create($checkIn);
  $checkOut = date_create($checkOut);
  $diff = date_diff($checkIn,$checkOut);
  // Final Data
  $noOfNights = $diff->format("%a");                    // NoOfNights
  $checkIn = date_format($checkIn,"d/m/Y");             // CheckInDate
  $checkOut = date_format($checkOut,"d/m/Y");
  // Ends

  $rooms = $_POST['roomno'];                            // NoOfRooms
  $adults = $_POST['traveller'];                        // NoOfAdults
  //$nationality = $_POST['nationality'];



  $checkIn = "\"".$checkIn."\"";
  $noOfNights = "\"".$noOfNights."\"";
  $country = "\"".$country."\"";
  $city = "\"".$city."\"";
  $rooms = "\"".$rooms."\"";
  // $adults = "\"".$adults."\"";




    echo '<h1>Search for '.$destination.'</h1><br><br><br>';



  $curl = curl_init();
  curl_setopt_array($curl, array(
    CURLOPT_URL => "http://api.tektravels.com/BookingEngineService_Hotel/hotelservice.svc/rest/GetHotelResult/",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => "{\n\"CheckInDate\": $checkIn,\n\"NoOfNights\": $noOfNights,\n\"CountryCode\": $country,\n\"CityId\": $city,\n\"ResultCount\": null,\n\"PreferredCurrency\": \"INR\",\n\"GuestNationality\": \"IN\",\n\"NoOfRooms\": $rooms, \n\"RoomGuests\": [\n\t{\n\t\t\"NoOfAdults\": 1,\n\t\t\"NoOfChild\": 0,\n\t\t\"ChildAge\": null\n\t}\n],\n\"PreferredHotel\": \"\",\n\"MaxRating\": 5,\n\"MinRating\": 0,\n\"ReviewScore\": null,\n\"IsNearBySearchAllowed\": false,\n\"EndUserIp\": $ip,\n\"TokenId\": $token\n}",
    CURLOPT_HTTPHEADER => array(
      "Content-Type: application/json",
      "Postman-Token: d9287253-dc18-477a-afdb-c4286c8b418a",
      "cache-control: no-cache"
    ),
  ));

  curl_setopt($curl, CURLOPT_TIMEOUT,500);
  $response = curl_exec($curl);
  //echo gzdecode($response);
  //echo $response;
  $response = json_decode($response, true);
  $err = curl_error($curl);

  curl_close($curl);

  if ($err) {
    echo "cURL Error #:" . $err;
  }


  if($response['HotelSearchResult']['ResponseStatus'] == 1){
      $maxResult = count($response['HotelSearchResult']['HotelResults']);
      for($i = 0; $i < $maxResult; $i++){
      echo '<b>Hotel Name : </b>'.$response['HotelSearchResult']['HotelResults'][$i]['HotelName'];
      echo '<br>';
      echo '<b>Rating : </b>'.$response['HotelSearchResult']['HotelResults'][$i]['StarRating'].' Star';
      echo '<br>';
      echo '<b>Price : Rs. </b>';
      echo $response['HotelSearchResult']['HotelResults'][$i]['Price']['OfferedPriceRoundedOff'].' /-';
      echo '<br>';
      echo '<b>Hotel Address : </b>'.$response['HotelSearchResult']['HotelResults'][$i]['HotelAddress'];
      echo '<br>';
      echo '<a href="testshowHotelDetails.php?index='.$response['HotelSearchResult']['HotelResults'][$i]['ResultIndex'].'&code='.$response['HotelSearchResult']['HotelResults'][$i]['HotelCode'].'&traceid='.$response['HotelSearchResult']['TraceId'].'" target="_blank">More Details</a>';
      // echo '<a href="testsimilarHotel.php?index='.$response['HotelSearchResult']['HotelResults'][$i]['ResultIndex'].'&code='.$response['HotelSearchResult']['HotelResults'][$i]['HotelCode'].'&traceid='.$response['HotelSearchResult']['TraceId'].'" target="_blank">More Details</a>';
      echo '<hr>';

      // echo '<p>Result Index : '.$response['HotelSearchResult']['HotelResults'][$i]['ResultIndex'].'</p>';
      // echo '<br>';
      // echo '<p>Hotel Code : '.$response['HotelSearchResult']['HotelResults'][$i]['HotelCode'].'</p>';
      // echo '<br>';
      // echo $response['HotelSearchResult']['HotelResults'][$i]['ResultIndex'];
      // echo $response['HotelSearchResult']['HotelResults'][$i]['HotelCode'];
      // echo $token;
      // echo $response['HotelSearchResult']['TraceId'];
      // echo '<p>Agent Commission : '.$response['HotelSearchResult']['HotelResults'][$i]['Price']['AgentCommission'].'</p>';
      // echo '<br>';
      // echo '<p>Service Tax : '.$response['HotelSearchResult']['HotelResults'][$i]['Price']['ServiceTax'].'</p>';
      // echo '<br>';
      // echo '<p>TDS : '.$response['HotelSearchResult']['HotelResults'][$i]['Price']['TDS'].'</p>';
      // echo '<br>';
      // echo '<p>CurrencyCode : '.$response['HotelSearchResult']['HotelResults'][$i]['Price']['CurrencyCode'].'</p>';
      // echo '<br>';
      // echo '<p>Room Price : '.$response['HotelSearchResult']['HotelResults'][$i]['Price']['RoomPrice'].'</p>';
      // echo '<br>';
      // echo '<p>Tax : '.$response['HotelSearchResult']['HotelResults'][$i]['Price']['Tax'].'</p>';
      // echo '<br>';
      // echo '<p>Extra Guest Charge : '.$response['HotelSearchResult']['HotelResults'][$i]['Price']['ExtraGuestCharge'].'</p>';
      // echo '<br>';
      // echo '<p>Child Charge : '.$response['HotelSearchResult']['HotelResults'][$i]['Price']['ChildCharge'].'</p>';
      // echo '<br>';
      // echo '<p>Other Charges : '.$response['HotelSearchResult']['HotelResults'][$i]['Price']['OtherCharges'].'</p>';
      // echo '<br>';
      // echo '<p>Discount : '.$response['HotelSearchResult']['HotelResults'][$i]['Price']['Discount'].'</p>';
      // echo '<br>';
      // echo '<p>Published Price : '.$response['HotelSearchResult']['HotelResults'][$i]['Price']['PublishedPrice'].'</p>';
      // echo '<br>';
      // echo '<p>Published Price Round Off : '.$response['HotelSearchResult']['HotelResults'][$i]['Price']['PublishedPriceRoundedOff'].'</p>';
      // echo '<br>';
      // echo '<p>Offered Price : '.$response['HotelSearchResult']['HotelResults'][$i]['Price']['OfferedPrice'].'</p>';
      // echo '<br>';
      // echo '<p>Hotel Description : '.$response['HotelSearchResult']['HotelResults'][$i]['HotelDescription'].'</p>';
      // echo '<br><br><br>';
      echo '<br>';
    }

  }
  else{
    echo '<b>Response Status : </b>'.$response['HotelSearchResult']['ResponseStatus'].'<br>';
    echo '<b>Error Message : </b>'.$response['HotelSearchResult']['Error']['ErrorMessage'].'<br>';
  }




 // echo $country.'<br>';
 //  echo $checkIn.'<br>';
 //  echo $noOfNights.'<br>';
 //  echo $country.'<br>';
 //  echo $city.'<br>';
 //  echo $rooms.'<br>';
 //  echo $adults.'<br>';
 //  echo $ip.'<br>';
 //  echo $token.'<br>';






?>
