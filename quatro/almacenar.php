<html>
    <head>
        <title>Registrado</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/normalize.css">
        <link href="https://fonts.googleapis.com/css?family=Lato:300|Roboto+Mono:400,500" rel="stylesheet">
        <link rel="stylesheet" href="css/stylesheet.css">
        <link rel="stylesheet" href="css/responsive.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
    
		<?php
    		$con=mysqli_connect('localhost','root','chubaca12','nomina') or die ('Ocurrio un error al conectarse al servidor');
    		$sql="insert into pago values(null,'".$_POST["nombre"]."','".$_POST["appaterno"]."','".$_POST["apmaterno"]."','".$_POST["f_ingreso"]."','".$_POST["sueldo"]."','".$_POST["retencion"]."','".$_POST["comision"]."','".$_POST["pago"]."')";
    		$resultado=mysqli_query($con,$sql) or die ('Error en query database');
    		mysqli_close($con);
    		echo 'El empleado '.$_POST["nombre"].' '.$_POST["appaterno"].' '.$_POST["apmaterno"].' ha sido registrado exitosamente';
		?>
	</body>
</html>