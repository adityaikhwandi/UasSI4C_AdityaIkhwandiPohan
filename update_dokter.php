<?php
include ('koneksi.php');

$id = $_POST['id'];
$nama = $_POST['nama'];
$spesialisasi = $_POST['spesialisasi'];

$sql = "UPDATE dokter SET 
        nama = '$nama', 
        spesialisasi = '$spesialisasi' 
        WHERE id = $id";

if ($conn->query($sql) === TRUE) {
          echo "Data dokter berhasil diperbarui.";
          header("location: dokter.php");
} else {
          echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>