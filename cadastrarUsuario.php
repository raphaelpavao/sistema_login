<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <?php 
      require_once 'src/php/validarRestricao.php';
      //colocar o nível de restrição, quando menor, mais restrito.
      $nivelPagina = 1;
      validarRestricao($nivelPagina);
    ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login PHP - Cadastrar Usuário</title>
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
                <h1>Cadastrar Usuário</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item">Página Inicial/Usuários/Cadastrar Usuário</a></li>
                </ol>
              </div>
            </div>
          </div>
        </section>
        <section class="content">
          <form method="post" action="src/php/cadastrarUsuario.php">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-4">
                  <div class="card-body">
                    <label for="nome">Nome</label>
                    <input name = "nome" id ="nome" class="form-control form-control-sm" type="text" placeholder=".form-control-sm">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="card-body">
                    <label for="email">Email</label>
                    <input name = "email" id = "emai" class="form-control form-control-sm" type="text" placeholder=".form-control-sm">
                  </div>
                </div>
                <div class="col-md-4">
                <div class="card-body">
                    <label>Nível de restrição</label>
                    <select name = "restricao" class="form-control form-control-sm" style="width: 100%;">
                      <option selected="selected">1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                      <option>6</option>
                      <option>7</option>
                      <option>8</option>
                      <option>9</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4">
                  <div class="card-footer">
                    <button type="submit" class="btn btn-info" id="cadastrar">Cadastrar</button>
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
