<?php

    $conexion=new mysqli("localhost","root","","demongames");

    if ($conexion) {
        echo "Conexion exitosa";
    } else {
        echo "Conexion sin exito";
    }

    $id= $_POST['id'];
    $Nombre= $_POST['Nombre'];
    $Costo= $_POST['Costo'];
    $Unidades= $_POST['Unidades'];

    $ins="INSERT INTO productos VALUES('$id','$Nombre','$Costo','$Unidades')";
    
    mysqli_query($conexion,$ins);
    
    header('location:index2.php');

    mysqli_close($conexion);

 ?>