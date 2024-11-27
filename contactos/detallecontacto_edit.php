<?php
include("../service/connection.php");
$sql = "SELECT  * FROM  contactos";
$result = mysqli_query($conn,$sql);
if(!$result){
    echo "problema con la conexion";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 
   
</head>

<body>
    <div class="detallesusuario">
        <h2>Detalles del contacto</h2>
    <label for="Empresa">Empresa</label>
    <input type="text" id="Empresa" name="contacto-e">

    <label for="Nombre">Nombre</label>
    <input type="text" id="Nombre" name="contacto-n">

    <label for="ApellidoP">Apellido</label>
    <input type="text" id="ApellidoP" name="contacto-a">

    <label for="Telefono">Telefono</label>
    <input type="tel"  id="Telefono" name="contacto-t">

    <label for="Direccion">Direccion</label>
    <input type="text" id="" name="contacto-d">

    <label for="Correo">Correo</label>
    <input type="text" id="Correo" name="contacto-c">

    
    <br>
        <button id="Actualizar" type="submit" onclick="">Actualizar</button>

    </div>
  

</body>