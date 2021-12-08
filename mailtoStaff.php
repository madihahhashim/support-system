<?php
require 'PHPMailer-master/PHPMailerAutoload.php';
//include "./libFunc.php";
session_start();

if(isset($_POST['submit']))
{
	

	include("connection/dbconn.php");
	//include "./libFunc.php";

$custName = $_POST['custName'];
$phone =$_POST['phone'];
$email = $_POST['email'];
$ticketcode =$_POST['ticketcode'];
//$status_statusid =$_POST['statusid'];

//$helpid =$_POST['helpid'];
$helpdesc = $_POST['helpdesc'];



$duplicate = "SELECT ticketcode FROM ticket WHERE ticketcode = '$ticketcode'";
$check = mysqli_query($dbconn,$duplicate);
$checkrows = mysqli_num_rows($check);

echo $checkrows;

if($checkrows>0) 
{
  echo "kod ticket telah ada";
  return false;
} 
else {  
//insert results from the form input
$query = "INSERT INTO ticket(custName,ticketcode,helpdesc, phone, email)VALUES('$custName', '$ticketcode','$helpdesc','$phone',
'$email')";

  //$result = mysqli_query( $query) or die('Error querying database.');
 
}
if (!mysqli_query($dbconn, $query)) 
{
  die('An error occurred');
} 
else 
{
  echo "<script>
    $(document).ready(function(){
      $('#myModal').modal('show');
    });
      </script>";

  
}
/*$sql = "SELECT * FROM ticket ";
  $qry = mysqli_query($dbconn,$sql);
  $r=mysqli_fetch_assoc($qry);

  $custname = $r['custname'];
  $ticketcode = $r['ticketcode'];
  $helpdesc = $r['helpdesc'];
  $phone = $r['phone'];
  $email = $r['email'];*/

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer();

