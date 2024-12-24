<?php 
include('assets/includes/dbconnection.php');

if(isset($_POST['user'])){
    $image = $_POST['image'];
    $ItemName = $_POST['ItemName'];
    $price = $_POST['price'];
    $discount = $_POST['discount'];
    $qty = $_POST['qty'];
}
    $sql = "INSERT INTO `data`(`image`, `name`, `des`, `dis`, `rate`) VALUES ('$image', '$ItemName', '$price', '$discount', '$qty')";
    if ($con->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }
?>