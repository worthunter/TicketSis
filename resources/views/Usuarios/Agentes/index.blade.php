<!DOCTYPE html>
<html lang="en">
<head>
    <title>TicketSis · Agentes</title>
    <?php require_once("../../Componentes/Meta/metalinks.blade.php"); ?>  <!-- Extensión a los metalinks -->
</head>

<body class="with-side-menu" style="background-color:rgb(237, 242, 249, 0.96)">

    <?php require_once("../../Componentes/Head/head.blade.php"); ?>  <!-- Extensión a header -->
    <?php require_once("../../Componentes/Sidebar/sidebar.blade.php"); ?>  <!-- Extensión a sidebar -->
    <?php require_once("../../Componentes/MainJs/js.blade.php"); ?> <!-- Conf del menu desplegable -->
    
<!-- Contenido -->
<div class="page-content">
    <div class="container-fluid">
        <header class="section-header">
            <h5>Directorio de agentes</h5>
        </header>
          
        <div class="box-typical box-typical-padding shadow">
            <!-- Menu -->
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a data-toggle="modal" data-target="#ModAge" class="nav-link text-muted">Nuevo Agente</a>
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

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th class="d-none d-sm-table-cell" style="width: 4%;">Id</th>
                        <th style="width: 15%;">Nombre</th>
                        <th class="d-none d-sm-table-cell" style="width: 5%;">Rol</th>
                        <th class="d-none d-sm-table-cell" style="width: 10%;">Correo</th>
                        <th class="d-none d-sm-table-cell" style="width: 10%;">Teléfono</th>
                        <th class="d-none d-sm-table-cell" style="width: 5%;">Creado</th>
                        <th class="text-center" style="width: 4%;">Editar</th>
                        <th class="text-center" style="width: 4%;">Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Whatson</td>
                        <td>Soporte</td>
                        <td>example@example.com</td>
                        <td>123456789</td>
                        <td>10/09/2023</td>
                        <td>*</td>
                        <td>*</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Carlos</td>
                        <td>soporte</td>
                        <td>example@example.com</td>
                        <td>123456789</td>
                        <td>23/01/2017</td>
                        <td>*</td>
                        <td>*</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Jhon</td>
                        <td>Soporte</td>
                        <td>example@example.com</td>
                        <td>123456789</td>
                        <td>10/12/2023</td>
                        <td>*</td>
                        <td>*</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- Fin del contenido -->
        
<?php require_once("ModAge.blade.php"); ?>   <!-- Extensión a modal de agentes -->

</body>
</html>