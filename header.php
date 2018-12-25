<!-- Start:header-top -->
	
            
            <nav class="navbar navbar-expand-md navbar-light bg-white sticky-top">
          
                    <a href="#" class="navbar-brand"><img src="images/logo.png"></a>
                    <button class="navbar-toggler" data-toggle="collapse" data-target="#navbaraId">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div id="navbaraId" class="collapse navbar-collapse">
                        <ul class="navbar-nav ml-auto">
<!--
                            <li class="dropdown nav-item">
                                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown"><i class="fa fa-suitcase"></i> Tour Packages</a>
                                <ul class="dropdown-menu">
                                  <li><a href="#" class="dropdown-item">Page 1-1</a></li>
                                  <li><a href="#" class="dropdown-item">Page 1-2</a></li>
                                  <li><a href="#" class="dropdown-item">Page 1-3</a></li>
                                </ul>
                            </li>
-->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-suitcase"></i> Tour Packages</a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                  <a class="dropdown-item text-secondary" href="#" style="font-size: 16px;"><i class="fa fa-home fa-sm"></i> Domestic</a>
                                  <a class="dropdown-item text-secondary" href="#" style="font-size: 16px;"><i class="fa fa-globe"></i> International</a>
                                </div>
                              </li>
                            <li class="nav-item">
                                <a href="flight.php" class="nav-link"><i class="fa fa-send"></i> Flights</a>
                            </li>
                            <li class="nav-item">
                                <a href="Hotels.php" class="nav-link"><i class="fa fa-hotel"></i> Hotels</a>
                            </li>
                            <li class="nav-item">
                                <a href="cabs.php" class="nav-link"><i class="fa fa-taxi"></i> Cabs</a>
                            </li>
                            <li class="nav-item">
                                <a href="Offers.php" class="nav-link"><i class="fa fa-twitch"></i> Offers</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-toggle="modal" data-target="#myModal"><i class="fa fa-user"></i> Login</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        

	<!-- end:header-top -->


       
        <div class="modal fade" id="myModal">
          <div class="modal-dialog">
            <div class="modal-content" style="position: absolute;
  left: ;
  top: 0px;
  z-index:99999;">
              
              <div class="modal-header">
                <h4 class="modal-title">LOGIN</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>

              
              <form class="form" action="#" method="post" onsubmit="return all_ok_login()">
                <div class="modal-body">
                    <div class="form-group">
                        <label>Email<span class="text-danger">*</span></label>
                        <input type="email" name="email" placeholder="example@gmail.com" class="form-control" id="userid" value="">
                        <span id="userid_error" class="text-danger"></span>
                    </div>
                    <div class="form-group">
                        <label>Password<span class="text-danger">*</span></label>
                        <input type="password" name="pswd" placeholder="password" class="form-control" id="userpswd" value="">
                        <span id="userpswd_error" class="text-danger"></span>
                    </div>
                </div>

              
                <div class="modal-footer">
                    <input type="submit" class="btn btn-success" value="Login"><br>
                    <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#mysignup" >Sign Up</a> | <a href="#">Forgot Password</a>
                </div>
              </form>
            </div>
          </div>
        </div>




        <div class="modal fade" id="mysignup">
          <div class="modal-dialog">
            <div class="modal-content "style="position: absolute;
  left: ;
  top: 0px;
  z-index:99999;">

             
              <div class="modal-header">
                <h4 class="modal-title">SIGN UP</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>

          
              <form class="form" action="#" method="post" onsubmit="return all_ok()">
                  <div class="modal-body">
                    <div class="form-group">
                        <label>Full Name<span class="text-danger">*</span></label>
                        <input type="text" name="fname" class="form-control" placeholder="e.g Ankit" id="sfname" value="">
                        <span id="checksfname" class="text-danger"></span>
                    </div>
                    <div class="form-group">
                        <label>Email Address<span class="text-danger">*</span></label>
                        <input type="email" name="email" class="form-control" placeholder="example@gmail.com" id="semail" value="">
                        <span id="checksemail" class="text-danger"></span>
                    </div>
                    <div class="form-group">
                        <label>Mobile No.<span class="text-danger">*</span></label>
                        <input type="text" name="mobile" class="form-control" placeholder="9876543219" id="smobile" value=""> 
                        <span id="checksmobile" class="text-danger"></span>
                    </div>
  
<!--
                    <div class="form-group">
                        <label>Date of Birth<span class="text-danger">*</span></label>
                        <input type="date" name="dob" class="form-control" placeholder="DD/MM/YYYY" id="sdob" value="">
                        <span id="checksdob" class="text-danger"></span>
                    </div>

    
                    <div class="form-group">
                        <label>Organisation Name<span class="text-danger">*</span></label>
                        <input type="text" name="orgname" class="form-control" placeholder="School/College/Company Name" id="sorg" value="">
                        <span id="checksorg" class="text-danger"></span>
                    </div>
  
-->
                    <div class="form-group">
                        <label>Password<span class="text-danger">*</span></label>
                        <input type="password" name="pswd" class="form-control" placeholder="Enter Password" id="spswd" value="">
                        <span id="checkspswd" class="text-danger"></span>
                    </div>
                    <div class="form-group">
                        <label>Confirm Password<span class="text-danger">*</span></label>
                        <input type="password" name="cpswd" class="form-control" placeholder="Re-Enter Password" id="scpswd" value="">
                        <span id="checkscpswd" class="text-danger"></span>
                    </div>

<!--
                    <div class="form-group">
                        <label>Promo Code</label>
                        <input type="text" name="promo" class="form-control" placeholder="ABCDEFG" id="spromo" value="">
                        <span id="checkspromo" class="text-danger"></span>
                    </div>
-->

                  </div>

                
                  <div class="modal-footer">
                    <input type="submit" class="btn btn-info" value="Sign Up"><br>
                    <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#myModal" >Already Have an Account?</a>
                  </div>
              </form>
            </div>
          </div>

</div>