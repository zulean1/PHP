<?php

include_once 'sesion.php';

$sesion= new Sesion();

$sesion->Close();

header('location: ../index.php');




?>