<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon"/>
    <meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Best Holiday Pacakges, Fligts, Hotels at Lowest Prices- Farepayer.com</title>
    <meta name="description" content="Farepayer.com is one of the leading Travel Companies in India, based in Delhi. We offer a consistent service and multiple resources to satisfy your every travel related desire. " />



	
	
	<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.5.0/css/all.css' integrity='sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU' crossorigin='anonymous'>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Superfish -->
	<link rel="stylesheet" href="css/superfish.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">
	<!-- Date Picker -->
	<link rel="stylesheet" href="css/bootstrap-datepicker.min.css">
	<!-- CS Select -->
	<link rel="stylesheet" href="css/cs-select.css">
	<link rel="stylesheet" href="css/cs-skin-border.css">
	<link rel="stylesheet" type="text/css" href="engine1/style.css" />
	<script type="text/javascript" src="engine1/jquery.js"></script>
	<link rel="stylesheet" href="css/style.css">

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>


</head>
<body>
<style>
	#more {display: none;}
	.responsive {
  width: 100%;
  height: auto;
}
	
	
.tab1.active {
    display: block
}
.tab1 {
    display: none
}
.tabing {
    float: left;
    width: 100%;
    background: rgb(35, 165, 222);
    padding: 0 10px 10px 10px;
    color: #fff;
}
.tabing ul {
    margin: 0px;
    padding: 0px;
    list-style: none;
    width: 100%;
    float: left;
}
.tabing ul li {
    float: left;
}
.tabing ul li a {
    display: block;
    padding: 5px;
    text-decoration: none;
    color: #fff;
    background: rgba(0, 130, 185, .9);
    margin: 0 10px 0 0;
    padding: 5px 10px 5px 10px;
    border-radius: 0px 0px 5px 5px;
    font-size: 16px;
    text-align: left;
}
.tabing ul li a.active {
    background: #ba0400
}
.hotel-tab {
    width: 93%;
    float: left;
    margin-top: 10px;
  
}
.hotel-tab .textboxstyle {
    width: 100%;
    float: left;
    color: #191919;
    padding: 8px 10px 8px 12px;
    border: none;
    border-radius: 3px;
    background: #f5f5f5;
    font-size: 14px;
    line-height: 20px;
}
.persent-one {
    width: 29%;
    float: left;
    margin-right: 1%;
    position: relative;
    margin-bottom: 10px;
}
.persent-one i {
    position: absolute;
    left: 10px;
    top: 10px;
    color: #191919;
    font-size: 18px;
}
.persent-one.less-per {
    width: 16%;
    float: left;
    margin-right: 1%;
}
.persent-one.less-btn {
    width: 5%;
    float: left;
    margin-right: 1%;
}
	
	
}
@media screen and (min-width: 450px) {
  .hotel-tab .textboxstyle {
    width: 81%;
    float: left;
    color: #191919;
    padding: 0px 0px 1px 3px;
    border: none;
    border-radius: 3px;
    background: #f5f5f5;
    line-height: 20px;
}
  }


}$('.tabing ul li a').click(function(e) {
         e.stopPropagation();
         e.preventDefault();
         var tabcont = $(this).attr('href');
         console.log(tabcont);
         $('.tabing a').removeClass('active');
         $(this).addClass('active');
         $('.tab1').hide();
         $(tabcont).show();
     });</style>











	<!-- Start:header-top -->
 
   <?php include 'header.php'; ?>
        
	<!-- end:header-top -->

<div class="hotel-engine">
               <div class="container">
                  <div class="tabing"style="BORDER-RADIUS: 5PX;">
                     
                     <div class="tab-content">
                        <div id="1" class="tab1 active">
                           <div class="hotel-tab row">
                              
                              <div class="persent-one">
                                 <h4>Destination:</h4>
                                 <input type="text" name="dep" class="textboxstyle" id="arival" placeholder="Enter City name">
                              </div>
                              <div class="persent-one less-per">
                                 <h4>Check In</h4>
                                 <input type="Date" name="dep" class="textboxstyle" id="from-date1" placeholder="Check in">
                              </div>
                              <div class="persent-one less-per">
                                 <h4>Check Out</h4>
                                 <input type="date" name="dep" class="textboxstyle" id="to-date" placeholder="Check out">
                              </div>
                              <div class="persent-one">
                              <h4>Travellers</h4>
                                 <div class="textboxstyle" id="Guests">Guests</div>
                              </div>
                              <div class="persent-one less-btn">
                                 <input type="Submit" name="submit" value="Search" class="btn btn-info cst-btn" id="search">
                              </div>
                           </div>
                      
                        </div>
               
                     </div>
                     </div>

                  </div>

               </div>
          




 

<div class="row" style="background: #f3f3f39e; margin-top: 10px; font-size: 15px ;PADDING: px;">
<div class="container">
<div class="col-md-12">

<div class="col-md-3" style="border: #ededed solid 1px;background: white; PADDING: 5px;height: 38px;width: 381px;">
<div class="row"style="margin: auto;">
<div align="left"><b>Filter By: <i class="fa fa-filter" aria-hidden="true"></i> </b>
</div>
<div align="right">
   
   <div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"style="margin: 0px 45px;"><b>Sort By</b>
    </button>
    <ul class="dropdown-menu" style="font-size: smaller;">
      <li><a href="#">Rating: High to Low </a></li>
      <li><a href="#">Rating: Low to High </a></li>
      <li><a href="#">Price : High to Low </a></li>
      <li><a href="#">Price : Low to High </a></li>
      <li><a href="#"></a></li>
    </ul>
  </div>
</div> 
</i>
    </div>
<!--
<div class="col-md-6" ><b>Filter By: <i class="fa fa-filter" aria-hidden="true"></i> </b>
</div>
<div class="col-md-6">
   
   <div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"><b>Sort By</b>
    </button>
    <ul class="dropdown-menu" style="font-size: smaller;">
      <li><a href="#">Rating: High to Low </a></li>
      <li><a href="#">Rating: Low to High </a></li>
      <li><a href="#">Price : High to Low </a></li>
      <li><a href="#">Price : Low to High </a></li>
      <li><a href="#"></a></li>
    </ul>
  </div>
</div> 
</i>
    </div>
-->
    
	</div>

	
<div class="col-md-9">
<div class="container"style="border: #ededed solid 1px;background: white;PADDING: 3px;">
<div class="row">
<div class="col-md-4"><h3>&nbsp;
<i class="fa fa-map-marker" style="font-size: 22px" aria-hidden="true"></i> Enter Hotel Name</h3 ></div>
	

<div class="col-md-8">
 <form class="Searchbar">
  <input type="text" placeholder="  Search Hotel Name" name="search">
  <button type="submit"><i class="fa fa-search"></i> Search &nbsp;  </button>
</form>
	</div>
</div>
</div>
</div>

</div>
	</div>
		</div>

	</div>



<div class="row" style="background: #f3f3f39e; margin-top: 10px;PADDING: 20px;" >
<div class="container">


	<div class="col-md-12">
		<div class="col-md-3" style="font-size: 15px;border: #ededed solid 1px;background: white;">
			<h4 style="margin-top: 10px;">Search Hotel</h4>
			<div class="form-group">
      <input type="text" class="form-control" placeholder="Enter hotel location" name="text2">
    </div>
			
		
	
		<h4><i class="fas fa-wallet" style="font-size:24px;color:#0042ff;" aria-hidden="true"></i>  Price Range	</h4>
		
  <input type="checkbox" name="vehicle1" value="Bike">  	Upto &#8377; 999<br>
  <input type="checkbox" name="vehicle2" value="Car">    	&#8377; 1000 to &#8377; 3000<br>
  <input type="checkbox" name="vehicle2" value="Car">		&#8377; 3000 to &#8377; 5000<br> 
  <input type="checkbox" name="vehicle2" value="Car">		&#8377; 3000 to &#8377; 5000<br>
  <input type="checkbox" name="vehicle2" value="Car">		&#8377; 5000 to &#8377; 10000<br>

<hr>			
 <h4><i class="fa fa-star-half-o"style="font-size:24px;color:#0042ff;" aria-hidden="true"></i> Hotel Star Rating</h4>
	
    <input type="checkbox" name="vehicle2" value="Car">&nbsp;
    1 Star <i class="fa fa-star" style="font-size:15px;color:#FF9800;"></i> 
    <br>
   <input type="checkbox" name="vehicle2" value="Car">&nbsp;
  2 Star <i class="fa fa-star" style="font-size:15px;color:#FF9800;"></i>
  <i class="fa fa-star" style="font-size:15px;color:#FF9800;"></i>   
 <br>
   	
   	
   	 <input type="checkbox" name="vehicle2" value="Car">&nbsp;
  3 Star	<i class="fa fa-star" style="font-size:15px;color:#FF9800;"></i>
  <i class="fa fa-star" style="font-size:15px;color:#FF9800;"></i>
  <i class="fa fa-star" style="font-size:15px;color:#FF9800;"></i>
 <br>
 
  <input type="checkbox" name="vehicle2" value="Car">&nbsp;
  	4 Star <i class="fa fa-star" style="font-size:15px;color:#FF9800;"></i>
  <i class="fa fa-star" style="font-size:15px;color:#FF9800;"></i>
  <i class="fa fa-star" style="font-size:15px;color:#FF9800;"></i>
  <i class="fa fa-star" style="font-size:15px;color:#FF9800;"></i>
 <br>
  <input type="checkbox" name="vehicle2" value="Car">&nbsp;
  	5 Star <i class="fa fa-star" style="font-size:15px;color:#FF9800;"></i>
  <i class="fa fa-star" style="font-size:15px;color:#FF9800;"></i>
  <i class="fa fa-star" style="font-size:15px;color:#FF9800;"></i>
  <i class="fa fa-star" style="font-size:15px;color:#FF9800;"></i>
  <i class="fa fa-star" style="font-size:15px;color:#FF9800;"></i>
