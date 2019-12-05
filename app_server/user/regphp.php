<?php  
	include '../../coneccion/coneccion.php';

	$idusuarios = $_POST['idusuarios'];
	$usuario= $_POST['usuario'];
	$password = $_POST['password'];
	$unidad = $_POST['rol'];
	$cedula = $_POST['cedula'];
	$nombre = $_POST['nombre'];

	if ($unidad=="Especialista") {
		$rol="esp";
		$color='alert-warning';
	}elseif ($unidad=="Bienes") {
		$rol="bne";
		$color='alert-success';
	}else{
		$rol="un";
		$color='alert-danger';
	}
	
	$sql = pg_query("INSERT INTO usuarios(usuario,password,rol,cedula,encargado,unidad,color) 
		VALUES ('$usuario','$password','$rol','$cedula','$nombre','$unidad','$color')");

	if ($sql) {

		header('Location: ../../inicio.php?page=regusuario&mensaje=1');//Se guardo
	}else {
		header('Location: ../../inicio.php?page=regusuario&mensaje=0');//No se guardo
	}

?>                       
      