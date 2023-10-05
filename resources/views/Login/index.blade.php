<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="icon" href="/TicketSis/public/img/logoPDVbolita.ico"/>
    <link rel="stylesheet" href="/TicketSis/public/css/lib/bootstrap/bootstrap.min.css"/>
    <link rel="stylesheet" href="/TicketSis/public/css/lib/bootstrap/bootstrap.css"/>
    <link rel="stylesheet" href="/TicketSis/public/css/main.css"/>
    <link rel="stylesheet" href="/TicketSis/public/css/app.css"/>
    <link rel="stylesheet" href="/TicketSis/public/css/login.css"/>
    <link rel="stylesheet" href="/TicketSis/public/css/separate/pages/login.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

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
                    <p style="font-size: 1.1rem">Introduce e-mail y contraseña</p>
                    <div class="input-group input-sm">
                        <span class="input-group-addon"><i class="bi bi-person-bounding-box"></i></span><input class="form-control" type="text" id="username" placeholder="E-mail" />
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="bi bi-shield-lock"></i></span><input class="form-control" type="password" id="password" placeholder="Contraseña" />
                    </div>
                    <div class="form-actions clearfix">
                        <div class="pull-right">
                            <a href="\TicketSis\resources\views\Tickets\index.blade.php" class="flip-link to-recover grey">Olvidé mi contraseña</a>
                        </div>
                        <input type="submit" class="btn btn-block btn-rounded" value="Ingresar" />
                    </div>
                </form>
            </div>
        </div>
</body>
</html>