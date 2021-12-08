<?php
include('connection/dbconn.php');
include("secure/encrypt_decrypt.php");
session_start();
/* Pagination is a technique to divide content into several pages.
 Here we can assign each page a separate URL. By Clicking that URL or Page Number,
 user can view this Page. For every page we assign a incremental 
 Page number */
//$dbconn=mysqli_connect('localhost', 'root', '', 'support');


$start=0;
$limit=10;
// limit=1,2;
// limit=2,2;

$t=mysqli_query($dbconn,"SELECT * FROM ticket  ");
$total=mysqli_num_rows($t);



if(isset($_GET['id']))
{
	$id=$_GET['id'];
	$start=($id-1)*$limit;
	//$start=2*1;
	//$start=2;
}
else
{
	$id=1;
}
$page=ceil($total/$limit);

$result=mysqli_query($dbconn,"SELECT * FROM ticket   limit $start,$limit ");


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
<link rel="stylesheet" type="text/css" href="css/table-style.css" />
<link rel="stylesheet" type="text/css" href="css/basictable.css" />
<link href="css/component.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style_grid.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome-icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome-icons -->
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
<script type='text/javascript'>
function Confirm() {
  return confirm('Adakah anda pasti?');
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
				<span class="text">Hi <?php echo $_SESSION['staffname']; ?>!</span>	
			</li>
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
									<!-- tables -->
									<div class="card-body">
            						<form name="login" class="user" method="post" action = "problem.php">
									<div class="form-group">
										<input type="hidden" class="form-control form-control-user" name="custid"  value="<?php echo $row['custid']; ?>"  required >
									</div>
									<div class="agile-tables">
										<div class="w3l-table-info agile_info_shadow">
										 <h3 class="w3_inner_tittle two"></h3>
											<table class="table table-bordered" id="table">
											<thead>
											  <tr>
												<th><center>TICKET CODE</center></th>
												<th><center>DATE </center></th>
												<th><center>DESCRIPTION </center></th>
												<th><center>CUSTOMER </center></th>
												<th><center>UPDATE </center></th>
											  </tr>
											</thead>
											<tbody>
												<?php
													while($row=mysqli_fetch_assoc($result))
													{
														include('connection/dbconn.php');
														echo "<tr>";
														echo "<td><a href='view.php?custid=".urlencode(secured_encrypt($row['custid']))."'>".$row['ticketcode']."</a></td>";
														echo "<td>" . $row['tickdate'] . "</td>";
														echo "<td>" . $row['helpdesc'] . "</td>";
														echo "<td>" . $row['custname'] . "</td>";
														echo "<td><a href='update_staff.php?custid=".urlencode(secured_encrypt($row['custid']))."'>Kemaskini</a></td>";
														echo "</tr>";
													}

												?>

						
											 
											</tbody>
										  </table>
								
								<ul class="pagination pagination-sm m-t-none m-b-none">
                   				 <?php if($id > 1) {?> <li><a href="?id=<?php echo ($id-1) ?>">Previous</a></li><?php }?>
								 <?php
								 for($i=1;$i <= $page;$i++){
								 ?>
									<li><a href="?id=<?php echo $i ?>"><?php echo $i;?></a></li>
								  <?php
								 }
								  ?>
								<?php if($id!=$page)
								//3!=4
								{?> 
								  <li><a href="?id=<?php echo ($id+1); ?>">Next</a></li>
								<?php }?>
          				</ul>
                    </div>
				  </footer>
				</div>
							<!-- //tables -->
					
							<!-- /social_media-->
						  
						<!-- //social_media-->
				    </div>
					<!-- //inner_content_w3_agile_info-->
				</div>
		<!-- //inner_content-->
<!--copy rights start here-->
<div class="copyrights">
	 <p>© 2019 Twin Continent Sdn Bhd. All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
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
<!-- tables -->

<script type="text/javascript" src="js/jquery.basictable.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
      $('#table').basictable();

      $('#table-breakpoint').basictable({
        breakpoint: 768
      });

      $('#table-swap-axis').basictable({
        swapAxis: true
      });

      $('#table-force-off').basictable({
        forceResponsive: false
      });

      $('#table-no-resize').basictable({
        noResize: true
      });

      $('#table-two-axis').basictable();

      $('#table-max-height').basictable({
        tableWrapper: true
      });
    });
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