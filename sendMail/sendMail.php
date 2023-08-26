<?php

require '../constant.php';

// require context
require_once('../Context/DBContext.php');

// require models
require_once('../Models/Account_Models.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '/PHPMailer/src/Exception.php';
require '/PHPMailer/src/PHPMailer.php';
require '/PHPMailer/src/SMTP.php';

if (isset($_POST['email'])) {

    $account = new Account($email, null, null, null, null);
    $name = $account->getNameByEmail($_POST['email']);
    $password = $account->getPasswordByEmail($_POST['email']);

    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'hieunt141.work@gmail.com';                     //SMTP username
        $mail->Password   = 'vjixaozdkjrigcqc';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('hieunt141.work@gmail.com', 'HeuUwU');
        $mail->addAddress($_POST['email'], $name);     //Add a recipient

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Forget password';
        $mail->Body    = 'Your password is: '. $password;
        $mail->AltBody = '';

        $mail->send();
        // echo 'Message has been sent';
        $temporaryMess = 'Send email successfully. Please check your email';
        // Xử lý khi tài khoản không hợp lệ
        header("Location: http://localhost/Book_Review/Book_Review_Code_PHP/signin?mess=" . urlencode($temporaryMess));
        exit();
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