<p></p>
<br>
<div class="text-center mt">
<button type="button" class="btn btn-success">submit</button>
</div>
	</div>
			
			
			
<!--hotels-->
	
	<div class="col-md-9 mt">
	<div class="container" style="padding: 15px;background:#FFFFFF;";>
	<div class="row">
	<div class="col-md-3"><img src="images/hotel/hotel1.jpg" class="responsive" alt=""></div>
<h3 style="padding-left: 15px;">Hotel Name<br>
 	<i class="fa fa-star" style="font-size:15px;color:#FF9800;"></i>
	<i class="fa fa-star" style="font-size:15px;color:#FF9800;"></i>
	<i class="fa fa-star" style="font-size:15px;color:#FF9800;"></i>
	<br>
	<p text-light style="font-size: small;">
	<i class="fa fa-map-marker fa-2x"></i> 
	Area : Colva Area, South Goa,</p>
	
	<br>	

	<i class="fa fa-wifi ftooltip icolorsize"><span class="ftooltiptext"><h6>Wifi</h6></span></i>&nbsp;
	<i class="fas fa-coffee ftooltip icolorsize"><span class="ftooltiptext"><h6>breakfast</h6></span></i>&nbsp;
	<i class="fa fa-snowflake-o ftooltip icolorsize"><span class="ftooltiptext"><h6>AC</h6></span></i>&nbsp;
	<i class="fas fa-swimmer ftooltip icolorsize"><span class="ftooltiptext"><h6>Swimming Pool</h6></span></i>
	<i class="fas fa-concierge-bell ftooltip icolorsize"><span class="ftooltiptext"><h6>Room Srevice</h6></span></i>&nbsp;
</h3> 
	<div class="col-md-5   textc mediatextleft">
		<button type="button" class="btn btn-outline-primary"><b>Couple Friendly</b></button>
		<p></p>
		<p> Rating &nbsp;<span class="badge bg-primary">45/5</span></p>
		<h2><b>&#8377; 4500 /-</b></h2>
<p></p>
</div>
</div>
</div>
</div>

	<div class="col-md-9 mt">
	<div class="container" style="padding: 15px;background:#FFFFFF;";>
	<div class="row">
	<div class="col-md-3"><img src="images/hotel/hotel1.jpg" class="responsive" alt=""></div>
<h3 style="padding-left: 15px;">Hotel Name<br>
 	<i class="fa fa-star" style="font-size:15px;color:#FF9800;"></i>
	<i class="fa fa-star" style="font-size:15px;color:#FF9800;"></i>
	<i class="fa fa-star" style="font-size:15px;color:#FF9800;"></i>
	<br>
	<p text-light style="font-size: small;">
	<i class="fa fa-map-marker fa-2x"></i> 
	Area : Colva Area, South Goa,</p>
	
	<br>	

	<i class="fa fa-wifi ftooltip icolorsize"><span class="ftooltiptext"><h6>Wifi</h6></span></i>&nbsp;
	<i class="fas fa-coffee ftooltip icolorsize"><span class="ftooltiptext"><h6>breakfast</h6></span></i>&nbsp;
	<i class="fa fa-snowflake-o ftooltip icolorsize"><span class="ftooltiptext"><h6>AC</h6></span></i>&nbsp;
	<i class="fas fa-swimmer ftooltip icolorsize"><span class="ftooltiptext"><h6>Swimming Pool</h6></span></i>
	<i class="fas fa-concierge-bell ftooltip icolorsize"><span class="ftooltiptext"><h6>Room Srevice</h6></span></i>&nbsp;
</h3> 
	<div class="col-md-5   textc mediatextleft">
		<button type="button" class="btn btn-outline-primary"><b>Couple Friendly</b></button>
		<p></p>
		<p> Rating &nbsp;<span class="badge bg-primary">45/5</span></p>
		<h2><b>&#8377; 4500 /-</b></h2>
<p></p>
</div>
</div>
</div>
</div>

	<div class="col-md-9 mt">
	<div class="container" style="padding: 15px;background:#FFFFFF;";>
	<div class="row">
	<div class="col-md-3"><img src="images/hotel/hotel1.jpg" class="responsive" alt=""></div>
<h3 style="padding-left: 15px;">Hotel Name<br>
 	<i class="fa fa-star" style="font-size:15px;color:#FF9800;"></i>
	<i class="fa fa-star" style="font-size:15px;color:#FF9800;"></i>
	<i class="fa fa-star" style="font-size:15px;color:#FF9800;"></i>
	<br>
	<p text-light style="font-size: small;">
	<i class="fa fa-map-marker fa-2x"></i> 
	Area : Colva Area, South Goa,</p>
	
	<br>	

	<i class="fa fa-wifi ftooltip icolorsize"><span class="ftooltiptext"><h6>Wifi</h6></span></i>&nbsp;
	<i class="fas fa-coffee ftooltip icolorsize"><span class="ftooltiptext"><h6>breakfast</h6></span></i>&nbsp;
	<i class="fa fa-snowflake-o ftooltip icolorsize"><span class="ftooltiptext"><h6>AC</h6></span></i>&nbsp;
	<i class="fas fa-swimmer ftooltip icolorsize"><span class="ftooltiptext"><h6>Swimming Pool</h6></span></i>
	<i class="fas fa-concierge-bell ftooltip icolorsize"><span class="ftooltiptext"><h6>Room Srevice</h6></span></i>&nbsp;
</h3> 
	<div class="col-md-5   textc mediatextleft">
		<button type="button" class="btn btn-outline-primary"><b>Couple Friendly</b></button>
		<p></p>
		<p> Rating &nbsp;<span class="badge bg-primary">45/5</span></p>
		<h2><b>&#8377; 4500 /-</b></h2>
<p></p>
</div>
</div>
</div>
</div>

	<div class="col-md-9 col-md-offset-3 mt">
	<div class="container" style="padding: 15px;background:#FFFFFF;";>
	<div class="row">
	<div class="col-md-3"><img src="images/hotel/hotel1.jpg" class="responsive" alt=""></div>
<h3 style="padding-left: 15px;">Hotel Name<br>
 	<i class="fa fa-star" style="font-size:15px;color:#FF9800;"></i>
	<i class="fa fa-star" style="font-size:15px;color:#FF9800;"></i>
	<i class="fa fa-star" style="font-size:15px;color:#FF9800;"></i>
	<br>
	<p text-light style="font-size: small;">
	<i class="fa fa-map-marker fa-2x"></i> 
	Area : Colva Area, South Goa,</p>
	
	<br>	

	<i class="fa fa-wifi ftooltip icolorsize"><span class="ftooltiptext"><h6>Wifi</h6></span></i>&nbsp;
	<i class="fas fa-coffee ftooltip icolorsize"><span class="ftooltiptext"><h6>breakfast</h6></span></i>&nbsp;
	<i class="fa fa-snowflake-o ftooltip icolorsize"><span class="ftooltiptext"><h6>AC</h6></span></i>&nbsp;
	<i class="fas fa-swimmer ftooltip icolorsize"><span class="ftooltiptext"><h6>Swimming Pool</h6></span></i>
	<i class="fas fa-concierge-bell ftooltip icolorsize"><span class="ftooltiptext"><h6>Room Srevice</h6></span></i>&nbsp;
</h3> 
	<div class="col-md-5   textc mediatextleft">
		<button type="button" class="btn btn-outline-primary"><b>Couple Friendly</b></button>
		<p></p>
		<p> Rating &nbsp;<span class="badge bg-primary">45/5</span></p>
		<h2><b>&#8377; 4500 /-</b></h2>
<p></p>
</div>
</div>
</div>
</div>
			
	<div class="col-md-9 col-md-offset-3 mt">
	<div class="container" style="padding: 15px;background:#FFFFFF;";>
	<div class="row">
	<div class="col-md-3"><img src="images/hotel/hotel1.jpg" class="responsive" alt=""></div>
<h3 style="padding-left: 15px;">Hotel Name<br>
 	<i class="fa fa-star" style="font-size:15px;color:#FF9800;"></i>
	<i class="fa fa-star" style="font-size:15px;color:#FF9800;"></i>
	<i class="fa fa-star" style="font-size:15px;color:#FF9800;"></i>
	<br>
	<p text-light style="font-size: small;">
	<i class="fa fa-map-marker fa-2x"></i> 
	Area : Colva Area, South Goa,</p>
	
	<br>	

	<i class="fa fa-wifi ftooltip icolorsize"><span class="ftooltiptext"><h6>Wifi</h6></span></i>&nbsp;
	<i class="fas fa-coffee ftooltip icolorsize"><span class="ftooltiptext"><h6>breakfast</h6></span></i>&nbsp;
	<i class="fa fa-snowflake-o ftooltip icolorsize"><span class="ftooltiptext"><h6>AC</h6></span></i>&nbsp;
	<i class="fas fa-swimmer ftooltip icolorsize"><span class="ftooltiptext"><h6>Swimming Pool</h6></span></i>
	<i class="fas fa-concierge-bell ftooltip icolorsize"><span class="ftooltiptext"><h6>Room Srevice</h6></span></i>&nbsp;
</h3> 
	<div class="col-md-5   textc mediatextleft">
		<button type="button" class="btn btn-outline-primary"><b>Couple Friendly</b></button>
		<p></p>
		<p> Rating &nbsp;<span class="badge bg-primary">45/5</span></p>
		<h2><b>&#8377; 4500 /-</b></h2>
