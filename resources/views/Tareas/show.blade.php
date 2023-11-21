<!DOCTYPE html>
<html lang="en">
<head>
    <title>TicketSis · Tareas</title>
    @include('Componentes.Meta.metalinks')
</head>
<body style="background-color:rgb(237, 242, 249, 0.96)">
    @include('Componentes.Navbar.navbar')
<div class="px-5" style="margin-top: 5rem">
    <div class="container-fluid">
        <header>
            <h6 class="text-muted"><em>Tareas</em></h6>
        </header>
         <!-- Hacer todo esto mediante un form con método POST para seguridad --> 
        <div class="box-typical box-typical-padding shadow">
            <div class="card">
                <div class="row">
                    <div class="col">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Agente</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{ $tareas->agente_id }}
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Título</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{ $tareas->titulo }} 
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Descripción</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{ $tareas->descripcion }}
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Estado</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{ $tareas->estado }}
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Creada</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{ $tareas->created_at }}
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Modificada</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{ $tareas->updated_at }} 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Seguimiento</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    Sección para seguimiento de tarea
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Notas</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{ $tareas->notas }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="card-footer text-right">
                    <a href="{{ route('tareas.edit', $tareas->id) }}" type="button" class="btn btn-secondary"><i class="bi bi-pencil-square"></i> Editar</a>
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#confirm"><i class="bi bi-trash"></i> Eliminar</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Conffirm delete modal -->
@foreach ($tareas as $tarea)
<div id="confirm" class="modal fade"  tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    <i class="bi bi-exclamation-triangle-fill" style="font-size: 1.3rem; color:red"></i> 
                    ¿Confirmas que deseas eliminar agente?
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">
                Al eliminar un agente todos los tickets asociados al mismo serán elminados. ¿Deseas continuar?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-danger">Eliminar</button>
            </div>
        </div>
    </div>
</div>
@endforeach
<!-- end confirm delete modal -->
</body>
</html>