<?php
  include 'connect.php';

//  testreviewBooking.php?trace='..'&index='..'&code='.$code1.'&name='..'&nationality='..'&rooms='..'&roomindex='..'&ratePcode='..'&roomTcode='..'&roomTname='..'&bedTcode='..'&smoking='..'&roomprice='..'&tax='..'&extraguest='..'&child='..'&other='..'&published='..'&offer='..'&commission='..'&markup='..'&service='..'&tds='..'


  /*
  testreviewBooking.php?trace='.$trace1.'&index='.$index1.'&code='.$code1.'&name='.$responseHotelInfo['HotelInfoResult']['HotelDetails']['HotelName'].'&roomindex='.$responseRoomInfo['GetHotelRoomResult']['HotelRoomsDetails'][$i]['RoomIndex'].'&ratePcode='.$responseRoomInfo['GetHotelRoomResult']['HotelRoomsDetails'][$i]['RatePlanCode'].'&roomTcode='.$responseRoomInfo['GetHotelRoomResult']['HotelRoomsDetails'][$i]['RoomTypeCode'].'&roomTname='.$responseRoomInfo['GetHotelRoomResult']['HotelRoomsDetails'][$i]['RoomTypeName'].'&bedTcode='.$responseRoomInfo['GetHotelRoomResult']['HotelRoomsDetails'][$i]['BedTypes']['BedTypeCode'].'&smoking='.$responseRoomInfo['GetHotelRoomResult']['HotelRoomsDetails'][$i]['SmokingPreference'].'&roomprice='.$responseRoomInfo['GetHotelRoomResult']['HotelRoomsDetails'][$i]['Price']['RoomPrice'].'&tax='.$responseRoomInfo['GetHotelRoomResult']['HotelRoomsDetails'][$i]['Price']['Tax'].'&extraguest='.$responseRoomInfo['GetHotelRoomResult']['HotelRoomsDetails'][$i]['Price']['ExtraGuestCharge'].'&child='.$responseRoomInfo['GetHotelRoomResult']['HotelRoomsDetails'][$i]['Price']['ChildCharge'].'&other='.$responseRoomInfo['GetHotelRoomResult']['HotelRoomsDetails'][$i]['Price']['OtherCharges'].'&published='.$responseRoomInfo['GetHotelRoomResult']['HotelRoomsDetails'][$i]['Price']['PublishedPrice'].'&offer='.$responseRoomInfo['GetHotelRoomResult']['HotelRoomsDetails'][$i]['Price']['OfferedPrice'].'&commission='.$responseRoomInfo['GetHotelRoomResult']['HotelRoomsDetails'][$i]['Price']['AgentCommission'].'&markup='.$responseRoomInfo['GetHotelRoomResult']['HotelRoomsDetails'][$i]['Price']['AgentMarkUp'].'&service='.$responseRoomInfo['GetHotelRoomResult']['HotelRoomsDetails'][$i]['Price']['ServiceTax'].'&tds='.$responseRoomInfo['GetHotelRoomResult']['HotelRoomsDetails'][$i]['Price']['TDS'].'

*/


  $ip = $_SESSION['userip'];
  $token = $_SESSION['token'];

  $trace = $_GET['trace'];
  $index = $_GET['index'];
  $code = $_GET['code'];
  $name = $_GET['name'];
  $nationality = $_GET['nationality'];
  $rooms = $_GET['rooms'];
  $roomindex = $_GET['roomindex'];
  $roomTcode = $_GET['roomTcode'];
  $roomTname = $_GET['roomTname'];
  $bedTcode = $_GET['bedTcode'];
  $smoking = $_GET['smoking'];
  $roomprice = $_GET['roomprice'];
  $ratePcode = $_GET['ratePcode'];
  $tax = $_GET['tax'];
  $other = $_GET['other'];
  $extraguest = $_GET['extraguest'];
  $child = $_GET['child'];
  $published = $_GET['published'];
  $offer = $_GET['offer'];
  $commission = $_GET['commission'];
  $markup = $_GET['markup'];
  $service = $_GET['service'];
  $tds = $_GET['tds'];
  $publishedRound = round($published);
  $offerRound = round($offer);

  // echo '$trace : '.$trace;
  // echo '<br>';
  // echo '$index : '.$index;
  // echo '<br>';
  // echo '$code : '.$code;
  // echo '<br>';
  // echo '$name : '.$name;
  // echo '<br>';
  // echo '$nationality : '.$nationality;
  // echo '<br>';
  // echo '$rooms : '.$rooms;
  // echo '<br>';
  // echo '$roomindex : '.$roomindex;
  // echo '<br>';
  // echo '$ratePcode : '.$ratePcode;
  // echo '<br>';
  // echo '$roomTcode : '.$roomTcode;
  // echo '<br>';
  // echo '$roomTname : '.$roomTname;
  // echo '<br>';
  // echo '$bedTcode : '.$bedTcode;
  // echo '<br>';
  // echo '$smoking : '.$smoking;
  // echo '<br>';
  // echo '$roomprice : '.$roomprice;
  // echo '<br>';
  // echo '$tax : '.$tax;
  // echo '<br>';
  // echo '$extraguest : '.$extraguest;
  // echo '<br>';
  // echo '$child : '.$child;
  // echo '<br>';
  // echo '$other : '.$other;
  // echo '<br>';
  // echo '$published : '.$published;
  // echo '<br>';
  // echo '$publishedRound : '.$publishedRound;
  // echo '<br>';
  // echo '$offer : '.$offer;
  // echo '<br>';
  // echo '$offerRound : '.$offerRound;
  // echo '<br>';
  // echo '$commission : '.$commission;
  // echo '<br>';
  // echo '$markup : '.$markup;
  // echo '<br>';
  // echo '$service : '.$service;
  // echo '<br>';
  // echo '$tds : '.$tds;
  // echo '<br><br>';
  // echo '<hr><hr>';


  $trace = "\"".$trace."\"";
  $index = "\"".$index."\"";
  $code = "\"".$code."\"";
  $name = "\"".$name."\"";
  $nationality = "\"".$nationality."\"";
  $rooms = "\"".$rooms."\"";
  $roomindex = "\"".$roomindex."\"";
  $roomTcode = "\"".$roomTcode."\"";
  $roomTname = "\"".$roomTname."\"";
  $bedTcode = "\"".$bedTcode."\"";
