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
<body style="background-color:rgb(237, 242, 249, 0.96)" :status="session('status')">
    <div style="margin-top: 5rem">
        <div class="container-fluid">
            <div class="text-center py-4">
                <img src="/TicketSis/public/img/logoPDV.png"/>
            </div>
            <div class="box-typical box-typical-padding shadow mx-auto rounded rounded-lg" style="width: 30rem; background-color: white">
                <div class="py-3 px-4">

                    <!-- Formulario login -->
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <p class="text-center" style="font-size: 1.1rem">Ingresa tus credenciales</p>

                        <!-- Email -->
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="bi bi-person-bounding-box"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="E-mail" id="email" name="email" required autofocus>
                        </div>

                        <!-- Password -->
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="bi bi-shield-lock"></i></span>
                            </div>
                            <input type="password" class="form-control" placeholder="Contraseña" id="password" name="password" required>
                        </div>

                        <div class="text-center">
                            @if ($errors->has('email'))
                                <span class="text-danger"><i class="bi bi-exclamation-triangle"></i> {{ $errors->first('email') }}</span>
                            @endif
                        </div>

                        <!-- Remember me -->
                        <div class="pl-2 pt-2">
                            <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                            <span class="ms-2 text-sm text-gray-600">Recuerdame</span>
                        </div>
        
                        <div class="form-actions clearfix pr-1 pt-4 text-right">
                            <div class="pull-right">
                                @if (Route::has('password.request'))
                                    <a class="flip-link to-recover grey pr-2" href="{{ route('password.request') }}">
                                        Olvidaste tu contraseña?
                                    </a>
                                @endif
                                <input type="submit" class="btn btn-primary btn-rounded" value="Ingresar" />
                            </div>
                        </div>
                    </form>            
                </div>
            </div>
        </div>
    </div>
</body>
</html>