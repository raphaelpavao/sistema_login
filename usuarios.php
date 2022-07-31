<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <?php 
      require_once 'src/php/validarRestricao.php';
      //colocar o nível de restrição, quando menor, mais restrito.
      $nivelPagina = 0;
      validarRestricao($nivelPagina);
    ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login PHP - Usuários</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <link rel="stylesheet" href="dist/css/login.css">
    <script src="https://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="src/js/buscarUsuarios.js"></script>
    <script src="src/js/desativarUsuario.js"></script>
    <script src="src/js/ativarUsuario.js"></script>
  </head>
  <body class="hold-transition sidebar-mini layout-boxed">
    <div class="wrapper">
      <?php
        require_once 'pages/nav.php';
        require_once 'pages/aside.php';
      ?>
      <div class="content-wrapper">
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>
                  Usuários
                </h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item">Página Inicial/Usuários</a></li>
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
                  <div class="card">
                    <div class="card-header">
                      <form class="form-horizontal" id="form" method = "POST" action="cadastrarUsuario.php">
                        <div class="card-footer">
                          <button type="submit" class="btn btn-info" id="entrar">Criar Novo Usuário</button>
                        </div>
                      </form>
                    </div>
                    <div class="card-body">
                      <table id="example1" class="table table-bordered table-striped">
                        <thead>
                          <tr>
                            <th>Nome</th>
                            <th>Email</th>
                            <th>Restriçao</th>
                            <th>Ativo</th>
                            <th>Data de inclusão</th>
                            <th>Data de desativação</th>
                            <th>Ação</th>
                          </tr>
                        </thead>
                        <tbody id="resultado">
                        </tbody>
                      </table>
                      <script>buscarUsuarios();</script>
                    </div>
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
    <script>buscarUsuarios();</script>
    <script src="plugins/jquery/jquery.min.js"></script>
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="dist/js/adminlte.min.js"></script>
    <script src="plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="plugins/jszip/jszip.min.js"></script>
    <script src="plugins/pdfmake/pdfmake.min.js"></script>
    <script src="plugins/pdfmake/vfs_fonts.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <script>
      $(function () {
        $("#example1").DataTable({
          "responsive": true, 
          "lengthChange": true, 
          "autoWidth": true,
          "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      });
    </script>
  </body>
</html>