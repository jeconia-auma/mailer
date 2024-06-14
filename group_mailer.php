<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//require dependencies
require_once('includes/db_conn.php');
$sql = "select * from subscribers";
$result = mysqli_query($conn, $sql);

//Load Composer's autoloader
require 'vendor/autoload.php';

if(isset($_POST["send"])){
    // $email = $_POST['email'];
    $subject = $_POST['subject'];
    $body = $_POST['body'];
    // $attachment = array($_FILES['attachment']['name']);

    if(isset($_FILES['attachment']['name'])){
        $attachment = $_FILES['attachment']['name'];
        print_r($attachment);
    }else{
        echo "no attachment set";
    }
}

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'kinyanjuitechnical.ac.ke';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'jauma@kinyanjuitechnical.ac.ke';                     //SMTP username
    $mail->Password   = 'Blackeagle33#';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('info@kinyanjuitechnical.ac.ke', 'PC. Kinyanjui Technical Training Institute');
    while($email = mysqli_fetch_assoc($result)){
        echo $email['email'];
        $mail->addAddress($email['email'], 'Dear Student');    //Add a recipient
    }
    // $mail->addAddress('ellen@example.com');               //Name is optional
    $mail->addReplyTo('info@kinyanjuitechnical.ac.ke', 'info');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    // Attachments
    if(isset($attachment)){
        foreach ($attachment as $k=>$v) {
            // $mail->addAttachment($attach);         //Add attachments
            echo "attachment available";
            $mail->addAttachment($_FILES['attachment']['tmp_name'][$k], $_FILES['attachment']['name'][$k]);    //Optional name
        }
    }
    

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = $body;
    $mail->AltBody = $body;

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

// header('location: emails.php');