<?php
include('hed.php');
?>

<div class="graph-visual tables-main">									
									
											<h2 class="inner-tittle">User Query</h2>
												<div class="graph">
														<div class="tables" style="color:black;">
																
																<table class="table table-hover">
																	<thead>
																		<tr>
																			<th>ID</th>
																			<th>Name</th>
																			<th>Email</th>
																			<th>Contact No</th>
																			<th>Subject</th>
																			<th>Meassage</th>
																		</tr>
																	</thead>
	<?php
			$con = mysqli_connect('localhost','root','','cricket club management system');
			$sq="select * from contact";
			$sq1=mysqli_query($con,$sq);
			while($r=mysqli_fetch_array($sq1))
			{
				
			?>
		<tr>
			<th><?php echo $r['id'];?></th>
			<th><?php echo $r['name'];?></th>
			<th><?php echo $r['email'];?></th>
			<th><?php echo $r['phone'];?></th>
			<th><?php echo $r['subject'];?></th>
			<th><?php echo $r['meassage'];?></th>
		</tr>
			<?php }?>
																	
		</table>
	</div>
												
</div>						
		</div>
			</div>
					</div>
							</div>
									</div>

				
<?php
include("sidebar.php");
?>

</body>
</html>					