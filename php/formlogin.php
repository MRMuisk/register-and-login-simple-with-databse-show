<?php

session_start();



include 'main.php';


$email=$_POST['email'];
$password=$_POST['password'];

    if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
    $emil = conexion();
    $emil = $emil -> query("SELECT * FROM usuario WHERE usuario_email = '$email'");
    if($emil -> rowCount()===1)
    {
        echo "El email ya está registrado" . "<br>";
       $emil = $emil -> fetch();
       if(password_verify($password, $emil['usuario_clave'])){
           echo "Bienvenido";
           $_SESSION['id'] = $emil['usuario_id'];
           $_SESSION['nombre'] = $emil['usuario_nombre'];
           $_SESSION['email'] = $emil['usuario_email'];
           echo "<meta http-equiv='refresh' content='0; url=/inventario/index.php?dir=home.php'>";
           exit();
       }
       else{
           echo "Contraseña incorrecta";
           exit();
       }
    }
    else{
        echo "El email no está registrado" . "<br>";
        exit();
    }
}



