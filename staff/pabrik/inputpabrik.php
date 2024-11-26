<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$id_pabrik = $_POST['id_pabrik'];
$nama_pabrik = $_POST['nama_pabrik'];
$notlp_pabrik = $_POST['notlp_pabrik'];
$email_pabrik = $_POST['email_pabrik'];
$alamat_pabrik = $_POST['alamat_pabrik'];

// menginput data ke database
mysqli_query($koneksi, "INSERT INTO pabrik (id_pabrik, nama_pabrik, notlp_pabrik, email_pabrik, alamat_pabrik) 
                        VALUES ('$id_pabrik', '$nama_pabrik', '$notlp_pabrik', '$email_pabrik', '$alamat_pabrik')");

// mengalihkan halaman kembali ke tampil.php
header("location:tampil.php");
?>
