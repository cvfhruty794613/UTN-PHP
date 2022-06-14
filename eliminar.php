<?php

include("conexion.php");

$id_personaje = $_GET['id'];
mysqli_query($conexion_db, "DELETE FROM personajes WHERE id_personaje = $id_personaje");
header("Location: ver.php");

 ?>