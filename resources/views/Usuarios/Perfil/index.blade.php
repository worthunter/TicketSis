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
                                <h4>{{ Auth::user()->nombre }}</h4>
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
                        <span class="text-secondary">{{ Auth::user()->created_at }}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                        <h6 class="mb-0">Última modificación:</h6>
                        <span class="text-secondary">{{ Auth::user()->updated_at }}</span>
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
                                <h6 class="mb-0">Email</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ Auth::user()->email }}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Teléfono</h6>
                            </div>
                            <div class="col-sm-9 text-secondary form-inline">
                                {{ Auth::user()->telefono }} 
                                <div class="col-sm-9 text-secondary pl-5">
                                    Extensión: {{ Auth::user()->extension }}
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Dirección</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ Auth::user()->direccion }}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Municipio</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ Auth::user()->municipio }}
                            </div>
                        </div>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Fin del contenido -->
</body>
</html>