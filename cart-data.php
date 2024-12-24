<?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        include('assets/includes/dbconnection.php');

        $image = $_POST['image'];
        $ItemName = $_POST['ItemName'];
        $price = $_POST['price'];
        $discount = $_POST['discount'];
        $qty = $_POST['qty'];

        $sql = "INSERT INTO `data`(`image`, `name`, `dis`, `qty`, `rate`) VALUES ('$image', '$ItemName','$discount','$qty','$price')";
        
        if ($con->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $con->error;
        }
        $con->close();
    }
?>
