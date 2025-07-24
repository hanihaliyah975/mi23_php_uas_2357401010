<?php
// Nama: Hani Haliyah
// NIM: 2357401010
// Kelas: MI23
// File: kategori.php

session_start();
include 'db.php';

if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit;
}

if (isset($_POST['tambah'])) {
    $nama = $_POST['nama_kategori'];
    mysqli_query($conn, "INSERT INTO kategori (nama_kategori) VALUES ('$nama')");
}

$kategori = mysqli_query($conn, "SELECT * FROM kategori");
?>

<h2>Data Kategori</h2>
<form method="POST">
    Nama Kategori: <input type="text" name="nama_kategori" required>
    <input type="submit" name="tambah" value="Tambah">
</form>

<table border="1">
    <tr><th>ID</th><th>Nama Kategori</th></tr>
    <?php while ($row = mysqli_fetch_assoc($kategori)) { ?>
    <tr><td><?= $row['id'] ?></td><td><?= $row['nama_kategori'] ?></td></tr>
    <?php } ?>
</table>