<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Our Services | BrightTech Solutions</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="../styles/services.css" />
</head>
<body>

<header>
  <div class="logo-overlay">
    <img src="../images/logo.png" alt="Company Logo">
    <h1>BrightTech Solutions</h1>
  </div>
</header>

<nav>
  <a href="../index.php">Home</a>
  <a href="services.php" class="active-tab">Services</a>
  <a href="about.php">About</a>
  <a href="contact-us.php">Contact</a>
</nav>

<section id="services" class="content-section">
  <h2 style="text-align:center; margin-bottom: 1rem;">Our Services</h2>
  <div class="services-list">
    <div class="service-card">
      <img src="../images/custome-development.png" alt="Custom Dev Icon" />
      <h3>Custom Development</h3>
      <p>Powerful software tailored to your business vision.</p>
    </div>
    <div class="service-card">
      <img src="../images/cloud-integration.png" alt="Cloud Icon" />
      <h3>Cloud Integration</h3>
      <p>Modern cloud infrastructure with scale and reliability.</p>
    </div>
    <div class="service-card">
      <img src="../images/IT-consultant.png" alt="Consulting Icon" />
      <h3>IT Consulting</h3>
      <p>Strategic planning and digital transformation.</p>
    </div>
    <div class="service-card">
      <img src="../images/web-and-mobile-app.png" alt="App Dev Icon" />
      <h3>Web & Mobile Apps</h3>
      <p>Cross-platform digital experiences your users will love.</p>
    </div>
  </div>
</section>

<footer>
  <p>&copy; 2025 BrightTech Solutions. All rights reserved.</p>
</footer>

</body>
</html>
