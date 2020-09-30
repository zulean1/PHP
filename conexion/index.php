
<!DOCTYPE html>
<html lang="es">
<head>
     <meta charset="utf-8">
     <title>Inicio</title>
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <link rel="stylesheet" href="../public/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
 <body>
 <div class="card text-center mx-5 my-5 px-3 py-3">
  <div class="card-header bg-warning">
    <h5 class="text-white">Partidas Presupuestarias</h5>
  </div>
  <div class="card-body">
    <h5 class="card-title text-danger">Registro de Partidas</h5>
       <form class=" " method="POST" action="prueba.php">
              <div class="form-row">
                  <div class="form-group col-md-6 px-3 py-3">
                      <label for="codigo" class="text-danger">Código</label>
                      <input type="text" class="form-control " id="codigo" placeholder="Código" name="codigo">
                  </div>
                  <div class="form-group col-md-6 px-3 py-3">
                     <label for="denominacion" class="text-danger">Denominación</label>
                     <input type="text" class="form-control " id="denomminacion" placeholder="Denominación" name="denominacion">
                  </div>
              </div>
              <button type="submit" class="btn btn-primary my-2 ">Registrar</button>
          </form>
    </div>
  <div class="card-footer bg-warning">
  
  </div>
</div>


 </body>
 </html>


