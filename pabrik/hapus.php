<?php
// koneksi database
include 'koneksi.php';

// menangkap data id yang di kirim dari url
$id_pabrik = $_GET['id'];  // Menggunakan id_pakaian untuk menghapus

// menghapus data dari database
mysqli_query($koneksi, "DELETE FROM pabrik WHERE id_pabrik='$id_pabrik'");

// mengalihkan halaman kembali ke tampil.php setelah penghapusan
header("location:tampil.php");
