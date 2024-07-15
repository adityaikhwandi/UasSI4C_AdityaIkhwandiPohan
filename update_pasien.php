<?php
include ('koneksi.php');

$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$no_hp = $_POST['no_hp'];

$sql = "UPDATE pasien SET 
        nama = '$nama', 
        alamat = '$alamat', 
        tanggal_lahir = '$tanggal_lahir', 
        jenis_kelamin = '$jenis_kelamin', 
        no_hp = '$no_hp' 
        WHERE id = $id";

if ($conn->query($sql) === TRUE) {
          echo "Data pasien berhasil diperbarui.";
          header("location: pasien.php");
} else {
          echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>