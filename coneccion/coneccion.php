<?php  
	$user = 'osjgkygtrpojcg';
	$passwd = 'd071b435c9e0023ab89ddc749d10bb44854f28c5f584a504b47d84b43f99fa75';
	$db = 'dtisspb366oho';
	$port = 5432;
	$host = 'ec2-23-21-238-246.compute-1.amazonaws.com';
	$strCnx = "host=$host port=$port dbname=$db user=$user password=$passwd";
	$cnx = pg_connect($strCnx) or die ("Error de conexion. ". pg_last_error());
?> 
