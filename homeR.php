<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/css/styleR.css">
    <link rel="stylesheet" href="assets/css/footerR.css">
    <link rel="stylesheet" href="assets/css/newsletterR.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <script src="assets/js/script.js"></script>
    <link rel="icon" type="image/png" href="assets/image/dr logo 12-01.png">
    <title>DecoRiz</title>
</head>
<body class="home-page">
    <div class="banner">
    <?php include_once('assets/includes/headerR.php');?>
        <input type="checkbox" id="checkboxInput">
        <label for="checkboxInput" class="toggleSwitch"></label>
       
    </div>
    <div class="category">
        <h1>Category</h1>
        <div class="category-content">
            <table cellspacing="2px">
                <tr>
                    <td>
                        <a href="LampR.php">
                        <div class="item-container">
                            <img src="assets/image/Retro/lamp-9.webp" alt="Lamp" class="category-image">
                            <p>
                                <span class="category-heading">LAMP</span><br><br>
                                Illuminate your home with our carefully curated collection of lamps, designed to cast a warm and inviting glow throughout your living spaces. From sleek and contemporary table lamps to ornate floor lamps, our selection offers the perfect blend of form and function to enhance the ambiance of any room.
                            </p>
                        </div>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="PaintingR.php">
                        <div class="item-container">
                            <p>
                                <span class="category-heading">PAINTING</span><br><br>
                                Elevate your walls with our exquisite selection of wall paintings, ranging from abstract masterpieces to nature-inspired landscapes. Infuse your space with a touch of elegance and personality, transforming bare walls into captivating focal points that command attention.
                            </p>
                            <img src="assets/image/Retro/painting-9.jpg" alt="Painting" class="category-image">
                        </div>
                    </a>
                    </td>
                </tr>
                <tr>
                    <td> 
                        <a href="BookR.php">
                        <div class="item-container">
                            <img src="assets/image/Retro/bookshelf-1.jpg" alt="Bookshelf" class="category-image">
                            <p>
                                <span class="category-heading">BOOKSHELF</span><br><br>
                                Bring order and style to your home with our selection of versatile bookshelves. Whether you're looking to showcase your literary collection or display your favorite decorative accents, our bookshelves offer the perfect blend of functionality and aesthetic appeal.
                            </p>
                        </div>
                    </a>
                    </td>
                </tr>
                <tr>
                    <td> 
                        <a href="MirrorR.php">
                        <div class="item-container">
                            <p>
                                <span class="category-heading">MIRROR</span><br><br>
                                Mirrors are not just functional; they're a statement piece that can transform the entire look and feel of a room. Explore our diverse range of mirrors, from modern and minimalist to ornate and vintage-inspired, and find the perfect piece to open up your space and reflect your unique style.
                            </p>
                            <img src="assets/image/Retro/mirror-5.jpg" alt="Mirror" class="category-image">
                        </div>
                        </a>
                    </td>  
                </tr>
                <tr>
                    <td>
                        <a href="ShowR.php">
                        <div class="item-container">
                            <img src="assets/image/Retro/retro-showpiece-main1.jpg" alt="Showpiece" class="category-image">
                            <p>
                                <span class="category-heading">SHOWPIECE</span><br><br>
                                Elevate your home decor with our collection of captivating showpieces, ranging from decorative vases and sculptures to intricate figurines and ornaments. These eye-catching pieces are designed to be the centerpiece of any room, adding a touch of elegance and personality to your living spaces.
                            </p>
                        </div>
                    </a>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <section id="newsletter" class="section-p1 section-m1">
        <div class="newstext">
            <h4>Sign Up for NewsLetter</h4>
            <br/>
            <p>Get E-mail updates about our latest shops and <span>special offers.</span></p>
        </div>
        <div class="subscribe">
	<form method="post" action="subscribeR.php" class="form">
		<input type="email" class="form__email" placeholder="Enter your email address" name="email" />
		<button class="form__button" name="sub">Send</button>
</form>
</div>
        <!-- <div style="text-align: center" class="sender-form-field form" data-sender-form-id="lksgjsshbq0m7anshum"></div> -->
    </section>
    <?php include_once('assets/includes/footerR.php');?>