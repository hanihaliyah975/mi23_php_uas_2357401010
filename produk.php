<?php
// Nama: Hani Haliyah
// NIM: 2357401010
// Kelas: MI23
// File: produk.php

session_start();
include 'db.php';

if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit;
}

if (isset($_POST['tambah'])) {
    $nama_produk = $_POST['nama_produk'];
    $harga = $_POST['harga'];
    $kategori = $_POST['id_kategori'];
    mysqli_query($conn, "INSERT INTO produk (nama_produk, harga, id_kategori) VALUES ('$nama_produk', '$harga', '$kategori')");
}

$produk = mysqli_query($conn, "SELECT p.*, k.nama_kategori FROM produk p LEFT JOIN kategori k ON p.id_kategori = k.id");
$kategori = mysqli_query($conn, "SELECT * FROM kategori");
?>

<h2>Data Produk</h2>
<form method="POST">
    Nama Produk: <input type="text" name="nama_produk" required><br>
    Harga: <input type="number" name="harga" required><br>
    Kategori:
    <select name="id_kategori">
        <?php while ($row = mysqli_fetch_assoc($kategori)) { ?>
            <option value="<?= $row['id'] ?>"><?= $row['nama_kategori'] ?></option>
        <?php } ?>
    </select><br>
    <input type="submit" name="tambah" value="Tambah">
</form>

<table border="1">
    <tr><th>ID</th><th>Nama</th><th>Harga</th><th>Kategori</th></tr>
    <?php while ($row = mysqli_fetch_assoc($produk)) { ?>
    <tr>
        <td><?= $row['id'] ?></td>
        <td><?= $row['nama_produk'] ?></td>
        <td><?= $row['harga'] ?></td>
        <td><?= $row['nama_kategori'] ?></td>
    </tr>
    <?php } ?>
</table>