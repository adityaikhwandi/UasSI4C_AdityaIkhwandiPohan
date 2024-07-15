<?php
include ('koneksi.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_obat = $_POST['nama_obat'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    $keterangan = $_POST['keterangan'];

    // Query untuk menyimpan data obat baru
    $sql = "INSERT INTO obat (nama_obat, harga, stok, keterangan) 
            VALUES ('$nama_obat', '$harga', '$stok', '$keterangan')";

    if ($conn->query($sql) === TRUE) {
        header("Location: obat.php");
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Tambah Obat</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h2>Tambah Obat</h2>
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="form-group">
                <label>Nama Obat</label>
                <input type="text" name="nama_obat" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Harga</label>
                <input type="number" name="harga" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Stok</label>
                <input type="number" name="stok" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Keterangan</label>
                <textarea name="keterangan" class="form-control"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>