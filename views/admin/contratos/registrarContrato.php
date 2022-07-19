<!doctype html>
<html lang="en">

<head>
    <title>NUEVO CONTRATO</title>
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
        <div class="col-3">
            <?php include('views/admin/templates/aside.php') ?>
        </div>
        <div class="col-9 bg-light">
            <header class="p-4 bg-info d-flex justify-content-between">
                <span> <b>Hola:</b> Angel Melendres</span>
                <h4>NUEVO CONTRATO</h4>
                <div class="boton">
                    <a class="btn btn-dark btn-w" href="<?php echo constant('URL') ?>admin/login" role="button"><i class="fa-solid fa-arrow-right-from-bracket"></i> Salir</a>
                </div>
            </header>

            <section class="card m-3 p-3">
                <h4>Contratacion de un servicio</h4>
                <hr>

                <form method="POST" action="<?php echo constant('URL') ?>admin/contratos/insert" enctype="multipart/form-data" id="formRegistroServicio">
                    <div class="p-3 d-flex justify-content-between">
                        <div class="col mx-1">
                            <label>Fecha</label>
                            <input required name="fecha" id="fecha" type="date" class="form-control"  value="2022-07-19"  min="2022-07-19" max="2023-05-15">
                        </div>
                        <div class="col mx-1">
                            <label>Codigo</label>
                            <input name="codigo" id="codigo" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="p-3 d-flex justify-content-between">

                        <div class="col mx-1">
                            <h3>Chivas</h3>
                            <select required class="form-control" name="servicio" id="servicio">
                                <option disabled selected value="">--Selecione un servicio--</option>

                                <?php foreach ($this->servicios as $servicio) { ?>

                                    <option value="<?php echo $servicio->id ?>">
                                        <?php echo $servicio->nombre ?> ---
                                        <?php echo $servicio->ciudad ?> ---
                                        <?php echo $servicio->costo ?>$ ---
                                        <?php echo $servicio->itinerario ?>

                                    </option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="p-3 d-flex justify-content-between">
                        <div class="col mx-1">
                            <h3>Cliente</h3>
                            <button class="btn btn-primary mb-3">
                                <a class="p-4" href="<?php echo constant('URL') ?>admin/clientes/registrar">
                                    Nuevo
                                </a>
                            </button>


                            <select required class="form-control" name="cliente" id="cliente">
                                <option disabled selected value="">--Selecione un Cliente o agrege uno --</option>
                                <?php foreach ($this->clientes as $cliente) { ?>
                                    <option value="<?php echo $cliente->id ?>"><?php echo $cliente->cedula ?>---<?php echo $cliente->apellido ?>---<?php echo $cliente->correo ?></option>
                                <?php } ?>
                            </select>
                        </div>

                    </div>



                    <div class="row m-4">
                        <button class="btn btn-success" type="submit">CONTRATAR</button>
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