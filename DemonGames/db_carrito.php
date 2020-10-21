<?php

    $conexion=new mysqli("localhost","root","","demongames");

    $nom = $_REQUEST['nom'];

    $ins="INSERT INTO carrito1 VALUES('','$nom')";

    mysqli_query($conexion,$ins);

    mysqli_close($conexion);

    echo '<script>
      alert("Agregado al carrito con exito");
      window.history.go(-1);
      
    </script>';

    //header("location:index1.php");

    exit;
?>
