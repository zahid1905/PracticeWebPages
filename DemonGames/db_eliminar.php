<?php

    $conexion=new mysqli("localhost","root","","demongames");

    $nombr= $_REQUEST['nombr'];

    $ins="DELETE FROM `productos` WHERE `productos`.`nombre_p` = '$nombr';";
    
    mysqli_query($conexion,$ins);
    
    header('location:index2.php');

    mysqli_close($conexion);

    echo '<script>
      alert("Elimiado con exito");
      window.history.go(-1);
      
    </script>';

    exit;
 ?>