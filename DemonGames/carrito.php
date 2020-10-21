<!DOCTYPE html>

<html>

    <head>

        <?php
            include "Modulos/head.html";
        ?>

    </head>

    <body background="Imagenes/fondo.jpg">
    
        <header>

            <div style="text-align: center; align-items: center;">

                <a href="index1.php"><img src="Imagenes/logo.png" width="60" class="logo"></a>
        
            </div>

            <div class="menu">

                <div class="yolo" style="display: flex;justify-content: center;">

                    <nav>

                        <ul>

                            <?php
                                session_start();
                                //$_SESSION['sesion2'] = $_SESSION['sesion'];
                                //$_SESSION['sesion']=0;                   

                                if($_SESSION['sesion'] != null){
                                    echo "<li><a href='cerrar.php'>Cerrar sesion</a></li>";
                                } else{
                                    echo "<li><a href='ingresar.php'>Iniciar Sesion</a></li>";
                                    echo "<li><a href='registrar.php'>Crear una cuenta</a></li>";
                                    echo "<li><a href='ingresar_admin.php'>Administrador</a></li>";
                                }
                            ?>
                            <!--<li><a href='ingresar.php'>Iniciar Sesion</a></li>
                            <li><a href='registrar.php'>Crear una cuenta</a></li>
                            <li><a href='ingresar_admin.php'>Administrador</a></li>
                            <li><a href="productos.php  ">Productos</a></li>-->

                            

                        </ul>

                    </nav>

                </div>

            </div>

        </header>

        <table align="center">

            <tr>

                <td style="text-align:center">Producto</td>

                <td style="text-align:center">Precio</td>

                <td style="text-align:center">Unidades disponibles</td>

                <td style="text-align:center">Unidades a comprar</td>

            </tr>
            
            <?php
                
                $conexion = mysqli_connect("localhost","root","","demongames");

                $query1 = "SELECT `nombre_p` FROM `carrito1`";
                $resultado1 = mysqli_query($conexion,$query1);

                while($row1 = $resultado1->fetch_assoc()){
                    $id1=$row1['nombre_p'];
                

                $query = "SELECT `nombre_p`,`costo`,`cantidad` FROM `productos` WHERE `nombre_p` = '$id1'";
                     
                $resultado = mysqli_query($conexion,$query);
                     
                while($row = $resultado->fetch_assoc()){
            ?>

            <tr>

                <td style="text-align:center"><?php echo $row['nombre_p']; ?></td>

                <td style="text-align:center"><?php echo $row['costo']; ?></td>

                <td style="text-align:center"><?php echo $row['cantidad']; ?></td>
                
                <td style="text-align:center">
                    <form action="compra_carro.php" method="post">
                        <input type="text" style="display:none" class="field" value='<?php echo $row['nombre_p']; ?>' name="id1[]">
                        <input type="text" style="display:none" class="field" value='<?php echo $row['cantidad']; ?>' name="cantida[]">
                        <input type="number" class="field" value="1" min="1" max="<?php echo $row['cantidad']; ?>" name="Cantidad[]">
                </td>
                
            </tr>
            
            <?php
                }
            }
            ?>

        </table>

        <br>

        <table align="center">

            <tr>

                <td style="text-align:center" colspan="5">Datos de envio</td>

            </tr>
            
            <?php

                $usuario=$_SESSION['sesion'];

                $conexion = mysqli_connect("localhost","root","","demongames");
                $query = "SELECT `nombre`,`apellidos`,`pais`,`estado`,`direccion` FROM `datos_envio` WHERE `c_elec`='$usuario'";
                     
                $resultado = mysqli_query($conexion,$query);
                     
                while($row = $resultado->fetch_assoc()){
            ?>

            <tr>

                <td style="text-align:center">Nombre</td>

                <td style="text-align:center">Apellidos</td>

                <td style="text-align:center">País</td>

                <td style="text-align:center">Estado</td>

                <td style="text-align:center">Direccion</td>

            </tr>

            <tr>

                <td style="text-align:center"><?php echo $row['nombre']; ?></td>

                <td style="text-align:center"><?php echo $row['apellidos']; ?></td>

                <td style="text-align:center"><?php echo $row['pais']; ?></td>

                <td style="text-align:center"><?php echo $row['estado']; ?></td>

                <td style="text-align:center"><?php echo $row['direccion']; ?></td>
                
            </tr>
            
            <?php
                }
            ?>

        </table>

            <br>
            <center><input style="width:100px" type="submit" name="Comprar" value="Comprar" class="field"></center>
            <br>
        </form>

    </body>

    <footer>

        <?php
            include "Modulos/footer.html";
        ?>

    </footer>

</html>