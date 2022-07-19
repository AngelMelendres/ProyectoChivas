<!doctype html>
<html lang="en">

<head>
  <title>Contacto</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="shortcut icon" href="<?php echo constant('URL') ?>public/img/icono.ico" type="image/x-icon">
  <!-- Bootstrap CSS v5.2.0-beta1 -->

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

  <link rel="stylesheet" href="<?php echo constant('URL') ?>public/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo constant('URL') ?>public/css/styleContacto.css">
  <link rel="stylesheet" href="<?php echo constant('URL') ?>public/css/style.css">

</head>

<body class="vh-100">
  <div class="">
    <?php require('views/main/templates/header.php'); ?>


    <section>
      <div class="topCon">
        <h2>Contáctate con nosotros</h2>
        <p>Te damos la bienvenida Aventurero, desde ahora te invitamos a disfrutar de la Aventura en Ecuador <br>
          Póngase en contacto con nosotros y le responderemos en unos 30 minutos.</p>
      </div>
      <div class="container">
        <div class="contactInfo">
          <div class="box">
            <div class="icon">
              <i class="fa fa-map-marker"></i>
            </div>
            <div class="text">
              <h3>Dirección</h3>
              <p>Riobamba-ESPOCH</p>
            </div>
          </div>
          <div class="box">
            <div class="icon">
              <i class="fa fa-phone"></i>
            </div>
            <div class="text">
              <h3>Número de teléfono</h3>
              <p>+593 99994 8836 <br>+593 96278 9128 </p>
            </div>
          </div>
          <div class="box">
            <div class="icon">
              <i class="fa fa-envelope-o"></i>
            </div>
            <div class="text">
              <h3>Correo Electrónico</h3>
              <p>chivas.espoch@hotmail.com</p>
            </div>
          </div>
        </div>
        <div class="contactForm">
          <h2>Enviar mensaje</h2>
          <form class="" action="#" method="post">
            <div class="inputBox">
              <input type="text" name="" value="" required>
              <span>Nombre Completo</span>
            </div>
            <div class="inputBox">
              <input type="text" name="" value="" required>
              <span>Correo Electrónico</span>
            </div>
            <div class="inputBox">
              <textarea name="" required></textarea>
              <span>Escribe tu mensaje</span>
            </div>
            <div class="inputBox">
              <input type="submit" name="" value="Enviar">
            </div>
          </form>
        </div>
      </div>
    </section>
  </div>

  <?php require('views/main/templates/foother.php'); ?>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>

</html>