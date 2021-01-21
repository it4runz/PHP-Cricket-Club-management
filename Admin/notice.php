<?php
include('hed.php');
?>
 <section class="about-inner py-lg-4 py-md-3 py-sm-3 py-3">
         <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
            <h3 class="title text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">Post Notice</h3>
           
            <form action="#" method="post">
                        <div class="row agile-wls-contact-mid mb-lg-4 mb-3">
                           <div class="col-lg-6 col-md-6 form-group contact-forms">
                              <input type="text" class="form-control" placeholder="New Post" name="nt">
                           </div>
                        </div>
                        <div class="form-group contact-forms">
						<div class="col-lg-12 col-md-12 form-group contact-forms">

							<button type="submit" class="btn btn-success btn-lg col-md-4" name="submit" value="submit">Post</button>
							 <button type="button" class="btn btn-default btn-lg col-md-4">Reset</button>
							 </div>
                        </div>
			
                     </form>
              
<?php
		$con = mysqli_connect('localhost','root','','cricket club management system');
		if(isset($_REQUEST['submit']))
		{
		$newpost=$_REQUEST['nt'];
	    $sq="insert into post (newpost,date)values('$newpost',now())"; 
		
		$sq1= mysqli_query($con,$sq);
		if($sq1)
		{
			echo "Post Updated Successfully.";
		}
		else
		{
			echo "PLEASE FILL VALID INFORMATION.";
		}
		}	
?>
		<div class="graph-visual tables-main">									
									
											<h2 class="inner-tittle">Post Update</h2>
												<div class="graph">
														<div class="tables" style="color:black;">
																
																<table class="table table-hover">
																	<thead>
																		<tr>
																			<th>New Post</th>
																			<th>Date</th>
																		</tr>
																	</thead>
	<?php
			$con = mysqli_connect('localhost','root','','cricket club management system');
			$sq="select * from post";
			$sq1=mysqli_query($con,$sq);
			while($r=mysqli_fetch_array($sq1))
			{
				$dt=$r['date'];
				$edt=explode("-",$dt);
				$mydt=$edt[2]."/".$edt[1]."/".$edt[0];
			?>
		<tr>
			<th><?php echo $r['newpost'];?></th>
			<th><?php echo $mydt;?></th>
			</tr>
		<?php }?>
																	
		</table>
	</div>
												
</div>
</div>						
				
<?php
include("sidebar.php");
?>

</body>
</html>					