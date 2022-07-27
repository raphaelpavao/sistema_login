<?php
    function validarResultado($resultado){
        if($resultado->num_rows>0){    
            return true;
        }else{
            return false; 
        };
    }
?>