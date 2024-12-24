<?php
include('assets/includes/header.php');
	// variables for sql connection 
	include('assets/includes/dbconnection.php');
	if(isset($uname)){
			
$name = $_POST['name'];
$mobilenumber = $_POST['mobilenumber'];
$password = $_POST['password'];
$gender = $_POST['gender'];
if ($gender == "male") { 
    $gender = 'male';
} else if ($gender == "female") { 
    $gender = 'female';
}  else {
    $gender = 'other';
}
$address = $_POST['address'];
$state = $_POST['state'];
$pin = $_POST['pin'];

	// update user details
	$sql = "UPDATE `tbluser` SET `Name`='$name',`MobileNumber`='$mobilenubmer',`Password`='$password',`Gender`='$gender',`Address`='$address',`State`='$state',`PIN`='$pin' 
            WHERE Email = '$uname';";

	// if update is successful then return true
	if($con->query($sql) === TRUE)
	{
		echo "true";
	}
	// otherwise return false
	else
		echo "false";
	
	// close sql connection
	$con->close();

	}


?>