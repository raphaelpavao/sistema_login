<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <?php 
      require_once 'src/php/validarRestricao.php';
      //colocar o nível de restrição, quando menor, mais restrito.
      $nivelPagina = 1;
      validarRestricao($nivelPagina);
      if(!isset($_SESSION['trocaSenha'])){
        $_SESSION['trocaSenha'] = '';
      }
      $mensagem = $_SESSION['trocaSenha'];
      unset( $_SESSION['trocaSenha']);
    ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login PHP - Alterar Usuário</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
  </head>
  <body class="hold-transition sidebar-mini layout-boxed">
    <div class="wrapper">
      <?php
        //Requisição da barra de navegação e do menu lateral
        require_once 'pages/nav.php';
        require_once 'pages/aside.php';
      ?>
      <div class="content-wrapper">
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>Alterar Usuário</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item">Página Inicial/Alterar Usuário</a></li>
                </ol>
              </div>
            </div>
          </div>
        </section>
        <section class="content">
          <form method="post" action="src/php/alterarUsuario.php">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-4">
                  <div class="card-body">
                    <label for="nova_senha">Nova senha</label>
                    <input name = "nova_senha" id ="nova_senha" class="form-control form-control-sm" type="password">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="card-body">
                    <label for="confirmar_nova_senha">Confirmar nova senha</label>
                    <input name = "confirmar_nova_senha" id ="confirmar_nova_senha" class="form-control form-control-sm" type="password">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="card-body">
                    <label for="imagem">Enviar imagem:</label>
                    <input type="file" name="imagem" accept="image/*">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4">
                  <div class="card-footer">
                    <button type="submit" class="btn btn-info" id="cadastrar">Cadastrar</button>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="card-body">
                    <label><?php echo $mensagem; ?></label>                    
                  </div>
                </div>
              </div>
            </div>
        </section>
      </div>
      <?php
        //requisição do footer
        require_once 'pages/footer.php';
      ?>
      <aside class="control-sidebar control-sidebar-dark">
      </aside>
    </div>
    <script src="plugins/jquery/jquery.min.js"></script>
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="dist/js/adminlte.min.js"></script>
  </body>
</html>
