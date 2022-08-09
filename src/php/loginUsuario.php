<?php
    //recebe email
    $email = $_POST['email']; 

    //recebe psw
    $psw = $_POST['psw'];  

    //conecta no canco
    //MySQL@2022
    $conexao = mysqli_connect("localhost","root","MySQL@2022","sistema_login");   

    //select para encontrar o usuário, execução da query e construção de um array associativo
    $query = "select * from usuarios where email = '{$email}' and senha = '{$psw}' and ativo =1";
    $resultado = mysqli_query($conexao, $query) or die(mysqli_error($conexao));
    $usuario = mysqli_fetch_assoc($resultado);

    //se a query achar uma linha o usuário está validado, se não, redireciona para a página de login
    if(!($resultado->num_rows>0)){    
        header('Location: ../../login.php');
        exit;
    };

    //starta a sessão e disponibiliza os dados do usuário
    session_start();
    $_SESSION['usuario'] = $usuario;
    header("Location:../../index.php");    
?>