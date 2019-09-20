<?php

	include("conexion.php");
	
	$cn = Conexion();

	if (substr($_FILES['excel']['name'],-3)=="csv")
	{
		$fecha		= date("Y-m-d");
		$carpeta 	= "app_server/importar/tmp_excel/";
		$excel  	= $fecha."-".$_FILES['excel']['name'];

		move_uploaded_file($_FILES['excel']['tmp_name'], "$carpeta$excel");
		
		$row = 1;

		$fp = fopen ("$carpeta$excel","r");

		//fgetcsv. obtiene los valores que estan en el csv y los extrae.

		while ($data = fgetcsv ($fp, 1000, ","))
		{
			//si la linea es igual a 1 no guardamos por que serian los titulos de la hoja del excel.
			if ($row!=1)
			{

				$num = count($data);
				$insertar="INSERT INTO clentes (nombre,fecha,guia,origen,destino,tipo,peso,pventa,nfact,pagocliente,fechapago,status) 
						   VALUES ('$data[0]','$data[1]','$data[2]','$data[3]','$data[4]','$data[5]','$data[6]','$data[7]','$data[8]','$data[9]','$data[10]','$data[11]')";
				$sql = pg_query($insertar) or die(pg_last_error());

				if (!$sql)
				{
					echo "<div>Hubo un problema al momento de importar porfavor vuelva a intentarlo</div >";
					exit;
				}

			}

		$row++;

		}

		fclose ($fp);

		echo '<div>La importacion de archivo subio satisfactoriamente <br><br>

                 <a href="?page=home">
                                            <span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span>
                                            <span class="glyphicon-class">Regresar</span></a>




		</div >';
		
		exit;

	}

?>