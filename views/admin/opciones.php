<!doctype html>
<html lang="en">

<head>
    <title>Informacion</title>
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
            <?php include('templates/aside.php') ?>
        </div>
        <div class="col-9 bg-light">
            <header class="p-4 bg-info d-flex justify-content-between">
                <span>Hola: Angel Melendres</span>
                <h4>INFORMACION</h4>
                <div class="">
                    <a class="btn btn-dark btn-w" href="<?php echo constant('URL') ?>admin/login" role="button"><i class="fa-solid fa-arrow-right-from-bracket"></i> Salir</a>
                </div>
            </header>
            <div class="articulo" style="margin-left: 50px;">
                <h3 style="border-bottom: 10px solid;">Objetivo General</h3>
                <p>
                    Crecer económicamente como empresa turística a través de las ventas de servicios o productos de los más altos estándares de calidad y manteniendo la confiabilidad y fidelidad de nuestros clientes.
                </p>
                <br>
                <h3 style="border-bottom: 10px solid;">Objetivo Específicos</h3>
                <p>
                    Mantener constante capacitación del talento humano de la empresa para lograr prestar una atención personalizada a nuestros clientes, logrando aumentar de manera efectiva las ventas de cada uno de los servicios prestados
                </p>
                <br>
                <h3 style="border-bottom: 10px solid;">Misión</h3>
                <p>Ofrecer un servicio personalizado de calidad y confiabilidad, a través de la buena atención de nuestro personal debidamente capacitado, diseñando viajes únicos, a precios accesibles, logrando superar las expectativas de nuestros clientes.</p>
                <br>
                <h3 style="border-bottom: 10px solid;">Visión</h3>
                <p>Llegar ser una Agencia de Viajes reconocida en nuestra región, por la confianza y seguridad que le ofrecemos a nuestros clientes, presentando innovadores servicios y asegurando una actividad turística estable, promoviendo un ambiente de buenas relaciones y obteniendo la mayor satisfacción de nuestros clientes.</p>
                <br>
                <center>
                    <h3 style="border-bottom: 10px solid;">Nuestros Valores</h3>
                </center>
                <p>
                    Amabilidad, Calidad y excelencia en el servicio, Puntualidad, Confiabilidad, Diversión y trabajo en equipo, Honestidad, Innovación e inspiración,
                    Integridad y respeto, Pasión y compromiso,
                </p>
            </div>

        </div>
    </div>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>

</html>