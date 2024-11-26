<?php  
// koneksi database
include 'koneksi.php';
 
// menangkap data yang dikirim dari form
$id_transaksi = $_POST['id_transaksi'];
$tanggal = $_POST['tanggal'];
$total = $_POST['total'];
$status_transaksi = $_POST['status_transaksi'];
$jumlah_barang = $_POST['jumlah_barang'];
$alamat = $_POST['alamat'];
$metode_pembayaran = $_POST['metode_pembayaran'];
$id_pakaian = $_POST['id_pakaian'];
$id_pelanggan = $_POST['id_pelanggan'];
$id_karyawan = $_POST['id_karyawan'];

// menginput data ke database
mysqli_query($koneksi, "INSERT INTO transaksi VALUES ('$id_transaksi', '$tanggal', '$total', '$status_transaksi', '$jumlah_barang', '$alamat', '$metode_pembayaran', '$id_pakaian', '$id_pelanggan', '$id_karyawan')");
 
// mengalihkan halaman kembali ke tampil.php
header("location:tampil2.php");
?>
