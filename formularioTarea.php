
<form method='POST'>
<label for="">Nombres:</label>
<input type="text" name="nombres">
<br>
<br>
<label for="">Apellidos:</label>
<input type="text" name="apellidos">
<br>
<br>
<label for="">Ciudad </label>
<select name="Ciudad">
    <option> --Ciudad-- </option>
    <option> Guaymas </option>
    <option> Empalme </option>
    <option> Hermosillo </option>
    <option> Obregon </option>
    <option> Navojoa </option>
    <option> Agua Prieta </option>
    <option> San Luis Río Colorado </option>
    <option> Cananea </option>

></select>
<br>
<br>
<label for="">Edad: </label>
<input type="number" name="edad">
<br>
<br>
<label for="">Telefono:</label>
<input type="text" name="telefono">
<br>
<br>
<label for="">Escribe tu correo</label>
<input type="email" name="correo">
<br>
<br>
<input type="radio" value="Soltero" name="estadocivil"> <label for ="estadocivil">Soltero</label>
<br>
<br>
<input type="radio" value="Casado" name="estadocivil"> <label for ="estadocivil">Casado</label>
<br>
<br>
<button>Enviar</button>
</form>

<?php

if(isset($_POST['nombres']) ) {
    
    echo "<h3>" ."Su nombre es: " .$_POST['nombres']  ."<br>"
    . " Sus apellidos son: " .$_POST['apellidos'] ."<br>"
    . " Usted vive en: "   .$_POST['Ciudad'] ."<br>"
    . " Su edad es de: " .$_POST['edad'] . " años" ."<br>"
    . " Su numero de telefono es: " .$_POST['telefono']  ."<br>"
    . " Su correo es: " .$_POST['correo'] ."<br>"
    . " Su estado civil es: " .$_POST['estadocivil'] ."<br>"
     ."</h3>";
}

?>