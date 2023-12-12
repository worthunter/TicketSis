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
            <h6 class="text-muted"><em>Editar cliente</em></h6>
        </header>
        <div class="box-typical box-typical-padding shadow">
            <form action="{{ route('clientes.update',$clientes->id) }}" method="post">
                @csrf
                @method('put')
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <h5 class="mb-0 pl-3 float">Cliente: #{{ $clientes->id }}</h5>
                            <div class="row mx-auto">
                                <h5 class="mb-0">"{{ $clientes->nombre }}"</h5>
                            </div>
                        </div>
                    </div>
                    <div class="row card-body">
                        <div class="col">
                            <div class="row pb-1 {{ $errors->has('nombre') ? ' has-error' : '' }}">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Nombre:</h6>
                                </div>
                                <input type="text" name="nombre" id="nombre" class="form-control form-control-sm col-sm-7" value="{{ $clientes->nombre }}">
                                @if ($errors->has('nombre'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nombre') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="row pb-1 {{ $errors->has('correo') ? ' has-error' : '' }}">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Email:</h6>
                                </div>
                                <input type="text" name="correo" id="correo" class="form-control form-control-sm col-sm-7" value="{{ $clientes->correo }}">
                                @if ($errors->has('correo'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('correo') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="row pb-1 {{ $errors->has('telefono') ? ' has-error' : '' }}">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Teléfono:</h6>
                                </div>
                                <input type="text" name="telefono" id="telefono" class="form-control form-control-sm col-sm-7" value="{{ $clientes->telefono }}">
                                @if ($errors->has('telefono'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('telefono') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="row pb-1 {{ $errors->has('direccion') ? ' has-error' : '' }}">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Dirección:</h6>
                                </div>
                                <input type="text" name="direccion" id="direccion" class="form-control form-control-sm col-sm-7" value="{{ $clientes->direccion }}">
                                @if ($errors->has('direccion'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('direccion') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="row pb-1 {{ $errors->has('municipio') ? ' has-error' : '' }}">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Municipio:</h6>
                                </div>
                                <input type="text" name="municipio" id="municipio" class="form-control form-control-sm col-sm-7" value="{{ $clientes->municipio }}">
                                @if ($errors->has('municipio'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('municipio') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="col">
                            <div class="row pb-1 {{ $errors->has('entidad') ? ' has-error' : '' }}">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Entidad:</h6>
                                </div>
                                <input type="text" name="entidad" id="entidad" class="form-control form-control-sm col-sm-7" value="{{ $clientes->entidad }}">
                                @if ($errors->has('entidad'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('entidad') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="row pb-1 {{ $errors->has('rfc') ? ' has-error' : '' }}">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">RFC:</h6>
                                </div>
                                <input type="text" name="rfc" id="rfc" class="form-control form-control-sm col-sm-7" value="{{ $clientes->rfc }}">
                                @if ($errors->has('rfc'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('rfc') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="row pb-1">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Registro:</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{ $clientes->created_at }}
                                </div>
                            </div>
                            <div class="row pb-1">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Modificación:</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{ $clientes->updated_at }}
                                </div>
                            </div>
                            <div class="row pb-1 {{ $errors->has('empresa') ? ' has-error' : '' }}">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Empresa:</h6>
                                </div>
                                <input type="text" name="empresa" id="empresa" class="form-control form-control-sm col-sm-7" value="{{ $clientes->empresa }}">
                                @if ($errors->has('empresa'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('empresa') }}</strong>
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