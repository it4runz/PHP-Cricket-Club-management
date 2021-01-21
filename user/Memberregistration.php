<?php
include("subheader.php");
?>
      <!-- short -->
      <div class="using-border py-3">
         <div class="inner_breadcrumb  ml-4">
            <ul class="short_ls">
               <li>
                  <a href="index.php">Home</a>
                  <span>/ /</span>
               </li>
               <li>Typography</li>
            </ul>
         </div>
      </div>
	  	<section class="about-inner py-lg-4 py-md-3 py-sm-3 py-3">
         <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
            <h3 class="title text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">Join Membership</h3>
           
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
                              <input type="text" class="form-control" placeholder="Address" name="ad">
                           </div>
                        </div>
						<div class="row agile-wls-contact-mid mb-lg-4 mb-3">
                           <div class="col-lg-6 col-md-6 form-group contact-forms">
                              <input type="text" class="form-control" placeholder="Pincode" name="pin">
                           </div>
                           <div class="col-lg-6 col-md-6 form-group contact-forms">
                              <input type="text" class="form-control" placeholder="City" name="ct">
                           </div>
                        </div>
						<div class="row agile-wls-contact-mid mb-lg-4 mb-3">
                           <div class="col-lg-6 col-md-6 form-group contact-forms">
                              <input type="text" class="form-control" placeholder="State" name="st">
                           </div>
                           <div class="col-lg-6 col-md-6 form-group contact-forms">
                              <input type="text" class="form-control" placeholder="Country" name="cnt">
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
		
		$con = mysqli_connect('localhost','root','','cricket club management system');
		if(isset($_REQUEST['submit']))
		{
		$name=$_REQUEST['nm'];
		$email=$_REQUEST['em'];
		$contactno=$_REQUEST['cn'];
		$address=$_REQUEST['ad'];
		$pincode=$_REQUEST['pin'];
		$city=$_REQUEST['ct'];
		$state=$_REQUEST['st'];
		$country=$_REQUEST['cnt'];		

	echo $sq="insert into membership (name,email,contactno,address,pincode,city,state,country)values('$name','$email','$contactno','$address',$pincode,'$city','$state','$country')";
		
		$sq1=mysqli_query($con,$sq);

		if($sq1)
		{
			
			echo"THANK YOU FOR REGISRATION.";
		}
		else
		{
			echo "PLEASE FILL VALID INFORMATION.";
		}
		}	
?>
	</div>
               </section>      
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
      <!-- //here ends scrolling icon -->
      <!--bootstrap working-->
      <script src="js/bootstrap.min.js"></script>
      <!-- //bootstrap working-->
   </body>
</html>