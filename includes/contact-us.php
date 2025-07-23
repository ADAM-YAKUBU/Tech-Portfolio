<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Us | BrightTech Solutions</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="../styles/contact-us.css" />
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
  <a href="services.php">Services</a>
  <a href="about.php">About</a>
  <a href="contact-us.php" class="active-tab">Contact</a>
</nav>

<section id="contact" class="content-section">
  <h2>Contact Us</h2>

  <?php
    if (isset($_SESSION['status'])) {
      echo '<div class="status-message">' . htmlspecialchars($_SESSION['status']) . '</div>';
      unset($_SESSION['status']);
    }

    $nameValue = $_SESSION['form_data']['name'] ?? '';
    $emailValue = $_SESSION['form_data']['email'] ?? '';
    $messageValue = $_SESSION['form_data']['message'] ?? '';
  ?>

  <form action="../php/submit.php" method="POST">
    <label for="name">Your Name</label>
    <input type="text" name="name" id="name" value="<?= htmlspecialchars($nameValue) ?>" placeholder="Enter your name">

    <label for="email">Your Email</label>
    <input type="email" name="email" id="email" value="<?= htmlspecialchars($emailValue) ?>" placeholder="Enter your email">

    <label for="message">Your Message</label>
    <textarea name="message" id="message" rows="5" placeholder="Type your message here..."><?= htmlspecialchars($messageValue) ?></textarea>

    <button type="submit" name="submit_btn">Send Message</button>
  </form>

  <?php unset($_SESSION['form_data']); ?>
</section>

<footer>
  <p>&copy; 2025 BrightTech Solutions. All rights reserved.</p>
</footer>

</body>
</html>
