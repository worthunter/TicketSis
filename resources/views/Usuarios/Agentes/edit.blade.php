<!DOCTYPE html>
<html lang="en">
<head>
    <title>TicketSis · Agente</title>
    @include('Componentes.Meta.metalinks')
</head>
<body style="background-color:rgb(237, 242, 249, 0.96)">
    @include('Componentes.Navbar.navbar')
<div class="px-5" style="margin-top: 5rem">
    <div class="container-fluid">
        <header>
            <h6 class="text-muted"><em>Editar agente</em></h6>
        </header>
        <div class="box-typical box-typical-padding shadow">
            <form action="{{ route('agentes.update',$agentes->id) }}" method="post">
                @csrf
                @method('put')
                <div class="card">
                    <div class="row card-body">
                        <div class="col">
                            <div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }} form-inline">
                                <div class="col-sm-3">
                                    <label for="nombre"><h6 class="mb-0"> Nombre</h6></label>
                                </div>
                                <input type="text" name="nombre" id="nombre" class="form-control col-sm-6" value="{{ $agentes->nombre }}">
                                @if ($errors->has('nombre'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nombre') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <hr>
                            <div class="form-group{{ $errors->has('apellido') ? ' has-error' : '' }} form-inline">
                                <div class="col-sm-3">
                                    <label for="apellido"><h6 class="mb-0"> Apellido</h6></label>
                                </div>
                                <input type="text" name="apellido" id="apellido" class="form-control col-sm-6" value="{{ $agentes->apellido }}">
                                @if ($errors->has('apellido'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('apellido') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <hr>
                            <div class="form-group{{ $errors->has('correo') ? ' has-error' : '' }} form-inline">
                                <div class="col-sm-3">
                                    <label for="correo"><h6 class="mb-0"> Email</h6></label>
                                </div>
                                <input type="text" name="correo" id="correo" class="form-control col-sm-6" value="{{ $agentes->correo }}"><hr>
                                @if ($errors->has('correo'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('correo') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <hr>
                            <div class="form-group{{ $errors->has('telefono') ? ' has-error' : '' }} form-inline">
                                <div class="col-sm-3">
                                    <label for="telefono"><h6 class="mb-0"> Teléfono</h6></label>
                                </div>
                                <input type="text" name="telefono" id="telefono" class="form-control col-sm-6" value="{{ $agentes->telefono }}">
                                @if ($errors->has('telefono'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('telefono') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <hr>
                            <div class="form-group{{ $errors->has('direccion') ? ' has-error' : '' }} form-inline">
                                <div class="col-sm-3">
                                    <label for="direccion"><h6 class="mb-0"> Dirección</h6></label>
                                </div>
                                <input type="text" name="direccion" id="direccion" class="form-control col-sm-6" value="{{ $agentes->direccion }}">
                                @if ($errors->has('direccion'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('direccion') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="col">
                            <div class="form-group{{ $errors->has('municipio') ? ' has-error' : '' }} form-inline">
                                <div class="col-sm-3">
                                    <label for="municipio"><h6 class="mb-0"> Municipio</h6></label>
                                </div>
                                <input type="text" name="municipio" id="municipio" class="form-control col-sm-6" value="{{ $agentes->municipio }}">
                                @if ($errors->has('municipio'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('municipio') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <hr>s
                            <div class="form-group{{ $errors->has('entidad') ? ' has-error' : '' }} form-inline">
                                <div class="col-sm-3">
                                    <label for="entidad"><h6 class="mb-0"> Entidad</h6></label>
                                </div>
                                <input type="text" name="entidad" id="entidad" class="form-control col-sm-6" value="{{ $agentes->entidad }}">
                                @if ($errors->has('entidad'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('entidad') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <hr>
                            <div class="form-group{{ $errors->has('rfc') ? ' has-error' : '' }} form-inline">
                                <div class="col-sm-3">
                                    <label for="rfc"><h6 class="mb-0"> RFC</h6></label>
                                </div>
                                <input type="text" name="rfc" id="rfc" class="form-control col-sm-6" value="{{ $agentes->rfc }}">
                                @if ($errors->has('rfc'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('rfc') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <hr>
                            <div class="form-group{{ $errors->has('departamento') ? ' has-error' : '' }} form-inline">
                                <div class="col-sm-3">
                                    <label for="departamento"><h6 class="mb-0"> Dpto.</h6></label>
                                </div>
                                <input type="text" name="departamento" id="departamento" class="form-control col-sm-6" value="{{ $agentes->departamento }}">
                                @if ($errors->has('departamento'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('departamento') }}</strong>
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