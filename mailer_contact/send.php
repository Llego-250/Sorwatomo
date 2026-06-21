<?php
header('Content-Type: application/json');

require_once dirname(__DIR__, 2) . '/smtp_config.php';
include 'mail.php';

$inquiry = filter_input(INPUT_POST, 'inquiry_type', FILTER_SANITIZE_SPECIAL_CHARS) ?? 'General';
$name    = filter_input(INPUT_POST, 'name',         FILTER_SANITIZE_SPECIAL_CHARS) ?? '';
$company = filter_input(INPUT_POST, 'company',      FILTER_SANITIZE_SPECIAL_CHARS) ?? '';
$email   = filter_input(INPUT_POST, 'email',        FILTER_SANITIZE_EMAIL)         ?? '';
$mobile  = filter_input(INPUT_POST, 'mobile',       FILTER_SANITIZE_SPECIAL_CHARS) ?? '';
$message = filter_input(INPUT_POST, 'message',      FILTER_SANITIZE_SPECIAL_CHARS) ?? '';

if (!$name || !$email || !$message) {
    echo json_encode(['success' => false, 'message' => 'Required fields are missing.']);
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo json_encode(['success' => false, 'message' => 'Invalid email address.']);
    exit;
}

$subject = "[$inquiry] New inquiry from $name";
$body  = "Inquiry Type: $inquiry\n";
$body .= "Name: $name\n";
$body .= $company ? "Company: $company\n" : '';
$body .= "Email: $email\n";
$body .= $mobile ? "Mobile: $mobile\n" : '';
$body .= "\nMessage:\n$message";

$sent = $mail->send('info@sorwatom.com', $subject, $body);

echo json_encode([
    'success' => $sent,
    'message' => $sent
        ? 'Your message was sent successfully.'
        : 'Failed to send. Please try calling us directly.',
]);
