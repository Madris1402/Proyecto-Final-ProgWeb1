<?php 

session_start();

if (isset($_SESSION['id']) && isset($_SESSION['usuario'])) {

 ?>

<!DOCTYPE html>

<html>

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="style.css">
     <title>Proyecto Final ProgWeb1</title>
</head>

<body>

     <h1>Bienvenido
          <?php echo $_SESSION['nombre']; ?>
     </h1>

     <a href="logout.php">Cerrar Sesión</a>

</body>

</html>

<?php 

}else{

     header("Location: sesion.php");

     exit();

}

 ?>