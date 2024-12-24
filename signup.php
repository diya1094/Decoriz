<?php include('assets/includes/dbconnection.php');
session_start();
error_reporting(0);
include('assets/includes/dbconnection.php');
?>
<html>
<head>
	</script>
	<!-- Bootstrap Core CSS -->
	<link href="assets/signupcss/bootstrap.css" rel='stylesheet' type='text/css' />
	<!-- Custom CSS -->
	<link href="assets/signupcss/loginstyle.css" rel='stylesheet' type='text/css' />
	<!-- font CSS -->
	<!-- font-awesome icons -->

	<link href="assets/signupcss/font-awesome.css" rel="stylesheet">
	<!-- //font-awesome icons -->
	<!-- js-->
	<script src="assets/js/jquery-1.11.1.min.js"></script>
	<script src="assets/js/modernizr.custom.js"></script>
	<!--webfonts-->
	<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic'
		rel='stylesheet' type='text/css'>
	<!--//webfonts-->
	<!--animate-->
	<link href="assets/signupcss/animate.css" rel="stylesheet" type="text/css" media="all">
	<script src="assets/js/wow.min.js"></script>
	<script>
		new WOW().init();
	</script>
	<!--//end-animate-->
	<!-- Metis Menu -->
	<script src="assets/js/metisMenu.min.js"></script>
	<script src="assets/js/custom.js"></script>
	<link href="assets/signupcss/custom.css" rel="stylesheet">
	<!--//Metis Menu -->
</head>

<body class="cbp-spmenu-push">
	<div class="main-content" style="margin-bottom : 32px; height: 100%; width: 83%; ">

		<!-- main content start-->
		<div id="page-wrapper" style="margin-top: 32px; ">
			<div class="main-page login-page ">
				<h3 class="title1">SignUP Page</h3>
				<div class="widget-shadow">
					<div class="login-top">
					<!-- <span class="top"></span>
						<span class="right"></span>
						<span class="bottom"></span>
						<span class="left"></span> -->
						
						<h4 style="color:white;">Welcome back to Decoriz ! </h4>
						
					</div>
					<div class="login-body ">
					
						<form role="form" method="post" action="signup_data.php">
                            <!-- Name, MobileNumber, Email, Gender, Address, State, PIN, Password and Confirm Password inputs for signup -->
                            <input type="text" class="user" name="name" placeholder="Enter Your Name" required="true">
                            <input type="number" class="user" name="mobilenumber" placeholder="Enter Your Mobile Number" required="true">
                            <input type="email" class="user" name="email" placeholder="Enter Your Email" required="true">
                            <!-- Gender -->
                            <div class="row form-group" style="margin-top:1px;">
                                <div class="col-md-6">
                                    <label for="genderMale" class="control-label" style="color:white;">Gender</label>&nbsp;&nbsp;&nbsp;&nbsp;
									<input type="radio" name="gender" value="male" checked="" id="genderMale" required /> <label style="color:white;">Male</label>&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="radio" name="gender" value="female" id="genderFemale"/><label style="color:white;">Female</label> &nbsp;&nbsp;&nbsp;&nbsp;
									<input type="radio" name="gender" value="other" id="genderOther" /> <label style="color:white;">Other</label> &nbsp;&nbsp;
									<br/><br/>
                                </div>
                            </div>
                            <input type="text" class="user" name="address" placeholder="Enter Your Address" required="true">
                            <input type="text" class="user" name="state" placeholder="Enter Your State" required="true">
                            <input type="number" class="user" name="pin" placeholder="Enter Your PIN" required="true">
                            <input type="password" name="password" class="lock" placeholder="Password" required="true">
                            <input type="submit" name="signup" value="Sign Up">

							<!-- signup button -->
							<div class="forgot-grid">
								<div class="forgot">
									<a href="index.php" style="margin-left : 180px">Log In</a>
								</div>
								<div class="clearfix"> </div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

	</div>
	<!-- Classie -->
	<script src="assets/js/classie.js"></script>
	<script>
		var menuLeft = document.getElementById('cbp-spmenu-s1'),
			showLeftPush = document.getElementById('showLeftPush'),
			body = document.body;

		showLeftPush.onclick = function () {
			classie.toggle(this, 'active');
			classie.toggle(body, 'cbp-spmenu-push-toright');
			classie.toggle(menuLeft, 'cbp-spmenu-open');
			disableOther('showLeftPush');
		};

		function disableOther(button) {
			if (button !== 'showLeftPush') {
				classie.toggle(showLeftPush, 'disabled');
			}
		}
	</script>
    <!-- Script for password and confirm password -->
    <script>
        var password = document.getElementById("password")
            , confirm_password = document.getElementById("confirmpasswordlabel");

        function validatePassword() {
            if (password.value != confirm_password.value) {
                confirm_password.setCustomValidity("Passwords Don't Match");
            } else {
                confirm_password.setCustomValidity('Password Matched');
            }
        }

        password.onchange = validatePassword;
        confirm_password.onkeyup = validatePassword;
    </script>
	<!--scrolling js-->
	<script src="assets/js/jquery.nicescroll.js"></script>
	<script src="assets/js/scripts.js"></script>
	<!--//scrolling js-->
	<!-- Bootstrap Core JavaScript -->
	<script src="assets/js/bootstrap.js"> </script>

</body>

</html>