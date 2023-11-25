<?php
  include 'db.php';
  
  $id = $_POST['id'];
  $nombre = $_POST["nombre"];
  $pass = $_POST["pass"];
  $cellnum = isset($_POST["cellnum"]) ? intval($_POST["cellnum"]) : 0;
  $email = $_POST["email"];
  $permisos = $_POST["permisos"];
  $sql = "update usuarios set nombre='$nombre', pass='$pass', cellnum='$cellnum', email='$email', permisos='$permisos' where id=$id";
  $result = $conexion->query($sql);
  $conexion->close();

  header("Location: home.php");
  
?>