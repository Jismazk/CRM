<?php

include("../service/connection.php");

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $correo = filter_input(INPUT_POST, "correo-login", FILTER_SANITIZE_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST, "pass-login", FILTER_SANITIZE_SPECIAL_CHARS);

   

   
        $sql = "CALL login_usuario('$correo');";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0){    
         $row = mysqli_fetch_assoc($result);
         if($password == $row["contraseña"]){
            echo '
            <script>
            alert("Bienvenido" );
            window.location = "recordar.html";
            </script>
            ';
         } else{
            echo '<script>  alert("Contraseña incorrecta" );
             window.location = "/website/login_inte/login.html"; </script>';
         }        
        }else{
            echo '<script>  alert("Usuario no encontrado" );
             window.location = "/website/login_inte/login.html";
              </script>';
    }
}
mysqli_close($conn);
?>