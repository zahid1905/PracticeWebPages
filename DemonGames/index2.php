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

                <a href="index2.php"><img src="Imagenes/logo.png" width="60" class="logo"></a>
        
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
                                    echo "<li><a href='carrito.php'>Carrito</a></li>";
                                    echo "<li><a href='anadir.php'>Añadir productos</a></li>";
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

                            <form action="buscar2.php" method='post'>
                                <li><input id="buscar" name="buscar" type="search" placeholder="Buscar aquí..." autofocus ></li>
                                <li><input name="buscador" type="submit" value="Buscar"></li>
                            </form>

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

            </tr>
            
            <?php
                $conexion = mysqli_connect("localhost","root","","demongames");
                $query = "SELECT `nombre_p`,`costo`,`cantidad` FROM `productos`";
                     
                $resultado = mysqli_query($conexion,$query);
                     
                while($row = $resultado->fetch_assoc()){
            ?>

            <tr>

                <td style="text-align:center"><?php echo $row['nombre_p']; ?></td>

                <td style="text-align:center"><?php echo $row['costo']; ?></td>

                <td style="text-align:center"><?php echo $row['cantidad']; ?></td>

                <form action="editar.php?nombr=<?php echo $row['nombre_p']; ?>" method="post">

                    <td style="text-align:center"><input style="width:90px" type="submit" name="Editar" value="Editar" class="field"></td>
                
                </form>

                <form action="db_eliminar.php?nombr=<?php echo $row['nombre_p'];?>" method="post">

                    <td style="text-align:center"><input style="width:100px" type="submit" name="Eliminar" value="Eliminar" class="field"></td>
                
                </form>

            </tr>
            
            <?php
                }
            ?>

        </table>

    </body>

    <footer>

        <?php
            include "Modulos/footer.html";
        ?>

    </footer>

</html>
