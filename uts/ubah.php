<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Update Data Pakaian</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body style="background-color:powderblue;">
	<h2 class="text-center">Update Data Pakaian</h2>
	<br />
	<a href="tampil.php" class="btn btn-secondary mb-3">KEMBALI</a>
	<h3>Data Pakaian</h3>

	<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi, "SELECT * FROM pakaian WHERE id_pakaian='$id'");
	while ($d = mysqli_fetch_array($data)) {
	?>
		<form method="post" action="update.php" class="border p-4 rounded shadow-sm bg-white">
			<div class="mb-3">
				<label for="nama_pakaian" class="form-label">Nama Pakaian</label>
				<input type="hidden" name="id_pakaian" value="<?php echo $d['id_pakaian']; ?>">
				<input type="text" name="nama_pakaian" class="form-control" value="<?php echo $d['nama_pakaian']; ?>" required>
			</div>
			<div class="mb-3">
				<label for="kategori_pakaian" class="form-label">Kategori Pakaian</label>
				<input type="text" name="kategori_pakaian" class="form-control" value="<?php echo $d['kategori_pakaian']; ?>" required>
			</div>
			<div class="mb-3">
				<label for="bahan" class="form-label">Bahan</label>
				<input type="text" name="bahan" class="form-control" value="<?php echo $d['bahan']; ?>" required>
			</div>
			<div class="mb-3">
				<label for="harga" class="form-label">Harga</label>
				<input type="text" name="harga" class="form-control" value="<?php echo $d['harga']; ?>" required>
			</div>
			<div class="mb-3">
				<label for="stock" class="form-label">Stock</label>
				<input type="text" name="stock" class="form-control" value="<?php echo $d['stock']; ?>" required>
			</div>
			<div class="mb-3">
				<label for="ukuran" class="form-label">Ukuran</label>
				<input type="text" name="ukuran" class="form-control" value="<?php echo $d['ukuran']; ?>" required>
			</div>
			<div class="mb-3">
				<label for="deskripsi" class="form-label">Deskripsi</label>
				<textarea name="deskripsi" class="form-control" rows="3" required><?php echo $d['deskripsi']; ?></textarea>
			</div>
			<button type="submit" class="btn btn-primary w-100">Simpan</button>
		</form>

	<?php
	}
	?>

</body>

</html>