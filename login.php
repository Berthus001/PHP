<?php
session_start();
$errorMessage = '';
if (isset($_SESSION['login_error_msg'])) {
    $errorMessage = $_SESSION['login_error_msg'];
    unset($_SESSION['login_error_msg']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login - My Project</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
    }
    .navbar {
      background-color: #333;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 10px 20px;
    }
    .navbar .left {
      color: white;
      font-size: 20px;
      font-weight: bold;
    }
    .navbar .right a {
      color: white;
      text-decoration: none;
      padding: 12px 16px;
      font-size: 17px;
    }
    .navbar .right a:hover {
      background-color: #ddd;
      color: black;
    }
    .login-container {
      max-width: 400px;
      margin: 60px auto;
      padding: 30px;
      background-color: white;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
      border-radius: 8px;
    }
    .login-container h2 {
      text-align: center;
      margin-bottom: 20px;
    }
    .error-message {
      background-color: #f8d7da;
      color: #721c24;
      border: 1px solid #f5c6cb;
      padding: 10px;
      border-radius: 4px;
      margin-bottom: 10px;
      font-weight: bold;
      text-align: center;
    }
    .login-container input[type="text"],
    .login-container input[type="password"] {
      width: 100%;
      padding: 12px;
      margin: 8px 0;
      border: 1px solid #ccc;
      border-radius: 4px;
    }
    .login-container button {
      width: 100%;
      padding: 12px;
      background-color: #333;
      color: white;
      border: none;
      border-radius: 4px;
      font-size: 16px;
      cursor: pointer;
    }
    .login-container button:hover {
      background-color: #555;
    }
  </style>
</head>
<body>

  <div class="navbar">
    <div class="left">My Project</div>
    <div class="right">
      <a href="../index.php">Home</a>
      <a href="/pages/login.php">Login</a>
    </div>
  </div>

  <div class="login-container">
    <h2>Login</h2>

    <form action="../process/loginprocess.php" method="POST">
      <?php if ($errorMessage): ?>
        <div class="error-message"><?= htmlspecialchars($errorMessage) ?></div>
      <?php endif; ?>

      <label for="username">Username</label>
      <input type="text" name="username" required>

      <label for="password">Password</label>
      <input type="password" name="password" required>

      <button type="submit">Log In</button>
    </form>
  </div>

</body>
</html>
