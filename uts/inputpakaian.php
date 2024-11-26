<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$id_pakaian = $_POST['id_pakaian'];
$nama_pakaian = $_POST['nama_pakaian'];
$kategori_pakaian = $_POST['kategori_pakaian'];
$bahan = $_POST['bahan'];
$harga = $_POST['harga'];
$stock = $_POST['stock'];
$ukuran = $_POST['ukuran'];
$deskripsi = $_POST['deskripsi'];

// menginput data ke database
mysqli_query($koneksi, "INSERT INTO pakaian (id_pakaian,nama_pakaian, kategori_pakaian, bahan, harga, stock, ukuran, deskripsi) 
                        VALUES ('$id_pakaian','$nama_pakaian', '$kategori_pakaian', '$bahan', '$harga', '$stock', '$ukuran', '$deskripsi')");

// mengalihkan halaman kembali ke tampil.php
header("location:tampil.php");
