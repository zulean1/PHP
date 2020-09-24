<?php 
   
   $flores=['apellido' => 'Pérez',
'Fecha de nacimiento' => '23-11-1970',
'Teléfonos' => array('Casa' => '4310-9030',
'Móvil' => '15 4017-
2530',
'Trabajo' => '4604-
9000'),
'Casado' => True,
'Pasaporte' => False, ];

foreach ($flores as $flor => $array) {
	  echo "<p>$flor</br>$array<p>";


	  foreach ($array as $telefono => $numero) {
	  echo "<p>$telefono</br>$numero<p>";
}

}



   $nombres =array('Zuleidy', 'Gloria', 'Nelson', 'Ricardo', 'Esteban'  );
   
   foreach ($nombres as $nombre) {
   	   echo "<p>$nombre</br><p>";
   }



 ?>
 <!DOCTYPE html>
 <html lang="es">
 <head>
 	<meta charset="utf-8">
 	<title>Inicio</title>
 	 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	   <link rel="stylesheet" href="public/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 </head>
 <body>
 <div class="card text-center mx-5 my-5 px-3 py-3">
  <div class="card-header bg-primary">
    <h5 class="text-white">Partidas Presupuestarias</h5>
  </div>
  <div class="card-body">
    <h5 class="card-title text-danger">Registro de Partidas</h5>
       <form class=" " method="POST" action="registrar">
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
              <button type="submit" class="btn btn-danger my-2 ">Registrar</button>
          </form>
    </div>
  <div class="card-footer bg-primary">
  
  </div>
</div>
 </body>
 </html>