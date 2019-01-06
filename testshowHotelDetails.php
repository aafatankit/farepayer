<?php
  include 'connect.php';

  $code = $_GET['code'];
  $trace = $_GET['traceid'];
  $index = $_GET['index'];

  $code1 = $code;
  $trace1 = $trace;
  $index1 = $index;

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

  curl_setopt($curl, CURLOPT_TIMEOUT,500);
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

  curl_setopt($curl, CURLOPT_TIMEOUT,500);
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

    //################################################################################
    //  ------------------- Room Details ----------------------
    //################################################################################

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
        
        echo '<a href="testreviewBooking.php?trace='.$trace1.'&index='.$index1.'&code='.$code1.'&name='.$responseHotelInfo['HotelInfoResult']['HotelDetails']['HotelName'].'&roomindex='.$responseRoomInfo['GetHotelRoomResult']['HotelRoomsDetails'][$i]['RoomIndex'].'&ratePcode='.$responseRoomInfo['GetHotelRoomResult']['HotelRoomsDetails'][$i]['RatePlanCode'].'&roomTcode='.$responseRoomInfo['GetHotelRoomResult']['HotelRoomsDetails'][$i]['RoomTypeCode'].'&roomTname='.$responseRoomInfo['GetHotelRoomResult']['HotelRoomsDetails'][$i]['RoomTypeName'].'&bedTcode='.$responseRoomInfo['GetHotelRoomResult']['HotelRoomsDetails'][$i]['BedTypes']['BedTypeCode'].'&smoking='.$responseRoomInfo['GetHotelRoomResult']['HotelRoomsDetails'][$i]['SmokingPreference'].'&roomprice='.$responseRoomInfo['GetHotelRoomResult']['HotelRoomsDetails'][$i]['Price']['RoomPrice'].'&tax='.$responseRoomInfo['GetHotelRoomResult']['HotelRoomsDetails'][$i]['Price']['Tax'].'&extraguest='.$responseRoomInfo['GetHotelRoomResult']['HotelRoomsDetails'][$i]['Price']['ExtraGuestCharge'].'&child='.$responseRoomInfo['GetHotelRoomResult']['HotelRoomsDetails'][$i]['Price']['ChildCharge'].'&other='.$responseRoomInfo['GetHotelRoomResult']['HotelRoomsDetails'][$i]['Price']['OtherCharges'].'&published='.$responseRoomInfo['GetHotelRoomResult']['HotelRoomsDetails'][$i]['Price']['PublishedPrice'].'&offer='.$responseRoomInfo['GetHotelRoomResult']['HotelRoomsDetails'][$i]['Price']['OfferedPrice'].'&commission='.$responseRoomInfo['GetHotelRoomResult']['HotelRoomsDetails'][$i]['Price']['AgentCommission'].'&markup='.$responseRoomInfo['GetHotelRoomResult']['HotelRoomsDetails'][$i]['Price']['AgentMarkUp'].'&service='.$responseRoomInfo['GetHotelRoomResult']['HotelRoomsDetails'][$i]['Price']['ServiceTax'].'&tds='.$responseRoomInfo['GetHotelRoomResult']['HotelRoomsDetails'][$i]['Price']['TDS'].'">Book Now</a>';

      }

    }
    else{
      echo '<b>Room Details:</b><br>';
      echo 'Response Status : '.$responseRoomInfo['GetHotelRoomResult']['ResponseStatus'].'<br>';
      echo 'Error Message : '.$responseRoomInfo['GetHotelRoomResult']['Error']['ErrorMessage'].'<br>';
    }

    //################################################################################
    //  ------------------- END ----------------------
    //################################################################################

  }
  else{
    echo '<b>Hotel Details:</b><br>';
    echo 'Response Status : '.$responseRoomInfo['GetHotelRoomResult']['ResponseStatus'].'<br>';
    echo 'Error Message : '.$responseRoomInfo['GetHotelRoomResult']['Error']['ErrorMessage'].'<br>';
  }

?>
