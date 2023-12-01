<!DOCTYPE html>
<html lang="en">
<head>
    <title>TicketSis · Ticket #{{ $tickets->id }} </title>
    @include('Componentes.Meta.metalinks')
</head>
<body style="background-color:rgb(237, 242, 249, 0.96)">
    @include('Componentes.Navbar.navbar')
<div class="px-5" style="margin-top: 5rem">
    <div class="container-fluid">
        <header>
            <h6 class="text-muted"><em>Editar ticket</em></h6>
        </header>
        <div class="box-typical box-typical-padding shadow">
            <form action="{{ route('tickets.update',$tickets->id) }}" method="post">
                @csrf
                @method('put')
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <h5 class="mb-0 pl-3 float">Ticket: #{{ $tickets->id }}</h5>
                            <div class="row mx-auto">
                                <h5 class="mb-0">"{{ $tickets->titulo }}"</h5>
                            </div>
                        </div>
                    </div>

                    @switch($tickets->categoria_id)
                        @case(1)                            <!-- ******************** Preventivo ******************** -->
                        <div class="alert alert-warning mb-n1">
                            <h4 class="my-n1 text-center">Detalles de ticket</h4>
                        </div>

                        <div class="row border-bottom">
                            <div class="col">
                                <div class="card-body">

                                    <div class="row pb-1 {{ $errors->has('subestados_id') ? ' has-error' : '' }}">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Estatus:</h6>
                                        </div>
                                        <input type="text" name="subestados_id" id="subestados_id" class="form-control form-control-sm col-sm-6" value="{{ $tickets->subestados_id }}">
                                        @if ($errors->has('subestados_id'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('subestados_id') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="row pb-1 {{ $errors->has('prioridad') ? ' has-error' : '' }}">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Prioridad:</h6>
                                        </div>
                                        <input type="text" name="prioridad" id="prioridad" class="form-control form-control-sm col-sm-6" value="{{ $tickets->prioridad }}">
                                        @if ($errors->has('prioridad'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('prioridad') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="row {{ $errors->has('departamento') ? ' has-error' : '' }}">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Departamento:</h6>
                                        </div>
                                        <input type="text" name="departamento" id="departamento" class="form-control form-control-sm col-sm-6" value="{{ $tickets->departamento }}">
                                        @if ($errors->has('departamento'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('departamento') }}</strong>
                                            </span>
                                        @endif
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
                                    <div class="row pb-1">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Agente asignado:</h6>
                                        </div>
                                        <div class="text-secundary my-auto">
                                            {{ $tickets->agente->nombre }} {{ $tickets->agente->apellido }}
                                        </div>
                                    </div>
                                    <div class="row pb-1 {{ $errors->has('estado') ? ' has-error' : '' }}">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Estado del ticket:</h6>
                                        </div>
                                        <input type="text" name="estado" id="estado" class="form-control form-control-sm col-sm-6" value="{{ $tickets->estado }}">
                                        @if ($errors->has('estado'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('estado') }}</strong>
                                            </span>
                                        @endif
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
                                    <div class="row pb-1 {{ $errors->has('categoria') ? ' has-error' : '' }}">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Categoría:</h6>
                                        </div>
                                        <input type="text" name="categoria" id="categoria" class="form-control form-control-sm col-sm-6" value="{{ $tickets->categoria->nombre }}">
                                        @if ($errors->has('categoria'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('categoria') }}</strong> 
                                            </span>
                                        @endif
                                    </div>
                                    <div class="row pb-1">
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
                                    <div class="row pb-1 {{ $errors->has('prev_tipo') ? ' has-error' : '' }}">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Tipo de equipo:</h6>
                                        </div>
                                        <input type="text" name="prev_tipo" id="prev_tipo" class="form-control form-control-sm col-sm-6" value="{{ $tickets->prev_tipo }}">
                                        @if ($errors->has('prev_tipo'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('prev_tipo') }}</strong> 
                                            </span>
                                        @endif
                                    </div>
                                    <div class="row pb-1 {{ $errors->has('prev_marca') ? ' has-error' : '' }}">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Marca:</h6>
                                        </div>
                                        <input type="text" name="prev_marca" id="prev_marca" class="form-control form-control-sm col-sm-6" value="{{ $tickets->prev_marca }}">
                                        @if ($errors->has('prev_marca'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('prev_marca') }}</strong> 
                                            </span>
                                        @endif
                                    </div>
                                    <div class="row pb-1 {{ $errors->has('prev_modelo') ? ' has-error' : '' }}">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Modelo:</h6>
                                        </div>
                                        <input type="text" name="prev_modelo" id="prev_modelo" class="form-control form-control-sm col-sm-6" value="{{ $tickets->prev_modelo }}">
                                        @if ($errors->has('prev_modelo'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('prev_modelo') }}</strong> 
                                            </span>
                                        @endif
                                    </div>
                                    <div class="row pb-1 {{ $errors->has('prev_serie') ? ' has-error' : '' }}">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Serie:</h6>
                                        </div>
                                        <input type="text" name="prev_serie" id="prev_serie" class="form-control form-control-sm col-sm-6" value="{{ $tickets->prev_serie }}">
                                        @if ($errors->has('prev_serie'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('prev_serie') }}</strong> 
                                            </span>
                                        @endif
                                    </div>
                                    <div class="row {{ $errors->has('garantia') ? ' has-error' : '' }}">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Garantía:</h6>
                                        </div>
                                        <input type="text" name="garantia" id="garantia" class="form-control form-control-sm col-sm-6" value="{{ $tickets->garantia }}">
                                        @if ($errors->has('garantia'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('garantia') }}</strong> 
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col border-bottom">
                                <div class="card-body">
                                    <div class="row pb-1 {{ $errors->has('prev_requiere') ? ' has-error' : '' }}">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Herramienta o material requerido:</h6>
                                        </div>
                                        <input type="text" name="prev_requiere" id="prev_requiere" class="form-control form-control-sm col-sm-6" value="{{ $tickets->prev_requiere }}">
                                        @if ($errors->has('prev_requiere'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('prev_requiere') }}</strong> 
                                            </span>
                                        @endif
                                    </div>
                                    <div class="row pb-1 {{ $errors->has('descripcion') ? ' has-error' : '' }}">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Descripción:</h6>
                                        </div>
                                        <input type="text" name="descripcion" id="descripcion" class="form-control form-control-sm col-sm-6" value="{{ $tickets->descripcion }}">
                                        @if ($errors->has('descripcion'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('descripcion') }}</strong> 
                                            </span>
                                        @endif
                                    </div>
                                    <div class="row pb-1 {{ $errors->has('notas') ? ' has-error' : '' }}">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Notas:</h6>
                                        </div>
                                        <input type="text" name="notas" id="notas" class="form-control form-control-sm col-sm-6" value="{{ $tickets->notas }}">
                                        @if ($errors->has('notas'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('notas') }}</strong> 
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                            @break

                        @case(2)                            <!-- ******************** Correctivo ******************** -->
                        <div class="alert alert-warning mb-n1">
                            <h4 class="my-n1 text-center">Detalles de ticket</h4>
                        </div>

                        <div class="row border-bottom">
                            <div class="col">
                                <div class="card-body">

                                    <div class="row pb-1 {{ $errors->has('subestados_id') ? ' has-error' : '' }}">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Estatus:</h6>
                                        </div>
                                        <input type="text" name="subestados_id" id="subestados_id" class="form-control form-control-sm col-sm-6" value="{{ $tickets->subestados_id }}">
                                        @if ($errors->has('subestados_id'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('subestados_id') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="row pb-1 {{ $errors->has('prioridad') ? ' has-error' : '' }}">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Prioridad:</h6>
                                        </div>
                                        <input type="text" name="prioridad" id="prioridad" class="form-control form-control-sm col-sm-6" value="{{ $tickets->prioridad }}">
                                        @if ($errors->has('prioridad'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('prioridad') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="row {{ $errors->has('departamento') ? ' has-error' : '' }}">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Departamento:</h6>
                                        </div>
                                        <input type="text" name="departamento" id="departamento" class="form-control form-control-sm col-sm-6" value="{{ $tickets->departamento }}">
                                        @if ($errors->has('departamento'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('departamento') }}</strong>
                                            </span>
                                        @endif
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
                                    <div class="row pb-1">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Agente asignado:</h6>
                                        </div>
                                        <div class="text-secundary my-auto">
                                            {{ $tickets->agente->nombre }} {{ $tickets->agente->apellido }}
                                        </div>
                                    </div>
                                    <div class="row pb-1 {{ $errors->has('estado') ? ' has-error' : '' }}">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Estado del ticket:</h6>
                                        </div>
                                        <input type="text" name="estado" id="estado" class="form-control form-control-sm col-sm-6" value="{{ $tickets->estado }}">
                                        @if ($errors->has('estado'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('estado') }}</strong>
                                            </span>
                                        @endif
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
                                    <div class="row pb-1 {{ $errors->has('categoria') ? ' has-error' : '' }}">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Categoría:</h6>
                                        </div>
                                        <input type="text" name="categoria" id="categoria" class="form-control form-control-sm col-sm-6" value="{{ $tickets->categoria->nombre }}">
                                        @if ($errors->has('categoria'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('categoria') }}</strong> 
                                            </span>
                                        @endif
                                    </div>
                                    <div class="row pb-1">
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
                                    <div class="row pb-1 {{ $errors->has('corr_tipo') ? ' has-error' : '' }}">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Tipo de equipo:</h6>
                                        </div>
                                        <input type="text" name="corr_tipo" id="corr_tipo" class="form-control form-control-sm col-sm-6" value="{{ $tickets->corr_tipo }}">
                                        @if ($errors->has('corr_tipo'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('corr_tipo') }}</strong> 
                                            </span>
                                        @endif
                                    </div>
                                    <div class="row pb-1 {{ $errors->has('corr_marca') ? ' has-error' : '' }}">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Marca:</h6>
                                        </div>
                                        <input type="text" name="corr_marca" id="corr_marca" class="form-control form-control-sm col-sm-6" value="{{ $tickets->corr_marca }}">
                                        @if ($errors->has('corr_marca'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('corr_marca') }}</strong> 
                                            </span>
                                        @endif
                                    </div>
                                    <div class="row pb-1 {{ $errors->has('corr_modelo') ? ' has-error' : '' }}">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Modelo:</h6>
                                        </div>
                                        <input type="text" name="corr_modelo" id="corr_modelo" class="form-control form-control-sm col-sm-6" value="{{ $tickets->corr_modelo }}">
                                        @if ($errors->has('corr_modelo'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('corr_modelo') }}</strong> 
                                            </span>
                                        @endif
                                    </div>
                                    <div class="row pb-1 {{ $errors->has('corr_serie') ? ' has-error' : '' }}">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Serie:</h6>
                                        </div>
                                        <input type="text" name="corr_serie" id="corr_serie" class="form-control form-control-sm col-sm-6" value="{{ $tickets->corr_serie }}">
                                        @if ($errors->has('corr_serie'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('corr_serie') }}</strong> 
                                            </span>
                                        @endif
                                    </div>
                                    <div class="row {{ $errors->has('garantia') ? ' has-error' : '' }}">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Garantía:</h6>
                                        </div>
                                        <input type="text" name="garantia" id="garantia" class="form-control form-control-sm col-sm-6" value="{{ $tickets->garantia }}">
                                        @if ($errors->has('garantia'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('garantia') }}</strong> 
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col border-bottom">
                                <div class="card-body">
                                    <div class="row pb-1 {{ $errors->has('corr_requiere') ? ' has-error' : '' }}">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Herramienta o material requerido:</h6>
                                        </div>
                                        <input type="text" name="corr_requiere" id="corr_requiere" class="form-control form-control-sm col-sm-6" value="{{ $tickets->corr_requiere }}">
                                        @if ($errors->has('corr_requiere'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('corr_requiere') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="row pb-1 {{ $errors->has('descripcion') ? ' has-error' : '' }}">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Descripción:</h6>
                                        </div>
                                        <input type="text" name="descripcion" id="descripcion" class="form-control form-control-sm col-sm-6" value="{{ $tickets->descripcion }}">
                                        @if ($errors->has('descripcion'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('descripcion') }}</strong> 
                                            </span>
                                        @endif
                                    </div>
                                    <div class="row pb-1 {{ $errors->has('notas') ? ' has-error' : '' }}">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Notas:</h6>
                                        </div>
                                        <input type="text" name="notas" id="notas" class="form-control form-control-sm col-sm-6" value="{{ $tickets->notas }}">
                                        @if ($errors->has('notas'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('notas') }}</strong> 
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                            @break

                        @case(3)                            <!-- ******************** Redes ******************** -->
                        <div class="alert alert-warning mb-n1">
                            <h4 class="my-n1 text-center">Detalles de ticket</h4>
                        </div>

                        <div class="row border-bottom">
                            <div class="col">
                                <div class="card-body">

                                    <div class="row pb-1 {{ $errors->has('subestados_id') ? ' has-error' : '' }}">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Estatus:</h6>
                                        </div>
                                        <input type="text" name="subestados_id" id="subestados_id" class="form-control form-control-sm col-sm-6" value="{{ $tickets->subestados_id }}">
                                        @if ($errors->has('subestados_id'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('subestados_id') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="row pb-1 {{ $errors->has('prioridad') ? ' has-error' : '' }}">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Prioridad:</h6>
                                        </div>
                                        <input type="text" name="prioridad" id="prioridad" class="form-control form-control-sm col-sm-6" value="{{ $tickets->prioridad }}">
                                        @if ($errors->has('prioridad'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('prioridad') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="row {{ $errors->has('departamento') ? ' has-error' : '' }}">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Departamento:</h6>
                                        </div>
                                        <input type="text" name="departamento" id="departamento" class="form-control form-control-sm col-sm-6" value="{{ $tickets->departamento }}">
                                        @if ($errors->has('departamento'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('departamento') }}</strong>
                                            </span>
                                        @endif
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
                                    <div class="row pb-1">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Agente asignado:</h6>
                                        </div>
                                        <div class="text-secundary my-auto">
                                            {{ $tickets->agente->nombre }} {{ $tickets->agente->apellido }}
                                        </div>
                                    </div>
                                    <div class="row pb-1 {{ $errors->has('estado') ? ' has-error' : '' }}">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Estado del ticket:</h6>
                                        </div>
                                        <input type="text" name="estado" id="estado" class="form-control form-control-sm col-sm-6" value="{{ $tickets->estado }}">
                                        @if ($errors->has('estado'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('estado') }}</strong>
                                            </span>
                                        @endif
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
                                    <div class="row pb-1 {{ $errors->has('categoria') ? ' has-error' : '' }}">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Categoría:</h6>
                                        </div>
                                        <input type="text" name="categoria" id="categoria" class="form-control form-control-sm col-sm-6" value="{{ $tickets->categoria->nombre }}">
                                        @if ($errors->has('categoria'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('categoria') }}</strong> 
                                            </span>
                                        @endif
                                    </div>
                                    <div class="row pb-1">
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
                                    <div class="row pb-1 {{ $errors->has('red_tipo_servicio') ? ' has-error' : '' }}">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Tipo de servicio:</h6>
                                        </div>
                                        <input type="text" name="red_tipo_servicio" id="red_tipo_servicio" class="form-control form-control-sm col-sm-6" value="{{ $tickets->red_tipo_servicio }}">
                                        @if ($errors->has('red_tipo_servicio'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('red_tipo_servicio') }}</strong> 
                                            </span>
                                        @endif
                                    </div>
                                    <div class="row pb-1 {{ $errors->has('red_num_equipos') ? ' has-error' : '' }}">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Número de equipos en la red:</h6>
                                        </div>
                                        <input type="text" name="red_num_equipos" id="red_num_equipos" class="form-control form-control-sm col-sm-6" value="{{ $tickets->red_num_equipos }}">
                                        @if ($errors->has('red_num_equipos'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('red_num_equipos') }}</strong> 
                                            </span>
                                        @endif
                                    </div>
                                    <div class="row pb-1 {{ $errors->has('red_compania') ? ' has-error' : '' }}">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Compañía:</h6>
                                        </div>
                                        <input type="text" name="red_compania" id="red_compania" class="form-control form-control-sm col-sm-6" value="{{ $tickets->red_compania }}">
                                        @if ($errors->has('red_compania'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('red_compania') }}</strong> 
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col border-bottom">
                                <div class="card-body">
                                    <div class="row pb-1 {{ $errors->has('red_requiere') ? ' has-error' : '' }}">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Herramienta o material requerido:</h6>
                                        </div>
                                        <input type="text" name="red_requiere" id="red_requiere" class="form-control form-control-sm col-sm-6" value="{{ $tickets->red_requiere }}">
                                        @if ($errors->has('red_requiere'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('red_requiere') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="row pb-1 {{ $errors->has('descripcion') ? ' has-error' : '' }}">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Descripción:</h6>
                                        </div>
                                        <input type="text" name="descripcion" id="descripcion" class="form-control form-control-sm col-sm-6" value="{{ $tickets->descripcion }}">
                                        @if ($errors->has('descripcion'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('descripcion') }}</strong> 
                                            </span>
                                        @endif
                                    </div>
                                    <div class="row pb-1 {{ $errors->has('notas') ? ' has-error' : '' }}">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Notas:</h6>
                                        </div>
                                        <input type="text" name="notas" id="notas" class="form-control form-control-sm col-sm-6" value="{{ $tickets->notas }}">
                                        @if ($errors->has('notas'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('notas') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                            @break

                        @case(4)                            <!-- ******************** Software ******************** -->
                        <div class="alert alert-warning mb-n1">
                            <h4 class="my-n1 text-center">Detalles de ticket</h4>
                        </div>

                        <div class="row border-bottom">
                            <div class="col">
                                <div class="card-body">

                                    <div class="row pb-1 {{ $errors->has('subestados_id') ? ' has-error' : '' }}">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Estatus:</h6>
                                        </div>
                                        <input type="text" name="subestados_id" id="subestados_id" class="form-control form-control-sm col-sm-6" value="{{ $tickets->subestados_id }}">
                                        @if ($errors->has('subestados_id'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('subestados_id') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="row pb-1 {{ $errors->has('prioridad') ? ' has-error' : '' }}">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Prioridad:</h6>
                                        </div>
                                        <input type="text" name="prioridad" id="prioridad" class="form-control form-control-sm col-sm-6" value="{{ $tickets->prioridad }}">
                                        @if ($errors->has('prioridad'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('prioridad') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="row {{ $errors->has('departamento') ? ' has-error' : '' }}">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Departamento:</h6>
                                        </div>
                                        <input type="text" name="departamento" id="departamento" class="form-control form-control-sm col-sm-6" value="{{ $tickets->departamento }}">
                                        @if ($errors->has('departamento'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('departamento') }}</strong>
                                            </span>
                                        @endif
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
                                    <div class="row pb-1">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Agente asignado:</h6>
                                        </div>
                                        <div class="text-secundary my-auto">
                                            {{ $tickets->agente->nombre }} {{ $tickets->agente->apellido }}
                                        </div>
                                    </div>
                                    <div class="row pb-1 {{ $errors->has('estado') ? ' has-error' : '' }}">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Estado del ticket:</h6>
                                        </div>
                                        <input type="text" name="estado" id="estado" class="form-control form-control-sm col-sm-6" value="{{ $tickets->estado }}">
                                        @if ($errors->has('estado'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('estado') }}</strong>
                                            </span>
                                        @endif
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
                                    <div class="row pb-1 {{ $errors->has('categoria') ? ' has-error' : '' }}">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Categoría:</h6>
                                        </div>
                                        <input type="text" name="categoria" id="categoria" class="form-control form-control-sm col-sm-6" value="{{ $tickets->categoria->nombre }}">
                                        @if ($errors->has('categoria'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('categoria') }}</strong> 
                                            </span>
                                        @endif
                                    </div>
                                    <div class="row pb-1">
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
                                    <div class="row pb-1 {{ $errors->has('soft_tipo_servicio') ? ' has-error' : '' }}">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Tipo de servicio:</h6>
                                        </div>
                                        <input type="text" name="soft_tipo_servicio" id="soft_tipo_servicio" class="form-control form-control-sm col-sm-6" value="{{ $tickets->soft_tipo_servicio }}">
                                        @if ($errors->has('soft_tipo_servicio'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('soft_tipo_servicio') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="row pb-1 {{ $errors->has('soft_nombre') ? ' has-error' : '' }}">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Nombre del software:</h6>
                                        </div>
                                        <input type="text" name="soft_nombre" id="soft_nombre" class="form-control form-control-sm col-sm-6" value="{{ $tickets->soft_nombre }}">
                                        @if ($errors->has('soft_nombre'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('soft_nombre') }}</strong> 
                                            </span>
                                        @endif
                                    </div>
                                    <div class="row pb-1 {{ $errors->has('soft_version') ? ' has-error' : '' }}">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Versión:</h6>
                                        </div>
                                        <input type="text" name="soft_version" id="soft_version" class="form-control form-control-sm col-sm-6" value="{{ $tickets->soft_version }}">
                                        @if ($errors->has('soft_version'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('soft_version') }}</strong> 
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col border-bottom">
                                <div class="card-body">
                                    <div class="row pb-1 {{ $errors->has('soft_requiere') ? ' has-error' : '' }}">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Herramienta o material requerido:</h6>
                                        </div>
                                        <input type="text" name="soft_requiere" id="soft_requiere" class="form-control form-control-sm col-sm-6" value="{{ $tickets->soft_requiere }}">
                                        @if ($errors->has('soft_requiere'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('soft_requiere') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="row pb-1 {{ $errors->has('descripcion') ? ' has-error' : '' }}">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Descripción:</h6>
                                        </div>
                                        <input type="text" name="descripcion" id="descripcion" class="form-control form-control-sm col-sm-6" value="{{ $tickets->descripcion }}">
                                        @if ($errors->has('descripcion'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('descripcion') }}</strong> 
                                            </span>
                                        @endif
                                    </div>
                                    <div class="row pb-1 {{ $errors->has('notas') ? ' has-error' : '' }}">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Notas:</h6>
                                        </div>
                                        <input type="text" name="notas" id="notas" class="form-control form-control-sm col-sm-6" value="{{ $tickets->notas }}">
                                        @if ($errors->has('notas'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('notas') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                            @break

                        @case(5)                            <!-- ******************** CAS Brother ******************** -->
                        <div class="alert alert-warning mb-n1">
                            <h4 class="my-n1 text-center">Detalles de ticket</h4>
                        </div>

                        <div class="row border-bottom">
                            <div class="col">
                                <div class="card-body">

                                    <div class="row pb-1 {{ $errors->has('subestados_id') ? ' has-error' : '' }}">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Estatus:</h6>
                                        </div>
                                        <input type="text" name="subestados_id" id="subestados_id" class="form-control form-control-sm col-sm-6" value="{{ $tickets->subestados_id }}">
                                        @if ($errors->has('subestados_id'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('subestados_id') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="row pb-1 {{ $errors->has('prioridad') ? ' has-error' : '' }}">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Prioridad:</h6>
                                        </div>
                                        <input type="text" name="prioridad" id="prioridad" class="form-control form-control-sm col-sm-6" value="{{ $tickets->prioridad }}">
                                        @if ($errors->has('prioridad'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('prioridad') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="row {{ $errors->has('departamento') ? ' has-error' : '' }}">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Departamento:</h6>
                                        </div>
                                        <input type="text" name="departamento" id="departamento" class="form-control form-control-sm col-sm-6" value="{{ $tickets->departamento }}">
                                        @if ($errors->has('departamento'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('departamento') }}</strong>
                                            </span>
                                        @endif
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
                                    <div class="row pb-1">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Agente asignado:</h6>
                                        </div>
                                        <div class="text-secundary my-auto">
                                            {{ $tickets->agente->nombre }} {{ $tickets->agente->apellido }}
                                        </div>
                                    </div>
                                    <div class="row pb-1 {{ $errors->has('estado') ? ' has-error' : '' }}">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Estado del ticket:</h6>
                                        </div>
                                        <input type="text" name="estado" id="estado" class="form-control form-control-sm col-sm-6" value="{{ $tickets->estado }}">
                                        @if ($errors->has('estado'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('estado') }}</strong>
                                            </span>
                                        @endif
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
                                    <div class="row pb-1 {{ $errors->has('categoria') ? ' has-error' : '' }}">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Categoría:</h6>
                                        </div>
                                        <input type="text" name="categoria" id="categoria" class="form-control form-control-sm col-sm-6" value="{{ $tickets->categoria->nombre }}">
                                        @if ($errors->has('categoria'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('categoria') }}</strong> 
                                            </span>
                                        @endif
                                    </div>
                                    <div class="row pb-1">
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
                                    <div class="row pb-1 {{ $errors->has('cas_caso') ? ' has-error' : '' }}">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Caso:</h6>
                                        </div>
                                        <input type="text" name="cas_caso" id="cas_caso" class="form-control form-control-sm col-sm-6" value="{{ $tickets->cas_caso }}">
                                        @if ($errors->has('cas_caso'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('cas_caso') }}</strong> 
                                            </span>
                                        @endif
                                    </div>
                                    <div class="row pb-1 {{ $errors->has('cas_tipo_servicio') ? ' has-error' : '' }}">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Tipo de servicio:</h6>
                                        </div>
                                        <input type="text" name="cas_tipo_servicio" id="cas_tipo_servicio" class="form-control form-control-sm col-sm-6" value="{{ $tickets->cas_tipo_servicio }}">
                                        @if ($errors->has('cas_tipo_servicio'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('cas_tipo_servicio') }}</strong> 
                                            </span>
                                        @endif
                                    </div>
                                    <div class="row pb-1 {{ $errors->has('cas_categoria') ? ' has-error' : '' }}">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Categoría de producto:</h6>
                                        </div>
                                        <input type="text" name="cas_categoria" id="cas_categoria" class="form-control form-control-sm col-sm-6" value="{{ $tickets->cas_categoria }}">
                                        @if ($errors->has('cas_categoria'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('cas_categoria') }}</strong> 
                                            </span>
                                        @endif
                                    </div>
                                    <div class="row{{ $errors->has('cas_modelo') ? ' has-error' : '' }}">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Modelo:</h6>
                                        </div>
                                        <input type="text" name="cas_modelo" id="cas_modelo" class="form-control form-control-sm col-sm-6" value="{{ $tickets->cas_modelo }}">
                                        @if ($errors->has('cas_modelo'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('cas_modelo') }}</strong> 
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col border-bottom">
                                <div class="card-body">
                                    <div class="row pb-1 {{ $errors->has('cas_serie') ? ' has-error' : '' }}">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Serie:</h6>
                                        </div>
                                        <input type="text" name="cas_serie" id="cas_serie" class="form-control form-control-sm col-sm-6" value="{{ $tickets->cas_serie }}">
                                        @if ($errors->has('cas_serie'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('cas_serie') }}</strong> 
                                            </span>
                                        @endif
                                    </div>
                                    <div class="row pb-1 {{ $errors->has('cas_compra') ? ' has-error' : '' }}">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Fecha de compra:</h6>
                                        </div>
                                        <input type="text" name="cas_compra" id="cas_compra" class="form-control form-control-sm col-sm-6" value="{{ $tickets->cas_compra }}">
                                        @if ($errors->has('cas_compra'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('cas_compra') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="row pb-1 {{ $errors->has('descripcion') ? ' has-error' : '' }}">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Descripción:</h6>
                                        </div>
                                        <input type="text" name="descripcion" id="descripcion" class="form-control form-control-sm col-sm-6" value="{{ $tickets->descripcion }}">
                                        @if ($errors->has('descripcion'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('descripcion') }}</strong> 
                                            </span>
                                        @endif
                                    </div>
                                    <div class="row{{ $errors->has('notas') ? ' has-error' : '' }}">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Notas:</h6>
                                        </div>
                                        <input type="text" name="notas" id="notas" class="form-control form-control-sm col-sm-6" value="{{ $tickets->notas }}">
                                        @if ($errors->has('notas'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('notas') }}</strong> 
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                            @break

                    @endswitch

                    <div class="card-footer text-right">
                        <button type="submit" class="btn btn-success"><i class="bi bi-arrow-repeat"></i> Actualizar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>