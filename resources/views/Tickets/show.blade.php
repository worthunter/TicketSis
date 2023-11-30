<!DOCTYPE html>
<html lang="en">
<head>
    <title>TicketSis · Ticket #{{ $tickets->id }}</title>
    @include('Componentes.Meta.metalinks')
</head>
<body style="background-color:rgb(237, 242, 249, 0.96)">
    @include('Componentes.Navbar.navbar')
<div class="px-5" style="margin-top: 5rem">
    <div class="container-fluid">
        <header>
            <h6 class="text-muted"><em>Ticket</em></h6>
        </header>
        <div class="box-typical box-typical-padding shadow">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <h5 class="mb-0 pl-3 float">Ticket: #{{ $tickets->id }}</h5>
                        <div class="row mx-auto">
                            <h5 class="mb-0">"{{ $tickets->titulo }}"</h5>
                        </div>
                    </div>
                </div>
                
                @switch( $tickets->categoria_id )
                    @case(1) <!-- ******************** Preventivo ******************** -->
                    <div class="alert alert-warning mb-n1">
                        <h4 class="my-n1 text-center">Detalles de ticket</h4>
                    </div>

                    <div class="row border-bottom">
                        <div class="col">
                            <div class="card-body">
                                <div class="row pb-2">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Estado:</h6>
                                    </div>
                                    <div class="text-secundary my-auto">
                                       Pendiente de arreglar la conexión de éste campo a la BD*****
                                    </div>
                                </div>
                                <div class="row pb-2">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Prioridad:</h6>
                                    </div>
                                    <div class="text-secundary my-auto">
                                        {{ $tickets->prioridad }}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Departamento:</h6>
                                    </div>
                                    <div class="text-secundary my-auto">
                                        {{ $tickets->departamento }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card-body">
                                <div class="row pb-2">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Cliente:</h6>
                                    </div>
                                    <div class="text-secundary my-auto">
                                        {{ $tickets->cliente->nombre }} {{ $tickets->cliente->apellido }}
                                    </div>
                                </div>
                                <div class="row pb-2">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Correo:</h6>
                                    </div>
                                    <div class="text-secundary my-auto">
                                        {{ $tickets->cliente->correo }}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Creado:</h6>
                                    </div>
                                    <div class="text-secundary my-auto">
                                        {{ $tickets->created_at }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row border-bottom">
                        <div class="col">
                            <div class="card-body">
                                <div class="row pb-2">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Agente asignado:</h6>
                                    </div>
                                    <div class="text-secundary my-auto">
                                        {{ $tickets->agente->nombre }} {{ $tickets->agente->apellido }}
                                    </div>
                                </div>
                                <div class="row pb-2">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Estado del ticket:</h6>
                                    </div>
                                    <div class="text-secundary my-auto">
                                        {{ $tickets->estado }}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Fecha de asignación:</h6>
                                    </div>
                                    <div class="text-secundary my-auto">
                                        {{ $tickets->fecha_asig }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card-body">
                                <div class="row pb-2">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Categoría:</h6>
                                    </div>
                                    <div class="text-secundary my-auto">
                                        {{ $tickets->categoria->nombre }}
                                    </div>
                                </div>
                                <div class="row pb-2">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Última modificación:</h6>
                                    </div>
                                    <div class="text-secundary my-auto">
                                        {{ $tickets->vencimiento }}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Vencimiento:</h6>
                                    </div>
                                    <div class="text-secundary my-auto">
                                        {{ $tickets->vencimiento }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="alert alert-warning mb-n1">
                        <h4 class="my-n1 text-center">Datos técnicos</h4>
                    </div>

                    <div class="row border-bottom">
                        <div class="col">
                            <div class="card-body">
                                <div class="row pb-2">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Tipo de equipo:</h6>
                                    </div>
                                    <div class="text-secundary my-auto">
                                        {{ $tickets->prev_tipo }}
                                    </div>
                                </div>
                                <div class="row pb-2">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Marca:</h6>
                                    </div>
                                    <div class="text-secundary my-auto">
                                        {{ $tickets->prev_marca }}
                                    </div>
                                </div>
                                <div class="row pb-2">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Modelo:</h6>
                                    </div>
                                    <div class="text-secundary my-auto">
                                        {{ $tickets->prev_modelo }}
                                    </div>
                                </div>
                                <div class="row pb-2">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Serie:</h6>
                                    </div>
                                    <div class="text-secundary my-auto">
                                        {{ $tickets->prev_serie }}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Garantía:</h6>
                                    </div>
                                    <div class="text-secundary my-auto">
                                        {{ $tickets->garantia }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col border-bottom">
                            <div class="card-body">
                                <div class="row pb-2">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Herramienta o material requerido:</h6>
                                    </div>
                                    <div class="text-secundary my-auto">
                                        {{ $tickets->prev_requiere }}
                                    </div>
                                </div>
                                <div class="row pb-2">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Descripción:</h6>
                                    </div>
                                    <div class="text-secundary my-auto">
                                        {{ $tickets->descripcion }}
                                    </div>
                                </div>
                                <div class="row pb-2">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Notas:</h6>
                                    </div>
                                    <div class="text-secundary my-auto">
                                        {{ $tickets->notas }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        @break

                    @case(2) <!-- ******************** Correctivo -**********************-->
                    <div class="alert alert-warning mb-n1">
                        <h4 class="my-n1 text-center">Detalles de ticket</h4>
                    </div>

                    <div class="row border-bottom">
                        <div class="col">
                            <div class="card-body">
                                <div class="row pb-2">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Estado:</h6>
                                    </div>
                                    <div class="text-secundary my-auto">
                                       Pendiente de arreglar la conexión de éste campo a la BD*****
                                    </div>
                                </div>
                                <div class="row pb-2">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Prioridad:</h6>
                                    </div>
                                    <div class="text-secundary my-auto">
                                        {{ $tickets->prioridad }}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Departamento:</h6>
                                    </div>
                                    <div class="text-secundary my-auto">
                                        {{ $tickets->departamento }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card-body">
                                <div class="row pb-2">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Cliente:</h6>
                                    </div>
                                    <div class="text-secundary my-auto">
                                        {{ $tickets->cliente->nombre }} {{ $tickets->cliente->apellido }}
                                    </div>
                                </div>
                                <div class="row pb-2">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Correo:</h6>
                                    </div>
                                    <div class="text-secundary my-auto">
                                        {{ $tickets->cliente->correo }}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Creado:</h6>
                                    </div>
                                    <div class="text-secundary my-auto">
                                        {{ $tickets->created_at }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row border-bottom">
                        <div class="col">
                            <div class="card-body">
                                <div class="row pb-2">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Agente asignado:</h6>
                                    </div>
                                    <div class="text-secundary my-auto">
                                        {{ $tickets->agente->nombre }} {{ $tickets->agente->apellido }}
                                    </div>
                                </div>
                                <div class="row pb-2">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Estado del ticket:</h6>
                                    </div>
                                    <div class="text-secundary my-auto">
                                        {{ $tickets->estado }}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Fecha de asignación:</h6>
                                    </div>
                                    <div class="text-secundary my-auto">
                                        {{ $tickets->fecha_asig }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card-body">
                                <div class="row pb-2">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Categoría:</h6>
                                    </div>
                                    <div class="text-secundary my-auto">
                                        {{ $tickets->categoria->nombre }}
                                    </div>
                                </div>
                                <div class="row pb-2">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Última modificación:</h6>
                                    </div>
                                    <div class="text-secundary my-auto">
                                        {{ $tickets->updated_at }}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Vencimiento:</h6>
                                    </div>
                                    <div class="text-secundary my-auto">
                                        {{ $tickets->vencimiento }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="alert alert-warning mb-n1">
                        <h4 class="my-n1 text-center">Datos técnicos</h4>
                    </div>

                    <div class="row border-bottom">
                        <div class="col">
                            <div class="card-body">
                                <div class="row pb-2">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Tipo de equipo:</h6>
                                    </div>
                                    <div class="text-secundary my-auto">
                                        {{ $tickets->corr_tipo }}
                                    </div>
                                </div>
                                <div class="row pb-2">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Marca:</h6>
                                    </div>
                                    <div class="text-secundary my-auto">
                                        {{ $tickets->corr_marca }}
                                    </div>
                                </div>
                                <div class="row pb-2">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Modelo:</h6>
                                    </div>
                                    <div class="text-secundary my-auto">
                                        {{ $tickets->corr_modelo }}
                                    </div>
                                </div>
                                <div class="row pb-2">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Serie:</h6>
                                    </div>
                                    <div class="text-secundary my-auto">
                                        {{ $tickets->corr_serie }}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Garantía:</h6>
                                    </div>
                                    <div class="text-secundary my-auto">
                                        {{ $tickets->garantia }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col border-bottom">
                            <div class="card-body">
                                <div class="row pb-2">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Herramienta o material requerido:</h6>
                                    </div>
                                    <div class="text-secundary my-auto">
                                        {{ $tickets->corr_requiere }}
                                    </div>
                                </div>
                                <div class="row pb-2">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Descripción:</h6>
                                    </div>
                                    <div class="text-secundary my-auto">
                                        {{ $tickets->descripcion }}
                                    </div>
                                </div>
                                <div class="row pb-2">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Notas:</h6>
                                    </div>
                                    <div class="text-secundary my-auto">
                                        {{ $tickets->notas }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        @break

                    @case(3) <!-- ******************** Redes ******************** -->
                    <div class="alert alert-warning mb-n1">
                        <h4 class="my-n1 text-center">Detalles de ticket</h4>
                    </div>

                    <div class="row border-bottom">
                        <div class="col">
                            <div class="card-body">
                                <div class="row pb-2">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Estado:</h6>
                                    </div>
                                    <div class="text-secundary my-auto">
                                       Pendiente de arreglar la conexión de éste campo a la BD*****
                                    </div>
                                </div>
                                <div class="row pb-2">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Prioridad:</h6>
                                    </div>
                                    <div class="text-secundary my-auto">
                                        {{ $tickets->prioridad }}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Departamento:</h6>
                                    </div>
                                    <div class="text-secundary my-auto">
                                        {{ $tickets->departamento }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card-body">
                                <div class="row pb-2">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Cliente:</h6>
                                    </div>
                                    <div class="text-secundary my-auto">
                                        {{ $tickets->cliente->nombre }} {{ $tickets->cliente->apellido }}
                                    </div>
                                </div>
                                <div class="row pb-2">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Correo:</h6>
                                    </div>
                                    <div class="text-secundary my-auto">
                                        {{ $tickets->cliente->correo }}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Creado:</h6>
                                    </div>
                                    <div class="text-secundary my-auto">
                                        {{ $tickets->created_at }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row border-bottom">
                        <div class="col">
                            <div class="card-body">
                                <div class="row pb-2">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Agente asignado:</h6>
                                    </div>
                                    <div class="text-secundary my-auto">
                                        {{ $tickets->agente->nombre }} {{ $tickets->agente->apellido }}
                                    </div>
                                </div>
                                <div class="row pb-2">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Estado del ticket:</h6>
                                    </div>
                                    <div class="text-secundary my-auto">
                                        {{ $tickets->estado }}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Fecha de asignación:</h6>
                                    </div>
                                    <div class="text-secundary my-auto">
                                        {{ $tickets->fecha_asig }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card-body">
                                <div class="row pb-2">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Categoría:</h6>
                                    </div>
                                    <div class="text-secundary my-auto">
                                        {{ $tickets->categoria->nombre }}
                                    </div>
                                </div>
                                <div class="row pb-2">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Última modificación:</h6>
                                    </div>
                                    <div class="text-secundary my-auto">
                                        {{ $tickets->vencimiento }}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Vencimiento:</h6>
                                    </div>
                                    <div class="text-secundary my-auto">
                                        {{ $tickets->vencimiento }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="alert alert-warning mb-n1">
                        <h4 class="my-n1 text-center">Datos técnicos</h4>
                    </div>

                    <div class="row border-bottom">
                        <div class="col">
                            <div class="card-body">
                                <div class="row pb-2">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Tipo de servicio:</h6>
                                    </div>
                                    <div class="text-secundary my-auto">
                                        {{ $tickets->red_tipo_servicio }}
                                    </div>
                                </div>
                                <div class="row pb-2">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Número de equipos en la red:</h6>
                                    </div>
                                    <div class="text-secundary my-auto my-auto">
                                        {{ $tickets->red_num_equipos }}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Compañía:</h6>
                                    </div>
                                    <div class="text-secundary my-auto">
                                        {{ $tickets->red_compania }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col border-bottom">
                            <div class="card-body">
                                <div class="row pb-2">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Herramienta o material requerido:</h6>
                                    </div>
                                    <div class="text-secundary my-auto">
                                        {{ $tickets->red_requiere }}
                                    </div>
                                </div>
                                <div class="row pb-2">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Descripción:</h6>
                                    </div>
                                    <div class="text-secundary my-auto">
                                        {{ $tickets->descripcion }}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Notas:</h6>
                                    </div>
                                    <div class="text-secundary my-auto">
                                        {{ $tickets->notas }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        @break
                    @case(4) <!-- ******************** Software ******************** -->
                    <a>opción : Software</a>
                        @break
                    @case(5) <!-- ******************** CAS Brother ******************** -->
                    <a>opción : CAS Brother</a>
                        @break
                @endswitch

                <div class="card-footer text-right">
                    <a href="{{ route('tickets.edit', $tickets->id) }}" type="button" class="btn btn-secondary"><i class="bi bi-pencil-square"></i> Editar</a>
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#confirm"><i class="bi bi-trash"></i> Eliminar</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Conffirm delete modal -->
@foreach ($tickets as $ticket)
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