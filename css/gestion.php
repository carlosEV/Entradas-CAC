<!DOCTYPE html>
<html lang="es">
<head>
	<title>cac-gestion</title>
	<meta charset="UTF-8">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="container-fluid">	
		<div class="row-header"><!-- CABECERA -->					
			<div class="col-md-3">
			</div>				
			<div class="col-md-3 header-logo-cac">
				<img  src="imagenes/cac.png" alt="Logo CAC">
			</div>
			<div class="col-md-3 header-logo-gva">
				<img  src="imagenes/gva_logo.png" alt="Logo GVA">
			</div>
			<div class="col-md-3">			
			</div>
		</div><!-- FIN CABECERA -->
		<div class="row container-fluid"><!-- CONTENIDO -->	
			<div class="col-md-2">					
			</div>
			<div class="col-md-8">
				<br>
				<br>
				<br>
					<form action="entrada.php" method="POST" class="formulario"><!-- FORMULARIO -->
						<h3>Gestión venta tickets</h3>
						<br>
							<div class="row">
								<div class="col-md-3 form-group">
								    <label for="nombre">Nombre</label>
								    	<input type="text" class="form-control input-sm" name="nombre" placeholder="nombre"> 									
								</div>
								<div class="col-md-5 form-group">
								    <label for="apellidos">Apellidos</label>
								    	<input type="text" class="form-control input-sm" name="apellidos" placeholder="apellidos">
								</div>
								<div class="col-md-3 form-group">
								    <label for="dni">DNI / Pasaporte</label>
								    	<input type="text" class="form-control input-sm" name="dni" placeholder="Ej: 12345678A">
								</div>
							</div>

							<div class="row">
								<div class="col-md-2 form-group">
								    <label for="edad">Edad</label>
								    	<input type="number" min="0" max="99" class="form-control input-sm" name="edad" placeholder="edad">
								</div>
								<div class="col-md-2 form-group">
									<label for="genero">Género</label><br>
										<input type="radio" name="genero" value="masculino" >Masculino<br>
	   								<input type="radio" name="genero" value="femenino">Femenino
								</div>
								<div class="col-md-4 form-group">									
									<label for="pais">País</label>
										<select class="form-control input-sm" name="pais">
							        <option value="españa" selected="España">España</option>
							        <option value="portugal">Portugal</option>
							        <option value="francia">Francia</option>
							        <option value="alemania">Alemania</option>
							        <option value="italia">Italia</option>
						    		</select>
								</div>
								<div class="col-md-4 form-group">									
									<label for="discapacidad">Discapacidad</label>
										<select class="form-control input-sm" name="discapacidad">
							        <option value="no" selected="no">No</option>
							        <option value="visual">Visual</option>
							        <option value="auditiva">Auditiva</option>
						    		</select>
								</div>
								<div class="row">
									<div class="col-md-8">
										<button type="reset" class="btn btn-danger btn-xs">Borrar</button>
									</div>
									<div class="col-md-2">
										<button type="submit" class="btn btn-primary btn-sm">Emitir Ticket</button>			
									</div>
									<div class="col-md-2">																	
 									</div>
								</div>
					</form><!-- FIN FORMULARIO -->
			</div>
			<div class="col-md-2">
			</div>
		</div><!-- FIN CONTENIDO -->
	</div>
</body>


</html>