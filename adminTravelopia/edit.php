<?php
    $id = rand(1,99);
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $cnxAdmin = mysqli_connect("localhost","root","","Travelopia");
    $sqlAdmin = "UPDATE Usuarios SET name='$name', email='$email', phone='$phone', subject='$subject', message='$message' WHERE 1";
    $rtaAdmin = mysqli_query($cnxAdmin,$sqlAdmin);
    if(!$rtaAdmin){
        echo "Error al actualizar los datos";
    }
    else{
        header("Location: read.php");
    }
?>