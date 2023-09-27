function init(){
}

$(document).ready(function() {

});

$(document).on("click", "#btnsoporte", function () {

    if ($('#rol_id').val()==1){
        $('#lbltitulo').html("Acceso Soporte");
        $('#btnsoporte').html("Acceso Admin");
        $('#rol_id').val(2);
    }else if ($('#rol_id').val()==2) {
        $('#lbltitulo').html("Acceso Admin");
        $('#btnsoporte').html("Acceso Cliente");
        $('#rol_id').val(3);
    }else if ($('#rol_id').val()==3) {
        $('#lbltitulo').html("Acceso Cliente");
        $('#btnsoporte').html("Acceso Soporte");
        $('#rol_id').val(1);
    }
});

init();