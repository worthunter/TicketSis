<!-- Página principal -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prueba</title>
    <?php require_once("Componentes/Meta/metalinks.blade.php"); ?>  <!-- Extensión a los metalinks -->
</head>

<body>
    <h1>Estilos bootstrap 4.0</h1>

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
</body>
</html>