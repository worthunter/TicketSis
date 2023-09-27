<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once("../Componentes/Meta/metalinks.blade.php"); ?>  <!-- Extensión a los metalinks -->
    <title>Login</title>
</head>
<body>
    <div class="container">
        <div class="logo img">
            <img src="/TicketSis/public/img/logoPDV.png"/>
        </div>
            <div class="loginbox">
                <form class="loginform">
                    <form class="loginform" action="index.html">
                    <p>Introduce e-mail y contraseña</p>
                    <div class="input-group input-sm">
                        <span class="input-group-addon"><i class="bi bi-person-bounding-box"></i></span><input class="form-control" type="text" id="username" placeholder="E-mail" />
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="bi bi-shield-lock"></i></span><input class="form-control" type="password" id="password" placeholder="Constraseña" />
                    </div>
                    <div class="form-actions clearfix">
                        <div class="pull-right">
                            <a href="#" class="flip-link to-recover grey">Olvidé mi contraseña</a>
                        </div>
                        <input type="submit" class="btn btn-block btn-rounded" value="Ingresar" />
                    </div>
                </form>
            </div>
        </div>
</body>
</html>