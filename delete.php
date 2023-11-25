<?php
  include 'db.php';
  $id = $_GET['id'];
  $sql = "delete from usuarios where id=$id";
  $conexion->query($sql);
  $conexion->close();
  header("location: list.php");