//  $smoking = "\"".$smoking."\"";
  $roomprice = "\"".$roomprice."\"";
  $ratePcode = "\"".$ratePcode."\"";
  $tax = "\"".$tax."\"";
  $other = "\"".$other."\"";
  $extraguest = "\"".$extraguest."\"";
  $child = "\"".$child."\"";
  $published = "\"".$published."\"";
  $offer = "\"".$offer."\"";
  $commission = "\"".$commission."\"";
  $markup = "\"".$markup."\"";
  $service = "\"".$service."\"";
  $tds = "\"".$tds."\"";
  $publishedRound = "\"".$publishedRound."\"";
  $offerRound = "\"".$offerRound."\"";

  echo '$ip : '.$ip;
  echo '<br>';
  echo '$token : '.$token;
  echo '<br>';
  echo '$trace : '.$trace;
  echo '<br>';
  echo '$index : '.$index;
  echo '<br>';
  echo '$code : '.$code;
  echo '<br>';
  echo '$name : '.$name;
  echo '<br>';
  echo '$nationality : '.$nationality;
  echo '<br>';
  echo '$rooms : '.$rooms;
  echo '<br>';
  echo '$roomindex : '.$roomindex;
  echo '<br>';
  echo '$ratePcode : '.$ratePcode;
  echo '<br>';
  echo '$roomTcode : '.$roomTcode;
  echo '<br>';
  echo '$roomTname : '.$roomTname;
  echo '<br>';
  echo '$bedTcode : '.$bedTcode;
  echo '<br>';
  echo '$smoking : '.$smoking;
  echo '<br>';
  echo '$roomprice : '.$roomprice;
  echo '<br>';
  echo '$tax : '.$tax;
  echo '<br>';
  echo '$extraguest : '.$extraguest;
  echo '<br>';
  echo '$child : '.$child;
  echo '<br>';
  echo '$other : '.$other;
  echo '<br>';
  echo '$published : '.$published;
  echo '<br>';
  echo '$publishedRound : '.$publishedRound;
  echo '<br>';
  echo '$offer : '.$offer;
  echo '<br>';
  echo '$offerRound : '.$offerRound;
  echo '<br>';
  echo '$commission : '.$commission;
  echo '<br>';
  echo '$markup : '.$markup;
  echo '<br>';
  echo '$service : '.$service;
  echo '<br>';
  echo '$tds : '.$tds;
  echo '<br><br>';
  echo '<hr><hr>';


  if($smoking == "NoPreference"){
    $smoking = 0;
  }
  if($smoking == "Smoking"){
    $smoking = 1;
  }
  if($smoking == "NonSmoking"){
    $smoking = 2;
  }
  if($smoking == "Either"){
    $smoking = 3;
  }


  $requestReview = curl_init();

  curl_setopt_array($requestReview, array(
    CURLOPT_URL => "http://api.tektravels.com/BookingEngineService_Hotel/hotelservice.svc/rest/BlockRoom/",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => "{\n    \"ResultIndex\": $index,\n    \"HotelCode\": $code,\n    \"HotelName\": $name,\n    \"GuestNationality\": \"IN\",\n    \"NoOfRooms\": \"1\",\n    \"ClientReferenceNo\": \"0\",\n    \"IsVoucherBooking\": \"true\",\n    \"HotelRoomsDetails\": [\n        {\n            \"RoomIndex\": $roomindex,\n            \"RoomTypeCode\": $roomTcode,\n            \"RoomTypeName\": $roomTname,\n            \"RatePlanCode\": $ratePcode,\n            \"BedTypeCode\": null,\n            \"SmokingPreference\": $smoking,\n            \"Supplements\": null,\n            \"Price\": {\n                \"CurrencyCode\": \"INR\",\n                \"RoomPrice\": $roomprice,\n                \"Tax\": $tax,\n                \"ExtraGuestCharge\": $extraguest,\n                \"ChildCharge\": $child,\n                \"OtherCharges\": $other,\n                \"Discount\": \"0\",\n                \"PublishedPrice\": $published,\n                \"PublishedPriceRoundedOff\": $publishedRound,\n                \"OfferedPrice\": $offer,\n                \"OfferedPriceRoundedOff\": $offerRound,\n                \"AgentCommission\": $commission,\n                \"AgentMarkUp\": $markup,\n                \"ServiceTax\": $service,\n                \"TDS\": $tds\n            }\n        }\n    ],\n    \"EndUserIp\": $ip,\n    \"TokenId\": $token,\n    \"TraceId\": $trace\n}",
    CURLOPT_HTTPHEADER => array(
      "Content-Type: application/json",
      "Postman-Token: a03a2d62-ae41-4fd9-a6d1-8a0ce9ba2c01",
      "cache-control: no-cache"
    ),
  ));

  $responseReview = curl_exec($requestReview);
  $responseReview = json_decode($responseReview, true);
  $err = curl_error($requestReview);

  curl_close($requestReview);

  if ($err) {
    echo "cURL Error #:" . $err;
  }
  // else {
  //   echo $responseReview;
  // }


  echo '******************************************************************************';
  echo '<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; REVIEW YOUR BOOKING<br>';
  echo '******************************************************************************';
  echo '<br><br><br>';

  if($responseReview['BlockRoomResult']['ResponseStatus'] == 1){
    if($responseReview['BlockRoomResult']['AvailabilityType'] == "Available"){
      echo '<b>Booking for this Room needs Confirmation from Hotel which will take some time.<br>In case of Failure in Confirmation, we will Refund your amount. :) </b><br><br>';
    }

    if($responseReview['BlockRoomResult']['IsPriceChanged']){
      echo '<b># We get an updated price from Hotel, Please take a look at Total Price before proceeding for Payment.   </b><br>';
    }

    if($responseReview['BlockRoomResult']['IsCancellationPolicyChanged']){
      echo '<b># We get an update in Cancellation Policy from Hotel, Please take a look at Cancellation Policy before proceeding for Payment.   </b><br>';
    }

    echo '<b>Hotel Name : </b>'.$responseReview['BlockRoomResult']['HotelName'].'<br>';
    echo '<b>Rating : </b>'.$responseReview['BlockRoomResult']['StarRating'].' Star<br>';
    echo '<b>Address : </b>'.$responseReview['BlockRoomResult']['AddressLine1'].$responseReview['BlockRoomResult']['AddressLine2'].'<br>';
    echo '<b>Hotel Policy : </b>'.$responseReview['BlockRoomResult']['HotelPolicyDetail'].'<br>';
    // echo '<b> : </b>'..'<br>';
    // echo '<b> : </b>'..'<br>';
    // echo '<b> : </b>'..'<br>';
    // echo '<b> : </b>'..'<br>';
    // echo '<b> : </b>'..'<br>';
    // echo '<b> : </b>'..'<br>';
    // echo '<b> : </b>'..'<br>';
    // echo '<b> : </b>'..'<br>';
    // echo '<b> : </b>'..'<br>';
    // echo '<b> : </b>'..'<br>';
    // echo '<b> : </b>'..'<br>';
    // echo '<b> : </b>'..'<br>';
    // echo '<b> : </b>'..'<br>';
    // echo '<b> : </b>'..'<br>';
    // echo '<b> : </b>'..'<br>';
    // echo '<b> : </b>'..'<br>';
    // echo '<b> : </b>'..'<br>';
    // echo '<b> : </b>'..'<br>';
    // echo '<b> : </b>'..'<br>';
    // echo '<b> : </b>'..'<br>';
    // echo '<b> : </b>'..'<br>';
    // echo '<b> : </b>'..'<br>';
    // echo '<b> : </b>'..'<br>';
    // echo '<b> : </b>'..'<br>';
    // echo '<b> : </b>'..'<br>';
    // echo '<b> : </b>'..'<br>';
    // echo '<b> : </b>'..'<br>';
    // echo '<b> : </b>'..'<br>';
    // echo '<b> : </b>'..'<br>';
    // echo '<b> : </b>'..'<br>';
    // echo '<b> : </b>'..'<br>';
    // echo '<b> : </b>'..'<br>';
  }
  else{
    echo '<b>Response Status : </b>'.$responseReview['BlockRoomResult']['ResponseStatus'].'<br>';
    echo '<b>Error Message : </b>'.$responseReview['BlockRoomResult']['Error']['ErrorMessage'];
  }






?>
