<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           Usuarios
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="/inventario/vistas/user_list.php?page=1 ">Lista</a></li>
          </ul>
        </li>

     

        
      </ul>
      <form >


      
      <?php 
     
if (isset($_GET['dir']) && $_GET['dir'] == 'home.php' && isset($_SESSION['id']) > 0) {

    echo ' <a href="index.php?dir=logout.php">
    <button type="button" class="btn btn-secondary">Salir</button>
           </a>'; 
} else {
    echo ' <a href="index.php?dir=login.php">
    <button type="button" class="btn btn-secondary">Iniciar secion</button>
           </a>'; 
    
}
?>

      
        <a href="index.php?dir=registro.php">
        <button type="button" class="btn btn-primary">Registro</button>
      </a>
      </form>
    </div>
  </div>
</nav>





