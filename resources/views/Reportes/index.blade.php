<!DOCTYPE html>
<html lang="en">
<head>
    <title>TicketSis</title>
    <?php require_once("../Componentes/Meta/metalinks.blade.php"); ?>  <!-- Extensión a los metalinks -->
</head>

<body class="with-side-menu">

    <?php require_once("../Componentes/Head/head.blade.php"); ?>  <!-- Extensión a sidebar -->
    <?php require_once("../Componentes/Sidebar/sidebar.blade.php"); ?>  <!-- Extensión a sidebar -->
    
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                        <div class="row">
                            <div class="col-xl-4">
                                <article class="statistic-box purple">
                                    <div>
                                        <div class="number" id="lbltotal"></div>
                                        <div class="caption"><div>Total de Tickets</div></div>
                                    </div>
                                </article>
                            </div>
                            <div class="col-xl-4">
                                <article class="statistic-box yellow">
                                    <div>
                                        <div class="number" id="lbltotalabiertos"></div>
                                        <div class="caption"><div>Total de Tickets Abiertos</div></div>
                                    </div>
                                </article>
                            </div>
                            <div class="col-xl-4">
                                <article class="statistic-box red">
                                    <div>
                                        <div class="number" id="lbltotalcerrados"></div>
                                        <div class="caption"><div>Total de Tickets Cerrados</div></div>
                                    </div>
                                </article>
                            </div>
                        </div>
                </div>
            </div>

            <section class="card">
                <header class="card-header">
                    Gráfico Estadístico
                </header>
                <div class="card-block">
                    <div id="divgrafico" style="height: 250px;"></div>
                </div>
            </section>
        </div>
    </div>
    </div>

    <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>

    <script type="text/javascript" src="./home.js"></script>
</body>
</html>