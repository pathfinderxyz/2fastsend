<?php  
  include '../../Errores/mostrar_errores.php';
include '../../Errores/mostrar_errores2.php';
include '../../coneccion/coneccion.php';

  $ci=$_GET['ced'];       
?>


                   <div class="row">
                        <div class="col-xs-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">
                                        <div class="title">Actualizar a un ciudadano</div>
                                    </div>
                                </div>
                                   <?php  
                                          $sql = pg_query("SELECT * FROM persona WHERE cedula = '$ci'");
                                          $row = pg_num_rows($sql);
                                          $row2 = pg_fetch_assoc($sql);
                                          
                                   ?>
                                <div class="card-body">
                                     <div class='row'>  
                                     <div class='col-sm-4'>
                                            <div class='sub-title'><span style="font-size:25px;"><?php echo $row2['nombre'];?>&nbsp;<?php echo $row2['apellido'];?>&nbsp;<?php echo $ci;?></span></div><br>
                                            <?php  
                                     if (isset($_GET['mensaje'])) {
                                        if ($_GET['mensaje'] == 0) {
                                           echo '<div class="row">
                                            <div class="col-md-8">
                                               <div class="alert alert-danger">
                                                   <strong>Error al guardar el registro Intentelo de nuevo</strong>
                                              </div>
                                            </div>
                                            </div>';
                                         }
                                       }
                                   ?>
                                             <form class="form-inline" action="app_server/actualizar/update3.php" method="post">
                                            <table class='table table-striped'>
                                                <thead>
                                                    <tr>
                                                        <th>Datos</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                 
                                                <tr>
                                                        <td>Telefono</td>
                                                        <td><input type="text" style="border:none" name="telefono" value="<?php echo $row2['telefono'];?>" autofocus></td>  
                                                    </tr>
                                                    <tr>
                                                        <td>Municipio</td>
                                                        <td><input type="text" style="border:none" name="municipio" value="<?php echo $row2['municipio'];?>"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Sector</td>
                                                        <td><input type="text" style="border:none" name="sector" value="<?php echo $row2['sector'];?>"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Calle</td>
                                                        <td><input type="text" style="border:none" name="calle" value="<?php echo $row2['calle'];?>"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Casa</td>
                                                        <td><input type="text" style="border:none" name="casa" value="<?php echo $row2['casa'];?>"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Referencia</td>
                                                        <td><input type="text" style="border:none" name="referencia" value="<?php echo $row2['referencia'];?>"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Num de habitaciones</td>
                                                        <td><input type="text" style="border:none" name="nro_hab" value="<?php echo $row2['nro_hab'];?>"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Carga</td>
                                                        <td><input type="text" style="border:none" name="carga" value="<?php echo $row2['carga'];?>"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Madre soltera</td>
                                                        <td><input type="text" style="border:none" name="madsoltera" value="<?php echo $row2['madsoltera'];?>"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>tipo de vivienda</td>
                                                        <td><input type="text" style="border:none" name="tipo_vivienda" value="<?php echo $row2['tipo_vivienda'];?>"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Situacion de habitacion</td>
                                                        <td><input type="text" style="border:none" name="sit_habit" value="<?php echo $row2['sit_habit'];?>"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Situacion de salud</td>
                                                        <td><input type="text" style="border:none" name="sit_salud" value="<?php echo $row2['sit_salud'];?>"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Terreno</td>
                                                        <td><input type="text" style="border:none" name="terreno" value="<?php echo $row2['terreno'];?>"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Motivo</td>
                                                        <td><input type="text" style="border:none" name="motivo" value="<?php echo $row2['motivo'];?>"></td>
                                                    </tr>
                                                    <input type="hidden"  name="ced"  value="<?php echo $ci ;?>">
                                                  
                                                </tbody>
                                            </table>
                                            <button type="submit" class="btn btn-primary">Guardar</button>
                                            </form>
                                        </div>
                                    </div>
                               </div>                
                              </div>
                            </div>
                        </div>
                    </div>
