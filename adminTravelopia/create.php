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
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin=""/>

</head>

<body>
    <!-- Start Content Page -->
    <div class="container-fluid bg-light py-5">
        <div class="col-md-6 m-auto text-center">
            <h1 class="h1 text-success" style="text-align: center; font-family:'Times New Roman', Times, serif;"><b>FORMULARIO DE CONTACTO</b></h1>
            <h5 style="font-family: 'Times New Roman', Times, serif; text-align: center;">
                Este apartado solo esta disponible para administradores de la página (No será visible).<br>AGREGAR USUARIO
            </h5>
        </div>
    </div>

    <!-- Start Contact -->
    <div class="container py-5">
        <div class="row py-5">
            <form action="insert.php" class="col-md-9 m-auto" method="post" role="form">
                <div class="row">
                    <div class="form-group col-md-6 mb-3">
                        <label for="inputname" style="font-family: 'Times New Roman', Times, serif;">NOMBRE:</label>
                        <input type="text" class="form-control mt-1" id="name" name="name" placeholder="Escribe tu nombre" required>
                    </div>
                    <div class="form-group col-md-6 mb-3">
                        <label for="inputemail" style="font-family: 'Times New Roman', Times, serif;">CORREO ELECTRÓNICO:</label>
                        <input type="text" class="form-control mt-1" id="email" name="email" placeholder="Escribe tu correo electrónico" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="inputphone" style="font-family: 'Times New Roman', Times, serif;">TELÉFONO:</label>
                        <input type="text" class="form-control mt-1" id="email" name="phone" placeholder="Escribe tu número telefónico" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="inputsubject" style="font-family: 'Times New Roman', Times, serif;">ASUNTO:</label>
                    <input type="text" class="form-control mt-1" id="subject" name="subject" placeholder="Escribe el asunto" required>
                </div>
                <div class="mb-3">
                    <label for="inputmessage" style="font-family: 'Times New Roman', Times, serif;">MENSAJE:</label>
                    <textarea class="form-control mt-1" id="message" name="message" placeholder="Escribe el mensaje" rows="8" required></textarea>
                </div>
                <div class="row">
                    <div class="col text-end mt-2">
                        <a href="indexAdmin.php" class="btn btn-success btn-lg px-3" style="background-color:#69bb7e; padding: 10px 20px; border-radius: 4px; border-color:black; color: white; cursor: pointer; font-family: 'Times New Roman', Times, serif; width: 25%;"><b>ATRAS</b></a>
                        <button type="submit" nameclass="btn btn-success btn-lg px-3" style="background-color:#69bb7e; padding: 10px 20px; border-radius: 4px; color: white; cursor: pointer; font-family: 'Times New Roman', Times, serif; width: 25%;"><b>ENVIAR</b></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    
    <!-- End Contact -->


    <!-- Start Script -->
    <script src="assets/js/jquery-1.11.0.min.js"></script>
    <script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/templatemo.js"></script>
    <script src="assets/js/custom.js"></script>
    <!-- End Script -->
</body>

</html>