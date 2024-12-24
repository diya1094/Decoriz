<?php 
$price = 0;

if(isset($_POST['user'])){
    $user = $_POST['user'];
    $image = $_POST['image'];
    $ItemName = $_POST['ItemName'];
    $price = $_POST['price'];
    $discount = $_POST['discount'];
    $qty = $_POST['qty'];
}
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
    <?php include_once('assets/includes/headerR.php');?>
    </div>
    <table border="1" cellpadding="10" cellspacing="0" style="margin-left:500px;">
        <thead>
            <tr>
                <th>Username</th>
                <th>Image</th>
                <th>Item Name</th>
                <th>Price</th>
                <th>Discount</th>
                <th>Quantity</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $user; ?></td>
                <td><img src="<?php echo $image; ?>" alt="Image" width="100" height="100"></td>
                <td><?php echo $ItemName; ?></td>
                <td><?php echo $price; ?></td>
                <td><?php echo $discount; ?></td>
                <td><?php echo $qty; ?></td>
            </tr>
        </tbody>
    </table>


    <input type="hidden" id="price" name="price" value="<?php echo "$price"; ?>">

    <button style="width:100px; margin-left:870px;" class="button" class="about-view" onclick="handleCheckout('<?php echo addslashes($price); ?>')">Checkout</button>

    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
	
    <section id="newsletter" class="section-p1 section-m1">
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
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Call both functions when the button is clicked
        function handleCheckout(price) {
            getIntegerPaise(price); // Handles Razorpay
            datainsert();           // Handles inserting data via AJAX
        }

        // Existing JavaScript function to get price in paise and open Razorpay
        function getIntegerPaise(price) {
            var rateInRupees = document.getElementById('price').value;
            var rateInPaise = parseInt(rateInRupees) * 100;
            openRazorpay(rateInPaise);
        }

        function openRazorpay(rate) {
            var options = {
                "key": "rzp_test_I3yDb9cFK47THw",
                "amount": rate, // amount in paise
                "currency": "INR",
                "name": "Product Booking",
                "description": "Payment for product booking",
                "image": "https://example.com/your_logo.png",
                "handler": function(response) {
                    alert(response.razorpay_payment_id); // Handle payment response
                },
            };
            var rzp = new Razorpay(options);
            rzp.open();
        }

        // New function to send an AJAX request to call PHP's datainsert
        function datainsert() {
            var formData = new FormData();

            // Correctly pass PHP variables into JavaScript
            formData.append('image', '<?php echo addslashes($image); ?>');
            formData.append('ItemName', '<?php echo addslashes($ItemName); ?>');
            formData.append('price', '<?php echo addslashes($price); ?>');
            formData.append('discount', '<?php echo addslashes($discount); ?>');
            formData.append('qty', '<?php echo addslashes($qty); ?>');

            fetch('cart-data.php', {
                method: 'POST',
                body: formData,
            })
            .then(response => response.text())
            .then(result => {
                console.log('Data Inserted:', result);
            })
            .catch(error => {
                console.error('Error:', error);
            });
        }

        // Expose the handleCheckout function globally so it's accessible
        window.handleCheckout = handleCheckout;
    });
</script>



    <?php include('assets/includes/footerR.php'); ?>