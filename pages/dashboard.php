<?php require_once('../partials/header.php'); ?>

<div class="container py-5">
    <div class="row g-4"> <div class="col-lg-6"> <div class="card p-4 card-custom h-100">
                <div class="card-body">
                    <h2 class="card-title fw-bold mb-3">
                        <i class="bi bi-person-circle me-2 text-primary"></i>
                        <?php echo htmlspecialchars($welcome_title); ?>
                    </h2>
                    <hr>
                    <p class="card-text text-muted">
                        <?php echo nl2br(htmlspecialchars($welcome_text)); ?>
                    </p>
                    
                    <button class="btn btn-outline-secondary mt-3 d-lg-none w-100">
                        <i class="bi bi-headset me-2"></i> Live Support
                    </button>

                    <?php 
                    // Database Comment:
                    // This is where you would integrate logic to fetch user data (name, last login, etc.)
                    // and display personalized welcome messages.
                    ?>
                </div>
            </div>
        </div>

        <div class="col-lg-6"> <div class="card p-4 card-custom h-100">
                <div class="card-body">
                    <h2 class="card-title fw-bold mb-4">
                        <i class="bi bi-credit-card-2-front me-2 text-success"></i>
                        <?php echo htmlspecialchars($subscription_title); ?>
                    </h2>

                    <ul class="list-group list-group-flush mb-4">
                        <?php foreach ($subscription_items as $item): ?>
                            <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                <div>
                                    <i class="bi <?php echo htmlspecialchars($item['icon']); ?> me-2"></i>
                                    <strong class="me-2"><?php echo htmlspecialchars($item['name']); ?></strong>
                                </div>
                                <div>
                                    <span class="text-muted me-3"><?php echo htmlspecialchars($item['status']); ?></span>
                                    <a href="#" class="text-upgrade">
                                        <?php echo htmlspecialchars($item['action']); ?>
                                    </a>
                                </div>
                                <?php 
                                // Database Comment:
                                // In a real application, 'status' and 'action' would be determined
                                // by a database query checking the user's current subscription level.
                                // The href="#" should be a dynamic link to the upgrade page.
                                ?>
                            </li>
                        <?php endforeach; ?>
                        
                        <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                            <div>
                                <i class="bi bi-clock-history me-2"></i>
                                <strong class="me-2">Rates</strong>
                            </div>
                            <small class="text-warning fst-italic"><?php echo htmlspecialchars($rates_status); ?></small>
                        </li>
                    </ul>

                    <div class="text-center mt-4">
                        <button type="button" class="btn btn-primary btn-lg btn-primary-custom fw-bold">
                            Subscribe Now
                        </button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<?php require_once('../partials/footer.php'); ?>