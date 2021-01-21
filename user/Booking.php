<?php
include("subheader.php");
?>
<html>
<head>
    <title></title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
</head>
	  <!-- short -->
      <div class="using-border py-3">
         <div class="inner_breadcrumb  ml-4">
		 
            <ul class="short_ls">
               <li>
                  <a href="index.php">Home</a>
                  <span>/</span>
               </li>
               <li>Service</li>
            </ul>
         </div>
      </div>
      <!-- //short-->
      <!--service-->
      <section class="about-inner py-lg-4 py-md-3 py-sm-3 py-3">
         <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
            <h3 class="title text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">Ground Booking</h3>
           
            <form action="#" method="post">
                        <div class="row agile-wls-contact-mid mb-lg-4 mb-3">
                           <div class="col-lg-6 col-md-6 form-group contact-forms">
                              <input type="text" class="form-control" placeholder="Name" name="nm">
                           </div>
                           <div class="col-lg-6 col-md-6 form-group contact-forms">
                              <input type="email" class="form-control" placeholder="Email" name="em">
                           </div>
                        </div>
                        <div class="row agile-wls-contact-mid mb-lg-4 mb-3">
                           <div class="col-lg-6 col-md-6 form-group contact-forms">
                              <input type="text" class="form-control" placeholder="Contact No." name="cn">
                           </div>
                           <div class="col-lg-6 col-md-6 form-group contact-forms">
                              <input type="text" class="form-control" placeholder="Purpose" name="pur">
                           </div>
                        </div>


             <div class="row agile-wls-contact-mid mb-lg-4 mb-3">
			
							<div class="col-lg-6 col-md-6 form-group contact-forms">
                              <input type="text" class="form-control" placeholder="Date" name="dt" id="todate">
                           </div>
			

                           <div class="col-lg-6 col-md-6 form-group contact-forms">
                              <input type="text" class="form-control" placeholder="No.of Days" id="days" name="ndt" onblur="getamount();">
                           </div>
                        
						</div>
						<div class="row agile-wls-contact-mid mb-lg-4 mb-3">
                           <div class="col-lg-6 col-md-6 form-group contact-forms">
                              <input type="text" class="form-control" placeholder="To. Date" name="tdt" id="todate">
                           </div>
                           <div class="col-lg-6 col-md-6 form-group contact-forms">
                              <input type="text" class="form-control" placeholder="Amount" id="amt" name="mnt">
                           </div>
                        </div>
                        <div class="form-group contact-forms">
						<div class="col-lg-12 col-md-12 form-group contact-forms">
                            
							<button type="submit" class="btn btn-success btn-lg col-md-4" name="submit" value="submit">Submit</button>
							 <button type="button" class="btn btn-default btn-lg col-md-4">Cancel</button>
							 
							 
							
							 </div>
                        </div>
			
                     </form>
					     <?php

//Set useful variables for paypal form
$paypal_link = 'https://www.sandbox.paypal.com/cgi-bin/webscr'; //Test PayPal API URL
$paypalID = 'mailuser0011@gmail.com'; //Business Email

?>

<form action="<?php echo $paypal_link; ?>" method="post"> 

    <input type="hidden" name="business" value="<?php echo $paypalID; ?>"> 

    <!-- Specify a Buy Now button. --> 

    <input type="hidden" name="cmd" value="_xclick"> 

    <!-- Specify details about the item that buyers will purchase. --> 

    <input type="hidden" name="item_name" value="product1"> 

    <input type="hidden" name="item_number" value="1"> 

    <input type="hidden" name="amount" value="100"> 

    <input type="hidden" name="currency_code" value="INR">



    <!-- Specify URLs --> 

    <input type='hidden' name='cancel_return' value='http://localhost//cricket club managment system/user/paypal_cancel.php'>

    <input type='hidden' name='return' value='http://localhost/cricket club management system/user/paypal_success.php'>



    <!-- Display the payment button. --> 

    <input type="image" name="submit" border="0" 

    src="images/pay.png" height="5`0px" alt="PAY NOW"> 

    <img alt="" border="0" width="1" height="1" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" > 



</form> 
              
<?php
		$con = mysqli_connect('localhost','root','','cricket club management system');
		if(isset($_REQUEST['submit']))
		{
		$name=$_REQUEST['nm'];
		$email=$_REQUEST['em'];
		$contactno=$_REQUEST['cn'];
		$purpose=$_REQUEST['pur'];
		$date=$_REQUEST['dt'];
		$nday=$_REQUEST['ndt'];
		$todate=$_REQUEST['tdt'];
		$amount=$_REQUEST['mnt'];

		

  $sq="insert into groundbooking (name,email,contactno,purpose,date,noofday,todate,amount,status)values('$name','$email','$contactno','$purpose','$date',$nday,'$todate',$amount,0)";
		
		$sq1=mysqli_query($con,$sq);

		if($sq1)
		{
			
			echo"THANK YOU FOR REGISRATION.";
		}
		else
		{
			echo"PLEASE FILL VALID INFORMATION.";
		}
		}	
?>
		
                 
              
               
                    
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--//service-->
     
<?php
include("footer.php");
?>
      <!--js working-->
      <script src='js/jquery-2.2.3.min.js'></script>
      <!--//js working-->
      <!-- start-smoth-scrolling -->
      <script src="js/move-top.js"></script>
      <script src="js/easing.js"></script>
      <script>
         jQuery(document).ready(function ($) {
         	$(".scroll").click(function (event) {
         		event.preventDefault();
         		$('html,body').animate({
         			scrollTop: $(this.hash).offset().top
         		}, 900);
         	});
         });
      </script>
      <!-- start-smoth-scrolling -->
      <!-- here stars scrolling icon -->
      <script>
         $(document).ready(function () {
         
         	var defaults = {
         		containerID: 'toTop', // fading element id
         		containerHoverID: 'toTopHover', // fading element hover id
         		scrollSpeed: 1200,
         		easingType: 'linear'
         	};
         
         
         	$().UItoTop({
         		easingType: 'easeOutQuart'
         	});
         
         });
      </script>
	  <script>
			

		function getamount()
		{
			var days=$('#days').val();
			var amount=days*3000;
			$('#amt').val(amount);
			
		}
		
		
		

	  </script>

      <!-- //here ends scrolling icon -->
      <!--bootstrap working-->
	  <script type="text/javascript" src="jquery/jquery-1.8.3.min.js" charset="UTF-8"></script>
      <script src="js/bootstrap.min.js"></script>
      <!-- //bootstrap working-->
	  


<script type="text/javascript" src="js/bootstrap-datetimepicker.js" charset="UTF-8"></script>

<script type="text/javascript">
  
	$('.form_date').datetimepicker({
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 2,
		minView: 2,
		forceParse: 0
    });

</script>



   </body>
</html>