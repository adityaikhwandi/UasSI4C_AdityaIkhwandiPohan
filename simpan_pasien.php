<?php
include ('koneksi.php');

$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$no_hp = $_POST['no_hp'];

$sql = "INSERT INTO pasien (nama, alamat, tanggal_lahir, jenis_kelamin, no_hp) 
        VALUES ('$nama', '$alamat', '$tanggal_lahir', '$jenis_kelamin', '$no_hp')";

if ($conn->query($sql) === TRUE) {
          echo "Data pasien berhasil disimpan";
          header("location:dokter.php");
} else {
          echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>