<!DOCTYPE html>
<html lang="en">
<head>
    <title>TicketSis · Perfil</title>
    @include('Componentes.Meta.metalinks')
</head>
<body style="background-color:rgb(237, 242, 249, 0.96)">
    @include('Componentes.Navbar.navbar')
<!-- Contenido -->
<div class="px-5" style="margin-top: 5rem">
    <div class="container-fluid">
        <header>
            <h6 class="text-muted"><em>Perfil</em></h6>
        </header>
        <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
                <div class="card shadow">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center text-center">
                            <div class="mt-3">
                                <h4>{{ Auth::user()->name }}</h4>
                                <p class="text-secondary mb-1 pb-1"></p>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="card mt-3 shadow">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                        <h6 class="mb-0">Miembro desde:</h6>
                        <span class="text-secondary">10/12/2019 (fecha_crea)</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                        <h6 class="mb-0">Última modificación:</h6>
                        <span class="text-secondary">05/09/2023 (fecha_mod)</span>
                        </li>
                    </ul>
                </div>
                <hr>
                <div class="card mt-3 shadow">
                    <ul class="list-group list-group-flush"> 
                        <h6 class="pl-3 pt-2 text-center">Actualizar contraseña</h6>
                        <form action="{{ route('password.update') }}" method="post">
                            @csrf
                            @method('put')
                            <div class="">
            
                                <div class="{{ $errors->has('update_password_current_password') ? ' has-error' : ''}}">
                                    <label class="col-sm-12 col-form-label" for="update_password_current_password">Contraseña actual</label>
                                    <div class="col-sm-12">
                                        <input style="border-color: rgba(107, 107, 107, 0.527)" id="update_password_current_password" name="current_password" type="password" class="form-control form-control-sm">
                                    </div>
                                    <div class="col-sm-12">
                                        <x-input-error :messages="$errors->updatePassword->get('current_password')" class="alert-sm alert-warning text-center"/>
                                    </div> 
                                </div>
            
                                <div class="{{ $errors->has('update_password_password') ? ' has-error' : ''}}">
                                    <label class="col-sm-12 col-form-label" for="update_password_password">Nueva contraseña</label>
                                    <div class="col-sm-12">
                                        <input style="border-color: rgba(107, 107, 107, 0.527)" type="password" class="form-control form-control-sm" id="update_password_password" name="password">
                                    </div>
                                    <div class="col-sm-12">
                                    <x-input-error :messages="$errors->updatePassword->get('password')" class="alert-sm alert-warning text-center"/>
                                    </div>
                                </div>
            
                                <div class="{{ $errors->has('update_password_password_confirmation') ? ' has-error' : ''}}">
                                    <label class="col-sm-12 col-form-label" for="update_password_password_confirmation">Confirma contraseña</label>
                                    <div class="col-sm-12">
                                        <input style="border-color: rgba(107, 107, 107, 0.527)" type="password" class="form-control form-control-sm" id="update_password_password_confirmation" name="password_confirmation">
                                    </div>
                                    <div class="col-sm-12">
                                    <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="alert-sm alert-warning text-center"/>
                                    </div>
                                </div>
                            </div>
                            <div class="p-3 text-right">
                                <!--
                                @if ( $errors == false )
                                    <h6 class="alert-sm alert-success float-left px-2 pb-2">Contraseña actualizada</h6>
                                @endif
                                -->
                                <button type="submit" class="btn btn-outline-secondary btn-sm">Actualizar</button>
                            </div>
                        </form>
                    </ul>
                </div>
            </div>

            <div class="col-md-8">
                <div class="card mb-3 shadow">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Nombre completo</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                José María Castañeda Gallardo
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Email</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                ejemplo@ejemplo.com
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Teléfono</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                239 816-9029
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Dirección</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                Bay Area #208, San Francisco, CA
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Municipio</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                San Francisco, CA
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <a role="button" data-toggle="modal" data-target="#ModAct" class="btn btn-outline-secondary"><i class="bi bi-pencil-square"></i> Actualizar contraseña</a>
                            </div>
                            <div class="col-md-6">
                                <button type="button" class="btn btn-outline-secondary float-right"><i class="bi bi-person-lock"></i> Cambiar contraseña</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Fin del contenido -->
@include('Usuarios.Perfil.ModAct')
</body>
</html>