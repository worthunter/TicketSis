<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ticketsis · Tarea #{{ $tareas->id }}</title>
    @include('Componentes.Meta.metalinks')
</head>
<body style="background-color:rgb(237, 242, 249, 0.96)">
    @include('Componentes.Navbar.navbar')
<div class="px-5" style="margin-top: 5rem">
    <div class="container-fluid">
        <header>
            <h6 class="text-muted"><em>Tarea</em></h6>
        </header>
        <div class="box-typical box-typical-padding shadow">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <h5 class="mb-0 pl-3 float">Tarea: #{{ $tareas->id }}</h5>
                        <div class="row mx-auto">
                            <h5 class="mb-0">"{{ $tareas->titulo }}"</h5>
                        </div>
                    </div>
                </div>

                <div class="row border-bottom">
                    <div class="col">
                        <div class="card-body">
                            <div class="row pb-2">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Título</h6>
                                </div>
                                <div class="text-secondary my-auto">
                                    {{ $tareas->titulo }} 
                                </div>
                            </div>
                            <div class="row pb-2">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Agente</h6>
                                </div>
                                <div class="text-secondary my-auto">
                                    {{ $tareas->agente->nombre }}
                                </div>
                            </div>
                            <div class="row pb-2">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Departamento:</h6>
                                </div>
                                <div class="text-secundary my-auto">
                                    {{ $tareas->departamento->nombre}}
                                </div>
                            </div>
                            <div class="row pb-2">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Descripción:</h6>
                                </div>
                                <div class="text-secundary my-auto">
                                    {{ $tareas->descripcion}}
                                </div>
                            </div>
                            <div class="row pb-2">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Estado:</h6>
                                </div>
                                <div class="text-secundary my-auto">
                                    {{ $tareas->estado}}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Vencimiento:</h6>
                                </div>
                                <div class="text-secundary my-auto">
                                    {{ $tareas->vencimiento}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card-body">
                            <div class="row pb-2">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Creado:</h6>
                                </div>
                                <div class="text-secundary my-auto">
                                    {{ $tareas->created_at }}
                                </div>
                            </div>
                            <div class="row pb-2">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Última modificación:</h6>
                                </div>
                                <div class="text-secundary my-auto">
                                    {{ $tareas->updated_at }}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Notas:</h6>
                                </div>
                                <div class="text-secundary my-auto">
                                    {{ $tareas->notas}}
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
                Al eliminar un agente todos los tareas asociados al mismo serán elminados. ¿Deseas continuar?
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