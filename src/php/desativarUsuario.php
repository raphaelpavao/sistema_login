<?php
    $idUsuario = $_POST['idUsuario'];
    require_once 'conectarBanco.php';
    $conexaoBanco = conectarBanco();
    $query = "update 
                usuarios 
                set 
                    ativo = '0',
                    data_desativacao = CURRENT_TIMESTAMP where id = '{$idUsuario}'";
    mysqli_query($conexaoBanco, $query) or die(mysqli_error($conexaoBanco));
?>