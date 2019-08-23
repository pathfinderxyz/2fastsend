<?php  
	include '../../coneccion/coneccion.php';
include '../../Errores/mostrar_errores.php';
include '../../Errores/mostrar_errores2.php';


	$cedula = $_POST['ced'];
	$carga = $_POST['carga'];
	$madsoltera = $_POST['madsoltera'];
	$telefono = $_POST['telefono'];
	date_default_timezone_set('America/Caracas');
    $fecha = date('Y-m-d');
	$municipio = $_POST['municipio'];
    $sector = $_POST['sector'];
    $calle = $_POST['calle'];
    $casa = $_POST['casa'];
    $nro_hab = $_POST['nro_hab'];
    $referencia = $_POST['referencia'];
    $tipo_vivienda = $_POST['tipo_vivienda'];
    $sit_habit = $_POST['sit_habit'];
    $sit_salud = $_POST['sit_salud'];
    $terreno = $_POST['terreno'];
    $motivo = $_POST['motivo'];

	
	$sql = pg_query("UPDATE persona SET carga='$carga',madsoltera='$madsoltera',telefono='$telefono',fecha='$fecha',municipio='$municipio',sector='$sector',calle='$calle',nro_hab='$nro_hab',referencia='$referencia',tipo_vivienda='$tipo_vivienda',sit_habit='$sit_habit',sit_salud='$sit_salud',terreno='$terreno',motivo='$motivo' WHERE cedula='$cedula' ");

    if ($sql) {
		header('Location: ../../inicio.php?page=update3');//Se guardo
	}else {
		header('Location: ../../inicio.php?page=update2&mensaje=0');//No se guardo
	}
  
?>          
