<?php
  include '../config/config.php';
  $sql = "SELECT * FROM crud_113";
  $result = mysqli_query($conn, $sql);
?>

<?php 
  if (isset($_GET['status']) && $_GET['status'] == 'success_add') {
    echo "<script>alert('Berhasil menambahkan user!.');</script>";
  }  

  if (isset($_GET['status']) && $_GET['status'] == 'success_edit') {
    echo "<script>alert('Berhasil update user!.');</script>";
  }  

  if (isset($_GET['status']) && $_GET['status'] == 'success_delete') {
    echo "<script>alert('Berhasil delete user!.');</script>";
  }  
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../style/admin_dashboard.css">
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
      <ul>
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

  <section class="dashboard">
    <div class="dash-content">
      <div class="overview">
        <div class="title">
          <i class='bx bxs-dashboard'></i>
          <span class="text">Dashboard</span>
        </div>

        <div class="boxes">
          <div class="box box1">
            <i class="uil uil-thumbs-up"></i>
            <span class="text">Total User</span>
            <span class="number">
            <?php 
              $sql = "SELECT COUNT(*) AS total FROM crud_113";
              $result = mysqli_query($conn, $sql);
                  
              if ($row = mysqli_fetch_assoc($result)) {
                echo $row['total'];
              }                            
            ?></span>
          </div>
          <div class="box box2">
            <i class="uil uil-comments"></i>
            <span class="text">Total Man</span>
            <span class="number">
            <?php 
              $sql = "SELECT COUNT(*) AS total FROM crud_113 WHERE gender = 'male'";
              $result = mysqli_query($conn, $sql);
                          
              if ($row = mysqli_fetch_assoc($result)) {
                echo $row['total'];
              }                    
            ?></span>
          </div>
          <div class="box box3">
            <i class="uil uil-share"></i>
            <span class="text">Total Woman</span>
            <span class="number">
            <?php 
              $sql = "SELECT COUNT(*) AS total FROM crud_113 WHERE gender = 'female'";
              $result = mysqli_query($conn, $sql);
              
              if ($row = mysqli_fetch_assoc($result)) {
                  echo $row['total'];
              }                    
            ?></span>
          </div>
        </div>
      </div>

      <div class="activity">
        <div class="title">
          <i class='bx bx-user' ></i>
          <span class="text">User</span>
        </div>
        <div class="activity-data">
          <?php 
            $sql = "SELECT * FROM crud_113";
            $result = mysqli_query($conn, $sql);
                        
            if (mysqli_num_rows($result) > 0) {
              echo "<table>";
              echo "<thead>";
              echo "<tr>";
              echo "<th>Nama</th>";
              echo "<th>Email</th>";
              echo "<th>Bergabung Pada</th>";
              echo "<th>Gender</th>";
              echo "<th>Role</th>";
              echo "<th>Action</th>";
              echo "</tr>";
              echo "</thead>";
              echo "<tbody>";
                    
              while ($row = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['created_at'] . "</td>";
                echo "<td>" . $row['gender'] . "</td>";
                echo "<td>" . $row['role'] . "</td>";
                echo "<td>
                        <form action='edit_user.php' method='POST' style='display:inline;'>
                          <input type='hidden' name='id' value='" . $row['id'] . "'>
                          <button type='submit' class='btn-edit'>Edit</button>
                        </form>
                        <form action='delete_user.php' method='POST' style='display:inline;'>
                          <input type='hidden' name='id' value='" . $row['id'] . "'>
                          <button type='submit' class='btn-delete' onclick=\"return confirm('Yakin ingin menghapus?')\">Hapus</button>
                        </form>
                      </td>";
                echo "</tr>";
              }
              echo "</tbody>";
              echo "</table>";
            } else {
              echo "No records found";
            }
          ?>
        </div>
      </div>
    </div>
  </section>

  <script src="admin_js.js"></script>
</body>
</html>