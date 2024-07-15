<?php
include('koneksi.php');

$id = $_GET['id'];

// Query untuk mengambil data obat berdasarkan id
$sql = "SELECT * FROM obat WHERE id = '$id'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_obat = $_POST['nama_obat'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    $keterangan = $_POST['keterangan'];

    // Query untuk update data obat
    $sql_update = "UPDATE obat SET 
                   nama_obat = '$nama_obat', 
                   harga = '$harga', 
                   stok = '$stok', 
                   keterangan = '$keterangan' 
                   WHERE id = '$id'";

    if ($conn->query($sql_update) === TRUE) {
        header("Location: obat.php");
        exit;
    } else {
        echo "Error: " . $sql_update . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html>

<head>
          <title>Edit Obat</title>
          <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
          <div class="container mt-5">
                    <h2>Edit Obat</h2>
                    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) . '?id=' . $id; ?>">
                              <div class="form-group">
                                        <label>Nama Obat</label>
                                        <input type="text" name="nama_obat" class="form-control"
                                                  value="<?php echo $row['nama_obat']; ?>" required>
                              </div>
                              <div class="form-group">
                                        <label>Harga</label>
                                        <input type="number" name="harga" class="form-control"
                                                  value="<?php echo $row['harga']; ?>" required>
                              </div>
                              <div class="form-group">
                                        <label>Stok</label>
                                        <input type="number" name="stok" class="form-control"
                                                  value="<?php echo $row['stok']; ?>" required>
                              </div>
                              <div class="form-group">
                                        <label>Keterangan</label>
                                        <textarea name="keterangan"
                                                  class="form-control"><?php echo $row['keterangan']; ?></textarea>
                              </div>
                              <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    </form>
          </div>
          <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>