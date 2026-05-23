<?php 
session_start();
include 'includes/header.php'; 

// Check if a booking exists in the session to show correct price
$total_amount = 50.00; // You can make this dynamic based on event type later
?>

<div class="container mt-5 pt-5">
    <div class="row justify-content-center">
        <div class="col-lg-5">
            <div class="glass-card shadow-lg p-5 text-center">
                <div class="mb-4">
                    <span class="display-4 text-primary">🛡️</span>
                    <h3 class="fw-bold mt-2">Secure Checkout</h3>
                    <p class="text-muted small">Transaction ID: #<?php echo $_SESSION['last_id'] ?? 'N/A'; ?></p>
                </div>

                <div class="bg-light rounded-4 p-4 mb-4 text-start">
                    <div class="d-flex justify-content-between mb-2">
                        <span>Event Service Fee</span>
                        <span class="fw-bold">$<?php echo number_format($total_amount, 2); ?></span>
                    </div>
                    <div class="d-flex justify-content-between mb-2 text-muted small">
                        <span>Taxes & Handling</span>
                        <span>$0.00</span>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="h5 mb-0">Total Amount</span>
                        <span class="h4 mb-0 text-primary fw-800">$<?php echo number_format($total_amount, 2); ?></span>
                    </div>
                </div>

                <div class="mb-4">
                    <p class="text-muted small mb-3">Accepted Methods</p>
                    <div class="d-flex justify-content-center gap-3 opacity-50">
                        <span class="fs-4">💳</span> <span class="fs-4">🏦</span> <span class="fs-4">📱</span>
                    </div>
                </div>

                <div class="d-grid gap-3">
                    <a href="success.php" class="btn btn-primary btn-lg rounded-pill fw-bold shadow-sm py-3">
                        Pay with Credit Card
                    </a>
                    <a href="cancel.php" class="btn btn-outline-secondary btn-sm rounded-pill border-0">
                        Cancel and return
                    </a>
                </div>

                <div class="mt-4 pt-3 border-top">
                    <small class="text-muted">
                        🔒 SSL Encrypted Connection
                    </small>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>