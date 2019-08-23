
  <div class="row">
    <div class="col-xs-12">
                     <div class="card">
                         <div class="card-header">
                             <div class="card-title">
                                 <div class="title">Consultar Tracking</div>
                             </div>
                         </div>
                         <div class="card-body">
                             <h5>Introduzca el numero de tracking para consultar su paquete</h5>
                             <form  method="post" action="?page=buscar" class="form-inline"> 
                             <div class="form-group">
                               <input type="text" class="form-control" name="cedula" autofocus placeholder="Buscar">
                             </div>
                                 
                             <button class="btn btn-primary" type="submit">
                                 <span class="glyphicon glyphicon-search"></span>
                             </button> 
                             </form>  
                      
                         </div>
                     
               
                  
       <?php 
             //include ("../errores/mostrar_errores.php");
             include '../../coneccion/coneccion.php';

             $n=0;
             $cedula=$_POST['cedula'];
             $primer=substr($cedula,0,1);


             if ($cedula == "" or $primer==" ") {
                 echo 
                    "";
                  }
             else {


             $result = pg_query("SELECT * FROM persona WHERE cedula = '$cedula' ");

             while ($row=pg_fetch_assoc($result)) {
                $n++;
                $nombre=$row['nombre'];
                $apellido=$row['apellido'];
                $direccion=$row['municipio'];
                $sector=$row['sector'];
                $calle=$row['calle'];
                $casa=$row['casa'];
                $nro_hab = $row['nro_hab'];
                $carga = $row['carga'];
                $madsoltera = $row['madsoltera'];
                $telefono = $row['telefono'];
                $solicitud = $row['solicitud'];
                $departamento= $row['departamento'];
                $fecha = $row['fecha'];
                $nro_hab = $row['nro_hab'];
                $referencia = $row['referencia'];
                $tipo_vivienda = $row['tipo_vivienda'];
                $sit_habit = $row['sit_habit'];
                $sit_salud = $row['sit_salud'];
                $terreno = $row['terreno'];
                $motivo = $row['motivo'];
            echo 
                "
                 <div class='container'> 
                   <div class='row'>
                     <div class='col-xs-6'>
                       
                         <h3><strong>$nombre $apellido / $cedula</strong><h4></h3><br>
                            <ul class='list-unstyled'> 
                                <li><h4><strong>Direccion: </strong><span class='text-primary'><strong>$direccion, $referencia, $sector, $calle, $casa.</strong></span><h4></li> 
                                 <li><h4><strong>Telefono: </strong><span class='text-primary'><strong>$telefono </strong></span><h4></li> 
                                <li><h4><strong>Tipo de Solicitud: </strong><span class='text-primary'><strong>$solicitud </strong></span><h4></li> 
                                <li><h4><strong>Tipo de vivienda:</strong><span class='text-primary'><strong>$tipo_vivienda </strong></span><h4></li> 
                                <li><h4><strong>Situacion de habitacion:</strong><span class='text-primary'><strong>$sit_habit </strong></span><h4></li> 
                                <li><h4><strong>Habitaciones: </strong><span class='text-primary'><strong>$nro_hab </strong></span><h4></li> 
                                <li><h4><strong>Carga: </strong><span class='text-primary'><strong>$carga </strong></span><h4></li> 
                                <li><h4><strong>Madre Soltera: </strong><span class='text-primary'><strong>$madsoltera </strong></span><h4></li> 
                               
                            
                                <li><h4><strong>Fecha: </strong><span class='text-primary'><strong>$fecha </strong></span><h4></li> 
                                
                                <li><h4><strong>Situacion de salud:</strong><span class='text-primary'><strong>$sit_salud</strong></span><h4></li> 
                                
                                 <li><h4><strong>terreno: </strong><span class='text-primary'><strong>$terreno</strong></span><h4></li> 
                                  <li><h4><strong>motivo: </strong><span class='text-primary'><strong>$motivo</strong></span><h4></li> 
                             <br>
                                <a href='?page=editexp&numexp=$nexp' class='btn btn-primary' >Editar</a>     
                            </ul> 
                   
                     </div>
                    </div>                
                 </div>
                 
                 
                 
     </div>
   </div>" ;
     
     

              
           }
     if ($n==0) { 
        echo 
              "
                     <div class='row'>
                         <div class='col-md-12'>
                           
                              <strong><span style='margin-left:25px;color:#990000;'>No se encontraron resultados para este numero de paquete '$cedula' </span></strong>
                           
                         </div>
                     </div> 
               ";
        }
          pg_free_result($result);
     }
     ?>       
   </div>
   </div>
 </div>
     </div>