<p></p>
</div>
</div>
</div>
</div>
	
	<div class="col-md-9 col-md-offset-3 mt">
	<div class="container" style="padding: 15px;background:#FFFFFF;";>
	<div class="row">
	<div class="col-md-3"><img src="images/hotel/hotel1.jpg" class="responsive" alt=""></div>
<h3 style="padding-left: 15px;">Hotel Name<br>
 	<i class="fa fa-star" style="font-size:15px;color:#FF9800;"></i>
	<i class="fa fa-star" style="font-size:15px;color:#FF9800;"></i>
	<i class="fa fa-star" style="font-size:15px;color:#FF9800;"></i>
	<br>
	<p text-light style="font-size: small;">
	<i class="fa fa-map-marker fa-2x"></i> 
	Area : Colva Area, South Goa,</p>
	
	<br>	

	<i class="fa fa-wifi ftooltip icolorsize"><span class="ftooltiptext"><h6>Wifi</h6></span></i>&nbsp;
	<i class="fas fa-coffee ftooltip icolorsize"><span class="ftooltiptext"><h6>breakfast</h6></span></i>&nbsp;
	<i class="fa fa-snowflake-o ftooltip icolorsize"><span class="ftooltiptext"><h6>AC</h6></span></i>&nbsp;
	<i class="fas fa-swimmer ftooltip icolorsize"><span class="ftooltiptext"><h6>Swimming Pool</h6></span></i>
	<i class="fas fa-concierge-bell ftooltip icolorsize"><span class="ftooltiptext"><h6>Room Srevice</h6></span></i>&nbsp;
</h3> 
	<div class="col-md-5   textc mediatextleft">
		<button type="button" class="btn btn-outline-primary"><b>Couple Friendly</b></button>
		<p></p>
		<p> Rating &nbsp;<span class="badge bg-primary">45/5</span></p>
		<h2><b>&#8377; 4500 /-</b></h2>
<p></p>
</div>
</div>
</div>
</div>

	<div class="col-md-9 col-md-offset-3 mt">
	<div class="container" style="padding: 15px;background:#FFFFFF;";>
	<div class="row">
	<div class="col-md-3"><img src="images/hotel/hotel1.jpg" class="responsive" alt=""></div>
<h3 style="padding-left: 15px;">Hotel Name<br>
 	<i class="fa fa-star" style="font-size:15px;color:#FF9800;"></i>
	<i class="fa fa-star" style="font-size:15px;color:#FF9800;"></i>
	<i class="fa fa-star" style="font-size:15px;color:#FF9800;"></i>
	<br>
	<p text-light style="font-size: small;">
	<i class="fa fa-map-marker fa-2x"></i> 
	Area : Colva Area, South Goa,</p>
	
	<br>	

	<i class="fa fa-wifi ftooltip icolorsize"><span class="ftooltiptext"><h6>Wifi</h6></span></i>&nbsp;
	<i class="fas fa-coffee ftooltip icolorsize"><span class="ftooltiptext"><h6>breakfast</h6></span></i>&nbsp;
	<i class="fa fa-snowflake-o ftooltip icolorsize"><span class="ftooltiptext"><h6>AC</h6></span></i>&nbsp;
	<i class="fas fa-swimmer ftooltip icolorsize"><span class="ftooltiptext"><h6>Swimming Pool</h6></span></i>
	<i class="fas fa-concierge-bell ftooltip icolorsize"><span class="ftooltiptext"><h6>Room Srevice</h6></span></i>&nbsp;
</h3> 
	<div class="col-md-5   textc mediatextleft">
		<button type="button" class="btn btn-outline-primary"><b>Couple Friendly</b></button>
		<p></p>
		<p> Rating &nbsp;<span class="badge bg-primary">45/5</span></p>
		<h2><b>&#8377; 4500 /-</b></h2>
<p></p>
</div>
</div>
</div>
</div>

	<div class="col-md-9 col-md-offset-3 mt">
	<div class="container" style="padding: 15px;background:#FFFFFF;";>
	<div class="row">
	<div class="col-md-3"><img src="images/hotel/hotel1.jpg" class="responsive" alt=""></div>
<h3 style="padding-left: 15px;">Hotel Name<br>
 	<i class="fa fa-star" style="font-size:15px;color:#FF9800;"></i>
	<i class="fa fa-star" style="font-size:15px;color:#FF9800;"></i>
	<i class="fa fa-star" style="font-size:15px;color:#FF9800;"></i>
	<br>
	<p text-light style="font-size: small;">
	<i class="fa fa-map-marker fa-2x"></i> 
	Area : Colva Area, South Goa,</p>
	
	<br>	

	<i class="fa fa-wifi ftooltip icolorsize"><span class="ftooltiptext"><h6>Wifi</h6></span></i>&nbsp;
	<i class="fas fa-coffee ftooltip icolorsize"><span class="ftooltiptext"><h6>breakfast</h6></span></i>&nbsp;
	<i class="fa fa-snowflake-o ftooltip icolorsize"><span class="ftooltiptext"><h6>AC</h6></span></i>&nbsp;
	<i class="fas fa-swimmer ftooltip icolorsize"><span class="ftooltiptext"><h6>Swimming Pool</h6></span></i>
	<i class="fas fa-concierge-bell ftooltip icolorsize"><span class="ftooltiptext"><h6>Room Srevice</h6></span></i>&nbsp;
</h3> 
	<div class="col-md-5   textc mediatextleft">
		<button type="button" class="btn btn-outline-primary"><b>Couple Friendly</b></button>
		<p></p>
		<p> Rating &nbsp;<span class="badge bg-primary">45/5</span></p>
		<h2><b>&#8377; 4500 /-</b></h2>
<p></p>
</div>
</div>
</div>
</div>

	<div class="col-md-9 col-md-offset-3 mt">
	<div class="container" style="padding: 15px;background:#FFFFFF;";>
	<div class="row">
	<div class="col-md-3"><img src="images/hotel/hotel1.jpg" class="responsive" alt=""></div>
<h3 style="padding-left: 15px;">Hotel Name<br>
 	<i class="fa fa-star" style="font-size:15px;color:#FF9800;"></i>
	<i class="fa fa-star" style="font-size:15px;color:#FF9800;"></i>
	<i class="fa fa-star" style="font-size:15px;color:#FF9800;"></i>
	<br>
	<p text-light style="font-size: small;">
	<i class="fa fa-map-marker fa-2x"></i> 
	Area : Colva Area, South Goa,</p>
	
	<br>	

	<i class="fa fa-wifi ftooltip icolorsize"><span class="ftooltiptext"><h6>Wifi</h6></span></i>&nbsp;
	<i class="fas fa-coffee ftooltip icolorsize"><span class="ftooltiptext"><h6>breakfast</h6></span></i>&nbsp;
	<i class="fa fa-snowflake-o ftooltip icolorsize"><span class="ftooltiptext"><h6>AC</h6></span></i>&nbsp;
	<i class="fas fa-swimmer ftooltip icolorsize"><span class="ftooltiptext"><h6>Swimming Pool</h6></span></i>
	<i class="fas fa-concierge-bell ftooltip icolorsize"><span class="ftooltiptext"><h6>Room Srevice</h6></span></i>&nbsp;
</h3> 
	<div class="col-md-5   textc mediatextleft">
		<button type="button" class="btn btn-outline-primary"><b>Couple Friendly</b></button>
		<p></p>
		<p> Rating &nbsp;<span class="badge bg-primary">45/5</span></p>
		<h2><b>&#8377; 4500 /-</b></h2>
<p></p>
</div>
</div>
</div>
</div>

	<div class="col-md-9 col-md-offset-3 mt">
	<div class="container" style="padding: 15px;background:#FFFFFF;";>
	<div class="row">
	<div class="col-md-3"><img src="images/hotel/hotel1.jpg" class="responsive" alt=""></div>
<h3 style="padding-left: 15px;">Hotel Name<br>
 	<i class="fa fa-star" style="font-size:15px;color:#FF9800;"></i>
	<i class="fa fa-star" style="font-size:15px;color:#FF9800;"></i>
	<i class="fa fa-star" style="font-size:15px;color:#FF9800;"></i>
	<br>
	<p text-light style="font-size: small;">
	<i class="fa fa-map-marker fa-2x"></i> 
	Area : Colva Area, South Goa,</p>
	
	<br>	

	<i class="fa fa-wifi ftooltip icolorsize"><span class="ftooltiptext"><h6>Wifi</h6></span></i>&nbsp;
	<i class="fas fa-coffee ftooltip icolorsize"><span class="ftooltiptext"><h6>breakfast</h6></span></i>&nbsp;
	<i class="fa fa-snowflake-o ftooltip icolorsize"><span class="ftooltiptext"><h6>AC</h6></span></i>&nbsp;
	<i class="fas fa-swimmer ftooltip icolorsize"><span class="ftooltiptext"><h6>Swimming Pool</h6></span></i>
	<i class="fas fa-concierge-bell ftooltip icolorsize"><span class="ftooltiptext"><h6>Room Srevice</h6></span></i>&nbsp;
</h3> 
	<div class="col-md-5   textc mediatextleft">
		<button type="button" class="btn btn-outline-primary"><b>Couple Friendly</b></button>
		<p></p>
		<p> Rating &nbsp;<span class="badge bg-primary">45/5</span></p>
		<h2><b>&#8377; 4500 /-</b></h2>
<p></p>
</div>
</div>
</div>
</div>	
	
