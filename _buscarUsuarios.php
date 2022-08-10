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
                <td>{$usuario['inclusao']}</td>
                <td>{$usuario['desativacao']}</td>
                <td> 
                    <form method='post' action='src/php/{$funcao}.php'>
                        <input type = 'hidden' name = 'id' value = {$usuario['id']}></input>
                        <button type='submit' class='btn btn-block btn-primary' id='cadastrar'>{$ativo}</button>
                    </form>
                </td>
            </tr>
        "); 
    };
?>