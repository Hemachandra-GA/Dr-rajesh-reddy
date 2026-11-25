<?php
/**
 * Contact & Consultation Mail Dispatcher
 * Dr. Rajesh Reddy Neurosurgery
 * Receives POST data and dispatches email to clinic and agency mailboxes.
 */

header('Content-Type: application/json; charset=UTF-8');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Method not allowed.']);
    exit;
}

// Honeypot bot protection
if (!empty($_POST['website']) || !empty($_POST['_honeypot'])) {
    echo json_encode(['success' => true, 'message' => 'Message sent successfully.']);
    exit;
}

$recipients = [
    'info@drrajeshreddy.com',
    'enquiries@gadigitalsolutions.com'
];
$to = implode(', ', $recipients);

$formType = trim($_POST['form_type'] ?? 'contact_page');

if ($formType === 'consultation_modal') {
    $name = trim(filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS) ?? '');
    $phone = trim(filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_SPECIAL_CHARS) ?? '');
    $specialty = trim(filter_input(INPUT_POST, 'specialty', FILTER_SANITIZE_SPECIAL_CHARS) ?? 'General');
    $preferredDate = trim(filter_input(INPUT_POST, 'preferred_date', FILTER_SANITIZE_SPECIAL_CHARS) ?? '');
    $callbackTime = trim(filter_input(INPUT_POST, 'callback_time', FILTER_SANITIZE_SPECIAL_CHARS) ?? 'Anytime');
    $email = trim(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL) ?? '');

    if (empty($name) || empty($phone)) {
        http_response_code(400);
        echo json_encode(['success' => false, 'message' => 'Please provide both your name and phone number.']);
        exit;
    }

    $subject = "New Consultation Booking Request: {$name} - Dr. Rajesh Reddy";

    $body = "New consultation appointment request received from the website popup modal:\n\n";
    $body .= "--------------------------------------------------------\n";
    $body .= "Patient Name:        {$name}\n";
    $body .= "Phone Number:        {$phone}\n";
    if (!empty($email)) {
        $body .= "Email:               {$email}\n";
    }
    $body .= "Treatment Specialty: {$specialty}\n";
    $body .= "Preferred Date:      {$preferredDate}\n";
    $body .= "Callback Window:     {$callbackTime}\n";
    $body .= "Submission Time:     " . date('Y-m-d H:i:s') . "\n";
    $body .= "IP Address:          " . ($_SERVER['REMOTE_ADDR'] ?? 'Unknown') . "\n";
    $body .= "--------------------------------------------------------\n";

    $replyTo = !empty($email) ? $email : 'info@drrajeshreddy.com';
} else {
    $name = trim(filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS) ?? '');
    $phone = trim(filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_SPECIAL_CHARS) ?? '');
    $email = trim(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL) ?? '');
    $inquiryType = trim(filter_input(INPUT_POST, 'inquiry_type', FILTER_SANITIZE_SPECIAL_CHARS) ?? 'General Inquiry');
    $message = trim(filter_input(INPUT_POST, 'message', FILTER_SANITIZE_SPECIAL_CHARS) ?? '');

    if (empty($name) || empty($phone) || empty($email) || empty($message)) {
        http_response_code(400);
        echo json_encode(['success' => false, 'message' => 'Please fill in all required fields.']);
        exit;
    }

    $subject = "New Website Contact Inquiry: {$name} ({$inquiryType}) - Dr. Rajesh Reddy";

    $body = "A new message was submitted via the Contact page form:\n\n";
    $body .= "--------------------------------------------------------\n";
    $body .= "Full Name:       {$name}\n";
    $body .= "Phone Number:    {$phone}\n";
    $body .= "Email Address:   {$email}\n";
    $body .= "Inquiry Type:    {$inquiryType}\n";
    $body .= "Submission Time: " . date('Y-m-d H:i:s') . "\n";
    $body .= "IP Address:      " . ($_SERVER['REMOTE_ADDR'] ?? 'Unknown') . "\n";
    $body .= "--------------------------------------------------------\n\n";
    $body .= "Message:\n{$message}\n";

    $replyTo = $email;
}

$headers = [];
$headers[] = 'From: Dr. Rajesh Reddy Website <no-reply@drrajeshreddy.com>';
$headers[] = 'Reply-To: ' . $replyTo;
$headers[] = 'X-Mailer: PHP/' . phpversion();
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-Type: text/plain; charset=UTF-8';

// Attempt sending via PHP mail()
$mailSent = @mail($to, $subject, $body, implode("\r\n", $headers));

// Log the submission locally for safety / tracking
$logEntry = date('[Y-m-d H:i:s]') . " Form: {$formType} | Name: {$name} | Phone: {$phone} | MailSent: " . ($mailSent ? 'YES' : 'NO') . PHP_EOL;
@file_put_contents(__DIR__ . '/contact_submissions.log', $logEntry, FILE_APPEND);

echo json_encode([
    'success' => true,
    'message' => 'Thank you! Your message has been sent successfully. Our team will contact you shortly.'
]);

