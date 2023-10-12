<!DOCTYPE html>
<html lang="en">
<head>
    <title>TicketSis · Perfil</title>
    <?php require_once("../../Componentes/Meta/metalinks.blade.php"); ?>  <!-- Extensión a los metalinks -->
</head>

<body class="with-side-menu" style="background-color:rgb(237, 242, 249, 0.96)">

<?php require_once("../../Componentes/Head/head.blade.php"); ?>  <!-- Extensión a header -->
<?php require_once("../../Componentes/Sidebar/sidebar.blade.php"); ?>  <!-- Extensión a sidebar -->

<!-- Contenido -->
<div class="page-content">
    <div class="container-fluid">
        <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
                <div class="card shadow">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center text-center">
                            <div class="mt-3">
                                <h4>José Castañeda</h4>
                                <p class="text-secondary mb-1">- Administrador -</p>
                            </div>
                        </div>
                    </div>
                </div>

                <hr>

                <div class="card mt-3 shadow">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                        <h6 class="mb-0">Miembro desde:</h6>
                        <span class="text-secondary">10/12/2019 (fecha_crea)</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                        <h6 class="mb-0">Última modificación:</h6>
                        <span class="text-secondary">05/09/2023 (fecha_mod)</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-md-8">
                <div class="card mb-3 shadow">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Nombre completo</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                José María Castañeda Gallardo
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Email</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                ejemplo@ejemplo.com
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Teléfono</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                239 816-9029
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Dirección</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                Bay Area #208, San Francisco, CA
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Municipio</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                San Francisco, CA
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <button type="button" class="btn btn-outline-secondary"><i class="bi bi-pencil-square"></i>  Editar datos de usuario</button>
                            </div>
                            <div class="col-md-6">
                                <button type="button" class="btn btn-outline-secondary float-right"><i class="bi bi-person-lock"></i> Cambiar contraseña</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Fin del contenido -->

<?php require_once("../../Componentes/MainJs/js.blade.php"); ?> <!-- Conf del menu desplegable -->

</body>
</html>