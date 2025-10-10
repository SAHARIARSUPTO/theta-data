<?php require_once(__DIR__ . "/../config.php"); ?>
<div class="header-wrapper">
  <nav class="navbar navbar-expand-lg navbar-clean">
    <div class="container">
      <!-- Brand -->
      <a class="navbar-brand d-flex align-items-center" href="<?php echo BASE_URL; ?>">
        <img src="<?php echo BASE_URL; ?>images/Logo.png" alt="ThetaData Logo" height="32">
      </a>

      <!-- Mobile Toggler -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Menu -->
      <div class="collapse navbar-collapse" id="navbarContent">
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
          <li class="nav-item"><a class="nav-link px-3" href="<?php echo BASE_URL; ?>pages/pricing.php"><i class="fas fa-dollar-sign"></i> Pricing</a></li>
          <li class="nav-item"><a class="nav-link px-3" href="#"><i class="fas fa-book"></i> Docs</a></li>
          <li class="nav-item"><a class="nav-link px-3" href="#"><i class="fab fa-discord"></i> Discord</a></li>
          <li class="nav-item"><a class="nav-link px-3" href="#"><i class="fas fa-download"></i> Downloads</a></li>
          <li class="nav-item"><a class="nav-link px-3" href="#"><i class="fas fa-blog"></i> Blog</a></li>
          <li class="nav-item"><a class="nav-link px-3" href="#"><i class="fas fa-briefcase"></i> Careers</a></li>
        </ul>
        <a href="<?php echo BASE_URL; ?>pages/signup.php" class="btn btn-get-started">Signup</a>
      </div>
    </div>
  </nav>
</div>