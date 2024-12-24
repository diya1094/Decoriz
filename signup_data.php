<?php

$con=mysqli_connect("localhost", "root", "", "Deco");
if(mysqli_connect_errno()){
echo "Connection Fail".mysqli_connect_error();
}


// Signup database insertion code
$name = $_POST['name'];
$mobilenumber = $_POST['mobilenumber'];
$email = $_POST['email'];
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


// Check if the email already exists

$query = mysqli_query($con, "SELECT * FROM `tbluser` WHERE Email = '$email'");
$ret = mysqli_fetch_array($query);

if(!$ret)
{
    // Insert the data into the database
    $insert_tblcustomer = "INSERT INTO `tbluser`(`Name`, `MobileNumber`, `Email`, `Password`, `Gender`, `Address`, `State`, `PIN`) VALUES ('$name','$mobilenumber','$email','$password','$gender','$address','$state','$pin')";
    $query_tblcustomer = mysqli_query($con, $insert_tblcustomer);

    if ($query_tblcustomer) {
        echo "<script>alert('You have successfully registered.');</script>";
        echo "<script>window.location.href='index.php'</script>";
    } else {
        echo "<script>alert('Something Went Wrong. Please try again.');</script>";
    }
} else {
    echo "<script>alert('Email already exists.');</script>";
}
?>
