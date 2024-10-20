<?php
include("connection.php");

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $correo = filter_input(INPUT_POST, "correo-login", FILTER_SANITIZE_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST, "pass-login", FILTER_SANITIZE_SPECIAL_CHARS);

   

    if(empty($correo)){
        echo "Porfavor ingrese correo";
    }elseif(empty($password)){
        echo "Porfavor ingrese contraseña";
    }else{
        $sql = "SELECT Corres, Contraseña,nombre FROM users WHERE Corres = '$correo'";
        $result = mysqli_query($conn,$sql);
       
        if(mysqli_num_rows($result)>0){    
         $row = mysqli_fetch_assoc($result);
        $hash = $row["Contraseña"];
         if(password_verify($password,$hash)){
          
            echo '
            <script>
            alert("Bienvenido " );
            window.location = "home.php";
            </script>
            ';
         }         
        }else{
            echo "Usuario desconocido o no registrado";
        }
    }
}
mysqli_close($conn);
?>