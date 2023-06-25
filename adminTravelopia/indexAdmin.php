<!DOCTYPE html>
<html lang="es-MX">

<head>
    <title>Travelopia - Administrador</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="assets/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/airplane.ico">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/templatemo.css">
    <link rel="stylesheet" href="assets/css/custom.css">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">

    <!-- Load map styles -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
</head>

<body>

    <!-- Start Content Page -->
    <div class="container-fluid bg-light py-5">
        <div class="col-md-6 m-auto text-center">
            <h1 class="h1 text-success" style="text-align: center; font-family:'Times New Roman', Times, serif;"><b>CONTROL DEL ADMINISTRADOR</b></h1>
            <h5 style="font-family: 'Times New Roman', Times, serif; text-align: center;">
                Este apartado solo esta disponible para administradores de la página (No será visible).
            </h5>
        </div>
    </div>

    <!-- Start CRUD -->
    <div class="row">
        <div class="col-md-6 col-lg-3 pb-5">
            <div class="h-100 py-5 services-icon-wap shadow">
                <div class="h1 text-success text-center"><a href="create.php" class="text-decoration-none"><img src="./assets/img/agregarUsuario.png" style="width: 80px;"></a></div>
                <a href="create.php" class="text-decoration-none"><h5 class="h3 text-success" style="font-family: 'Times New Roman', Times, serif; text-align: center;">AGREGAR USUARIO</h2></a>
            </div>
        </div>

        <div class="col-md-6 col-lg-3 pb-5">
            <div class="h-100 py-5 services-icon-wap shadow">
                <div class="h1 text-success text-center"><a href="read.php" class="text-decoration-none"><img src="./assets/img/verUsuario.png" style="width: 80px;"></a></div>
                <a href="read.php" class="text-decoration-none"><h5 class="h3 text-success" style="font-family: 'Times New Roman', Times, serif; text-align: center;">VER USUARIO</h2></a>
            </div>
        </div>
    </div>
    <!-- End CRUD -->


    <!-- Start Script -->
    <script src="assets/js/jquery-1.11.0.min.js"></script>
    <script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/templatemo.js"></script>
    <script src="assets/js/custom.js"></script>
    <!-- End Script -->
</body>

</html>