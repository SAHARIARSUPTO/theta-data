<?php
// --- 1. PHP Data Structure (same as before) ---
$plans = [
    'Options' => [
        'monthly' => [
            'Value' => [
                'price' => 40, 'description' => 'Best for beginners.', 
                'features' => ['100% market coverage', 'US index & stock options', 'Real-time access', 'Unlimited requests', '3 Request types', '4 Years of data', 'Low latency snapshots', 'API Support', '1 minute intervals']
            ],
            'Standard' => [
                'price' => 80, 'description' => 'Best for research.', 
                'features' => ['100% market coverage', 'US index & stock options', 'Real-time access', 'Unlimited requests', '7 Request types', '8 Years of data', 'Low latency snapshots', 'API Support', 'Tick level data', 'Option Chain Snapshots', '15K Trade streams', '10K Quote streams']
            ],
            'Pro' => [
                'price' => 160, 'description' => 'Best for live trading.', 
                'features' => ['100% market coverage', 'US index & stock options', 'Real-time access', 'Unlimited requests', '12 Request types', '12 Years of data', 'Low latency snapshots', 'API Support', 'Tick level data', 'Option Root Snapshots', 'Stream every option trade', '15K Quote streams']
            ],
        ],
        'annual' => [
            'Value' => [
                'price' => 32, 'description' => 'Best for beginners.', 
                'features' => ['100% market coverage', 'US index & stock options', 'Real-time access', 'Unlimited requests', '3 Request types', '4 Years of data', 'Low latency snapshots', 'API Support', '1 minute intervals']
            ],
            'Standard' => [
                'price' => 64, 'description' => 'Best for research.', 
                'features' => ['100% market coverage', 'US index & stock options', 'Real-time access', 'Unlimited requests', '7 Request types', '8 Years of data', 'Low latency snapshots', 'API Support', 'Tick level data', 'Option Chain Snapshots', '15K Trade streams', '10K Quote streams']
            ],
            'Pro' => [
                'price' => 128, 'description' => 'Best for live trading.', 
                'features' => ['100% market coverage', 'US index & stock options', 'Real-time access', 'Unlimited requests', '12 Request types', '12 Years of data', 'Low latency snapshots', 'API Support', 'Tick level data', 'Option Root Snapshots', 'Stream every option trade', '15K Quote streams']
            ],
        ],
    ],
    'Stocks' => [
        'monthly' => [
            'Value' => [
                'price' => 30, 'description' => 'Best for beginners.', 
                'features' => ['100% market coverage', 'US listed & OTC stocks', '15-minute delayed access', 'Unlimited requests', '3 Request types', '4 Years of data', 'Low latency snapshots', 'API Support', '15 minute intervals']
            ],
            'Standard' => [
                'price' => 80, 'description' => 'Best for research.', 
                'features' => ['100% market coverage', 'US listed & OTC stocks', 'Real-time access', 'Unlimited requests', '6 Request types', '4 Years of CTA data', '8 Years of UTP data', 'Low latency snapshots', 'API Support', '1 minute intervals', '1K Trade streams', '1K Quote streams']
            ],
            'Pro' => [
                'price' => 160, 'description' => 'Best for live trading.', 
                'features' => ['100% market coverage', 'US listed & OTC stocks', 'Real-time access', 'Unlimited requests', '6 Request types', '8 Years of CTA data', '12 Years of UTP data', 'Low latency snapshots', 'API Support', 'Tick level data', 'Stream every stock trade', '2K Quote streams']
            ],
        ],
        'annual' => [
            'Value' => [
                'price' => 25, 'description' => 'Best for beginners.', 
                'features' => ['100% market coverage', 'US listed & OTC stocks', '15-minute delayed access', 'Unlimited requests', '3 Request types', '4 Years of data', 'Low latency snapshots', 'API Support', '15 minute intervals']
            ],
            'Standard' => [
                'price' => 64, 'description' => 'Best for research.', 
                'features' => ['100% market coverage', 'US listed & OTC stocks', 'Real-time access', 'Unlimited requests', '6 Request types', '4 Years of CTA data', '8 Years of UTP data', 'Low latency snapshots', 'API Support', '1 minute intervals', '1K Trade streams', '1K Quote streams']
            ],
            'Pro' => [
                'price' => 128, 'description' => 'Best for live trading.', 
                'features' => ['100% market coverage', 'US listed & OTC stocks', 'Real-time access', 'Unlimited requests', '6 Request types', '8 Years of CTA data', '12 Years of UTP data', 'Low latency snapshots', 'API Support', 'Tick level data', 'Stream every stock trade', '2K Quote streams']
            ],
        ],
    ],
    'Indices' => [
        'monthly' => [
            'Value' => [
                'price' => 30, 'description' => 'Best for beginners.', 
                'features' => ['6500 historic symbols', '1-day delayed access', 'Unlimited requests', '2 Request types', '2 Years of data', 'Low latency snapshots', 'API Support', '15 minute intervals']
            ],
            'Standard' => [
                'price' => 50, 'description' => 'Best for research.', 
                'features' => ['6500 historic symbols', 'Real-time SPX & VIX', 'Unlimited requests', '2 Request types', '3 Years of data', 'Low latency snapshots', 'API Support', '1 minute intervals', 'Snapshots', '3 Price streams']
            ],
            'Pro' => [
                'price' => 100, 'description' => 'Best for live trading.', 
                'features' => ['6500 historic symbols', 'Real-time SPX & VIX', 'Unlimited requests', '2 Request types', '7 Years of data', 'Low latency snapshots', 'API Support', 'Tick level data', 'Snapshots', '100 Price streams']
            ],
        ],
        'annual' => [
            'Value' => [
                'price' => 24, 'description' => 'Best for beginners.', 
                'features' => ['6500 historic symbols', '1-day delayed access', 'Unlimited requests', '2 Request types', '2 Years of data', 'Low latency snapshots', 'API Support', '15 minute intervals']
            ],
            'Standard' => [
                'price' => 40, 'description' => 'Best for research.', 
                'features' => ['6500 historic symbols', 'Real-time SPX & VIX', 'Unlimited requests', '2 Request types', '3 Years of data', 'Low latency snapshots', 'API Support', '1 minute intervals', 'Snapshots', '3 Price streams']
            ],
            'Pro' => [
                'price' => 80, 'description' => 'Best for live trading.', 
                'features' => ['6500 historic symbols', 'Real-time SPX & VIX', 'Unlimited requests', '2 Request types', '7 Years of data', 'Low latency snapshots', 'API Support', 'Tick level data', 'Snapshots', '100 Price streams']
            ],
        ],
    ],
];

