<!DOCTYPE html>
<html lang="en">
<head>
    <title>TicketSis · Agente #{{ $agentes->id}} </title>
    @include('Componentes.Meta.metalinks')
</head>
<body style="background-color:rgb(237, 242, 249, 0.96)">
    @include('Componentes.Navbar.navbar')
<div class="px-5" style="margin-top: 5rem">
    <div class="container-fluid">
        <header>
            <h6 class="text-muted"><em>Agente</em></h6>
        </header>
        <div class="box-typical box-typical-padding shadow">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <h5 class="mb-0 pl-3 float">Agente: #{{ $agentes->id }}</h5>
                        <div class="row mx-auto">
                            <h5 class="mb-0">"{{ $agentes->nombre }}"</h5>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Nombre</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{ $agentes->nombre }}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Email</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{ $agentes->correo }} 
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Teléfono</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{ $agentes->telefono }}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Dirección</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{ $agentes->direccion }}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Municipio</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{ $agentes->municipio }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Entidad</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{ $agentes->entidad }}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">RFC</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{ $agentes->rfc }}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Registro</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{ $agentes->created_at }}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Modificación</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{ $agentes->updated_at }}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Dpto.</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{ $agentes->departamento }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-right">
                    <a href="{{ route('agentes.edit', $agentes->id) }}" type="button" class="btn btn-secondary"><i class="bi bi-pencil-square"></i> Editar</a>
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#confirm"><i class="bi bi-trash"></i> Eliminar</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Conffirm delete modal -->
@foreach ($agentes as $agente)
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