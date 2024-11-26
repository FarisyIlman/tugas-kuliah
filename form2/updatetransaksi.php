<?php

// Include koneksi database
include('koneksi.php');

// Get data dari form
$id_transaksi         = $_POST['id_transaksi'];
$tanggal              = $_POST['tanggal'];
$total                = $_POST['total'];
$status_transaksi     = $_POST['status_transaksi'];
$jumlah_barang        = $_POST['jumlah_barang'];
$alamat               = $_POST['alamat'];
$metode_pembayaran    = $_POST['metode_pembayaran'];
$id_pakaian           = $_POST['id_pakaian'];
$id_pelanggan         = $_POST['id_pelanggan'];
$id_karyawan          = $_POST['id_karyawan'];

// Query update data ke dalam database berdasarkan ID
$query = "UPDATE transaksi SET 
            tanggal = '$tanggal', 
            total = '$total', 
            status_transaksi = '$status_transaksi', 
            jumlah_barang = '$jumlah_barang', 
            alamat = '$alamat', 
            metode_pembayaran = '$metode_pembayaran', 
            id_pakaian = '$id_pakaian', 
            id_pelanggan = '$id_pelanggan', 
            id_karyawan = '$id_karyawan' 
          WHERE id_transaksi = '$id_transaksi'";

// Kondisi pengecekan apakah data berhasil diupdate atau tidak
if ($koneksi->query($query)) {
    // Redirect ke halaman tampil2.php 
    header("location: tampil2.php");
} else {
    // Pesan error gagal update data
    echo "Data Gagal Diupdate!";
}
