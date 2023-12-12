<!DOCTYPE html>
<html lang="en">
<head>
    <title>TicketSis · Clientes</title>
    @include('Componentes.Meta.metalinks')
</head>
<body style="background-color:rgb(237, 242, 249, 0.96)">
    @include('Componentes.Navbar.navbar')
<!-- Contenido --> 
<div class="px-5" style="margin-top: 5rem">
    <div class="container-fluid">
        <header>
            <h6 class="text-muted"><em>Directorio de clientes</em></h6>
        </header>
        <div class="box-typical box-typical-padding shadow">
            <!-- Menu -->
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a data-toggle="modal" data-target="#ModCli" class="nav-link text-muted">Nuevo Cliente</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-muted" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Exportar</a>
                    <div class="dropdown-menu shadow">
                        <a class="dropdown-item" href="#">PDF</a>
                        <a class="dropdown-item" href="#">CSV</a>
                        <a class="dropdown-item" href="#">Excel</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Copiar</a>
                    </div>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-muted" data-toggle="dropdown" href="#">Importar</a>
                        <div class="dropdown-menu shadow">
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

            @if ($clientes->isEmpty())
                <div style="text-align: center">No hay registros</div>
            @else
                <table class="table table-responsive border table-hover mh-100">
                    <thead>
                        <tr>
                            <th style="width: 3%;">Id</th>
                            <th style="width: 10%;">Nombre</th>
                            <th style="width: 7%;">Empresa</th>
                            <th style="width: 10%;">Correo</th>
                            <th style="width: 10%;">Dirección</th>
                            <th style="width: 7%;">Teléfono</th>
                            <th style="width: 0%;"></th>
                            <th style="width: 0%;"></th>
                            <th style="width: 0%;"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($clientes as $cliente)
                            <tr>
                                <td>{!! $cliente->id !!}</td>
                                <td>{!! $cliente->nombre !!} </td>
                                <td>{!! $cliente->empresa !!}</td>
                                <td>{!! $cliente->correo !!}</td>
                                <td>{!! $cliente->direccion !!}</td>
                                <td>{!! $cliente->telefono !!}</td>
                                <td class="px-1">
                                    <a href="{{ route('clientes.show', $cliente->id) }}" class="btn btn-primary btn-sm tooltip-test" title="Visualizar">
                                    <i class="bi bi-eye"></i></a>
                                </td>
                                <td class="px-1">
                                    <a href="{{ route('clientes.edit', $cliente->id) }}" class="btn btn-success btn-sm tooltip-test" title="Editar">
                                    <i class="bi bi-pencil-square"></i></a>
                                </td>
                                <td class="pl-1">
                                    <form action="{{ route('clientes.destroy', $cliente->id) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger btn-sm tooltip-test" title="Eliminar">
                                        <i class="bi bi-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody >
                </table>
            @endif
            <!--Paginador-->
            @if ($clientes->hasPages())
            <div class="mx-auto font-italic"  style="width: 200px">
                <tr>
                    <td>
                        {{ $clientes->links() }}
                    </td>
                </tr>
            </div>
            @endif
            <!--Fin paginador-->
        </div>
    </div>
</div>
<!-- Fin del contenido -->
    @include('Usuarios.Clientes.ModCli')
</body>
</html>