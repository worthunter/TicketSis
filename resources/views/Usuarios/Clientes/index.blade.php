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

            @if ($clientes->isEmpty())
                <div style="text-align: center">No hay registros</div>
            @else
                <table class="table table-responsive table-hover border mh-100">
                    <thead>
                        <tr>
                            <th style="width: 4%;">Id</th>
                            <th style="width: 12%;">Nombre</th>
                            <th style="width: 10%;">Empresa</th>
                            <th style="width: 10%;">Correo</th>
                            <th style="width: 10%;">Dirección</th>
                            <th style="width: 10%;">Teléfono</th>
                            <th style="width: 4%;">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($clientes as $cliente)
                            <tr>
                                <td>{!! $cliente->id !!}</td>
                                <td>{!! $cliente->nombre !!} {!! $cliente->apellido !!} </td>
                                <td>{!! $cliente->empresa !!}</td>
                                <td>{!! $cliente->correo !!}</td>
                                <td>{!! $cliente->direccion !!}</td>
                                <td>{!! $cliente->telefono !!}</td>
                                <td class="text-center">
                                    <div class="dropleft">
                                        <button type="button" class="btn btn-secondary btn-sm rounded-lg" data-toggle="dropdown" aria-expanded="false">
                                            <i class="bi bi-three-dots"></i>
                                        </button>
                                        <div class="dropdown-menu border-dark">
                                            <form>
                                                <a class="dropdown-item border-0" href="{{ route('clientes.show', $cliente->id) }}">
                                                <i class="bi bi-eye"  style="font-size: 1.1rem; color: rgb(0, 153, 255);"></i> Ver</a>
                                            </form>
                                            <form>
                                                <a class="dropdown-item border-0" href="{{ route('clientes.edit', $cliente->id) }}">
                                                <i class="bi bi-pencil-square" style="font-size: 1.1rem; color: rgb(2, 173, 59);"></i> Editar</a>
                                            </form>
                                            <form action="{{ route('clientes.destroy', $cliente->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="dropdown-item ">
                                                <i class="bi bi-trash" style="font-size: 1.1rem; color: rgb(255, 0, 0);"></i> Eliminar</button>
                                            </form>
                                        </div>
                                    </div>
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
        
        <!--
        <nav class="navbar navbar-expand-lg navbar-light bg-warning">
            <div class="container-fluid">
            <a class="navbar-brand h1" href={{ route('clientes.index') }}>CRUD</a>
            <div class="justify-end ">
                <div class="col ">
                <a class="btn btn-sm btn-success" href={{ route('clientes.create') }}>Nuedo cliente</a>
                </div>
            </div>
            </div>
        </nav>
        <div class="container mt-5">
            <div class="row">
            @foreach ($clientes as $cliente)
                <div class="col-sm">
                <div class="card">
                    <div class="card-header">
                    <h5 class="card-title">{{ $cliente->title }}</h5>
                    </div>
                    <div class="card-body">
                    <p class="card-text">{{ $cliente->body }}</p>
                    </div>
                    <div class="card-footer">
                    <div class="row">
                        <div class="col-sm">
                        <a href="{{ route('clientes.edit', $cliente->id) }}"
                    class="btn btn-primary btn-sm">Edit</a>
                        </div>
                        <div class="col-sm">
                            <form action="{{ route('clientes.destroy', $cliente->id) }}" method="post">
                            @csrf //Previene ataques "CSRF"
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            @endforeach
            </div>
        </div>
        -->

    </div>
</div>
<!-- Fin del contenido -->
    @include('Usuarios.Clientes.ModCli')
</body>
</html>