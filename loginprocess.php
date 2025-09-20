<?php
session_start();

// Get form data
$email = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

// Hardcoded credentials for demo
$validEmail = 'xyz@example.com';
$validPassword = 'Password123';

// Check credentials
if ($email === $validEmail && $password === $validPassword) {
    $_SESSION['user'] = $email;
    header('Location: /pages/protected_page.php'); // ✅ Redirect to protected page
    exit();
} else {
    $_SESSION['login_error_msg'] = 'Invalid username or password.';
    header('Location: /pages/login.php'); // ✅ Stay on login page with error
    exit();
}
?>
