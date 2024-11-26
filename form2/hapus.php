<?php
// koneksi database
include 'koneksi.php';

// menangkap data id yang di kirim dari url
$id_pelanggan = $_GET['id'];  // Menggunakan id_pakaian untuk menghapus
$id_pembelian = $_GET['id'];  // Menggunakan id_pakaian untuk menghapus
$id_transaksi = $_GET['id'];  // Menggunakan id_pakaian untuk menghapus

// menghapus data dari database
mysqli_query($koneksi, "DELETE FROM pelanggan WHERE id_pelanggan='$id_pelanggan'");
mysqli_query($koneksi, "DELETE FROM pembelian WHERE id_pembelian='$id_pembelian'");
mysqli_query($koneksi, "DELETE FROM transaksi WHERE id_transaksi='$id_transaksi'");

// mengalihkan halaman kembali ke tampil.php setelah penghapusan
header("location:tampil2.php");
