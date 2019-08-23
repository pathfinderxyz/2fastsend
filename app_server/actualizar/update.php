
  <div class="row">
    <div class="col-xs-12">
                     <div class="card">
                         <div class="card-header">
                             <div class="card-title">
                                 <div class="title">Actualizar un ciudadano</div>
                             </div>
                         </div>
                         <div class="card-body">
                             <h5><strong>Introduzca la Cedula del ciudadano actualizar</strong></h5>
                             <form  method="post" action="?page=update" class="form-inline"> 
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
             $count= pg_num_rows($result);

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
                          <div class='col-sm-12'>
                                            <div class='sub-title'>Se encontro $count resultado</div><br>
                                            <table class='table table-striped'>
                                                <thead>
                                                    <tr>
                                                        <th>Cedula</th>
                                                        <th>Nombre</th>
                                                        <th>Apellido</th>
                                                        <th>Municipio</th>
                                                        <th>Solicitud</th>
                                                        <th>Fecha</th>
                                                        <th>Opciones</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope='row'>$cedula</th>
                                                        <td>$nombre</td>
                                                        <td>$apellido</td>
                                                        <td>$direccion</td>
                                                        <td>$solicitud</td>
                                                        <td>$fecha</td>
                                                        <td vAlign='bottom'><a href='?page=update2&ced=$cedula' class='btn btn-primary'>Actualizar</a></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                              
                   
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
                           
                              <strong><span style='margin-left:25px;color:#990000;'>No se encontraron resultados para la cedula '$cedula' </span></strong>
                           
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

     
                                       