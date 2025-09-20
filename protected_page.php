<?php
session_start();

if (isset($_GET['logout'])) {
  session_destroy();
  header('Location: login.php');
  exit();
}

if (!isset($_SESSION['authenticated']) || $_SESSION['authenticated'] !== true) {
  header('Location: login.php');
  exit();
}


if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Protected Page</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
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
    .content {
      padding: 20px;
      text-align: center;
    }
  </style>
</head>
<body>

  <div class="navbar">
    <div class="left">My Project</div>
    <div class="right">
      <a href="?logout=true">Logout</a>
    </div>
  </div>

  <div class="content">
    <h1>This is a protected page</h1>
    <p>Welcome! Only logged-in users can access this content.</p>
  </div>

</body>
</html>
