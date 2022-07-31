<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <?php
      session_start();
      if(!isset($_SESSION['erroLogin'])){
        $_SESSION['erroLogin'] = '';
      }
      $mensagem = $_SESSION['erroLogin'];
      session_destroy();
      unset( $_SESSION );
    ?>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login PHP com AdminLTE 3</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <link rel="stylesheet" href="dist/css/login.css">
  </head>
  <body class="hold-transition sidebar-mini">
    <div class="login">
      <div class="card card-info">
        <div class="card-header">
          <h3 class="card-title">Horizontal Form</h3>
        </div>
        <form class="form-horizontal" id="form" method = "POST" action="src/php/logarUsuario.php">
          <div class="card-body">
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
              <div class="col-sm-10">
                <input name = "email" etype="text" autocomplete="username" class="form-control" id="inputEmail3" placeholder="Email">
              </div>
            </div>
            <div class="form-group row">
              <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
              <div class="col-sm-10">
                <input name = "psw" type="password" autocomplete="current-password" class="form-control" id="inputPassword3" placeholder="Password">
              </div>
            </div>
          </div>
          <div>            
              <label class="col-sm-6 col-form-label"><?php echo $mensagem;?></label>
          </div>
          <div class="card-footer">
            <button type="submit" class="btn btn-info" id="entrar">Entrar</button>
          </div>
        </form>
      </div>
    </div> 
    <script src="plugins/jquery/jquery.min.js"></script>
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
    <script src="dist/js/adminlte.min.js"></script>
    </body>
</html>
