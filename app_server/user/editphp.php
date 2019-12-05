<?php  
	include '../../coneccion/coneccion.php';

	$password = $_POST['p1'];
	$pass = $_POST['password'];

	
	
    $sql1 = pg_query("SELECT id FROM usuarios WHERE password='$pass'");
    $row= pg_fetch_assoc($sql1);
    $id4= $row['id'];
	
	$sql = pg_query("UPDATE usuarios set password='$password' where id='$id4'");


	if ($sql) {

		header('Location: ../../inicio.php?&page=edi_usuario&mensaje=1');//Se guardo
	}else {
		header('Location: ../../inicio.php?&page=edi_usuario&mensaje=0');//No se guardo
	}

	

?>                       
     