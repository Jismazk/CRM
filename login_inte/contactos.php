
<?php
include("connection.php");
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
    <link rel="stylesheet" href="estilo.css">

</head>


<body>

    <div class="box-inicio">
    <div class="table">
        <h1>Contactos</h1>
        <table>
            <thead>
                <tr>
                    
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Telefono</th>
                    <th>email</th>
                    <th>direccion</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            <?php
            while( $row = mysqli_fetch_assoc($result)){
                echo "
              <tr>
              <td>".$row["Nombre"]."</td>
              <td>".$row["Apellido"]."</td>
              <td>".$row["Direccion"]."</td>
              <td>".$row["Numero"]."</td>
              <td>".$row["Correo"]."</td>
              <td>
            </tr>
            "; 
            }
           
            ?>
            </tbody>
        </table>
    </div>
    
    <br>
    <br>
    <!-- Estos son los dos botones -->
    <input type="submit" id="agregarcontacto" value="Agregar">
    <input type="submit" class="button" value="Eliminar"> 
    </div>
    <!-- Este es el cuadro en el que salen -->
    <div id="fondo"></div>

    <!-- Esto es el contenido de la ventana -->
    <div id="ventana">
    <h2>Agregar Contacto<button class="botoncillo" id="cerrarVentana">X</button></h2>
        <label for="Nombre">Nombre</label>
        <input type="text" placeholder="Escribe el nombre" id="Nombre" name="">

        <label for="ApellidoP">Apellido </label>
        <input type="text" placeholder="Escribe el apellido " id="ApellidoP" name="">

        <label for="Telefono">Telefono</label>
        <input type="tel" placeholder="Escribe el numero" id="Telefono" name="">

        <label for="Direccion">Direccion</label>
        <input type="text" placeholder="Escribe la direccion" id="" name="">

        <label for="Correo">Correo</label>
        <input type="text" placeholder="ejem@gmail.com" id="Correo" name="">
        <br>
        <button id="Añadir">Añadir</button>
    </div>
    <!-- Aqui va la logica -->
    <script>
    const mostrarVentanaBtn = document.getElementById('agregarcontacto');
    const cerrarVentanaBtn = document.getElementById('cerrarVentana');
    const ventana = document.getElementById('ventana');
    const fondo = document.getElementById('fondo');

    mostrarVentanaBtn.addEventListener('click', function() {
        ventana.style.display = 'block';
        fondo.style.display = 'block';
    });

    cerrarVentanaBtn.addEventListener('click', function() {
        ventana.style.display = 'none';
        fondo.style.display = 'none';
    });
    
    // Esto cierra la ventana si se hace clic en el fondo
    fondo.addEventListener('click', function() {
        ventana.style.display = 'none';
        fondo.style.display = 'none';
    });
    </script>


    <style>
    #agregarcontacto{
    background-color: rgb(42, 72, 204);
    font-size: 15px;
    color: #FFFFFF;
    cursor: pointer;
    margin-bottom: 5px;
    
    }
    #ventana {
    display: none; /* Ocultar por defecto */
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 400px;
    padding: 20px;
    background-color: rgb(226, 223, 223);
    border: 1px solid #ccc;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    z-index: 1000;
    border-radius: 5px;
    }
    #fondo {
    display: none; /* Ocultar por defecto */
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    z-index: 999;
    }
    .botoncillo{
    background-color:red;
    color:white;
    font-size: 20px;
    cursor: pointer;
    margin-bottom: 5px;
    left: 6%;
    top: 0%;
}
    </style>
    </div>
</body>
</html>