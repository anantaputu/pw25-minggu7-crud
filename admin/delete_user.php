<?php
  include '../config/config.php';

  if (isset($_POST['id'])) {
    $id = intval($_POST['id']);

    $sql = "DELETE FROM crud_113 WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
      header("Location: admin_dashboard.php?status=success_delete");
      exit;
    } else {
      echo "Gagal menghapus data: " . $stmt->error;
    }

    $stmt->close();
  } else {
    echo "ID tidak ditemukan di URL.";
  }

  $conn->close();
?>
