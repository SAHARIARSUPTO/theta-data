<?php
// Define the current year dynamically for the copyright
$current_year = date("Y");

// Define social media links
$social_links = [
    'instagram' => '#instagram-link',
    'facebook' => '#facebook-link',
    'twitter' => '#twitter-link',
    'linkedin' => '#linkedin-link',
];

// Define utility links
$utility_links = [
    'Terms & Conditions' => '#terms-link',
    'Privacy Policy' => '#privacy-link',
];
?>

<footer class="site-footer py-5">
    <div class="container">
        <div class="row justify-content-center">
            
            <div class="col-12 text-center footer-content">
                
                <div class="social-icons mb-4">
                    <?php foreach ($social_links as $icon => $link): ?>
                        <a href="<?php echo htmlspecialchars($link); ?>" class="social-link mx-2" aria-label="<?php echo ucfirst($icon); ?>">
                            <i class="fa-brands fa-<?php echo htmlspecialchars($icon); ?>"></i>
                        </a>
                    <?php endforeach; ?>
                </div>

                <p class="copyright-text mb-1">
                    Axonix LLC Theta Data &copy;2020-<?php echo $current_year; ?>
                </p>
                <p class="contact-info mb-1">
                    <a href="mailto:support@thetadata.net" class="footer-link">support@thetadata.net</a>
                </p>
                <p class="contact-info mb-4">
                    Market Data Emergency (646)-875-8005
                </p>

                <div class="utility-links d-flex flex-column align-items-center">
                    <?php foreach ($utility_links as $text => $link): ?>
                        <a href="<?php echo htmlspecialchars($link); ?>" class="footer-link-underline mb-1">
                            <?php echo htmlspecialchars($text); ?>
                        </a>
                    <?php endforeach; ?>
                </div>

            </div>
        </div>
    </div>
</footer>
<style>
  /* Custom Styles for Footer Section */

:root {
    --footer-bg: #f8f8f8; /* Light gray background, similar to the image */
    --footer-text: #6c757d; /* Dark gray text color */
    --footer-icon: #868e96; /* Slightly lighter gray for icons */
}

.site-footer {
    background-color: var(--footer-bg);
    color: var(--footer-text);
}

.footer-content {
    /* Ensures everything inside is centered */
    max-width: 400px; /* Optional: Constrain the width of the content */
    margin: 0 auto;
}

/* Social Icons Styling */
.social-link {
    color: var(--footer-icon);
    font-size: 1.8rem; /* Large size for visibility */
    transition: color 0.3s ease;
}

.social-link:hover {
    color: #495057; /* Darker on hover */
}

/* Text and Contact Info */
.copyright-text,
.contact-info {
    font-size: 0.9rem;
    line-height: 1.5;
}

.footer-link {
    color: var(--footer-text);
    text-decoration: none;
    transition: color 0.3s;
}

.footer-link:hover {
    color: #495057;
}

/* Utility Links Styling (Underlined) */
.footer-link-underline {
    color: var(--footer-text);
    font-size: 0.9rem;
    /* Explicitly apply underline and transition */
    text-decoration: underline;
    text-underline-offset: 3px;
    transition: color 0.3s;
}

.footer-link-underline:hover {
    color: #495057;
}

/* Mobile Responsiveness */
@media (max-width: 575.98px) {
    .site-footer {
        padding-top: 3rem !important;
        padding-bottom: 3rem !important;
    }
    .social-link {
        font-size: 1.5rem;
    }
}
</style>