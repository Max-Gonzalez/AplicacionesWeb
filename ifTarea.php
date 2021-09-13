<?php

$enviado=true;

$nombre1 = $_GET["nombre1"];
$nombre2 = $_GET["nombre2"];

$edad1 = $_GET["edad1"];
$edad2 = $_GET["edad2"];

if ($edad1>$edad2) {
    $resultado = $nombre1 ." es mayor que " .$nombre2;
} else {
    $resultado = $nombre2 ." es mayor que " .$nombre1;
}

if ($edad1==$edad2) {
    $resultado = $nombre1 ." y " .$nombre2 ." Son de la misma edad!" ;
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edades</title>

    <h1>Edades</h1>

</head>
<body>
 
    <form  method="get" action="if.php" >

    <label for="">Escribe el nombre de la primer persona:</label>
    <input type="text" name="nombre1" >
    <br>
    <label for="">Escribe la edad de la primer persona:</label>
    <input type="text" name="edad1" >
    <br>
    <br>
    <label for="">Escribe el nombre de la segunda persona:</label>
    <input type="text" name="nombre2" >
    <br>
    <label for="">Escribe la edad de la primer persona:</label>
    <input type="text" name="edad2" >
    <button type="submit"  >Enviar</button>

    <?php if($enviado){ ?>
   
   <hr>       
   <h3><?php  echo $resultado;  ?></h3>


   <?php } ?> 

</body>
</html>