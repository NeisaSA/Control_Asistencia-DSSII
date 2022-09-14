<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="css/all.min.js"></script>
</head>
<body>
  <div class="login-box">
    <div class="login-logo">
      <h1><a href="#"> <center>Admin</center></a></h1>
    </div>
    <div class="login-box-body">
      <p class="login-box-msg"><center>Ingrese datos de Acceso</center> </p>
      <form action="" method="POST" id="frmAcceso" class="col-4 px-5 m-auto">
        <div class="mb-3">
          <input type="text" class="form-control" id="login" name="login" class="from-control">
          <!-- <span class="fa fa-user form-control-feedback"></span> -->
        </div>
        <div class="mb-3">
          <input type="password" class="form-control" id="password" name="password">
          <!-- <span class="fa fa-key form-control-feedback"></span> -->
        </div>
        <div class="mb-3">
        <button type="submit" class="btn btn-primary"><a href="header.php">Ingresar</a></button>
        </div>
      </form>
    </div>
  </div>
</body>
</html>