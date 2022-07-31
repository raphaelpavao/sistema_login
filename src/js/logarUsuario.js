function ativarUsuario(idUsuario){
    console.log('passou');
    $.ajax({
        url : " src/php/ativarUsuario.php",
        type : 'post',
        data : {
            idUsuario: idUsuario
        },
        beforeSend : function(){
            $("#resultado").html("ENVIANDO...");
        }
    })
    .done(function(msg){
        buscarUsuarios();
    })
    .fail(function(jqXHR, textStatus, msg){
        alert(msg);
    });
}