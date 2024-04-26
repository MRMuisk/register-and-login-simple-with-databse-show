
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Document</title>
</head>
<body  >
   
<section class="" style="background-color: rgb(62, 2, 62);">
 
  <div class="px-4 py-5 px-md-5 text-center text-lg-start" style="background-color: hsl(0, 0%, 96%)">
    <div class="container">
      <div class="row gx-lg-5 align-items-center; justify-content-center">
        

        <div class="col-lg-6 mb-5 mb-lg-0">
          <div class="card">
            <div class="card-body py-5 px-md-5">
              
              <form action="./php/formlogin.php" method="POST" class="form">
               
                <div class="row" style="flex-direction: column; justify-content: center; align-items: center;">
                  
                <h1 class="my-5 display-3 fw-bold ls-tight" style="color:blue; text-align:center; font-size:3rem"  >Iniciar secion </h1>

                <div data-mdb-input-init class="form-outline mb-4">
                 <label class="form-label" >Email address</label>
                  <input type="email" name="email" class="form-control" style="border: 0.5px solid rgb(33, 86, 119)" required maxlength="40" >
                  
                </div>

              
                <div data-mdb-input-init class="form-outline mb-4">
                <label class="form-label" >Password</label>
                  <input type="password" name="password" class="form-control" style="border: 0.5px solid rgb(33, 86, 119)" required maxlength="25" pattern="^[a-zA-Z0-9ñÑ]{3,20}$"/>
                 
                </div>

               
                <div class="form-check d-flex justify-content-center mb-4">
                  
                  <p id="error" >

                  </p>
                </div>

               
                <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block mb-4">
                  Iniciar secion
                </button>
                <?php
                ?>
                
                
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
</section>
<script src="./vistas/ajax.js" ></script>

</body>
</html>