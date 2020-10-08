<!DOCTYPE html>
<meta charset="utf-8">
<html>
<head>
	 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	   <link rel="stylesheet" href="public/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="annymous">
	 <title>Inicio</title>
</head>
<body>


    <nav class="navbar navbar-light bg-primary d-flex flex-column flex-md-row align-items-center p-3 px-md-2   border-bottom shadow-sm">
    
        <span class="navbar-brand mb-0 h1 text-white">Prácticas en PHP </span>
      
         <ul class="nav justify-content-end">
           <li> <a href="public/views/user.php" class="text-white p-3"> Usuarios </a></li>
         
           <li> <span class="text-white"> <?php echo $fecha=date('d-m-Y') ;?> </span></li>
            <li> <a href="sesion/logout.php" class="text-white p-3"> Cerrar sesion </a></li>
          </ul>

      
    </nav>
   <div class="card text-center mx-5 my-5 px-3 py-3">
  <div class="card-header bg-primary">
   
  </div>
  <div class="card-body">
     <h5 class="text-primary">Bienvenido <?php echo $user->getUser();?> </h5>
    </div>
  <div class="card-footer bg-primary">
  
  </div>
