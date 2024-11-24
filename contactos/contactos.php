
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
    <link rel="stylesheet" href="../login_inte/estilo.css">

</head>


<body>
    <div class="box-inicio">
    <nav class="barnav">
            <ul>
            <li><a href="../login_inte/home.html">Inicio</a></li>
            <li><a href="contactos.php">Contactos</a></li>
            <li><a href="ordenes.html">Órdenes</a></li>
            <li><a href="candidatos.html">Candidatos</a></li>
            <li><a href="clientes.html">Clientes</a></li>
        </ul>
        </nav>
        <br>  
        
    <div class="table">
        <h1>Contactos</h1>
        <table>
            <thead>
                <tr>
                    <th>Empresa</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Telefono</th>
                    <th>email</th>
                    <th>direccion</th>
                    <th>endswitch</th> 
                </tr>
            </thead>
            <tbody>
            <?php
            while( $row = mysqli_fetch_assoc($result)){
                echo "
              <tr>
              <td>".$row["Empresa"]."</td>
              <td>".$row["Nombre"]."</td>
              <td>".$row["Apellido"]."</td>
              <td>".$row["Direccion"]."</td>
              <td>".$row["Correo"]."</td>
              <td>".$row["Numero"]."</td>
              <td><input  type='submit' class='button' onclick='header()'>
              <input type='submit' class='button' value='editar' onclick='edit_con(".$row["id_contacto"].")'>
              
              </td>
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
    <input type="submit" class="button" value="Eliminar" onclick="test()"> 
    </div>
    <!-- Este es el cuadro en el que salen -->
    <div id="fondo"></div>

    <!-- Esto es el contenido de la ventana -->
    <div id="ventana">
    
    <form method="POST" action="añadircontacto.php" name="añacon">
        <h2>Agregar Contacto<button class="botoncillo" id="cerrarVentana">X</button></h2>

        <label for="Empresa">Empresa</label>
        <input type="text" placeholder="Escribe la empresa" id="Empresa" name="empresa">

        <label for="Nombre">Nombre</label>
        <input type="text" placeholder="Escribe el nombre" id="Nombre" name="contacto-n">

        <label for="ApellidoP">Apellido </label>
        <input type="text" placeholder="Escribe el apellido " id="ApellidoP" name="contacto-a">

        <label for="Telefono">Telefono</label>
        <input type="tel" placeholder="Escribe el numero" id="Telefono" name="contacto-t">

        <label for="Direccion">Direccion</label>
        <input type="text" placeholder="Escribe la direccion" id="" name="contacto-d">

        <label for="Correo">Correo</label>
        <input type="text" placeholder="ejem@gmail.com" id="Correo" name="contacto-c">
        <br>
        <button id="Añadir" type="submit" onclick="return validateForm()">Añadir</button>
    </form>
    </div>
    <!-- Aqui va la logica -->
    <script>
        function edit_con(a){
            window.location="website/contactos/añadircontacto.php?id="+a;
        }
        function validateForm(){
            var b = document.forms["añacon"]["contacto-a"].value;
            var a = document.forms["añacon"]["contacto-n"].value;
            var c = document.forms["añacon"]["contacto-t"].value;
            var d = document.forms["añacon"]["contacto-d"].value;
            var f = document.forms["añacon"]["contacto-c"].value;
            if(a == "" || b == "" || c == "" ||d == "" ||f == "" ){
                alert("Favor de rellenar todos los campos ");
                return false;
            }
        }
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