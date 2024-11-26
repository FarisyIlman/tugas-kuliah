<!DOCTYPE html>
<html>

<head>
    <title>Update Data Transaksi</title>
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 800px;
            margin: 50px auto;
        }

        .form-container {
            background: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
        }

        h2, h3 {
            color: #343a40;
        }

        .btn-back {
            background-color: #6c757d;
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 16px;
        }

        .btn-back:hover {
            background-color: #5a6268;
        }

        input[type="text"],
        input[type="number"],
        input[type="date"] {
            width: 100%;
            padding: 8px;
            border-radius: 5px;
            border: 1px solid #ced4da;
            font-size: 16px;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body style="background-color:powderblue;">

    <div class="container">
        <div class="form-container">
            <h2>Update Data Transaksi</h2>
            <br />
            <a href="tampil2.php" class="btn-back">KEMBALI</a>

            <h3>Data Transaksi</h3>

            <?php
            include 'koneksi.php';
            $id = $_GET['id'];
            $data = mysqli_query($koneksi, "SELECT * FROM transaksi WHERE id_transaksi='$id'");
            while ($d = mysqli_fetch_array($data)) {
            ?>
                <form method="post" action="updatetransaksi.php">
                    <table>
                        <tr>
                            <td>ID Transaksi</td>
                            <td>
                                <input type="hidden" name="id_transaksi" value="<?php echo $d['id_transaksi']; ?>">
                                <input type="text" name="id_transaksi" value="<?php echo $d['id_transaksi']; ?>" readonly>
                            </td>
                        </tr>
                        <tr>
                            <td>Tanggal</td>
                            <td><input type="date" name="tanggal" value="<?php echo $d['tanggal']; ?>"></td>
                        </tr>
                        <tr>
                            <td>Total</td>
                            <td><input type="number" name="total" value="<?php echo $d['total']; ?>"></td>
                        </tr>
                        <tr>
                            <td>Status Transaksi</td>
                            <td><input type="text" name="status_transaksi" value="<?php echo $d['status_transaksi']; ?>"></td>
                        </tr>
                        <tr>
                            <td>Jumlah Barang</td>
                            <td><input type="number" name="jumlah_barang" value="<?php echo $d['jumlah_barang']; ?>"></td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td><input type="text" name="alamat" value="<?php echo $d['alamat']; ?>"></td>
                        </tr>
                        <tr>
                            <td>Metode Pembayaran</td>
                            <td><input type="text" name="metode_pembayaran" value="<?php echo $d['metode_pembayaran']; ?>"></td>
                        </tr>
                        <tr>
                            <td>ID Pakaian</td>
                            <td><input type="text" name="id_pakaian" value="<?php echo $d['id_pakaian']; ?>"></td>
                        </tr>
                        <tr>
                            <td>ID Pelanggan</td>
                            <td><input type="text" name="id_pelanggan" value="<?php echo $d['id_pelanggan']; ?>"></td>
                        </tr>
                        <tr>
                            <td>ID Karyawan</td>
                            <td><input type="text" name="id_karyawan" value="<?php echo $d['id_karyawan']; ?>"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="submit" value="SIMPAN"></td>
                        </tr>
                    </table>
                </form>
            <?php
            }
            ?>
        </div>
    </div>

</body>

</html>
