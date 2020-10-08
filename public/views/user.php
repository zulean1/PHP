<!DOCTYPE html>
<meta charset="utf-8">
<html>
<head>
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <link rel="stylesheet" href="../css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="annymous">
   <title>Inicio</title>
</head>
<body>


<div class="card text-center mx-5 my-5 px-3 py-3">
  <div class="card-header bg-primary">
    <h5 class="text-white">Usuarios del Sistema</h5>
  </div>
  <div class="card-body">
    <h5 class="card-title text-danger">Registro de Usuarios</h5>
       <form class=" " method="post" action="../sesion/user.php">
              <div class="form-row">
                  <div class="form-group col-md-6 px-3 py-3">
                      <label for="nombre" class="text-danger">Nombres:</label>
                      <input type="text"  placeholder="Nombres" class="form-control " id="nombre" name="nombre">
                  </div>
                 
              </div>
              <div class="form-row">
                
                   <div class="form-group col-md-6 px-3 py-3">
                     <label for="correo" class="text-danger">Correo Electronico:</label>
                     <input type="text" class="form-control " id="correo" placeholder="Correo Electronico" name="correo">
                  </div>
              </div>
               <div class="form-row">
                  <div class="form-group col-md-6 px-3 py-3">
                      <label for="password" class="text-danger">Contraseña:</label>
                      <input type="password"  placeholder="Contraseña" class="form-control " id="password" name="contrasena">
                  </div>
               
              </div>
             
              <button type="submit" class="btn btn-danger my-2 ">Registrar</button>
          </form>
    </div>
  <div class="card-footer bg-primary">
  
  </div>
</div>
</body>
</html>
