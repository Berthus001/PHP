<?php
session_start();

// Get form data
$firstName = $_POST['firstName'] ?? '';
$lastName = $_POST['lastName'] ?? '';
$username = $_POST['username'] ?? '';
$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';
$confirmPassword = $_POST['confirmPassword'] ?? '';

// Validate required fields
if (
    empty($firstName) || empty($lastName) ||
    empty($username) || empty($email) ||
    empty($password) || empty($confirmPassword)
) {
    $_SESSION['signup_error_msg'] = 'All fields are required.';
    header('Location: /pages/signup.php');
    exit();
}

// Check if passwords match
if ($password !== $confirmPassword) {
    $_SESSION['signup_error_msg'] = 'Passwords do not match.';
    header('Location: /pages/signup.php');
    exit();
}

// Collect password errors
$passwordErrors = [];

if (strlen($password) < 6 || strlen($password) > 12) {
    $passwordErrors[] = 'Password must be between 6 and 12 characters.';
}
if (!preg_match('/[A-Z]/', $password)) {
    $passwordErrors[] = 'Password must contain at least one uppercase letter.';
}
if (!preg_match('/[a-z]/', $password)) {
    $passwordErrors[] = 'Password must contain at least one lowercase letter.';
}
if (!preg_match('/[0-9]/', $password)) {
    $passwordErrors[] = 'Password must contain at least one number.';
}
if (preg_match('/[^a-zA-Z0-9]/', $password)) {
    $passwordErrors[] = 'Password must not contain special characters.';
}

// If any password errors exist, show them all
if (!empty($passwordErrors)) {
    $_SESSION['signup_error_msg'] = '<ul><li>' . implode('</li><li>', $passwordErrors) . '</li></ul>';
    header('Location: /pages/signup.php');
    exit();
}

// Simulate successful sign-up (store user info in session)
$_SESSION['authenticated'] = true; // ✅ Mark user as logged in
$_SESSION['user'] = [
    'firstName' => $firstName,
    'lastName' => $lastName,
    'username' => $username,
    'email' => $email
];

// Redirect to protected page
header('Location: /pages/protected_page.php');
exit();
?>
