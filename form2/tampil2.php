<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tampilkan Data Pelanggan</title>
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
    <a class="navbar-brand" href="#">Admin</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="../tampil.php">Pakaian Pabrik </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tampil2.php">Pelanggan Pembelian Transaksi <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../karyawan/kar_tampil.php">karyawan</a>
        </li>
      </ul>
    </div>
  </nav>

  <!-- Tabel Pelanggan -->
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="d-flex justify-content-end mb-2">
          <a href="tambah.php" class="btn btn-primary">Tambah Pelanggan</a>
        </div>

        <div class="table-wrapper">
          <table class="table table-striped table-bordered">
            <thead>
              <tr>
                <th>No</th>
                <th>ID Pelanggan</th>
                <th>Nama Pelanggan</th>
                <th>No Telepon</th>
                <th>Alamat</th>
                <th>Email</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php
              include 'koneksi.php';
              $no = 1;
              $data = mysqli_query($koneksi, "SELECT * FROM pelanggan");
              while ($d = mysqli_fetch_array($data)) {
              ?>
                <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $d['id_pelanggan']; ?></td>
                  <td><?php echo $d['nama_pelanggan']; ?></td>
                  <td><?php echo $d['notlp_pelanggan']; ?></td>
                  <td><?php echo $d['alamat_pelanggan']; ?></td>
                  <td><?php echo $d['email_pelanggan']; ?></td>
                  <td>
                    <a role="button" class="btn btn-info" href="ubah.php?id=<?php echo $d['id_pelanggan']; ?>">UBAH</a>
                    <a role="button" class="btn btn-danger" href="hapus.php?id=<?php echo $d['id_pelanggan']; ?>">HAPUS</a>
                  </td>
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

  <!-- Tabel Pembelian -->
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="d-flex justify-content-end mb-2">
          <a href="tambah_pembelian.php" class="btn btn-primary">Tambah Pembelian</a>
        </div>

        <div class="table-wrapper">
          <table class="table table-striped table-bordered">
            <thead>
              <tr>
                <th>No</th>
                <th>ID Pembelian</th>
                <th>Jumlah Pembelian</th>
                <th>Total Pembelian</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php
              include 'koneksi.php';
              $no = 1;
              $data = mysqli_query($koneksi, "SELECT * FROM pembelian");
              while ($d = mysqli_fetch_array($data)) {
              ?>
                <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $d['id_pembelian']; ?></td>
                  <td><?php echo $d['jumlah_pembelian']; ?></td>
                  <td><?php echo $d['total_pembelian']; ?></td>
                  <td>
                    <a role="button" class="btn btn-info" href="ubah_pembelian.php?id=<?php echo $d['id_pembelian']; ?>">UBAH</a>
                    <a role="button" class="btn btn-danger" href="hapus.php?id=<?php echo $d['id_pembelian']; ?>">HAPUS</a>
                  </td>
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

  <!-- Tabel Transaksi -->
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="d-flex justify-content-end mb-2">
          <a href="tambah_transaksi.php" class="btn btn-primary">Tambah Transaksi</a>
        </div>

        <div class="table-wrapper">
          <table class="table table-striped table-bordered">
            <thead>
              <tr>
                <th>No</th>
                <th>ID Transaksi</th>
                <th>Tanggal</th>
                <th>Total</th>
                <th>Status Transaksi</th>
                <th>Jumlah Barang</th>
                <th>Alamat</th>
                <th>Metode Pembayaran</th>
                <th>ID Pakaian</th>
                <th>ID Pelanggan</th>
                <th>ID Karyawan</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php
              include 'koneksi.php';
              $no = 1;
              $data = mysqli_query($koneksi, "SELECT * FROM transaksi");
              while ($d = mysqli_fetch_array($data)) {
              ?>
                <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $d['id_transaksi']; ?></td>
                  <td><?php echo $d['tanggal']; ?></td>
                  <td><?php echo $d['total']; ?></td>
                  <td><?php echo $d['status_transaksi']; ?></td>
                  <td><?php echo $d['jumlah_barang']; ?></td>
                  <td><?php echo $d['alamat']; ?></td>
                  <td><?php echo $d['metode_pembayaran']; ?></td>
                  <td><?php echo $d['id_pakaian']; ?></td>
                  <td><?php echo $d['id_pelanggan']; ?></td>
                  <td><?php echo $d['id_karyawan']; ?></td>
                  <td>
                    <a role="button" class="btn btn-info" href="ubah_transaksi.php?id=<?php echo $d['id_transaksi']; ?>">UBAH</a>
                    <a role="button" class="btn btn-danger" href="hapus.php?id=<?php echo $d['id_transaksi']; ?>">HAPUS</a>
                  </td>
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

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2mDnutMOTzE6T37RzHxX6vKdZ5AL1ztP8yD7y6TWRfHp91Fj5Pu" crossorigin="anonymous"></script>
</body>

</html>