<div class="col-md-9 col-md-offset-3 mt">
	<div class="container" style="padding: 15px;background:#FFFFFF;";>
	<div class="row">
	<div class="col-md-3"><img src="images/hotel/hotel1.jpg" class="responsive" alt=""></div>
<h3 style="padding-left: 15px;">Hotel Name<br>
 	<i class="fa fa-star" style="font-size:15px;color:#FF9800;"></i>
	<i class="fa fa-star" style="font-size:15px;color:#FF9800;"></i>
	<i class="fa fa-star" style="font-size:15px;color:#FF9800;"></i>
	<br>
	<p text-light style="font-size: small;">
	<i class="fa fa-map-marker fa-2x"></i> 
	Area : Colva Area, South Goa,</p>
	
	<br>	

	<i class="fa fa-wifi ftooltip icolorsize"><span class="ftooltiptext"><h6>Wifi</h6></span></i>&nbsp;
	<i class="fas fa-coffee ftooltip icolorsize"><span class="ftooltiptext"><h6>breakfast</h6></span></i>&nbsp;
	<i class="fa fa-snowflake-o ftooltip icolorsize"><span class="ftooltiptext"><h6>AC</h6></span></i>&nbsp;
	<i class="fas fa-swimmer ftooltip icolorsize"><span class="ftooltiptext"><h6>Swimming Pool</h6></span></i>
	<i class="fas fa-concierge-bell ftooltip icolorsize"><span class="ftooltiptext"><h6>Room Srevice</h6></span></i>&nbsp;
</h3> 
	<div class="col-md-5   textc mediatextleft">
		<button type="button" class="btn btn-outline-primary"><b>Couple Friendly</b></button>
		<p></p>
		<p> Rating &nbsp;<span class="badge bg-primary">45/5</span></p>
		<h2><b>&#8377; 4500 /-</b></h2>
<p></p>
</div>
</div>
</div>
</div>

<div class="col-md-9 col-md-offset-3 mt">
	<div class="container" style="padding: 15px;background:#FFFFFF;";>
	<div class="row">
	<div class="col-md-3"><img src="images/hotel/hotel1.jpg" class="responsive" alt=""></div>
<h3 style="padding-left: 15px;">Hotel Name<br>
 	<i class="fa fa-star" style="font-size:15px;color:#FF9800;"></i>
	<i class="fa fa-star" style="font-size:15px;color:#FF9800;"></i>
	<i class="fa fa-star" style="font-size:15px;color:#FF9800;"></i>
	<br>
	<p text-light style="font-size: small;">
	<i class="fa fa-map-marker fa-2x"></i> 
	Area : Colva Area, South Goa,</p>
	
	<br>	

	<i class="fa fa-wifi ftooltip icolorsize"><span class="ftooltiptext"><h6>Wifi</h6></span></i>&nbsp;
	<i class="fas fa-coffee ftooltip icolorsize"><span class="ftooltiptext"><h6>breakfast</h6></span></i>&nbsp;
	<i class="fa fa-snowflake-o ftooltip icolorsize"><span class="ftooltiptext"><h6>AC</h6></span></i>&nbsp;
	<i class="fas fa-swimmer ftooltip icolorsize"><span class="ftooltiptext"><h6>Swimming Pool</h6></span></i>
	<i class="fas fa-concierge-bell ftooltip icolorsize"><span class="ftooltiptext"><h6>Room Srevice</h6></span></i>&nbsp;
</h3> 
	<div class="col-md-5   textc mediatextleft">
		<button type="button" class="btn btn-outline-primary"><b>Couple Friendly</b></button>
		<p></p>
		<p> Rating &nbsp;<span class="badge bg-primary">45/5</span></p>
		<h2><b>&#8377; 4500 /-</b></h2>
<p></p>
</div>
</div>
</div>
</div>
		
<div class="col-md-9 col-md-offset-3 mt">
	<div class="container" style="padding: 15px;background:#FFFFFF;";>
	<div class="row">
	<div class="col-md-3"><img src="images/hotel/hotel1.jpg" class="responsive" alt=""></div>
<h3 style="padding-left: 15px;">Hotel Name<br>
 	<i class="fa fa-star" style="font-size:15px;color:#FF9800;"></i>
	<i class="fa fa-star" style="font-size:15px;color:#FF9800;"></i>
	<i class="fa fa-star" style="font-size:15px;color:#FF9800;"></i>
	<br>
	<p text-light style="font-size: small;">
	<i class="fa fa-map-marker fa-2x"></i> 
	Area : Colva Area, South Goa,</p>
	
	<br>	

	<i class="fa fa-wifi ftooltip icolorsize"><span class="ftooltiptext"><h6>Wifi</h6></span></i>&nbsp;
	<i class="fas fa-coffee ftooltip icolorsize"><span class="ftooltiptext"><h6>breakfast</h6></span></i>&nbsp;
	<i class="fa fa-snowflake-o ftooltip icolorsize"><span class="ftooltiptext"><h6>AC</h6></span></i>&nbsp;
	<i class="fas fa-swimmer ftooltip icolorsize"><span class="ftooltiptext"><h6>Swimming Pool</h6></span></i>
	<i class="fas fa-concierge-bell ftooltip icolorsize"><span class="ftooltiptext"><h6>Room Srevice</h6></span></i>&nbsp;
</h3> 
	<div class="col-md-5   textc mediatextleft">
		<button type="button" class="btn btn-outline-primary"><b>Couple Friendly</b></button>
		<p></p>
		<p> Rating &nbsp;<span class="badge bg-primary">45/5</span></p>
		<h2><b>&#8377; 4500 /-</b></h2>
<p></p>
</div>
</div>
</div>
</div>	

<span id="dots">	
	<div class="col-md-9 col-md-offset-3 mt">
	<div class="container" style="padding: 15px;background:#FFFFFF;";>
	<div class="row">
	<div class="col-md-3"><img src="images/hotel/hotel1.jpg" class="responsive" alt=""></div>
<h3 style="padding-left: 15px;">Hotel Name<br>
 	<i class="fa fa-star" style="font-size:15px;color:#FF9800;"></i>
	<i class="fa fa-star" style="font-size:15px;color:#FF9800;"></i>
	<i class="fa fa-star" style="font-size:15px;color:#FF9800;"></i>
	<br>
	<p text-light style="font-size: small;">
	<i class="fa fa-map-marker fa-2x"></i> 
	Area : Colva Area, South Goa,</p>
	
	<br>	

	<i class="fa fa-wifi ftooltip icolorsize"><span class="ftooltiptext"><h6>Wifi</h6></span></i>&nbsp;
	<i class="fas fa-coffee ftooltip icolorsize"><span class="ftooltiptext"><h6>breakfast</h6></span></i>&nbsp;
	<i class="fa fa-snowflake-o ftooltip icolorsize"><span class="ftooltiptext"><h6>AC</h6></span></i>&nbsp;
	<i class="fas fa-swimmer ftooltip icolorsize"><span class="ftooltiptext"><h6>Swimming Pool</h6></span></i>
	<i class="fas fa-concierge-bell ftooltip icolorsize"><span class="ftooltiptext"><h6>Room Srevice</h6></span></i>&nbsp;
</h3> 
	<div class="col-md-5   textc mediatextleft">
		<button type="button" class="btn btn-outline-primary"><b>Couple Friendly</b></button>
		<p></p>
		<p> Rating &nbsp;<span class="badge bg-primary">45/5</span></p>
		<h2><b>&#8377; 4500 /-</b></h2>
<p></p>
</div>
</div>
</div>
</div>
<!--hotels end-->		

		</span>		

<div class="col-md-9 col-md-offset-3 mt">
	<div class="container" style="padding: 15px;background:#FFFFFF;";>
	<div class="row">
	<div class="col-md-3"><img src="images/hotel/hotel1.jpg" class="responsive" alt=""></div>
<h3 style="padding-left: 15px;">Hotel Name<br>
 	<i class="fa fa-star" style="font-size:15px;color:#FF9800;"></i>
	<i class="fa fa-star" style="font-size:15px;color:#FF9800;"></i>
	<i class="fa fa-star" style="font-size:15px;color:#FF9800;"></i>
	<br>
	<p text-light style="font-size: small;">
	<i class="fa fa-map-marker fa-2x"></i> 
	Area : Colva Area, South Goa,</p>
	
	<br>	

	<i class="fa fa-wifi ftooltip icolorsize"><span class="ftooltiptext"><h6>Wifi</h6></span></i>&nbsp;
	<i class="fas fa-coffee ftooltip icolorsize"><span class="ftooltiptext"><h6>breakfast</h6></span></i>&nbsp;
	<i class="fa fa-snowflake-o ftooltip icolorsize"><span class="ftooltiptext"><h6>AC</h6></span></i>&nbsp;
	<i class="fas fa-swimmer ftooltip icolorsize"><span class="ftooltiptext"><h6>Swimming Pool</h6></span></i>
	<i class="fas fa-concierge-bell ftooltip icolorsize"><span class="ftooltiptext"><h6>Room Srevice</h6></span></i>&nbsp;
</h3> 
	<div class="col-md-5   textc mediatextleft">
		<button type="button" class="btn btn-outline-primary"><b>Couple Friendly</b></button>
		<p></p>
		<p> Rating &nbsp;<span class="badge bg-primary">45/5</span></p>
		<h2><b>&#8377; 4500 /-</b></h2>
<p></p>
</div>
</div>
</div>
</div>
		
<span id="more">	
<div class="col-md-9 col-md-offset-3 mt">
	<div class="container" style="padding: 15px;background:#FFFFFF;";>
	<div class="row">
	<div class="col-md-3"><img src="images/hotel/hotel1.jpg" class="responsive" alt=""></div>
