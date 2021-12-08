<?php

include("connection/dbconn.php");
if (isset($_GET['custid']))
{
	$custid = $_GET['custid'];
	$query = mysqli_query($dbconn, "SELECT * FROM ticket where custid = $custid");
	if (!$query)
	 {
	  printf("Error: %s\n", mysqli_error($dbconn));
	  exit();
	 } 
	else
	{
	$row = mysqli_fetch_array($query);
	/*$custid = $row['custid'];*/
    $ticketcode = $row['ticketcode'];
    $helpdesc = $row['helpdesc'];
	}
}


if(isset($_POST['submit']))
{

    //$bkisbn = strtoupper($_POST['bkisbn']);
    //$bktitle = strtoupper($_POST['bktitle']);
    $actiondate = $_POST['actiondate'];
    //$acfile = $_POST['acfile'];
    $actiondesc = $_POST['actiondesc'];
    //$bsid = $_POST['bsid'];

    $sql = "SELECT * FROM actions";
    $qry0 = mysqli_query($dbconn, $sql);
    $row0 = mysqli_num_rows($qry0);
    $r0 = mysqli_fetch_assoc($qry0);


	

    $query = "INSERT INTO actions(actiondate,actiondesc, acfile )VALUES( '$actiondate','$actiondesc','$acfile')";
	echo $query;
	
	
   /* if (!mysqli_query($dbconn, $query)) 
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
	}*/
}

?>

<!DOCTYPE html>
<html lang="zxx">
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
                                    <div class="graph-form agile_info_shadow">
										<h3 class="w3_inner_tittle two">Ticket Information </h3>
											
                                                 <form  name="login" class="user" method="post" action = "detail.php"> 
                                                    <div class="form-group"> 
													
                                                    <label for="ticketcode">Ticket Code</label> 
                                                    <input type="text" class="form-control" id="ticketcode" placeholder="Ticket Code"  value="<?php echo $row['ticketcode']; ?>"> </div>
                                                    <div class="form-group">
                                                    <label for="helpdecs">Problem</label>
                                                    <input type="text" class="form-control" id="helpdesc" placeholder="Problem" value="<?php echo $row['helpdesc']; ?>"> 
                                                 </div> 
											<tbody> 
											<div class="container">
											
											<h4 align="center">Enter Item Details</h4>
											<br />
											<form method="post" id="insert_form">
												<div class="table-repsonsive">
												<span id="error"></span>
												<table class="table table-bordered" id="item_table">
												<tr>
												<th>Enter Date</th>
												
												<button type="button" name="add" class="btn btn-success btn-sm add"><span class="glyphicon glyphicon-plus"></span></button>
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
	html += '<td><input type="file" name="acfile[]" class="form-control actiondesc" /></td>';
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
	
	$('.acfile').each(function(){
	var count = 1;
	if($(this).val() == '')
	{
		error += "<p> Attachment at "+count+" Row</p>";
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