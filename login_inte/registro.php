<?php 
include("connection.php");

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $correo = filter_input(INPUT_POST, "correo-registro", FILTER_SANITIZE_SPECIAL_CHARS);
        $password = filter_input(INPUT_POST, "pass-registro", FILTER_SANITIZE_SPECIAL_CHARS);
        $nombre = filter_input(INPUT_POST, "nombre-registro", FILTER_SANITIZE_SPECIAL_CHARS);
        $apellido = filter_input(INPUT_POST, "apellido-registro", FILTER_SANITIZE_SPECIAL_CHARS);
        
 
            $sql = "CALL registro_usuario('$correo','$password','$nombre','$apellido');";
            mysqli_query($conn,$sql);
            echo '
            <script>
              alert("bienvenido '.$nombre.'")
            window.location = "/website/login_inte/login.html";
            </script>
            ';
        
    }
    mysqli_close($conn);
?>