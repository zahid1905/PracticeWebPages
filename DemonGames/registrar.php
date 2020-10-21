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

                <a href="index.php"><img src="Imagenes/logo.png" width="60" class="logo"></a>
        
            </div>

            <div class="menu">

                <div class="yolo" style="display: flex; justify-content: center;">

                    <nav>

                        <ul>
                            
                            <li><a href="index.php">Pagina principal</a></li>
                            <li><a href="ingresar.php">Iniciar Sesion</a></li>
                            <li><a href="ingresar_admin.php">Administrador</a></li>
                            <!--<li><a href="productos.php  ">Productos</a></li>-->

                        </ul>

                    </nav>

                </div>

            </div>

        </header>

        <form class="formulario" action="db_registrar.php" method="post">

            <B>Nombre completo:</B><br><input type="text" class="field" name="Nombre"><br> <br>
            <B>Apellidos:</B><br><input type="text" class="field" name="Apellidos"><br> <br>
            <B>Fecha de nacimiento:</B><br><input type="date" class="field" name="F_Nacimiento"><br> <br>
            <B>Correo electronico:</B><br><input type="email" class="field" name="C_Electronico"><br> <br>
            <B>Pais:</B><br><input type="text" class="field" name="Pais"><br> <br>
            <B>Estado:</B><br><input type="text" class="field" name="Estado"><br> <br>
            <B>Direccion:</B><br><input type="text" class="field" name="Direccion"><br> <br>
            <B>Contraseña:</B><br><input type="password" class="field" name="Contraseña"><br> <br>
            <B>Repetir contraseña:</B><br><input type="password" class="field" name="R_Contraseña"><br>
            
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