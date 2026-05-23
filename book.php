<?php 
session_start();
// Security: Redirect to customer login if not logged in
if (!isset($_SESSION['customer_user'])) {
    header("Location: login.php");
    exit();
}
include 'includes/header.php'; 
$type = $_GET['type'] ?? 'Event';
?>

<div class="container mt-5 pt-4">
    <div class="glass-card shadow-lg p-5 mx-auto" style="max-width: 800px; background: white; border-radius: 25px;">
        <h2 class="fw-bold text-center mb-4 text-primary">Book Your <?php echo $type; ?></h2>
        <form action="save.php" method="POST">
            <input type="hidden" name="type" value="<?php echo $type; ?>">
            <div class="row g-3">
                <div class="col-md-6">
                    <label class="form-label small fw-bold">Full Name</label>
                    <input type="text" name="name" class="form-control rounded-pill px-4" required>
                </div>
                <div class="col-md-6">
                    <label class="form-label small fw-bold">Email</label>
                    <input type="email" name="email" class="form-control rounded-pill px-4" required>
                </div>
                <div class="col-md-6">
                    <label class="form-label small fw-bold">Event Date</label>
                    <input type="date" name="date" class="form-control rounded-pill px-4" required>
                </div>
                <div class="col-12 text-center mt-4">
                    <button type="submit" class="btn btn-primary btn-lg rounded-pill px-5 shadow">Continue to Payment</button>
                </div>
            </div>
        </form>
    </div>
</div>

<?php include 'includes/footer.php'; ?>