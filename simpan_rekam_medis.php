<?php
include ('koneksi.php');

$pasien_id = $_POST['pasien_id'];
$dokter_id = $_POST['dokter_id'];
$tanggal = $_POST['tanggal'];
$diagnosis = $_POST['diagnosis'];
$pengobatan = $_POST['pengobatan'];

$sql = "INSERT INTO rekam_medis (pasien_id, dokter_id, tanggal, diagnosis, pengobatan) 
        VALUES ('$pasien_id', '$dokter_id', '$tanggal', '$diagnosis', '$pengobatan')";

if ($conn->query($sql) === TRUE) {
        echo "Data rekam medis berhasil disimpan";
        header("Location:medis.php");
} else {
        echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>