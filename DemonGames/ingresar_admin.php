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
                            <li><a href="registrar.php">Crear una cuenta</a></li>

                        </ul>

                    </nav>

                </div>

            </div>

        </header>

        <form class="" action="db_ingresar_admin.php" method="post">

            <input type="text" name="username" placeholder="Correo Electrónico" class="field"> <br> <br>
            <input type="password" name="password" placeholder="Contraseña" class="field"> <br> <br>
            <input type="submit" name="SesionButton" value="Entrar" class="field"> <br> <br>

            <label>¿Aun no te has registrado?<a href="registrar.php">Registrarse</a> </label> <br> <br>
            <label>¿No eres administrador?<br><a href="ingresar.php">Inicia sesion aqui</a> </label>
    
        </form>

    </body>

    <footer>

        <?php
            include "Modulos/footer.html";
        ?>

    </footer>

</html>