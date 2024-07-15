<?php
include ('koneksi.php');

$nama = $_POST['nama'];
$spesialisasi = $_POST['spesialisasi'];

$sql = "INSERT INTO dokter (nama, spesialisasi) VALUES ('$nama', '$spesialisasi')";

if ($conn->query($sql) === TRUE) {
          echo "Data dokter berhasil disimpan";
          header("location: dokter.php");
} else {
          echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>