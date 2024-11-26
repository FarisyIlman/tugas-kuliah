<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$id_pelanggan = $_POST['id_pelanggan'];
$nama_pelanggan = $_POST['nama_pelanggan'];
$notlp_pelanggan = $_POST['notlp_pelanggan'];
$alamat_pelanggan = $_POST['alamat_pelanggan'];
$email_pelanggan = $_POST['email_pelanggan'];

// menginput data ke database
mysqli_query($koneksi, "INSERT INTO pelanggan (id_pelanggan, nama_pelanggan, notlp_pelanggan, alamat_pelanggan, email_pelanggan) 
                        VALUES ('$id_pelanggan', '$nama_pelanggan', '$notlp_pelanggan', '$alamat_pelanggan', '$email_pelanggan')");

// mengalihkan halaman kembali ke tampil.php
header("location:tampil.php");
?>
