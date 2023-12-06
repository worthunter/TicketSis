<!DOCTYPE html>
<html lang="en">
<head>
    <title>TicketSis · Tarea #{{ $tareas->id }}</title>
    @include('Componentes.Meta.metalinks')
</head>
<body style="background-color:rgb(237, 242, 249, 0.96)">
    @include('Componentes.Navbar.navbar')
<div class="px-5" style="margin-top: 5rem">
    <div class="container-fluid">
        <header>
            <h6 class="text-muted"><em>Editar tarea</em></h6>
        </header>
        <div class="box-typical box-typical-padding shadow">
            <form action="{{ route('tareas.update',$tareas->id) }}" method="post">
                @csrf
                @method('put')
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <h5 class="mb-0 pl-3 float">Tarea: #{{ $tareas->id }}</h5>
                            <div class="row mx-auto">
                                <h5 class="mb-0">"{{ $tareas->titulo }}"</h5>
                            </div>
                        </div>
                    </div>
                    <div class="row card-body">
                        <div class="col">
                            <div class="form-group{{ $errors->has('agente_id') ? ' has-error' : '' }} form-inline">
                                <div class="col-sm-3">
                                    <label for="agente_id"><h6 class="mb-0"> Agente</h6></label>
                                </div>
                                <div class="text-secundary col-sm-3">
                                    {{ $tareas->agente->nombre}} {{ $tareas->agente->apellido}} 
                                </div>
                                <h6 class="my-auto pr-2">Cambiar: </h6>
                                <select style="border-color: rgba(107, 107, 107, 0.527)" class="custom-select custom-select-sm col-sm-3" name="agente_id" id="agente_id" >
                                    <option value="{{ $tareas->agente_id}}">{{ $tareas->agente->nombre }} {{ $tareas->agente->apellido }}</option>
                                    <hr><hr>
                                    <option value="1">Carlos</option>
                                    <option value="2">José</option>
                                    <option value="3">Fernando</option>
                                    <option value="4">Gabriel</option>
                                </select>

                                @if ($errors->has('agente_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('agente_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <hr>
                            <div class="form-group{{ $errors->has('titulo') ? ' has-error' : '' }} form-inline">
                                <div class="col-sm-3">
                                    <label for="titulo"><h6 class="mb-0"> Titulo</h6></label>
                                </div>
                                <input type="text" name="titulo" id="titulo" class="form-control col-sm-7" value="{{ $tareas->titulo }}">
                                @if ($errors->has('titulo'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('titulo') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <hr>

                            <div class="form-group{{ $errors->has('departamento_id') ? ' has-error' : '' }} form-inline">
                                <div class="col-sm-3">
                                    <label for="departamento_id"><h6 class="mb-0"> Departamento</h6></label>
                                </div>
                                <div class="text-secundary my-auto col-sm-3">
                                    {{ $tareas->departamento->nombre}} 
                                </div>
                                <h6 class="pr-2 my-auto">Cambiar: </h6>
                                <select style="border-color: rgba(107, 107, 107, 0.527)" class="custom-select custom-select-sm col-sm-3" name="departamento_id" id="departamento_id">
                                    <option value="{{ $tareas->departamento_id}}">{{ $tareas->departamento->nombre}}</option>
                                    <hr><hr>
                                    <option value="1">Soporte</option>
                                    <option value="6">Desarrollo</option>
                                </select>
                                @if ($errors->has('departamento_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('departamento_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <hr>
                            <div class="form-group{{ $errors->has('descripcion') ? ' has-error' : '' }} form-inline">
                                <div class="col-sm-3">
                                    <label for="descripcion"><h6 class="mb-0"> Descripción</h6></label>
                                </div>
                                <input type="text" name="descripcion" id="descripcion" class="form-control col-sm-7" value="{{ $tareas->descripcion }}"><hr>
                                @if ($errors->has('descripcion'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('descripcion') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <hr>
                            <div class="form-group{{ $errors->has('estado') ? ' has-error' : '' }} form-inline">
                                <div class="col-sm-3">
                                    <label for="estado"><h6 class="mb-0"> Estado</h6></label>
                                </div>
                                <div class="text-secundary my-auto col-sm-3">
                                    {{ $tareas->estado}} 
                                </div>
                                <h6 class="pr-2 my-auto">Cambiar: </h6>
                                <select style="border-color: rgba(107, 107, 107, 0.527)" class="custom-select custom-select-sm col-sm-3" name="estado" id="estado" >
                                    <option value="{{ $tareas->estado}}">{{ $tareas->estado }}</option>
                                    <hr><hr>
                                    <option value="Abierto">Abierto</option>
                                    <option value="Ceerrado">Cerrado</option>
                                </select>
                                @if ($errors->has('estado'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('estado') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="col">
                            <div class="form-group{{ $errors->has('notas') ? ' has-error' : '' }} form-inline">
                                <div class="col-sm-3">
                                    <label for="notas"><h6 class="mb-0"> Notas</h6></label>
                                </div>
                                <input type="text" name="notas" id="notas" class="form-control col-sm-7" value="{{ $tareas->notas }}">
                                @if ($errors->has('notas'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('notas') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>
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