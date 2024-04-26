    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tabla de Registros</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body style="background-color: rgb(62, 2, 62); color: wheat">
        
        <div class="container">
            <h2 class="text-center mt-4 mb-4">Tabla de busqueda</h2>
            
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">Email</th>
                        <th scope="col">opciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $busqueda=$_POST['busqueda'];   
                        if($busqueda == ''){
                            $busqueda = 3;
                            
                        }  ;
                        include_once 'php/main.php';
                        $conexion = conexion();

                        $busqueda3 = $conexion ->query("SELECT * FROM usuario WHERE usuario_id = '$busqueda' ");
                        $busqueda3 = $busqueda3->fetch();
                        
                        echo '<tr>';
                        echo '<td>' . $busqueda3['usuario_id'] . '</td>';
                        echo '<td>' . $busqueda3['usuario_nombre'] . '</td>';
                        echo '<td>' . $busqueda3['usuario_apellido'] . '</td>';
                        echo '<td>' . $busqueda3['usuario_email'] . '</td>';
                        echo '<td>     <button type="button" class="btn btn-success">Actualizar</button>
                        <button type="button" class="btn btn-danger">Eliminar</button>
                        </td>';                      
                        echo '</tr>';
                    
                    ?>
                </tbody>
            </table>
        </div>
    </body>
    </html>
