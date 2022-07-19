<!doctype html>
<html lang="en">

<head>
  <title>Iniciar Sesion</title>
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

  <div class="bg-secondary vh-100 d-flex align-items-center justify-content-center">
    <div class="col-md-5 p-4 m-auto card">
      <h1 class="text-center">Iniciar Sesion</h1>
      <form method="POST" action="<?php echo constant('URL') ?>admin/">
        <div class="row mb-2">
          <label class="col-lg-2 col-form-label">Email</label>
          <div class="col-lg-10">
            <input required id="email" name="email" class=" form-control" type="email" placeholder="Tu Email"></input>
          </div>
        </div>
        <div class="row mb-3">
          <label class="col-lg-2 col-form-label">Password</label>
          <div class="col-lg-10">
            <input required id="password" name="password" class="form-control" type="password" placeholder="Tu Password"></input>
          </div>
        </div>
        <div class="row mt-2 m-auto">
          <button class="btn btn-dark " type="submit">
            Iniciar Sesion
          </button>
        </div>
      </form>
    </div>
  </div>

  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>

</html>