<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data Pabrik</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body style="background-color:powderblue;">
    <div class="container my-5">
        <h2 class="text-center">Update Data Pabrik</h2>
        <a href="tampil.php" class="btn btn-secondary mb-3">Kembali</a>

        <?php
        include 'koneksi.php';
        $id_pabrik = $_GET['id'];
        $data = mysqli_query($koneksi, "SELECT * FROM pabrik WHERE id_pabrik='$id_pabrik'");
        while ($d = mysqli_fetch_array($data)) {
        ?>
            <form method="post" action="updatepabrik.php" class="border p-4 rounded shadow-sm bg-white">
                <div class="mb-3">
                    <label for="nama_pabrik" class="form-label">Nama Pabrik</label>
                    <input type="hidden" name="id_pabrik" value="<?php echo $d['id_pabrik']; ?>">
                    <input type="text" name="nama_pabrik" class="form-control" value="<?php echo $d['nama_pabrik']; ?>" required>
                </div>
                <div class="mb-3">
                    <label for="notlp_pabrik" class="form-label">No. Telepon</label>
                    <input type="text" name="notlp_pabrik" class="form-control" value="<?php echo $d['notlp_pabrik']; ?>" required>
                </div>
                <div class="mb-3">
                    <label for="email_pabrik" class="form-label">Email</label>
                    <input type="email" name="email_pabrik" class="form-control" value="<?php echo $d['email_pabrik']; ?>" required>
                </div>
                <div class="mb-3">
                    <label for="alamat_pabrik" class="form-label">Alamat</label>
                    <input type="text" name="alamat_pabrik" class="form-control" value="<?php echo $d['alamat_pabrik']; ?>" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Simpan</button>
            </form>
        <?php
        }
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2mDnutMOTzE6T37RzHxX6vKdZ5AL1ztP8s0zD6V8yD7y6TWRfHp91Fj5Pu" crossorigin="anonymous"></script>
</body>

</html>