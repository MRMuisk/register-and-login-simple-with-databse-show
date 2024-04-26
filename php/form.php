<?php

include_once 'main.php';


$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$password = $_POST['password'];
$password_confirm = $_POST['password_confirm'];

if($password == $password_confirm){
    echo "Las contraseñas coinciden" . "<br>";
    $pass = password_hash($password, PASSWORD_BCRYPT, ['cost' => 8]);
}else{
    echo "Las contraseñas no coinciden" . "<br>";
    
    exit();
}


    if(empty($first_name) || empty($last_name) || empty($email) || empty($password) || empty($password_confirm)){
        echo "Todos los campos son obligatorios";
        exit();
    }else{
        echo "Todos los campos están completos" . "<br>";
       
    }


    $email = $_POST['email'];
    if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
    $emil = conexion();
    $emil = $emil -> query("SELECT * FROM usuario WHERE usuario_email = '$email'");
    if($emil -> rowCount() > 0)
    {
        echo "El email ya está registrado";
        exit();
    }
    else{
        echo "El email no está registrado" . "<br>";
    }
}


//ahora ingresamos los datos en la base de datos

$guardar_usuario = conexion();
$guardar_usuario = $guardar_usuario -> prepare
("INSERT INTO usuario
(usuario_nombre, usuario_apellido, usuario_clave, usuario_email )
 VALUES(:first_name, :last_name, :pass, :email)");



$guardar_usuario -> execute(array(
    ':first_name' => $first_name,
    ':last_name' => $last_name,
    ':pass' => $pass,
    ':email' => $email
));

if ($guardar_usuario -> rowCount() > 0){
    echo "Usuario registrado";
}