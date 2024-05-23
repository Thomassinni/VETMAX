<!doctype html>
<html lang="es"
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
	
    <title>Veterinaria</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<h1>Empleados</h1>
		</div>
		
		<div class="row">
			<form id="registro" name="registro" method="post" action="guarda.php" autocomplete="off">
				<div class-"form-group">
					<label for="nombre">Nombre</label>
					<input type="text" class="form-control" id="nombre" name="nombre" placefolder="Introduce el nombre" autofocus required>
				</div>
				
				<div class-"form-group">
					<label for="telefono">Telefono</label>
					<input type="text" class="form-control" id="telefono" name="telefono" placefolder="Introduce el telefono" required>
				</div>
				
				<div class-"form-group">
					<label for="fecha_nacimiento">Fecha de nacimiento</label>
					<input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" placefolder="Introduce la fecha de nacimiento" required>
				</div>
				
				<div class-"form-group">
					<label for="estado_civil">Estado civil</label>
					<select id="estado_civil" name="estado_civil" class="form-control" required>
					    <option value="soltero">Soltero</option>
						<option value="casado">Casado</option>
						<option value="otro">Otro</option>
					</select>
				</div>
				
				<div class-"form-group">
					<button class="btn btn-primary" id="guarda" name="guarda" type="submit">Guarda el registro</button>
				</div>
			</form>
			
		</div>
	</div>	
	
	
	<!-- Optional JavaScript; choose one of the two! -->
	<!-- Option 1: Bootstrap Bundle with Popper -->
	<script src="js/jquery-3.7.1.min.js" ></script>
	<script src="js/bootstrap.min.js" ></script>
</body>
</html>	

