<?php
  include 'connect.php';

  $code = $_GET['code'];
  $trace = $_GET['traceid'];
  $index = $_GET['index'];

  $code = "\"".$code."\"";
  $trace = "\"".$trace."\"";
  $index = "\"".$index."\"";

  $ip = $_SESSION['userip'];
  $token = $_SESSION['token'];

  echo $code.'<br>'.$trace.'<br>'.$index.'<br>'.$ip.'<br>'.$token.'<br><br><br>';


  echo '<hr><br><br>';

  //###############################################
  //  API Function for Getting Hotel Information
  //###############################################

  $hotelInfo = curl_init();

  curl_setopt_array($hotelInfo, array(
  CURLOPT_URL => "http://api.tektravels.com/BookingEngineService_Hotel/hotelservice.svc/rest/GetHotelInfo/",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "{\n    \"ResultIndex\": $index,\n    \"HotelCode\": $code,\n    \"EndUserIp\": $ip,\n    \"TokenId\": $token,\n    \"TraceId\": $trace\n}",
  CURLOPT_HTTPHEADER => array(
    "Content-Type: application/json",
    "Postman-Token: df3e175a-154e-4141-a2ec-de87ed01ff60",
    "cache-control: no-cache"
  ),
  ));

  $responseHotelInfo = curl_exec($hotelInfo);
  $responseHotelInfo = json_decode($responseHotelInfo, true);
  $err = curl_error($hotelInfo);

  curl_close($hotelInfo);

  if ($err) {
  echo "cURL Error #:" . $err;
  }

  //###############################################
  //    ---------------- END -----------------
  //###############################################

  //###############################################
  //  API Function for Getting Hotel Rooms Info
  //###############################################

  $roomInfo = curl_init();

  curl_setopt_array($roomInfo, array(
    CURLOPT_URL => "http://api.tektravels.com/BookingEngineService_Hotel/hotelservice.svc/rest/GetHotelRoom/",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => "{\n    \"ResultIndex\": $index,\n    \"HotelCode\": $code,\n    \"EndUserIp\": $ip,\n    \"TokenId\": $token,\n    \"TraceId\": $trace\n}",
    CURLOPT_HTTPHEADER => array(
      "Content-Type: application/json",
      "Postman-Token: aa440f4d-78e5-481e-b536-16a7a187f71e",
      "cache-control: no-cache"
    ),
  ));

  $responseRoomInfo = curl_exec($roomInfo);
  $responseRoomInfo = json_decode($responseRoomInfo, true);
  $err = curl_error($roomInfo);

  curl_close($roomInfo);

  if ($err) {
    echo "cURL Error #:" . $err;
  }

  //###############################################
  //    ---------------- END -----------------
  //###############################################

  echo '<hr><hr><br>';

  if($responseHotelInfo['HotelInfoResult']['ResponseStatus'] == 1){
    echo '<b>Hotel Name : </b>'.$responseHotelInfo['HotelInfoResult']['HotelDetails']['HotelName'].'<br>';
    echo '<b>Rating : </b>'.$responseHotelInfo['HotelInfoResult']['HotelDetails']['StarRating'].' Star<br>';

    if($responseHotelInfo['HotelInfoResult']['HotelDetails']['Address'] != ""){
      echo '<b>Address : </b>'.$responseHotelInfo['HotelInfoResult']['HotelDetails']['Address'].' '.$responseHotelInfo['HotelInfoResult']['HotelDetails']['PinCode'].' '.$responseHotelInfo['HotelInfoResult']['HotelDetails']['CountryName'].'<br>';
    }

    if($responseHotelInfo['HotelInfoResult']['HotelDetails']['HotelContactNo'] != ""){
      echo '<b>Contact No. : </b>'.$responseHotelInfo['HotelInfoResult']['HotelDetails']['HotelContactNo'].'<br>';
    }

    echo '<b>Description : </b>'.$responseHotelInfo['HotelInfoResult']['HotelDetails']['Description'].'<br>';

    $maxFacilities = count($responseHotelInfo['HotelInfoResult']['HotelDetails']['HotelFacilities']);
    if($maxFacilities > 0){
      echo '<b>Hotel Facilities : </b>';
      echo '<br>';
      for($i = 0; $i < $maxFacilities; $i++){
        echo '@ '.$responseHotelInfo['HotelInfoResult']['HotelDetails']['HotelFacilities'][$i].'<br>';
      }
    }

    $maxAttraction = count($responseHotelInfo['HotelInfoResult']['HotelDetails']['Attractions']);
    if($maxAttraction > 0){
    echo '<b>Attractions : </b>';
    echo '<br>';
      for($i = 0; $i < $maxAttraction; $i++){
        echo $responseHotelInfo['HotelInfoResult']['HotelDetails']['Attractions'][$i]['Key'].' '.$responseHotelInfo['HotelInfoResult']['HotelDetails']['Attractions'][$i]['Value'].'<br>';
      }
    }

    $maxRoomFacilities = count($responseHotelInfo['HotelInfoResult']['HotelDetails']['RoomFacilities']);
    if($maxRoomFacilities > 0){
    echo '<b>Room Facilities : </b>';
    echo '<br>';
      for($i = 0; $i < $maxRoomFacilities; $i++){
        echo '@ '.$responseHotelInfo['HotelInfoResult']['HotelDetails']['RoomFacilities'][$i].'<br>';
      }
    }

    if($responseHotelInfo['HotelInfoResult']['HotelDetails']['Services'] != ""){
      echo '<b>Services : </b>'.$responseHotelInfo['HotelInfoResult']['HotelDetails']['Services'].'<br>';
    }

    if($responseRoomInfo['GetHotelRoomResult']['ResponseStatus'] == 1){
      echo '<b>#########################################################<br>';
      echo "&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Room Details";
      echo '<br>#########################################################</b><br><br><br>';

      $maxRooms = count($responseRoomInfo['GetHotelRoomResult']['HotelRoomsDetails']);
      for($i = 0; $i < $maxRooms; $i++){
        echo '<b>------------------------------------------------------<br>';
        echo "&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  Room";
        echo ($i + 1);
        echo '<br>------------------------------------------------------</b><br><br>';
        echo '<b>RoomTypeName : </b>'.$responseRoomInfo['GetHotelRoomResult']['HotelRoomsDetails'][$i]['RoomTypeName'].'<br>';

        $totalAmenities = count($responseRoomInfo['GetHotelRoomResult']['HotelRoomsDetails']['Amenities']);
        if($totalAmenities > 0){
          echo '<b>Amenities : </b><br>';
          for($k = 0; $k < $totalAmenities; $k++){
            echo '@ '.$responseRoomInfo['GetHotelRoomResult']['HotelRoomsDetails']['Amenities'][$k].'<br>';
          }
        }
        $maxAmenities = count($responseRoomInfo['GetHotelRoomResult']['HotelRoomsDetails']['Amenity']);
        if($maxAmenities > 0){
          if($totalAmenities == 0){
            echo '<b>Amenities : </b><br>';
          }
          for($p = 0; $p < $maxAmenities; $p++){
            echo '@ '.$responseRoomInfo['GetHotelRoomResult']['HotelRoomsDetails']['Amenity'][$p].'<br>';
          }
        }

        $maxInclusion = count($responseRoomInfo['GetHotelRoomResult']['HotelRoomsDetails']['Inclusion']);
        if($maxInclusion > 0){
          echo '<b>Inclusions : </b><br>';
          for($k = 0; $k < $maxInclusion; $k++){
            echo '@ '.$responseRoomInfo['GetHotelRoomResult']['HotelRoomsDetails']['Inclusion'][$k].'<br>';
          }
        }

        echo '<br><b>Price Details</b><br>';
        if($responseRoomInfo['GetHotelRoomResult']['HotelRoomsDetails'][$i]['Price']['ExtraGuestCharge'] != 0){
          echo '<b>ExtraGuestCharge : </b>'.$responseRoomInfo['GetHotelRoomResult']['HotelRoomsDetails'][$i]['Price']['ExtraGuestCharge'].'<br>';
        }
        if($responseRoomInfo['GetHotelRoomResult']['HotelRoomsDetails'][$i]['Price']['ChildCharge'] != 0){
          echo '<b>ChildCharge : </b>'.$responseRoomInfo['GetHotelRoomResult']['HotelRoomsDetails'][$i]['Price']['ChildCharge'].'<br>';
        }

        echo '<br><b>Price per day:</b><br>';
        $maxDays = count($responseRoomInfo['GetHotelRoomResult']['HotelRoomsDetails'][$i]['DayRates']);
        for($j = 0; $j < $maxDays; $j++){
          echo '<b>Day '.($j + 1).' : </b>'.$responseRoomInfo['GetHotelRoomResult']['HotelRoomsDetails'][$i]['DayRates'][$j]['Amount'].'<br>';
          echo '<b>Date : </b>'.$responseRoomInfo['GetHotelRoomResult']['HotelRoomsDetails'][$i]['DayRates'][$j]['Date'].'<br>';
        }

        echo '<b>Total Amount : </b>'.$responseRoomInfo['GetHotelRoomResult']['HotelRoomsDetails'][$i]['Price']['OfferedPriceRoundedOff'].'/-<br>';

        if($responseRoomInfo['GetHotelRoomResult']['IsUnderCancellationAllowed']){
          echo '<br><b>Note : Under Cancellation Allowed For The Hotel.</b><br>';
        }
        else{
          echo '<br><b>Note : Under Cancellation NOT Allowed For The Hotel.</b><br>';
        }


        echo '<br><b>*** IMPORTANT NOTE ***</b><br><br>';
        echo '<b>Last Cancellation Date : </b>'.$responseRoomInfo['GetHotelRoomResult']['HotelRoomsDetails'][$i]['LastCancellationDate'].'<br>';
        $maxPolicy = count($responseRoomInfo['GetHotelRoomResult']['HotelRoomsDetails'][$i]['CancellationPolicies']);
        echo '<b>Cancellation Policies : </b><br>';
        for($k = 0; $k < $maxPolicy; $k++){
          echo '<b>Charges(will deducted) : </b>'.$responseRoomInfo['GetHotelRoomResult']['HotelRoomsDetails'][$i]['CancellationPolicies'][$k]['Charge'].' ';
          if($responseRoomInfo['GetHotelRoomResult']['HotelRoomsDetails'][$i]['CancellationPolicies'][$k]['ChargeType'] == 1){
            echo 'INR.<br>';
          }
          if($responseRoomInfo['GetHotelRoomResult']['HotelRoomsDetails'][$i]['CancellationPolicies'][$k]['ChargeType'] == 2){
            echo '% (Percent)<br>';
          }
          if($responseRoomInfo['GetHotelRoomResult']['HotelRoomsDetails'][$i]['CancellationPolicies'][$k]['ChargeType'] == 3){
            echo 'Nights<br>';
          }
          echo '<b>From Date : </b>'.$responseRoomInfo['GetHotelRoomResult']['HotelRoomsDetails'][$i]['CancellationPolicies'][$k]['FromDate'].'<br>';
          echo '<b>To Date : </b>'.$responseRoomInfo['GetHotelRoomResult']['HotelRoomsDetails'][$i]['CancellationPolicies'][$k]['ToDate'].'<br>';
        }
        echo '<b>Cancellation Policy:</b><br>'.$responseRoomInfo['GetHotelRoomResult']['HotelRoomsDetails'][$i]['CancellationPolicy'].'<br><br>';

      }

    }
    else{
      echo '<b>Room Details:</b><br>';
      echo 'Response Status : '.$responseRoomInfo['GetHotelRoomResult']['ResponseStatus'].'<br>';
      echo 'Error Message : '.$responseRoomInfo['GetHotelRoomResult']['Error']['ErrorMessage'].'<br>';
    }
  }
  else{
    echo '<b>Hotel Details:</b><br>';
    echo 'Response Status : '.$responseRoomInfo['GetHotelRoomResult']['ResponseStatus'].'<br>';
    echo 'Error Message : '.$responseRoomInfo['GetHotelRoomResult']['Error']['ErrorMessage'].'<br>';
  }


  echo '$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$<br>';
  echo '                                                   SIMILAR HOTELS<br>';
  echo '$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$<br>';


  $similarHotels = curl_init();

  curl_setopt_array($similarHotels, array(
    CURLOPT_URL => "http://api.tektravels.com/BookingEngineService_Hotel/hotelservice.svc/rest/GetHotelResult/",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => "{\n\"CheckInDate\": \"21/01/2019\",\n\"NoOfNights\": \"4\",\n\"CountryCode\": \"TH\",\n\"CityId\": \"16974\",\n\"ResultCount\": 4,\n\"PreferredCurrency\": \"INR\",\n\"GuestNationality\": \"IN\",\n\"NoOfRooms\": \"1\", \n\"RoomGuests\": [\n\t{\n\t\t\"NoOfAdults\": 1,\n\t\t\"NoOfChild\": 0,\n\t\t\"ChildAge\": null\n\t}\n],\n\"PreferredHotel\": \"\",\n\"MaxRating\": 5,\n\"MinRating\": 0,\n\"ReviewScore\": null,\n\"IsNearBySearchAllowed\": false,\n\"EndUserIp\": \"49.205.179.181\",\n\"TokenId\": \"62135dcb-b082-4860-915b-dd262d366ca0\"\n}",
    CURLOPT_HTTPHEADER => array(
      "Content-Type: application/json",
      "Postman-Token: 04334ebd-dfc1-4492-8224-bbe196959f75",
      "cache-control: no-cache"
    ),
  ));

  $responseSimilarHotels = curl_exec($similarHotels);
  $responseSimilarHotels = json_decode($responseSimilarHotels, true);
  $err = curl_error($similarHotels);

  curl_close($similarHotels);

  if ($err) {
    echo "cURL Error #:" . $err;
  }


  if($responseSimilarHotels['HotelSearchResult']['ResponseStatus'] == 1){
      $maxResult = count($responseSimilarHotels['HotelSearchResult']['HotelResults']);
      for($i = 0; $i < $maxResult; $i++){
      echo '<b>Hotel Name : </b>'.$responseSimilarHotels['HotelSearchResult']['HotelResults'][$i]['HotelName'];
      echo '<br>';
      echo '<b>Rating : </b>'.$responseSimilarHotels['HotelSearchResult']['HotelResults'][$i]['StarRating'].' Star';
      echo '<br>';
      echo '<b>Price : Rs. </b>';
      echo $responseSimilarHotels['HotelSearchResult']['HotelResults'][$i]['Price']['OfferedPriceRoundedOff'].' /-';
      echo '<br>';
      echo '<b>Hotel Address : </b>'.$responseSimilarHotels['HotelSearchResult']['HotelResults'][$i]['HotelAddress'];
      echo '<br>';
      // echo '<a href="testshowHotelDetails.php?index='.$responseSimilarHotels['HotelSearchResult']['HotelResults'][$i]['ResultIndex'].'&code='.$response['HotelSearchResult']['HotelResults'][$i]['HotelCode'].'&traceid='.$response['HotelSearchResult']['TraceId'].'" target="_blank">More Details</a>';
      echo '<a href="testsimilarHotel.php?index='.$response['HotelSearchResult']['HotelResults'][$i]['ResultIndex'].'&code='.$response['HotelSearchResult']['HotelResults'][$i]['HotelCode'].'&traceid='.$response['HotelSearchResult']['TraceId'].'" target="_blank">More Details</a>';
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
    echo '<b>Response Status : </b>'.$responseSimilarHotels['HotelSearchResult']['ResponseStatus'].'<br>';
    echo '<b>Error Message : </b>'.$responseSimilarHotels['HotelSearchResult']['Error']['ErrorMessage'].'<br>';
  }


?>
