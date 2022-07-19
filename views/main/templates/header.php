<?php session_start(); ?>
<div id="header" class="">
    <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center">
                <img class="m-2" src="http://chivasdemitierra.yolasite.com/resources/Chiva%20esp.png" width="140px" alt="Logo">
                <h1>Chivas Espoch</h1>

            </div>
            <ul class="nav p-4 -m-auto">
                <li class="nav-item">
                    <a class="nav-link text-white" href="<?php echo constant('URL') ?>">INICIO</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="<?php echo constant('URL') ?>main/servicios">SERVICIOS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="<?php echo constant('URL') ?>main/promociones">PROMOCIONES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="<?php echo constant('URL') ?>main/galeria">GALERIA</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="<?php echo constant('URL') ?>main/nosotros">NOSOTROS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="<?php echo constant('URL') ?>main/contacto">CONTACTO</a>
                </li>

            </ul>

            <?php if (isset($_SESSION["correo"])) : ?>
                <div>
                    <a href="<?php echo constant('URL') ?>main/cerrarSesion"><button class="btn btn-alert">Salir</button></a>
                </div>
            <?php endif ?>

            <?php if (!isset($_SESSION["correo"])) : ?>
                <div>
                    <a href="<?php echo constant('URL') ?>main/login"><button class="btn btn-alert">Iniciar Sesion</button></a>
                </div>
            <?php endif ?>



            



        </div>
    </nav>