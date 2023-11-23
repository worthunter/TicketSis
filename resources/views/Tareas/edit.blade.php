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
            <h6 class="text-muted"><em>Editar tarea</em></h6>
        </header>
        <div class="box-typical box-typical-padding shadow">
            <form action="{{ route('tareas.update',$tareas->id) }}" method="post">
                @csrf
                @method('put')
                <div class="card">
                    <div class="row card-body">
                        <div class="col">
                            <div class="form-group{{ $errors->has('agente_id') ? ' has-error' : '' }} form-inline">
                                <div class="col-sm-3">
                                    <label for="agente_id"><h6 class="mb-0"> Agente (Mostrar sin editar)</h6></label>
                                </div>
                                <input type="text" name="agente_id" id="agente_id" class="form-control col-sm-6" value="{{ $tareas->agente->nombre }} {{ $tareas->agente->apellido }}">
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
                                <input type="text" name="titulo" id="titulo" class="form-control col-sm-6" value="{{ $tareas->titulo }}">
                                @if ($errors->has('titulo'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('titulo') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <hr>
                            <div class="form-group{{ $errors->has('descripcion') ? ' has-error' : '' }} form-inline">
                                <div class="col-sm-3">
                                    <label for="descripcion"><h6 class="mb-0"> Descripción</h6></label>
                                </div>
                                <input type="text" name="descripcion" id="descripcion" class="form-control col-sm-6" value="{{ $tareas->descripcion }}"><hr>
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
                                <input type="text" name="estado" id="estado" class="form-control col-sm-6" value="{{ $tareas->estado }}">
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
                                <input type="text" name="notas" id="notas" class="form-control col-sm-6" value="{{ $tareas->notas }}">
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