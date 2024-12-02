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
    <link rel="stylesheet" href="../login_inte/estilo.css">
</head>
<body>
<div class="box-inicio">
<nav class="barnav">
            <ul>
            <li><a href="../login_inte/home.html">Inicio</a></li>
            <li><a href="../contactos/contactos.php">Contactos</a></li>
            <li><a href="../ordenes/ordenes.php">Órdenes</a></li>
            <li><a href="candidatos.html">Candidatos</a></li>
            <li><a href="clientes.html">Clientes</a></li>
        </ul>
        </nav>
        <br>  
    <h1>Detalles de la orden</h1>
    <div class="detalles">
    <label for="idOrden">Id_Orden</label>
    <input type="text"  name="idOrden" id="">
    <label for="">Contacto</label>
    <input type="text"  name="" id="">
    <label for="">Empresa</label>
    <input type="text"  name="" id="">
    <label for="">Transacción</label>
    <input type="text" name="tran" id="">
    <label for="">No.Empleado</label>
    <input type="text" name="iduser" id="">
    <label for="">Fecha-inicio</label>
    <input type="text"  name="" id="">
    <label for="">Fecha-fin</label>
    <input type="text" name="" id="">
    <label for="">Estado</label>
    <input type="text" name="" id="">
    <label for="">Producto</label>
    <input type="text" name="" id="">
    <label for="">Cantidad</label>
    <input type="text" name="" id="">

   
    <br>
    <button id="Actualizar" type="submit" onclick="return validateform()">Actualizar</button>
    
    </div>
    </div>
    <style>
        label{
            background-color: black;
            color: white;
            border-radius: 5px;
            width: 10rem;
            padding-left:5px;
        }
        input{
            width: 100%;
            background-color:gainsboro;
            border: black;
            outline: black;
        }
        .detalles{
            width: 100%;
            background-color: white;
            
        }
    </style>

</body>
</html>