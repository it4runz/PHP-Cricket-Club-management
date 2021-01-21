<?php
 session_start();
 if(!isset($_SESSION['uid']))
 {
	 header("location:login.php");
 }
 else
 {
	 
?>



<!DOCTYPE php>



<html>
<head>
<title>  Admin Panel  </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Augment Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->
<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/amcharts.js"></script>	
<script src="js/serial.js"></script>	
<script src="js/light.js"></script>	
<script src="js/radar.js"></script>	
<link href="css/barChart.css" rel='stylesheet' type='text/css' />
<link href="css/fabochart.css" rel='stylesheet' type='text/css' />
<!--clock init-->
<script src="js/css3clock.js"></script>
<!--Easy Pie Chart-->
<!--skycons-icons-->
<script src="js/skycons.js"></script>

<script src="js/jquery.easydropdown.js"></script>

<!--//skycons-icons-->
</head> 
<body>
   <div class="page-container">
   <!--/content-inner-->
	<div class="left-content">
	   <div class="inner-content">
		
						<div class="outter-wp">
								<!--custom-widgets-->
												<div class="custom-widgets">
												   <div class="row-one">
														<div class="col-md-3 widget">
															<div class="stats-left ">
																<h5>Today</h5>
																<h4> Users</h4>
															</div>
															<div class="stats-right">
																<label>90</label>
															</div>
															<div class="clearfix"> </div>	
														</div>
														<div class="col-md-3 widget states-mdl">
															<div class="stats-left">
																<h5>Today</h5>
																<h4>Visitors</h4>
															</div>
															<div class="stats-right">
																<label> 85</label>
															</div>
															<div class="clearfix"> </div>	
														</div>
														<div class="col-md-3 widget states-thrd">
															<div class="stats-left">
																<h5>Today</h5>
																<h4>Tasks</h4>
															</div>
															<div class="stats-right">
																<label>51</label>
															</div>
															<div class="clearfix"> </div>	
														</div>
														<div class="col-md-3 widget states-last">
															<div class="stats-left">
																<h5>Today</h5>
																<h4>Alerts</h4>
															</div>
															<div class="stats-right">
																<label>30</label>
															</div>
															<div class="clearfix"> </div>	
														</div>
														<div class="clearfix"> </div>	
													</div>
												</div>
												<!--//custom-widgets-->

										
<?php
include("sidebar.php");
?>


<link rel="stylesheet" href="css/vroom.css">
<script type="text/javascript" src="js/vroom.js"></script>
<script type="text/javascript" src="js/TweenLite.min.js"></script>
<script type="text/javascript" src="js/CSSPlugin.min.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>

<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
</body>
</html>
 <?php }?>