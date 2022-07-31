<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <?php 
      require_once 'src/php/validarRestricao.php';
      //colocar o nível de restrição, quando menor, mais restrito.
      $nivelPagina = 99;
      validarRestricao($nivelPagina);
      if(!isset ($_SESSION['usuarioSemRestricao'])){
        $_SESSION['usuarioSemRestricao'] = '';
      }
      $mensagem = $_SESSION['usuarioSemRestricao'];
      unset( $_SESSION['usuarioSemRestricao'] );

    ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login PHP - Index</title>
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
                <h1>
                  Página Inicial
                </h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item">Página Inicial</a></li>
                </ol>
              </div>
            </div>
          </div>
        </section>
        <section class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div>            
                    <label class="col-sm-6 col-form-label"><?php echo $mensagem;?></label>
                  </div>
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
