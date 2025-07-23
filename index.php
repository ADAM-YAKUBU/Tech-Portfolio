<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Home | BrightTech Solutions</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="styles/index.css" />
</head>
<body>

<header>
  <div class="logo-overlay">
    <img src="images/logo.png" alt="Company Logo">
    <h1>BrightTech Solutions</h1>
  </div>
</header>

<nav>
  <a href="index.php" class="active-tab">Home</a>
  <a href="includes/services.php">Services</a>
  <a href="includes/about.php">About</a>
  <a href="includes/contact-us.php">Contact</a>
</nav>

<section id="home" class="content-section">
  <div class="hero">
    <h2>Innovative Tech for a Better Tomorrow</h2>
    <p>Empowering the digital world with smart, scalable, and secure solutions.</p>
  </div>
  <div class="products">
    <div class="product-card">
      <img src="images/laptop.avif" alt="Laptop" />
      <p>Laptop</p>
      <span class="price">$799.00</span>
    </div>
    <div class="product-card">
      <img src="images/phone.avif" alt="Phone" />
      <p>Phones</p>
      <span class="price">$499.00</span>
    </div>
    <div class="product-card">
      <img src="images/camera-headphones-and-others.avif" alt="Accessories" />
      <p>Camera, Headphones & more</p>
      <span class="price">$299.00</span>
    </div>
  </div>
</section>

<footer>
  <p>&copy; 2025 BrightTech Solutions. All rights reserved.</p>
</footer>

</body>
</html>
