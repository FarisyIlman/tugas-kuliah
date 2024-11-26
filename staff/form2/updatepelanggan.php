<?php 

// Include koneksi database
include('koneksi.php');

// Get data dari form
$id_pelanggan    = $_POST['id_pelanggan'];
$nama_pelanggan  = $_POST['nama_pelanggan'];
$notlp_pelanggan = $_POST['notlp_pelanggan'];
$alamat_pelanggan = $_POST['alamat_pelanggan'];
$email_pelanggan = $_POST['email_pelanggan'];

// Query update data ke dalam database berdasarkan ID
$query = "UPDATE pelanggan SET 
    nama_pelanggan = '$nama_pelanggan', 
    notlp_pelanggan = '$notlp_pelanggan', 
    alamat_pelanggan = '$alamat_pelanggan', 
    email_pelanggan = '$email_pelanggan' 
    WHERE id_pelanggan = '$id_pelanggan'";

// Kondisi pengecekan apakah data berhasil diupdate atau tidak
if ($koneksi->query($query)) {
    // Redirect ke halaman tampil.php 
    header("location: tampil2.php");
} else {
    // Pesan error gagal update data
    echo "Data Gagal Diupdate!";
}

?>
