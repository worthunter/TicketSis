<!DOCTYPE html>
<html lang="en">
<head>
    <title>TicketSis · Reportes</title>
    @include('Componentes.Meta.metalinks')
</head>
<body style="background-color:rgb(237, 242, 249, 0.96)">
    @include('Componentes.Navbar.navbar')
<div class="px-5" style="margin-top: 5em">
    <div class="container-fluid">
        <header>
            <h6 class="text-muted"><em>Reportes</em></h6>
        </header>
        <div class="row">
            <div class="col-xl-12">
                <div class="row">
                    <div class="col-xl-4">
                        <article class="statistic-box purple">
                            <div class="shadow">
                                <div class="number" id="lbltotal"></div>
                                <div class="caption"><div>Total de Tickets</div></div>
                            </div>
                        </article>
                    </div>
                    <div class="col-xl-4">
                        <article class="statistic-box yellow">
                            <div class="shadow">
                                <div class="number" id="lbltotalabiertos"></div>
                                <div class="caption"><div>Tickets Abiertos</div></div>
                            </div>
                        </article>
                    </div>
                    <div class="col-xl-4">
                        <article class="statistic-box red">
                            <div class="shadow">
                                <div class="number" id="lbltotalcerrados"></div>
                                <div class="caption"><div>Tickets Cerrados</div></div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
        <section class="card h-100">
            <header class="card-header">
                Gráfico Estadístico
            </header>
            <div class="card-block shadow">
                <div id="divgrafico" style="height: 250px;"></div>
            </div>
        </section>
    </div>
</div>
</body>
</html>