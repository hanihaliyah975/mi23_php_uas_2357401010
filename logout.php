<?php
// Nama: Hani Haliyah
// NIM: 2357401010
// Kelas: MI23
// File: logout.php

session_start();
session_destroy();
header('Location: login.php');
?>