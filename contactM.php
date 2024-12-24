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
    <title>Contact Us</title>
</head>
<body class="category-page">
   <div class="no-banner">
   <?php include_once('assets/includes/header.php');?>
    </div>
    <div class="new_home_web">
        <div class="responsive-container-block big-container">
          <img class="imgBG" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/aw65.png">
          <div class="responsive-container-block textContainer">
            <div class="topHead">
              <p class="text-blk heading">
                Get in
                <span class="orangeText">
                  touch
                </span>
              </p>
              <div class="orangeLine" id="w-c-s-bgc_p-2-dm-id">
              </div>
            </div>
            <p class="text-blk subHeading">
             Get in touch with us if you have a problem.
            </p>
          </div>
          <div class="responsive-container-block container">
            <div class="responsive-cell-block wk-tab-12 wk-mobile-12 wk-desk-7 wk-ipadp-10 line" id="i69b">
              <form class="form-box" method="post" action="conn_data.php">
                <div class="container-block form-wrapper">
                  <div class="responsive-container-block">
                    <div class="left4">
                      <div class="responsive-cell-block wk-ipadp-6 wk-tab-12 wk-mobile-12 wk-desk-6" id="i10mt-2">
                        <input class="input" id="ijowk-2" name="FirstName" placeholder="First Name">
                      </div>
                      <div class="responsive-cell-block wk-desk-6 wk-ipadp-6 wk-tab-12 wk-mobile-12">
                        <input class="input" id="indfi-2" name="LastName" placeholder="Last Name">
                      </div>
                      <div class="responsive-cell-block wk-desk-6 wk-ipadp-6 wk-tab-12 wk-mobile-12">
                        <input class="input" id="ipmgh-2" name="Email" placeholder="Email Address">
                      </div>
                      <div class="responsive-cell-block wk-desk-6 wk-ipadp-6 wk-tab-12 wk-mobile-12 lastPhone">
                        <input class="input" id="imgis-2" name="PhoneNumber" placeholder="Phone Number">
                      </div>
                    </div>
                    <div class="responsive-cell-block wk-tab-12 wk-mobile-12 wk-desk-12 wk-ipadp-12" id="i634i-2">
                      <textarea class="textinput" id="i5vyy-2" placeholder="Message" name="message"></textarea>
                    </div>
                  </div>
                  <input type="submit" class="send" href="#" id="w-c-s-bgc_p-1-dm-id" placeholder="Submit" style="margin-left: 34px;">
                  </input>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
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