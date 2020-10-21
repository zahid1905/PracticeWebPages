<?php

    $conexion=new mysqli("localhost","root","","demongames");

    if ($conexion) {
        echo "Conexion exitosa";
    } else {
        echo "Conexion sin exito";
    }

    $id= $_REQUEST['nombr'];
    $Nombre= $_POST['Nombre'];
    $Costo= $_POST['Costo'];
    $Unidades= $_POST['Unidades'];

    $ins="UPDATE `productos` SET `nombre_p` = '$Nombre', `costo` = '$Costo', `cantidad` = '$Unidades' WHERE `productos`.`nombre_p` = '$id'";
    
    mysqli_query($conexion,$ins);
    
    header('location:index2.php');

    mysqli_close($conexion);

    echo '<script>
      alert("Editado con exito");
      window.history.go(-1);
      
    </script>'; 

 ?>