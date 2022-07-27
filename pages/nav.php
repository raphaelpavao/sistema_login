<?php 
  if(!isset($_SESSION['nivelRestricao'])){
    header("Location:login.php");
  }
?>

<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button">
        <i class="fas fa-bars"></i>
      </a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="index.php" class="nav-link">Página inicial</a>
    </li>
  </ul>
  <ul class="navbar-nav ml-auto">
    <li class="nav-item">
      <a href="src/php/sair.php" class="nav-link">Sair</a>
    </li>
  </ul>
</nav>