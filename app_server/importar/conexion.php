<?php
	
	
	function Conexion()
	{
	   


	   if (!($cn=pg_connect("host=localhost port=5432 dbname=reatci user=postgres password=kara$$17")))
	   {
		  echo "Error conectando a la base de datos.";
		  exit();
	   }
	   
	   return $cn;


	   
	}	

?>