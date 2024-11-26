<?php 
include("../service/connection.php");

if(empty($_POST)){
    $email =filter_input(INPUT_POST, "correo", FILTER_SANITIZE_SPECIAL_CHARS);
    

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>recordar</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <form class="rc" method="POST" action="<?php $_SERVER["PHP_SELF"];?>">
        <h2>Olvide mi contraseña</h2>
        <label for="Correo">Ingresa tu direccion de correo electronico asociada con tu cuenta de usuario</label>
        <input type="email" placeholder="ejem@gmail.com" id="Correo" name="correo">
        <input type="submit" class="button" value="Enviar">
    </form>
</body>
</html>
