<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$id_karyawan      = $_POST['id_karyawan'];
$nama_karyawan    = $_POST['nama_karyawan'];
$notlp_karyawan   = $_POST['notlp_karyawan'];
$email_karyawan   = $_POST['email_karyawan'];
$jabatan_karyawan = $_POST['jabatan_karyawan'];

// menginput data ke database
mysqli_query($koneksi, "INSERT INTO karyawan (id_karyawan, nama_karyawan, notlp_karyawan, email_karyawan, jabatan_karyawan) 
                        VALUES ('$id_karyawan','$nama_karyawan', '$notlp_karyawan', '$email_karyawan', '$jabatan_karyawan')");

// mengalihkan halaman kembali ke tampil_karyawan.php
header("location:kar_tampil.php");
?>
