<!DOCTYPE html>
<html lang="en">
<head>
    <title>TicketSis · Clientes</title>
    <?php require_once("../../Componentes/Meta/metalinks.blade.php"); ?>  <!-- Extensión a los metalinks -->
</head>

<body class="with-side-menu">

    <?php require_once("../../Componentes/Head/head.blade.php"); ?>  <!-- Extensión a header -->
    <?php require_once("../../Componentes/Sidebar/sidebar.blade.php"); ?>  <!-- Extensión a sidebar -->
    <?php require_once("../../Componentes/MainJs/js.blade.php"); ?> <!-- Conf del menu desplegable -->

    <!-- Contenido -->
    <div class="page-content">
        <div class="container-fluid">
            
            <header class="section-header">
                <h5>Directorio de clientes</h5>
            </header>

            <div class="box-typical box-typical-padding">

                <!-- Menu 
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">Navbar</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Enlace</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                     Dropdown
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="#">Acción</a></li>
                                        <li><a class="dropdown-item" href="#">Otra acción</a></li>
                                        <li><hr class="dropdown-divider"></li>
                                        <li><a class="dropdown-item" href="#">Algo más aquí</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link disabled">Deshabilitado</a>
                                </li>
                            </ul>
                            <form class="d-flex" role="search">
                                <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar">
                                <button class="btn btn-outline-success" type="submit">Buscar</button>
                            </form>
                        </div>
                    </div>
                </nav>
                   Fin Menu -->
                
                <table id="usuario_data" class="table table-bordered table-striped table-vcenter js-dataTable-full">
                    <thead>
                        <tr>
                            <th class="d-none d-sm-table-cell" style="width: 4%;">Id</th>
                            <th style="width: 15%;">Nombre</th>
                            <th class="d-none d-sm-table-cell" style="width: 5%;">Rol</th>
                            <th class="d-none d-sm-table-cell" style="width: 10%;">Correo</th>
                            <th class="d-none d-sm-table-cell" style="width: 5%;">Creado</th>
                            <th class="text-center" style="width: 4%;">Editar</th>
                            <th class="text-center" style="width: 4%;">Eliminar</th>
                        </tr>
                    </thead>
                </table>
            </div>

        </div>
    </div>
    <!-- Fin del contenido -->

    
    <?php require_once("ModCli.blade.php"); ?>   <!-- Extensión a modal de clientes --> 
    <script type="text/javascript" src="./clientes.js"></script>   <!-- Script para modal y extras del directorio -->

</body>
</html>