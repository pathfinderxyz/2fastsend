<?php  
	$user = 'osjgkygtrpojcg';
	$passwd = 'd071b435c9e0023ab89ddc749d10bb44854f28c5f584a504b47d84b43f99fa75';
	$db = 'dtisspb366oho';
	$port = 5432;
	$host = 'ec2-23-21-238-246.compute-1.amazonaws.com';
	$strCnx = "host=$host port=$port dbname=$db user=$user password=$passwd";
	$cnx = pg_connect($strCnx) or die ("Error de conexion. ". pg_last_error());
?> 



<?php  
	$user = 'oyokmxdwrwnefd';
	$passwd = '2ba7783f302f68501a6d6da0041f0324efde5688453852a493b0dac577a5c624';
	$db = 'd30tkkjl7lvatq';
	$port = 5432;
	$host = 'ec2-23-23-220-163.compute-1.amazonaws.com';
	$strCnx = "host=$host port=$port dbname=$db user=$user password=$passwd";
	$cnx = pg_connect($strCnx) or die ("Error de conexion. ". pg_last_error());

?>