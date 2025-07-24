<?php
// Nama: Hani Haliyah
// NIM: 2357401010
// Kelas: MI23
// File: login.php

session_start();
include 'db.php';

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = mysqli_query($conn, $sql);
    $data = mysqli_fetch_assoc($result);

    if ($data && password_verify($password, $data['password'])) {
        $_SESSION['username'] = $data['username'];
        header('Location: index.php');
    } else {
        echo "Login gagal!";
    }
}
?>

<form method="POST">
    Username: <input type="text" name="username"><br>
    Password: <input type="password" name="password"><br>
    <input type="submit" name="submit" value="Login">
</form>