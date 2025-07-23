<?php
session_start();
include("dbconnect.php");

if (isset($_POST['submit_btn'])) {
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $message = trim($_POST['message'] ?? '');

    $_SESSION['form_data'] = [
        'name' => $name,
        'email' => $email,
        'message' => $message
    ];

   
    if (empty($name)) {
        $_SESSION['status'] = "Please enter your name.";
        header("Location: ../includes/contact-us.php#contact");
        exit;
    }

    if ($name === strtolower($name)) {
        $_SESSION['status'] = "Name must start with a capital letter.";
        header("Location: ../includes/contact-us.php#contact");
        exit;
    }

    if (empty($email)) {
        $_SESSION['status'] = "Please enter your email.";
        header("Location: ../includes/contact-us.php#contact");
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['status'] = "Invalid email format.";
        header("Location: ../includes/contact-us.php#contact");
        exit;
    }

    if (empty($message)) {
        $_SESSION['status'] = "Please write your message.";
        header("Location: ../includes/contact-us.php#contact");
        exit;
    }

    $stmt = $conn->prepare("INSERT INTO contacts (name, email, message) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $message);
    $stmt->execute();
    $stmt->close();
    $conn->close();

    $_SESSION['status'] = "Message sent successfully!";
    unset($_SESSION['form_data']); 
    header("Location: ../includes/contact-us.php#contact");
    exit;
}
?>
