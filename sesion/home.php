<!DOCTYPE html>
<meta charset="utf-8">
<html>
<head>
	 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	   <link rel="stylesheet" href="../conexion/public/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="annymous">
	 <title>Inicio</title>
</head>
<body>


    <nav class="navbar navbar-light bg-primary d-flex flex-column flex-md-row align-items-center p-3 px-md-2   border-bottom shadow-sm">
    
        <span class="navbar-brand mb-0 h1 text-white">Prácticas en PHP </span>
      
         <ul class="nav justify-content-end">
         
           <li> <span class="text-white"> <?php echo $fecha=date('d-m-Y') ;?> </span></li>

      
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-white" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Perfil</a>
                 <div class="dropdown-menu">
                  <a class="dropdown-item" href="#">Bitacora</a>
                  <a class="dropdown-item" href="#">Configuración</a>
                  <a class="dropdown-item" href="#">Cerrar Sesíon</a>
                </div>
            </li>
          </ul>
    </nav>
