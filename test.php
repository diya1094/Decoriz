<?php
$con=mysqli_connect("localhost", "root", "", "Deco");
if(mysqli_connect_errno()){
    echo "Connection Fail".mysqli_connect_error();
}

// SQL query to fetch image, item name, description, discount, and rates based on the user id
$sql = "SELECT `Item_Name`, `Item_des`, `image`, `image2`, `image3`, `image4`, `image5`, `dis`, `rates` FROM `Items` WHERE id = 1;";
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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Image, Description, and Discount</title>
</head>
<body>
    <?php if (!empty($itemData)) { ?>
        <!-- Display the image -->
        <?php if (!empty($itemData['image'])) { ?>
            <img src="<?php echo htmlspecialchars($itemData['image']); ?>" alt="Item Image" />
        <?php } ?>

        <!-- Display the item name -->
        <?php if (!empty($itemData['Item_Name'])) { ?>
            <h2><?php echo htmlspecialchars($itemData['Item_Name']); ?></h2>
        <?php } ?>

        <!-- Display the description -->
        <?php if (!empty($itemData['Item_des'])) { ?>
            <p class="producat_des"> <?php echo htmlspecialchars($itemData['Item_des']); ?></p>
        <?php } ?>

        <!-- Display the discount -->
        <?php if (!empty($itemData['dis'])) { ?>
            <p class="discount"><?php echo htmlspecialchars($itemData['dis']); ?>%</p>
        <?php } ?>

        <!-- Display the rates -->
        <?php if (!empty($itemData['rates'])) { ?>
            <p class="normal_price"> <?php echo htmlspecialchars($itemData['rates']); ?></p>
        <?php } ?>
    <?php } else { ?>
        <p>No data found for the given user ID.</p>
    <?php } ?>
</body>
</html>
