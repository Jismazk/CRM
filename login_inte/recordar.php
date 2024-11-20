<?php
$to = "somebody@example.com";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: webmaster@example.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    
}
mail($to,$subject,$txt,$headers);
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
    <form class="rc" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <h2>Olvide mi contraseña</h2>
        <label for="Correo">Ingresa tu direccion de correo electronico asociada con tu cuenta de usuario</label>
        <input type="text" placeholder="ejem@gmail.com" id="Correo">
        <input type="submit" class="button" value="Enviar">
    </form>
</body>
</html>
