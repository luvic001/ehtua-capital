<?php 


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require( __dir__ . '/key.php' ); // Allows to access

require( __dir__ . '/PHPMailer-master/src/Exception.php' );
require( __dir__ . '/PHPMailer-master/src/PHPMailer.php' );
require( __dir__ . '/PHPMailer-master/src/SMTP.php' );

function send_mail($to, $name, $subject, $msg){

    $mail = new PHPMailer(true);
    try {

        // Server
        $mail->CharSet = 'UTF-8';
        $mail->SMTPDebug = SMTP_DEBUG;
        $mail->isSMTP();
        $mail->Host = SMTP_HOST;
        $mail->SMTPAuth = SMTP_AUTH;
        $mail->Username = SMTP_USER;
        $mail->Password = SMTP_PASS;
        $mail->SMTPSecure = SMTP_PROTOCOL;
        $mail->Port = SMTP_PORT;

        // Recipients
        $mail->setFrom(SMTP_FROM, SMTP_FROM_NAME);
        $mail->addAddress($to, $name);

        // Content
        $mail->isHTML(SMTP_IS_HTML);
        $mail->Subject = $subject;
        $mail->Body    = $msg;
        // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        $mail->send();
        return true;
    } catch (Exception $e) {
        return false;
    }
}