try 
{
    //Server settings
   $mail->isSMTP();                                            // Set mailer to use SMTP
		$mail->Host       = 'mail.twincontinent.my';  // Specify main and backup SMTP servers
		$mail->SMTPAuth   = true;                                   // Enable SMTP authentication
		$mail->Username   = 'briefing@twincontinent.my';                     // SMTP username
		$mail->Password   = '6543210CBA';                               // SMTP password
		//$mail->SMTPSecure = 'ssl';                                  // Enable TLS encryption, `ssl` also accepted
		$mail->Port       =  2525;                                     // TCP port to connect to

    //Recipients

    $mail->setFrom('briefing@twincontinent.my', 'Twin Continent Sdn Bhd');
    $mail->addAddress($email, 'Twin Continent Sdn Bhd');     // Add a recipient


               // Name is optional
    $mail->addReplyTo('briefing@twincontinent.my', 'Detail');
    $mail->addCC('cc@example.com');
    $mail->addBCC('bcc@example.com');

    // Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Twin Continent Sdn Bhd';

    $mail->Body = '<html>
                    <body>
                    <h2>Your Detail  for Booking</h2>

                    <h1>Your booking has been confirm</h1>

                       <div class="table-responsive">
                          <table class="table table-bordered table-striped">
                          <thead>
                              <tr>
                                  <th>TICKET CODE</th>
								  <th>PROBLEM</th>


                              </tr>
                            </thead>

                            <tbody>
                              <tr>

                              <td>'.$ticketcode.'</td>
							  <td>'.$helpdesc.'</td>



                              </tr>
                            </tfoot>
                          </table>
                        </div>

                    </body>
                    </html>';

    $mail->send();


      echo"<script language = 'javascript'>
      alert('Message has been sent!');
      window.location='login.php';</script>";


} 
catch (Exception $e) 
{
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
header("Location: login.php");
//echo $query;
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Esteem  An Admin Panel Category Flat Bootstrap Responsive Website Template | Inputs  :: w3layouts</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Esteem Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
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
</head>
<body>
<!-- banner -->
<div class="wthree_agile_admin_info">
		  <!-- /w3_agileits_top_nav-->
		  <!-- /nav-->
		  <div class="w3_agileits_top_nav">
			<ul id="gn-menu" class="gn-menu-main">
			  		 <!-- /nav_agile_w3l -->
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
                <li class="second logo"><h1><a href="main-page.html"><i class="fa fa-graduation-cap" aria-hidden="true"></i>Esteem </a></h1></li>
					<li class="second admin-pic">
				       <ul class="top_dp_agile">
									<li class="dropdown profile_details_drop">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
											<div class="profile_img">	
												<span class="prfil-img"><img src="images/admin.jpg" alt=""> </span> 
											</div>	
										</a>
										<ul class="dropdown-menu drp-mnu">
											<li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li> 
											<li> <a href="#"><i class="fa fa-user"></i> Profile</a> </li> 
											<li> <a href="#"><i class="fa fa-sign-out"></i> Logout</a> </li>
										</ul>
									</li>
									
						</ul>
				</li>
				
				<li class="second top_bell_nav">
				   <ul class="top_dp_agile ">
									<li class="dropdown head-dpdn">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true"><i class="fa fa-envelope-o" aria-hidden="true"></i> <span class="badge blue">3</span></a>
										<ul class="dropdown-menu">
											<li>
												<div class="notification_header">
													<h3>Your Messages</h3>
												</div>
											</li>
											<li><a href="#">
												<div class="user_img"><img src="images/a3.jpg" alt=""></div>
											   <div class="notification_desc">
											     <h6>John Smith</h6>
												<p>Lorem ipsum dolor</p>
												<p><span>3 hour ago</span></p>
												</div>
											  <div class="clearfix"></div>	
											 </a></li>
											 <li class="odd"><a href="#">
												<div class="user_img"><img src="images/a1.jpg" alt=""></div>
											   <div class="notification_desc">
											     <h6>Jasmin Leo</h6>
												<p>Lorem ipsum dolor</p>
												<p><span>2 hour ago</span></p>
												</div>
											   <div class="clearfix"></div>	
											 </a></li>
											 <li><a href="#">
												<div class="user_img"><img src="images/a2.jpg" alt=""></div>
											   <div class="notification_desc">
											     <h6>James Smith</h6>
												<p>Lorem ipsum dolor</p>
												<p><span>1 hour ago</span></p>
												</div>
											   <div class="clearfix"></div>	
											 </a></li>
											 <li>
												<div class="notification_bottom">
													<a href="#">See all Messages</a>
												</div> 
											</li>
										</ul>
									</li>
									
						</ul>
				</li>
				<li class="second top_bell_nav">
				   <ul class="top_dp_agile ">
				       <li class="dropdown head-dpdn">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-tasks"></i><span class="badge blue">9</span></a>
										<ul class="dropdown-menu">
											<li>
												<div class="notification_header">
													<h3>You have 4 Pending tasks</h3>
												</div>
											</li>
											<li><a href="#">
												<div class="task-info">
													<span class="task-desc">Database update</span><span class="percentage">40%</span>
													<div class="clearfix"></div>	
												</div>
												<div class="progress progress-striped active">
													<div class="bar yellow" style="width:40%;"></div>
												</div>
											</a></li>
											<li><a href="#">
												<div class="task-info">
													<span class="task-desc">Dashboard done</span><span class="percentage">90%</span>
												   <div class="clearfix"></div>	
												</div>
												<div class="progress progress-striped active">
													 <div class="bar green" style="width:90%;"></div>
												</div>
											</a></li>
											<li><a href="#">
												<div class="task-info">
													<span class="task-desc">Mobile App</span><span class="percentage">33%</span>
													<div class="clearfix"></div>	
												</div>
											   <div class="progress progress-striped active">
													 <div class="bar red" style="width: 33%;"></div>
												</div>
											</a></li>
											<li><a href="#">
												<div class="task-info">
													<span class="task-desc">Issues fixed</span><span class="percentage">80%</span>
												   <div class="clearfix"></div>	
												</div>
												<div class="progress progress-striped active">
													 <div class="bar  blue" style="width: 80%;"></div>
												</div>
											</a></li>
											<li>
												<div class="notification_bottom">
													<a href="#">See all pending tasks</a>
												</div> 
											</li>
										</ul>
									</li>	
								</ul>
				</li>

				<li class="second w3l_search">
				 
						<form action="#" method="post">
							<input type="search" name="search" placeholder="Search here..." required="">
							<button class="btn btn-default" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
						</form>
					
				</li>
				<li class="second full-screen">
					<section class="full-top">
						<button id="toggle"><i class="fa fa-arrows-alt" aria-hidden="true"></i></button>	
					</section>
				</li>

			</ul>
			<!-- //nav -->
			
		</div>
		<div class="clearfix"></div>
		<!-- //w3_agileits_top_nav-->
		
		<!-- /inner_content-->
				<div class="inner_content">
				    <!-- /inner_content_w3_agile_info-->

					<!-- breadcrumbs -->
						<div class="w3l_agileits_breadcrumbs">
							<div class="w3l_agileits_breadcrumbs_inner">
								<ul>
									<li><a href="main-page.html">Home</a><span>«</span></li>
									<li>Forms <span>«</span></li>
									<li>Inputs</li>
								</ul>
							</div>
						</div>
					<!-- //breadcrumbs -->

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
																									<form class="form-horizontal">
																										<div class="form-group">
																											<label for="focusedinput" class="col-sm-2 control-label">Email</label>
																											<div class="col-sm-8">
																												<input type="email" class="form-control slide-in-left" style="border-radius:5px;" id="focusedinput" required>
																												

																											</div>
																											<div class="col-sm-2">
																										
																											</div>
																										</div>
																										<div class="form-group">
																											<label for="focusedinput" class="col-sm-2 control-label">Full Name</label>
																											<div class="col-sm-8">
																												<input type="text" name='custName' class="form-control slide-in-right" style="border-radius:5px;" id="email" placeholder="" required>

																											</div>
																											<div class="col-sm-2">
																										
																											</div>
																										</div>
																										<div class="form-group">
																											<label for="focusedinput" class="col-sm-2 control-label">Phone Number</label>
																											<div class="col-sm-8">
																												<input type="text" name='phone' class="form-control slide-in-left" style="border-radius:5px;" id="telephonenum" placeholder=""  required>
																											</div>
																											<div class="col-sm-2">
																										
																											</div>
																										</div>
																										<div class="form-group">
																											<label for="focusedinput" class="col-sm-2 control-label">Ext</label>
																											<div class="col-sm-8">
																												<input type="text" name='extension' class="form-control slide-in-left" style="border-radius:5px;" id="telephonenum" placeholder=""  >
																											</div>
																											<div class="col-sm-2">
																										
																											</div>
																										</div>
																										<div class="form-group">
																											<label for="selector1" class="col-sm-2 control-label">Staff Incharge</label>
																											<div class="col-sm-8"><select name="selector1" id="selector1" class="form-control1">
																											<?php
                               																						include("connection/dbconn.php");
                               																						$sql ="SELECT * FROM staff";
                               																						$qry = mysqli_query($dbconn, $sql);
                               																						$row1 = mysqli_num_rows($qry);
                               																						if($row1 > 0)
                               																						{
                                 																						while($r = mysqli_fetch_assoc($qry))
																													{
                                																					    if($row5['staff_staffid'] == $r['staffid'])
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
																												<textarea rows="4" cols="100" type="text" name='helpdesc' class="form-control slide-in-right" style="border-radius:10px;" id="email" required>
																												</textarea>
																											</div>
																											<div class="col-sm-2">
																										
																											</div>
																										</div>
																										<div class="form-group">
																											<label for="focusedinput" class="col-sm-2 control-label">Date</label>
																											<div class="col-sm-8">
																												<input type="date" name='ticketdate' class="form-control slide-in-left" style="border-radius:5px;" id="telephonenum" placeholder=""  >
																											</div>
																											<div class="col-sm-2">
																										
																											</div>
																										</div>
																										<div class="form-group">
																											<label for="focusedinput" class="col-sm-2 control-label">Ticket Number</label>
																											<div class="col-sm-8">
																											<?php
																											  $random=mt_rand(100000,999999);
																											?>
																											<input type="number" name='ticketcode' class="form-control slide-in-left" style="border-radius:5px;" id="telephonenum" placeholder=""   value = "<?php echo $random; ?>" readonly>
																										
																											</div>
																											<div class="col-sm-2">
																										
																											</div>
																										</div>

																										<div class="form-group row">
																										
																										
																										<button type = "button" class = "btn btn-default" name ="submit"value="submit">Cancel</button>
																										
																												</div>
																										

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