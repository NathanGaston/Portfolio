<?php 
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

if(!empty($_POST)) {
 
    $mail = new PHPMailer(true);

try {
    //Server settings
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth = true;                                   //Enable SMTP authentication
    $mail->Username = 'nathan.gaston@sts-sio-caen.info';             //SMTP username
    $mail->Password = 'btsSI0caen*';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = <span class="search_hit">PHPMailer</span>::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom($_POST['email'], $_POST['email']);
    $mail->addAddress('nathan.gaston@sts-sio-caen.info'??'');     //Add a recipient

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $_POST['objet_msg']??'Subject';
    $mail->Body = $_POST['message']??'This is the HTML message body <b>in bold!</b>';

    $mail->send();
    echo '<script>alert("Message envoyé avec succès !")</script>';
} catch (Exception $e) {
    echo "<script>alert('Message could not be sent. Mailer Error: {$mail->ErrorInfo}')</script>";
};
};





