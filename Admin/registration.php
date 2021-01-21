
<?php
  session_start();
?>
<!DOCTYPE html>
<!-- saved from url=(0076)file:///C:/wamp/www/Cricket%20Club%20Management%20System/Admin/register.html -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title> Admin Panel   </title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<meta name="keywords" content="Augment Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="file:///C:/wamp/www/Cricket%20Club%20Management%20System/Admin/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<!-- Custom CSS -->
<link href="file:///C:/wamp/www/Cricket%20Club%20Management%20System/Admin/css/style.css" rel="stylesheet" type="text/css">
<!-- Graph CSS -->
<link href="file:///C:/wamp/www/Cricket%20Club%20Management%20System/Admin/css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<link href="file://fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400" rel="stylesheet" type="text/css">
<!-- lined-icons -->
<link rel="stylesheet" href="file:///C:/wamp/www/Cricket%20Club%20Management%20System/Admin/css/icon-font.min.css" type="text/css">
<!-- //lined-icons -->
<script src="file:///C:/wamp/www/Cricket%20Club%20Management%20System/Admin/js/jquery-1.10.2.min.js"></script>

<style>
	h2.inner-tittle.page {
    text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.4);
    position: absolute;
    top: -20%;
    left: -1%;
    font-size: 40px;
    color: #fff;
}
.sign-up input[type="submit"] {
    float: left; 
    width: 30%;
    font-size: 17px;
    font-weight: 400;
    color: #fff;
    cursor: pointer;
    outline: none;
    padding: 6px 19px;
    border: 2px solid #00C6D7;
    background: #00C6D7;
    margin-left: 35%;

}
CREATE TABLE `batchreg` (
  `first name` int(15) NOT NULL,
  `last name` varchar(15) NOT NULL,
  `email` varchar(15) NOT NULL,
  `address` varchar(15) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration``
--

INSERT INTO `batchreg` (`first name`, `last name`, `email`, `address`, `password`) VALUES
(1, 'solanki','ritesh', 'r@gmail.com', 'channi', '646131'),
(2, 'shaikh','trupti', 't@gmail.com', 'sokhda', '35565585'),
(3, 'patel','ritesh', 'r@gmail.com', 'alkapuri', '4463112'),
(4, 'shah','parthiv', 'p@gmail.com', 'sangam', '255655'),
(5, ,'parmar''suniTA', 'AS@GMAIL.COM', 'lnt', '554151561');

</style>
<!--clock init-->
</head> 
<body>
								<!--/login-->
								
									   <div class="error_page">
												<!--/login-top-->
												
													<div class="error-top">
													<h2 class="inner-tittle page">registration</h2>
													    <div class="registeration">
														
																<form><div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
	
	
    <input type="text" placeholder="Enter first name" name="name" required>
	
	
    <input type="text" placeholder="Enter last name" name="name" required>

    
    <input type="text" placeholder="Enter Email" name="email" required>
	
	
    <input type="text" placeholder="Enter address" name="address" required>

    
    <input type="password" placeholder="Enter Password" name="psw" required>

    <hr>

    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
    <button type="submit" class="registerbtn">Register</button>
  </div>
																		
																		
																		<div class="new">
																			<p><label class="checkbox11"><input type="checkbox" name="checkbox"><i> </i>I agree with the terms</label></p>
																			<p class="sign">Already register ? <a href="file:///C:/wamp/www/Cricket%20Club%20Management%20System/Admin/login.html">Login</a></p>
																			<div class="clearfix"></div>
																		</div>
																	</form>
														
													 </div>
												<!--//login-top-->
										  
										  	<!--//login-->
										    <!--footer section start-->
										<div class="footer">
										         
										   <p>© 2018, All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank">BIT Infotech</a></p>
										</div>
									<!--footer section end-->
									<!--/404-->
<!--js -->
<script src="file:///C:/wamp/www/Cricket%20Club%20Management%20System/Admin/js/jquery.nicescroll.js"></script>
<script src="file:///C:/wamp/www/Cricket%20Club%20Management%20System/Admin/js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="file:///C:/wamp/www/Cricket%20Club%20Management%20System/Admin/js/bootstrap.min.js"></script>

</div></div></body></html>