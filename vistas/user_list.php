<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Registros</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body >
    
    <div class="container" style="justify-content:center">
        <h2 class="text-center mt-4 mb-4" style="justify-content:center">Tabla de Registros</h2>
        
        <table class="table table-striped" style="justify-content:center">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Email</th>
                    
                </tr>
            </thead>
            <tbody style="justify-content:center">
                <?php
                    include_once '../php/main.php';
                    $conexion = conexion();
                    
                    $mysqli = conexion();

                    $start = 0;
                    $limit = 5;
                    $total_pages = $start ;

                    if (isset($_GET['page'])) {
                        $page = $_GET['page'];
                        $start = ($page - 1) * $limit;
                    } else {
                        $page = 1;
                    }

                   $number_of_results = $mysqli->query("SELECT * FROM usuario");
                   $number_of_results = $number_of_results->rowCount();
                   $total_pages = ceil($number_of_results / $limit);


                   $r= $mysqli->query("SELECT * FROM usuario LIMIT $start , $limit");

                   while ($row = $r->fetch(PDO::FETCH_ASSOC)) {
                       echo '<tr>';
                       echo '<td>' . $row['usuario_id'] . '</td>';
                       echo '<td>' . $row['usuario_nombre'] . '</td>';
                       echo '<td>' . $row['usuario_apellido'] . '</td>';
                       echo '<td>' . $row['usuario_email'] . '</td>';
                       
                       

                       echo '</tr>';
                   }
                ?>
            </tbody>
        </table>

        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                <?php
                echo '    <a class="btn btn-primary" href="user_list.php?page=1" role="button">Primera</a>
                ';
                    for ($i = 1; $i <= $total_pages; $i++) {
                        echo '<li ><a   href="user_list.php?page=' . $i . '"><button type="button" class="btn btn-secondary" style="margin-left:1rem"> ' . $i . '</button></a></li>';

                    }
                ?>
                      <a style="margin-left:1rem" class="btn btn-primary" href="user_list.php?page=<?php echo $total_pages; ?>" role="button">Última</a>

            </ul>
        </nav>
        
        
    </div>
</body>
</html>
