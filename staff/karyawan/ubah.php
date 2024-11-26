<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Update Data Karyawan</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body style="background-color:powderblue;">
	<h2 class="text-center">Update Data Karyawan</h2>
	<br />
	<a href="kar_tampil.php" class="btn btn-secondary mb-3">KEMBALI</a>
	<h3>Data Karyawan</h3>

	<?php
	include 'koneksi.php';
	$id_karyawan = $_GET['id'];  // Menggunakan id_karyawan untuk mengambil data
	$data = mysqli_query($koneksi, "SELECT * FROM karyawan WHERE id_karyawan='$id_karyawan'");
	while ($d = mysqli_fetch_array($data)) {
	?>
		<form method="post" action="update.php" class="border p-4 rounded shadow-sm bg-white">
			<div class="mb-3">
				<label for="nama_karyawan" class="form-label">Nama Karyawan</label>
				<input type="hidden" name="id_karyawan" value="<?php echo $d['id_karyawan']; ?>">
				<input type="text" name="nama_karyawan" class="form-control" value="<?php echo $d['nama_karyawan']; ?>" required>
			</div>
			<div class="mb-3">
				<label for="notlp_karyawan" class="form-label">No Telepon</label>
				<input type="text" name="notlp_karyawan" class="form-control" value="<?php echo $d['notlp_karyawan']; ?>" required>
			</div>
			<div class="mb-3">
				<label for="email_karyawan" class="form-label">Email</label>
				<input type="email" name="email_karyawan" class="form-control" value="<?php echo $d['email_karyawan']; ?>" required>
			</div>
			<div class="mb-3">
				<label for="jabatan_karyawan" class="form-label">Jabatan</label>
				<input type="text" name="jabatan_karyawan" class="form-control" value="<?php echo $d['jabatan_karyawan']; ?>" required>
			</div>
			<button type="submit" class="btn btn-primary w-100">Simpan</button>
		</form>

	<?php
	}
	?>

</body>

</html>