<h3 style="padding-left: 15px;">Hotel Name<br>
 	<i class="fa fa-star" style="font-size:15px;color:#FF9800;"></i>
	<i class="fa fa-star" style="font-size:15px;color:#FF9800;"></i>
	<i class="fa fa-star" style="font-size:15px;color:#FF9800;"></i>
	<br>
	<p text-light style="font-size: small;">
	<i class="fa fa-map-marker fa-2x"></i> 
	Area : Colva Area, South Goa,</p>
	
	<br>	

	<i class="fa fa-wifi ftooltip icolorsize"><span class="ftooltiptext"><h6>Wifi</h6></span></i>&nbsp;
	<i class="fas fa-coffee ftooltip icolorsize"><span class="ftooltiptext"><h6>breakfast</h6></span></i>&nbsp;
	<i class="fa fa-snowflake-o ftooltip icolorsize"><span class="ftooltiptext"><h6>AC</h6></span></i>&nbsp;
	<i class="fas fa-swimmer ftooltip icolorsize"><span class="ftooltiptext"><h6>Swimming Pool</h6></span></i>
	<i class="fas fa-concierge-bell ftooltip icolorsize"><span class="ftooltiptext"><h6>Room Srevice</h6></span></i>&nbsp;
</h3> 
	<div class="col-md-5   textc mediatextleft">
		<button type="button" class="btn btn-outline-primary"><b>Couple Friendly</b></button>
		<p></p>
		<p> Rating &nbsp;<span class="badge bg-primary">45/5</span></p>
		<h2><b>&#8377; 4500 /-</b></h2>
<p></p>
</div>
</div>
</div>
</div>

<div class="col-md-9 col-md-offset-3 mt">
	<div class="container" style="padding: 15px;background:#FFFFFF;";>
	<div class="row">
	<div class="col-md-3"><img src="images/hotel/hotel1.jpg" class="responsive" alt=""></div>
<h3 style="padding-left: 15px;">Hotel Name<br>
 	<i class="fa fa-star" style="font-size:15px;color:#FF9800;"></i>
	<i class="fa fa-star" style="font-size:15px;color:#FF9800;"></i>
	<i class="fa fa-star" style="font-size:15px;color:#FF9800;"></i>
	<br>
	<p text-light style="font-size: small;">
	<i class="fa fa-map-marker fa-2x"></i> 
	Area : Colva Area, South Goa,</p>
	
	<br>	

	<i class="fa fa-wifi ftooltip icolorsize"><span class="ftooltiptext"><h6>Wifi</h6></span></i>&nbsp;
	<i class="fas fa-coffee ftooltip icolorsize"><span class="ftooltiptext"><h6>breakfast</h6></span></i>&nbsp;
	<i class="fa fa-snowflake-o ftooltip icolorsize"><span class="ftooltiptext"><h6>AC</h6></span></i>&nbsp;
	<i class="fas fa-swimmer ftooltip icolorsize"><span class="ftooltiptext"><h6>Swimming Pool</h6></span></i>
	<i class="fas fa-concierge-bell ftooltip icolorsize"><span class="ftooltiptext"><h6>Room Srevice</h6></span></i>&nbsp;
</h3> 
	<div class="col-md-5   textc mediatextleft">
		<button type="button" class="btn btn-outline-primary"><b>Couple Friendly</b></button>
		<p></p>
		<p> Rating &nbsp;<span class="badge bg-primary">45/5</span></p>
		<h2><b>&#8377; 4500 /-</b></h2>
<p></p>
</div>
</div>
</div>
</div>

<div class="col-md-9 col-md-offset-3 mt">
	<div class="container" style="padding: 15px;background:#FFFFFF;";>
	<div class="row">
	<div class="col-md-3"><img src="images/hotel/hotel1.jpg" class="responsive" alt=""></div>
<h3 style="padding-left: 15px;">Hotel Name<br>
 	<i class="fa fa-star" style="font-size:15px;color:#FF9800;"></i>
	<i class="fa fa-star" style="font-size:15px;color:#FF9800;"></i>
	<i class="fa fa-star" style="font-size:15px;color:#FF9800;"></i>
	<br>
	<p text-light style="font-size: small;">
	<i class="fa fa-map-marker fa-2x"></i> 
	Area : Colva Area, South Goa,</p>
	
	<br>	

	<i class="fa fa-wifi ftooltip icolorsize"><span class="ftooltiptext"><h6>Wifi</h6></span></i>&nbsp;
	<i class="fas fa-coffee ftooltip icolorsize"><span class="ftooltiptext"><h6>breakfast</h6></span></i>&nbsp;
	<i class="fa fa-snowflake-o ftooltip icolorsize"><span class="ftooltiptext"><h6>AC</h6></span></i>&nbsp;
	<i class="fas fa-swimmer ftooltip icolorsize"><span class="ftooltiptext"><h6>Swimming Pool</h6></span></i>
	<i class="fas fa-concierge-bell ftooltip icolorsize"><span class="ftooltiptext"><h6>Room Srevice</h6></span></i>&nbsp;
</h3> 
	<div class="col-md-5   textc mediatextleft">
		<button type="button" class="btn btn-outline-primary"><b>Couple Friendly</b></button>
		<p></p>
		<p> Rating &nbsp;<span class="badge bg-primary">45/5</span></p>
		<h2><b>&#8377; 4500 /-</b></h2>
<p></p>
</div>
</div>
</div>
</div>

<div class="col-md-9 col-md-offset-3 mt">
	<div class="container" style="padding: 15px;background:#FFFFFF;";>
	<div class="row">
	<div class="col-md-3"><img src="images/hotel/hotel1.jpg" class="responsive" alt=""></div>
<h3 style="padding-left: 15px;">Hotel Name<br>
 	<i class="fa fa-star" style="font-size:15px;color:#FF9800;"></i>
	<i class="fa fa-star" style="font-size:15px;color:#FF9800;"></i>
	<i class="fa fa-star" style="font-size:15px;color:#FF9800;"></i>
	<br>
	<p text-light style="font-size: small;">
	<i class="fa fa-map-marker fa-2x"></i> 
	Area : Colva Area, South Goa,</p>
	
	<br>	

	<i class="fa fa-wifi ftooltip icolorsize"><span class="ftooltiptext"><h6>Wifi</h6></span></i>&nbsp;
	<i class="fas fa-coffee ftooltip icolorsize"><span class="ftooltiptext"><h6>breakfast</h6></span></i>&nbsp;
	<i class="fa fa-snowflake-o ftooltip icolorsize"><span class="ftooltiptext"><h6>AC</h6></span></i>&nbsp;
	<i class="fas fa-swimmer ftooltip icolorsize"><span class="ftooltiptext"><h6>Swimming Pool</h6></span></i>
	<i class="fas fa-concierge-bell ftooltip icolorsize"><span class="ftooltiptext"><h6>Room Srevice</h6></span></i>&nbsp;
</h3> 
	<div class="col-md-5   textc mediatextleft">
		<button type="button" class="btn btn-outline-primary"><b>Couple Friendly</b></button>
		<p></p>
		<p> Rating &nbsp;<span class="badge bg-primary">45/5</span></p>
		<h2><b>&#8377; 4500 /-</b></h2>
<p></p>
</div>
</div>
</div>
</div>

<div class="col-md-9 col-md-offset-3 mt">
	<div class="container" style="padding: 15px;background:#FFFFFF;";>
	<div class="row">
	<div class="col-md-3"><img src="images/hotel/hotel1.jpg" class="responsive" alt=""></div>
<h3 style="padding-left: 15px;">Hotel Name<br>
 	<i class="fa fa-star" style="font-size:15px;color:#FF9800;"></i>
	<i class="fa fa-star" style="font-size:15px;color:#FF9800;"></i>
	<i class="fa fa-star" style="font-size:15px;color:#FF9800;"></i>
	<br>
	<p text-light style="font-size: small;">
	<i class="fa fa-map-marker fa-2x"></i> 
	Area : Colva Area, South Goa,</p>
	
	<br>	

	<i class="fa fa-wifi ftooltip icolorsize"><span class="ftooltiptext"><h6>Wifi</h6></span></i>&nbsp;
	<i class="fas fa-coffee ftooltip icolorsize"><span class="ftooltiptext"><h6>breakfast</h6></span></i>&nbsp;
	<i class="fa fa-snowflake-o ftooltip icolorsize"><span class="ftooltiptext"><h6>AC</h6></span></i>&nbsp;
	<i class="fas fa-swimmer ftooltip icolorsize"><span class="ftooltiptext"><h6>Swimming Pool</h6></span></i>
	<i class="fas fa-concierge-bell ftooltip icolorsize"><span class="ftooltiptext"><h6>Room Srevice</h6></span></i>&nbsp;
</h3> 
	<div class="col-md-5   textc mediatextleft">
		<button type="button" class="btn btn-outline-primary"><b>Couple Friendly</b></button>
		<p></p>
		<p> Rating &nbsp;<span class="badge bg-primary">45/5</span></p>
		<h2><b>&#8377; 4500 /-</b></h2>
<p></p>
</div>
</div>
</div>
</div>

<div class="col-md-9 col-md-offset-3 mt">
	<div class="container" style="padding: 15px;background:#FFFFFF;";>
	<div class="row">
	<div class="col-md-3"><img src="images/hotel/hotel1.jpg" class="responsive" alt=""></div>
