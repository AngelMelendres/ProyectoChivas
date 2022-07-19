<!doctype html>
<html lang="en">

<head>
    <title>Iniciar Sesion</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="<?php echo constant('URL') ?>public/img/icono.ico" type="image/x-icon">
    <!-- Bootstrap CSS v5.2.0-beta1 -->

    <!--     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="<?php echo constant('URL') ?>public/css/style.css">
    <link rel="stylesheet" href="<?php echo constant('URL') ?>public/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo constant('URL') ?>public/css/styleContacto.css">

</head>

<body class="vh-100">
    <div class="">
        <?php require('views/main/templates/header.php'); ?>
        <div class="p-5 d-flex justify-content-center">
            <div class="col-md-7 p-3 m-auto card">
                <h1 class="text-center p-1">Crear nueva cuenta</h1>
                <form method="POST" action="<?php echo constant('URL') ?>main/insert">
                    <div class="row mb-2">
                        <label class="col-lg-2 col-form-label">Nombre</label>
                        <div class="col-lg-10">
                            <input required id="nombre" name="nombre" class=" form-control" type="text" placeholder="Tu nombre"></input>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <label class="col-lg-2 col-form-label">Apellido</label>
                        <div class="col-lg-10">
                            <input required id="apellido" name="apellido" class=" form-control" type="text" placeholder="Tu apellido"></input>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <label class="col-lg-2 col-form-label">Cedula</label>
                        <div class="col-lg-10">
                            <input required id="cedula" name="cedula" class=" form-control" type="text" placeholder="Tu cedula"></input>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <label class="col-lg-2 col-form-label">Email</label>
                        <div class="col-lg-10">
                            <input required id="correo" name="correo" class=" form-control" type="email" placeholder="Tu Email"></input>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <label class="col-lg-2 col-form-label">Telefono</label>
                        <div class="col-lg-10">
                            <input required id="telefono" name="telefono" class=" form-control" type="correo" placeholder="Tu telefono"></input>
                        </div>
                    </div>
                    

                    <div class="row mb-3">
                        <label class="col-lg-2 col-form-label">Password</label>
                        <div class="col-lg-10">
                            <input required id="password" name="password" class="form-control" type="password" placeholder="Tu Password"></input>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-lg-2 col-form-label">Confirmar Password</label>
                        <div class="col-lg-10">
                            <input required id="Rpassword" name="Rpassword" class="form-control" type="password" placeholder="Repite tu Password"></input>
                        </div>
                    </div>
                    

                    <div class="row mt-2 m-auto">
                        <button class="btn btn-dark " type="submit">
                            Crear Cuenta
                        </button>
                    </div>
                </form>
                <div class="mt-3 text-center">
                    <h4>Ya tengo una cuenta</h4>
                    <a href="<?php echo constant('URL') ?>main/login">Iniciar Sesion</a>
                </div>
            </div>
        </div>



        <?php require('views/main/templates/foother.php'); ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>

</html>