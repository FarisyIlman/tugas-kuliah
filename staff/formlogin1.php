<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data Pakaian</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #f0f8ff;
        }

        .form-container {
            max-width: 600px;
            margin: 3rem auto;
            background: #ffffff;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
        }

        .form-header {
            margin-bottom: 1.5rem;
            text-align: center;
        }

        .form-label {
            font-weight: 600;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="form-container">
            <h2 class="form-header">Update Data Pakaian</h2>
            <a href="tampil.php" class="btn btn-secondary mb-4">Kembali</a>

    <?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi, "SELECT * FROM pakaian WHERE id_pakaian='$id'");
	while ($d = mysqli_fetch_array($data)) {
	?>
                <form method="post" action="update.php">
                    <input type="hidden" name="id_pakaian" value="<?php echo $d['id_pakaian']; ?>">

                    <div class="mb-3">
                        <label for="nama_pakaian" class="form-label">Nama Pakaian</label>
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
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2mDnutMOTzE6T37RzHxX6vKdZ5AL1ztP8s0zD6V8yD7y6TWRfHp91Fj5Pu" crossorigin="anonymous"></script>
</body>

</html>
