<?php
// include './PHPMailer/src/Exception.php';
// include './PHPMailer/src/PHPMailer.php';
// include './PHPMailer/src/SMTP.php';
include '../Decoriz/PHPMailer/src/Exception.php';
include '../Decoriz/PHPMailer/src/PHPMailer.php';
include '../Decoriz/PHPMailer/src/SMTP.php';

$con=mysqli_connect("localhost", "root", "", "Deco");
if(mysqli_connect_errno()){
echo "Connection Fail".mysqli_connect_error();
}

include('assets/includes/dbconnection.php');

session_start();
error_reporting(0);

$email = $_POST['email'];
$mail = new PHPMailer\PHPMailer\PHPMailer(true);

try {
    //Server settings
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com'; // SMTP server
    $mail->SMTPAuth = true;
    $mail->Username = 'decoriz409@gmail.com'; // SMTP username
    $mail->Password = 'orburhvgbbwueeps'; // SMTP password
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    //Recipients
    $mail->setFrom('decoriz409@gmail.com', 'Team Decoriz');
    $mail->addAddress($email); // Add a recipient

    //Content
    $query = "INSERT INTO `tblsubscriber`(`Email`) VALUES ('$email')";
    $mail->isHTML(true); // Set email format to HTML    
    $mail->Subject = ' Exciting News and Updates from Decoriz!';
    $mail->Body = "Dear Subscriber, Great news! Your subscription to Decoriz is now active, unlocking exclusive updates tailored just for you!. Here's what's in store: Stay tuned for valuable insights to make your home elegantly decorated! Warm regards, Decoriz Team.";
    $mail->AltBody = "Dear Subscriber, Great news! Your subscription to Decoriz is now active, unlocking exclusive updates tailored just for you!. Here's what's in store: Stay tuned for valuable insights to make your home elegantly decorated! Warm regards, Decoriz Team.";
    $mail->send();
    // echo $query;
    if(mysqli_query($con, $query)){
        echo "New record created successfully";
        header('Location: homeM.php?type=success');
    }else{
        echo "Error: " . $query . "<br>" . mysqli_error($con);
    }   
} catch (Exception $e) {
    // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    header('Location: homeM.php?type=fail');
    echo $e;
}  
?>