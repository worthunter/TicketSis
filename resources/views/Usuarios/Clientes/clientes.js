var tabla;

function init(){
    $("#usuario_form").on("submit", function(e){
        guardaryeditar(e);
    });
}

function guardaryeditar(e){
    e.preventDefault();
    var formData = new FormData($("#usuario_form")[0]);
    $.ajax({
        url: "../../controller/usuario.php?op=guardaryeditar",
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function(datos){ 
            $('#usuario_form')[0].reset();
            $("#modalmantenimiento").modal('hide');
            $('#usuario_data').DataTable().ajax.reload();

            swal({
                title: "PDV Sistemas Integrales",
                text: "Completado.",
                type: "success",
                confirmButtonClass: "btn-success"
            });
        }
    });
}

$(document).ready(function(){

    tabla=$('#usuario_data').dataTable({
        "aProcessing": true,
        "aServerSide": true,
        dom: 'Bfrtip',
        "searching": true,
        lengthChange: false,
        colReorder: true,
        buttons: [		          
                /*
                'copyHtml5',
                'excelHtml5',   **********Colocar en modal de exportar
                'csvHtml5',
                'pdfHtml5'
                */
                ],
        "ajax":{
            url: '../../controller/usuario.php?op=listar',
            type : "post",
            dataType : "json",					
            error: function(e){
                console.log(e.responseText);	
            }
        },
        "bDestroy": true,
        "responsive": true,
        "bInfo":true,
        "iDisplayLength": 10,
        "autoWidth": false,
        "language": {
            "sProcessing":     "Procesando...",  //********************* Elementos del menú */
            "sLengthMenu":     "Mostrar _MENU_ registros",
            "sZeroRecords":    "No se encontraron resultados",
            "sEmptyTable":     "Ningún dato disponible en esta tabla",
            "sInfo":           "Mostrando un total de _TOTAL_ registros",
            "sInfoEmpty":      "Mostrando un total de 0 registros",
            "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
            "sInfoPostFix":    "",
            "sSearch":         "Buscar:",
            "sUrl":            "",
            "sInfoThousands":  ",",
            "sLoadingRecords": "Cargando...",
            "oPaginate": {
                "sFirst":    "Primero",
                "sLast":     "Último",
                "sNext":     "Siguiente",
                "sPrevious": "Anterior"
            },
            "oAria": {
                "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                "sSortDescending": ": Activar para ordenar la columna de manera descendente"
            }
        }     
    }).DataTable();

});

function editar(id_usuarios){
    $('#mdltitulo').html('Editar Registro');

    $.post("../../controller/usuario.php?op=mostrar", {id_usuarios : id_usuarios}, function (data) {
        data = JSON.parse(data);

        $('#id_usuarios').val(data.id_usuarios);
        $('#nom_usu').val(data.nom_usu);
        $('#ape_usu').val(data.ape_usu);
        $('#correo_usu').val(data.correo_usu);
        $('#contra_usu').val(data.contra_usu);
        $('#direccion').val(data.direccion);
        $('#zona_horaria').val(data.zona_horaria);
        $('#telefono_usu').val(data.telefono_usu);
        $('#whatsapp').val(data.whatsapp);
        $('#extencion').val(data.extencion);
        $('#entidad').val(data.entidad);
        $('#localidad').val(data.localidad);
        $('#municipio').val(data.municipio);
    });

    $('#modalmantenimiento').modal('show');
}

function eliminar(id_usuarios){
    swal({
        title: "PDV Sistemas Integrales",
        text: "Esta seguro de eliminar el registro?",
        type: "error",
        showCancelButton: true,
        confirmButtonClass: "btn-danger",
        confirmButtonText: "Si",
        cancelButtonText: "No",
        closeOnConfirm: false
    },
    function(isConfirm) {
        if (isConfirm) {
            $.post("../../controller/usuario.php?op=eliminar", {id_usuarios : id_usuarios}, function (data) {
                            
            });

            $('#usuario_data').DataTable().ajax.reload();

            swal({
                title: "PDV Sistemas Integrales",
                text: "Registro eliminado correctamente.",
                type: "success",
                confirmButtonClass: "btn-success"
            });
        } 
    });
}

$(document).on("click","#btnnuevo", function(){
    $('#id_usuarios').val('');
    $('#mdltitulo').html('Nuevo Registro');
    $('#usuario_form')[0].reset();
    $('#modalmantenimiento').modal('show');
});

init();