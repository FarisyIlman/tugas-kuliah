<!DOCTYPE html>
<html>

<head>
	<title>Tambah Data Transaksi</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	<style>
		table {
			padding: 20px;
		}

		tr,
		th,
		td {
			padding: 10px;
			margin: 20px;
			text-align: center;
		}
	</style>
</head>

<body>
	<br />
	<form method="POST" action="tampil2.php">
		<button type="input" class="btn btn-outline-primary">Tampil</button>
	</form>
	<br />
	<br />
	<h3>Tambah Data Transaksi</h3>
	<div class="mb-3">
		<form method="post" action="inputtransaksi.php">
			<table class="table">
				<tr>
					<td>ID Transaksi</td>
					<td><input class="form-control form-control-lg" type="text" name="id_transaksi"></td>
				</tr>
				<tr>
					<td>Tanggal</td>
					<td><input class="form-control form-control-lg" type="date" name="tanggal"></td>
				</tr>
				<tr>
					<td>Total</td>
					<td><input class="form-control form-control-lg" type="number" name="total"></td>
				</tr>
				<tr>
					<td>Status Transaksi</td>
					<td>
						<select class="form-control form-control-lg" name="status_transaksi">
							<option value="Selesai">Selesai</option>
							<option value="Proses">Proses</option>
							<option value="Cancel">Cancel</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Jumlah Barang</td>
					<td><input class="form-control form-control-lg" type="number" name="jumlah_barang"></td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td><input class="form-control form-control-lg" type="text" name="alamat"></td>
				</tr>
				<tr>
					<td>Metode Pembayaran</td>
					<td><input class="form-control form-control-lg" type="text" name="metode_pembayaran"></td>
				</tr>
				<tr>
					<td>ID Pakaian</td>
					<td><input class="form-control form-control-lg" type="text" name="id_pakaian"></td>
				</tr>
				<tr>
					<td>ID Pelanggan</td>
					<td><input class="form-control form-control-lg" type="text" name="id_pelanggan"></td>
				</tr>
				<tr>
					<td>ID Karyawan</td>
					<td><input class="form-control form-control-lg" type="text" name="id_karyawan"></td>
				</tr>
				<tr>
					<td colspan=3>
						<button type="input" class="btn btn-outline-primary">Simpan</button>
					</td>
				</tr>
			</table>
		</form>
	</div>
</body>

</html>
