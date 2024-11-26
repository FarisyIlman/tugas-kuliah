<!DOCTYPE html>
<html>

<head>
	<title>Update Data Pelanggan</title>
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
			display: inline-block;
			margin-bottom: 20px;
		}

		.btn-back:hover {
			background-color: #5a6268;
		}

		.form-control {
			width: 100%;
			padding: 8px;
			margin: 8px 0;
			border: 1px solid #ced4da;
			border-radius: 5px;
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
		<h2>Update Data Pelanggan</h2>
		<a href="tampil2.php" class="btn-back">KEMBALI</a>

		<div class="form-container">
			<h3>Data Pelanggan</h3>

			<?php
			include 'koneksi.php';
			$id = $_GET['id'];
			$data = mysqli_query($koneksi, "SELECT * FROM pelanggan WHERE id_pelanggan='$id'");
			while ($d = mysqli_fetch_array($data)) {
			?>
				<form method="post" action="updatepelanggan.php">
					<table>
						<tr>
							<td>Nama Pelanggan</td>
							<td>
								<input type="hidden" name="id_pelanggan" value="<?php echo $d['id_pelanggan']; ?>">
								<input type="text" class="form-control" name="nama_pelanggan" value="<?php echo $d['nama_pelanggan']; ?>">
							</td>
						</tr>
						<tr>
							<td>No. Telepon</td>
							<td><input type="text" class="form-control" name="notlp_pelanggan" value="<?php echo $d['notlp_pelanggan']; ?>"></td>
						</tr>
						<tr>
							<td>Alamat</td>
							<td><input type="text" class="form-control" name="alamat_pelanggan" value="<?php echo $d['alamat_pelanggan']; ?>"></td>
						</tr>
						<tr>
							<td>Email</td>
							<td><input type="text" class="form-control" name="email_pelanggan" value="<?php echo $d['email_pelanggan']; ?>"></td>
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