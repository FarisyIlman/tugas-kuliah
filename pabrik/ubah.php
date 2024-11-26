<?php
include 'koneksi.php';

// Cek jika form telah disubmit
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	// Ambil data dari form
	$id_pabrik = $_POST['id_pabrik'];
	$nama_pabrik = $_POST['nama_pabrik'];
	$notlp_pabrik = $_POST['notlp_pabrik'];
	$email_pabrik = $_POST['email_pabrik'];
	$alamat_pabrik = $_POST['alamat_pabrik'];

	// Update data di database
	$query = "UPDATE pabrik SET
              nama_pabrik = '$nama_pabrik',
              notlp_pabrik = '$notlp_pabrik',
              email_pabrik = '$email_pabrik',
              alamat_pabrik = '$alamat_pabrik'
              WHERE id_pabrik = '$id_pabrik'";

	$result = mysqli_query($koneksi, $query);

	if ($result) {
		// Jika berhasil, alihkan kembali ke halaman tampil.php
		header("Location: tampil.php");
		exit();
	} else {
		// Jika terjadi kesalahan
		echo "Terjadi kesalahan: " . mysqli_error($koneksi);
	}
}

// Ambil id_pabrik dari URL untuk menampilkan data pabrik yang akan diubah
$id_pabrik = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM pabrik WHERE id_pabrik='" . mysqli_real_escape_string($koneksi, $id_pabrik) . "'");

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Update Data Pabrik</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	<style>
		body {
			background-color: #f8f9fa;
		}

		.form-container {
			background: #ffffff;
			padding: 2rem;
			border-radius: 8px;
			box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
			margin-top: 2rem;
		}

		h2,
		h3 {
			color: #343a40;
		}
	</style>
</head>

<body>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8 col-lg-6">
				<div class="form-container">
					<h2 class="text-center mb-4">Update Data Pabrik</h2>
					<a href="tampil.php" class="btn btn-secondary mb-3">Kembali</a>

					<h3 class="mb-3">Data Pabrik</h3>

					<?php
					while ($d = mysqli_fetch_array($data)) {
					?>
						<form method="post" action="">
							<input type="hidden" name="id_pabrik" value="<?php echo htmlspecialchars($d['id_pabrik']); ?>">

							<div class="mb-3">
								<label for="nama_pabrik" class="form-label">Nama Pabrik</label>
								<input type="text" class="form-control" id="nama_pabrik" name="nama_pabrik" value="<?php echo htmlspecialchars($d['nama_pabrik']); ?>" required>
							</div>

							<div class="mb-3">
								<label for="notlp_pabrik" class="form-label">No. Telepon Pabrik</label>
								<input type="tel" class="form-control" id="notlp_pabrik" name="notlp_pabrik" value="<?php echo htmlspecialchars($d['notlp_pabrik']); ?>" required>
							</div>

							<div class="mb-3">
								<label for="email_pabrik" class="form-label">Email Pabrik</label>
								<input type="email" class="form-control" id="email_pabrik" name="email_pabrik" value="<?php echo htmlspecialchars($d['email_pabrik']); ?>" required>
							</div>

							<div class="mb-3">
								<label for="alamat_pabrik" class="form-label">Alamat Pabrik</label>
								<textarea class="form-control" id="alamat_pabrik" name="alamat_pabrik" required><?php echo htmlspecialchars($d['alamat_pabrik']); ?></textarea>
							</div>

							<button type="submit" class="btn btn-primary w-100">Simpan</button>
						</form>
					<?php
					}
					?>
				</div>
			</div>
		</div>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2mDnutMOTzE6T37RzHxX6vKdZ5AL1ztP8yD7y6TWRfHp91Fj5Pu" crossorigin="anonymous"></script>
</body>

</html>
