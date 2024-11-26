<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
        .img {
            background-image: url('images/bg.jpg');
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .login-wrap {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        .field-icon {
            float: right;
            margin-right: 10px;
            margin-top: -30px;
            position: relative;
            cursor: pointer;
            color: #666;
        }
    </style>
</head>
<body>
    <div class="img">
        <div class="login-wrap">
            <h3 class="text-center">Form Login</h3>
            <form method="POST" action="ceklogin.php">
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control form-control-sm" id="username" placeholder="Masukan username anda" name="username" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Masukan password anda" name="password" required>
                    <span class="field-icon"><i class="bi bi-eye-slash" onclick="togglePassword()"></i></span>
                </div>
                <button type="submit" class="btn btn-outline-success w-100 mb-2">Login</button>
                <button type="button" class="btn btn-warning w-100">Batal</button>
            </form>
        </div>
    </div>

    <script>
        function togglePassword() {
            const passwordField = document.getElementById('password');
            const icon = passwordField.nextElementSibling.querySelector('i');
            if (passwordField.type === 'password') {
                passwordField.type = 'text';
                icon.classList.replace('bi-eye-slash', 'bi-eye');
            } else {
                passwordField.type = 'password';
                icon.classList.replace('bi-eye', 'bi-eye-slash');
            }
        }
    </script>
</body>
</html>
