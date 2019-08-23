<?php  
	include '../../../coneccion/coneccion.php';
include '../../../Errores/mostrar_errores.php';
include '../../../Errores/mostrar_errores2.php';


	$cedula = $_POST['cedula'];
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$carga = $_POST['carga'];
	$madsoltera = $_POST['madsoltera'];
	$telefono = $_POST['telefono'];
	$solicitud = $_POST['solicitud'];
	$departamento= $_POST['departamento'];
	$fecha = $_POST['fecha'];
	$municipio = $_POST['municipio'];
    $sector = $_POST['sector'];
    $calle = $_POST['calle'];
    $casa = $_POST['casa'];
    $nro_hab = $_POST['nro_hab'];
    $referencia = $_POST['referencia'];
    $tipo_vivienda = $_POST['tipo_vivienda'];
    $sit_habit = $_POST['sit_habit'];
    $sit_salud = $_POST['sitsalud'];
    $terreno = $_POST['terreno'];
    $motivo = $_POST['motivo'];

	
	$sql = pg_query("INSERT INTO persona(cedula,nombre,apellido,carga,madsoltera,telefono,solicitud,departamento,fecha,municipio,sector,calle,nro_hab,referencia,tipo_vivienda,sit_habit,sit_salud,terreno,motivo,casa) 
		VALUES ('$cedula','$nombre','$apellido','$carga','$madsoltera','$telefono','$solicitud','$departamento','$fecha','$municipio','$sector','$calle','$nro_hab','$referencia','$tipo_vivienda','$sit_habit','$sit_salud','$terreno','$motivo','$casa')");


   if ($sql) {
		header('Location: ../../../inicio.php?page=regexito');//Se guardo
	}else {
		header('Location: ../../../inicio.php?page=registrar&mensaje=0');//No se guardo
	}
?>          
