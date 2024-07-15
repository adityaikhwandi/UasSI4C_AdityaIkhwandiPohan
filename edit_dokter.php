<?php
include ('koneksi.php');

// Ambil ID dokter dari parameter URL
$id = $_GET['id'];

// Query untuk mengambil data dokter berdasarkan ID
$sql = "SELECT * FROM dokter WHERE id = $id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
          $row = $result->fetch_assoc();
          $nama = $row['nama'];
          $spesialisasi = $row['spesialisasi'];
} else {
          echo "Data dokter tidak ditemukan.";
          exit;
}
?>

<!DOCTYPE html>
<html>

<head>
          <title>Edit Dokter</title>
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>
          <div class="container mt-5">
                    <h2>Edit Dokter</h2>
                    <form action="update_dokter.php" method="POST">
                              <input type="hidden" name="id" value="<?php echo $id; ?>">
                              <div class="form-group">
                                        <label>Nama</label>
                                        <input type="text" name="nama" class="form-control" value="<?php echo $nama; ?>"
                                                  required>
                              </div>
                              <div class="form-group">
                                        <label>Spesialisasi</label>
                                        <input type="text" name="spesialisasi" class="form-control"
                                                  value="<?php echo $spesialisasi; ?>" required>
                              </div>
                              <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    </form>
          </div>
          <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>