<h3 style="padding-left: 15px;">Hotel Name<br>
 	<i class="fa fa-star" style="font-size:15px;color:#FF9800;"></i>
	<i class="fa fa-star" style="font-size:15px;color:#FF9800;"></i>
	<i class="fa fa-star" style="font-size:15px;color:#FF9800;"></i>
	<br>
	<p text-light style="font-size: small;">
	<i class="fa fa-map-marker fa-2x"></i> 
	Area : Colva Area, South Goa,</p>
	
	<br>	

	<i class="fa fa-wifi ftooltip icolorsize"><span class="ftooltiptext"><h6>Wifi</h6></span></i>&nbsp;
	<i class="fas fa-coffee ftooltip icolorsize"><span class="ftooltiptext"><h6>breakfast</h6></span></i>&nbsp;
	<i class="fa fa-snowflake-o ftooltip icolorsize"><span class="ftooltiptext"><h6>AC</h6></span></i>&nbsp;
	<i class="fas fa-swimmer ftooltip icolorsize"><span class="ftooltiptext"><h6>Swimming Pool</h6></span></i>
	<i class="fas fa-concierge-bell ftooltip icolorsize"><span class="ftooltiptext"><h6>Room Srevice</h6></span></i>&nbsp;
</h3> 
	<div class="col-md-5   textc mediatextleft">
		<button type="button" class="btn btn-outline-primary"><b>Couple Friendly</b></button>
		<p></p>
		<p> Rating &nbsp;<span class="badge bg-primary">45/5</span></p>
		<h2><b>&#8377; 4500 /-</b></h2>
<p></p>
</div>
</div>
</div>
</div>

<div class="col-md-9 col-md-offset-3 mt">
	<div class="container" style="padding: 15px;background:#FFFFFF;";>
	<div class="row">
	<div class="col-md-3"><img src="images/hotel/hotel1.jpg" class="responsive" alt=""></div>
<h3 style="padding-left: 15px;">Hotel Name<br>
 	<i class="fa fa-star" style="font-size:15px;color:#FF9800;"></i>
	<i class="fa fa-star" style="font-size:15px;color:#FF9800;"></i>
	<i class="fa fa-star" style="font-size:15px;color:#FF9800;"></i>
	<br>
	<p text-light style="font-size: small;">
	<i class="fa fa-map-marker fa-2x"></i> 
	Area : Colva Area, South Goa,</p>
	
	<br>	

	<i class="fa fa-wifi ftooltip icolorsize"><span class="ftooltiptext"><h6>Wifi</h6></span></i>&nbsp;
	<i class="fas fa-coffee ftooltip icolorsize"><span class="ftooltiptext"><h6>breakfast</h6></span></i>&nbsp;
	<i class="fa fa-snowflake-o ftooltip icolorsize"><span class="ftooltiptext"><h6>AC</h6></span></i>&nbsp;
	<i class="fas fa-swimmer ftooltip icolorsize"><span class="ftooltiptext"><h6>Swimming Pool</h6></span></i>
	<i class="fas fa-concierge-bell ftooltip icolorsize"><span class="ftooltiptext"><h6>Room Srevice</h6></span></i>&nbsp;
</h3> 
	<div class="col-md-5   textc mediatextleft">
		<button type="button" class="btn btn-outline-primary"><b>Couple Friendly</b></button>
		<p></p>
		<p> Rating &nbsp;<span class="badge bg-primary">45/5</span></p>
		<h2><b>&#8377; 4500 /-</b></h2>
<p></p>
</div>
</div>
</div>
</div>

<div class="col-md-9 col-md-offset-3 mt">
	<div class="container" style="padding: 15px;background:#FFFFFF;";>
	<div class="row">
	<div class="col-md-3"><img src="images/hotel/hotel1.jpg" class="responsive" alt=""></div>
<h3 style="padding-left: 15px;">Hotel Name<br>
 	<i class="fa fa-star" style="font-size:15px;color:#FF9800;"></i>
	<i class="fa fa-star" style="font-size:15px;color:#FF9800;"></i>
	<i class="fa fa-star" style="font-size:15px;color:#FF9800;"></i>
	<br>
	<p text-light style="font-size: small;">
	<i class="fa fa-map-marker fa-2x"></i> 
	Area : Colva Area, South Goa,</p>
	
	<br>	

	<i class="fa fa-wifi ftooltip icolorsize"><span class="ftooltiptext"><h6>Wifi</h6></span></i>&nbsp;
	<i class="fas fa-coffee ftooltip icolorsize"><span class="ftooltiptext"><h6>breakfast</h6></span></i>&nbsp;
	<i class="fa fa-snowflake-o ftooltip icolorsize"><span class="ftooltiptext"><h6>AC</h6></span></i>&nbsp;
	<i class="fas fa-swimmer ftooltip icolorsize"><span class="ftooltiptext"><h6>Swimming Pool</h6></span></i>
	<i class="fas fa-concierge-bell ftooltip icolorsize"><span class="ftooltiptext"><h6>Room Srevice</h6></span></i>&nbsp;
</h3> 
	<div class="col-md-5   textc mediatextleft">
		<button type="button" class="btn btn-outline-primary"><b>Couple Friendly</b></button>
		<p></p>
		<p> Rating &nbsp;<span class="badge bg-primary">45/5</span></p>
		<h2><b>&#8377; 4500 /-</b></h2>
<p></p>
</div>
</div>
</div>
</div>

<div class="col-md-9 col-md-offset-3 mt">
	<div class="container" style="padding: 15px;background:#FFFFFF;";>
	<div class="row">
	<div class="col-md-3"><img src="images/hotel/hotel1.jpg" class="responsive" alt=""></div>
<h3 style="padding-left: 15px;">Hotel Name<br>
 	<i class="fa fa-star" style="font-size:15px;color:#FF9800;"></i>
	<i class="fa fa-star" style="font-size:15px;color:#FF9800;"></i>
	<i class="fa fa-star" style="font-size:15px;color:#FF9800;"></i>
	<br>
	<p text-light style="font-size: small;">
	<i class="fa fa-map-marker fa-2x"></i> 
	Area : Colva Area, South Goa,</p>
	
	<br>	

	<i class="fa fa-wifi ftooltip icolorsize"><span class="ftooltiptext"><h6>Wifi</h6></span></i>&nbsp;
	<i class="fas fa-coffee ftooltip icolorsize"><span class="ftooltiptext"><h6>breakfast</h6></span></i>&nbsp;
	<i class="fa fa-snowflake-o ftooltip icolorsize"><span class="ftooltiptext"><h6>AC</h6></span></i>&nbsp;
	<i class="fas fa-swimmer ftooltip icolorsize"><span class="ftooltiptext"><h6>Swimming Pool</h6></span></i>
	<i class="fas fa-concierge-bell ftooltip icolorsize"><span class="ftooltiptext"><h6>Room Srevice</h6></span></i>&nbsp;
</h3> 
	<div class="col-md-5   textc mediatextleft">
		<button type="button" class="btn btn-outline-primary"><b>Couple Friendly</b></button>
		<p></p>
		<p> Rating &nbsp;<span class="badge bg-primary">45/5</span></p>
		<h2><b>&#8377; 4500 /-</b></h2>
<p></p>
</div>
</div>
</div>
</div>

<div class="col-md-9 col-md-offset-3 mt">
	<div class="container" style="padding: 15px;background:#FFFFFF;";>
	<div class="row">
	<div class="col-md-3"><img src="images/hotel/hotel1.jpg" class="responsive" alt=""></div>
<h3 style="padding-left: 15px;">Hotel Name<br>
 	<i class="fa fa-star" style="font-size:15px;color:#FF9800;"></i>
	<i class="fa fa-star" style="font-size:15px;color:#FF9800;"></i>
	<i class="fa fa-star" style="font-size:15px;color:#FF9800;"></i>
	<br>
	<p text-light style="font-size: small;">
	<i class="fa fa-map-marker fa-2x"></i> 
	Area : Colva Area, South Goa,</p>
	
	<br>	

	<i class="fa fa-wifi ftooltip icolorsize"><span class="ftooltiptext"><h6>Wifi</h6></span></i>&nbsp;
	<i class="fas fa-coffee ftooltip icolorsize"><span class="ftooltiptext"><h6>breakfast</h6></span></i>&nbsp;
	<i class="fa fa-snowflake-o ftooltip icolorsize"><span class="ftooltiptext"><h6>AC</h6></span></i>&nbsp;
	<i class="fas fa-swimmer ftooltip icolorsize"><span class="ftooltiptext"><h6>Swimming Pool</h6></span></i>
	<i class="fas fa-concierge-bell ftooltip icolorsize"><span class="ftooltiptext"><h6>Room Srevice</h6></span></i>&nbsp;
</h3> 
	<div class="col-md-5   textc mediatextleft">
		<button type="button" class="btn btn-outline-primary"><b>Couple Friendly</b></button>
		<p></p>
		<p> Rating &nbsp;<span class="badge bg-primary">45/5</span></p>
		<h2><b>&#8377; 4500 /-</b></h2>
<p></p>
</div>
</div>
</div>
</div>

<div class="col-md-9 col-md-offset-3 mt">
	<div class="container" style="padding: 15px;background:#FFFFFF;";>
	<div class="row">
	<div class="col-md-3"><img src="images/hotel/hotel1.jpg" class="responsive" alt=""></div>
