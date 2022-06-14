<?php





$nombre_per = $_POST["nombre"];
$apellido_per = $_POST["apellido"];
$imagen_per = $_POST["imagen"];
$descripcion_per = $_POST["descripcion"];


$conexion_db = mysqli_connect("localhost", "root","", "utn_intermedio_268") or exit ("No se pudo conectar");
mysqli_query($conexion_db, "INSERT INTO personajes VALUES (DEFAULT, '$nombre_per','$apellido_per','$imagen_per','$descripcion_per')");
header("Location: alumnos.php?ok");


?>


 