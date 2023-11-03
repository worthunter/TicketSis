<!DOCTYPE html>
<html lang="en">
<head>
    <title>TicketSis · Nueva tarea</title>
    @include('Componentes.Meta.metalinks')
</head>
<body style="background-color:rgb(237, 242, 249, 0.96)">
    @include('Componentes.Navbar.navbar')
    @include('Usuarios.Agentes.ModAge')
<!-- Contenido -->
<div class="px-5" style="margin-top: 5rem">
    <div class="container-fluid">
        <header>
            <h6 class="text-muted"><em>Nueva tarea</em></h6>
        </header>
        <div class="box-typical box-typical-padding shadow overflow-auto" style="width: 100%; height: 590px;">
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
                            <!-- Lista de busqueda con opciones para asignar agente 
                            <div class="form-group">
                                <label class="form-label" for="exampleDataList" >Entidad</label>
                                <input class="form-control" id="exampleDataList" placeholder="Escribe para buscar">
                                <datalist id="datalistOptions">
                                    <option value="San Francisco">San Fco.</option>
                                    <option value="New York">
                                    <option value="Seattle">
                                    <option value="Los Angeles">
                                    <option value="Chicago">
                                </datalist>
                            </div>-->
                        </div>
                        <div class="col-lg-6">
                            <a class="btn btn-secondary btn-sm btn-rounded" role="button" data-toggle="modal" data-target="#ModAge"><i class="bi bi-person-plus-fill"></i> Nuevo agente</a>
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
                            <label class="col-sm-2 col-form-label semibold" for="nom_usu">Depto.</label>
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
</body>
</html>