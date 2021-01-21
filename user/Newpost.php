<?php
include("subheader.php");
?>

<html>
<body>	
	<center><h3>Notice</h3></center>
	<div style="border:2px solid black;margin:10px;padding:5px;">
	
	
		
	
			<?php
			$con = mysqli_connect('localhost','root','','cricket club management system');
			$sq="select * from post";
			$sq1=mysqli_query($con,$sq);
			while($r=mysqli_fetch_array($sq1))
			{
				
			?>
			
			 <form action="#" method="post">
<table border=5>
			<?php echo $r['newpost'];?><br><br>
									<?php echo $r['date'];?>
			
                         
</table>

			<?php }?></div>
																	
		
	</form>
	</body>

</html>	
<?php
include("footer.php");
?>