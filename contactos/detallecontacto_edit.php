<?php
include("../service/connection.php");
    if(isset($_GET["id"])){  
        $d =  mysqli_real_escape_string($conn, $_GET['id']);
        $sql = "SELECT  * FROM  contactos where id_contacto = '$d'";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($result);
  }else{
    header("location: contactos.php");
        exit;
  }
  if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nom = filter_input(INPUT_POST,"contactoedit-n",FILTER_SANITIZE_SPECIAL_CHARS);
    $up = "UPDATE contactos set Nombre = '$nom' where id_contacto = '$d'";
    $update = mysqli_query($conn,$up);
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content=" width=device-width, initial-scale=1.0">
    <title>Document</title>
 
   
</head>

<body>
    <div class="detallesusuario">
        <h2>Detalles del contacto</h2>
    <form action="<?php $_SERVER["PHP_SELF"] ?>" method="POST"  >
    <label for="Empresa">Empresa</label>
    <input type="text" id="Empresa" name="contactoedit-e" value="<?php echo $row["Empresa"] ?>">

    <label for="Nombre">Nombre</label>
    <input type="text" id="Nombre" name="contactoedit-n" value="<?php echo $row["Nombre"] ?>">

    <label for="ApellidoP">Apellido</label>
    <input type="text" id="ApellidoP" name="contactoedit-a" value="<?php echo $row["Apellido"] ?>">

    <label for="Telefono">Telefono</label>
    <input type="tel"  id="Telefono" name="contactoedit-t" value="<?php echo $row["Numero"] ?>">

    <label for="Direccion">Direccion</label>
    <input type="text" id="" name="contactoedit-d" value="<?php echo $row["Direccion"] ?>">

    <label for="Correo">Correo</label>
    <input type="text" id="Correo" name="contactoedit-c" value="<?php echo $row["Correo"] ?>">

    
    <br>
        <button id="Actualizar" type="submit" onclick="">Actualizar</button>
    </form>

    </div>
  

</body>