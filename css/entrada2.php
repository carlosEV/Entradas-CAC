
<?php

	$preciobase = "50"; //DEFINE VARIABLES
	$precio15 = "30";
	$precio60 = "20";
	$descuentono="0";
	$descuentovisual=0.5;
	$descuentoauditiva=0.25;

	$nombre=$_POST["nombre"];
	$apellidos=$_POST["apellidos"];
	$dni=$_POST["din"];
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

		echo "Tu nombre es ".$_POST["nombre"]." y tienes".$_POST["edad"]." años. Discapacidad, ".$_POST["discapacidad"]." con precio ".$precio;

	}else{
		 header("location: gestion.php");// REDIRIGE A gestion.php
	}


?>