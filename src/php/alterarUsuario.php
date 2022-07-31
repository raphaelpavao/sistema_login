<?php
    session_start();
    $usuarioNovaSenha = $_POST['nova_senha'];
    $usuarioConfirmarNovaSenha = $_POST['confirmar_nova_senha'];
    $usuarioId = $_SESSION['usuarioId'];


    echo $usuarioNovaSenha;
    echo $usuarioConfirmarNovaSenha;
    echo $usuarioId;

    if(!($usuarioNovaSenha===$usuarioConfirmarNovaSenha)){
        echo 'senhas erradas';
        $_SESSION['trocaSenha'] = 'Senhas não são idênticas. Tente novamente';
        header("Location:http://localhost/sistemaLogin/alterarUsuario.php");
        exit;
    }

    require_once 'conectarBanco.php';
    $conexaoBanco = conectarBanco();
    $query = "update usuarios set senha = '{$usuarioNovaSenha}' where id = '{$usuarioId}'";
    mysqli_query($conexaoBanco, $query) or die(mysqli_error($conexaoBanco));
    header("Location:http://localhost/sistemaLogin/alterarUsuario.php");
    $_SESSION['trocaSenha'] = 'Senha alterada com sucesso';
?>