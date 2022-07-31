<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <?php 
      if(!isset($_SESSION['usuarioRestricao'])){
        header("Location:login.php");
        session_start();
      }
    ?>
  </head>
  <body>
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <a href="index.php" class="brand-link">
        <img src= "dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
      </a>
      <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src='<?php echo $_SESSION['usuarioFoto']?>' class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="alterarUsuario.php" class="d-block">
              <?php 
                echo utf8_encode($_SESSION['usuarioNome']);
              ?>
            </a>
          </div>
        </div>
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Sistema
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="usuarios.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Usuários</p>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </nav>
      </div>
    </aside>      
  </body>
</html>


