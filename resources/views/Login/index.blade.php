<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once("../Componentes/Meta/metalinks.blade.php"); ?>  <!-- Extensión a los metalinks -->
    <title>Login</title>
</head>
<body>
    <div id="main-wrapper" class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10">
                <div class="card border-0">
                    <div class="card-body p-0">
                        <div class="row no-gutters">
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="mb-5">
                                        <h3 class="h4 font-weight-bold text-theme">Login</h3>
                                    </div>
                                    <h6 class="h5 mb-0">Bienvenido.</h6>
                                    <p class="text-muted mt-2 mb-5">Ingresa tu email y contraseña para ingresar</p>
                                    <form>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1">
                                        </div>
                                        <div class="form-group mb-5">
                                            <label for="exampleInputPassword1">Contraseña</label>
                                            <input type="password" class="form-control" id="exampleInputPassword1">
                                        </div>
                                        <button type="submit" class="btn bg-dark/25 text-sm font-medium text-slate-900 dark:text-slate-200/70 hover:text-white hover:bg-dark/90">Ingresa</button>
                                        <a href="#" class="forgot-link float-right text-primary">Olvidaste tu contraseña?</a>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-6 d-none d-lg-inline-block">
                                <div class="account-block rounded-right">
                                    <div class="overlay rounded-right"></div>
                                    <div class="account-testimonial">
                                        <h4 class="text-white mb-4">Bienvenido</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>