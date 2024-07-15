<?php
include ('koneksi.php');

$id = $_GET['id'];

// Query untuk hapus data obat berdasarkan id
$sql = "DELETE FROM obat WHERE id = '$id'";

if ($conn->query($sql) === TRUE) {
          header("Location: obat.php");
          exit;
} else {
          echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>