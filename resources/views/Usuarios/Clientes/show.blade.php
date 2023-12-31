<!DOCTYPE html>
<html lang="en">
<head>
    <title>TicketSis · Cliente #{{ $clientes->id}} </title>
    @include('Componentes.Meta.metalinks')
</head>
<body style="background-color:rgb(237, 242, 249, 0.96)">
    @include('Componentes.Navbar.navbar')
<div class="px-5" style="margin-top: 5rem">
    <div class="container-fluid">
        <header>
            <h6 class="text-muted"><em>Cliente</em></h6>
        </header>
        <div class="box-typical box-typical-padding shadow">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <h5 class="mb-0 pl-3 float">Cliente: #{{ $clientes->id }}</h5>
                        <div class="row mx-auto">
                            <h5 class="mb-0">"{{ $clientes->nombre }}"</h5>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Nombre:</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{ $clientes->nombre }}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Email:</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{ $clientes->correo }} 
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Teléfono:</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{ $clientes->telefono }}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Dirección:</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{ $clientes->direccion }}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Municipio:</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{ $clientes->municipio }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Entidad:</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{ $clientes->entidad }}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">RFC:</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{ $clientes->rfc }}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Registro:</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{ $clientes->created_at }}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Modificación:</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{ $clientes->updated_at }}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Empresa:</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{ $clientes->empresa }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-right">
                    <a href="{{ route('clientes.edit', $clientes->id) }}" type="button" class="btn btn-secondary"><i class="bi bi-pencil-square"></i> Editar</a>
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#confirm"><i class="bi bi-trash"></i> Eliminar</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Conffirm delete modal -->
@foreach ($clientes as $cliente)
<div id="confirm" class="modal fade"  tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    <i class="bi bi-exclamation-triangle-fill" style="font-size: 1.3rem; color:red"></i> 
                    ¿Confirmas que deseas eliminar usuario?
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">
                Al eliminar un usuario todos los tickets asociados al mismo serán elminados. ¿Deseas continuar?
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