<h3 style="padding-left: 15px;">Hotel Name<br>
 	<i class="fa fa-star" style="font-size:15px;color:#FF9800;"></i>
	<i class="fa fa-star" style="font-size:15px;color:#FF9800;"></i>
	<i class="fa fa-star" style="font-size:15px;color:#FF9800;"></i>
	<br>
	<p text-light style="font-size: small;">
	<i class="fa fa-map-marker fa-2x"></i> 
	Area : Colva Area, South Goa,</p>
	
	<br>	

	<i class="fa fa-wifi ftooltip icolorsize"><span class="ftooltiptext"><h6>Wifi</h6></span></i>&nbsp;
	<i class="fas fa-coffee ftooltip icolorsize"><span class="ftooltiptext"><h6>breakfast</h6></span></i>&nbsp;
	<i class="fa fa-snowflake-o ftooltip icolorsize"><span class="ftooltiptext"><h6>AC</h6></span></i>&nbsp;
	<i class="fas fa-swimmer ftooltip icolorsize"><span class="ftooltiptext"><h6>Swimming Pool</h6></span></i>
	<i class="fas fa-concierge-bell ftooltip icolorsize"><span class="ftooltiptext"><h6>Room Srevice</h6></span></i>&nbsp;
</h3> 
	<div class="col-md-5   textc mediatextleft">
		<button type="button" class="btn btn-outline-primary"><b>Couple Friendly</b></button>
		<p></p>
		<p> Rating &nbsp;<span class="badge bg-primary">45/5</span></p>
		<h2><b>&#8377; 4500 /-</b></h2>
<p></p>
</div>
</div>
</div>
</div>

<div class="col-md-9 col-md-offset-3 mt">
	<div class="container" style="padding: 15px;background:#FFFFFF;";>
	<div class="row">
	<div class="col-md-3"><img src="images/hotel/hotel1.jpg" class="responsive" alt=""></div>
<h3 style="padding-left: 15px;">Hotel Name<br>
 	<i class="fa fa-star" style="font-size:15px;color:#FF9800;"></i>
	<i class="fa fa-star" style="font-size:15px;color:#FF9800;"></i>
	<i class="fa fa-star" style="font-size:15px;color:#FF9800;"></i>
	<br>
	<p text-light style="font-size: small;">
	<i class="fa fa-map-marker fa-2x"></i> 
	Area : Colva Area, South Goa,</p>
	
	<br>	

	<i class="fa fa-wifi ftooltip icolorsize"><span class="ftooltiptext"><h6>Wifi</h6></span></i>&nbsp;
	<i class="fas fa-coffee ftooltip icolorsize"><span class="ftooltiptext"><h6>breakfast</h6></span></i>&nbsp;
	<i class="fa fa-snowflake-o ftooltip icolorsize"><span class="ftooltiptext"><h6>AC</h6></span></i>&nbsp;
	<i class="fas fa-swimmer ftooltip icolorsize"><span class="ftooltiptext"><h6>Swimming Pool</h6></span></i>
	<i class="fas fa-concierge-bell ftooltip icolorsize"><span class="ftooltiptext"><h6>Room Srevice</h6></span></i>&nbsp;
</h3> 
	<div class="col-md-5   textc mediatextleft">
		<button type="button" class="btn btn-outline-primary"><b>Couple Friendly</b></button>
		<p></p>
		<p> Rating &nbsp;<span class="badge bg-primary">45/5</span></p>
		<h2><b>&#8377; 4500 /-</b></h2>
<p></p>
</div>
</div>
</div>
</div>

<div class="col-md-9 col-md-offset-3 mt">
<div class="container" style="padding: 15px;background:#FFFFFF;";>
	<div class="row">
	<div class="col-md-3"><img src="images/hotel/hotel1.jpg" class="responsive" alt=""></div>
<h3 style="padding-left: 15px;">Hotel Name<br>
 	<i class="fa fa-star" style="font-size:15px;color:#FF9800;"></i>
	<i class="fa fa-star" style="font-size:15px;color:#FF9800;"></i>
	<i class="fa fa-star" style="font-size:15px;color:#FF9800;"></i>
	<br>
	<p text-light style="font-size: small;">
	<i class="fa fa-map-marker fa-2x"></i> 
	Area : Colva Area, South Goa,</p>
	
	<br>	

	<i class="fa fa-wifi ftooltip icolorsize"><span class="ftooltiptext"><h6>Wifi</h6></span></i>&nbsp;
	<i class="fas fa-coffee ftooltip icolorsize"><span class="ftooltiptext"><h6>breakfast</h6></span></i>&nbsp;
	<i class="fa fa-snowflake-o ftooltip icolorsize"><span class="ftooltiptext"><h6>AC</h6></span></i>&nbsp;
	<i class="fas fa-swimmer ftooltip icolorsize"><span class="ftooltiptext"><h6>Swimming Pool</h6></span></i>
	<i class="fas fa-concierge-bell ftooltip icolorsize"><span class="ftooltiptext"><h6>Room Srevice</h6></span></i>&nbsp;
</h3> 
	<div class="col-md-5   textc mediatextleft">
		<button type="button" class="btn btn-outline-primary"><b>Couple Friendly</b></button>
		<p></p>
		<p> Rating &nbsp;<span class="badge bg-primary">45/5</span></p>
		<h2><b>&#8377; 4500 /-</b></h2>
<p></p>
</div>
</div>
</div></div>

<div class="col-md-9 col-md-offset-3 mt">
	<div class="container" style="padding: 15px;background:#FFFFFF;";>
	<div class="row">
	<div class="col-md-3"><img src="images/hotel/hotel1.jpg" class="responsive" alt=""></div>
<h3 style="padding-left: 15px;">Hotel Name<br>
 	<i class="fa fa-star" style="font-size:15px;color:#FF9800;"></i>
	<i class="fa fa-star" style="font-size:15px;color:#FF9800;"></i>
	<i class="fa fa-star" style="font-size:15px;color:#FF9800;"></i>
	<br>
	<p text-light style="font-size: small;">
	<i class="fa fa-map-marker fa-2x"></i> 
	Area : Colva Area, South Goa,</p>
	
	<br>	

	<i class="fa fa-wifi ftooltip icolorsize"><span class="ftooltiptext"><h6>Wifi</h6></span></i>&nbsp;
	<i class="fas fa-coffee ftooltip icolorsize"><span class="ftooltiptext"><h6>breakfast</h6></span></i>&nbsp;
	<i class="fa fa-snowflake-o ftooltip icolorsize"><span class="ftooltiptext"><h6>AC</h6></span></i>&nbsp;
	<i class="fas fa-swimmer ftooltip icolorsize"><span class="ftooltiptext"><h6>Swimming Pool</h6></span></i>
	<i class="fas fa-concierge-bell ftooltip icolorsize"><span class="ftooltiptext"><h6>Room Srevice</h6></span></i>&nbsp;
</h3> 
	<div class="col-md-5   textc mediatextleft">
		<button type="button" class="btn btn-outline-primary"><b>Couple Friendly</b></button>
		<p></p>
		<p> Rating &nbsp;<span class="badge bg-primary">45/5</span></p>
		<h2><b>&#8377; 4500 /-</b></h2>
<p></p>
</div>
</div>
</div>
</div>

<div class="col-md-9 col-md-offset-3 mt">
	<div class="container" style="padding: 15px;background:#FFFFFF;";>
	<div class="row">
	<div class="col-md-3"><img src="images/hotel/hotel1.jpg" class="responsive" alt=""></div>
<h3 style="padding-left: 15px;">Hotel Name<br>
 	<i class="fa fa-star" style="font-size:15px;color:#FF9800;"></i>
	<i class="fa fa-star" style="font-size:15px;color:#FF9800;"></i>
	<i class="fa fa-star" style="font-size:15px;color:#FF9800;"></i>
	<br>
	<p text-light style="font-size: small;">
	<i class="fa fa-map-marker fa-2x"></i> 
	Area : Colva Area, South Goa,</p>
	
	<br>	

	<i class="fa fa-wifi ftooltip icolorsize"><span class="ftooltiptext"><h6>Wifi</h6></span></i>&nbsp;
	<i class="fas fa-coffee ftooltip icolorsize"><span class="ftooltiptext"><h6>breakfast</h6></span></i>&nbsp;
	<i class="fa fa-snowflake-o ftooltip icolorsize"><span class="ftooltiptext"><h6>AC</h6></span></i>&nbsp;
	<i class="fas fa-swimmer ftooltip icolorsize"><span class="ftooltiptext"><h6>Swimming Pool</h6></span></i>
	<i class="fas fa-concierge-bell ftooltip icolorsize"><span class="ftooltiptext"><h6>Room Srevice</h6></span></i>&nbsp;
</h3> 
	<div class="col-md-5   textc mediatextleft">
		<button type="button" class="btn btn-outline-primary"><b>Couple Friendly</b></button>
		<p></p>
		<p> Rating &nbsp;<span class="badge bg-primary">45/5</span></p>
		<h2><b>&#8377; 4500 /-</b></h2>
<p></p>
</div>
</div>
</div>
</div>

<div class="col-md-9 col-md-offset-3 mt">
	<div class="container" style="padding: 15px;background:#FFFFFF;";>
	<div class="row">
	<div class="col-md-3"><img src="images/hotel/hotel1.jpg" class="responsive" alt=""></div>
<h3 style="padding-left: 15px;">Hotel Name<br>
 	<i class="fa fa-star" style="font-size:15px;color:#FF9800;"></i>
	<i class="fa fa-star" style="font-size:15px;color:#FF9800;"></i>
	<i class="fa fa-star" style="font-size:15px;color:#FF9800;"></i>
	<br>
	<p text-light style="font-size: small;">
	<i class="fa fa-map-marker fa-2x"></i> 
	Area : Colva Area, South Goa,</p>
	
	<br>	

	<i class="fa fa-wifi ftooltip icolorsize"><span class="ftooltiptext"><h6>Wifi</h6></span></i>&nbsp;
	<i class="fas fa-coffee ftooltip icolorsize"><span class="ftooltiptext"><h6>breakfast</h6></span></i>&nbsp;
	<i class="fa fa-snowflake-o ftooltip icolorsize"><span class="ftooltiptext"><h6>AC</h6></span></i>&nbsp;
	<i class="fas fa-swimmer ftooltip icolorsize"><span class="ftooltiptext"><h6>Swimming Pool</h6></span></i>
	<i class="fas fa-concierge-bell ftooltip icolorsize"><span class="ftooltiptext"><h6>Room Srevice</h6></span></i>&nbsp;
