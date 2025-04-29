<?php
  require '../config/config.php';

  if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id'])) {
    $id = intval($_POST['id']);
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $gender = $_POST['gender'] ?? '';
    $role = $_POST['role'] ?? '';

    if (empty($name) || empty($email) || empty($gender) || empty($role)) {
      echo "Semua field harus diisi.";
    } else {
      $sql = "UPDATE crud_113 SET name = ?, email = ?, gender = ?, role = ? WHERE id = ?";
      $stmt = $conn->prepare($sql);
      $stmt->bind_param("ssssi", $name, $email, $gender, $role, $id);

      if ($stmt->execute()) {
        header("Location: admin_dashboard.php?status=success_edit");
        exit;
      } else {
        echo "Error: " . $stmt->error;
      }

      $stmt->close();
    }
  } else {
    echo "Invalid request.";
  }

  $conn->close();
?>
