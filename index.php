<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>ThetaData | Market Insights</title>

  <!-- Fonts & CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/custom-bootstrap.css" rel="stylesheet">
  <link href="css/header.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" crossorigin="anonymous" />
  <link href="css/effects.css" rel="stylesheet" />
  <link href="css/pricing-table.css" rel="stylesheet" />
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body>

  <!-- Header Include -->
  <?php include __DIR__ . '/partials/header.php'; ?>

  <!-- Hero Section -->
  <section class="hero-section container">
    <img src="./images/image1.png" alt="Market Data Graphic" data-aos="zoom-in" data-aos-duration="700">
    <h1 data-aos="fade-up" data-aos-delay="100">Invest In Your Market Data</h1>
    <p data-aos="fade-up" data-aos-delay="200">Access real-time Options, Equities, and APIs built for traders and businesses that need speed and reliability.</p>
    <a href="#" class="btn btn-primary" data-aos="fade-up" data-aos-delay="300">Get started</a>
  </section>

  <!-- Feature Cards -->
  <section class="feature-cards container text-center">
    <div class="row g-4">
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
        <div class="feature-card">
          <i class="fas fa-bolt fa-2x mb-3"></i>
          <h5>Real-time Access</h5>
          <p>Get ultra-low latency data feeds for equities, options, and futures.</p>
          <a href="pages/pricing.php" class="btn btn-primary">Get Access</a>
        </div>
      </div>
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
        <div class="feature-card">
          <i class="fas fa-file-invoice-dollar fa-2x mb-3"></i>
          <h5>Quote at Trade</h5>
          <p>Analyze order flow, liquidity, and volatility with our powerful tools.</p>
          <a href="pages/commercial-use.php" class="btn btn-primary">Learn More</a>
        </div>
      </div>
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
        <div class="feature-card">
          <i class="fas fa-users fa-2x mb-3"></i>
          <h5>Community Support</h5>
          <p>Join our community of traders and get the support you need.</p>
          <a href="pages/blog.php" class="btn btn-primary">Join Us</a>
        </div>
      </div>
    </div>
  </section>

  <?php include __DIR__ . '/partials/partners.php'; ?>
  <?php include __DIR__ . '/partials/option-data.php'; ?>
  <?php include __DIR__ . '/partials/stocks-data.php'; ?>
  <?php include __DIR__ . '/partials/indices-data.php'; ?>

  <?php include __DIR__ . '/partials/footer.php'; ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init({
      once: true, 
      duration: 600, 
    });
  </script>
</body>
</html>
