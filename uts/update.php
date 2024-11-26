<?php
// Include koneksi database
include('koneksi.php');

// Get data dari form
$id_pakaian       = $_POST['id_pakaian'];
$nama_pakaian     = $_POST['nama_pakaian'];
$kategori_pakaian = $_POST['kategori_pakaian'];
$bahan            = $_POST['bahan'];
$harga            = $_POST['harga'];
$stock            = $_POST['stock'];
$ukuran           = $_POST['ukuran'];
$deskripsi        = $_POST['deskripsi'];

// Query update data ke dalam database berdasarkan ID
$query = "UPDATE pakaian SET 
    nama_pakaian = '$nama_pakaian', 
    kategori_pakaian = '$kategori_pakaian', 
    bahan = '$bahan', 
    harga = '$harga', 
    stock = '$stock', 
    ukuran = '$ukuran', 
    deskripsi = '$deskripsi' 
    WHERE id_pakaian = '$id_pakaian'";

// Kondisi pengecekan apakah data berhasil diupdate atau tidak
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data Pakaian</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            margin-top: 50px;
            max-width: 600px;
        }

        .alert {
            margin-top: 20px;
        }

        .btn-back {
            margin-top: 20px;
        }
    </style>
</head>

<body>

    <div class="container">
        <h2 class="text-center">Update Data Pakaian</h2>

        <?php
        if ($koneksi->query($query)) {
            echo '
        <div class="alert alert-success" role="alert">
            Data pakaian berhasil diupdate!
        </div>
        ';
        } else {
            echo '
        <div class="alert alert-danger" role="alert">
            Data gagal diupdate! Silakan coba lagi.
        </div>
        ';
        }
        ?>

        <div class="d-flex justify-content-center">
            <a href="tampil.php" class="btn btn-primary btn-back">Kembali ke Daftar Pakaian</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>