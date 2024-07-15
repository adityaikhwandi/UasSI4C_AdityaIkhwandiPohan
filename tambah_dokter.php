<?php include('koneksi.php'); ?>

<!DOCTYPE html>
<html>

<head>
          <title>Tambah Dokter</title>
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>
          <div class="container mt-5">
                    <h2>Tambah Dokter</h2>
                    <form action="simpan_dokter.php" method="POST">
                              <div class="form-group">
                                        <label>Nama</label>
                                        <input type="text" name="nama" class="form-control" required>
                              </div>
                              <div class="form-group">
                                        <label>Spesialisasi</label>
                                        <input type="text" name="spesialisasi" class="form-control" required>
                              </div>
                              <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
          </div>
          <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>