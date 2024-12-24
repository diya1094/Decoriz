<?php
include('assets/includes/dbconnection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/css/styleM.css">
    <link rel="stylesheet" href="assets/css/contactM.css">
    <link rel="stylesheet" href="assets/css/footerM.css">
    <link rel="stylesheet" href="assets/css/newsletterM.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="icon" type="image/png" href="assets/image/dr logo 12-01.png">
    <title>DecoRiz</title>
</head>
<body class="category-page">
    <div class="no-banner">
    <?php include_once('assets/includes/header.php');?>
    </div>
    <?php
// Query to fetch data from 'data' table
$sql = "SELECT image, name, dis, qty, rate FROM data";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    // HTML table structure
    echo "<table border='1' cellpadding='10'>";
    echo "<tr><th>Image</th><th>Name</th><th>Description</th><th>Quantity</th><th>Rate</th></tr>";

    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td><img src='" . $row["image"] . "' alt='Image' width='50'></td>";  // Display image
        echo "<td>" . $row["name"] . "</td>";
        echo "<td>" . $row["dis"] . "</td>";
        echo "<td>" . $row["qty"] . "</td>";
        echo "<td>" . $row["rate"] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "0 results";
}

// Close connection
$con->close();
?>

    <section id="newsletter" class="section-p1 section-m1">
        <div class="newstext">
            <h4>Sign Up for NewsLetter</h4>
            <br/>
            <p>Get E-mail updates about our latest shops and <span>special offers.</span></p>
        </div>
        <div class="subscribe">
	<form method="post" action="subscribe.php" class="form">
		<input type="text" class="form__email" placeholder="Enter your email address" name="email" />
		<button class="form__button" name="sub">Send</button>
</form>
</div>
        <!-- <div style="text-align: center" class="sender-form-field form" data-sender-form-id="lksgjsshbq0m7anshum"></div> -->
    </section>
    <?php include_once('assets/includes/footer.php');?>