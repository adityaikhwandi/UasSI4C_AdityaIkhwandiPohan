<?php
include ('koneksi.php');

$id = $_POST['id'];
$pasien_id = $_POST['pasien_id'];
$dokter_id = $_POST['dokter_id'];
$tanggal = $_POST['tanggal'];
$diagnosis = $_POST['diagnosis'];
$pengobatan = $_POST['pengobatan'];

$sql = "UPDATE rekam_medis SET 
        pasien_id = '$pasien_id', 
        dokter_id = '$dokter_id', 
        tanggal = '$tanggal', 
        diagnosis = '$diagnosis', 
        pengobatan = '$pengobatan' 
        WHERE id = $id";

if ($conn->query($sql) === TRUE) {
          echo "Data rekam medis berhasil diperbarui.";
          header("location:medis.php");
} else {
          echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>