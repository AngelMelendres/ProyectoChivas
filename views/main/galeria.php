<!doctype html>
<html lang="en">

<head>
  <title>Galeria</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="shortcut icon" href="<?php echo constant('URL') ?>public/img/icono.ico" type="image/x-icon">
  <!-- Bootstrap CSS v5.2.0-beta1 -->

  <!--     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous"> -->
  <link rel="stylesheet" href="<?php echo constant('URL') ?>public/css/style.css">
  <link rel="stylesheet" href="<?php echo constant('URL') ?>public/css/bootstrap.min.css">

</head>

<body class="vh-100">
  <div class="">
    <?php require('views/main/templates/header.php'); ?>


  </div>
  <section>
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="6" aria-label="Slide 4"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="https://www.chivasquito.com/wp-content/uploads/2018/10/galeria-01.jpg" height="550px" class="d-block w-100">
          <div class="carousel-caption d-none d-md-block">
            <h5>Chiva #1</h5>
            <p>Disfruta de una gran fiesta.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="https://images.clasiec.com/2010/06/09/chivas-de-alquiler-en-quito-chivatkreg-chivas-bailables_93f1e5cb_3.jpg" height="550px" class="d-block w-100">
          <div class="carousel-caption d-none d-md-block">
            <h5>Chiva #2</h5>
            <p>Esta chiva cuenta con capacidad para 20 personas.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="https://www.chivasquito.com/wp-content/uploads/2018/10/galeria-27.jpg" height="550px" class="d-block w-100">
          <div class="carousel-caption d-none d-md-block">
            <h5>Chiva #3</h5>
            <p>Disfruta de tus mejores momentos.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="https://www.eluniverso.com/resizer/gXmmxj2ssnLfOtz9hYO_XrNGSJk=/1058x670/smart/filters:quality(70)/cloudfront-us-east-1.images.arcpublishing.com/eluniverso/DDOJRBLNHZHJDFHBTR2SJTZE7I.jpg" height="550px" class="d-block w-100">
          <div class="carousel-caption d-none d-md-block">
            <h5>Chiva #4</h5>
            <p>Esta chiva cuenta con capacidad para 25 personas.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="https://www.eluniverso.com/resizer/5lZIGC2f2Vr0YUbPeD9lVn3r6sE=/1198x670/smart/filters:quality(70)/cloudfront-us-east-1.images.arcpublishing.com/eluniverso/HMLXENE6NRC7BDMXJLVJOTJP64.jpg" height="550px" class="d-block w-100">
          <div class="carousel-caption d-none d-md-block">
            <h5>Chiva #5</h5>
            <p>Esta chiva cuenta con capacidad para 15 personas.</p>
          </div>
        </div>

      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>

</html>