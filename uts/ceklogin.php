<?php
session_start();
include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

// Query untuk akun dengan role admin
$queryAdmin = "SELECT * FROM akun WHERE username = '$username' AND password = '$password' AND id_akun = 1";
$resultAdmin = mysqli_query($koneksi, $queryAdmin);

// Query untuk akun dengan role karyawan
$queryKaryawan = "SELECT * FROM akun WHERE username = '$username' AND password = '$password' AND id_akun = 2";
$resultKaryawan = mysqli_query($koneksi, $queryKaryawan);

// Jika login sebagai admin
if (mysqli_num_rows($resultAdmin) > 0) {
    $_SESSION['role'] = 'admin';
    $_SESSION['status'] = 'login';

    header("Location: tampil.php");
}

// Jika login sebagai karyawan
elseif (mysqli_num_rows($resultKaryawan) > 0) {
    $_SESSION['role'] = 'karyawan';
    $_SESSION['status'] = 'login';

    header("Location: /uts/staff/tampil.php");
}

// Jika login gagal
else {
    echo "<script> alert('Login gagal! Username dan password tidak benar');</script>";
    echo "<script> window.location = 'index.html';</script>";
}
