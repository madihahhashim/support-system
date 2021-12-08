<?php
session_start();

 if(isset($_GET['custid']))
{
  include("connection/dbconn.php");
  include("secure/encrypt_decrypt.php");
  $custid = urldecode(secured_decrypt($_GET['custid']));
  $sql = "SELECT * FROM ticket WHERE custid = $custid";
  //echo $sql;
  $qry = mysqli_query($dbconn, $sql);
  $row = mysqli_fetch_assoc($qry);

}

if(isset($_POST['submit']))
{
  include("connection/dbconn.php");
  
  $custid = $_POST['custid'];
  $custname = $_POST['custname'];
  $phone =$_POST['phone'];
  $email = $_POST['email'];
  $ticketcode =$_POST['ticketcode'];
  $extension =$_POST['extension']; 
  $tickdate =$_POST['tickdate'];
  $helpdesc = $_POST['helpdesc'];
  $staffid = $_POST['staffid'];


  $query = "UPDATE ticket SET  staffid=$staffid WHERE custid = $custid";
  echo $query;
if (!mysqli_query($dbconn, $query)) 
{
  echo "<script>
    $(document).ready(function(){
      $('#update-confirm').modal('show');
    });
      </script>";

  header("Location: problem.php?op=errkod");
} 
else 
{
  echo "<script>
  $(document).ready(function(){
    $('#update-confirm').modal('show');
  });
    </script>";

header("Location: problem.php?op=success");
}
}
else if(isset($_POST['delete']))
{
  include("connection/dbconn.php");

  $custid = $_POST['custid'];
  $custname = $_POST['custname'];
  $phone =$_POST['phone'];
  $email = $_POST['email'];
  $ticketcode =$_POST['ticketcode'];
  $extension =$_POST['extension']; 
  $tickdate =$_POST['tickdate'];
  $helpdesc = $_POST['helpdesc'];
  $helpid = $_POST['helpid'];
  $staffid = $_POST['staffid'];

  $query = "DELETE FROM ticket WHERE custid = $custid";
  echo $query;
if (!mysqli_query($dbconn, $query)) 
{
  echo "<script>
    $(document).ready(function(){
      $('#update-confirm').modal('show');
    });
      </script>";

  header("Location: problem.php?op=errkod");
} 
else 
{
  echo "<script>
  $(document).ready(function(){
    $('#update-confirm').modal('show');
  });
    </script>";

header("Location: problem.php?op=success");
}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>SUPPORT</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Esteem Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/component.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style_grid.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome-icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome-icons -->
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">

<style>
	.btn 
	{
  	background-color: CornflowerBlue;
  	border: none;
  	color: white;
  	: 12px 16px;
  	font-size: 16px;
  	cursor: pointer;
	}

	/* Darker background on mouse-over */
	.btn:hover {
  	background-color: "";
	}
</style>
<script type='text/javascript'>
function Confirm() {
  return confirm('Do you confirm?');
}
</script>
</head>
<body>
<!-- banner -->
<div class="wthree_agile_admin_info">
		  <!-- /w3_agileits_top_nav-->
		  <!-- /nav-->
		  <div class="w3_agileits_top_nav">
			<ul id="gn-menu" class="gn-menu-main">
				  		 <!-- /nav_agile_w3l -->
						   <li class="gn-trigger">
					<a class="gn-icon gn-icon-menu"><i class="fa fa-bars" aria-hidden="true"></i><span>Menu</span></a>
					<nav class="gn-menu-wrapper">
						<div class="gn-scroller scrollbar1">
							<ul class="gn-menu agile_menu_drop">
								<li><a href="main-page.html"> <i class="fa fa-tachometer"></i> Dashboard</a></li>
								<li>
									<a href="#"><i class="fa fa-cogs" aria-hidden="true"></i> UI Components <i class="fa fa-angle-down" aria-hidden="true"></i></a> 
									<ul class="gn-submenu">
										<li class="mini_list_agile"><a href="buttons.html"><i class="fa fa-caret-right" aria-hidden="true"></i> Buttons</a></li>
										<li class="mini_list_w3"><a href="grids.html"> <i class="fa fa-caret-right" aria-hidden="true"></i> Grids</a></li>
									</ul>
								</li>
								
								<li class="page">
									<a href="#"><i class="fa fa-files-o" aria-hidden="true"></i> Pages <i class="fa fa-angle-down" aria-hidden="true"></i></a>
									 <ul class="gn-submenu">
						
									  <li class="mini_list_agile"> <a href="signin.html"> <i class="fa fa-caret-right" aria-hidden="true"></i> Sign In</a></li>
									   <li class="mini_list_w3"><a href="signup.html"> <i class="fa fa-caret-right" aria-hidden="true"></i> Sign Up</a></li>
									   <li class="mini_list_agile error"><a href="404.html"> <i class="fa fa-caret-right" aria-hidden="true"></i> Error 404 </a></li>
	
										<li class="mini_list_w3_line"><a href="calendar.html"> <i class="fa fa-caret-right" aria-hidden="true"></i> Calendar</a></li>
									</ul>
								</li>
								
									
							</ul>
						</div><!-- /gn-scroller -->
					</nav>
				</li>
				<!-- //nav_agile_w3l -->
				<li class="second logo"><h1><a href="main-page.html"><i class="fa fa-graduation-cap" aria-hidden="true"></i>TCSB </a></h1></li>
				<span class="text">Hi <?php echo $_SESSION['staffname']; ?>!</span><b class="caret"></b>	
				<li class="second full-screen">
				<p><u><a href="signin.php"><i class="fas fa-sign-out-alt" style="font-size:32px;color:white"></i></a></u></p>
			
				<p><h6><a href="signin.php">Log Out</a></h6></p>
				</li>

			</ul>
			<!-- //nav -->
			
		</div>
		<div class="clearfix"></div>
		<!-- //w3_agileits_top_nav-->
		
		<!-- /inner_content-->
		<div class="inner_content">
				    <!-- /inner_content_w3_agile_info-->

					<div class="inner_content_w3_agile_info two_in">
					
							<!--/forms-->
													<div class="forms-main_agileits">
														
															
																<!--/forms-inner-->
													  				<div class="forms-inner">
																	  <!--/set-1-->
																		<div class="set-1_w3ls">
																	
																			<div class="wthree_general graph-form agile_info_shadow ">
																				 <h3 class="w3_inner_tittle two">Contact Information </h3>

																					<div class="grid-1 ">
																							<div class="form-body">
																									<form class="form-horizontal" name="login" method="post" action = "ainmail1.php">
																												<input type="hidden" name='custid'  value = "<?php echo $row['custid']; ?>" readonly>
																										
																										<div class="form-group">
																											<label for="focusedinput" class="col-sm-2 control-label">Email</label>
																											<div class="col-sm-8">
																												<input type="email" name='email' class="form-control slide-in-left" style="border-radius:5px;" id="focusedinput" value = "<?php echo $row['email']; ?>" readonly>
																											</div>
																											<div class="col-sm-2">
																										
																											</div>
																										</div>
																										<div class="form-group">
																											<label for="focusedinput" class="col-sm-2 control-label">Full Name</label>
																											<div class="col-sm-8">
																												<input type="text" name='custname' class="form-control slide-in-right" style="border-radius:5px;" id="email" placeholder="" value = "<?php echo $row['custname']; ?>" readonly>

																											</div>
																											<div class="col-sm-2">
																										
																											</div>
																										</div>
																										<div class="form-group">
																											<label for="focusedinput" class="col-sm-2 control-label">Phone Number</label>
																											<div class="col-sm-8">
																												<input type="text" name='phone' class="form-control slide-in-left" style="border-radius:5px;" id="telephonenum" placeholder=""  value = "<?php echo $row['phone']; ?>" readonly>
																											</div>
																											<div class="col-sm-2">
																										
																											</div>
																										</div>
																										<div class="form-group">
																											<label for="focusedinput" class="col-sm-2 control-label">Ext</label>
																											<div class="col-sm-8">
																												<input type="text" name='extension' class="form-control slide-in-left" style="border-radius:5px;" id="telephonenum" placeholder="" value = "<?php echo $row['extension']; ?>" readonly>
																											</div>
																											<div class="col-sm-2">
																										
																											</div>
                                                                                                        </div>
                                                                                                        <div class="form-group">
																											<label for="selector1" class="col-sm-2 control-label">Staff Incharge</label>
																											<div class="col-sm-8">
																											<select name="staffid"  class="select2 form-control custom-select" value="<?php echo $row['staffid']; ?>">
																											<?php
                               																						include("connection/dbconn.php");
                               																						$sql ="SELECT * FROM staff";
                               																						$qry = mysqli_query($dbconn, $sql);
                               																						$row1 = mysqli_num_rows($qry);
                               																						if($row1 > 0)
                               																						{
                                 																						while($r = mysqli_fetch_assoc($qry))
																													{
                                																					    if($row['staffid'] == $r['staffid'])
                                  																						echo "<option value='".$r['staffid']."' selected>".$r['staffname']." </option>";
                                  																					else 
                                  																					{
                                   																						 echo "<option value='".$r['staffid']."'>".$r['staffname']." </option>";
                                  																					}
                                																					}
                             																						}
                                																			?>
																											</select></div>
																										</div>
																										<div class="form-group">
																											<label for="focusedinput" class="col-sm-2 control-label">Message</label>
																											<div class="col-sm-8">
																												<textarea rows="4" cols="100" type="text" name='helpdesc' class="form-control slide-in-right" style="border-radius:10px;" id="helpdesc" value = "<?php echo $row['helpdesc']; ?>" readonly>
																												</textarea>
																											</div>
																											<div class="col-sm-2">
																										
																											</div>
                                                                                                        </div>
                                                                                                        <div class="form-group">
																											<label for="focusedinput" class="col-sm-2 control-label">Date</label>
																											<div class="col-sm-8">
																												<input type="date" name='tickdate' class="form-control slide-in-left" style="border-radius:5px;" id="telephonenum" placeholder="" value = "<?php echo $row['tickdate']; ?>" readonly>
																											</div>
																											<div class="col-sm-2">
																										
																											</div>
																										</div>
																										<div class="form-group">
																											<label for="focusedinput" class="col-sm-2 control-label">Ticket Number</label>
																											<div class="col-sm-8">
																											<input type="number" name='ticketcode' class="form-control slide-in-left" style="border-radius:5px;" id="telephonenum" placeholder=""   value = "<?php echo $row['ticketcode']; ?>" readonly>
																										
																											</div>
																											<div class="col-sm-2">
																										
																											</div>
																										</div>
																										<br>
																										<center><button type = "submit" class = "btn btn-default" name ="delete"value="submit"  onclick="return Confirm()">Delete</button> 
																										
																									    <button type = "submit" class = "btn btn-default" name ="submit"value="submit"  onclick="return Confirm()">Submit</button><center>
                                                                                                        

																								</form>
																							</div>

																					</div>
																				</div>
																			
																		</div>
																	<!--//forms-inner-->
																</div> 
														<!--//forms-->											   
					
				    </div>
					<!-- //inner_content_w3_agile_info-->
				</div>
		<!-- //inner_content-->
	</div>
<!-- banner -->
<!--copy rights start here-->
<div class="copyrights">
	 <p>© 2017 Esteem. All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
</div>	
<!--copy rights end here-->
<!-- js -->

          <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
		  <script src="js/modernizr.custom.js"></script>
		
		   <script src="js/classie.js"></script>
		  <script src="js/gnmenu.js"></script>
		  <script>
			new gnMenu( document.getElementById( 'gn-menu' ) );
		 </script>

<!-- //js -->
<script src="js/screenfull.js"></script>
		<script>
		$(function () {
			$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

			if (!screenfull.enabled) {
				return false;
			}

			

			$('#toggle').click(function () {
				screenfull.toggle($('#container')[0]);
			});	
		});
		</script>
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>

<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>


</body>
</html>