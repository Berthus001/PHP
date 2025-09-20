<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>My Homepage</title>
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
    }
  </style>
</head>
<body>

  <div class="navbar">
    <div class="left">My Project</div>
    <div class="right">
      <a href="../index.php">Home</a>
      <a href="../pages/login.php">Login</a>
      <a href="../pages/signup.php">Sign up</a>
    </div>
  </div>

  <div class="content">
    <h1>Welcome to My Homepage</h1>
    <p>This is a simple landing page with a navigation bar.</p>
  </div>

</body>
</html>
