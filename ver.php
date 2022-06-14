<?php include("header.php");
	    include("conexion.php");
	 
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Nomina de alumnos</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
<header>
<div class ="row bg-warning">
<div class="col-12 text-center pb-5 ">

	<img height="150" width="150" src="imagenes/logo.png">



  <p> <a href="index.php"class="btn mt-2 bg-success btn-primary">Home</a></p>


</header>
<div class="row">
	
		

		<?php 
		$consulta_db = mysqli_query($conexion_db,"SELECT * FROM personajes");  while($mostrar_datos = mysqli_fetch_assoc($consulta_db)){
	 	        ?>

		 	        <div class=" card mt-5 mx-5 pt-2" style="width: 18rem;">
					  <img class="card-img-top" src="imagenes/<?php echo $mostrar_datos['imagen'];?>" alt="Card image cap" width="200" height="250">
					  <div class="card-body">
					    <h5 class="card-title"><?php echo $mostrar_datos['nombre'];?></h5> <h6><?php echo $mostrar_datos['apellido'] ?></h6>
					    <p class="card-text"><?php echo $mostrar_datos['descripcion'];?></p>

						  <p> <a href="eliminar.php?id=<?php echo $mostrar_datos['id_personaje']?>"class="btn mt-2 bg-warning btn-primary">eliminar </a></p>
					  </div>
					</div>
		





		<?php }  	?>
	 


	
</div>
</body>
</html>

















<?php include("footer.php")?>