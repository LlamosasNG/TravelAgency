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

    <style>
    .table {
        width: 100%;
        border-collapse: collapse;
        font-family: 'Times New Roman', Times, serif;
    }

    .table th, .table td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
        text-align: center;
        vertical-align: middle;
        
    }

    .table th {
        background-color: #f2f2f2;
    }

    .table tr:nth-child(even) {
        background-color: #f9f9f9;
    }

    .table tr:hover {
        background-color: #e9e9e9;
    }
    </style>
</head>
    
<!-- Start Content Page -->
    <div class="container-fluid bg-light py-5">
        <div class="col-md-6 m-auto text-center">
            <h1 class="h1 text-success" style="text-align: center; font-family:'Times New Roman', Times, serif;"><b>FORMULARIO DE CONTACTO</b></h1>
            <h5 style="font-family: 'Times New Roman', Times, serif; text-align: center;">
                Este apartado solo esta disponible para administradores de la página (No será visible).<br>VER USUARIOS
            </h5>
        </div>
    </div>
    <body>
        <div>
            <table class="table">
                <tr>
                    <th>ID</th>
                    <th>NOMBRE</th>
                    <th>CORREO ELECTRÓNICO</th>
                    <th>TELÉFONO</th>
                    <th>ASUNTO</th>
                    <th>MENSAJE</th>
                    <th>ACCIÓN</th>
                </tr>
                <?php
                    $cnxAdmin = mysqli_connect("localhost","root","","Travelopia");
                    $sqlAdmin = "SELECT * FROM Usuarios ORDER BY id desc";
                    $rtaAdmin = mysqli_query($cnxAdmin,$sqlAdmin);
                    while($mostrar = mysqli_fetch_row($rtaAdmin)){ 
                    ?>
                    <tr style="border-style:double; border-color:black;">
                        <td><?php echo $mostrar['0']?> </td>
                        <td><?php echo $mostrar['1']?> </td>
                        <td><?php echo $mostrar['2']?> </td>
                        <td><?php echo $mostrar['3']?> </td>
                        <td><?php echo $mostrar['4']?> </td>
                        <td><?php echo $mostrar['5']?> </td>
                        <td style="width: 40%; height:40%">
                            <div class="row">
                                <div class="col-md-6 col-lg-3 pb-5">
                                    <div class="h1 text-success text-center"><a href="update.php" class="text-decoration-none"><img src="./assets/img/editarUsuario.png" style="width: 50px;"></a></div>
                                    <a href="update.php" class="text-decoration-none"><h5 class="h5 text-success" style="font-family: 'Times New Roman', Times, serif; text-align: center;">EDITAR USUARIO</h5></a>
                                </div>
                                <div class="col-md-6 col-lg-3 pb-5">
                                    <div class="h1 text-success text-center"><a href="delete.php? id=<?php echo $mostrar['0']?>" class="text-decoration-none"><img src="./assets/img/eliminarUsuario.png" style="width: 50px;"></a></div>
                                    <a href="delete.php? id=<?php echo $mostrar['0']?>" class="text-decoration-none"><h5 class="h5 text-success" style="font-family: 'Times New Roman', Times, serif; text-align: center;">ELIMINAR USUARIO</h5></a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <?php
                    }
                    ?>
            </table>
            <a href="indexAdmin.php" class="btn btn-success btn-lg px-3" style="background-color:#69bb7e; padding: 10px 20px; border-radius: 4px; border-color:black; color: white; cursor: pointer; font-family: 'Times New Roman', Times, serif; width: 15%;"><b>ATRAS</b></a>
        </div>
        <script src="assets/js/jquery-1.11.0.min.js"></script>
        <script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/templatemo.js"></script>
        <script src="assets/js/custom.js"></script>
    </body>
</html>