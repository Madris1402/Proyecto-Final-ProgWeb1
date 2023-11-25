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

        <h2>Iniciar Sesión</h2>

        <?php if (isset($_GET['error'])) { ?>

            <p class="error"><?php echo $_GET['error']; ?></p>

        <?php } ?>

        <div class = 'ventana'>
            
            <label for="nombre_usuario">Nombre de Usuario</label> <br>
            <input class = "input" type="text" name="usuario" required placeholder="Ingresa tu Usuario">
            <br>

            <br>
            <label for="password">Contraseña</label> <br>
            <input class = "input" type="password" name="pass" required placeholder="Ingresa tu Contraseña">
            <br>

            <button type="submit">Iniciar Sesion</button>
            <button type="reset" value="Reset">Vaciar Campos</button>
        </div>

     </form>

</body>

</html>