<?php
    $servername = "localhost"; // Sesuaikan dengan host database Anda
    $username = "cleon2023";//"cleon2023"; // Sesuaikan dengan username database Anda
    $password = "cleon2023";//"cleon2023"; // Sesuaikan dengan password database Anda
    $dbname = "jdn"; // Sesuaikan dengan nama database Anda
// Koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "jdn");

if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}