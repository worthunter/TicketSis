<!DOCTYPE html>
<html lang="en">
<head>
    <title>TicketSis · Ticket</title>
    <?php require_once("../Componentes/Meta/metalinks.blade.php"); ?>  <!-- Extensión a los metalinks -->
</head>

<body class="with-side-menu" style="background-color:rgb(237, 242, 249, 0.96)">

    <?php require_once("../Componentes/Head/head.blade.php"); ?>  <!-- Extensión a header -->
    <?php require_once("../Componentes/Sidebar/sidebar.blade.php"); ?>  <!-- Extensión a sidebar -->
    <?php require_once("../Componentes/MainJs/js.blade.php"); ?> <!-- Conf del menu desplegable -->

    <!-- Contenido -->
    <div class="page-content">
        <div class="container-fluid">
            
            <header class="section-header">
                <h5>Tickets</h5>
            </header>

            <div class="box-typical box-typical-padding shadow">
                
                <!-- Menu -->
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link text-muted" href="/TicketSis/resources/views/Tickets/NuevoTicket/index.blade.php">Nuevo Ticket</a>
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

                <table id="agentes_data" class="table table-bordered table-striped table-vcenter js-dataTable-full">
                    <thead>
                        <tr>
                            <th style="width: 5%;">Id</th>
                            <th style="width: 10%;">Categoria</th>
                            <th class="d-none d-sm-table-cell" style="width: 25%;">Asunto</th>
                            <th class="d-none d-sm-table-cell" style="width: 10%;">Cliente</th>
                            <th class="d-none d-sm-table-cell" style="width: 5%;">Estado</th>
                            <th class="d-none d-sm-table-cell" style="width: 10%;">Creación</th>
                            <th class="d-none d-sm-table-cell" style="width: 10%;">Agente</th>
                            <th class="text-center" style="width: 4%;">Ver</th>
                            <th class="text-center" style="width: 4%;">Editar</th>
                            <th class="text-center" style="width: 4%;">Eliminar</th>
                        </tr>
                    </thead>
                </table>
            </div>
            
        </div>
    </div>
    <!-- Fin del contenido -->

    <script type="text/javascript" src="./ConsultaTicket.js"></script>   <!-- Script para modal y extras de tickets -->

</body>
</html>