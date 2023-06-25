<?php
    $id = rand(1,99);
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $cnxAdmin = mysqli_connect("localhost","root","","Travelopia");
    $sqlAdmin = "INSERT INTO Usuarios VALUES ('$id','$name','$email','$phone','$subject','$message')";
    $rtaAdmin = mysqli_query($cnxAdmin,$sqlAdmin);
    if(!$rtaAdmin){
        echo "Error al insertar los datos";
    }
    else{
        header("Location: indexAdmin.php");
    }
?>
