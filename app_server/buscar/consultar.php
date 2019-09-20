
  <div class="row">
    <div class="col-xs-12">
                     <div class="card">
                         <div class="card-header">
                             <div class="card-title">
                                 <div class="title">Consultar Tracking</div>
                             </div>
                         </div>
                         <div class="card-body">
                             <h5>Introduzca el numero de guia para consultar su paquete</h5>
                             <form  method="post" action="?page=buscar" class="form-inline"> 
                             <div class="form-group">
                               <input type="text" class="form-control" name="guia" autofocus placeholder="Buscar">
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
             $guia=$_POST['guia'];
             $primer=substr($guia,0,1);


             if ($guia == "" or $primer==" ") {
                 echo 
                    "";
                  }
             else {


             $result = pg_query("SELECT * FROM clentes WHERE guia = '$guia' ");

             while ($row=pg_fetch_assoc($result)) {
                $n++;
                $nombre=$row['nombre'];
                $guia=$row['guia'];
                $fecha=$row['fecha'];
                $destino=$row['destino'];
                $status=$row['status'];
                
            echo 
                "
                 <div class='container'> 
                   <div class='row'>
                     <div class='col-xs-6'>
                       
                         <h3><strong>Numero de guia: $guia</strong><h4></h3><br>
                            <ul class='list-unstyled'> 
                            
                                 <li><h4><strong>Nombre: </strong><span class='text-primary'><strong>$nombre </strong></span><h4></li> 
                                <li><h4><strong>Fecha: </strong><span class='text-primary'><strong>$fecha </strong></span><h4></li> 
                                <li><h4><strong>Destino: </strong><span class='text-primary'><strong>$destino </strong></span><h4></li> 
                                <li><h4><strong>Estado: </strong><span class='text-primary'><strong>$status</strong></span><h4></li>
                                
                            
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
                           
                              <strong><span style='margin-left:25px;color:#990000;'>No se encontraron resultados para este numero de paquete '$guia' </span></strong>
                           
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