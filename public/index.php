<?php
// TURATSINZE DOMINIQUE| REGNO:25/30642 | ROLE:BACKEND PHP MVC ENGINEER

require_once __DIR__ . '/../app/controllers/RecordController.php';

$controller = new RecordController();
$message    = '';
$success    = false;

// Process form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
    $result  = $controller->store(
        $_POST['client']   ?? '',
        $_POST['service']  ?? '',
        $_POST['quantity'] ?? 0,
        $_POST['price']    ?? 0
    );
    $message = $result['message'];
    $success = $result['success'];
}

// Fetch all records to display in table
$records = $controller->index();

// Load view
require_once __DIR__ . '/../app/views/create.php';
?>
