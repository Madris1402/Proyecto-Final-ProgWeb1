<!DOCTYPE html>
<html lang="en">
  
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Proyecto Final ProgWeb1</title>
</head>
<body>

  <h1>Registro</h1>

  <div class='registros'>

        <form class="temp" action="create.php" method="POST">
          <label for="nombre"> Nombre:</label> <br>
          <input class="input" type="text" id="nombre" required placeholder name="nombre"> <br>
          <label for="usuario"> Usuario:</label> <br>
          <input class="input" type="text" id="usuario" required placeholder name="usuario"> <br>
          <label for="pass"> Contraseña:</label> <br>
          <input class="input" type="text" id="pass" required placeholder name="pass"> <br>
          <label for="cellnum"> Número de Teléfono:</label> <br>
          <input class="input" type="number" id="cellnum" required placeholder name="cellnum"> <br>
          <label for="email"> Correo Electrónico:</label> <br>
          <input class="input" type="text" id="email" required placeholder name="email"> <br>
          <button type="submit" class="btn btn-primary">Registrar</button>
        </form>
</div>

</body>
</html>