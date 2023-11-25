<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Proyecto Final ProgWeb1</title>
</head>

<body>
<div class="listas">
        <h1>Usuarios Registrados</h1>
        <h2>Puedes ver o modificar la información aquí</h2>
    </div>
    <div class="centrar">
      <table class="tablas">
      <tbody class="centrar">
        <?php include 'read.php';?>
      </tbody>
    </table>
  </div>
</body>
</html>