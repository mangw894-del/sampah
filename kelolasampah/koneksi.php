<?php
$servername = "localhost";   // Server database (biasanya localhost)
$username   = "root";        // Username MySQL (default: root)
$password   = "";            // Password MySQL (kosong jika pakai XAMPP default)
$dbname     = "sampah";      // Nama database

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Mengecek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$conn->set_charset("utf8");

?>
