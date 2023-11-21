<!DOCTYPE html>
<html lang="en">
<head>
    <title>TicketSis · Tareas</title>
    @include('Componentes.Meta.metalinks')
</head>
<body style="background-color:rgb(237, 242, 249, 0.96)">
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
                    <a data-toggle="modal" data-target="#ModTar" class="nav-link text-muted">Nueva Tarea</a>
                    <!--<a id="btnnuevo" class="nav-link text-muted" href="tareas/create">Nueva Tarea</a>-->
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
                            <th style="width: 3%;">Id</th>
                            <th style="width: 10%;">Título</th>
                            <th style="width: 10%;">Agente</th>
                            <th style="width: 15%;">Descripción</th>
                            <th style="width: 10%;">Creación</th>
                            <th style="width: 8%;">Estatus</th>
                            <th style="width: 0%;"></th>
                            <th style="width: 0%;"></th>
                            <th style="width: 0%;"></th>
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
                                    <td>{!! $tarea->created_at !!}</td>
                                    <td>{!! $tarea->estado !!}</td>
                                    <td class="px-1">
                                        <a href="{{ route('tareas.show', $tarea->id) }}" class="btn btn-primary btn-sm tooltip-test" title="Visualizar">
                                        <i class="bi bi-eye"></i></a>
                                    </td>
                                    <td class="px-1">
                                        <a href="{{ route('tareas.edit', $tarea->id) }}" class="btn btn-success btn-sm tooltip-test" title="Editar">
                                        <i class="bi bi-pencil-square"></i></a>
                                    </td>
                                    <td class="pl-1">
                                        <form action="{{ route('tareas.destroy', $tarea->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger btn-sm tooltip-test" title="Eliminar">
                                            <i class="bi bi-trash"></i>
                                            </button>
                                        </form>
                                    </td>
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

@include('Tareas.ModTar')
</body>
</html>