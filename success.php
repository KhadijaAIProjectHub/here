<?php
session_start();
include 'config.php';

// Check if we have a booking ID to update
if (isset($_SESSION['last_id'])) {
    $booking_id = $_SESSION['last_id'];
    
    // Update the status to 'paid'
    $stmt = $conn->prepare("UPDATE bookings SET payment_status = 'paid' WHERE id = ?");
    $stmt->bind_param("i", $booking_id);
    $stmt->execute();
    
    // Optional: Clear the session ID so a refresh doesn't trigger the update again
    // unset($_SESSION['last_id']);
}

include 'includes/header.php';
?>

<div class="container mt-5 pt-5 text-center">
    <div class="glass-card d-inline-block p-5">
        <div class="display-1 mb-3">🎉</div>
        <h2 class="fw-bold text-success">Payment Successful!</h2>
        <p class="text-muted">Your event booking has been confirmed and marked as paid.</p>
        <hr>
        <a href="index.php" class="btn btn-primary rounded-pill px-4">Back to Home</a>
    </div>
</div>

<?php include 'includes/footer.php'; ?>