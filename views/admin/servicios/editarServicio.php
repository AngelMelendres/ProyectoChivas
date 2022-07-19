<!doctype html>
<html lang="en">

<head>
    <title>EDITAR CHIVA</title>
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
                <h4>Informacion de la Chiva</h4>
                <hr>
                <?php echo $this->servicio->nombre?>

                <form method="POST" action="<?php echo constant('URL') ?>admin/servicios/update?id=<?php echo $this->servicio->id ?>" enctype="multipart/form-data" id="formRegistroServicio">
                    <div class="p-3 d-flex justify-content-between">
                        <div class="col mx-1">
                            <label>Nombre de la Chiva</label>
                            <input value="<?php echo $this->servicio->nombre?>" required id="nombre" name="nombre" type="text" class="form-control" title="El nombre de la chiva solo puede contener letras y espacios." pattern="^[a-zA-Z -']+$">
                        </div>
                        <div class="col mx-1">
                            <label>Tamano</label>
                            <input value="<?php echo $this->servicio->tamano?>" required id="tamano" name="tamano" type="text" class="form-control" title="El tamaño de la chiva se mide en metros y no puede ser mayor a 9m, ni menor a 3m" pattern="^[3-9]$">
                        </div>
                        <div class="col mx-2">
                            <label>Matricula</label>
                            <input value="<?php echo $this->servicio->matricula?>" required id="matricula" name="matricula" type="text" class="form-control" title="Introduzca una matricula valida Ejemplo: ABC-123 / ABC-1234." pattern="[A-Z]{3}-[0-9]{3,4}">
                        </div>
                        <div class="col mx-1">
                            <label>Cantidad de Asientos</label>
                            <input value="<?php echo $this->servicio->numAsientos?>" required id="numAsientos" name="numAsientos" type="number" class="form-control" title="Minimo 10 asientos maximo 70 asientos" min="10" max="70">
                        </div>
                    </div>
                    <div class="p-3 d-flex justify-content-between">
                        <div class="col mx-1">
                            <label>Nombre del propietario</label>
                            <input value="<?php echo $this->servicio->propietario ?>" required id="propietario" name="propietario" type="text" class="form-control" title="El nombre del propietario solo admite letras y espacios" pattern="[a-zA-Z ]+">
                        </div>
                        <div class="col mx-1">
                            <label>Cedula</label>
                            <input value="<?php echo $this->servicio->cedula ?>" required id="cedula" name="cedula" type="text" class="form-control" title="La cédula consta de 10 digitos y todos ellos son números."  pattern="[0-9]{10}">
                        </div>
                        <div class="col mx-2">
                            <label>Telefono</label>
                            <input value="<?php echo $this->servicio->telefono ?>" required id="telefono" name="telefono" type="text" class="form-control" title="El teléfono solo puede contener numeros y son 10 dígitos."  pattern="0[0-9]+" maxlength="10">
                        </div>
                        <div class="col mx-1">
                            <label>Correo</label>
                            <input value="<?php echo $this->servicio->correo ?>" required id="correo" name="correo" type="email" class="form-control">
                        </div>
                    </div>
                    <div class="p-3 d-flex justify-content-between">
                        <div class="col mx-1">
                            <label>Ciudad de Servicio</label>
                            <select value="<?php echo $this->servicio->ciudad ?>" required name="ciudad" id="ciudad" class="form-control">
                                <option disabled value="">--Escoja una opcion--</option>
                                <option value="">Pichincha</option>
                                <option value="">Guayas</option>
                                <option value="">Galapagos</option>
                            </select>
                        </div>
                        <div class="col mx-2">
                            <label>Imagen</label>
                            <img src="<?php echo constant('URL')?>public/img/<?php echo $this->servicio->imagen ?>" width="150px">
                        </div>
                        <div class="col mx-1">
                            <label>Costo del servicio</label>
                            <input value="<?php echo $this->servicio->costo ?>" required id="costo" name="costo" type="number" class="form-control"  title="Solo se permite números y cantidades positivas." pattern="^[0-9]{1,3}([.,][0-9]{1,3})?$">
                        </div>
                    </div>
                    <div class="p-3 d-flex justify-content-between">
                        <div class="col mx-1">
                            <label>Itinierario o ruta</label>
                            <textarea  required name="itinerario" id="itinerario" class="form-control"><?php echo $this->servicio->itinerario ?></textarea>
                        </div>
                        <div class="col mx-1">
                            <label>Descripcion o indicaciones</label>
                            <textarea  required name="descripcion" id="descripcion" class="form-control"><?php echo $this->servicio->descripcion ?></textarea>
                        </div>

                    </div>


                    <div class="row m-4">
                        <button class="btn btn-warning" type="submit">ACTUALIZAR</button>
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