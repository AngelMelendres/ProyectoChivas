<!doctype html>
<html lang="en">

<head>
    <title>Editar Cliente</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="<?php echo constant('URL') ?>public/img/iconoAdmin.ico" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo constant('URL') ?>public/css/bootstrapFlaty.min.css">
    <link rel="stylesheet" href="<?php echo constant('URL') ?>public/css/styleAdmin.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <!-- FUENTES -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">

</head>

<body>

    <div class="vh-100 d-flex">
        <div class="col-3 bg-primary">
            <?php include('views/admin/templates/aside.php') ?>
        </div>
        <div class="col-9 bg-light">
            <header class="p-4 bg-info d-flex justify-content-between">
                <span>Hola: Angel Melendres</span>
                <h4>EDITAR</h4>
                <div>
                    <a class="btn btn-dark btn-w" href="<?php echo constant('URL') ?>admin/login" role="button"><i class="fa-solid fa-arrow-right-from-bracket"></i> Salir</a>
                </div>
            </header>
            <section class="card m-3 p-3">
                <h4>Informacion del cliente</h4>
                <hr>
                <h1>USUARIO: <?php echo $this->cliente->cedula ?> </h1>

                <form method="POST" action="<?php echo constant('URL') ?>admin/clientes/update?id= <?php echo $this->cliente->id ?>" enctype="multipart/form-data" id="formRegistroServicio">
                    <div class="p-3 d-flex justify-content-between">
                        <div class="col mx-1">
                            <label>CEDULA</label>
                            <input value="<?php echo $this->cliente->cedula ?>" required id="cedula" name="cedula" type="text" class="form-control" title="La cédula consta de 10 digitos y todos ellos son números."  pattern="[0-9]{10}">
                        </div>
                        <div class="col mx-1">
                            <label>NOMBRE</label>
                            <input value="<?php echo $this->cliente->nombre ?>" required id="nombre" name="nombre" type="text" class="form-control" title="El nombre solo puede contener letras." pattern="^[a-zA-Z]+">
                        </div>
                        <div class="col mx-2">
                            <label>APELLIDO</label>
                            <input value="<?php echo $this->cliente->apellido ?>" required id="apellido" name="apellido" type="text" class="form-control" title="El apellido solo puede contener letras."  pattern="^[a-zA-Z]+">
                        </div>
                    </div>

                    <div class="p-3 d-flex justify-content-between">
                        <div class="col mx-1">
                            <label>CORREO</label>
                            <input value="<?php echo $this->cliente->correo ?>" required id="correo" name="correo" type="email" class="form-control" title="Correo no valido.">
                        </div>
                        <div class="col mx-1">
                            <label>TELEFONO</label>
                            <input value="<?php echo $this->cliente->telefono ?>" required id="telefono" name="telefono" type="tel" class="form-control" title="El teléfono solo puede contener numeros y son 10 dígitos."  pattern="0[0-9]+" maxlength="10">
                        </div>

                    </div>

                    <div class="row m-4">
                        <button class="btn btn-success" type="submit">ACTUALIZAR</button>
                    </div>
                </form>
            </section>
        </div>
    </div>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>

</html>