<?php
// Include koneksi database
include('koneksi.php');

// Get data dari form
$id_karyawan      = $_POST['id_karyawan'];
$nama_karyawan    = $_POST['nama_karyawan'];
$notlp_karyawan   = $_POST['notlp_karyawan'];
$email_karyawan   = $_POST['email_karyawan'];
$jabatan_karyawan = $_POST['jabatan_karyawan'];

// Query update data ke dalam database berdasarkan ID
$query = "UPDATE karyawan SET 
    nama_karyawan = '$nama_karyawan', 
    notlp_karyawan = '$notlp_karyawan', 
    email_karyawan = '$email_karyawan', 
    jabatan_karyawan = '$jabatan_karyawan' 
    WHERE id_karyawan = '$id_karyawan'";

// Kondisi pengecekan apakah data berhasil diupdate atau tidak
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data Karyawan</title>
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
        <h2 class="text-center">Update Data Karyawan</h2>

        <?php
        if ($koneksi->query($query)) {
            echo '
        <div class="alert alert-success" role="alert">
            Data karyawan berhasil diupdate!
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
            <a href="kar_tampil.php" class="btn btn-primary btn-back">Kembali ke Daftar Karyawan</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>