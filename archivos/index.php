<?php 
$archivo = 'document/archivo.txt';
if(file_exists($archivo)) {
echo "El archivo {$archivo} existe";
} else {
echo "El archivo {$archivo} no pudo localizarse";
}


$directorio = 'document';
if(file_exists($directorio)) {
echo "El directorio {$directorio} existe";
} else {
echo "El directorio {$directorio} no pudo localizarse";
}


 ?>