<?php
header('Content-Type: application/json');
 
require_once 'db.php';
 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);
 
    if ($name && $email && $message) {
        try {
            $stmt = $pdo->prepare("INSERT INTO contact_messages (name, email, message) VALUES (:name, :email, :message)");
            $stmt->execute(['name' => $name, 'email' => $email, 'message' => $message]);
            echo json_encode(['message' => 'Message sent successfully!']);
        } catch (PDOException $e) {
            echo json_encode(['message' => 'Error: ' . $e->getMessage()]);
        }
    } else {
        echo json_encode(['message' => 'Please fill all fields.']);
    }
} else {
    echo json_encode(['message' => 'Invalid request method.']);
}
?>
