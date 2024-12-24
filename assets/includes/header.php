<?php

// start session
session_start();

// get username from session array
$uname = $_SESSION['uname'];

// variables for sql connection 
include('assets/includes/dbconnection.php');

// establish sql connection

// select first name, last name of user 
$sql = "SELECT Name FROM tbluser WHERE Email='$uname';";

// run and save query
$result = $con->query($sql);

if($result->num_rows == 1)
{
    // update fname and lname if any changes were made
    while($row = $result->fetch_assoc())
    {
        $_SESSION["fName"] = $row["Name"];
    }
}

// close sql connection
// $con->close();

// retrieve first name and last name of user from session array
$fname = $_SESSION['fName'];

?>
 
 <img src="assets/image/dr logo 12-01.png" alt="DecoRiz Logo" width="100px" id="logo">
        <nav id="main-nav">
            <a href="homeM.php">Home</a>
            <a href="cartM.php">Cart</a>
            <a href="aboutM.php">About</a>
            <a href="contactM.php">Contact</a>
            <span class="right" style="width:120px;">
												<div class="dropdown" style="width:100px;">
													<span class="droplink" style="font-size:14px;"><?php echo "$fname"; ?></span>
													<div class="dropdown-content">
														<a href="proset.php" style="font-size: medium;">Profile</a>
                                                        <a href="orderh.php" style="font-size: medium;">Order History</a>
														<a href="logout.php" style="font-size: medium;">Logout</a>
												</div>
											</div>
										</span>

            <!-- <a href="signin.php">Sign-In</a> -->

        </nav>