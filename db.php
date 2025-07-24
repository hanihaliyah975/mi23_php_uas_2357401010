<?php
// Nama: Hani Haliyah
// NIM: 2357401010
// Kelas: MI23
// File: db.php

$host = "localhost";
$user = "root";
$pass = "";
$db   = "uas_mi23";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>