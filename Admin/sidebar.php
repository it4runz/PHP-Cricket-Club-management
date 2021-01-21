			<!--/sidebar-menu-->
				<div class="sidebar-menu">
					<header class="logo">
					<a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="adminindex.php"> <span id="logo"> <h1>Administrator</h1></span> 
					<!--<img id="logo" src="" alt="Logo"/>--> 
				  </a> 
				</header>
			<div style="border-top:1px solid rgba(69, 74, 84, 0.7)"></div>
			<!--/down-->
							<div class="down">	
									  <a href="adminindex.php"><img src="images/admin.jpg"></a>
									  <a href="adminindex.php"><span class=" name-caret">SOHIL KHAN</span></a>
									 <p>cricket club management system</p>
									<ul>
									<li><a class="tooltips" href="profile.php"><span>Profile</span><i class="lnr lnr-user"></i></a></li>
										<li><a class="tooltips" href="adminindex.php"><span>Settings</span><i class="lnr lnr-cog"></i></a></li>
										<li><a class="tooltips" href="login.php"><span>Log out</span><i class="lnr lnr-power-switch"></i></a></li>
										</ul>
									</div>
							   <!--//down-->
                           <div class="menu">
									<ul id="menu" >
										<li><a href="adminindex.php"><i class="fa fa-tachometer"></i> <span>Dashboard</span></a></li>
										 <li id="menu-academico" ><a href="booking.php"><i class="fa fa-table"></i> <span> Booking</span> <span class="fa fa-angle-right" style="float: right"></span></a>
										</li>
										 <li id="menu-academico" ><a href="Batchreg.php"><i class="fa fa-file-text-o"></i> <span>Batch Registration</span> <span class="fa fa-angle-right" style="float: right"></span></a>
										 </li>

									<li id="menu-academico" ><a href="Membership.php"><i class="lnr lnr-book"></i> <span>Membership</span> <span class="fa fa-angle-right" style="float: right"></span></a>

									 </li>
									 <li><a href="notice.php"><i class="lnr lnr-envelope"></i> <span>Notice</span><span class="fa fa-angle-right" style="float: right"></span></a>

									</li>
							        <li id="menu-academico" ><a href="gallary.php"><i class="lnr lnr-layers"></i> <span>Gallary</span> <span class="fa fa-angle-right" style="float: right"></span></a>
										 
									 </li>
									
									<li id="menu-comunicacao" ><a href="userquery.php"><i class="fa fa-smile-o"></i> <span>User Query</span><span class="fa fa-angle-double-right" style="float: right"></span></a>
									</li>
									</ul>
									</div>
							  </div>
							  <div class="clearfix"></div>		
							</div>
							<script>
							var toggle = true;
										
							$(".sidebar-icon").click(function() {                
							  if (toggle)
							  {
								$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
								$("#menu span").css({"position":"absolute"});
							  }
							  else
							  {
								$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
								setTimeout(function() {
								  $("#menu span").css({"position":"relative"});
								}, 400);
							  }
											
											toggle = !toggle;
										});
							</script>
<!--js -->