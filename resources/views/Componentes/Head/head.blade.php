<header class="site-header">
    <div class="container-fluid">

        <a href="#" class="site-logo">
            <img class="hidden-md-down" src="/TicketSis/public/img/logoPDV2.png" alt="">
            <img class="hidden-lg-up" src="/TicketSis/public/img/logoPDVbolita.png" alt="">
        </a>

        <button id="show-hide-sidebar-toggle" class="show-hide-sidebar">
            <span>toggle menu</span>
        </button>

        <button class="hamburger hamburger--htla">
            <span>toggle menu</span>
        </button>
        
        <div class="site-header-content">
            <div class="site-header-content-in">
                <div class="site-header-shown">
                    <div class="dropdown user-menu">
	                    <button class="dropdown-toggle" id="dd-user-menu" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="/TicketSis/public/img/1.png">
	                    </button>
	                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dd-user-menu">
                            <a class="dropdown-item" href="#"><span class="bi bi-person-circle"></span> Perfil</a>
                            <a class="dropdown-item" href="#"><span class="bi bi-info-circle"></span> Ayuda</a>
                            <div class="dropdown-divider"></div>
	                        <a class="dropdown-item" href="#"><span class="bi bi-box-arrow-right"></span> Cerrar Sesion</a>
	                    </div>
	                </div>
                </div>

                   <!--
                    <ul class="nav nav-pills">
                        <li class="nav-item">
                          <a class="nav-link" href="#"><i class="bi bi-person-circle" style="color: rgb(0, 0, 0);"></i> Perfil</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#"><i class="bi bi-info-circle" style="color: rgb(0, 0, 0);"></i> Ayuda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="bi bi-box-arrow-right" style="color: rgb(0, 0, 0);"></i> Cerrar sesión</a>
                        </li>
                    </ul>
                    -->

                <div class="mobile-menu-right-overlay"></div>

                <input type="hidden" id="user_idx"> <!-- id del usuario -->
                <input type="hidden" id="rol_idx"> <!-- rol del usuario -->
            </div>
        </div>
    </div>
</header>