<?php
// Koneksi ke database
include 'koneksi.php';

// Menangkap data id yang dikirim dari URL
$id_karyawan = $_GET['id'];  // Menggunakan id_karyawan untuk menghapus

// Menghapus data karyawan dari database berdasarkan ID
mysqli_query($koneksi, "DELETE FROM karyawan WHERE id_karyawan='$id_karyawan'");

// Mengalihkan halaman kembali ke tampil_karyawan.php setelah penghapusan
header("location:kar_tampil.php");
