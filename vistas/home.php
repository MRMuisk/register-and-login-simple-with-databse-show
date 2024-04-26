<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style = "justify-content:center; align-items:center">
    <?php

         if(isset($_SESSION['id']) >0){
             echo '<div style = "margin-left:40%; margin-top:5rem">  <h1>Bienvenido</h1>
             <span>Querido usuario</span> <br>';
             echo $_SESSION['nombre'] . "<br>";
             echo'tu id es ';
             echo $_SESSION['id'] . "<br>";
             echo '</div>';
         }
         else{
            echo '<a href="index.php?dir=login.php">
            <h1>Por favor inicie secion</h1>
              </a>';
             
         }



    ?>


</body>
</html>