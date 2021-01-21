<?php
include('hed.php');
?>


<?php 
$con = mysqli_connect('localhost','root','','cricket club management system');
if(isset($_POST['submit']))
{
$file = $_FILES ['file'];
$name = $file ['name'];
$type = $file ['type'];
$size = $file ['size'];
$tmppath = $file ['tmp_name']; 
if($name!="")
{
if(move_uploaded_file ($tmppath, 'imgupload/'.$name))//image is a folder in which you will save image
{
$query="insert into imgupload(image) values('$name')";
mysqli_query ($con,$query) or die ('could not updated:'.mysql_error());
echo"image inserted.";
}
}
}
?>




<html >
<head>
<title>Image Upload</title>
</head>
<body>
<form name="form" action="" method="post" enctype="multipart/form-data">
Photo 
  <label>
  <input type="file" name="file" id="file">
  </label>
<input type="submit" name="submit" value="upload" /> 
</form>
</body>
</html>
<div class="graph-visual tables-main">
				
									
									
											<h2 class="inner-tittle">Gallary</h2>
												<div class="graph" >
														<div class="tables" style="color:black;">
																
																<table class="table table-hover">
																	<thead>
																		<tr>
																			<th>ID</th>
																			<th>Name</th>
																			<th>Drop</th>
																		</tr>
																	</thead>
	<?php
	
			$con = mysqli_connect('localhost','root','','cricket club management system');
			$sq="select * from imgupload";
			$sq1=mysqli_query($con,$sq);
			while($r=mysqli_fetch_array($sq1))
			{
			$p=$r['image'];
		?>
		<tr>
			<th><?php echo $r['id'];?></th>
			<th><img src="../admin/imgupload/<?php echo $p;?>" width="200px" height="100px"></th>
			<th><button class="btn btn-danger" name="drop">Drop</button>
			
			</th>
		</tr>
		<?php }?>
</table>
	</div>
												
</div>						




				
<?php
include("sidebar.php");
?>

</body>
</html>					