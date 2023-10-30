<nav class="navbar navbar-light navbar-expand-md fixed-top shadow-sm" style="background-color: #ffffff;">
    <a ><img style="width: 135px; height: 50px;" src="/TicketSis/public/img/logoPDV2.png"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbar">
        <ul class="navbar-nav mx-auto">
            <li class="nav-item">
                <a class="nav-link text-dark" href="/TicketSis/public/tickets">
                    <span class="bi bi-ticket-perforated-fill" style="font-size: 1.1rem; color: rgb(0, 153, 255);"></span>
                    <span class="lbl" style=""> Tickets</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="/TicketSis/public/tareas">
                    <span class="bi bi-calendar2-check" style="font-size: 1.1rem; color: rgb(2, 173, 59);"></span>
                    <span class="lbl" style=""> Tareas</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="/TicketSis/public/reportes">
                    <span class="bi bi-bar-chart-line-fill" style="font-size: 1.1rem; color: rgb(255, 0, 0);"></span>
                    <span class="lbl" style=""> Reportes</span>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-dark" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                    <span class="bi bi-people-fill" style="color: rgb(255, 123, 0);"></span>
                    Directorio
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="/TicketSis/public/agentes">Agentes</a>
                    <a class="dropdown-item" href="/TicketSis/public/clientes">Clientes</a>
                </div>
            </li>
        </ul>
        <ul class="navbar-nav" style="width: 145px;">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-dark" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                    <span class="bi bi-person-circle" style="color: rgb(0, 0, 0);"></span>
                     Usuario
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="/TicketSis/public/perfil">Perfil</a>
                    <a class="dropdown-item" href="/TicketSis/public/ayuda">Ayuda</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="/TicketSis/public/">Cerrar sesión</a>
                </div>
            </li>
        </ul>
    </div>
</nav>