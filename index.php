<?php 
include ("header.php");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Hogwarts: Sistema de administracion</title>
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>

<div class="container px-4 py-5" id="featured-3">
    <h2 class="pb-2 border-bottom">Sistema de administracion</h2>
    <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
      <div class="feature col">
        <img height="150" width="150" src="imagenes/logo.png">
        <h2>Cargar alumno</h2>
        <p>Agrega los datos personales del nuevo alumno y una foto </p>
        <p> <a href="alumnos.php"class="btn mt-2 bg-success btn-primary">Agregar</a></p>
      </div>
      <div class="feature col">
        <img height="150" width="150" src="imagenes/logo.png">
        <h2>Inscriptos</h2>
        <p>Conoce la nomina de alumnos</p>
        <p> <a href="ver.php"class="btn mt-2 bg-primary btn-primary">Acceder</a></p>
      </div>
      <div class="feature col">
        <img height="150" width="150" src="imagenes/logo.png">
        <h2>Salir</h2>
        <p>Cerra secion hasta la proxima!</p>
       <p> <a href="index.php"class="btn mt-2 bg-danger btn-primary">Cerrar</a></p>
      </div>
    </div>
  </div>

</div>
</div>
</div>


<?php include("footer.php"); ?>
</body>
</html>