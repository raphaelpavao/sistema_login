function buscarUsuarios(){
    $.ajax({
        url : " src/php/buscarUsuarios.php",
        type : 'post',
        data : {
        },
        beforeSend : function(){
            $("#resultado").html("ENVIANDO...");
        }
    })
    .done(function(msg){
        $("#resultado").html(msg);
    })
    .fail(function(jqXHR, textStatus, msg){
        alert(msg);
    });
}