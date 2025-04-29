<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../style/add_user.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <title>Admin Dashboard</title>
</head>
<body>
  <nav>
    <div class="logo-name">
      <div class="logo-image">
        <img src="../assets/image/profile.jpg" alt="">
      </div>
      <span class="logo_name">MyNutriPlan</span>
    </div>

    <div class="menu-items">
      <ul>
        <li>
          <a href="admin_dashboard.php">
            <i class='bx bxs-dashboard'></i>
            <span class="link-name">Dashboard</span>
          </a>
        </li>
      </ul>
      <ul class="add-user">
        <li>
          <a href="add_user.php">
            <i class='bx bx-user-plus'></i>
            <span class="link-name">Add User</span>
          </a>
        </li>
      </ul>
      <ul class="logout-mode">
        <li>
          <a href="../auth/logout.php">
            <i class='bx bx-log-out' ></i>
            <span class="link-name">Logout</span>
          </a>
        </li>
      </ul> 
    </div>
  </nav>

  <section class="registration">
    <div class="regis-content">
      <h2>Add User</h2>
      <form action="add.php" method="POST">
        <div class="input-box">
          <input type="text" name="name" placeholder="Enter name" required>
        </div>
        <div class="input-box">
          <input type="text" name="email" placeholder="Enter email" required>
        </div>
        <div class="input-box">
          <input type="text" name="password" placeholder="Enter password" required>
        </div>
        <div class="input-box">
          <select name="gender" required>
            <option value="">-- Select Gender --</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="havent choose yet">Haven't Choose Yet</option>
          </select>
        </div>
        <div class="input-box">
          <select name="role" required>
            <option value="">-- Select Role --</option>
            <option value="admin">Admin</option>
            <option value="user">User</option>
          </select>
        </div>
        <div class="input-box button">
          <input type="Submit" value="Add User">
        </div>
      </form>
    </div>
  </section>    

  <script src="admin_js.js"></script>
</body>
</html>