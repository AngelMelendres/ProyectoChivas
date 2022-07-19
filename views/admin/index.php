<!doctype html>
<html lang="en">

<head>
    <title>ADMINSTRADOR</title>
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
        <div class=" col-3 bg-primary ">
            <?php include('templates/aside.php') ?>
        </div>
        <div class="col-9 bg-light">
            <header class="p-4 bg-info d-flex justify-content-between">
                <span> <b>Hola:</b> Angel Melendres</span>
                <h4>ADMINISTRADOR</h4>
                <div class="boton">
                    <a class="btn btn-dark btn-w" href="<?php echo constant('URL') ?>admin/login" role="button"><i class="fa-solid fa-arrow-right-from-bracket"></i> Salir</a>
                </div>
            </header>

            <div class="d-flex  justify-content-around mt-3">
                <div class="card text-white bg-primary mb-3" style="max-width: 20rem;">
                    <div class="card-header">CHIVAS</div>
                    <div class="card-body">
                        <h4 class="card-title">Cantidad de Chivas (24)</h4>
                        <div class="m-auto text-center">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2c/BSicon_BUS.svg/500px-BSicon_BUS.svg.png" width="150px" alt="">
                        </div>
                    </div>
                </div>
                <div class="card text-white bg-secondary mb-3" style="max-width: 20rem;">
                    <div class="card-header">CONTRAROS</div>
                    <div class="card-body">
                        <h4 class="card-title">Cantidad de Contratos(10)</h4>
                        <div class="m-auto text-center mt-3">
                            <img src="https://cdn-icons-png.flaticon.com/512/2666/2666501.png" width="100px" alt="">
                        </div>
                    </div>
                </div>
                <div class="card text-white bg-success mb-3" style="max-width: 20rem;">
                    <div class="card-header">CLIENTES</div>
                    <div class="card-body">
                        <h4 class="card-title">Cantidad de Clientes (5)</h4>
                        <div class="m-auto text-center mt-3">
                            <img src="https://cdn-icons-png.flaticon.com/512/2639/2639669.png" width="100px" alt="">
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-around mt-3">

                <div class="col-6 card bg-info mb-3">
                    <div class="card-header">CUENTAS BANCARIAS</div>
                    <h4 class="card-title">Pichincha</h4>
                    <h5>22047378237284 - Chivas-Sierra - Horros</h5>
                    <h4 class="card-title">Guayaquil</h4>
                    <h5>22047378237284 - Chivas-Costa - Corriete</h5>
                    <h4 class="card-title">Pacifico</h4>
                    <h5>22047378237284 - Chivas-Oriente - Cirriente</h5>
                    <h4 class="card-title">Produbanco</h4>
                    <h5>22047378237284 - Chivas-Insular - Horros</h5>
                </div>
                <div class="col-5 card text-dark bg-ligth mb-3">
                    <div class="card-header">CONTACTOS</div>
                    <div class="card-body">
                        <h4 class="card-title">Guayaquil</h4>
                        <h5>0803643312 - 0976543312 </h5>
                        <h4 class="card-title">Quito</h4>
                        <h5>0976543312 - 0886543111</h5>
                        <h4 class="card-title">Riobamba</h4>
                        <h5>0399943312</h5>
                        <h4 class="card-title">Cuenca</h4>
                        <h5>0976543234</h5>
                    </div>
                </div>



            </div>

        </div>
    </div>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>

</html>