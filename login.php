<?php 
  if (isset($_GET['status']) && $_GET['status'] == 'success') {
    echo "<script>alert('Registrasi berhasil! Silakan login.');</script>";
  }  
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title> 
    <link rel="stylesheet" href="style/first.css">
   </head>
<body>
  <div class="wrapper">
    <h2>Login</h2>
    <form action="auth/login.php" method="POST">
      <div class="input-box">
        <input type="text" name="email" placeholder="Enter your email" required>
      </div>
      <div class="input-box">
        <input type="password" name="password" placeholder="Enter your password" required>
      </div>
      <div class="input-box button">
        <input type="Submit" value="Login">
      </div>
      <div class="text">
        <h3>Don't have any account? <a href="index.php">Register now</a></h3>
      </div>
    </form>
  </div>
</body>
</html>