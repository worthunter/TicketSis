<!DOCTYPE html>
<html lang="en">
<head>
    <title>TicketSis · Usuarios</title>
    @include('Componentes.Meta.metalinks')
</head>
<body style="background-color:rgb(237, 242, 249, 0.96)">
    @include('Componentes.Navbar.navbar')
<!-- Contenido -->
<div class="px-5" style="margin-top: 5rem">
    <div class="container-fluid">
        <header>
            <h6 class="text-muted"><em>Directorio de usuarios</em></h6>
        </header>
        <div class="box-typical box-typical-padding shadow">
            <!-- Menu -->
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a data-toggle="modal" data-target="#ModUser" class="nav-link text-muted">Nuevo Usuario</a>
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

            @if ($users->isEmpty())
                <div style="text-align: center">No hay registros</div>
            @else
                <table class="table table-responsive table-hover border">
                    <thead>
                        <tr>
                            <th style="width: 3%;">Id</th>
                            <th style="width: 10%;">Nombre</th>
                            <th style="width: 7%;">Depto.</th>
                            <th style="width: 10%;">Correo</th>
                            <th style="width: 10%;">Dirección</th>
                            <th style="width: 7%;">Teléfono</th>
                            <th style="width: 0%;"></th>
                            <th style="width: 0%;"></th>
                            <th style="width: 0%;"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{!! $user->id !!}</td>
                                <td>{!! $user->nombre !!}</td>
                                <td>{!! $user->departamento->nombre !!}</td>
                                <td>{!! $user->email !!}</td>
                                <td>{!! $user->direccion !!}</td>
                                <td>{!! $user->telefono !!}</td>
                                <td class="px-1">
                                    <a href="{{ route('users.show', $user->id) }}" class="btn btn-primary btn-sm tooltip-test" title="Visualizar">
                                    <i class="bi bi-eye"></i></a>
                                </td>
                                <td class="px-1">
                                    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-success btn-sm tooltip-test" title="Editar">
                                    <i class="bi bi-pencil-square"></i></a>
                                </td>
                                <td class="pl-1">
                                    <form action="{{ route('users.destroy', $user->id) }}" method="post">
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
            <!--Paginador-->
            <!--if ($agentes->hasPages())
            <div class="mx-auto font-italic"  style="width: 200px">
                <tr>
                    <td>
                        { $agentes->links() }}
                    </td>
                </tr>
            </div>
            endif-->
            <!--Fin paginador-->
        </div>
    </div>
</div>
<!-- Fin del contenido -->  
    @include('Usuarios.Users.ModUser')
</body>
</html>