<?php


if(isset($_GET['custid']))
{
  include("connection/dbconn.php");
  //include("secure/encrypt_decrypt.php");
  $custid = $_GET['custid'];
  $sql = "SELECT * FROM ticket WHERE custid = $custid";
  //echo $sql;
  $qry = mysqli_query($dbconn, $sql);
  $row = mysqli_fetch_assoc($qry);

}


/*if(isset($_POST['submit']))
{
	include('connection/dbconn.php');

	$ticketcode = $_POST['ticketcode'];
	$helpdesc = $_POST['helpdesc'];
	//$sbjname =$_POST['sbjname'];

	//$sql = "SELECT * FROM subjects";
	//$query = "UPDATE subjects SET sbjcode = '$sbjcode', sbjname = '$sbjname' WHERE sbjid = $sbjid";
	//echo $query;

	$duplicate = "SELECT * FROM ticket";
	//$query = "INSERT INTO bookcopies(bcserialno, bcregisterdate, books_bkid, bookcopiestatus_bcsid)VALUES( '$bcserialno','$bcregisterdate', $bkid, $bcsid)";
	$check=mysqli_query($conn,$duplicate);
	$checkrows=mysqli_num_rows($check);
	echo $checkrows;
	if($checkrows>0) 
	{
	echo "Buku telah ada";
	return false;
	} 
	
}*/

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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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


			
				<li class="second w3l_search">
				 
						<form action="details.php" method="post">
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
					  <h2 class="w3_inner_tittle">Inputs</h2>

							<!--/forms-->
								<div class="forms-main_agileits">
                                    <div class="graph-form agile_info_shadow">
										<h3 class="w3_inner_tittle two">Ticket Information </h3>
											
                                                 <form  name="login" class="user" method="post" action = "details.php"> 
                                                    <div class="form-group"> 
													
                                                    <label for="ticketcode">Ticket Code</label> 
                                                    <input type="text" class="form-control" id="ticketcode" placeholder="Ticket Code"  value="<?php echo $row['ticketcode']; ?>"> </div>
                                                    <div class="form-group">
                                                    <label for="helpdecs">Problem</label>
                                                    <input type="text" class="form-control" id="helpdesc" placeholder="Problem" value="<?php echo $row['helpdesc']; ?>"> 
                                                 </div> 
											<tbody> 
											<div class="container">
											<h3 align="center">Add Remove Select Box Fields Dynamically using jQuery Ajax in PHP</h3>
											<br />
											<h4 align="center">Enter Item Details</h4>
											<br />
											<form method="post" id="insert_form">
												<div class="table-repsonsive">
												<span id="error"></span>
												<table class="table table-bordered" id="item_table">
												<tr>
												<th>Enter Date</th>
												<th>Enter Description</th>
												<th>Attachment</th>
												<th><button type="button" name="add" class="btn btn-success btn-sm add"><span class="glyphicon glyphicon-plus"></span></button></th>
												</tr>
												</table>
												<div align="center">
												<input type="submit" name="submit" class="btn btn-info" value="Insert" />
												</div>
												</div>
											</form>
											</div>
											</body>
											</html>

									
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

<script>
	$(document).ready(function(){
	
	$(document).on('click', '.add', function(){
	var html = '';
	html += '<tr>';
	html += '<td><input type="date" name="actiondate[]" class="form-control actiondate" /></td>';
	html += '<td><input type="text" name="actiondesc[]" class="form-control actiondesc" /></td>';
	html += '<td><button type="button" name="remove" class="btn btn-danger btn-sm remove"><span class="glyphicon glyphicon-minus"></span></button></td></tr>';
	$('#item_table').append(html);
	});
	
	$(document).on('click', '.remove', function(){
	$(this).closest('tr').remove();
	});
	
	$('#insert_form').on('submit', function(event){
	event.preventDefault();
	var error = '';
	$('.actiondate').each(function(){
	var count = 1;
	if($(this).val() == '')
	{
		error += "<p>Enter Date at "+count+" Row</p>";
		return false;
	}
	count = count + 1;
	});
	
	$('.actiondesc').each(function(){
	var count = 1;
	if($(this).val() == '')
	{
		error += "<p>Enter Description at "+count+" Row</p>";
		return false;
	}
	count = count + 1;
	});
	
	$('.item_unit').each(function(){
	var count = 1;
	if($(this).val() == '')
	{
		error += "<p>Select Unit at "+count+" Row</p>";
		return false;
	}
	count = count + 1;
	});
	var form_data = $(this).serialize();
	if(error == '')
	{
	$.ajax({
		url:"insert.php",
		method:"POST",
		data:form_data,
		success:function(data)
		{
		if(data == 'ok')
		{
		$('#item_table').find("tr:gt(0)").remove();
		$('#error').html('<div class="alert alert-success">Item Details Saved</div>');
		}
		}
	});
	}
	else
	{
	$('#error').html('<div class="alert alert-danger">'+error+'</div>');
	}
	});
	
	});
	</script>