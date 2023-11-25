<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Proyecto Final ProgWeb1</title>
</head>

<body>

     <form action="login.php" method="post">

        <h1>Iniciar Sesión</h1>

        <?php if (isset($_GET['error'])) { ?>

            <p class="error"><?php echo $_GET['error']; ?></p>

        <?php } ?>

        <div class = 'ventana'>
            <table class="centrar">
                <tbody>
                    <tr>
                        <td><label for="nombre_usuario">Nombre de Usuario</label></td>
                    </tr>
                    <tr>
                        <td><input class = "input" type="text" name="usuario" required placeholder="Ingresa tu Usuario"></td>
                    </tr>
                    <tr>
                        <td><label for="password">Contraseña</label></td>
                    </tr>
                    <tr>
                        <td><input class = "input" type="password" name="pass" required placeholder="Ingresa tu Contraseña"></td>
                    </tr>
                    <tr>
                        <td><button type="submit">Iniciar Sesion</button> <button type="reset" value="Reset">Vaciar Campos</button></td>
                    </tr>
                </tbody>
            </table>


            


        </div>

     </form>

</body>

</html>