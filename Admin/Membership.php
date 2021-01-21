<?php
include('hed.php');
?>
								  <!--//sub-heard-part-->
									<div class="graph-visual tables-main">


	<h2 class="inner-tittle">Membership</h2>
												<div class="graph">
														<div class="tables" style="color:black;">
																
																<table class="table table-hover">
																	<thead>
																		<tr>
																			<th>ID</th>
																			<th>Name</th>
																			<th>Email</th>
																			<th>Contact No</th>
																			<th>Address</th>
																			<th>Pincode</th>
																			<th>City</th>
																			<th>State</th>
																			<th>Country</th>
																		</tr>
																	</thead>
	<?php
			$con = mysqli_connect('localhost','root','','cricket club management system');
			$sq="select * from membership";
			$sq1=mysqli_query($con,$sq);
			while($r=mysqli_fetch_array($sq1))
			{
				
			?>
		<tr>
			<th><?php echo $r['id'];?></th>
			<th><?php echo $r['name'];?></th>
			<th><?php echo $r['email'];?></th>
			<th><?php echo $r['contactno'];?></th>
			<th><?php echo $r['address'];?></th>
			<th><?php echo $r['pincode'];?></th>
			<th><?php echo $r['city'];?></th>
			<th><?php echo $r['state'];?></th>
			<th><?php echo $r['country'];?></th>
		</tr>
			<?php }?>
																	
		</table>
	</div>
												
</div>	

	

									
												
											</div>
										</div>
										<!--//graph-visual-->
									</div>
									<!--//outer-wp-->

								</div>
							</div>
				<!--//content-inner-->
				
<?php
include("sidebar.php");
?>

</body>
</html>					