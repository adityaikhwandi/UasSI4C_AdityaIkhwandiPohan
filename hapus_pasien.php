<?php
include ('koneksi.php');

if (isset($_GET['id'])) {
          $id = $_GET['id'];

          // Menghapus data pasien berdasarkan ID
          $sql = "DELETE FROM pasien WHERE id = $id";

          if ($conn->query($sql) === TRUE) {
                    echo "Data pasien berhasil dihapus";
          } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
          }

          $conn->close();

          // Redirect kembali ke halaman utama setelah menghapus data
          header("Location: pasien.php");
} else {
          echo "ID tidak ditemukan";
}
?>