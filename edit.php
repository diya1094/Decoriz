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
    <?php  include_once "assets/includes/header.php"; ?>
    </div>
    <?php   
            include "assets/includes/dbconnection.php";

            // retrieve username, first and last name of user from session array
            $uname = $_SESSION['uname'];
            $name = $_SESSION['Name'];
            $mob = $_SESSION['MobileNumber'];
            $pass = $_SESSION['Password'];
            $gen = $_SESSION['Gender'];
            $add = $_SESSION['Address'];
            $sta = $_SESSION['State'];
            $pin = $_SESSION['PIN'];

        ?>
    <table id="tbl">
        <th>Update Your Data</th>
            <form role="form" method="post" action="update.php"><tr>
                            <!-- Name, MobileNumber, Email, Gender, Address, State, PIN, Password and Confirm Password inputs for signup -->
                            <td><label>User Name : </label><input type="text" class="user" name="name" placeholder="<?php echo "$name" ?>" required="true"  /></td></tr><tr>
                            <td><label>Mobile Number : </label><input type="number" class="user" name="mobilenumber" placeholder="<?php echo "$mob" ?>"  required="true" /></td></tr><tr>
                            <!-- Gender -->
                           <div class="row form-group" style="margin-top:1px;">
                               <div class="col-md-6">
                                   <td><label for="genderMale" class="control-label" >Gender : </label>&nbsp;&nbsp;&nbsp;&nbsp;</td></tr><tr>
                                    <td><input type="radio" name="gender" value="male" checked="" id="genderMale" required style="margin-left:100px;"/><label>Male</label> &nbsp;&nbsp;&nbsp;&nbsp;</td></tr><tr>
                                   <td><input type="radio" name="gender" value="female" id="genderFemale" style="margin-left:100px;"/><label>Female</label> &nbsp;&nbsp;&nbsp;&nbsp;</td></tr><tr>
                                    <td><input type="radio" name="gender" value="other" id="genderOther" style="margin-left:100px;"/> <label>Other</label> &nbsp;&nbsp;</td></tr><tr>
                                    <br/><br/>
                                </div>
                            </div>
                            <td><label>Address : </label><input type="text" class="user" name="address" placeholder="<?php echo "$add" ?>"  required="true" /></td></tr><tr>
                            <td><label>State : </label><input type="text" class="user" name="state" placeholder="<?php echo "$sta" ?>"  required="true" /></td></tr><tr>
                            <td><label>Pin : </label><input type="number" class="user" name="pin" placeholder="<?php echo "$pin" ?>"  required="true" /></td></tr><tr>
                            <td><label>Password : </label><input type="text" name="password" class="lock" placeholder="<?php echo "$pass" ?>"  required="true" /></td></tr><tr>
                            <td ><input type="submit" name="update" value="Update" class="link"  style="margin-left:90px;" /></td></tr>
                    
            </form>
</table>
    <section id="newsletter" class="section-p1 section-m1" style="margin-top:32px;">
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