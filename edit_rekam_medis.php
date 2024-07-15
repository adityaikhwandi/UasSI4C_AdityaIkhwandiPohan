<?php
include ('koneksi.php');

// Ambil ID rekam medis dari parameter URL
$id = $_GET['id'];

// Query untuk mengambil data rekam medis berdasarkan ID
$sql = "SELECT * FROM rekam_medis WHERE id = $id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
          $row = $result->fetch_assoc();
          $pasien_id = $row['pasien_id'];
          $dokter_id = $row['dokter_id'];
          $tanggal = $row['tanggal'];
          $diagnosis = $row['diagnosis'];
          $pengobatan = $row['pengobatan'];
          $status = $row['status'];
} else {
          echo "Data rekam medis tidak ditemukan.";
          exit;
}

// Query untuk mengambil daftar pasien dan dokter
$sql_pasien = "SELECT id, nama FROM pasien";
$result_pasien = $conn->query($sql_pasien);

$sql_dokter = "SELECT id, nama FROM dokter";
$result_dokter = $conn->query($sql_dokter);
?>

<!DOCTYPE html>
<html>

<head>
          <title>Edit Rekam Medis</title>
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>
          <div class="container mt-5">
                    <h2>Edit Rekam Medis</h2>
                    <form action="update_rekam_medis.php" method="POST">
                              <input type="hidden" name="id" value="<?php echo $id; ?>">
                              <div class="form-group">
                                        <label>ID Pasien</label>
                                        <select name="pasien_id" class="form-control" required>
                                                  <option value="">Pilih Pasien</option>
                                                  <?php
                                                  if ($result_pasien->num_rows > 0) {
                                                            while ($row = $result_pasien->fetch_assoc()) {
                                                                      $selected = ($row['id'] == $pasien_id) ? 'selected' : '';
                                                                      echo "<option value='" . $row['id'] . "' $selected>" . $row['nama'] . "</option>";
                                                            }
                                                  }
                                                  ?>
                                        </select>
                              </div>
                              <div class="form-group">
                                        <label>ID Dokter</label>
                                        <select name="dokter_id" class="form-control" required>
                                                  <option value="">Pilih Dokter</option>
                                                  <?php
                                                  if ($result_dokter->num_rows > 0) {
                                                            while ($row = $result_dokter->fetch_assoc()) {
                                                                      $selected = ($row['id'] == $dokter_id) ? 'selected' : '';
                                                                      echo "<option value='" . $row['id'] . "' $selected>" . $row['nama'] . "</option>";
                                                            }
                                                  }
                                                  ?>
                                        </select>
                              </div>
                              <div class="form-group">
                                        <label>Tanggal</label>
                                        <input type="date" name="tanggal" class="form-control"
                                                  value="<?php echo $tanggal; ?>" required>
                              </div>
                              <div class="form-group">
                                        <label>Diagnosa</label>
                                        <textarea name="diagnosis" class="form-control"
                                                  required><?php echo $diagnosis; ?></textarea>
                              </div>
                              <div class="form-group">
                                        <label>Resep</label>
                                        <textarea name="pengobatan" class="form-control"
                                                  required><?php echo $pengobatan; ?></textarea>
                              </div>
                              <div class="form-group">
                                        <label>Status</label>
                                        <select name="status" class="form-control" required>
                                                  <option value="sudah diperiksa"
                                                            <?php echo ($status == 'sudah diperiksa') ? 'selected' : ''; ?>>
                                                            Sudah Diperiksa</option>
                                                  <option value="proses"
                                                            <?php echo ($status == 'proses') ? 'selected' : ''; ?>>
                                                            Proses</option>
                                                  <option value="batal"
                                                            <?php echo ($status == 'batal') ? 'selected' : ''; ?>>Batal
                                                  </option>
                                        </select>
                              </div>
                              <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    </form>
          </div>
          <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>