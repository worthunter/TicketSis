<!DOCTYPE html>
<html lang="en">
<head>
    <title>TicketSis · Agentes</title>
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
                    <h5>Directorio de agentes</h5>
                </header>
    
                <div class="box-typical box-typical-padding">
                    <button type="button" id="btnnuevo" class="btn btn-inline btn-primary-outline">Nuevo Agente</button>
                    <table id="agentes_data" class="table table-bordered table-striped table-vcenter js-dataTable-full">
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

        
    <?php require_once("ModAge.blade.php"); ?>   <!-- Extensión a modal de agentes -->
    <script type="text/javascript" src="./agentes.js"></script>   <!-- Script para modal y extras del directorio -->

</body>
</html>