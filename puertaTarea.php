<?php

$enviado=false;

if( isset( $_GET["puerta"] ) ){ 
    $enviado=true;
    $r = $_GET;  
    
    $puerta = $r["puerta"];
    $nombre = $r["nombre"];
    
    switch ($puerta) {

        case 'Puerta 1':
            $resultado = "Te ganaste una cabra!";
            break;

        case 'Puerta 2':
            $resultado = "Te ganaste un carro del año!";
            break;

        case 'Puerta 3':
            $resultado = "Te ganaste una piedra!";
            break;

        default:
             $resultado = "Escoge una puerta!";   
            break;
    }


}
 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Puerta de la Suerte</title>
</head>
<body>


    <h1>Puerta de la Suerte</h1>

    <form  method="get" action="puertaTarea.php" >


        <label for="">Escribe tu nombre:</label>
        <input type="text" name="nombre" >

        <br>

        <label for="">Escoge una puerta:</label> <br>
        <select name="puerta">
            <option>Puerta 1</option>
            <option>Puerta 2</option>
            <option>Puerta 3</option>
        </select>

        <button type="submit"  >Enviar</button>

    </form>

    <?php if($enviado){ ?>
   
    <hr>       
    <h2> Hola <?= $nombre; ?> ! </h2>
    <h3><?php  echo $resultado;  ?></h3>


    <?php } ?> 


   


</body>
</html>