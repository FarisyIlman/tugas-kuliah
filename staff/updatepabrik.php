<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$id_pabrik    = $_POST['id_pabrik'];
$nama_pabrik  = $_POST['nama_pabrik'];
$notlp_pabrik = $_POST['notlp_pabrik'];
$email_pabrik = $_POST['email_pabrik'];
$alamat_pabrik = $_POST['alamat_pabrik'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE pabrik SET nama_pabrik = '$nama_pabrik', notlp_pabrik = '$notlp_pabrik', email_pabrik = '$email_pabrik', alamat_pabrik = '$alamat_pabrik' WHERE id_pabrik = '$id_pabrik'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if ($koneksi->query($query)) {
    //redirect ke halaman tampil.php 
    header("location: tampil.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupdate!";
}