function create_link_text($feature_string) {
    
    $link_patterns = [
        'Request types' => 'href="#docs-request"',
        'Years of data' => 'href="#docs-history"',
        'latency snapshots' => 'href="#docs-latency"',
        'Trade streams' => 'href="#docs-streams"',
        'Quote streams' => 'href="#docs-streams"',
        'Price streams' => 'href="#docs-streams"',
        'historic symbols' => 'href="#docs-symbols"',
        'Option Chain Snapshots' => 'href="#docs-options"',
        'Option Root Snapshots' => 'href="#docs-options"',
        'Stream every option trade' => 'href="#docs-streams"',
        'Stream every stock trade' => 'href="#docs-streams"',
        'Years of UTP data' => 'href="#docs-utp"',
        'Years of CTA data' => 'href="#docs-cta"',
    ];

    $output = $feature_string;

    foreach ($link_patterns as $term => $url) {
       
        $replacement = "<a class='doc-link' $url>$term</a>";

        $output = str_ireplace($term, $replacement, $output);
    }
    

    $output = preg_replace('/(\d+)\s(<a)/', '<span class="linked-number">$1</span> $2', $output);

    return $output;
}


$message = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'subscribe') {
    $plan_name = htmlspecialchars($_POST['plan'] ?? 'Unknown');
    $data_type = htmlspecialchars($_POST['data_type'] ?? 'Unknown');
    $payment_mode = htmlspecialchars($_POST['payment_mode'] ?? 'Unknown');
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    // ... form processing logic ...
    if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $message = "<div class='alert alert-success mt-4' role='alert'>
                        <strong>Success!</strong> You selected the <strong>{$data_type} / {$plan_name} / " . ucfirst($payment_mode) . "</strong> plan. A confirmation has been sent to {$email}.
                    </div>";
    } else {
        $message = "<div class='alert alert-danger mt-4' role='alert'>
                        <strong>Error!</strong> Please enter a valid email address.
                    </div>";
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Theta Data Dynamic Pricing</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/pricing.css" rel="stylesheet">
    <style>
        .price-mode-monthly, .price-mode-annual {
            display: none;
        }
        .price-mode-monthly.active, .price-mode-annual.active {
            display: inline;
        }
        .data-type-section {
            margin-bottom: 4rem;
        }
    </style>
</head>
<body>

<div class="container py-5">
    <header class="pricing-header mb-5">
        <h1>Data Subscription Pricing</h1>
        <p>Access real-time and historical data for your trading and research needs.</p>
    </header>

    <?php echo $message; ?>

    <div class="d-flex justify-content-center mb-5 price-toggle">
        <div class="btn-group" role="group" aria-label="Monthly/Annual Toggle">
            <button type="button" class="btn btn-outline-primary" data-mode="monthly" onclick="togglePricingMode('monthly')">Monthly</button>
            <button type="button" class="btn btn-outline-primary active" data-mode="annual" onclick="togglePricingMode('annual')">Annual</button>
        </div>
    </div>
    
    <?php foreach ($plans as $dataType => $modes): ?>
        <div class="data-type-section" id="<?= strtolower($dataType) ?>-section">
            <h2 class="text-center mb-4"><?= $dataType ?> Pricing</h2>
            <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
                
                <?php foreach (array_keys($modes['monthly']) as $planName): ?>
                    <div class="col">
                        <div class="pricing-card mb-4 rounded-3 <?= ($planName === 'Standard') ? 'border-primary' : '' ?>">
                            <div class="card-header">
                                <h4 class="card-title"><?= $planName ?></h4>
                            </div>
                            <div class="card-body">
                                <p class="text-muted"><?= $modes['monthly'][$planName]['description'] ?></p>

                                <div class="price mb-3">
                                    <span class="price-mode-monthly" data-plan="<?= $planName ?>" data-type="<?= $dataType ?>">
                                        $<?= $modes['monthly'][$planName]['price'] ?><small class="text-muted fw-light">/mo</small>
                                    </span>
                                    <span class="price-mode-annual" data-plan="<?= $planName ?>" data-type="<?= $dataType ?>">
                                        $<?= $modes['annual'][$planName]['price'] ?><small class="text-muted fw-light">/mo</small>
                                    </span>
                                </div>
                                
                                <ul class="list-unstyled mt-3 mb-4 text-start mx-3">
                                    <?php 
                                    $features = $modes['monthly'][$planName]['features'];
                                    foreach ($features as $feature): ?>
                                        <li><svg class="bi" width="16" height="16" fill="currentColor"><use xlink:href="#check"/></svg> <?= create_link_text($feature) ?></li>
                                    <?php endforeach; ?>
                                </ul>
                                
                                <button type="button" 
                                        class="w-100 btn btn-lg btn-primary subscribe-btn" 
                                        data-plan="<?= $planName ?>" 
                                        data-type="<?= $dataType ?>" 
                                        onclick="showForm('<?= $dataType ?>', '<?= $planName ?>')">
                                    Subscribe
                                </button>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>

            </div>
        </div>
    <?php endforeach; ?>

    <hr class="my-5">
    <div id="subscription-form-section" class="row justify-content-center" style="display: none;">
        <div class="col-lg-8">
            <div class="subscription-form">
                <h2 class="text-center mb-4">Complete Your Subscription</h2>
                
                <div class="alert alert-info" role="alert">
                    You are subscribing to: 
                    <strong id="selected-plan-display"></strong> 
                    (<span id="selected-type-display"></span> data, billed <span id="selected-mode-display">Annual</span>)
                </div>

                <form method="POST" action="pricing-all.php">
                    <input type="hidden" name="action" value="subscribe">
                    <input type="hidden" name="plan" id="selected-plan-input" value="">
                    <input type="hidden" name="data_type" id="selected-type-input" value="">
                    <input type="hidden" name="payment_mode" id="selected-mode-input" value="annual">

                    <div class="mb-3">
                        <label for="full_name" class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="full_name" name="full_name" required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>

                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="terms" required>
                        <label class="form-check-label" for="terms">I agree to the Terms & Conditions</label>
                    </div>

                    <button type="submit" class="btn btn-primary btn-lg w-100">Confirm & Proceed to Payment</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    let currentPaymentMode = 'annual';
    function togglePricingMode(mode) {
        currentPaymentMode = mode;

        // Buttons
        document.querySelectorAll('.price-toggle .btn').forEach(btn => {
            btn.classList.remove('active');
        });
        document.querySelector(`.price-toggle .btn[data-mode="${mode}"]`).classList.add('active');

        // Prices
        document.querySelectorAll('.price-mode-monthly').forEach(el => {
            el.classList.remove('active');
        });
        document.querySelectorAll('.price-mode-annual').forEach(el => {
            el.classList.remove('active');
        });
        document.querySelectorAll(`.price-mode-${mode}`).forEach(el => {
            el.classList.add('active');
        });

        document.getElementById('selected-mode-input').value = mode;
        const modeDisplay = document.getElementById('selected-mode-display');
        if (modeDisplay) {
            modeDisplay.textContent = mode.charAt(0).toUpperCase() + mode.slice(1);
        }
    }
    function showForm(dataType, planName) {
        const priceElement = document.querySelector(`#${dataType.toLowerCase()}-section .price-mode-${currentPaymentMode}[data-plan="${planName}"]`);
        const price = priceElement ? priceElement.textContent.trim() : 'Price Unavailable';
        const fullPlanName = `${planName} (${price})`;
        document.getElementById('selected-plan-input').value = planName;
        document.getElementById('selected-type-input').value = dataType;
        document.getElementById('selected-mode-input').value = currentPaymentMode;
        document.getElementById('selected-plan-display').textContent = fullPlanName;
        document.getElementById('selected-type-display').textContent = dataType;
        document.getElementById('selected-mode-display').textContent = currentPaymentMode.charAt(0).toUpperCase() + currentPaymentMode.slice(1);
        document.getElementById('subscription-form-section').style.display = 'flex';
        document.getElementById('subscription-form-section').scrollIntoView({ behavior: 'smooth' });
    }
    window.onload = function() {
        togglePricingMode('annual');
    };
</script>
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
  <symbol id="check" viewBox="0 0 16 16">
    <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.96-4.96z"/>
  </symbol>
</svg>
</body>
</html><?php //include '../partials/footer.php'; ?>
</body>
</html>
