<?php
    $id = rand(1,99);
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $cnx = mysqli_connect("localhost","root","","Travelopia");
    $sql = "INSERT INTO Usuarios VALUES ('$id','$name','$email','$phone','$subject','$message')";
    $rta = mysqli_query($cnx,$sql);
    if(!$rta){
        echo "Error al insertar los datos";
    }
    else{
        header("Location: contact.html");
    }
?>
