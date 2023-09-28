var tabla;
var id_usuarios = $('#user_idx').val();
var rol_id = $('#rol_idx').val();

function init(){
    $("#ticket_form").on("submit",function(e){
        guardar(e);	
    });

    $("#editar_form").on("submit", "#enviar-editar", function(e){
        guardaryeditar(e);
    });
}

function guardaryeditar(e){
    e.preventDefault();
    var formData = new FormData($("#editar_form")[0]);
    $.ajax({
        url: "../../controller/ticket.php?op=guardaryeditar",
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function(datos){    
            console.log(datos);
            $('#editar_form')[0].reset();
            $("#modaleditar").modal('hide');
            $('#enviar-editar').DataTable().ajax.reload();

            swal({
                title: "PDV Sistemas Integrales",
                text: "Completado.",
                type: "success",
                confirmButtonClass: "btn-success"
            });
        }
    })
}

$.post("../../controller/categoria.php?op=combo",function(data, status){
    $('#cat_id').html(data);
});

$(document).ready(function(){

    $.post("../../controller/ticket.php?op=combo", function (data) {
        $('#usu_asig').html(data);
    });

    if(rol_id==1){
        tabla=$('#ticket_data').dataTable({
            "aProcessing": true,
            "aServerSide": true,
            dom: 'Bfrtip',
            "searching": true,
            lengthChange: false,
            colReorder: true,
            buttons: [		          
                    'copyHtml5',
                    'excelHtml5',
                    'csvHtml5',
                    'pdfHtml5'
                    ],
            "ajax":{
                url: '../../controller/ticket.php?op=listar_por_cli',
                type : "post",
                dataType : "json",	
                data:{ id_usuarios : id_usuarios },						
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
                "sProcessing":     "Procesando...",
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
    } else if(rol_id==2){
        tabla=$('#ticket_data').dataTable({
            "aProcessing": true,
            "aServerSide": true,
            dom: 'Bfrtip',
            "searching": true,
            lengthChange: false,
            colReorder: true,
            buttons: [		          
                    'copyHtml5',
                    'excelHtml5',
                    'csvHtml5',
                    'pdfHtml5'
                    ],
            "ajax":{
                url: '../../controller/ticket.php?op=listar',
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
                "sProcessing":     "Procesando...",
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
    }else if(rol_id==3){
        tabla=$('#ticket_data').dataTable({
            "aProcessing": true,
            "aServerSide": true,
            dom: 'Bfrtip',
            "searching": true,
            lengthChange: false,
            colReorder: true,
            buttons: [		          
                    'copyHtml5',
                    'excelHtml5',
                    'csvHtml5',
                    'pdfHtml5'
                    ],
            "ajax":{
                url: '../../controller/ticket.php?op=listar',
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
                "sProcessing":     "Procesando...",
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

        document.getElementById('btnfiltrarfechas').addEventListener('click', function(){
            var fechaUno = document.getElementById('fechaUno').value;
            var fechaDos = document.getElementById('fechaDos').value;

            var xhr = new XMLHttpRequest();

            xhr.open('POST','../../controller/ticket.php?op=listar', true);
            xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

            xhr.onreadystatechange = function(){
                if(xhr.readyState == 4 && xhr.status == 200){
                    var ticketsfiltrados = JSON.parse(xhr.responseText);
                }
            };

            var datos = 'fechaUno' + encodeURIComponent(fechaUno) + '&fechaDos' + encodeURIComponent(fechaDos);

            xhr.send(datos);
        })

    }
    
});

function ver(ticket_id){
    window.open('http://localhost/PDV_tickets/view/DetallesTicket/?ID='+ticket_id+'');
}

function asignar(ticket_id){
    $.post("../../controller/ticket.php?op=mostrar", {ticket_id:ticket_id}, function (data){
        data = JSON.parse(data);
        $('#ticket_id').val(data.ticket_id);

        $('#mdltitulo').html('Asignar Agente');
        $("#modalasignar").modal('show');
    });
}

function guardar(e){
    e.preventDefault();
	var formData = new FormData($("#ticket_form")[0]);
    $.ajax({
        url: "../../controller/ticket.php?op=asignacion",
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function(datos){
            /* var ticket_id = $('#ticket_id').val();
            $.post("../../controller/email.php?op=ticket_asignado", {ticket_id : ticket_id}, function (data) {

            });

            swal("Correcto!", "Asignado Correctamente", "success"); */

            $("#modalasignar").modal('hide');
            $('#ticket_data').DataTable().ajax.reload();
        }
    });
}

function editar(ticket_id){
    $('#mdltituloeditar').html('Editar Registro');

    $.post("../../controller/ticket.php?op=guardaryeditar", {ticket_id : ticket_id}, function (data) {
        data = JSON.parse(data);

        $('#ticket_id').val(data.ticket_id);
        $('#id_usuarios').val(data.id_usuarios);
        $('#cat_id').val(data.cat_id);
        $('#ticket_titulo').val(data.ticket_titulo);
        $('#garantia').val(data.garantia);
        $('#nom_usu').val(data.nom_usu);
        $('#ape_usu').val(data.ape_usu);
        $('#corre_usu').val(data.corre_usu);
        $('#direccion').val(data.direccion);
        $('#telefono_usu').val(data.telefono_usu);
        $('#entidad').val(data.entidad);
        $('#localidad').val(data.localidad);
        $('#municipio').val(data.municipio);
        $('#ticket_descrip').val(data.ticket_descrip);
    });

    $('#modaleditar').modal('show');
}

function eliminar(ticket_id){
    swal({
        title: "PDV Sistemas Integrales",
        text: "¿Está seguro de eliminar el registro?",
        type: "error",
        showCancelButton: true,
        confirmButtonClass: "btn-danger",
        confirmButtonText: "Si",
        cancelButtonText: "No",
        closeOnConfirm: true
    },
    function(isConfirm) {
        if (isConfirm) {
            $.post("../../controller/ticket.php?op=delete", {ticket_id : ticket_id}, function (data) {
                            
            });

            $('#enviar_editar').DataTable().ajax.reload();

            swal({
                title: "PDV Sistemas Integrales",
                text: "Registro eliminado correctamente.",
                type: "success",
                confirmButtonClass: "btn-success"
            });
        } 
    });
}

init();