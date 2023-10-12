<!DOCTYPE html>
<html lang="en">
<head>
    <title>TicketSis · Nuevo ticket</title>
    <?php require_once("../../Componentes/Meta/metalinks.blade.php"); ?>  <!-- Extensión a los metalinks -->
</head>

<body class="with-side-menu" style="background-color:rgb(237, 242, 249, 0.96)">

<?php require_once("../../Componentes/Head/head.blade.php"); ?>  <!-- Extensión a header -->
<?php require_once("../../Componentes/Sidebar/sidebar.blade.php"); ?>  <!-- Extensión a sidebar -->

<!-- Contenido -->
<div class="page-content">
    <div class="container-fluid">
        <header class="section-header">
            <h5>Abrir nuevo ticket</h5>
        </header>
        <div class="box-typical box-typical-padding shadow">
            <h5 class="with-border text-muted">Aquí podrás generar nuevos tickets.</h5>
        
            <!-- formulario de registro -->
            <form method="post" id="ticket_form">    
                <fieldset class="form-group">
                    <div class="alert alert-warning">
                        <h4>Asignación de cliente y agente</h4>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-6">
                            <label class="col-sm-2 col-form-label semibold" for="nom_usu">Cliente</label>
                            <div class="col-sm-10">
                                <input  id="nom_usu" name="nom_usu" class="form-control" placeholder="Nombre de cliente"> <!-- Modificar campos de tabla clientes -->
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <button type="button" class="btn btn-outline-secondary"><i class="bi bi-person-plus-fill"></i>  Nuevo cliente</button>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-6">
                            <label class="col-sm-2 col-form-label semibold" for="nom_usu">Agente</label>
                            <div class="col-sm-10">
                                <input  id="nom_usu" name="nom_usu" class="form-control" placeholder="Nombre de agente"> <!-- Modificar campos de tabla agentes -->
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <button type="button" class="btn btn-outline-secondary"><i class="bi bi-person-plus-fill"></i>  Nuevo agente</button>
                        </div>
                    </div>
                </fieldset>

                <fieldset class="form-group">
                    <div class="alert alert-warning">
                        <h4>Datos de ticket</h4>
                    </div>

                    <div class="form-group row">
                        <div class="col-lg-6">
                            <label class="col-sm-2 col-form-label semibold" for="nom_usu">Departamento</label>
                            <div class="col-sm-10">
                                <div class="input-group">
                                    <select class="custom-select" id="depto">
                                        <option selected>Selecciona una opción</option>
                                        <option value="SoporteTec">Soporte técnico</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-lg-6">
                            <label class="col-sm-2 col-form-label semibold" for="nom_usu">Categoria</label>
                            <div class="col-sm-10">
                                <div class="input-group">
                                    <select class="custom-select" id="categoria" onchange="cambioCat()">
                                        <option selected>Selecciona una opción</option>
                                        <option value="Preventivo">Preventivo</option>
                                        <option value="Correctivo">Correctivo</option>
                                        <option value="Redes">Redes</option>
                                        <option value="Software">Software</option>
                                        <option value="CAS brother">CAS Brother</option>
                                    </select>

                                    <script>                    //Script de formulario dinámico
                                    function cambioCat() {
                                    var option = document.getElementById("categoria").value;
                                    document.getElementById("cat").innerHTML = option;
                                    }
                                    </script>



                                    <!--  // Código de OsTicket de formulario dinámico
                                    <select name="topicId" onchange="javascript:
                                        var data = $(':input[name]', '#dynamic-form').serialize();
                                        $.ajax(
                                        'ajax.php/form/help-topic/' + this.value,
                                        {
                                            data: data,
                                            dataType: 'json',
                                            success: function(json) {
                                            $('#dynamic-form').empty().append(json.html);
                                            $(document.head).append(json.media);
                                            }
                                        });">
                                    -->


                                    <!--  //Código de un blog, potencialmente funcional
                                    La otra solución es que manejes un campo hidden y con la función modifiques el value:

                                    <input type="hidden" value="1" id="unaVez">

                                    function addInput(){
                                    var sel = getElementById('valores');
                                    var unaVez= getElementById('unaVez');
                                        if(sel.options[sel.selectedIndex].text === 'empresa' && unaVez.value == 1){
                                                //código para agregar input
                                                unaVez.value = 0;
                                        }
                                    }
                                    -->

                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Sección para formulario dinámico -->
                    <div class="card border-dark mb-3" style="max-width: 100rem;">
                        <div class="card-header text-center">Seleccionaste: <p id="cat"></p></div>             <!-- Id="cat" es el retorno del valor seleccionado arriba -->
                        <div class="card-body text-dark">
                            <h5 class="card-title">Formulario dinámico</h5>
                            <p class="card-text">Ésta sección cambiará conforme a la selección de la categoría</p>
                        </div>
                    </div>
                    <!-- Fin de formulario dinámico -->

                </fieldset>

                <fieldset class="form-group">
                    <div class="form-group">
                        <div class="alert alert-warning">
                            <h4>Notas</h4>
                        </div>
                        <div class="col-lg-12">
                            <label class="form-label semibold" for="exampleInputPassword1">Descripción</label>
                            <div class="#">
                                <textarea id="#" name="#" class="summernote" name="#"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <label class="form-label semibold" for="fileElem">Documentos adicionales</label>
                            <input type="file" id="fileElem" name="fileElem" class="form-control" multiple>
                        </div>
                    </div>
                </fieldset>

                <fieldset class="form-group">
                    <div class="form-group">
                        <div class="alert alert-warning">
                            <h4>Notas internas</h4>
                        </div>
                        <div class="col-lg-12">
                            <label class="form-label semibold" for="exampleInputPassword1">Descripción</label>
                            <div class="summernote-theme-1">
                                <textarea id="ticket_descrip" name="ticket_descrip" class="summernote" name="name"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <label class="form-label semibold" for="fileElem">Documentos adicionales</label>
                            <input type="file" id="fileElem" name="fileElem" class="form-control" multiple>
                        </div>
                    </div>
                </fieldset>

                <div class="modal-footer">
                    <button type="button" class="btn btn-rounded btn-secondary btn-sm float-none">Cancelar</button>
                    <button type="submit" name="action" id="#" value="add" class="btn btn-rounded btn-success btn-sm">Guardar</button>
                </div>
            </form>
            <!-- Fin de formulario de registro -->
        </div>
    </div>
</div>
<!-- Fin del contenido -->

<?php require_once("../../Componentes/MainJs/js.blade.php"); ?> <!-- Conf del menu desplegable -->

</body>
</html>