<!DOCTYPE html>
<html lang="en">
<head>
    <title>TicketSis · Ticket</title>
    @include('Componentes.Meta.metalinks')
</head>
<body class="overflow-hidden" style="background-color:rgb(237, 242, 249, 0.96)">
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
                    <a class="nav-link text-muted" href="tickets/create">Nuevo Ticket</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-muted" data-toggle="dropdown" href="#" >Estatus</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Abierto</a>
                        <a class="dropdown-item" href="#">Cerrado</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Todos</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-muted" data-toggle="dropdown" href="#">Exportar</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">PDF</a>
                        <a class="dropdown-item" href="#">CSV</a>
                        <a class="dropdown-item" href="#">Excel</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Copiar</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-muted" data-toggle="dropdown" href="#">Importar</a>
                    <div class="dropdown-menu">
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
                            <th style="width: 5%;">Id</th>
                            <th style="width: 5%;">Estado</th>
                            <th style="width: 25%;">Asunto</th>
                            <th style="width: 10%;">Cliente</th>
                            <th style="width: 10%;">Categoria</th>
                            <th style="width: 10%;">Agente</th>
                            <th style="width: 10%;">Prioridad</th>
                            <th style="width: 10%;">Creación</th>
                            <th class="text-center" style="width: 4%;">Ver</th>
                            <th class="text-center" style="width: 4%;">Editar</th>
                            <th class="text-center" style="width: 4%;">Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tickets as $ticket)
                            <tr>
                                <td>{!! $ticket->id !!}</td>
                                <td>{!! $ticket->estado !!}</td>
                                <td>{!! $ticket->titulo !!}</td>
                                <td>{!! $ticket->cliente_id !!}</td>
                                <td>{!! $ticket->categoria_id !!}</td>
                                <td>{!! $ticket->agente_id !!}</td>
                                <td>{!! $ticket->prioridad !!}</td>
                                <td>{!! $ticket->fecha_crea !!}</td>
                                <td>*</td>
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
</body>
</html>