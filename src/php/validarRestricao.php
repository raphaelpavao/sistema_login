<?php       
    function validarRestricao($nivelPagina){
        session_start();         
        if($_SESSION['usuarioRestricao']>$nivelPagina){                    
            $_SESSION['usuarioSemRestricao'] = 'Esse usuário não tem acesso para essa página';
            header("Location:http://localhost/sistemaLogin/index.php");
        };

    }    
?>