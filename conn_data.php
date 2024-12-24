<?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        include('assets/includes/dbconnection.php');

        $f = $_POST['FirstName'];
        $l = $_POST['LastName'];
        $e = $_POST['Email'];
        $p = $_POST['PhoneNumber'];
        $m = $_POST['message'];

        $sql = "INSERT INTO `conn`(`fname`, `lname`, `email`, `phone`, `mess`) VALUES ('$f', '$l','$e','$p','$m')";
        
        if ($con->query($sql) === TRUE) {
            header('Location: contactM.php?type=success');
        } else {
            echo "Error: " . $sql . "<br>" . $con->error;
        }
        $con->close();
    }
    
?>
