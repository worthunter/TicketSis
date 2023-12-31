<!-- Página principal -->

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Prueba</title>
    <?php require_once("Componentes/Meta/metalinks.blade.php"); ?>  <!-- Extensión a los metalinks -->

</head>

<body style="background-color: antiquewhite">
    <br><br><br><br>
    <h1>Estilos bootstrap 4.0</h1>

    <nav class="navbar navbar-light navbar-expand-lg fixed-top" style="background-color: #ffffff;">
        <a ><img style="width: 135px; height: 50px;" src="/TicketSis/public/img/logoPDV2.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link text-dark" href="/TicketSis/public/tickets">
                        <span class="bi bi-ticket-perforated-fill" style="font-size: 1.1rem; color: rgb(117, 200, 255);"></span>
                        <span class="lbl" style=""> Tickets</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="/TicketSis/public/tareas">
                        <span class="bi bi-calendar2-check" style="font-size: 1.1rem; color: rgb(0, 218, 73);"></span>
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
                        <span class="bi bi-people-fill" style="color: rgb(255, 132, 16);"></span>
                        Usuarios
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
                        <a class="dropdown-item" href="/TicketSis/public/agentes">Perfil</a>
                        <a class="dropdown-item" href="/TicketSis/public/clientes">Ayuda</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/TicketSis/public/">Cerrar sesión</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    
    <br><br><br>
    <div class="card shadow">
        <div class="card-body">
            <div class="d-flex flex-column align-items-center text-center">
                <div class="mt-3">
                    <h4>José Castañeda</h4>
                    <hr>
                    <p class="text-secondary mb-1">- Administrador -</p>
                    <hr>
                </div>
            </div>
        </div>
    </div>

    <h1>Shadows</h1>
        <div class="shadow-none p-4 mb-4 bg-light">No shadow</div>
        <div class="shadow-sm p-4 mb-4 bg-white">Small shadow</div>
        <div class="shadow p-4 mb-4 bg-white">Default shadow</div>
        <div class="shadow-lg p-4 mb-4 bg-white">Large shadow</div>

    <h1>Bordes</h1>
        <span class="border border-100">Todo comienza aquí</span>
        <span class="border border-primary">welcome</span>
        <span class="border border-secondary">welcome</span>
        <span class="border border-success">welcome</span>
        <span class="border border-danger">welcome</span>
        <span class="border border-warning">welcome</span>
        <span class="border border-info">welcome</span>
        <span class="border border-light">welcome</span>
        <span class="border border-dark">welcome</span>
        <span class="border border-white">welcome</span>

    <h1>Colores de letra</h1>
        <p><a href="#" class="text-primary">Primary link</a></p>
        <p><a href="#" class="text-secondary">Secondary link</a></p>
        <p><a href="#" class="text-success">Success link</a></p>
        <p><a href="#" class="text-danger">Danger link</a></p>
        <p><a href="#" class="text-warning">Warning link</a></p>
        <p><a href="#" class="text-info">Info link</a></p>
        <p><a href="#" class="text-light bg-dark">Light link</a></p>
        <p><a href="#" class="text-dark">Dark link</a></p>
        <p><a href="#" class="text-muted">Muted link</a></p>
        <p><a href="#" class="text-white bg-dark">White link</a></p>
    <h1>Background color</h1>
        <div class="p-3 mb-2 bg-primary text-white">.bg-primary</div>
        <div class="p-3 mb-2 bg-secondary text-white">.bg-secondary</div>
        <div class="p-3 mb-2 bg-success text-white">.bg-success</div>
        <div class="p-3 mb-2 bg-danger text-white">.bg-danger</div>
        <div class="p-3 mb-2 bg-warning text-dark">.bg-warning</div>
        <div class="p-3 mb-2 bg-info text-white">.bg-info</div>
        <div class="p-3 mb-2 bg-light text-dark">.bg-light</div>
        <div class="p-3 mb-2 bg-dark text-white">.bg-dark</div>
        <div class="p-3 mb-2 bg-white text-dark">.bg-white</div>
    <h1>Alertas</h1>
        <div class="alert alert-primary" role="alert">
        This is a primary alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
        </div>
        <div class="alert alert-secondary" role="alert">
        This is a secondary alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
        </div>
        <div class="alert alert-success" role="alert">
        This is a success alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
        </div>
        <div class="alert alert-danger" role="alert">
        This is a danger alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
        </div>
        <div class="alert alert-warning" role="alert">
        This is a warning alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
        </div>
        <div class="alert alert-info" role="alert">
        This is a info alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
        </div>
        <div class="alert alert-light" role="alert">
        This is a light alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
        </div>
        <div class="alert alert-dark" role="alert">
        This is a dark alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
        </div>
    <h1>Botones</h1>
        <button type="button" class="btn btn-primary">Primary</button>
        <button type="button" class="btn btn-secondary">Secondary</button>
        <button type="button" class="btn btn-success">Success</button>
        <button type="button" class="btn btn-danger">Danger</button>
        <button type="button" class="btn btn-warning">Warning</button>
        <button type="button" class="btn btn-info">Info</button>
        <button type="button" class="btn btn-light">Light</button>
        <button type="button" class="btn btn-dark">Dark</button>
        <button type="button" class="btn btn-link">Link</button>

        <button type="button" class="btn btn-primary btn-sm btn-rounded">Primary</button>
        <button type="button" class="btn btn-secondary btn-sm btn-rounded">Secondary</button>
        <button type="button" class="btn btn-success btn-sm btn-rounded">Success</button>
        <button type="button" class="btn btn-danger btn-sm btn-rounded">Danger</button>
        <button type="button" class="btn btn-warning btn-sm btn-rounded">Warning</button>
        <button type="button" class="btn btn-info btn-sm btn-rounded">Info</button>
        <button type="button" class="btn btn-light btn-sm btn-rounded">Light</button>
        <button type="button" class="btn btn-dark btn-sm btn-rounded">Dark</button>
        <button type="button" class="btn btn-link btn-sm btn-rounded">Link</button>

        <h2>Button Outline</h2>
        <button type="button" class="btn btn-outline-primary">Primary</button>
        <button type="button" class="btn btn-outline-secondary">Secondary</button>
        <button type="button" class="btn btn-outline-success">Success</button>
        <button type="button" class="btn btn-outline-info">Info</button>
        <button type="button" class="btn btn-outline-warning">Warning</button>
        <button type="button" class="btn btn-outline-danger">Danger</button>
        <button type="button" class="btn btn-outline-dark">Dark</button>
        <button type="button" class="btn btn-outline-light text-dark">Light</button>

          
        
    <h1>Botones agrupados</h1>
        <div class="btn-group btn-group-toggle" data-toggle="buttons">
            <label class="btn btn-secondary active">
                <input type="radio" name="options" id="option1" autocomplete="off" checked> Active
            </label>
            <label class="btn btn-secondary">
                <input type="radio" name="options" id="option2" autocomplete="off"> Radio
            </label>
            <label class="btn btn-secondary">
                <input type="radio" name="options" id="option3" autocomplete="off"> Radio
            </label>
        </div>

        <div class="btn-group" role="group" aria-label="Basic example">
            <button type="button" class="btn btn-secondary">Left</button>
            <button type="button" class="btn btn-secondary">Middle</button>
            <button type="button" class="btn btn-secondary">Right</button>
        </div>

    <h1>Button toolbar</h1>  
        <div class="btn-toolbar mb-3" role="toolbar" aria-label="Toolbar with button groups">
        <div class="btn-group mr-2" role="group" aria-label="First group">
            <button type="button" class="btn btn-secondary">1</button>
            <button type="button" class="btn btn-secondary">2</button>
            <button type="button" class="btn btn-secondary">3</button>
            <button type="button" class="btn btn-secondary">4</button>
        </div>
        </div>

        <h1>Inputs con botones y select</h1>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
              <label class="input-group-text" for="inputGroupSelect01">Options</label>
            </div>
            <select class="custom-select" id="inputGroupSelect01">
              <option selected>Choose...</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
          </div>
          
          <div class="input-group mb-3">
            <select class="custom-select" id="inputGroupSelect02">
              <option selected>Choose...</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
            <div class="input-group-append">
              <label class="input-group-text" for="inputGroupSelect02">Options</label>
            </div>
          </div>
          
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <button class="btn btn-outline-secondary" type="button">Button</button>
            </div>
            <select class="custom-select" id="inputGroupSelect03">
              <option selected>Choose...</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
          </div>
          
          <div class="input-group">
            <select class="custom-select" id="inputGroupSelect04">
              <option selected>Choose...</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
            <div class="input-group-append">
              <button class="btn btn-outline-secondary" type="button">Button</button>
            </div>
          </div>

        <h1>Barras de carga</h1>
    <div class="progress">
        <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
    <div class="progress">
        <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
    <div class="progress">
        <div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
    <div class="progress">
        <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
    </div>

        <h1>Barra de carga con movimiento</h1>
    <div class="progress">
        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
    </div>

    <h1>Tarjetas con color</h1>
        <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
            <div class="card-header">Header</div>
            <div class="card-body">
                <h5 class="card-title">Primary card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            </div>
            <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
            <div class="card-header">Header</div>
            <div class="card-body">
                <h5 class="card-title">Secondary card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            </div>
            <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
            <div class="card-header">Header</div>
            <div class="card-body">
                <h5 class="card-title">Success card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            </div>
            <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
            <div class="card-header">Header</div>
            <div class="card-body">
                <h5 class="card-title">Danger card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            </div>
            <div class="card text-white bg-warning mb-3" style="max-width: 18rem;">
            <div class="card-header">Header</div>
            <div class="card-body">
                <h5 class="card-title">Warning card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            </div>
            <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
            <div class="card-header">Header</div>
            <div class="card-body">
                <h5 class="card-title">Info card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            </div>
            <div class="card bg-light mb-3" style="max-width: 18rem;">
            <div class="card-header">Header</div>
            <div class="card-body">
                <h5 class="card-title">Light card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            </div>
            <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
            <div class="card-header">Header</div>
            <div class="card-body">
                <h5 class="card-title">Dark card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>


    <h1>Tarjetas con linea</h1>

        <div class="card border-primary mb-3" style="max-width: 18rem;">
            <div class="card-header">Header</div>
            <div class="card-body text-primary">
                <h5 class="card-title">Primary card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            </div>
            <div class="card border-secondary mb-3" style="max-width: 18rem;">
            <div class="card-header">Header</div>
            <div class="card-body text-secondary">
                <h5 class="card-title">Secondary card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            </div>
            <div class="card border-success mb-3" style="max-width: 18rem;">
            <div class="card-header">Header</div>
            <div class="card-body text-success">
                <h5 class="card-title">Success card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            </div>
            <div class="card border-danger mb-3" style="max-width: 18rem;">
            <div class="card-header">Header</div>
            <div class="card-body text-danger">
                <h5 class="card-title">Danger card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            </div>
            <div class="card border-warning mb-3" style="max-width: 18rem;">
            <div class="card-header">Header</div>
            <div class="card-body text-warning">
                <h5 class="card-title">Warning card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            </div>
            <div class="card border-info mb-3" style="max-width: 18rem;">
            <div class="card-header">Header</div>
            <div class="card-body text-info">
                <h5 class="card-title">Info card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            </div>
            <div class="card border-light mb-3" style="max-width: 18rem;">
            <div class="card-header">Header</div>
            <div class="card-body">
                <h5 class="card-title">Light card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            </div>
            <div class="card border-dark mb-3" style="max-width: 18rem;">
            <div class="card-header">Header</div>
            <div class="card-body text-dark">
                <h5 class="card-title">Dark card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>


        <h1>Paginador</h1>
