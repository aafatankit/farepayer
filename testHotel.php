<?php
  include 'connect.php';

  // Getting User IP Address.
  $ip = getenv('HTTP_CLIENT_IP')?:
  getenv('HTTP_X_FORWARDED_FOR')?:
  getenv('HTTP_X_FORWARDED')?:
  getenv('HTTP_FORWARDED_FOR')?:
  getenv('HTTP_FORWARDED')?:
  getenv('REMOTE_ADDR');

  // $_SESSION['userip'] = $ip;
  $_SESSION['userip'] = "\"".$ip."\"";

  // API Authentication Process Starts
  $curl = curl_init();
  curl_setopt_array($curl, array(
    CURLOPT_URL => "http://api.tektravels.com/SharedServices/SharedData.svc/rest/Authenticate",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => "{\n\"ClientId\": \"ApiIntegrationNew\",\n\"UserName\": \"Fare\",\n\"Password\": \"fare@1234\",\n\"EndUserIp\": $ip \n}",
    CURLOPT_HTTPHEADER => array(
      "Content-Type: application/json",
      "Postman-Token: 91da483e-f2bd-4cac-a8da-4cf899928b01",
      "cache-control: no-cache"
    ),
  ));

  curl_setopt($curl, CURLOPT_TIMEOUT,500);
  $response = curl_exec($curl);
  $response = json_decode($response, true);
  $err = curl_error($curl);

  curl_close($curl);

  if ($err) {
    echo "cURL Error #:" . $err;
  }

  $token = $response['TokenId'];
  $_SESSION['token'] = "\"".$token."\"";
  // else {
  //   echo $response;
  // }
  // echo $_SESSION['token'];
    // API Authentication Process EndsgfvdcS

?>
<!DOCTYPE html>
<html>
  <head>
    <title>Hotel</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  </head>
  <body>
    <form action="testshowHotelResponse.php" method="post">
    <!-- <form action="newResponse.php" method="post"> -->
      Destination:
      <input type="text" name="city" id="city" placeholder="Search" list="cityList"><br>
      <div id="cityList">
      </div>
      <input type="hidden" name="cityId" id="uniqueCity" value="0">
<!--      <datalist id="cityList">
      </datalist>-->
      Check In:
      <input type="date" name="indate" value="" placeholder="CheckIn"><br>
      Check Out:
      <input type="date" name="outdate" value="" placeholder="CheckOut"><br>
      No. of Rooms:
      <input type="number" name="roomno" value="" placeholder="Rooms"><br>
      Travellers:
      <input type="number" name="traveller" value="" placeholder="Adults"><br>
      Nationality:
      <!-- <input type="text" name="nationality" id="nationality" placeholder="Nationality"><br>
      <div id="nationalityList">
      </div> -->
      <br>
      <input type="submit" value="Search Hotel">
    </form>




    <script>
        $(document).ready(function(){
            $('#city').keyup(function(){
                var query = $(this).val();
                if(query != ''){
                    $.ajax({
                        url:"searchHotelList.php",
                        method:"POST",
                        data:{query:query},
                        success:function(data){
                            $('#cityList').fadeIn();
                            $('#cityList').html(data);
                        }
                    });
                }
                else{
                    $('#cityList').fadeOut();
                    $('#cityList').html("");
                }
            });
            $(document).on('click','li',function(){
                // $('#uniqueCountry').val($(this).id());
                $('#uniqueCity').val($(this).val());
                $('#city').val($(this).text());
                $('#cityList').fadeOut();
            });
        });
    </script>

    <script>
        $(document).ready(function(){
            $('#nationality').keyup(function(){
                var query = $(this).val();
                if(query != ''){
                    $.ajax({
                        url:"searchNationalityList.php",
                        method:"POST",
                        data:{query:query},
                        success:function(data){
                            $('#nationalityList').fadeIn();
                            $('#nationalityList').html(data);
                        }
                    });
                }
                else{
                    $('#nationalityList').fadeOut();
                    $('#nationalityList').html("");
                }
            });
            $(document).on('click','li',function(){
                $('#nationality').val($(this).text());
                $('#nationalityList').fadeOut();
            });
        });
    </script>
  </body>
</html>
