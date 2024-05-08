<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

if(isset($_POST["send"])){
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $body = $_POST['body'];
    $attachment = $_FILES['attachment'];
    print_r($attachment);

    if(!empty($attachment))
{
    $attachment_desc = reArrayFiles($attachment);
    print_r($attachment_desc);
    
    // foreach($attachment_desc as $val)
    // {
    //     $newname = date('YmdHis',time()).mt_rand().'.jpg';
    //     move_uploaded_file($val['tmp_name'],'./uploads/'.$newname);
    // }
}
    // for($i = 0; $i > count($attachment); $i++){
    //     //
    //     echo "test";
    // }
    // if($attachment != ""){
    //     print_r($attachment);
    //     // foreach($attachment as $attach){
    //     //     echo 1;
    //     // }
    //     // for($i = 0; $i>count($attachment['tmp_name']); $i++){
    //     //     // echo $i."<br>";
    //     //     // die('success');
    //     //     echo "true";
    //     // }
    // }else {
    //     echo("not set");
    // }
}

// //Create an instance; passing `true` enables exceptions
// $mail = new PHPMailer(true);

// try {
//     //Server settings
//     $mail->isSMTP();                                            //Send using SMTP
//     $mail->Host       = 'kinyanjuitechnical.ac.ke';                     //Set the SMTP server to send through
//     $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
//     $mail->Username   = 'jauma@kinyanjuitechnical.ac.ke';                     //SMTP username
//     $mail->Password   = 'Blackeagle33#';                               //SMTP password
//     $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
//     $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

//     //Recipients
//     $mail->setFrom('info@kinyanjuitechnical.ac.ke', 'PC. Kinyanjui Technical Training Institute');
//     $mail->addAddress($email, 'Okoth Jeconia Auma');     //Add a recipient
//     // $mail->addAddress('ellen@example.com');               //Name is optional
//     $mail->addReplyTo('info@kinyanjuitechnical.ac.ke', 'info');
//     // $mail->addCC('cc@example.com');
//     // $mail->addBCC('bcc@example.com');

//     //Attachments
//     // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
//     for($i = 0; $i=count($attachment['tmp_name']); $i++){
//         echo $i."<br>";
//         die('success');
//     }
//     // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

//     //Content
//     $mail->isHTML(true);                                  //Set email format to HTML
//     $mail->Subject = $subject;
//     $mail->Body    = $body;
//     $mail->AltBody = $body;

//     $mail->send();
//     echo 'Message has been sent';
// } catch (Exception $e) {
//     echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
// }

// header('location: emails.php');