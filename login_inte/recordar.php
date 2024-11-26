<?php 
include("../service/connection.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../PHPMailer-master/PHPMailer-master/src/Exception.php';
require '../PHPMailer-master/PHPMailer-master/src/PHPMailer.php';
require '../PHPMailer-master/PHPMailer-master/src/SMTP.php';

if(!empty($_POST)){
    $mail = new PHPMailer(true);

try {
    //Server settings
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'crmutt450@gmail.com';                     //SMTP username
    $mail->Password   = 'sisk qxtk joas ufek';                               //SMTP password
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('crmutt450@gmail.com', 'Mailer');
    $mail->addAddress('jismaelzk@outlook.es', 'Joe User');     //Add a recipient


    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

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
