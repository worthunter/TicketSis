<!DOCTYPE html>
<html lang="en">
<head>
    <title>TicketSis · Tareas</title>
    @include('Componentes.Meta.metalinks')
</head>
<body class="" style="background-color:rgb(237, 242, 249, 0.96)">
    @include('Componentes.Navbar.navbar')
<!-- Contenido -->
<div class="px-5" style="margin-top: 5rem">
    <div class="container-fluid">
        <header>
            <h6 class="text-muted"><em>Tareas</em></h6>
        </header>
        <div class="box-typical box-typical-padding shadow">
            <!-- Menu -->
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a id="btnnuevo" class="nav-link text-muted" href="tareas/create">Nuevo Tarea</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-muted" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Estatus</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Abierto</a>
                        <a class="dropdown-item" href="#">Cerrado</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Todos</a>
                    </div>
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
            @if ($tareas->isEmpty())
                <div style="text-align: center">No hay registros</div>
            @else
                <table class="table table-responsive table-hover border mh-100">
                    <thead>
                        <tr>
                            <th style="width: 5%;">Id</th>
                            <th style="width: 20%;">Asunto</th>
                            <th style="width: 10%;">Agente</th>
                            <th style="width: 20%;">Descripción</th>
                            <th style="width: 10%;">Creación</th>
                            <th class="text-center" style="width: 4%;">Ver</th>
                            <th class="text-center" style="width: 4%;">Editar</th>
                            <th class="text-center" style="width: 4%;">Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!--foreach ($agentes as $agente)-->
                            @foreach ($tareas as $tarea)
                                <tr>
                                    <td>{!! $tarea->id !!}</td>
                                    <td>{!! $tarea->titulo !!}</td>
                                    <td>{!! $tarea->agente_id !!}</td>
                                    <td>{!! $tarea->descripcion !!}</td>
                                    <td>{!! $tarea->fecha_crea !!}</td>
                                    <td>*</td>
                                    <td>*</td>
                                    <td>*</td>
                                </tr>
                            @endforeach
                        <!--endforeach-->
                    </tbody>
                </table>
            @endif
        </div>
    </div>
</div>
<!-- Fin del contenido -->
</body>
</html>