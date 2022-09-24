<?php 
    if (!empty($_POST["nombre"]) and !empty($_POST["email"]) and !empty($_POST["celular"]) and !empty($_POST["edad"]) and !empty($_POST["aviso"])) {
       
       $nombre=$_POST["nombre"];
       $email=$_POST["email"];
       $celular=$_POST["celular"];
       $edad=$_POST["edad"];
       $aviso=$_POST["aviso"];

       $sql=$conexion->query(" insert into visitantes(nombre,email,celular,edad,aviso) values('$nombre','$email','$celular','$edad','$aviso') ");
       if ($sql==1) {
        echo 'Vistante registrado correctamente';
       }
    }
?>