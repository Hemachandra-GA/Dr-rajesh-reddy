<?php
/**
 * Click-to-Call & WhatsApp Interaction Logger
 * Dr. Rajesh Reddy Neurosurgery
 * Records every click on phone numbers, WhatsApp, and call buttons into call_clicks.log
 */

header('Content-Type: application/json; charset=UTF-8');

// Allow POST requests (fetch or navigator.sendBeacon)
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Method not allowed.']);
    exit;
}

$event = trim(filter_input(INPUT_POST, 'event', FILTER_SANITIZE_SPECIAL_CHARS) ?? 'phone_call_click');
$phone = trim(filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_SPECIAL_CHARS) ?? '8520052229');
$page = trim(filter_input(INPUT_POST, 'page', FILTER_SANITIZE_SPECIAL_CHARS) ?? ($_SERVER['HTTP_REFERER'] ?? '/'));
$label = trim(filter_input(INPUT_POST, 'label', FILTER_SANITIZE_SPECIAL_CHARS) ?? '');

$ip = $_SERVER['REMOTE_ADDR'] ?? 'Unknown';
$userAgent = $_SERVER['HTTP_USER_AGENT'] ?? 'Unknown';
$timestamp = date('Y-m-d H:i:s');

// Format clean log line
$logEntry = sprintf(
    "[%s] Event: %s | Target: %s | Page: %s | Label: %s | IP: %s | UA: %s" . PHP_EOL,
    $timestamp,
    strtoupper($event),
    $phone,
    $page,
    $label ?: 'N/A',
    $ip,
    $userAgent
);

$logFile = __DIR__ . '/call_clicks.log';
@file_put_contents($logFile, $logEntry, FILE_APPEND);

echo json_encode([
    'success' => true,
    'message' => 'Interaction recorded.',
    'timestamp' => $timestamp
]);
