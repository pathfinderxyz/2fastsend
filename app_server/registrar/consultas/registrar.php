<?php  
	include '../../../coneccion/coneccion.php';
include '../../../Errores/mostrar_errores.php';
include '../../../Errores/mostrar_errores2.php';


	$fecha = $_POST['fecha'];
	$nombre = $_POST['nombre'];
	$guia = $_POST['guia'];
	$origen = $_POST['origen'];
	$destino = $_POST['destino'];
	$tipo = $_POST['tipo'];
	$peso = $_POST['peso'];
	$pventa = $_POST['pventa'];
	$nfact = $_POST['nfact'];
	$pclientes = $_POST['pclientes'];
    $fpago = $_POST['fpago'];
    $status = $_POST['status'];

	
	$sql = pg_query("INSERT INTO clentes(nombre,fecha,guia,origen,destino,tipo,peso,pventa,nfact,pagocliente,fechapago,status) 
		VALUES ('$nombre','$fecha','$guia','$origen','$destino','$tipo','$peso','$pventa','$nfact','$pclientes','$fpago','$status')");


   if ($sql) {
		header('Location: ../../../inicio.php?page=regexito');//Se guardo
	}else {
		header('Location: ../../../inicio.php?page=registrar&mensaje=0');//No se guardo
	}
?>          
