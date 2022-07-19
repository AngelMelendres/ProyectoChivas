<!doctype html>
<html lang="en">

<head>
    <title>SERVICIOS</title>
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
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
</head>

<body>

    <div class="vh-100 d-flex">
        <div class="col-3 bg-primary">
            <?php include('views/admin/templates/aside.php') ?>
        </div>
        <div class="col-9 bg-light">
            <header class="p-4 bg-info d-flex justify-content-between">
                <span>Hola: Angel Melendres</span>
                <h4>CLIENTE</h4>
                <div>
                    <a class="btn btn-dark btn-w" href="<?php echo constant('URL') ?>admin/login" role="button"><i class="fa-solid fa-arrow-right-from-bracket"></i> Salir</a>
                </div>
            </header>
            <section class="d-flex m-4 mt-3 p-3">
                <div class="col d-flex">
                    <a href="<?php echo constant('URL') ?>admin/clientes/registrar"> <button class="btn btn-success"> + NUEVO</button>
                    </a>

                </div>
                <div class="d-flex col-6">
                    <input placeholder="Busca por nombre o ciudad ..." class="form-control" type="search">
                    <button class="btn btn-success mx-2">Buscar</button>
                </div>

            </section>
            <section class="card m-4 mt-3 p-3">
                <table id="tablaServicios" class="table table-responsive">
                    <thead class="thead-inverse">
                        <tr>
                            <th>CEDULA</th>
                            <th>NOMBRE</th>
                            <th>APELLIDO</th>
                            <th>CORREO</th>
                            <th>TELEFONO</th>
                            <th>OPCIONES</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($this->clientes as $cliente) { ?>
                            <tr>
                                <td><?php echo $cliente->cedula ?></td>
                                <td><?php echo $cliente->nombre ?></td>
                                <td><?php echo $cliente->apellido ?></td>
                                <td><?php echo $cliente->correo ?></td>
                                <td><?php echo $cliente->telefono ?></td>

                                <td class="">
                                    <button class="btn btn-dark"><a href="<?php echo constant('URL') ?>admin/clientes/editar?id=<?php echo $cliente->id ?>" class=" text-white fa-solid fa-pen-to-square"></a></button>
                                    <button class="btn btn-danger"><a href="<?php echo constant('URL') ?>admin/clientes/eliminar?id=<?php echo $cliente->id ?>" class="text-white fa-solid fa-trash"></a></button>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>

            </section>
        </div>
    </div>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $('#tablaServicios').DataTable({
                language: {
                    "decimal": "",
                    "emptyTable": "No hay información",
                    "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
                    "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
                    "infoFiltered": "(Filtrado de _MAX_ total entradas)",
                    "infoPostFix": "",
                    "thousands": ",",
                    "lengthMenu": "Mostrar _MENU_ Entradas",
                    "loadingRecords": "Cargando...",
                    "processing": "Procesando...",
                    "search": "Buscar:",
                    "zeroRecords": "Sin resultados encontrados",
                    "paginate": {
                        "first": "Primero",
                        "last": "Ultimo",
                        "next": "Siguiente",
                        "previous": "Anterior"
                    }
                },

                dom: 'Bfrtip',
                buttons: [{
                    extend: 'pdfHtml5',
                    download: 'open',
                    text: 'Descargar Reporte',
                }]
            });
        });
    </script>
</body>

</html>