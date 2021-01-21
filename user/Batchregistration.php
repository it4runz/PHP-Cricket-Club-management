<?php
include("subheader.php");
?>
<html>
<head>


</head>
<body>
      <!-- short -->
      <div class="using-border py-3">
         <div class="inner_breadcrumb  ml-4">
            <ul class="short_ls">
               <li>
                  <a href="index.html">Home</a>
                  <span>Batch Registration </span>
               </li>
                </ul>
				</div>
				</div>
	<section class="about-inner py-lg-4 py-md-3 py-sm-3 py-3">
         <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
            <h3 class="title text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">Batch Registration</h3>
           
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
						   <label>Batch Type<select name="btype"><option>Regular</option><option>Vacation</option></select>
						   </label>
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
		$batchtype=$_REQUEST['btype'];

		

		$sq="insert into batchreg(name,email,contactno,batchtype) values('$name','$email','$contactno','$batchtype')";
		
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
	  
	  	


      
<?php
include("footer.php");
?>
      
   </body>
</html>