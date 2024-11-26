<html>
<head>
  <title> Form Login </title>
  <!-- CSS only -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
<form method="POST" action="ceklogin.php">
    <div class="mb-3">
      <label>username</label>
      <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="masukan username anda" name="username" required>
    </div>
    <div class="mb-3">
      <label>password</label>
      <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="masukan password anda" name="password" required>
    </div>
    <button type="submit" class="btn btn-outline-success">Login</button>
    <button type="button" class="btn btn-warning">Batal</button>
  </form>
  
<form method="POST" action="ceklogin.php">
  <body class="img js-fullheight" style="background-image: url(images/bg.jpg);">
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">Toko Baju</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="login-wrap p-0">
                        <h3 class="mb-4 text-center">Silahkan Login</h3>
                        <form method="POST" action="ceklogin.php" class="signin-form">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Username" name="username" required>
                            </div>
                            <div class="form-group">
                                <input id="password-field" type="password" class="form-control" placeholder="Password" name="password" required>
                                <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="form-control btn btn-primary submit px-3">Sign In</button>
                            </div>
                            <div class="form-group d-md-flex">
                                <div class="w-50">
                                    <label class="checkbox-wrap checkbox-primary">Remember Me
                                        <input type="checkbox" checked>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </body>
</form>
</html>