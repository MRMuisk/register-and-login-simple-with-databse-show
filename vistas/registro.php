<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
   
<section class="" style="background-color: rgb(62, 2, 62);">
 
  <div class="px-4 py-5 px-md-5 text-center text-lg-start" style="background-color: hsl(0, 0%, 96%)" style="background-color: rgb(62, 2, 62);">
    <div class="container">
      <div class="row gx-lg-5 align-items-center">
        <div class="col-lg-6 mb-5 mb-lg-0">
          <h1 class="my-5 display-3 fw-bold ls-tight" style="color:blue" >
            Lo mejor <br />
            <span class="text-primary">para tu empresa</span>
          </h1>
          <p style="color: hsl(217, 10%, 50.8%)">
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Eveniet, itaque accusantium odio, soluta, corrupti aliquam
            quibusdam tempora at cupiditate quis eum maiores libero
            veritatis? Dicta facilis sint aliquid ipsum atque?
          </p>
         
        </div>

        <div class="col-lg-6 mb-5 mb-lg-0">
          <div class="card">
            <div class="card-body py-5 px-md-5">
              
              <form action="./php/form.php" method="POST" class="form">
               
                <div class="row">
                  <div class="col-md-6 mb-4" >
                    <div data-mdb-input-init class="form-outline">
                    <label class="form-label"  >First name</label>
                      <input type="text" name="first_name" class="form-control" style="border: 0.5px solid rgb(33, 86, 119)" required maxlength="20" pattern="^[a-zA-ZñÑ ]{3,20}$"/>
                      
                    </div>
                  </div>
                  <div class="col-md-6 mb-4"> 
                    <div data-mdb-input-init class="form-outline">
                    <label class="form-label" >Last name</label>
                      <input type="text" name="last_name" class="form-control" style="border: 0.5px solid rgb(33, 86, 119)" required maxlength="20" pattern="^[a-zA-ZñÑ]{3,20}$"/>
                      
                    </div>
                  </div>
                </div>

               
                <div data-mdb-input-init class="form-outline mb-4">
                 <label class="form-label" >Email address</label>
                  <input type="email" name="email" class="form-control" style="border: 0.5px solid rgb(33, 86, 119)" required maxlength="40" >
                  
                </div>

              
                <div data-mdb-input-init class="form-outline mb-4">
                <label class="form-label" >Password</label>
                  <input type="password" name="password" class="form-control" style="border: 0.5px solid rgb(33, 86, 119)" required maxlength="25" pattern="^[a-zA-Z0-9ñÑ]{3,20}$"/>
                 
                </div>


                
                <div data-mdb-input-init class="form-outline mb-4">
                <label class="form-label" >Confirmar contraseña</label>
                  <input type="password" name="password_confirm" class="form-control" style="border: 0.5px solid rgb(33, 86, 119)" required maxlength="25" pattern="^[a-zA-Z0-9ñÑ]{3,20}$"/>
                 
                </div>

               
                <div class="form-check d-flex justify-content-center mb-4">
                  
                  <label id="error" class="form-check-label" for="form2Example33" style="color:rgb(245, 0, 0)">
                   
                  </label>
                </div>

               
                <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block mb-4">
                  Sign up
                </button>

                
                <div class="text-center">
                  <p>or sign up with:</p>
                  <button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-link btn-floating mx-1">
                    <i class="fab fa-facebook-f"></i>
                  </button>

                  <button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-link btn-floating mx-1">
                    <i class="fab fa-google"></i>
                  </button>

                  <button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-link btn-floating mx-1">
                    <i class="fab fa-twitter"></i>
                  </button>

                  <button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-link btn-floating mx-1">
                    <i class="fab fa-github"></i>
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
</section>
<script src="ajax.js" ></script>

</body>
</html>