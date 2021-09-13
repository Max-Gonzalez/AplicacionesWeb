<?php

$enviado=false;

if( isset( $_GET["operaciones"] ) ){ 
    $enviado=true;
    $r = $_GET;  
    
    $operacion = $r["operaciones"];
    $numero1 = $r["numero1"];
    $numero2 = $r["numero2"];
    
    switch ($operacion) {

        case 'Suma':
            $resultado = "El resultado de la Suma es: " .($numero1+$numero2);
            break;

        case 'Resta':
            $resultado = "El resultado de la Resta es: " .($numero1-$numero2);
            break;

        case 'Multiplicacion':
            $resultado = "El resultado de la Multiplicacion es: " .($numero1*$numero2);
            break;

        case 'Division':
            $resultado = "El resultado de la Division es: " .($numero1/$numero2);
            break;

        default:
             $resultado = "Elige una operacion";   
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
    <title>Calculadora Tarea</title>
</head>
<body>


    <h1>Calculadora Tarea</h1>

    <form  method="get" action="calculadoraTarea.php" >


        <label for="">Escribe el primer numero:</label>
        <input type="text" name="numero1" >

        <label for="">Escribe el segundo numero:</label>
        <input type="text" name="numero2" >

        <br>

        <label for="">Elige operacion:</label> <br>
        <select name="operaciones">
            <option>Suma</option>
            <option>Resta</option>
            <option>Multiplicacion</option>
            <option>Division</option>
        </select>

        <button type="submit"  > Calcular </button>

    </form>

    <?php if($enviado){ ?>
   
    <hr> 
    <hr>       
    <h2><?php  echo $resultado;  ?></h2>


    <?php } ?> 


   


</body>
</html>