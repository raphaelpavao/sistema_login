<?php   
    function validarRestricao($nivelPagina){
        session_start(); 
        if(!isset($_SESSION['nivelRestricao'])){
        header("Location:http://localhost/sistemaLogin/login.php");
    }
    if($_SESSION['nivelRestricao']>$nivelPagina){
        header("Location:http://localhost/sistemaLogin/login.php");
    };
    }
?>