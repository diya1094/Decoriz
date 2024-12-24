<?php

	// start session
	// session_start();

	include "assets/includes/dbconnection.php";

	// retrieve username, first and last name of user from session array

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<link rel="stylesheet" href="assets/css/styleR.css">
    <link rel="stylesheet" href="assets/css/contactR.css">
    <link rel="stylesheet" href="assets/css/footerR.css">
    <link rel="stylesheet" href="assets/css/newsletterR.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="icon" type="image/png" href="assets/image/dr logo 12-01.png">
    <title>DecoRiz</title>
</head>
<body class="category-page">
    <div class="no-banner">
    <?php include_once('assets/includes/headerR.php');
	$uname = $_SESSION['uname'];?>
    </div>
    <?php
			// select all data of current user
			$sql = "SELECT * FROM tbluser WHERE Email = '$uname'";

			// run and save query
			$result = $con->query($sql);

			// If exactly 1 record is returned, then update the session array accordingly
			if($result->num_rows == 1)
			{
				while($row = $result->fetch_assoc())
				{
					$_SESSION["Name"] = $row["Name"];
					$_SESSION["MobileNumber"] = $row["MobileNumber"];
					$_SESSION["Password"] = $row["Password"];
					$_SESSION["Gender"] = $row["Gender"];
					$_SESSION["Address"] = $row["Address"];
                    $_SESSION["State"] = $row["State"];
                    $_SESSION["PIN"] = $row["PIN"];
				}
			}

			// print all the data in a table with option to update
			echo "<table id=\"tbl\" align=\"center\"><tr>";
			echo "<th colspan=\"2\">Profile</th></tr><tr>";
			echo "<td><b>Email:</b> </td><td>$uname</td></tr><tr>";
			echo "<td><b>Name:</b> </td><td>" . $_SESSION["Name"] . "</td></tr><tr>";
			echo "<td><b>Mobile Number:</b> </td><td>" . $_SESSION["MobileNumber"] . "</td></tr><tr>";
			echo "<td><b>Password:</b> </td><td>" . $_SESSION["Password"] . "</td></tr><tr>";
			echo "<td><b>Gender:</b> </td><td>" . $_SESSION["Gender"] . "</td></tr><tr>";
			echo "<td><b>Address:</b> </td><td>" . $_SESSION["Address"] . "</td></tr><tr>";
			echo "<td><b>State:</b> </td><td>" . $_SESSION["State"] . "</td></tr><tr>";
			echo "<td><b>Pin:</b> </td><td>" . $_SESSION["PIN"] . "</td></tr><tr>";
			echo "<td colspan=\"2\" align=\"center\"><br /><br /><span class=\"link\"><a href=\"edit2.php\" class=\"link2\">Edit Profile</a></span></td></tr></table>";
		?>

    <section id="newsletter" class="section-p1 section-m1" style="margin-top: 32px;">
        <div class="newstext">
            <h4>Sign Up for NewsLetter</h4>
            <br/>
            <p>Get E-mail updates about our latest shops and <span>special offers.</span></p>
        </div>
        <div class="subscribe">
	<form method="post" action="subscribeR.php" class="form">
		<input type="text" class="form__email" placeholder="Enter your email address" name="email" />
		<button class="form__button" name="sub">Send</button>
</form>
</div>
        <!-- <div style="text-align: center" class="sender-form-field form" data-sender-form-id="lksgjsshbq0m7anshum"></div> -->
    </section>
    <?php include_once('assets/includes/footerR.php');?>