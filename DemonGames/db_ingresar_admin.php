<?php

    $conexion=new mysqli("localhost","root","","demongames");

    if ($conexion) {
        echo "Conexion exitosa";
    } else {
        echo "Conexion sin exito";
    }

    $username=$_POST['username'];
    $password=$_POST['password'];

    $sql="SELECT * FROM admin WHERE admin_c_e='$username' and admin_contra='$password'";
    $result = $conexion->query($sql);

    $count=mysqli_num_rows($result);
    
    if($count==1){

        session_start();
        $_SESSION['sesion'] = $username;
        
        header('location:index2.php');
      } else {
       echo "Correo o Contraseña estan incorrectos.";
    
       echo "<br><a href='IniciarSesion.html'>Volver a Intentarlo</a>";
      }

?>