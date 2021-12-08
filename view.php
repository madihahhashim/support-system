<?php


use PHPMailer\PHPMailer\PHPMailer;
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/Exception.php';
require 'PHPMailer/SMTP.php';
//include "./libFunc.php";
session_start();



include("connection/dbconn.php");

if (isset($_GET['custid']))
{
	include("secure/encrypt_decrypt.php");
	$custid =urldecode(secured_decrypt($_GET['custid']));
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

	$query0 =  "SELECT * FROM actions JOIN ticket ON actions.custid=ticket.custid WHERE actions.custid = $custid";
	$result = mysqli_query($dbconn,$query0);	
	
}

if(isset($_SESSION['staffid']))
{
	
include("connection/dbconn.php");
	//include "./libFunc.php";
	
$staffid = $_POST['staffid'];
$custid = $_POST['custid'];
$actiondate =$_POST['actiondate'];
$comment = $_POST['comment'];
$acfile =$_POST['acfile'];
$curtime = date("Y-m-d H:i:s");



$duplicate = "SELECT custid FROM actions WHERE custid = '$custid'";
$check = mysqli_query($dbconn,$duplicate);

$query = "INSERT INTO actions(actiondate,acfile,comment,custid,staffid,inserttime,user_type)VALUES('$actiondate','$acfile','$comment','$custid',$staffid','$curtime','staff')";

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
$sql = "SELECT * FROM ticket ";
  $qry = mysqli_query($dbconn,$sql);
  $r=mysqli_fetch_assoc($qry);

  $custname = $r['custname'];
  $ticketcode = $r['ticketcode'];
  $helpdesc = $r['helpdesc'];
  $phone = $r['phone'];
  $email = $r['email'];
//echo $email;
// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

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
    $mail->addAddress($email, 'Customer');     // Add a recipient


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
								  <th>URL</th>

                              </tr>
                            </thead>

                            <tbody>
                              <tr>

                              <td>'.$ticketcode.'</td>
							  <td>'.$helpdesc.'</td>
							  <td>http://localhost/admin/view.php?custid=GItUDKnrmG%2FBe3t9q93XunvfE9bNWOW%2BMNTz0hjLB1DnRVn5LygKIZ0CK3ybbgmGL%2FcIKtcqjM31TXTpIgv9wpOrI2cVI%2FsS4AvrrLCg%2FyWeyeQig8YtLJ3fYylBbYsS</td>


                              </tr>
                            </tfoot>
                          </table>
                        </div>

                    </body>
                    </html>';

    $mail->send();


      echo"<script language = 'javascript'>
      alert('Message has been sent!');
      window.location='problem.php';</script>";


} 
catch (Exception $e) 
{
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>Twin Continent SDN BHD</title>
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
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
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
<style>
	.container {
  border: 2px solid #dedede;
  background-color: #f1f1f1;
  border-radius: 5px;
  padding: 10px;
  margin: 10px 0;
}

.darker {
  border-color: #ccc;
  background-color: #ddd;
  align-content: right;
}

.container::after {
  content: "";
  clear: both;
  display: table;
}

.container img {
  float: left;
  max-width: 60px;
  width: 100%;
  margin-right: 20px;
  border-radius: 50%;
}

.container img.right {
  float: right;
  margin-left: 20px;
  margin-right:0;
}

.time-right {
  float: right;
  color: #aaa;
  
}

.time-left {
  float: left;
  color: #999;
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
               <!-- //nav_agile_w3l -->
			   <li class="second logo"><h1><a href="main-page.html"><i class="fa fa-graduation-cap" aria-hidden="true"></i>TCSB </a></h1></li>
			   
				
			</li>
		
				
				<li class="second top_bell_nav">
				
				<section class="full-top">
					
				<span class="text">Hi <?php echo $_SESSION['staffname']; ?>!</span><b class="caret"></b>	
</section>
				
				</li>
				<li class="second full-screen">
				
				<p><u><a href="signin.php"><i class="fas fa-sign-out-alt" style="font-size:32px;color:white"></i></a></u></p>
			
				<p><h6><a href="signin.php">Log Out</a></h6></p>
				</li>
			</ul>
			<!-- //nav -->
				
			
			<!-- //nav -->
			
		</div>
		<div class="clearfix"></div>
		<!-- //w3_agileits_top_nav-->
		
		<!-- /inner_content-->
				<div class="inner_content">
				    <!-- /inner_content_w3_agile_info-->

				

					<div class="inner_content_w3_agile_info two_in">
					  <h2 class="w3_inner_tittle"></h2>
									<!-- tables -->
									
									<div class="agile-tables">
										<div class="w3l-table-info agile_info_shadow">
										 <h3 class="w3_inner_tittle two">Basic Implementation</h3>
											<div class="card-body">
            								<form name="login" class="user" method="post" action = "view.php">
                                                    <div class="form-group"> 
                                                    <label for="ticketcode">Ticket Code</label> 
                                                    <input type="text" class="form-control"  id = "ticketcode" placeholder="Ticket Code"  value="<?php echo $row['ticketcode']; ?>"></div>
													<input type="hidden" name="custid" value="<?php echo $custid; ?>">
                                                     <div class="form-group">
                                                    <label for="helpdecs">Problem</label>
                                                    <input type="text" class="form-control" id="helpdesc" placeholder="Problem" value="<?php echo $helpdesc; ?>"> 
												 </div><hr>
												 <!--<div align="left">
												 <div class="container">
												<p>Hello. How are you today?</p>
												<span class="time-right">11:00</span>
												</div></div>
												<div align="right">
												<div class="container darker">
												<p align="left">&nbsp;staffname  <span class="time-left"> 11:01</span></p><hr>
												<p>Hey! I'm fine. Thanks for asking!</p>
												
												</div></div>-->
												
												<?php
												while($row0=mysqli_fetch_array($result))
												{
													
												 
													?>
													<div align="right">
													<div class="container">
													<p><?php echo $row0['comment']; ?></p><hr>
													<p><span class="time-right"><?php echo $row0['actiondate']; ?>&nbsp;<?php echo $row0['inserttime'];?></span><?php echo "doctype.docx";?></p>
													</div></div>
													<?php
													
												}
												?>
												 
											
											</div>
											<div class="form-group">
                                                    <label for="helpdecs">Date</label>
                                                    <input type="date" class="form-control" name='actiondate' id="actiondate" placeholder="" required>
										  </div>
										  <div class="form-group">
                                                    <label for="helpdecs">Staff</label>
                                                    <input type="text" class="form-control" name='staffid' id="staffid" placeholder="STAFF" value="<?php echo $_SESSION['staffname']; ?>"> 
                                          </div> 
										  <div class="form-group">
                                                    <label for="helpdecs">Description</label>
													<textarea rows="4" cols="100" type="text" name='comment' class="form-control slide-in-right"  id="email" required>
												</textarea>
										  </div> 
										  <br>
										  <div class="form-group">
                                                    <label for="helpdecs">Attachment (Zip Only)</label>
													<input type="file" class="form-control" placeholder="jpg,png,jpeg" name="acfile">
														<center><div class="gallery-grid">
														<a class="example-image-link" href="imagedump/<?php echo $acfile; ?>" data-lightbox="example-set">
															<img src="imagedump/<?php echo $acfile;?>" alt="" />
														</a>
                                          </div> 
											
												&nbsp;&nbsp;
												<button type = "submit" class = "btn btn-default" name ="submit"value="submit">Submit</button> </center>
											</div>
										</div>
										</form>
							<!-- banner -->
							
							<!-- js -->

									<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
									<script src="js/modernizr.custom.js"></script>
									
									<script src="js/classie.js"></script>
									<script src="js/gnmenu.js"></script>
									<script>
										new gnMenu( document.getElementById( 'gn-menu' ) );
									</script>

							<!-- //js -->
						</body>
						</html> 