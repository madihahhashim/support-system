<?php
use PHPMailer\PHPMailer\PHPMailer;
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/Exception.php';
require 'PHPMailer/SMTP.php';
//include "./libFunc.php";
session_start();
include("connection/dbconn.php");


if(isset($_POST['submit']))
{
	

	include("connection/dbconn.php");
	//include "./libFunc.php";

$custname = $_POST['custname'];
$phone =$_POST['phone'];
$email = $_POST['email'];
$ticketcode =$_POST['ticketcode'];
$extension =$_POST['extension']; 
$tickdate =$_POST['tickdate'];
$helpdesc = $_POST['helpdesc'];
$helpid = $_POST['helpid'];


$duplicate = "SELECT ticketcode FROM ticket WHERE ticketcode = '$ticketcode'";
$biggest_id= mysqli_query($dbconn, "SELECT * FROM ticket");
	while($row = mysqli_fetch_array($biggest_id)){
     $id = $row['custid'];

	}
	$id2 = (max(array($id)) . "<br>");
	$biggest_id2 = mysqli_query($dbconn, "SELECT helpid from ticket WHERE custid='".$id2."'");
	while($rows = mysqli_fetch_array($biggest_id2)){
		$biggest = $rows['helpid'];
	}
	echo $biggest;
$check = mysqli_query($dbconn,$duplicate);
//$result = mysqli_fetch_array($check);


echo $checkrows;

if($checkrows>0) 
{
  echo "kod ticket telah ada";
  return false;
} 
else {  
$query =  "UPDATE ticket SET  custname = '$custname', ticketcode='$ticketcode', helpdesc = '$helpdesc', email = '$email', phone='$phone', extension = '$extension',tickdate = '$tickdate' WHERE custid = '".$id2."'";
echo $query;
//$query = "INSERT INTO ticket(custname,ticketcode,helpdesc, phone, email,extension, tickdate)VALUES('$custname','$ticketcode','$helpdesc','$phone','$email',$extension, '$tickdate')";
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
                    <h1>Twin Continent Sdn. Bhd.</h1>

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
							  <td>http://localhost/admin/test.php?custid='.$id2.'</td>



                              </tr>
                            </tfoot>
                          </table>
                        </div>

                    </body>
                    </html>';

    $mail->send();


      echo"<script language = 'javascript'>
      alert('Message has been sent!');
      window.location='buttons.php';</script>";


} 
catch (Exception $e) 
{
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
header("Location: buttons.php");


}
//echo $query;


?>


<!DOCTYPE html>
<html lang="en">
<head>
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

				<!-- //nav_agile_w3l -->
				<div class="wthree_agile_admin_info">
					<a class="gn-icon gn-icon-menu"><i class="fa fa-bars" aria-hidden="true"></i><span>Men
<div class="w3_agileits_top_nav">
			<ul id="gn-menu" class="gn-menu-main">
				  		 <!-- /nav_agile_w3l -->
						   <li class="gn-trigger">u</span></a>
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
																									<form class="form-horizontal" name="login" method="post" action = "input.php">
																									<div class="form-group">
																											<div class="col-sm-8">
																												<input type="hidden" name='helpid' class="form-control slide-in-right" style="border-radius:5px;" id="email" placeholder="" required>

																											</div>
																											<div class="col-sm-2">
																										
																											</div>
																										</div>
																										
																										<div class="form-group">
																											<label for="focusedinput" class="col-sm-2 control-label">Email</label>
																											<div class="col-sm-8">
																												<input type="email" name='email' class="form-control slide-in-left" style="border-radius:5px;" id="focusedinput" required>
																												

																											</div>
																											<div class="col-sm-2">
																										
																											</div>
																										</div>
																										<div class="form-group">
																											<label for="focusedinput" class="col-sm-2 control-label">Full Name</label>
																											<div class="col-sm-8">
																												<input type="text" name='custname' class="form-control slide-in-right" style="border-radius:5px;" id="email" placeholder="" required>

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
																											<label for="focusedinput" class="col-sm-2 control-label">Date</label>
																											<div class="col-sm-8">
																												<input type="date" name='tickdate' class="form-control slide-in-left" style="border-radius:5px;" id="telephonenum" placeholder=""  required>
																											</div>
																											<div class="col-sm-2">
																										
																											</div>
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
																										<div class="col-sm-4">
																										</div>
																									    <button type = "reset" class = "btn btn-default" name ="submit"value="submit">Reset</button> </center>
																										
																										<button type = "submit" class = "btn btn-default" name ="submit"value="submit">Submit</button> </center>
																										
																										<button type = "button" class = "btn btn-default" name ="submit"value="submit">Cancel</button> </center>
																									
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
<script type="text/javascript" src="js/buttonss.js"></script>


</body>
</html>