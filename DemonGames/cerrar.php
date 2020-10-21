<?php

    $conexion=new mysqli("localhost","root","","demongames");

    $ins="DELETE FROM carrito1";

    mysqli_query($conexion,$ins);

    mysqli_close($conexion);

    session_start();
    $_SESSION['sesion'] = 0;
    header('location:index.php');

?>