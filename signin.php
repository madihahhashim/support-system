<!DOCTYPE html>

<?php
    if(isset($_POST['submit']))
    {
        session_start();
        include "./connection/dbconn.php";
        $staffcode = $_POST['staffcode'];
        $pass = $_POST['pass'];
        if($staffcode!=null)
        {
            $sql = "SELECT * FROM staff 
            JOIN staffstatus  ON staff.status_stid = staffstatus.stid 
            WHERE staff.staffcode = '".$staffcode."' AND staff.pass = '".$pass."'";
            $qry = mysqli_query($dbconn,$sql);
			$checkRow = mysqli_num_rows($qry);
			echo $sql;
            if($checkRow>0)
            {
                $result = mysqli_fetch_assoc($qry);
                $_SESSION['staffname'] = $result['staffname'];
                //$_SESSION['userlogged'] = 1;
                //$_SESSION[''] = $result['studentno'];
                //$SESSION['studprogID'] = $result['programmes_programmeid'];
                //$_SESSION['progcode'] = $result['programmecode'];
                //$_SESSION['usertype'] = 2; // 1- moderator, 2- pelajar, 3- pembangun sistem
                //include "./libFunc.php";
                //$_SESSION['START'] = createSessionStart($_SESSION['START']);
                //$_SESSION['LAST'] = autoDestroySession($_SESSION['LAST']);
                header("location:problem.php");
            }
            else
            {
                echo "<script language='javascript'>alert('Input Invalid!!');window.location='signin.php';</script>";
            }
        }
    }

?>

<html lang="en">
<head>
<title>SUPPORT</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Esteem Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/snow.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/component.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style_grid.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome-icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome-icons -->
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">

<style>
.button {
  background-color: #752851;
  border: none;
  color: white;
  padding: 8px 10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 10px 20px;
  cursor: pointer;
}

.button1 {border-radius: 2px;}
</style>
</head>
<body>
			<!-- /pages_agile_info_w3l -->

						<div class="pages_agile_info_w3l">
							<!-- /login -->
							   <div class="over_lay_agile_pages_w3ls">
								    <div class="registration">
								
												<div class="signin-form profile">
													<h2>Log in </h2>
													<div class="login-form">
														<form action="#" method="post">
															<input type="text" name="staffcode" placeholder="User ID" required="">
                                                            <input type="password" name="pass" placeholder="Password" required="">
                                                            
                                                            <br>
															<button type="submit" class="button button1" name='submit'>SUBMIT</button>
														</form>
													</div>
													<div class="login-social-grids">
														<ul>
															<li><a href="#"><i class="fa fa-facebook"></i></a></li>
															<li><a href="#"><i class="fa fa-twitter"></i></a></li>
															<li><a href="#"><i class="fa fa-rss"></i></a></li>
														</ul>
													</div>
													<p><u><a href="index.php">As a customer?</a></u></p>
													<p><a href="signup.php"> Don't have an account?</a></p>
													
													 <h6><a href="main-page.html">Back To Home</a><h6>
												</div>
										</div>
										<!--copy rights start here-->
											<div class="copyrights_agile">
												 <p>© 2019 Twin Continent Sdn Bhd. All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
											</div>	
											<!--copy rights end here-->
						    </div>
						</div>
							<!-- /login -->
<!-- //pages_agile_info_w3l -->


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
<script src="js/snow.js"></script>
 <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>


</body>
</html>