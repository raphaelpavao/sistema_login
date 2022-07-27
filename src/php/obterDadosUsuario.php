<?php
    function obterNivelRestricao($resultado){    
        while($usuario = mysqli_fetch_assoc($resultado)){
            return $usuario; 
        }
    }
?>