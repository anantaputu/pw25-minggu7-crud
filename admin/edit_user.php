<?php
  require '../config/config.php';

  if (isset($_POST['id'])) {
    $id = intval($_POST['id']);
    $sql = "SELECT * FROM crud_113 WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../style/edit_user.css">
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
      <h2>Edit User <?php echo htmlspecialchars($row['name']);?> </h2>
      <form action="edit.php" method="POST">
          <input type="hidden" name="id" value="<?= $row['id'] ?>">
        <div class="input-box">
          <input type="text" name="name" value="<?php echo htmlspecialchars($row['name']); ?>" required>
        </div>
        <div class="input-box">
          <input type="text" name="email" value="<?php echo htmlspecialchars($row['email']); ?>" required>
        </div>
        <div class="input-box">
        <select name="gender" required>
          <option value="">-- Select Gender --</option>
          <option value="male" <?php if ($row['gender'] == 'male') echo 'selected'; ?>>Male</option>
          <option value="female" <?php if ($row['gender'] == 'female') echo 'selected'; ?>>Female</option>
          <option value="havent choose yet" <?php if ($row['gender'] == 'havent choose yet') echo 'selected'; ?>>Haven't Choose Yet</option>
          </select>
        </div>
        <div class="input-box">
          <select name="role" required>
            <option value="">-- Select Role --</option>
            <option value="admin" <?php if ($row['role'] == 'admin') echo 'selected'; ?>>Admin</option>
            <option value="user" <?php if ($row['role'] == 'user') echo 'selected'; ?>>User</option>
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