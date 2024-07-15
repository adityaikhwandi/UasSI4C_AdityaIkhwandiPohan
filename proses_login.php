<?php
session_start();
include ('koneksi.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $username = $_POST['username'];
          $password = $_POST['password'];

          // Query untuk mencari pengguna berdasarkan username dan password
          $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
          $result = $conn->query($sql);

          if ($result->num_rows == 1) {
                    // Jika pengguna ditemukan, set session dan arahkan ke halaman dashboard
                    $_SESSION['username'] = $username;
                    header("Location: index.php");
          } else {
                    // Jika pengguna tidak ditemukan, tampilkan pesan error atau kembali ke halaman login
                    echo "Login gagal. Username atau password salah.";
          }
}

$conn->close();
?>