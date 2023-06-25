<?php
    $id = $_GET['id'];

    $cnxAdmin = mysqli_connect("localhost","root","","Travelopia");
    $sqlAdmin = "DELETE FROM Usuarios WHERE id='$id'";
    $rtaAdmin = mysqli_query($cnxAdmin,$sqlAdmin);
    if(!$rtaAdmin){
        echo "Error al eliminar los datos";
    }
    else{
        header("Location: read.php");
    }
?>
