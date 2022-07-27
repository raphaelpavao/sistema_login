<?php
    function conectarBanco(){
        $conexao = mysqli_connect("localhost","root","","sistema_login");
        return($conexao);
    }
?>