<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    

    <title>Sistema de invevntario</title>
</head>
<body class="body">
    

    
    <?php include_once './inc/navbar.php'; ?>
    <?php

    if (isset($_GET['dir'])) {
        include_once './vistas/' . $_GET['dir'] ;
       
    } 

    // if(isset($GET_['dir']) == 'home.php'){
    //     include_once './vistas/home.php';
    // }
      
    


?>
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="vistas/ajax.js"> </script>
</body>
</html>