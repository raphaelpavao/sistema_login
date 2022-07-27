<?php
    function buscarUsuarios(){
        require_once 'conectarBanco.php';
    $conexaoBanco = conectarBanco();
    $query = "select * from usuarios";
    $resultado = mysqli_query($conexaoBanco, $query) or die(mysqli_error($conexao));
    while($usuario = mysqli_fetch_assoc($resultado)){
        echo utf8_encode( "
            <tr>
                <td>{$usuario['nome']}</td>
                <td>{$usuario['email']}</td>
                <td>{$usuario['restricao']}</td>
                <td>{$usuario['ativo']}</td>
                <td>{$usuario['data_inclusao']}</td>
                <td>{$usuario['data_desativacao']}</td>
                <td><a href='desativar'>Desativar</a></td>
            </tr>
        "); 
    };
    }        
?>