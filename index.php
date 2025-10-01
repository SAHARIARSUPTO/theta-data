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
</head>
<body>

  <!-- Header Include -->
  <?php include __DIR__ . '/partials/header.php'; ?>

  <!-- Hero Section -->
  <section class="hero-section container">
    <img src="./images/image1.png" alt="Market Data Graphic">
    <h1>Invest In Your Market Data</h1>
    <p>Access real-time Options, Equities, and APIs built for traders and businesses that need speed and reliability.</p>
    <a href="#" class="btn btn-primary">Get started</a>
  </section>

  <!-- Feature Cards -->
  <section class="feature-cards container text-center">
    <div class="row g-4">
      <div class="col-lg-4 col-md-6 col-12">
        <div class="feature-card">
          <i class="fas fa-chart-line fa-2x mb-3"></i>
          <h5>Real-time Market Data</h5>
          <p>Get ultra-low latency data feeds for equities, options, and futures, designed for trading strategies that rely on speed.</p>
          <a href="#" class="btn btn-primary">Explore Data</a>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-12">
        <div class="feature-card">
          <i class="fas fa-chart-pie fa-2x mb-3"></i>
          <h5>Advanced Analytics</h5>
          <p>Analyze order flow, liquidity, and volatility with automated tools that give you a competitive edge in fast markets.</p>
          <a href="#" class="btn btn-primary">See Insights</a>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-12">
        <div class="feature-card">
          <i class="fas fa-tachometer-alt fa-2x mb-3"></i>
          <h5>Custom Dashboards</h5>
          <p>Visualize your KPIs, build interactive dashboards, and track price movements—all in one powerful platform.</p>
          <a href="#" class="btn btn-primary">Build Dashboard</a>
        </div>
      </div>
    </div>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
