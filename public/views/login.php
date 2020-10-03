<!DOCTYPE html>
<html lang="es">
<head>
 	 <meta charset="utf-8">
 	 <title>Inicio</title>
 	 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	 <link rel="stylesheet" href="public/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
 <body>
 <div class="card text-center mx-5 my-5 px-3 py-3 ">
  <div class="card-header bg-danger">
    <h5 class="text-white">Bienvenido</h5>
  </div>
  <div class="card-body">
    <h5 class="card-title text-warning">Inicio Sesión</h5>
       <form   method="POST" action="">
         <?php
         if (isset($errorlogin)) {
          echo $errorlogin;
         }
          
         ?>
              <div class="form-row">
                  <div class="form-group col-md-10 px-5 py-3">
                      <label for="correo" class="text-warning">Correo Electronico: </label>
                      <input type="mail" class="form-control " id="correo" placeholder="Ingrese Correo Electronico" name="correo">
                  </div>
                   </div>
                  <div class="form-row">
                  <div class="form-group col-md-10 px-5 py-3">
                     <label for="password" class="text-warning">Contraseña: </label>
                     <input type="password" class="form-control " id="password" placeholder="Ingrese Contraseña" name="password">
                  </div>
                </div>
             
              <button type="submit" class="btn btn-primary my-2 ">Iniciar Sesión</button>
          </form>
    </div>
  <div class="card-footer bg-danger">
  
  </div>
</div>


 </body>
 </html>