<?php

    $conexion=new mysqli("localhost","root","","demongames");

    if ($conexion) {
        echo "Conexion exitosa";
    } else {
        echo "Conexion sin exito";
    }

    $Cantidad = $_POST['Cantidad'];

    $id1 = $_REQUEST['id1'];

    $cantida = $_REQUEST['cantida'];

    $Actualizar = $cantida - $Cantidad;

    $ins="UPDATE `productos` SET `cantidad` = '$Actualizar' WHERE `nombre_p` = '$id1'";

    mysqli_query($conexion,$ins);

    mysqli_close($conexion);

    echo '<script>
      alert("Compra realizada con exito");
      window.history.go(-2);
    </script>';

    //header("location:index1.php");

    exit;
?>
