
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

<div class="row">
	<div class=" mt-2 mx-5">
	<p> <a href="index.php"class="btn mt-2 bg-success btn-primary">Home</a></p>
    </div>
    <div class="col-12">

		<div class="col-4 card bg-light mt-3 mx-5 pt-5 pb-5 text-center">
			<form class="formulario" action="cargar_personaje.php" method="POST">
				<div class="mb-2">
					<input type="text" name="nombre" required placeholder="Nombre" >
				</div>
				<div class="mb-2">
					<input type="text" name="apellido" required placeholder="Apellido">
				</div>
				<div class="mb-2">
					<input type="text" name="imagen" required placeholder="Imagen">
	            </div>
		      
		      	<textarea type= "text" name="descripcion" id="" cols="23" rows="5" required placeholder="Descripcion"></textarea>
					<div class="col-12 ">
	        	    

            </div>		
						<input type="submit" class="btn mt-2 bg-warning btn-primary" value="Cargar"></input>
	        </form>    
	        
        	

    </div>

 	<?php 
	if(isset($_GET['ok'])){
		echo "<h3>Personaje cargado correctamente</h3>";
	}

	?>
</div>

<?php include("footer.php"); ?>
</body>
</html>