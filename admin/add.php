<?php
  require '../config/config.php';

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $gender = $_POST['gender'] ?? '';
    $password = $_POST['password'] ?? '';

    if (empty($name) || empty($email) || empty($gender) || empty($password)) {
      echo "Semua field harus diisi.";
    } else {
      $hashed_password = password_hash($password, PASSWORD_DEFAULT);
      $sql = "INSERT INTO crud_113 (name, email, password, gender) VALUES (?, ?, ?, ?)";
      
      $stmt = $conn->prepare($sql);
      $stmt->bind_param("ssss", $name, $email, $hashed_password, $gender);

      if ($stmt->execute()) {
        header("Location: admin_dashboard.php?status=success_add");
        exit;
      } else {
        echo "Error: " . $stmt->error;
      }

      $stmt->close();
    }
  }

  $conn->close();
?>
