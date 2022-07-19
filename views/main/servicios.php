<!doctype html>
<html lang="en">
<?php if (isset($_SESSION["correo"])) {
    $IDCLIENTE = $_SESSION["idCLiente"];
} ?>

<head>
    <title>Servicios </title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="<?php echo constant('URL') ?>public/img/icono.ico" type="image/x-icon">
    <!-- Bootstrap CSS v5.2.0-beta1 -->

    <!--    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="<?php echo constant('URL') ?>public/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo constant('URL') ?>public/css/styleServicios.css">
    <link rel="stylesheet" href="<?php echo constant('URL') ?>public/css/style.css">
</head>

<body class="vh-100">
    <div class="">
        <?php require('views/main/templates/header.php'); ?>

        <section class="m-auto mt-5">
            <?php foreach ($this->servicios as $servicio) { ?>
                <div class="card border-success mb-3 m-auto" style="max-width: 50rem;">
                    <div class="card-header">Nombre de la chiva: <?php echo $servicio->nombre ?></div>
                    <div class="card-body d-flex">
                        <div class="col-3">
                            <img src="<?php echo constant('URL') ?>public/img/<?php echo $servicio->imagen ?>" width="200px" height="200px">
                        </div>
                        <div class="col-9 mx-4">
                            <div class="row">
                                <h5>Ciudad: <?php echo $servicio->ciudad ?> </h5>
                                <h5>Propietario: <?php echo $servicio->propietario ?></h5>
                                <h5>Costo: <?php echo $servicio->costo ?> </h5>
                                <h5>Tamano: <?php echo $servicio->tamano ?> metros</h5>
                            </div>

                            <div class="d-flex mt-3 justify-content-end mx-5">
                                <button class="btn btn-success mx-3" data-bs-toggle="modal" data-bs-target="#modal<?php echo $servicio->id ?>">Mas Informacion</button>
                                <?php if (isset($_SESSION["correo"])) : ?>
                                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalContrato<?php echo $servicio->id ?>">Contratar</button>
                                <?php endif ?>

                            </div>
                        </div>

                    </div>

                    <!-- MODAL Informacion -->
                    <div class="modal fade" id="modal<?php echo $servicio->id ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="row">
                                    <p class="modal-title p-4" id="staticBackdropLabel">Nombre de la chiva: <?php echo $servicio->nombre ?></p>
                                    <img class="m-auto col-6" src="<?php echo constant('URL') ?>public/img/<?php echo $servicio->imagen ?>" width="100px" height="200px">
                                </div>
                                <hr>
                                <div class="row mx-5">
                                    <h5>Ciudad: <?php echo $servicio->ciudad ?> </h5>
                                    <h5>Propietario: <?php echo $servicio->propietario ?></h5>
                                    <h5>Costo: <?php echo $servicio->costo ?> $</h5>
                                    <h5>Tamano: <?php echo $servicio->tamano ?> metros</h5>
                                    <h5>Numero de asientos: <?php echo $servicio->tamano ?></h5>
                                    <h5>Telefono: <?php echo $servicio->tamano ?> </h5>
                                    <h5>Correo: <?php echo $servicio->tamano ?></h5>

                                </div>
                                <div class="row mx-5">
                                    <h5>Itinerario: <?php echo $servicio->itinerario ?> </h5>
                                    <h5>Propietario: <?php echo $servicio->propietario ?></h5>

                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Salir</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- MODAL Informacion -->


                    <!-- MODAL CONTRATO -->
                    <div class="modal fade" id="modalContrato<?php echo $servicio->id ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form method="POST" action="<?php echo constant('URL') ?>main/contratarServicio?idServicio=<?php echo $servicio->id ?>&idCliente=1">
                                    <div class="row mx-5 p-5">

                                        <div class="mb-3">
                                            <label>SELECIONE LA FECHA:</label>
                                            <input required type="date" name="fecha" class="form-control">
                                        </div>
                                        <div class="mb-3">
                                            <label>Ingrese un codigo y recuerdelo:</label>
                                            <input required type="text" name="codigo" class="form-control">
                                        </div>
                                        <div class="mb-3">
                                            <label>Ingrese su cedula:</label>
                                            <input required type="text" class="form-control">
                                        </div>
                                        <div class="mb-3">
                                            <label>Indicaciones:</label>
                                            <textarea class="form-control" cols="40" rows="5">

                                            </textarea>
                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-secondary">Contratar</button>
                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Salir</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- MODAL CONTRATO -->
                </div>
            <?php } ?>
        </section>



    </div>


    <?php require('views/main/templates/foother.php'); ?>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>

</html>