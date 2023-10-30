<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="icon" href="/TicketSis/public/img/logoPDVbolita.ico"/>
    <link rel="stylesheet" href="/TicketSis/public/css/login.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">


    <title>TicketSis · Login</title>
</head>
<body style="background-color:rgb(237, 242, 249, 0.96)">
    <div>
        <div class="logo img">
            <img src="/TicketSis/public/img/logoPDV.png"/>
        </div>
            <div class="loginbox">
                <p style="font-size: 1.1rem">Introduce e-mail y contraseña</p>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1"><i class="bi bi-person-bounding-box"></i></span>
                    </div>
                    <input type="text" class="form-control" placeholder="E-mail" aria-describedby="basic-addon1">
                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1"><i class="bi bi-shield-lock"></i></span>
                    </div>
                    <input type="text" class="form-control" placeholder="Contraseña" aria-describedby="basic-addon1">
                </div>
                <div class="form-actions clearfix">
                    <div class="pull-right">
                        <a href="\TicketSis\public\tickets" class="flip-link to-recover grey">Olvidé mi contraseña</a>
                    </div>
                    <input type="submit" class="btn btn-primary btn-rounded btn-block" value="Ingresar" />
                </div>
            </div>
        </div>
</body>
</html>