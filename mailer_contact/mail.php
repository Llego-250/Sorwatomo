<?php
require_once dirname(__DIR__, 2) . '/smtp_config.php';

class mail {
    function send($email, $subject, $body, $header = '') {
        require_once 'mailer/PHPMailerAutoload.php';

        $mail = new PHPMailer;
        $mail->isSMTP();
        $mail->SMTPSecure = 'tls';
        $mail->SMTPAuth   = true;
        $mail->Host       = SMTP_HOST;
        $mail->Port       = SMTP_PORT;
        $mail->Username   = SMTP_EMAIL;
        $mail->Password   = SMTP_PASSWORD;
        $mail->setFrom(SMTP_EMAIL);
        $mail->addAddress($email);
        $mail->Subject = $subject;
        $mail->Body    = $body;

        if (!$mail->send()) {
            return mail($email, $subject, $body, 'From: ' . SMTP_EMAIL);
        }
        return true;
    }
}

$mail = new mail();
