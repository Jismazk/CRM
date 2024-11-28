<?php
include("../service/connection.php");
$sql = "SELECT  * FROM  Ordenes";
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
    <div class="table">
        <h1>Órdenes</h1>
        <table>
            <thead>
                <tr>
                    <th>Estado</th>
                    <th>ID_Orden</th>
                    <th>Fecha inicio</th>
                    <th>Fecha final</th>
                    <th>Detalle</th>
                </tr>
            </thead>
            <tbody>
        <?php
        while ( $row=mysqli_fetch_assoc($result)){
            echo"
                <tr>
                    <td>".$row["Estado"]."</td>
                    <td>".$row["idOrden"]."</td>
                    <td>".$row["FechaInicio"]."</td>
                    <td>".$row["FechaFinal"]."</td>
                    <td> <input type='submit' class='button' value='i' onclick='info(".$row["idOrden"].")'></td>

                   
                </tr>
                ";
            }
            ?>
            </tbody>
        </table>
        <script>
             function info(a){
            window.location="detallesorden.php?id="+a;
        }
        </script>
    </div>
</div>
</body>
</html>