<?php
include ('koneksi.php');

// Ambil ID rekam medis dari parameter URL
$id = $_GET['id'];

// Query untuk menghapus data rekam medis berdasarkan ID
$sql = "DELETE FROM rekam_medis WHERE id = $id";

if ($conn->query($sql) === TRUE) {
          echo "Data rekam medis berhasil dihapus.";
          header("location:medis.php");
} else {
          echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>