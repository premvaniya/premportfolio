<?php
session_start();

// Database credentials
$host = 'localhost';
$user = 'root';
$password = 'premprem2525';
$database = 'portfolio_db';

// Create database connection
$conn = new mysqli($host, $user, $password);

// Check connection
if ($conn->connect_error) {
    $_SESSION['error'] = "Connection failed: " . $conn->connect_error;
    header("Location: index.php");
    exit();
}

// Create database if it doesn't exist
$create_db = "CREATE DATABASE IF NOT EXISTS $database";
if ($conn->query($create_db) === FALSE) {
    $_SESSION['error'] = "Database creation failed: " . $conn->error;
    header("Location: index.php");
    exit();
}

// Select the database
$conn->select_db($database);

// Create table if it doesn't exist
$create_table = "CREATE TABLE IF NOT EXISTS contacts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    message TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";
if ($conn->query($create_table) === FALSE) {
    $_SESSION['error'] = "Table creation failed: " . $conn->error;
    header("Location: index.php");
    exit();
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize inputs
    $name = htmlspecialchars($conn->real_escape_string($_POST['name']));
    $email = htmlspecialchars($conn->real_escape_string($_POST['email']));
    $message = htmlspecialchars($conn->real_escape_string($_POST['message']));

    // Validate inputs
    if (empty($name) || empty($email) || empty($message)) {
        $_SESSION['error'] = "All fields are required.";
        header("Location: index.php");
        exit();
    }

    // Insert data into database
    $insert = "INSERT INTO contacts (name, email, message) VALUES ('$name', '$email', '$message')";
    if ($conn->query($insert) === TRUE) {
        $_SESSION['success'] = "Data submitted successfully, thanks for joining!";
        header("Location: success.php");
    } else {
        $_SESSION['error'] = "Failed to save message: " . $conn->error;
        header("Location: index.php");
    }

    // Close connection
    $conn->close();
    exit();
}
?>