<nav aria-label="Page navigation example">
    <ul class="pagination justify-content-end">
        <li class="page-item disabled">
        <a class="page-link" href="#" tabindex="-1">Previous</a>
        </li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item">
        <a class="page-link" href="#">Next</a>
        </li>
    </ul>
</nav>
<nav aria-label="Page navigation example">
    <ul class="pagination justify-content-center">
      <li class="page-item disabled">
        <a class="page-link" href="#" tabindex="-1">Previous</a>
      </li>
      <li class="page-item"><a class="page-link" href="#">1</a></li>
      <li class="page-item"><a class="page-link" href="#">2</a></li>
      <li class="page-item"><a class="page-link" href="#">3</a></li>
      <li class="page-item">
        <a class="page-link" href="#">Next</a>
      </li>
    </ul>
</nav>
<nav aria-label="...">
    <ul class="pagination">
      <li class="page-item disabled">
        <span class="page-link">Previous</span>
      </li>
      <li class="page-item"><a class="page-link" href="#">1</a></li>
      <li class="page-item"><a class="page-link" href="#">2</a></li>
      <li class="page-item"><a class="page-link" href="#">3</a></li>
      <li class="page-item">
        <a class="page-link" href="#">Next</a>
      </li>
    </ul>
</nav>

</body>
</html>