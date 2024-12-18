<?php
// Konfigurasi database
$host = "localhost";
$user = "root";
$password = "";
$database = "buku";
// Membuat koneksi
$koneksi = mysqli_connect($host, $user, $password, $database);
// Memeriksa koneksi
if (!$koneksi) {
die("Koneksi gagal: " . mysqli_connect_error());
}
?>