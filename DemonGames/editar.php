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

                            <li><input id="buscar" name="buscar" type="search" placeholder="Buscar aquí..." autofocus ></li>
                            <li><input name="buscador" type="submit" value="Buscar"></li>
                            <?php
                                session_start();
                                //$_SESSION['sesion2'] = $_SESSION['sesion'];
                                //$_SESSION['sesion']=0;                   

                                if($_SESSION['sesion'] != null){
                                    echo "<li><a href='cerrar.php'>Cerrar sesion</a></li>";
                                    echo "<li><a href='carrito.php'>Carrito</a></li>";
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

        <?php
                
            $nombr=$_REQUEST['nombr'];
            $conexion = mysqli_connect("localhost","root","","demongames");
            $query = "SELECT `nombre_p`,`costo`,`cantidad` FROM `productos` WHERE `nombre_p`='$nombr'";
                     
            $resultado = mysqli_query($conexion,$query);
            $row = $resultado->fetch_assoc();
                
        ?>

        <form class="formulario" action="db_editar.php?nombr=<?php echo $nombr; ?>" method="post">

            <B>Nombre del producto: </B><br><input type="text" class="field" value="<?php echo $row['nombre_p'];?>" name="Nombre"><br> <br>
            <B>Costo: </B><br><input type="number" class="field" value="<?php echo $row['costo'];?>" name="Costo"><br> <br>
            <B>Unidades disponibles: </B><br><input type="number" value="<?php echo $row['cantidad'];?>" class="field" name="Unidades"><br> <br>
            
            <p class="text">

                <input type="submit"class="boton"> <input type="reset" class="boton">
            
            </p>

        </form>

    </body>

    <footer>

        <?php
            include "Modulos/footer.html";
        ?>

    </footer>

</html>