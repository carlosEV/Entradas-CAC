<?php

if( !(isset($_COOKIE["cookie-user"]) AND isset($_COOKIE["cookie-psw"])) ){
	exit();
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>cac-entrada</title>
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
		<br>
		<div>
			<?php

//CALCULO DEL PRECIO

$preciobase = "50"; //DEFINE VARIABLES
	$precio15 = "30";
	$precio60 = "20";
	$descuentono="0";
	$descuentovisual=0.5;
	$descuentoauditiva=0.75;

	$nombre=$_POST["nombre"];
	$apellidos=$_POST["apellidos"];
	$dni=$_POST["dni"];
	$edad=$_POST["edad"];
	$genero=$_POST["genero"];
	$pais=$_POST["pais"];
	$discapacidad=$_POST["discapacidad"];

	// COMPRUEBA SI SE HA ENVIADO EL FORMULARIO
	if (!empty($_POST["nombre"]) AND !empty($_POST["edad"]) AND !empty($_POST["discapacidad"])){
		
		$precio = $preciobase;
		
		// Calcula precio por edad
		if($edad < 15){
			$precio = $precio15;
		}elseif($edad > 60){
			$precio = $precio60;
		}
		
		// Calcula descuento por discapacidad
		if($discapacidad == "visual"){
			$precio = $precio * $descuentovisual;
		}elseif($discapacidad == "auditiva"){
			$precio = $precio * $descuentoauditiva;
		}
 
	// GUARDA LOS DATOS DEL FORMULARIO MEDIANTE JSON EN UN FICHERO .TXT (yyyy-mm-dd.txt)

	$dia=date("d");
	$mes=date("m");
	$ano=date("Y");
	$directorio="tickets/";
	$archivos=scandir($directorio);
	$numarchivo=count($archivos);	
	$nombreticket="(".$ano."-".$mes."-".$dia.")"."-"."(".(++$numarchivo).")".".txt";

	$arrayjson = array("nombre" => $nombre,"apellidos" => $apellidos, "dni"=> $dni, "edad"=> $edad,"genero"=> $genero,"pais"=> $pais,"discapacidad"=> $discapacidad);
	$jsonstring=json_encode($arrayjson);
	$file="tickets/".$nombreticket;
	fopen($file, "w+");
	fwrite($file, $jsonstring);	

		echo "Tu nombre es ".$_POST["nombre"]." y tienes".$_POST["edad"]." años. Discapacidad, ".$_POST["discapacidad"]." con precio ".$precio;


	}else{
		 header("location: gestion.php");// REDIRIGE A gestion.php
	}

?>
			
		</div>
	
</body>
</html>


