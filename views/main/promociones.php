<!doctype html>
<html lang="en">
  <head>
    <title>Promociones</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="<?php echo constant('URL')?>public/img/icono.ico" type="image/x-icon">
    <!-- Bootstrap CSS v5.2.0-beta1 -->

    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="<?php echo constant('URL')?>public/css/style.css">
    <link rel="stylesheet" href="<?php echo constant('URL')?>public/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@6.9.96/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="<?php echo constant('URL')?>public/css/styleProm.css">
    <link rel="stylesheet" href="<?php echo constant('URL')?>public/css/styleCaja.css">
    <script src="<?php echo constant('URL')?>public/js/promociones.js" defer></script>
  </head>
  <body class="vh-100">
    <div class="">
       <?php require ('views/main/templates/header.php'); ?>
        <div class="overlay">
          <div class="slideshow">
            <span class="btn_cerrar">&times;</span>
            <div class="botones adelante">
              <i class="mdi mdi-arrow-right-circle-outline"></i>
            </div>
            <div class="botones atras">
              <i class="mdi mdi-arrow-left-circle-outline"></i>
            </div>
            <img src="" alt="" id="img_slideshow">
          </div>
        </div>
        <header class="encabezado"><h1>Promociones</h1></header>
        <section class="galeria">
          <div class="columna">
            <img src="../public/img/img1.jpg" alt="" data-img-mostrar="0">
            <img src="../public/img/img3.jpg" alt="" data-img-mostrar="1">
          </div>
          <div class="columna">
            <img src="../public/img/img4.jpg" alt="" data-img-mostrar="2">
            <img src="../public/img/img6.jpg" alt="" data-img-mostrar="3">
          </div>
          <div class="columna">
            <img src="../public/img/img8.jfif" alt="" data-img-mostrar="4">
            <img src="../public/img/img10.jpg" alt="" data-img-mostrar="5">
          </div>
        </section>
        <section class="contenidoInf">
          <div class="caja">
            <h1>CHIVA DISCO <br>$ 180</h1>
            <p>
            2 Horas de recorrido
           <br> · Recorrido por Zonas turísticas
           <br> · Incluye DJ y Animador
           <br> · Capacidad de 30 personas debido a la pandemia
           <br> · 24 Litros de canelazo hecho en leña
           <br> · Pausa en el Centro Histórico
           <br> · Elección pareja más animada
           <br> · Regalos varios
           <br> * Opcionales: Bebidas Soft
            </p>
          </div>
          <div class="caja">
            <h1>BUS PARTY <br> $ 200</h1>
            <p>
            · 2 Horas de recorrido
           <br> · Recorrido por Zonas turísticas
           <br> · Incluye DJ y Animador
           <br> · Capacidad de 30 personas debido a la pandemia
           <br> · Cócteles de Daikiri Frutos Rojos o Canelazo Frozen
           <br> · Pausa en el Centro Histórico
           <br> · Elección pareja más animada
           <br> · Regalos varios
           <br> · Aire Acondicionado + Vista Panorámica
           <br> * Opcionales: Bebidas Soft
            </p>
          </div>
          <div class="caja">
            <h1>CHIVA TRADICIONAL <br> $ 300</h1>
            <p>
            · 2 Horas de recorrido
           <br> · Recorrido por Zonas turísticas
           <br> · Banda de Pueblo con 6 integrantes
           <br> · Capacidad de 20 personas debido a la pandemia
           <br> · 24 Litros de canelazo hecho en leña
           <br> · Pausa en el Centro Histórico
           <br> · Elección pareja más animada
           <br> · Regalos varios
           <br> * Opcionales: Bebidas Soft
            </p>
          </div>
        </section>
        <br>
        <?php require ('views/main/templates/foother.php'); ?>
      </div>   
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
  </body>
</html>