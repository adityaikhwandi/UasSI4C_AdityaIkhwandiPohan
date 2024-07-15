<?php
include ('koneksi.php');

// Ambil ID pasien dari parameter URL
$id = $_GET['id'];

// Query untuk mengambil data pasien berdasarkan ID
$sql = "SELECT * FROM pasien WHERE id = $id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
          $row = $result->fetch_assoc();
          $nama = $row['nama'];
          $alamat = $row['alamat'];
          $tanggal_lahir = $row['tanggal_lahir'];
          $jenis_kelamin = $row['jenis_kelamin'];
          $no_hp = $row['no_hp'];
} else {
          echo "Data pasien tidak ditemukan.";
          exit;
}
?>

<!DOCTYPE html>
<html>

<head>
          <title>Edit Pasien</title>
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
                    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
                    crossorigin="anonymous">
</head>

<body>
          <div class="container mt-5">
                    <h2>Edit Pasien</h2>
                    <form action="update_pasien.php" method="POST">
                              <input type="hidden" name="id" value="<?php echo $id; ?>">
                              <div class="form-group">
                                        <label>Nama</label>
                                        <input type="text" name="nama" class="form-control" value="<?php echo $nama; ?>"
                                                  required>
                              </div>
                              <div class="form-group">
                                        <label>Alamat</label>
                                        <textarea name="alamat" class="form-control"
                                                  required><?php echo $alamat; ?></textarea>
                              </div>
                              <div class="form-group">
                                        <label>Tanggal Lahir</label>
                                        <input type="date" name="tanggal_lahir" class="form-control"
                                                  value="<?php echo $tanggal_lahir; ?>" required>
                              </div>
                              <div class="form-group">
                                        <label>Jenis Kelamin</label>
                                        <select name="jenis_kelamin" class="form-control" required>
                                                  <option value="L" <?php if ($jenis_kelamin == 'L')
                                                            echo 'selected'; ?>>
                                                            Laki-laki</option>
                                                  <option value="P" <?php if ($jenis_kelamin == 'P')
                                                            echo 'selected'; ?>>
                                                            Perempuan</option>
                                        </select>
                              </div>
                              <div class="form-group">
                                        <label>No HP</label>
                                        <input type="text" name="no_hp" class="form-control"
                                                  value="<?php echo $no_hp; ?>" required>
                              </div>
                              <button type="submit" class="btn btn-primary mt-3">Simpan Perubahan</button>
                    </form>
          </div>
          <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>