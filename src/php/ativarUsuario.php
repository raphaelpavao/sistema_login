<?php
    $idUsuario = $_POST['idUsuario'];
    require_once 'conectarBanco.php';
    $conexaoBanco = conectarBanco();
    $query = "update usuarios set ativo= '1', data_desativacao = null where id = '{$idUsuario}'";
    mysqli_query($conexaoBanco, $query) or die(mysqli_error($conexaoBanco));
?>