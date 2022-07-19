<!doctype html>
<html lang="en">

<head>
    <title><?php echo $this->servicio->nombre ?></title>
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
                <h4>VER SERVICIO</h4>
                <div>
                    <a class="btn btn-dark btn-w" href="<?php echo constant('URL') ?>admin/login" role="button"><i class="fa-solid fa-arrow-right-from-bracket"></i> Salir</a>
                </div>
            </header>
            <section class="card p-4 m-4 ">
                <div class="d-flex">
                    <div class="col card">
                        <img src="<?php echo constant('URL') ?>public/img/<?php echo $this->servicio->imagen ?>" height="400px">

                    </div>
                    <div class="col card p-3">
                        <div class="card col p-2 m-1">
                            <h3>DATOS DEL TRANSPORTE</h3>
                            <h4>Nombre: <?php echo $this->servicio->nombre ?></h4>
                            <h4>Costo: <?php echo $this->servicio->costo ?>$</h4>
                            <h4>Numero de asientos: <?php echo $this->servicio->numAsientos ?></h4>
                            <h4>Tamano: <?php echo $this->servicio->numAsientos ?> metros</h4>
                            <h4>Ciudad: <?php echo $this->servicio->ciudad ?></h4>

                        </div>

                        <div class="card col p-2 m-1">
                            <h3>DATOS DEL PROPIETARIO</h3>
                            <h4>Propietario: <?php echo $this->servicio->propietario ?></h4>
                            <h4>Telefono: <?php echo $this->servicio->telefono ?></h4>
                            <h4>Correo: <?php echo $this->servicio->correo ?></h4>
                            <h4>Cedula: <?php echo $this->servicio->cedula ?></h4>
                        </div>



                    </div>

                </div>
                <div class="card p-4 m-3">
                    <h5>Itinerario: </h5>
                    <?php echo $this->servicio->itinerario ?></h5>

                </div>
                <div class="card p-4  m-3">
                    <h5>Descripcion: </h5>
                    <?php echo $this->servicio->descripcion ?></h5>

                </div>

            </section>
        </div>
    </div>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>

</html>