<?php
// Define the data structure with links
$indices_pricing_data = [
    'Free' => [
        'End of Day' => '#link-eod-indices',
    ],
    'Value' => [
        'Price' => '#link-price-indices',
    ],
    'Standard' => [
        'Price Snapshot' => '#link-price-snapshot-indices',
        'OHLC Snapshot' => '#link-ohlc-snapshot-indices',
        'OHLC' => '#link-ohlc-indices',
        'Price Stream' => '#link-price-stream-indices',
    ],
    'Pro' => [
        'History' => '#link-history-indices',
    ],
];

// Helper function to render a feature item
function render_indices_feature_item($text, $link, $plan) {
    $tag = 'GET';
    // Determine the tag based on the feature/plan (STR for streams in Standard/Pro)
    if (strpos($text, 'Stream') !== false) {
        $tag = 'STR';
    }
    
    $tag_class = $tag === 'STR' ? 'bg-warning' : 'bg-success';
    $text_color_class = $tag === 'STR' ? 'text-dark' : 'text-white'; // Dark text on yellow STR badge

    echo '<a href="' . htmlspecialchars($link) . '" class="feature-item d-flex align-items-center mb-2 text-decoration-none">';
    echo '<span class="feature-tag badge ' . $tag_class . ' me-2 ' . $text_color_class . '">' . $tag . '</span>';
    echo '<span class="feature-text">' . htmlspecialchars($text) . '</span>';
    echo '</a>';
}
?>

<section id="indices-pricing" class="indices-data-pricing py-5 bg-white">
    <div class="container options-data-pricing" style="padding-top: 0; border-top: none;">
        <header class="text-center mb-5" data-aos="fade-up">
            <h1 class="display-5 fw-bold mb-2">
                Indices Data
            </h1>
            <p class="lead text-dark">Every Tick. Every Move. Real-Time.</p>
        </header>

        <div class="row pricing-row justify-content-center">
            <?php 
            $i = 0;
            foreach ($indices_pricing_data as $plan => $features):
                $i++;
                // Use a different header for Standard/Pro to include the subtext
                $header_text = match($plan) {
                    'Standard' => 'Standard <small class="text-muted fw-normal">(includes value)</small>',
                    'Pro'      => 'Pro <small class="text-muted fw-normal">(includes value & standard)</small>',
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
                    <div class="plan-card p-4 d-flex flex-column">
                        <div>
                            <h3 class="plan-title text-center mb-4" data-plan-name="<?= $plan ?>">
                                <i class="plan-icon fas <?= $plan_icon ?>"></i>
                                <?= $header_text ?>
                            </h3>

                            <div class="plan-features">
                                <?php 
                                foreach ($features as $text => $link) {
                                    render_indices_feature_item($text, $link, $plan);
                                }
                                ?>
                            </div>
                        </div>
                        
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        
        <div class="text-center mt-5" data-aos="fade-up" data-aos-delay="300">
            <a href="#pricing" class="btn btn-primary btn-lg custom-pricing-btn">Pricing</a>
        </div>
    </div>
</section>
<style>
.new-badge {
    font-size: 0.75rem;
    padding: 0.3em 0.6em;
    vertical-align: middle;
}
</style>