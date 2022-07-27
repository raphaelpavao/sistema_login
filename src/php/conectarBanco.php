<?php
    function conectarBanco(){
        $conexao = mysqli_connect("localhost","root","","contas_pagar_receber");
        return($conexao);
    }
?>