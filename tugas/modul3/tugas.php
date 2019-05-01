<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <title>Form Login</title>
    <?php
    $username = "";
    $password = "";
    if ($username == "Dina" && $password == "123"){
      echo "Login Berhasil";
    }else{
      echo "Login Gagal";

      }
     ?>
  </head>
  <body>
    <div class="container">
      <div class="card col-sm-6">
        <div class="card-header bg-primary text-white text-center">
          <h4>Login Form</h4>
        </div>
        <div class="card-body" id="login-body">
          Username
          <div class="col-sm-12">
            <input type="text" id="username" class="form-control">
          </div>
          Password
          <div class="col-sm-12">
            <input type="password" id="password" class="form-control">
          </div>
        </div>
        <div class="card-footer">
          <button type="button" class="btn btn-primary btn-block"
          onclick="Login();">
            Login
          </button>
        </div>
      </div>
    </div>
  </body>
</html>
