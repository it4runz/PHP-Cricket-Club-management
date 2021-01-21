<?php include("subheader.php"); ?>
<!DOCTYPE html>
    
  
      <link rel="stylesheet" href="css/lightbox.css">
      <!--//gallery-->
      <link rel="stylesheet" type="text/css" href="css/set1.css" />
      <link href="css/style.css" rel='stylesheet' type='text/css' media="all">
     
   </head>
   <body>
     
      <!-- short -->
      <div class="using-border py-3">
         <div class="inner_breadcrumb  ml-4">
            <ul class="short_ls">
               <li>
                  <a href="index.html">Home</a>
                  <span>/ /</span>
               </li>
               <li>Gallery</li>
            </ul>
         </div>
      </div>
      <!-- //short-->
      <!--Gallery-->
      <section class="gallery py-lg-4 py-md-3 py-sm-3 py-3 ">
         <div class="container-fluid py-lg-5 py-md-4 py-sm-4 py-3">
            <h3 class="title text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">Our Gallery</h3>
            <div class="row grid gallery-info">
	   <?php
		$con=mysqli_connect('localhost','root','','cricket club management system');
		
		$sq="select * from imgupload";
		$sq1=mysqli_query($con,$sq);
		while($r=mysqli_fetch_array($sq1)){
			$p=$r['image'];
		?>
		
               <div class="col-lg-4 col-md-4 col-sm-12 gallery-grids">
                  <figure class="effect-moses" style="height:75%;margin-top:10px;">
                     <img src="../admin/imgupload/<?=$p;?>" alt="" class="img-fluid" >
                     <figcaption>
                        <h4>Cricket<span><br>Club</span></h4>
                        <p>Management System</p>
                        <a href="../admin/imgupload/<?=$p;?>" class="gallery-box" data-lightbox="example-set" data-title="">
                        </a>
                     </figcaption>
                  </figure>
               </div>
			<?php }?>      
			
            </div>
         </div>
      </section>
      <!--//Gallery-->
<?php
include("footer.php");
?>
      <!--js working-->
      <script src='js/jquery-2.2.3.min.js'></script>
      <!--//js working-->
      <!-- gallery -->
      <script src="js/lightbox-plus-jquery.min.js"></script>
      <!-- //gallery -->
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