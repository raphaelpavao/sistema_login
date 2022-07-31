<?php
    require_once 'conectarBanco.php';
    $conexaoBanco = conectarBanco();
    $query = "select * from usuarios";
    $resultado = mysqli_query($conexaoBanco, $query) or die(mysqli_error($conexao));
    while($usuario = mysqli_fetch_assoc($resultado)){
        $ativo = 'Desativar';
        $funcao = 'desativarUsuario';
        if($usuario['ativo'] == 0){
            $ativo = 'Ativar';
            $funcao = 'ativarUsuario';
        }
        echo utf8_encode( "
            <tr>
                <td>{$usuario['nome']}</td>
                <td>{$usuario['email']}</td>
                <td>{$usuario['restricao']}</td>
                <td>{$usuario['ativo']}</td>
                <td>{$usuario['data_inclusao']}</td>
                <td>{$usuario['data_desativacao']}</td>
                <td><a class ='desativar' onclick = {$funcao}({$usuario['id']})>{$ativo}</a></td>
            </tr>
        "); 
    };
?>