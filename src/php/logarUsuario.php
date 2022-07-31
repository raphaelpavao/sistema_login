<?php
    require_once 'conectarBanco.php';

    //recebe email
    $email = $_POST['email'];
    
    //recebe psw
    $psw = $_POST['psw'];
    
    //conecta no canco
    $conexaoBanco = conectarBanco();
    
    //select para encontrar o usuário e execução da query
    $query = "select * from usuarios where email = '{$email}' and senha = '{$psw}' and ativo =1";
    $resultado = mysqli_query($conexaoBanco, $query) or die(mysqli_error($conexao));
    $usuario = mysqli_fetch_assoc($resultado);
    var_dump($usuario);
   
    //se a query achar uma linha o usuário está validado, se não, redireciona para a página de login
    if($resultado->num_rows>0){    
        $validado = true;
    }else{
        session_start();
        $_SESSION['erroLogin'] = 'Email e/ou Senha invalidos';
        header("Location:../../login.php");
    };    

    session_start();
    $_SESSION['usuarioId'] = $usuario['id'];
    $_SESSION['usuarioEmail'] = $usuario['email'];
    $_SESSION['usuarioRestricao'] = $usuario['restricao'];
    $_SESSION['usuarioNome'] = $usuario['nome'];
    $_SESSION['usuarioFoto'] = $usuario['foto'];
    header("Location:../../index.php");    
?>