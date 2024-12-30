<?php
// Memulai session
session_start();

// Mengecek apakah user sudah login (session 'username' sudah ada)
if (!isset($_SESSION['username'])) {
    // Jika belum login, redirect ke halaman login
    header("location:login.php");
    exit(); // Menghentikan eksekusi lebih lanjut
}

// Menampilkan halaman admin jika sudah login
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin halaman</title>
</head>
<body>
    <h1>Selamat datang, <?php echo $_SESSION['username']; ?>!</h1>
    <p>Welcome</p>
    <a href="logout.php">Logout</a>
</body>
</html>
