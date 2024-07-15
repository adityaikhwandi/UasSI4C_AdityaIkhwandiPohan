<?php include ('koneksi.php'); ?>

<!DOCTYPE html>
<html>

<head>
          <title>Tambah Pasien</title>
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>
          <div class="container">
                    <h2>Tambah Pasien</h2>
                    <form action="simpan_pasien.php" method="POST">
                              <div class="form-group">
                                        <label>Nama</label>
                                        <input type="text" name="nama" class="form-control" required>
                              </div>
                              <div class="form-group">
                                        <label>Alamat</label>
                                        <textarea name="alamat" class="form-control" required></textarea>
                              </div>
                              <div class="form-group">
                                        <label>Tanggal Lahir</label>
                                        <input type="date" name="tanggal_lahir" class="form-control" required>
                              </div>
                              <div class="form-group">
                                        <label>Jenis Kelamin</label>
                                        <select name="jenis_kelamin" class="form-control" required>
                                                  <option value="L">Laki-laki</option>
                                                  <option value="P">Perempuan</option>
                                        </select>
                              </div>
                              <div class="form-group">
                                        <label>No HP</label>
                                        <input type="text" name="no_hp" class="form-control" required>
                              </div>
                              <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
          </div>
</body>

</html>