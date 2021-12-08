<?php 

$db= mysqli_connect('localhost', 'root', '', 'support');


	if(isset($_POST['feedbackbutton']))
	{
	mysqli_query($db, "INSERT INTO ticket (helpid) VALUES ( 1 )");
	header('location: input.php');
	}
	if(isset($_POST['inquirybutton']))
	{
		mysqli_query($db, "INSERT INTO ticket (helpid) VALUES ( 2 )");
		header('location: input.php');
	}
	if(isset($_POST['reportbutton']))
	{
		mysqli_query($db, "INSERT INTO ticket (helpid) VALUES ( 3 )");
		header('location: input.php');
	}



?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>SUPPORT CENTER</title>
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
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link rel="stylesheet" href="styles/css/welcome.css">
	<link rel="icon" href="img/ico/tc1.png">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<style>
	.btn 
	{
  	background-color: MediumVioletRed;
  	border: none;
  	color: white;
  	: 12px 16px;
  	font-size: 16px;
  	cursor: pointer;
	}

	/* Darker background on mouse-over */
	.btn:hover {
  	background-color: DarkMagenta;
	}
</style>
</head>

<body>
<div class="wthree_agile_admin_info">
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

<li class="second full-screen">
</li>

</ul>
</div>
		<div class="clearfix"></div>
		<!-- //w3_agileits_top_nav-->
		
		<!-- /inner_content-->
				<div class="inner_content">
				    <!-- /inner_content_w3_agile_info-->

					<div class="inner_content_w3_agile_info two_in">
					  

							<!--/forms-->
								<div class="forms-main_agileits">
                                    <div class="graph-form agile_info_shadow">
                                    
	<form class="slide-in-top" action="index.php" method="POST" >
		<div class="container">
		<center>
		<img src="img/logo/tc.png" style="max-width:23%" class="slide-in-top">
		</center>
		<br>
		<h1 class="slide-in-top"><center>Welcome</center></h1>
		<h3 class="slide-in-top"><center>Twin Continent Support Center</center></h3>
		<h4 class="slide-in-top"><center>In order to streamline support requests and better serve you, we utilize a support ticket system. Every support requests is assignned a unique ticket number which you can use to track the progress and responses online. For your reference, we provide complete archives and history of all your support requests. A valid email address is required to submit a ticket.
		</center></h4>
		<br>
		<center><button type="submit" class="btn but1 btn-block slide-in-top animated" id = "feedback" value="feedback" name="feedbackbutton" ><i class="fa fa-send"></i> &nbsp;Feedback</button></center>
		<input type="hidden" name ="feedback" value="1">
		<br>
		<center><button type="submit" class="btn but1 btn-block slide-in-top animated" id = "inquiry" value="inquiry" name="inquirybutton" ><i class="fa fa-comment"></i> &nbsp;General Inquiry</button></center>
		<br>
		<center><button type="submit" class="btn but1 btn-block slide-in-top animated" id = "report" value="report" name="reportbutton" ><i class="fa fa-bullhorn"></i> &nbsp;Report a Problem/ Access Issue</button></center>
		<br>
		<center><p><u><a href="signin.php">As a staff?</a></u></p></center>

		</div>
	</form>
</div>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script type="text/javascript" src="js/buttonss.js"></script>
</body>
</html>

