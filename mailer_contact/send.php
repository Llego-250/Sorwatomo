<?php
include 'mail.php';

$email   = filter_input(INPUT_POST, 'email',   FILTER_SANITIZE_EMAIL) ?? '';
$subject = filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_SPECIAL_CHARS) ?? '';
$name    = filter_input(INPUT_POST, 'name',    FILTER_SANITIZE_SPECIAL_CHARS) ?? '';
$mobile  = filter_input(INPUT_POST, 'phone',   FILTER_SANITIZE_SPECIAL_CHARS) ?? '';
$content = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_SPECIAL_CHARS) ?? '';

$body = "New contact message\nName: $name\nSubject: $subject\nEmail: $email\nMobile: $mobile\n\n$content";

$sent = $mail->send('info@sorwatom.com', 'New contact message', $body);
header('location:/' . ($sent ? '' : '?msg=error'));
exit;
