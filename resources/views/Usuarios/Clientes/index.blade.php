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
                <div class=" bg-secondary">
                <!-- Menu tabla -->
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a id="btnnuevo" class="nav-link text-muted" href="#">Nuevo Cliente</a>
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
                    </li>
                    <div>
                        <form class="form-inline my-2 my-lg-0">
                            <button class="btn btn-primary float-right btn-sm" type="submit">Buscar</button>
                            <input class="form-control form-control-sm float-right" type="search" aria-label="Search">
                        </form>
                    </div>
                </ul>
                  <!-- Fin menu tabla-->
                
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
    </div>
    <!-- Fin del contenido -->

    
    <?php require_once("ModCli.blade.php"); ?>   <!-- Extensión a modal de clientes --> 
    <script type="text/javascript" src="./clientes.js"></script>   <!-- Script para modal y extras del directorio -->

</body>
</html>