<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$id_pembelian      = $_POST['id_pembelian'];
$jumlah_pembelian  = $_POST['jumlah_pembelian'];
$total_pembelian   = $_POST['total_pembelian'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE pembelian SET jumlah_pembelian = '$jumlah_pembelian', total_pembelian = '$total_pembelian' WHERE id_pembelian = '$id_pembelian'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if ($koneksi->query($query)) {
    //redirect ke halaman tampil2.php 
    header("location: tampil2.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupdate!";
}
