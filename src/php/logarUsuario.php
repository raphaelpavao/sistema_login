<?php
    require_once 'conectarBanco.php';
    require_once 'validarResultado.php';
    require_once 'obterDadosUsuario.php';

    //recebe email
    $email = $_POST['email'];
    
    //recebe psw
    $psw = $_POST['psw'];
    
    //conecta no canco
    $conexaoBanco = conectarBanco();
    
    //select para encontrar o usuário e execução
    $query = "select * from usuarios where email = '{$email}' and senha = '{$psw}' and ativo =1";
    $resultado = mysqli_query($conexaoBanco, $query) or die(mysqli_error($conexao));

    //formar o usuário
    $validado = validarResultado($resultado);

    if($validado){
        $usuario = obterNivelRestricao($resultado);
        $nivelRestricao = $usuario['restricao'];
        $nomeUsuario = $usuario['nome'];
    }else{
        header("Location:../../login.php");
    };

    session_start();
    $_SESSION['email'] = $email;
    $_SESSION['nivelRestricao'] = $nivelRestricao;
    $_SESSION['nomeUsuario'] = $nomeUsuario;
    header("Location:../../index.php");    
?>