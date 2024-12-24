<?php
$con=mysqli_connect("localhost", "root", "", "Deco");
if(mysqli_connect_errno()){
    echo "Connection Fail".mysqli_connect_error();
}

// SQL query to fetch image, item name, description, discount, and rates based on the user id
$sql = "SELECT `Item_Name`, `Item_des`, `image`, `image2`, `image3`, `image4`, `image5`, `dis`, `rates` FROM `Items` WHERE id = 9;";
$stmt = $con->prepare($sql);

if($stmt === false) {
    die('Prepare failed: ' . htmlspecialchars($con->error));
}

$stmt->execute();

// Fetch result into an associative array
$result = $stmt->get_result();
$itemData = $result->fetch_assoc();  // Fetch data as an associative array

$stmt->close();
$con->close();
?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/css/styleM.css">
    <link rel="stylesheet" href="assets/css/description_M.css">
    <link rel="stylesheet" href="assets/css/footerM.css">
    <!-- <link rel="stylesheet" href="assets/css/contactM.css"> -->
    <link rel="stylesheet" href="assets/css/newsletterM.css">
    <link rel="icon" type="image/png" href="assets/image/dr logo 12-01.png">
    <title>DecoRiz</title>
</head>
<body class="category-page">
    <div class="no-banner">
    <?php include_once('assets/includes/header.php');?>
    </div>
    <main id="products">
    <form action="cartM.php" method="POST">
      <div class="container">
        <div class="producat_wrapper">
          <div class="producat_image">
            <div class="img_thumbnail">
              <input type="hidden" name="user" value="<?php echo $_SESSION['uname']; ?>">
              <?php if (!empty($itemData['image'])) { ?>
              <img src="<?php echo htmlspecialchars($itemData['image']); ?>" />
              <?php } ?>
              <input type="hidden" name="image" value="<?php echo htmlspecialchars($itemData['image']); ?>">
              <div class="img_small">
                <?php if (!empty($itemData['image2'])) { ?>
                <img src="<?php echo htmlspecialchars($itemData['image2']); ?>" alt="" class="active" />
                <?php } ?>
                <?php if (!empty($itemData['image3'])) { ?>
                <img src="<?php echo htmlspecialchars($itemData['image3']); ?>" alt="" />
                <?php } ?>
                <?php if (!empty($itemData['image4'])) { ?>
                <img src="<?php echo htmlspecialchars($itemData['image4']); ?>" alt="" />
                <?php } ?>
                <?php if (!empty($itemData['image5'])) { ?>
                <img src="<?php echo htmlspecialchars($itemData['image5']); ?>" alt="" />
                <?php } ?>
              </div>
            </div>
          </div>
          <div class="producat_content">

            <p class="company_txt">DecoRiz</p>
            <?php if (!empty($itemData['Item_Name'])) { ?>
            <h2><?php echo htmlspecialchars($itemData['Item_Name']); ?></h2> 
            <input type="hidden" name="ItemName" value="<?php echo htmlspecialchars($itemData['Item_Name']); ?>">
            <?php } ?>

            <?php if (!empty($itemData['Item_des'])) { ?>
            <p class="producat_des"> <?php echo htmlspecialchars($itemData['Item_des']); ?></p>
            <?php } ?>

            <div class="price">
              <div class="dicscount_price">
                <?php if (!empty($itemData['rates'])) { ?>
                <p class="normal_price" name="<?php echo htmlspecialchars($itemData['rates']); ?>"> <?php echo htmlspecialchars($itemData['rates']); ?></p>
                <input type="hidden" name="price" value="<?php echo htmlspecialchars($itemData['rates']); ?>">
                <?php } ?>

                <?php if (!empty($itemData['dis'])) { ?>
                <p><span class="discount"><?php echo htmlspecialchars($itemData['dis']); ?>%</span></p>
                <input type="hidden" name="discount" value="<?php echo htmlspecialchars($itemData['dis']); ?>">
                <?php } ?>
              </div>
              <p class="total_price">₹14,000</p>
            </div>
            <div class="qty">
              <div class="btns">
                  <button type="button" class="decrement">-</button>
                  <input type="number" class="qty_numbers" name="qty" value="">
                  <button type="button" class="increment">+</button>
              </div>
                <input type="submit" class="add_cart" value="Add to Cart" style="background: #ffeee2;" /></form>
              </div>
            </div>
          </div>
        </div>
      </form>
      </main>
              </br>   </br>   </br>
      <section id="newsletter" class="section-p1 section-m1" style="margin-top: 32px;">
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
    <script src="assets/js/script.js"></script>
    <?php include_once('assets/includes/footer.php');?>