<?php
  include 'connect.php';

  $q1 = "select * from hotelCountryList";
  $data = mysqli_query($con,$q1);
  while ($index = mysqli_fetch_array($data)) {
    // code...
    $ccode = $index['countryCode'];
    $q = "select * from hotelCityList where countryCode = '$ccode'";
    $result = mysqli_query($con,$q);
    if(mysqli_num_rows($result)>0){
      while ($row = mysqli_fetch_array($result)) {
        // code...
        $replace = $row['cityName'].", ".$index['countryName'];
        $yo = $row['id'];
        $q3 = "update hotelCityList set destinationName = '$replace' where id = '$yo'";
        mysqli_query($con,$q3);
      }
    }


  }
?>
