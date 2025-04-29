<?php
  require '../config/config.php';

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    if (empty($email) || empty($password)) {
      echo "Semua field harus diisi.";
    } else {
      
      $sql = "SELECT * FROM crud_113 WHERE email = ?";

      $stmt = $conn->prepare($sql);
      $stmt->bind_param("s", $email);

      $stmt->execute();
      $result = $stmt->get_result();
      $user = $result->fetch_assoc();

      if ($user) {
        if (password_verify($password, $user['password'])) {
          $_SESSION['user_id'] = $user['id'];
          $_SESSION['user_name'] = $user['name'];
          $_SESSION['user_role'] = $user['role'];

          if ($user['role'] === 'admin') {
              header("Location: ../admin/admin_dashboard.php");
          } else {
              header("Location: dashboard.php");
          }
          exit;
        } else {
          echo "Password salah.";
        }
      } else {
        echo "Email tidak terdaftar.";
      }

      $stmt->close();
    }
  }

  $conn->close();
?>
