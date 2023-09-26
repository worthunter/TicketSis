<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once("../Componentes/Meta/metalinks.blade.php"); ?>  <!-- Extensión a los metalinks -->
    <title>Login</title>
</head>
<body>
    <div class="container">
        <div class="logo">
            <img src="/TicketSis/public/img/logoPDVbolita.png" width="" height=""/>
        </div>
        <div class="user">
            <div class="avatar">
                <div class="inner"></div>
                    <img src="/TicketSis/public/img/logoPDVbolita.png" />
                </div>
            </div>
            <div class="loginbox">
                <form class="loginform" action="index.html">
                    <p>Ingresa email y contraseña</p>
                    <div class="input-group input-sm">
                        <span class="input-group-addon"><i class="bi bi-person-bounding-box"></i></span><input class="form-control" type="text" id="username" placeholder="E-mail" />
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="bi bi-shield-lock"></i></span><input class="form-control" type="password" id="password" placeholder="Constraseña" />
                    </div>
                    <div class="form-actions clearfix">
                        <div class="pull-left">
                            <a href="#registerform" class="flip-link to-register blue">Create new account</a>
                        </div>
                        <div class="pull-right">
                            <a href="#recoverform" class="flip-link to-recover grey">Lost password?</a>
                        </div>
                        <input type="submit" class="btn btn-block btn-primary btn-default" value="Login" />
                    </div>
                </form>
            </div>
        </div>
</body>
</html>