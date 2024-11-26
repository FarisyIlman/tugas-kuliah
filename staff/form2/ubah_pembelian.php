<!DOCTYPE html>
<html>

<head>
    <title>Update Data Pembelian</title>
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

        h2,
        h3 {
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
        input[type="number"] {
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
            <h2>Update Data Pembelian</h2>
            <br />
            <a href="tampil2.php" class="btn-back">KEMBALI</a>

            <h3>Data Pembelian</h3>

            <?php
            include 'koneksi.php';
            $id = $_GET['id'];
            $data = mysqli_query($koneksi, "SELECT * FROM pembelian WHERE id_pembelian='$id'");
            while ($d = mysqli_fetch_array($data)) {
            ?>
                <form method="post" action="updatepembelian.php">
                    <table>
                        <tr>
                            <td>ID Pembelian</td>
                            <td>
                                <input type="hidden" name="id_pembelian" value="<?php echo $d['id_pembelian']; ?>">
                                <input type="text" name="id_pembelian" value="<?php echo $d['id_pembelian']; ?>" readonly>
                            </td>
                        </tr>
                        <tr>
                            <td>Jumlah Pembelian</td>
                            <td><input type="number" name="jumlah_pembelian" value="<?php echo $d['jumlah_pembelian']; ?>"></td>
                        </tr>
                        <tr>
                            <td>Total Pembelian</td>
                            <td><input type="number" name="total_pembelian" value="<?php echo $d['total_pembelian']; ?>"></td>
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