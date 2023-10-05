<!DOCTYPE html>
<html lang="en">
<head>
    <title>TicketSis · Clientes</title>
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
                <h5>Directorio de clientes</h5>
            </header>

            <div class="box-typical box-typical-padding">
                <!-- Menu tabla -->
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a id="btnnuevo" class="nav-link text-muted">Nuevo Cliente</a>
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
                            <button class="btn btn-primary btn-sm" type="submit">Buscar</button>
                            <input class="form-control form-control-sm" type="search" aria-label="Search">
                        </form>
                    </div>
                </ul>
                  <!-- Fin menu tabla-->
                
                  <table class="table table-hover">
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
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>Whatson</td>
                        <td>Cliente</td>
                        <td>example@example.com</td>
                        <td>10/09/2023</td>
                        <td>*</td>
                        <td>*</td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>Carlos</td>
                        <td>Cliente</td>
                        <td>example@example.com</td>
                        <td>23/01/2017</td>
                        <td>*</td>
                        <td>*</td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td>Jhon</td>
                        <td>Cliente</td>
                        <td>example@example.com</td>
                        <td>10/12/2023</td>
                        <td>*</td>
                        <td>*</td>
                      </tr>
                    </tbody>
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