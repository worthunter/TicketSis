<!DOCTYPE html>
<html lang="en">
<head>
    <title>TicketSis · Ticket</title>
    @include('Componentes.Meta.metalinks')
</head>
<body style="background-color:rgb(237, 242, 249, 0.96)">
    @include('Componentes.Navbar.navbar')
<!-- Contenido -->
<div class="px-5" style="margin-top: 5rem">
    <div class="container-fluid">
        <header>
            <h6 class="text-muted"><em>Tickets</em></h6>
        </header>
        <div class="box-typical box-typical-padding shadow">
            <!-- Menu -->
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link dropdown-toggle text-muted" data-toggle="dropdown">Nuevo Ticket</a>
                    <div class="dropdown-menu shadow">
                        <a class="dropdown-item" data-toggle="modal" data-target="#ModPrev">Preventivo</a>
                        <a class="dropdown-item" data-toggle="modal" data-target="#ModCorr">Correctivo</a>
                        <a class="dropdown-item" data-toggle="modal" data-target="#ModRed">Redes</a>
                        <a class="dropdown-item" data-toggle="modal" data-target="#ModSoft">Software</a>
                        <a class="dropdown-item" data-toggle="modal" data-target="#ModCAS">CAS Brother</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-muted" data-toggle="dropdown" href="#" >Estatus</a>
                    <div class="dropdown-menu shadow">
                        <a class="dropdown-item" href="#">Abierto</a>
                        <a class="dropdown-item" href="#">Cerrado</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Todos</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-muted" data-toggle="dropdown" href="#">Exportar</a>
                    <div class="dropdown-menu shadow">
                        <a class="dropdown-item" href="#">PDF</a>
                        <a class="dropdown-item" href="#">CSV</a>
                        <a class="dropdown-item" href="#">Excel</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Copiar</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-muted" data-toggle="dropdown" href="#">Importar</a>
                    <div class="dropdown-menu shadow">
                        <a class="dropdown-item" href="#">CSV</a>
                        <a class="dropdown-item" href="#">Excel</a>
                    </div>
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
            @if ($tickets->isEmpty())
                <div style="text-align: center">No hay registros</div>
            @else
                <table class="table table-responsive table-hover border">
                    <thead>
                        <tr>
                            <th style="width: 3%;">Id</th>
                            <th style="width: 5%;">Estado</th>
                            <th style="width: 15%;">Asunto</th>
                            <th style="width: 10%;">Cliente</th>
                            <th style="width: 10%;">Categoria</th>
                            <th style="width: 10%;">Agente</th>
                            <th style="width: 10%;">Prioridad</th>
                            <th style="width: 10%;">Creación</th>
                            <th style="width: 0%;"></th>
                            <th style="width: 0%;"></th>
                            <th style="width: 0%;"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tickets as $ticket)
                            <tr>
                                <td>{!! $ticket->id !!}</td>
                                <td>{!! $ticket->estado !!}</td>
                                <td>{!! $ticket->titulo !!}</td>
                                <td>{!! $ticket->cliente->nombre !!}</td>
                                <td>{!! $ticket->categoria->nombre !!}</td>
                                <td>{!! $ticket->agente->nombre !!}</td>
                                <td>{!! $ticket->prioridad !!}</td>
                                <td>{!! $ticket->created_at !!}</td>
                                <td class="px-1">
                                    <a href="{{ route('tickets.show', $ticket->id) }}" class="btn btn-primary btn-sm tooltip-test" title="Visualizar">
                                    <i class="bi bi-eye"></i></a>
                                </td>
                                <td class="px-1">
                                    <a href="{{ route('tickets.edit', $ticket->id) }}" class="btn btn-success btn-sm tooltip-test" title="Editar">
                                    <i class="bi bi-pencil-square"></i></a>
                                </td>
                                <td class="pl-1">
                                    <form action="{{ route('tickets.destroy', $ticket->id) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger btn-sm tooltip-test" title="Eliminar">
                                        <i class="bi bi-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>     
            @endif
        </div>
    </div>
</div>
<!-- Fin del contenido -->
@include('Tickets.ModPrev')
@include('Tickets.ModCorr')
@include('Tickets.ModRed')
@include('Tickets.ModSoft')
@include('Tickets.ModCAS')
</body>
</html>