<?php
  require '../config/config.php';

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $gender = $_POST['gender'] ?? '';
    $password = $_POST['password'] ?? '';
    $confirm_password = $_POST['confirm_password'] ?? '';
    $terms = isset($_POST['terms']) ? 1 : 0;

    if (empty($name) || empty($email) || empty($gender) || empty($password) || empty($confirm_password)) {
      echo "Semua field harus diisi.";
    } elseif ($password !== $confirm_password) {
      echo "Password dan konfirmasi password tidak sama.";
    } else {
      $hashed_password = password_hash($password, PASSWORD_DEFAULT);
      $sql = "INSERT INTO crud_113 (name, email, password, gender) VALUES (?, ?, ?, ?)";
        
      // Gunakan prepared statement untuk keamanan (hindari SQL Injection)
      $stmt = $conn->prepare($sql);
      $stmt->bind_param("ssss", $name, $email, $hashed_password, $gender);

      if ($stmt->execute()) {
        header("Location: ../login.php?status=success");
      } else {
        echo "Error: " . $stmt->error;
      }

      $stmt->close();
    }
  }

  $conn->close();
?>
