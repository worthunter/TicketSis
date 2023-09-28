<!DOCTYPE html>
<html lang="en">
<head>
    <title>TicketSis · Tareas</title>
    <?php require_once("../Componentes/Meta/metalinks.blade.php"); ?>  <!-- Extensión a los metalinks -->
</head>

<body class="with-side-menu">

    <?php require_once("../Componentes/Head/head.blade.php"); ?>  <!-- Extensión a header -->
    <?php require_once("../Componentes/Sidebar/sidebar.blade.php"); ?>  <!-- Extensión a sidebar -->
    <?php require_once("../Componentes/MainJs/js.blade.php"); ?> <!-- Conf del menu desplegable -->

    <!-- Contenido -->
    <div class="page-content">
        <div class="container-fluid">
            
            <header class="section-header">
                <h5>Tareas</h5>
            </header>

            <div class="box-typical box-typical-padding">
                <button type="button" id="btnnuevo" class="btn btn-inline btn-primary-outline">Nueva tarea</button>
                <table id="agentes_data" class="table table-bordered table-striped table-vcenter js-dataTable-full">
                    <thead>
                        <tr>
                            <th style="width: 5%;">Id</th>
                            <th class="d-none d-sm-table-cell" style="width: 25%;">Asunto</th>
                            <th class="d-none d-sm-table-cell" style="width: 10%;">Agente</th>
                            <th class="d-none d-sm-table-cell" style="width: 5%;">Departamento</th>
                            <th class="d-none d-sm-table-cell" style="width: 10%;">Creación</th>
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

</body>
</html>