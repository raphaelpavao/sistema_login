<?php

    $nome        = $_POST['nome'];
    $email       = $_POST['email'];
    $restricao   = $_POST['restricao'];    
    $senha       = password_hash($_POST['senha'], PASSWORD_DEFAULT);

    $conexao = mysqli_connect("localhost","root","MySQL@2022","sistema_login");
    $query = "insert into usuarios (nome,email,restricao,senha) values('{$nome}','{$email}','{$restricao}','{$senha}');";   
    $resultado = mysqli_query($conexao, $query) or die(mysqli_error($conexao));

    header("Location:../../usuarios.php");


?>