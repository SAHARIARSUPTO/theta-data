<?php
// Define the data structure with links, grouped by the plan where features are introduced.
$stocks_pricing_data = [
    'Free' => [
        'End of Day' => '#link-eod-stock',
    ],
    'Value' => [
        'Quotes' => '#link-quotes',
        'OHLC' => '#link-ohlc',
        'Quote At Time' => '#link-quote-at-time',
    ],
    'Standard' => [
        'Splits' => '#link-splits',
        'Trades' => '#link-trades',
        'Trade Quote' => '#link-trade-quote',
        'Trade At Time' => '#link-trade-at-time',
        'Dividends' => '#link-dividends',
        'Quote Stream' => '#link-quote-stream',
        'Trade Stream' => '#link-trade-stream',
    ],
    'Pro' => [
        'Every US Stock Trade Stream' => '#link-full-trade-stream',
    ],
];

// Helper function to render a feature item for the cards
function render_stock_feature_item($text, $link, $plan) {
    // Determine the tag based on the feature/plan
    $tag = 'GET';
    if (($plan === 'Standard' && strpos($text, 'Stream') !== false) || $plan === 'Pro') {
        $tag = 'STR';
    }
    
    $tag_class = $tag === 'STR' ? 'bg-warning' : 'bg-success';
    $text_color_class = $tag === 'STR' ? 'text-dark' : 'text-white';

    echo '<a href="' . htmlspecialchars($link) . '" class="feature-item d-flex align-items-center mb-2 text-decoration-none">';
    echo '<span class="feature-tag badge ' . $tag_class . ' me-2 ' . $text_color_class . '">' . $tag . '</span>';
    echo '<span class="feature-text">' . htmlspecialchars($text) . '</span>';
    echo '</a>';
}
?>

<section id="stocks-pricing" class="stocks-data-pricing py-5 bg-light">
    <div class="container options-data-pricing" style="padding-top: 0; border-top: none;">
        <header class="text-center mb-5 stocks-header" data-aos="fade-up">
            <h1 class="display-5 fw-bold">Stocks Data</h1>
            <p class="lead text-dark">Every trade. Every quote. Unfiltered.</p>
            <div class="header-links mt-3">
                <a href="#learn" class="me-4 text-primary text-decoration-none fw-bold">Learn More ></a>
                <a href="#subscribe" class="text-primary text-decoration-none fw-bold">Subscribe ></a>
            </div>
        </header>

        <div class="row pricing-row justify-content-center">
            <?php 
            $i = 0;
            foreach ($stocks_pricing_data as $plan => $features):
                $i++;
                // Plan headers with subtext
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
                                    render_stock_feature_item($text, $link, $plan);
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
</style>