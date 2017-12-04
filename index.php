<!DOCTYPE html>
<html lang="es">
<head>
	<title>cac-login</title>
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
		<div class="row"><!-- CONTENIDO -->	
			<div class="col-md-4 login">
			</div>
			<div class="col-md-3 login">
				<br>
				<br>
				<br>
				<form action="" method="POST" class="formulario"><!-- FORMULARIO -->
					<h3>Acceso Intranet</h3>
					<br>
						<div class="form-group">
							<label for="user">Código de empleado</label>
							<input type="text" class="form-control input-sm" name="user" placeholder="código">
						<div class="form-group">
							<label for="psw">Contraseña</label>
							<input type="password" class="form-control input-sm" name="psw" placeholder="contraseña">
						</div>
						<div class="container-fluid">
							<div class="row">
								<div class="col-md-4">
									<button type="submit"class="btn btn-primary btn-sm">Acceder</button>									
								</div>
								<div class="col-md-8">
									<?php
										
										$seguridad = file_get_contents("seguridad.txt");// VARIABLE QUE NOS DICE DONDE BUSCAR

										if(isset($_POST["user"])){// COMPRUEBA SI SE HA ENVIADO EL FORMULARIO
										
											$userpsw = $_POST["user"].":".$_POST["psw"];// VARIABLE QUE RECOGE USUARIO Y CONTRASEÑA (user:psw)

											if ($userpsw == $seguridad) {// BUSCA LOS DATOS INTRODUCIDOS EN EL ARCHIVO "seguridad.txt". 

												setcookie("cookie-user", $_POST["user"], time()+3600);// CREA COOKIES CON EL USUARIO Y CONTRASEÑA CON CADUCIDAD DE UNA HORA
												setcookie("cookie-psw", $_POST["psw"], time()+3600);
												header("location: gestion.php");// SI COINCIDEN REDIRIGE A gestion.php

												}else{// SI NO COINCIDEN DEVUELVE MENSAJE DE ERROR

													echo("Datos incorrectos");	
												}
											}				// 
									?>

								</div>
							</div>
					</div>
				</form><!-- FIN FORMULARIO -->			
			</div>
			<div class="col-md-5 login">
			</div>
		</div><!-- FIN CONTENIDO -->
	</div>
</body>
</html>