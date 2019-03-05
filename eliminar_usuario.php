<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<link rel="stylesheet" href="css/login.css">
	<!-- scroll reveal-->
	<script src="https://unpkg.com/scrollreveal"></script>

	<title>Sistema de logeo - CRUD</title>
</head>
<body>
	<div class="container-fluid bg-dark">
		<ul class="nav justify-content-end">
			<li class="nav-item">
   				 <a class="nav-link" href="#">Cerra Sesion</a>
 		    </li>
		</ul>
	</div>
	<div class="container"><h1>Eliminacion de usuario</h1>
		<div class="d-flex justify-content-center mt-5 border">
			<div class="col-2 p-4 border-right">
				<p>Nombre: </p>
				<p>Apellido: </p>
				<p>Usuario: </p>
				<p>Password: </p>
				<p>Mail: </p>				
			</div>
			<div class="col-3 p-4">
				<?php
				
				include('includes/cnx.php');

				$sql = mysqli_query($conn, "SELECT * FROM login");
				while ($data = mysqli_fetch_array($sql)) {				    
				echo"<p>".$data['nombre']."</p>
				<p>".$data['apellido']."</p>
				<p>".$data['usuario']."</p>
				<p>".$data['password']."</p>
				<p>".$data['mail']."</p>";
				};

				?>
			</div>
		</div>
		<div class="container">
			<div class="row text-center justify-content-end p-2">
				<a href="" class="btn btn-danger mr-2">Confirmar eliminacion</a>
			</div>
		</div>
	</div>
	<div class="container-fluid fixed-bottom">
		<div class="d-flex justify-content-between">
			<div class="col-6 pb-3 pl-5">Produced by | ProgrammingWorld 2019</div>
			<div class="col-6 pb-3 pr-5 text-right">
				<i class="fab fa-facebook-square"></i>
				<i class="fab fa-youtube"></i>
				<i class="fab fa-instagram"></i>
				<i class="fab fa-whatsapp"></i>
			</div>
		</div>
	</div>

	<!-- sripts bootstrap -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>