</h3> 
	<div class="col-md-5   textc mediatextleft">
		<button type="button" class="btn btn-outline-primary"><b>Couple Friendly</b></button>
		<p></p>
		<p> Rating &nbsp;<span class="badge bg-primary">45/5</span></p>
		<h2><b>&#8377; 4500 /-</b></h2>
<p></p>
</div>
</div>
</div>
</div>

<div class="col-md-9 col-md-offset-3 mt">
	<div class="container" style="padding: 15px;background:#FFFFFF;";>
	<div class="row">
	<div class="col-md-3"><img src="images/hotel/hotel1.jpg" class="responsive" alt=""></div>
<h3 style="padding-left: 15px;">Hotel Name<br>
 	<i class="fa fa-star" style="font-size:15px;color:#FF9800;"></i>
	<i class="fa fa-star" style="font-size:15px;color:#FF9800;"></i>
	<i class="fa fa-star" style="font-size:15px;color:#FF9800;"></i>
	<br>
	<p text-light style="font-size: small;">
	<i class="fa fa-map-marker fa-2x"></i> 
	Area : Colva Area, South Goa,</p>
	
	<br>	

	<i class="fa fa-wifi ftooltip icolorsize"><span class="ftooltiptext"><h6>Wifi</h6></span></i>&nbsp;
	<i class="fas fa-coffee ftooltip icolorsize"><span class="ftooltiptext"><h6>breakfast</h6></span></i>&nbsp;
	<i class="fa fa-snowflake-o ftooltip icolorsize"><span class="ftooltiptext"><h6>AC</h6></span></i>&nbsp;
	<i class="fas fa-swimmer ftooltip icolorsize"><span class="ftooltiptext"><h6>Swimming Pool</h6></span></i>
	<i class="fas fa-concierge-bell ftooltip icolorsize"><span class="ftooltiptext"><h6>Room Srevice</h6></span></i>&nbsp;
</h3> 
	<div class="col-md-5   textc mediatextleft">
		<button type="button" class="btn btn-outline-primary"><b>Couple Friendly</b></button>
		<p></p>
		<p> Rating &nbsp;<span class="badge bg-primary">45/5</span></p>
		<h2><b>&#8377; 4500 /-</b></h2>
<p></p>
</div>
</div>
</div>
</div>

<div class="col-md-9 col-md-offset-3 mt">
	<div class="container" style="padding: 15px;background:#FFFFFF;";>
	<div class="row">
	<div class="col-md-3"><img src="images/hotel/hotel1.jpg" class="responsive" alt=""></div>
<h3 style="padding-left: 15px;">Hotel Name<br>
 	<i class="fa fa-star" style="font-size:15px;color:#FF9800;"></i>
	<i class="fa fa-star" style="font-size:15px;color:#FF9800;"></i>
	<i class="fa fa-star" style="font-size:15px;color:#FF9800;"></i>
	<br>
	<p text-light style="font-size: small;">
	<i class="fa fa-map-marker fa-2x"></i> 
	Area : Colva Area, South Goa,</p>
	
	<br>	

	<i class="fa fa-wifi ftooltip icolorsize"><span class="ftooltiptext"><h6>Wifi</h6></span></i>&nbsp;
	<i class="fas fa-coffee ftooltip icolorsize"><span class="ftooltiptext"><h6>breakfast</h6></span></i>&nbsp;
	<i class="fa fa-snowflake-o ftooltip icolorsize"><span class="ftooltiptext"><h6>AC</h6></span></i>&nbsp;
	<i class="fas fa-swimmer ftooltip icolorsize"><span class="ftooltiptext"><h6>Swimming Pool</h6></span></i>
	<i class="fas fa-concierge-bell ftooltip icolorsize"><span class="ftooltiptext"><h6>Room Srevice</h6></span></i>&nbsp;
</h3> 
	<div class="col-md-5   textc mediatextleft">
		<button type="button" class="btn btn-outline-primary"><b>Couple Friendly</b></button>
		<p></p>
		<p> Rating &nbsp;<span class="badge bg-primary">45/5</span></p>
		<h2><b>&#8377; 4500 /-</b></h2>
<p></p>
</div>
</div>
</div>
</div>

<div class="col-md-9 col-md-offset-3 mt">
	<div class="container" style="padding: 15px;background:#FFFFFF;";>
	<div class="row">
	<div class="col-md-3"><img src="images/hotel/hotel1.jpg" class="responsive" alt=""></div>
<h3 style="padding-left: 15px;">Hotel Name<br>
 	<i class="fa fa-star" style="font-size:15px;color:#FF9800;"></i>
	<i class="fa fa-star" style="font-size:15px;color:#FF9800;"></i>
	<i class="fa fa-star" style="font-size:15px;color:#FF9800;"></i>
	<br>
	<p text-light style="font-size: small;">
	<i class="fa fa-map-marker fa-2x"></i> 
	Area : Colva Area, South Goa,</p>
	
	<br>	

	<i class="fa fa-wifi ftooltip icolorsize"><span class="ftooltiptext"><h6>Wifi</h6></span></i>&nbsp;
	<i class="fas fa-coffee ftooltip icolorsize"><span class="ftooltiptext"><h6>breakfast</h6></span></i>&nbsp;
	<i class="fa fa-snowflake-o ftooltip icolorsize"><span class="ftooltiptext"><h6>AC</h6></span></i>&nbsp;
	<i class="fas fa-swimmer ftooltip icolorsize"><span class="ftooltiptext"><h6>Swimming Pool</h6></span></i>
	<i class="fas fa-concierge-bell ftooltip icolorsize"><span class="ftooltiptext"><h6>Room Srevice</h6></span></i>&nbsp;
</h3> 
	<div class="col-md-5   textc mediatextleft">
		<button type="button" class="btn btn-outline-primary"><b>Couple Friendly</b></button>
		<p></p>
		<p> Rating &nbsp;<span class="badge bg-primary">45/5</span></p>
		<h2><b>&#8377; 4500 /-</b></h2>
<p></p>
</div>
</div>
</div>
</div>

<div class="col-md-9 col-md-offset-3 mt">
	<div class="container" style="padding: 15px;background:#FFFFFF;";>
	<div class="row">
	<div class="col-md-3"><img src="images/hotel/hotel1.jpg" class="responsive" alt=""></div>
<h3 style="padding-left: 15px;">Hotel Name<br>
 	<i class="fa fa-star" style="font-size:15px;color:#FF9800;"></i>
	<i class="fa fa-star" style="font-size:15px;color:#FF9800;"></i>
	<i class="fa fa-star" style="font-size:15px;color:#FF9800;"></i>
	<br>
	<p text-light style="font-size: small;">
	<i class="fa fa-map-marker fa-2x"></i> 
	Area : Colva Area, South Goa,</p>
	
	<br>	

	<i class="fa fa-wifi ftooltip icolorsize"><span class="ftooltiptext"><h6>Wifi</h6></span></i>&nbsp;
	<i class="fas fa-coffee ftooltip icolorsize"><span class="ftooltiptext"><h6>breakfast</h6></span></i>&nbsp;
	<i class="fa fa-snowflake-o ftooltip icolorsize"><span class="ftooltiptext"><h6>AC</h6></span></i>&nbsp;
	<i class="fas fa-swimmer ftooltip icolorsize"><span class="ftooltiptext"><h6>Swimming Pool</h6></span></i>
	<i class="fas fa-concierge-bell ftooltip icolorsize"><span class="ftooltiptext"><h6>Room Srevice</h6></span></i>&nbsp;
</h3> 
	<div class="col-md-5   textc mediatextleft">
		<button type="button" class="btn btn-outline-primary"><b>Couple Friendly</b></button>
		<p></p>
		<p> Rating &nbsp;<span class="badge bg-primary">45/5</span></p>
		<h2><b>&#8377; 4500 /-</b></h2>
<p></p>
</div>
</div>
</div>
</div>

		<!--hotels end-->	

		</span>
		<br>
		<div class="col-md-9 col-md-offset-3 mt text-center mtop font-weight-bold" style="font-size: 13px;">
	<button onclick="myFunction()" id="myBtn"style="color: white;border: none;background: #376fd2;border-radius: 5px;padding: 8px;">Hotels More</button>		
	</div>			
		
	</div>
</div>
</div>		
	

<!--lode more -->

<script>
function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  }
}
</script>



<!--footer start-->	
		
		<?php include 'footer.php'; ?>
	
<!--footer end-->




















	<!-- jQuery -->
    <script type="text/javascript" src="engine1/wowslider.js"></script>
	<script type="text/javascript" src="engine1/script.js"></script>
	<!-- End WOWSlider.com BODY section -->

	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/sticky.js"></script>

	<!-- Stellar -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Superfish -->
	<script src="js/hoverIntent.js"></script>
	<script src="js/superfish.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Date Picker -->
	<script src="js/bootstrap-datepicker.min.js"></script>
	<!-- CS Select -->
	<script src="js/classie.js"></script>
	<script src="js/selectFx.js"></script>
	
	<!-- Main JS -->
	<script src="js/main.js"></script>

	<!-- START sticky footer --><script src="../demoscript.js"></script><!-- END sticky footer -->

  <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','../../../www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-65003908-1', 'auto');
      ga('send', 'pageview');

    </script>



</body>
</html>


