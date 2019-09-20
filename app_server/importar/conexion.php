<?php
	
	
	function Conexion()
	{
	   


	   if (!($cn=pg_connect("host=ec2-23-21-238-246.compute-1.amazonaws.com port=5432 dbname=dtisspb366oho user=osjgkygtrpojcg password=d071b435c9e0023ab89ddc749d10bb44854f28c5f584a504b47d84b43f99fa75")))
	   {
		  echo "Error conectando a la base de datos.";
		  exit();
	   }
	   
	   return $cn;


	   
	}	

?>