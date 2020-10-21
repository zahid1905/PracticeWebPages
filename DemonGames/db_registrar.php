<?php

    $conexion=new mysqli("localhost","root","","demongames");

    if ($conexion) {
        echo "Conexion exitosa";
    } else {
        echo "Conexion sin exito";
    }

    $id= $_POST['id'];
    $Nombre= $_POST['Nombre'];
    $Apellidos= $_POST['Apellidos'];
    $F_Nacimiento= $_POST['F_Nacimiento'];
    $C_Electronico= $_POST['C_Electronico'];
    $Pais=$_POST['Pais'];
    $Estado=$_POST['Estado'];
    $Direccion=$_POST['Direccion'];
    $Contraseña= $_POST['Contraseña'];
    $R_Contraseña= $_POST['R_Contraseña'];

    $ins="INSERT INTO usuario VALUES('$id','$Nombre','$Apellidos','$F_Nacimiento','$C_Electronico','$Contraseña','$R_Contraseña')";
    
    mysqli_query($conexion,$ins);

    $ins="INSERT INTO datos_envio VALUES('$id','$Nombre','$Apellidos','$C_Electronico','$Pais','$Estado','$Direccion')";
    
    mysqli_query($conexion,$ins);
    
    header('location:ingresar.php');

    mysqli_close($conexion);

 ?>