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
               <li>Contact</li>
            </ul>
         </div>
      </div>
      <!-- //short-->
      <!--contact -->
      <section class="contact py-lg-4 py-md-3 py-sm-3 py-3">
         <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
            <h3 class="title text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">Contact Us</h3>
            <div class="agile-info-para">
               <div class="row contactright pb-lg-5 pb-md-4 pb-sm-3 pb-3">
                  <div class="col-lg-4 col-md-4  text-center contact-address-grid">
                     <div class="footer_grid_left">
                        <div class="contact_footer_grid_left text-center mb-3">
                           <h5> Address</h5>
                        </div>
                        <p>555, Alkapuri club, <br>New Welcome Hotel,Vadodara,India.</p>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-4 text-center contact-address-grid">
                     <div class="footer_grid_left">
                        <div class="contact_footer_grid_left text-center mb-3">
                           <h5>Phone</h5>
                        </div>
                        <p>+(91) 9033908364</p>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-4 text-center contact-address-grid">
                     <div class="footer_grid_left">
                        <div class="contact_footer_grid_left text-center mb-3">
                           <h5>Email</h5>
                        </div>
                        <p><a href="mailto:info@example.com">CRICKETCLUB.ORG</a> 
                           <br><a href="mailto:info@example.com">PIYUSHSONI1998@ICLOUD</a>
                        </p>
                     </div>
                  </div>
               </div>
               <div class="row contact-wls-detail">
                  <div class="col-lg-6 contact-form pb-lg-3 pb-2">
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
                              <input type="text" class="form-control" placeholder="Phone" name="cn">
                           </div>
                           <div class="col-lg-6 col-md-6 form-group contact-forms">
                              <input type="text" class="form-control" placeholder="subjecct" name="sub">
                           </div>
                        </div>
                        <div class="form-group contact-forms">
                           <textarea class="form-control" placeholder="Meassage" name="mesg"></textarea>
                        </div>
							<button type="submit" class="btn btn-success btn-lg col-md-4" name="submit" value="submit">Submit</button>
                     </form>
                  </div>
                  <div class="col-lg-6 address_mail_footer_grids">
				  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3691.1924312613887!2d73.18407531489174!3d22.308560985319254!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395fcf5244f9cc3f%3A0x41447c5b49c6bf4e!2sBit+Infotech!5e0!3m2!1sen!2sin!4v1551086730336" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                                      </div>
               </div>
            </div>
         </div>
      </section>
	  
	  <?php
		$con = mysqli_connect('localhost','root','','cricket club management system');
		if(isset($_REQUEST['submit']))
		{
		$name=$_REQUEST['nm'];
		$email=$_REQUEST['em'];
		$contactno=$_REQUEST['cn'];
		$subject=$_REQUEST['sub'];
		$meassage=$_REQUEST['mesg'];
		
		$sq="insert into contact (name,email,phone,subject,meassage)values('$name','$email','$contactno','$subject','$meassage')";
		
		$sq1= mysqli_query($con,$sq);
		if($sq1)
		{
			echo "THANK YOU FOR CONATACT US.";
		}
		else
		{
			echo "PLEASE FILL VALID INFORMATION.";
		}
		}	
?>
		
      <!--//contact  -->
     
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
</html>`
bs
