<?php
include ('koneksi.php');

// Query untuk mengambil daftar pasien dan dokter
$sql_pasien = "SELECT id, nama FROM pasien";
$result_pasien = $conn->query($sql_pasien);

$sql_dokter = "SELECT id, nama FROM dokter";
$result_dokter = $conn->query($sql_dokter);
?>

<!DOCTYPE html>
<html>

<head>
          <title>Tambah Rekam Medis</title>
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>
          <div class="container mt-5">
                    <h2>Tambah Rekam Medis</h2>
                    <form action="simpan_rekam_medis.php" method="POST">
                              <div class="form-group">
                                        <label>ID Pasien</label>
                                        <select name="pasien_id" class="form-control" required>
                                                  <option value="">Pilih Pasien</option>
                                                  <?php
                                                  if ($result_pasien->num_rows > 0) {
                                                            while ($row = $result_pasien->fetch_assoc()) {
                                                                      echo "<option value='" . $row['id'] . "'>" . $row['nama'] . "</option>";
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
                                                                      echo "<option value='" . $row['id'] . "'>" . $row['nama'] . "</option>";
                                                            }
                                                  }
                                                  ?>
                                        </select>
                              </div>
                              <div class="form-group">
                                        <label>Tanggal</label>
                                        <input type="date" name="tanggal" class="form-control" required>
                              </div>
                              <div class="form-group">
                                        <label>Diagnosa</label>
                                        <textarea name="diagnosis" class="form-control" required></textarea>
                              </div>
                              <div class="form-group">
                                        <label>Pengobatan</label>
                                        <textarea name="pengobatan" class="form-control" required></textarea>
                              </div>
                              <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
          </div>
          <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>