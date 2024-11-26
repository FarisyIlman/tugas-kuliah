<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Pelanggan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .form-container {
            background-color: #ffffff;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
            margin-top: 2rem;
        }

        h3 {
            color: #343a40;
            text-align: center;
            margin-bottom: 1.5rem;
        }
    </style>
</head>

<body style="background-color:powderblue;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="form-container">
                    <h3>Tambah Data Pelanggan</h3>
                    <!-- Tombol Tampil -->
                    <form method="POST" action="tampil2.php" class="mb-3">
                        <button type="submit" class="btn btn-outline-primary w-100">Tampil</button>
                    </form>

                    <!-- Form Tambah Data Pelanggan -->
                    <form method="post" action="inputpelanggan.php">
                        <div class="mb-3">
                            <label for="id_pelanggan" class="form-label">ID Pelanggan</label>
                            <input type="text" class="form-control form-control-lg" id="id_pelanggan" name="id_pelanggan" required>
                        </div>

                        <div class="mb-3">
                            <label for="nama_pelanggan" class="form-label">Nama Pelanggan</label>
                            <input type="text" class="form-control form-control-lg" id="nama_pelanggan" name="nama_pelanggan" required>
                        </div>

                        <div class="mb-3">
                            <label for="notlp_pelanggan" class="form-label">No Telepon</label>
                            <input type="text" class="form-control form-control-lg" id="notlp_pelanggan" name="notlp_pelanggan" required>
                        </div>

                        <div class="mb-3">
                            <label for="alamat_pelanggan" class="form-label">Alamat</label>
                            <textarea class="form-control form-control-lg" id="alamat_pelanggan" name="alamat_pelanggan" rows="3" required></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="email_pelanggan" class="form-label">Email</label>
                            <input type="email" class="form-control form-control-lg" id="email_pelanggan" name="email_pelanggan" required>
                        </div>

                        <button type="submit" class="btn btn-primary w-100">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2mDnutMOTzE6T37RzHxX6vKdZ5AL1ztP8s0zD6V8yD7y6TWRfHp91Fj5Pu" crossorigin="anonymous"></script>
</body>

</html>