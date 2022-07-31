<?php
    $usuarioNome = $_POST['nome'];
    $usuarioEmail =  $_POST['email'];
    $usuarioRestricao =  $_POST['restricao'];

    require_once 'conectarBanco.php';

    $conexaoBanco = conectarBanco();
    $query = "insert into 
                usuarios 
                (nome,email,restricao)
                values('{$usuarioNome}','{$usuarioEmail}','{$usuarioRestricao}') 
            ";
    mysqli_query($conexaoBanco, $query) or die(mysqli_error($conexaoBanco));
    header("Location:http://localhost/sistemaLogin/usuarios.php");
?>