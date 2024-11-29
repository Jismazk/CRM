<?php
include("../service/connection.php");
$sql = "SELECT  * FROM  DetOrdenes";
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
<div>
    <h2>Detalles de la orden</h2>
    <label for="idOrden">Id_Orden</label>
    <input type="text" id="idOrden" name="idorden">

    
    <br>
        <button id="Actualizar" type="submit" onclick="">Actualizar</button>
    </div>
</body>
</html>