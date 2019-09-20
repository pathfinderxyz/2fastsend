<?php  
  include '../../Errores/mostrar_errores.php';
include '../../Errores/mostrar_errores2.php';
?>


                   <div class="row">
                        <div class="col-xs-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">
                                        <div class="title">Registre un nuevo cliente</div>
                                    </div>
                                </div>
                                  
                                <div class="card-body">
                                   <?php  
                                     if (isset($_GET['mensaje'])) {
                                        if ($_GET['mensaje'] == 0) {
                                           echo '<div class="row">
                                            <div class="col-md-8">
                                               <div class="alert">
                                                   <strong><span style="margin-left:25px;color:#990000;">Error al guardar el registro Intentelo de nuevo !</span></strong>
                                              </div>
                                            </div>
                                            </div>';
                                         }
                                       }
                                   ?>
                                    <form class="form-inline" action="app_server/registrar/consultas/registrar.php" method="post">
                                        



<!-- --------------------------------------------Datos personales---------------------------------- -->
                                        <div class="sub-title">Datos del cliente</div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail2"> &nbsp;&nbsp;Fecha</label>
                                            <input type="date" class="form-control" name="fecha" id="fecha">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputName2"> &nbsp;&nbsp;Nombre</label>
                                            <input type="text" class="form-control" name="nombre" id="nombre" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail2"> &nbsp;&nbsp;Guia</label>
                                            <input type="number" class="form-control" name="guia" id="guia" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail2"> &nbsp;&nbsp;Origen</label>
                                         
                                            <div class="form-group">
                                                  
                                                      <div class="col-sm-5">
                                                             <select name="municipio" id="Origen" required="" class="form-control">
                                                              <option value=""></option>
                 
                                                              <option value="ALEMANIA">ALEMANIA</option>
                                                              <option value="ARGENTINA">ARGENTINA</option>
                                                              <option value="AUSTRALIA">AUSTRALIA</option>
                                                              <option value="BAHRAIN">BAHRAIN</option>
                                                              <option value="BEIRUT">BEIRUT</option>
                                                              <option value="BELGICA">BELGICA</option>
                                                              <option value="BOLIVIA">BOLIVIA</option>
                                                              <option value="BRASIL">BRASIL</option>
                                                              <option value="BUCARAMANG">BUCARAMANG</option>
                                                              <option value="C.RICA">C.RICA</option>
                                                              <option value="CANADA">CANADA</option>
                                                              <option value="CARACAS">CARACAS</option>
                                                              <option value="CHILE">CHILE</option>
                                                              <option value="CHINA">CHINA</option>
                                                              <option value="COLOMBIA">COLOMBIA</option>
                                                              <option value="CROACIA">CROACIA</option>
                                                              <option value="CUBA">CUBA</option>
                                                              <option value="CYPRUS">CYPRUS</option>
                                                              <option value="DINAMARCA">DINAMARCA</option>



                                                             </select>
                                                       </div>
                                               </div>
                                         </div>

                                       <div class="form-group">
                                            <label for="exampleInputEmail2"> &nbsp;&nbsp;Destino</label>
                                         
                                            <div class="form-group">
                                                  
                                                      <div class="col-sm-5">
                                                             <select name="destino" id="destino" required="" class="form-control">
                                                              <option value=""></option>
                 
                                                              <option value="ALEMANIA">ALEMANIA</option>
                                                              <option value="ARGENTINA">ARGENTINA</option>
                                                              <option value="AUSTRALIA">AUSTRALIA</option>
                                                              <option value="BAHRAIN">BAHRAIN</option>
                                                              <option value="BEIRUT">BEIRUT</option>
                                                              <option value="BELGICA">BELGICA</option>
                                                              <option value="BOLIVIA">BOLIVIA</option>
                                                              <option value="BRASIL">BRASIL</option>
                                                              <option value="BUCARAMANG">BUCARAMANG</option>
                                                              <option value="C.RICA">C.RICA</option>
                                                              <option value="CANADA">CANADA</option>
                                                              <option value="CARACAS">CARACAS</option>
                                                              <option value="CHILE">CHILE</option>
                                                              <option value="CHINA">CHINA</option>
                                                              <option value="COLOMBIA">COLOMBIA</option>
                                                              <option value="CROACIA">CROACIA</option>
                                                              <option value="CUBA">CUBA</option>
                                                              <option value="CYPRUS">CYPRUS</option>
                                                              <option value="DINAMARCA">DINAMARCA</option>



                                                             </select>
                                                       </div>
                                               </div>
                                         </div><br><br>
                                      
                                      
                                        <div class="form-group">
                                            <label for="exampleInputEmail2"> &nbsp;&nbsp;Tipo</label>
                                            <input type="text" class="form-control" name="tipo" id="tipo" required>
                                        </div>                        
                                        
<!-- --------------------------------------------Direccion---------------------------------- -->

                                        <div class="sub-title">Datos del paquete</div>

                                        <div class="form-group">
                                            <label for="exampleInputName2"> &nbsp;&nbsp;Peso (Kg)</label>
                                            <input type="number" class="form-control" name="peso" id="peso" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail2"> &nbsp;&nbsp;Precio de venta</label>
                                            <input type="number" class="form-control" name="pventa" id="pventa" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail2"> &nbsp;&nbsp;Num de factura</label>
                                            <input type="number" class="form-control" name="nfact" id="nfact" required>

                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail2"> &nbsp;&nbsp;Pago cliente</label>
                                            <input type="number" class="form-control" name="pclientes" id="pclientes" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail2"> &nbsp;&nbsp;Fecha pago</label>
                                            <input type="date" class="form-control" name="fpago" id="fpago" required>
                                        </div><br><br>
                                        <div class="form-group">
                                            <label for="exampleInputEmail2"> &nbsp;&nbsp;Status</label>
                                            <input type="text" class="form-control" name="status" id="status" required>
                                        </div><br><br><br>
<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->                                        
                                      

<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->                                         
                                                     
                                        <button type="submit" class="btn btn-danger">Guardar</button>
                                        
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>

                    