<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Karyawan</title>
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
                    <h3>Tambah Data Karyawan</h3>
                    <!-- Tombol Tampil -->
                    <form method="POST" action="kar_tampil.php" class="mb-3">
                        <button type="submit" class="btn btn-outline-primary w-100">Tampil</button>
                    </form>

                    <!-- Form Tambah Data Karyawan -->
                    <form method="post" action="inputkaryawan.php">
                        <div class="mb-3">
                            <label for="id_karyawan" class="form-label">ID Karyawan</label>
                            <input type="text" class="form-control form-control-lg" id="id_karyawan" name="id_karyawan" required>
                        </div>

                        <div class="mb-3">
                            <label for="nama_karyawan" class="form-label">Nama Karyawan</label>
                            <input type="text" class="form-control form-control-lg" id="nama_karyawan" name="nama_karyawan" required>
                        </div>

                        <div class="mb-3">
                            <label for="notlp_karyawan" class="form-label">No Telepon</label>
                            <input type="text" class="form-control form-control-lg" id="notlp_karyawan" name="notlp_karyawan" required>
                        </div>

                        <div class="mb-3">
                            <label for="email_karyawan" class="form-label">Email</label>
                            <input type="email" class="form-control form-control-lg" id="email_karyawan" name="email_karyawan" required>
                        </div>

                        <div class="mb-3">
                            <label for="jabatan_karyawan" class="form-label">Jabatan</label>
                            <input type="text" class="form-control form-control-lg" id="jabatan_karyawan" name="jabatan_karyawan" required>
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