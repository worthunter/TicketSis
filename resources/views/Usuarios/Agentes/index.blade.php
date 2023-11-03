<!DOCTYPE html>
<html lang="en">
<head>
    <title>TicketSis · Agentes</title>
    @include('Componentes.Meta.metalinks')
</head>
<body style="background-color:rgb(237, 242, 249, 0.96)">
    @include('Componentes.Navbar.navbar')
<!-- Contenido -->
<div class="px-5" style="margin-top: 5rem">
    <div class="container-fluid">
        <header>
            <h6 class="text-muted"><em>Directorio de agentes</em></h6>
        </header>
        <div class="box-typical box-typical-padding shadow">
            <!-- Menu -->
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a data-toggle="modal" data-target="#ModAge" class="nav-link text-muted">Nuevo Agente</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-muted" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Exportar</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">PDF</a>
                        <a class="dropdown-item" href="#">CSV</a>
                        <a class="dropdown-item" href="#">Excel</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Copiar</a>
                    </div>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-muted" data-toggle="dropdown" href="#">Importar</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">CSV</a>
                            <a class="dropdown-item" href="#">Excel</a>
                        </div>
                    </li>
                </li>
                <li>
                    <div class="input-group">
                        <input class="form-control form-control-sm">
                        <div class="input-group-append">
                            <button class="btn btn-outline-primary btn-sm" type="button">Buscar</button>
                        </div>
                    </div>
                </li>
            </ul>
            <!-- Fin Menu -->

            @if ($agentes->isEmpty())
                <div style="text-align: center">No hay registros</div>
            @else
                <table class="table table-responsive table-hover border">
                    <thead>
                        <tr>
                            <th style="width: 4%;">Id</th>
                            <th style="width: 12%;">Nombre</th>
                            <th style="width: 10%;">Depto.</th>
                            <th style="width: 10%;">Correo</th>
                            <th style="width: 10%;">Dirección</th>
                            <th style="width: 10%;">Teléfono</th>
                            <th style="width: 5%;">Creado</th>
                            <th style="width: 4%;">Editar</th>
                            <th style="width: 4%;">Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($agentes as $agente)
                            <tr>
                                <td>{!! $agente->id !!}</td>
                                <td>{!! $agente->nombre !!} {!! $agente->apellido !!}</td>
                                <td>{!! $agente->departamento !!}</td>
                                <td>{!! $agente->correo !!}</td>
                                <td>{!! $agente->direccion !!}</td>
                                <td>{!! $agente->telefono !!}</td>
                                <td>{!! $agente->fecha_crea !!}</td>
                                <td>*</td>
                                <td>*</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
</div>
<!-- Fin del contenido -->  
    @include('Usuarios.Agentes.ModAge')
</body>
</html>