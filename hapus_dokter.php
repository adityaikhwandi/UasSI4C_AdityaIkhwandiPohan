<?php
include ('koneksi.php');

// Ambil ID dokter dari parameter URL
$id = $_GET['id'];

// Query untuk menghapus data dokter berdasarkan ID
$sql = "DELETE FROM dokter WHERE id = $id";

if ($conn->query($sql) === TRUE) {
          echo "Data dokter berhasil dihapus.";
} else {
          echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>