<?php
// Define the data structure with links
$pricing_data = [
    'Free' => [
        'End of Day' => '#link-eod',
        'List All Tickers' => '#link-tickers',
        'List All Expirations' => '#link-expirations',
        'List All Strikes' => '#link-strikes',
    ],
    'Value' => [
        'Quote' => '#link-quote',
        'Open Interest' => '#link-open-interest',
        'Quote Snapshot' => '#link-quote-snapshot',
        'Open Interest Snapshot' => '#link-oi-snapshot',
        'OHLC Snapshot' => '#link-ohlc',
        'Quote At Time' => '#link-quote-at-time',
    ],
    'Standard' => [
        'Trade' => '#link-trade',
        'Trade Quote' => '#link-trade-quote',
        'Greeks' => '#link-greeks',
        'Implied Volatility' => '#link-implied-vol',
        'Trade Snapshot' => '#link-trade-snapshot',
        'Trade At Time' => '#link-trade-at-time',
        'Quote Stream' => '#link-quote-stream',
        'Trade Stream' => '#link-trade-stream',
    ],
    'Pro' => [
        'Second Order Greeks' => '#link-2nd-greeks',
        'Third Order Greeks' => '#link-3rd-greeks',
        'Trade Greeks' => '#link-trade-greeks',
        'Trade Greeks and Order' => '#link-trade-greeks-order',
        'Trade Greeks 3rd Order' => '#link-trade-greeks-3rd',
        'All Greeks' => '#link-all-greeks',
        'Full Trade Stream' => '#link-full-trade-stream',
    ],
];

// Helper function to render a feature item
function render_feature_item($text, $link, $plan) {
    // Determine the tag based on the feature/plan
    $tag = 'GET';
    if (($plan === 'Standard' || $plan === 'Pro') && strpos($text, 'Stream') !== false) {
        $tag = 'STR';
    }
    
    $tag_class = $tag === 'STR' ? 'bg-warning' : 'bg-success';

    echo '<a href="' . htmlspecialchars($link) . '" class="feature-item d-flex align-items-center mb-2 text-decoration-none">';
    echo '<span class="feature-tag badge ' . $tag_class . ' me-2">' . $tag . '</span>';
    echo '<span class="feature-text">' . htmlspecialchars($text) . '</span>';
    echo '</a>';
}
?>

<section id="options-pricing" class="options-data-pricing">
    <div class="container">
        <header class="text-center mb-5 options-header" data-aos="fade-up">
            <h1 class="display-5 fw-bold">Options Data</h1>
            <p class="lead">All Exchanges. Complex Greeks. Low Latency.</p>
            
        </header>

        <div class="row pricing-row">
            <?php 
            $i = 0;
            foreach ($pricing_data as $plan => $features):
                $i++;
                // Plan headers with subtext
                $header_text = match($plan) {
                    'Standard' => 'Standard <small>(includes value)</small>',
                    'Pro'      => 'Pro <small>(includes value & standard)</small>',
                    default    => $plan,
                };
                // Map plan names to icons
                $plan_icon = match($plan) {
                    'Free' => 'fa-gift',
                    'Value' => 'fa-chart-line',
                    'Standard' => 'fa-cogs',
                    'Pro' => 'fa-rocket',
                };
            ?>
                <div class="col-lg-3 col-md-6 col-12 mb-4 plan-column" data-aos="fade-up" data-aos-delay="<?= $i * 100 ?>">
                    <div class="plan-card p-4">
                        <h3 class="plan-title text-center mb-4 fw-bold" data-plan-name="<?= $plan ?>">
                            <i class="plan-icon fas <?= $plan_icon ?>"></i>
                            <?= $header_text ?>
                        </h3>

                        <div class="plan-features">
                            <?php 
                            foreach ($features as $text => $link) {
                                render_feature_item($text, $link, $plan);
                            }
                            ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        
        <div class="text-center mt-5" data-aos="fade-up" data-aos-delay="500">
            <a href="#pricing" class="btn btn-primary btn-lg custom-pricing-btn">Pricing</a>
        </div>
    </div>
</section>