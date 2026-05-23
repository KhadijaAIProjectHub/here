<?php include 'includes/header.php'; ?>

<div class="container mt-5 pt-lg-5">
    <div class="row align-items-center min-vh-75">
        <div class="col-lg-7 mb-5 mb-lg-0">
            <h1 class="display-3 fw-bold lh-1 mb-4 text-white">
                Make Your <br>
                <span class="text-gradient">Events</span> <br>
                Unforgettable
            </h1>
            <p class="lead opacity-75 mb-5 w-75 text-white">
                From intimate celebrations to grand affairs, we create memorable experiences that last a lifetime.
            </p>
            
            <div class="d-flex flex-wrap gap-4 opacity-100">
                <span class="d-flex align-items-center text-white">
                    <i class="me-2">🎂</i> Perfect Planning
                </span>
                <span class="d-flex align-items-center text-white">
                    <i class="me-2">👥</i> Expert Team
                </span>
                <span class="d-flex align-items-center text-white">
                    <i class="me-2">🛡️</i> Trusted Service
                </span>
            </div>
        </div>

        <div class="col-lg-5">
            <div class="glass-card-light shadow-2xl p-4 p-md-5">
                <h3 class="fw-bold mb-1 text-dark">Plan Your Event</h3>
                <p class="text-muted small mb-4">Choose your event type to get started</p>
                
                <div class="event-list d-grid gap-3">
                    <a href="book.php?type=Birthday" class="event-selection-item">
                        <span class="icon">🎂</span>
                        <div class="info">
                            <strong>Birthday Party</strong>
                            <small>Make birthdays special</small>
                        </div>
                        <span class="arrow">→</span>
                    </a>

                    <a href="book.php?type=Wedding" class="event-selection-item">
                        <span class="icon">💍</span>
                        <div class="info">
                            <strong>Wedding / Shadi</strong>
                            <small>Your dream wedding</small>
                        </div>
                        <span class="arrow">→</span>
                    </a>

                    <a href="book.php?type=Corporate" class="event-selection-item">
                        <span class="icon">💼</span>
                        <div class="info">
                            <strong>Corporate Event</strong>
                            <small>Professional gatherings</small>
                        </div>
                        <span class="arrow">→</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'includes/footer.php'; ?>