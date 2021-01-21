<?php
  session_start();
?>
    <!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

    <!DOCTYPE HTML>
    <html>

    <head>
        <title> Admin Panel </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Augment Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
        <script type="application/x-javascript">
            addEventListener("load", function() {
                setTimeout(hideURLbar, 0);
            }, false);

            function hideURLbar() {
                window.scrollTo(0, 1);
            }
        </script>
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
        <!--clock init-->
        <style>
            .myinput {
                width: 100%;
                padding: 0.9em 1em 0.9em 4em;
                color: #777;
                font-size: 15px;
                outline: none;
                font-weight: 400;
                border: 1px solid #ddd;
                margin: 0.3em 0;
                font-family: 'Roboto', sans-serif;
            }
        </style>
    </head>

    <body>
        <!--/login-->

        <div class="error_page">
            <!--/login-top-->

            <div class="error-top">
                
                <div class="login">
                    <h3 class="inner-tittle t-inner">Login</h3>
                    
                    <form>
                        <input type="text" class="text myinput" value="E-mail address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'E-mail address';}" name="nm">
                        <input type="password"  class="myinput" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" name="pw">
                        <div class="submit">
                            <input type="submit" onclick="myFunction()" value="Login">
                        </div>
                        <div class="clearfix"></div>

                    </form>
                </div>

            </div>

            <?php
		$con = mysqli_connect('localhost','root','','cricket club management system');
		if(isset($_REQUEST['nm'])&& isset($_REQUEST['pw']))
		{
			$name=$_REQUEST['nm'];
			$password=$_REQUEST['pw'];
			$sq="select * from adminlogin where name='$name' and password='$password'";
			$sq1=mysqli_query($con,$sq);
			$ar=mysqli_fetch_array($sq1);
			if($sq1)
			{
				$_SESSION['uid']=$ar['id'];
				header("location:adminindex.php");
				exit;
			}
			else
			{
				echo"login not successfully";
			}
		}	
	?>

                <!--//login-top-->
        </div>

        <!--//login-->
        <!--footer section start-->
        <div class="footer">
            
            <p>&copy 2019 Augment . All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank">BIT.</a></p>
        </div>
        <!--footer section end-->
        <!--/404-->
        <!--js -->
        <script src="js/jquery.nicescroll.js"></script>
        <script src="js/scripts.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
    </body>

    </html>