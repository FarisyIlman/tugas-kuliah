<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampilkan Data Karyawan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .table-wrapper {
            overflow-x: auto;
            margin: 20px 0px;
        }
    </style>
</head>

<body style="background-color:powderblue;">

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Staff</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="../tampil.php">Pakaian Pabrik </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/uts/staff/form2/tampil2.php">Pelanggan Pembelian Transaksi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="kar_tampil.php">karyawan <span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- TABEL KARYAWAN -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <div class="table-wrapper">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>ID Karyawan</th>
                                <th>Nama Karyawan</th>
                                <th>No Telepon</th>
                                <th>Email</th>
                                <th>Jabatan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include 'koneksi.php';
                            $no = 1;
                            $data = mysqli_query($koneksi, "SELECT * FROM karyawan");
                            while ($d = mysqli_fetch_array($data)) {
                            ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $d['id_karyawan']; ?></td>
                                    <td><?php echo $d['nama_karyawan']; ?></td>
                                    <td><?php echo $d['notlp_karyawan']; ?></td>
                                    <td><?php echo $d['email_karyawan']; ?></td>
                                    <td><?php echo $d['jabatan_karyawan']; ?></td>
                                    <td></td>
                                </tr>

                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2mDnutMOTzE6T37RzHxX6vKdZ5AL1ztP8s0zD6V8yD7y6TWRfHp91Fj5Pu" crossorigin="anonymous"></script>
</body>

</html>