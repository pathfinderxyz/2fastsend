<?php 
     
    include '../../coneccion/coneccion.php';
    /*$id = $_GET['id']; */

     
    $sql = pg_query("SELECT * FROM clentes");
    $row1 = pg_fetch_assoc($sql2);
    $row = pg_num_rows($sql);
    
?>
            <form>
            <br>
            <div class="row">
                        <div class="col-xs-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">
                                    <div class="title">Estado de cuenta</div>
                                    </div>
                                </div>
                                
                                    
                                    <div class="panel">

                                        <!-- Default panel contents 
                                        <div class="panel-heading">
                                          <br>
                                        <strong>Historial de Solicitudes</strong>

                                        </div>-->
                                        
                                <div class="card-body">
                                        <!-- Table -->
                                        <table class="datatable table table-striped" cellspacing="0" width="100%">
                                            <thead color="#000000">
                                                <tr>
                                                    <th>No. de Guía</th>
                                                    <th>Nombre</th>
                                                    <th>Numero de factura</th>
                                                    <th>tipo de envío</th>
                                                    <th>monto</th>
                                                    <th>Fecha</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                     if ($row) {
                                                         while ($info = pg_fetch_assoc($sql)) {
                                                     echo '<tr>
                                                             <td>'.$info['guia'].'</td>
                                                             <td>'.$info['nombre'].'</td>
                                                             <td>'.$info['nfact'].'</td>
                                                             <td>'.$info['tipo'].'</td>
                                                             <td>'.$info['pagocliente'].'</td>
                                                             <td>'.$info['fecha'].'</td>                                                 
                                                          </tr>';
                                                         }
                                                     }else{

                                                       }
                                                 ?>  
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>