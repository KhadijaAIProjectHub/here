<?php
session_start(); // Mandatory for using $_SESSION
include 'config.php';

// Prepare the SQL statement
$stmt = $conn->prepare("INSERT INTO bookings (name, email, phone, event_type, event_date, guests, payment_status) VALUES (?, ?, ?, ?, ?, ?, ?)");

$status = "pending";

// Bind parameters: 'sssssis' means 5 strings, 1 integer (guests), and 1 string (status)
$stmt->bind_param("sssssis", 
    $_POST['name'], 
    $_POST['email'], 
    $_POST['phone'], 
    $_POST['type'], 
    $_POST['date'], 
    $_POST['guests'], 
    $status
);

$stmt->execute();

// Store the ID of the new booking in the session to use on the payment/success pages
$_SESSION['last_id'] = $stmt->insert_id;

// Redirect to payment
header("Location: payment.php");
exit(); // Good practice to stop script execution after a redirect
?>