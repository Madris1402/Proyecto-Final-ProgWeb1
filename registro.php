<!DOCTYPE html>
<html lang="en">
  
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Proyecto Final ProgWeb1</title>
  </head>
  
  <body>
    <table>
            <tr>
                <td><a style="text-decoration: none; border: 3px solid; border-radius:10px; padding: 3px; color: green;" href="index.php">Inicio</a></td>
            </tr>
    </table>

    <h1>Registro</h1>

    <div class='registros'>
          <form class="temp" action="create.php" method="POST">
            <table class="centrar">
              <tbody>
                <tr>
                  <td>
                    <label for="nombre"> Nombre:</label> <br>
                  </td>
                </tr>

                <tr>
                  <td>
                    <input class="input" type="text" id="nombre" required placeholder name="nombre"> <br>
                  </td>
                </tr>
                  
                <tr>
                  <td>
                    <label for="usuario"> Usuario:</label> <br>
                  </td>
                </tr>
                  
                <tr>
                  <td>
                    <input class="input" type="text" id="usuario" required placeholder name="usuario"> <br>
                  </td>
                </tr>
                  
                <tr>
                  <td>
                    <label for="pass"> Contraseña:</label> <br>
                  </td>
                </tr>
                  
                <tr>
                  <td>
                    <input class="input" type="text" id="pass" required placeholder name="pass"> <br>
                  </td>
                </tr>
                  
                <tr>
                  <td>
                    <label for="cellnum"> Número de Teléfono:</label> <br>
                  </td>
                </tr>
                  
                <tr>
                  <td>
                    <input class="input" type="number" id="cellnum" required placeholder name="cellnum"> <br>
                  </td>
                </tr>
                  
                <tr>
                  <td>
                    <label for="email"> Correo Electrónico:</label> <br>
                  </td>
                </tr>
                  
                <tr>
                  <td>
                    <input class="input" type="text" id="email" required placeholder name="email"> <br>
                  </td>
                </tr>
                  
                <tr>
                  <td>
                    <button type="submit" class="btn btn-primary">Registrar</button> <button type="reset" value="Reset">Vaciar Campos</button>
                  </td>
                </tr>
              </tbody>
            </table>
          </form>
    </div>
  </body>
</html>