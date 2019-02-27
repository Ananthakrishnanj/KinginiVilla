<?php
include('./include/db_connect.php');
include('./include/funtions.php');
sec_session_start();
$_SESSION['LOGIN_STATUS'] = false;
if (isset($_POST['loginButton'])) {
	if (login($_POST['userName'], $_POST['password'], $conn)) {
		$invalid = false;
		$_SESSION['LOGIN_STATUS'] = true;
		header("Location:Data.php");		
	} 
	else {
		$invalid = true;
		$_SESSION['LOGIN_STATUS'] = false;
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>KinginiVilla - Admin Portal</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/KinginiLogo.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/login_util.css">
	<link rel="stylesheet" type="text/css" href="css/login_main.css">	
<!--===============================================================================================-->
<link rel="icon" type="image/png" href="images/icons/KinginiLogo.png"/>
</head>
<body style="background-color: #666666;">
	
	
	<div class="limiter">
		<div class="container-login100">
	
			<div class="wrap-login100">				
				<form class="login100-form validate-form" method="POST">
					<span class="login100-form-title p-b-43">
						Admin Login
					</span>
					
					
					<div class="wrap-input100 validate-input" data-validate = "User name is required">
						<input class="input100" type="text" name="userName">
						<span class="focus-input100"></span>
						<span class="label-input100">User name</span>
					</div>
					
					
					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="password">
						<span class="focus-input100"></span>
						<span class="label-input100">Password</span>
					</div>
													
		<?php 
				if (isset($invalid)) {
					if ($invalid == true) {
						echo '<div class="alert alert-danger alert-dismissible">
						<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						<strong>Invalid Credentials! </strong> Invalid username or password
					  </div>';
					}
				}
				?>		
			
					<div class="container-login100-form-btn"> 
						<button class="login100-form-btn" type="submit" name="loginButton">
							Login
						</button>
					</div>										
				</form>

				<div class="login100-more" style="background-image: url('images/bg.jpg');">
				<div class="hero-text-container">					
					<h3 class="hero-text">KINGINI</h3>
					<p class="hero-text caption">LAKE VIEW VILLA</p>
				</div>
				</div>
			</div>
		</div>
	</div>
	
	

	
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/login_main.js"></script>

</body>
</html>