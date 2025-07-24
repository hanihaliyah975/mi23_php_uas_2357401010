<?php
// Nama: Hani Haliyah
// NIM: 2357401010
// Kelas: MI23
// File: index.php

session_start();
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit;
}

echo "<h1>Selamat datang, " . $_SESSION['username'] . "!</h1>";
echo "<a href='kategori.php'>Kelola Kategori</a> | ";
echo "<a href='produk.php'>Kelola Produk</a> | ";
echo "<a href='logout.php'>Logout</a>";
?>