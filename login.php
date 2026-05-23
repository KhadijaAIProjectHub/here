<?php 
session_start();
include 'includes/header.php'; 

// Dummy login logic for demonstration
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // In a real app, you would check the database here
    $_SESSION['customer_user'] = $_POST['email'];
    $redirect = $_SESSION['redirect_to'] ?? 'index.php';
    unset($_SESSION['redirect_to']);
    header("Location: $redirect");
    exit();
}
?>

<div class="container mt-5 pt-5">
    <div class="row justify-content-center">
        <div class="col-lg-5">
            <div class="glass-card shadow-lg p-5" style="background: white; border-radius: 25px;">
                <div class="text-center mb-4">
                    <h3 class="fw-bold">Customer <span class="text-primary">Login</span></h3>
                    <p class="text-muted">Please login to continue booking</p>
                </div>
                <form method="POST">
                    <div class="mb-3">
                        <label class="form-label small fw-bold">Email Address</label>
                        <input type="email" name="email" class="form-control rounded-pill px-4" placeholder="Enter your email" required>
                    </div>
                    <div class="mb-4">
                        <label class="form-label small fw-bold">Password</label>
                        <input type="password" name="password" class="form-control rounded-pill px-4" placeholder="••••••••" required>
                    </div>
                    <button type="submit" class="btn btn-primary w-100 rounded-pill py-3 fw-bold">Login to Book</button>
                </form>
                <div class="text-center mt-3">
                    <small>Don't have an account? <a href="#">Sign Up</a></small>
                </div>
            </div>
        </div>
    </div>
</div>