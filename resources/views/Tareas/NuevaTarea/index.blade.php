<!DOCTYPE html>
<html lang="en">
<head>
    <title>TicketSis · Nueva tarea</title>
    <?php require_once("../../Componentes/Meta/metalinks.blade.php"); ?>  <!-- Extensión a los metalinks -->
</head>

<body class="with-side-menu" style="background-color:rgb(237, 242, 249, 0.96)">

    <?php require_once("../../Componentes/Head/head.blade.php"); ?>  <!-- Extensión a header -->
    <?php require_once("../../Componentes/Sidebar/sidebar.blade.php"); ?>  <!-- Extensión a sidebar -->
    <?php require_once("../../Componentes/MainJs/js.blade.php"); ?> <!-- Conf del menu desplegable -->

<!-- Contenido -->
<div class="page-content">
    <div class="container-fluid">
        <header class="section-header">
            <h5>Abrir nueva tarea</h5>
        </header>
        <div class="box-typical box-typical-padding shadow">
            <h5 class="with-border text-muted">Aquí podrás generar nuevas tareas.</h5>
        
            <!-- formulario de registro -->
            <form method="post" id="ticket_form">    
                <fieldset class="form-group">
                    <div class="alert alert-warning">
                        <h4>Asignación de agente</h4>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-6">
                            <label class="col-sm-2 col-form-label semibold" for="nom_usu">Agente</label>
                            <div class="col-sm-10">
                                <input  id="nom_usu" name="nom_usu" class="form-control" placeholder="Nombre de agente">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <button data-toggle="modal" data-target="#ModAge" type="button" class="btn btn-outline-secondary"><i class="bi bi-person-plus-fill"></i>  Nuevo agente</button>
                        </div>
                    </div>
                </fieldset>

                <fieldset class="form-group">
                    <div class="alert alert-warning">
                        <h4>Datos de tarea</h4>
                    </div>

                    <div class="col-lg-6 row">
                        <label class="col-sm-2 col-form-label semibold">Título</label>
                        <div class="col-sm-10">
                            <input class="form-control" placeholder="Título de la tarea">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-lg-12">
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

<!--<?php require_once("../../odAge.blade.php"); ?>    Extensión a modal de agentes -->

</body>
</html>