<?php  
  include '../../Errores/mostrar_errores.php';
include '../../Errores/mostrar_errores2.php';
?>


                   <div class="row">
                        <div class="col-xs-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">
                                        <div class="title">Registre un nuevo ciudadano</div>
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
                                        
<!-- --------------------------------------------tipo de solicitud---------------------------------- -->
                                        <div class="sub-title">Tipo de Solicitud</div>
                                        
                                        <div>
                                          <div class="radio3 radio-check radio-danger radio-inline">
                                            <input type="radio" id="vivienda" name="solicitud" value="vivienda">
                                            <label for="vivienda">
                                              Vivi.
                                            </label>
                                          </div>
                                          <div class="radio3 radio-check radio-danger radio-inline">
                                            <input type="radio" id="documentos" name="solicitud" value="documentos">
                                            <label for="documentos">
                                              Doc.
                                            </label>
                                          </div>
                                          <div class="radio3 radio-check radio-danger radio-inline">
                                            <input type="radio" id="adjudicacion" name="solicitud" value="adjudicacion">
                                            <label for="adjudicacion">
                                              Adj.
                                            </label>
                                          </div>
                                          <div class="radio3 radio-check radio-danger radio-inline">
                                            <input type="radio" id="inspeccion" name="solicitud" value="inspeccion">
                                            <label for="inspeccion">
                                              Insp.
                                            </label>
                                          </div>
                                          <div class="radio3 radio-check radio-danger radio-inline">
                                            <input type="radio" id="radio5" name="solicitud" value="audiencia">
                                            <label for="audiencia">
                                              Aud.
                                            </label>
                                          </div>
                                          <div class="radio3 radio-check radio-danger radio-inline">
                                            <input type="radio" id="radio6" name="solicitud" value="cambio">
                                            <label for="cambio">
                                              Per./Cambio
                                            </label>
                                          </div>
                                        </div>

<!-- --------------------------------------------enviar al departamento---------------------------------- -->
                                        <div class="sub-title">Enviar al departamento</div>
                                        
                                        <div>
                                          <div class="radio3 radio-check radio-danger radio-inline">
                                            <input type="radio" id="direccion" name="departamento" value="direccion" >
                                            <label for="direccion">
                                              Direccion
                                            </label>
                                          </div>
                                          <div class="radio3 radio-check radio-danger radio-inline">
                                            <input type="radio" id="sunavi" name="departamento" value="sunavi">
                                            <label for="sunavi">
                                              Sunavi
                                            </label>
                                          </div>
                                          <div class="radio3 radio-check radio-danger radio-inline">
                                            <input type="radio" id="banavih" name="departamento" value="banavih">
                                            <label for="banavih">
                                              Banavih
                                            </label>
                                          </div>
                                          <div class="radio3 radio-check radio-danger radio-inline">
                                            <input type="radio" id="redes" name="departamento" value="redes">
                                            <label for="redes">
                                              Redes
                                            </label>
                                          </div>
                                          <div class="radio3 radio-check radio-danger radio-inline">
                                            <input type="radio" id="otro" name="departamento" value="otro">
                                            <label for="otro">
                                              Otro
                                            </label>
                                          </div>
<!-- --------------------------------------------Datos personales---------------------------------- -->
                                        <div class="sub-title">Datos Personales</div>
                                        <div class="form-group">
                                            <label for="exampleInputName2"> &nbsp;&nbsp;Nombre</label>
                                            <input type="text" class="form-control" name="nombre" id="nombre" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail2"> &nbsp;&nbsp;Apellido</label>
                                            <input type="text" class="form-control" name="apellido" id="apellido" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail2"> &nbsp;&nbsp;Cedula</label>
                                            <input type="number" class="form-control" name="cedula" id="cedula" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail2"> &nbsp;&nbsp;Carga Fam</label>
                                            <input type="number" class="form-control" name="carga" id="carga" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail2"> &nbsp;&nbsp;Madre Soltera</label>
                                             <div class="radio3 radio-check radio-danger radio-inline">
                                            <input type="radio" id="si" name="madsoltera" value="si">
                                            <label for="si">
                                              Si
                                            </label>
                                          </div>
                                          <div class="radio3 radio-check radio-danger radio-inline">
                                            <input type="radio" id="no" name="madsoltera" value="no">
                                            <label for="no">
                                              No
                                            </label>
                                          </div>

                                        </div><br><br>
                                        <div class="form-group">
                                            <label for="exampleInputEmail2"> &nbsp;&nbsp;Telefono</label>
                                            <input type="number" class="form-control" name="telefono" id="telefono" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail2"> &nbsp;&nbsp;Fecha</label>
                                            <input type="date" class="form-control" name="fecha" id="fecha">
                                        </div>
                                        
<!-- --------------------------------------------Direccion---------------------------------- -->

                                        <div class="sub-title">Dirección</div>

                                        <div class="form-group">
                                            <label for="exampleInputName2"> &nbsp;&nbsp;Municipio</label>
                                            <input type="text" class="form-control" name="municipio" id="municipio" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail2"> &nbsp;&nbsp;Sector</label>
                                            <input type="text" class="form-control" name="sector" id="sector" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail2"> &nbsp;&nbsp;Calle</label>
                                            <input type="text" class="form-control" name="calle" id="calle" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail2"> &nbsp;&nbsp;Casa</label>
                                            <input type="text" class="form-control" name="casa" id="casa" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail2"> &nbsp;&nbsp;Nro.Hab</label>
                                            <input type="number" class="form-control" name="nro_hab" id="nro_hab" required>
                                        </div><br><br>
                                        <div class="form-group">
                                            <label for="exampleInputEmail2"> &nbsp;&nbsp;Referencia</label>
                                            <input type="text" class="form-control" name="referencia" id="referencia" required>
                                        </div>
<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->                                        
                                        <div class="form-group">
                                            <label for="exampleInputEmail2"> &nbsp;&nbsp;Tipo de vivienda</label><br>
                                            <div class="radio3 radio-check radio-danger radio-inline">
                                            <input type="radio" id="Casa" name="tipo_vivienda" value="Casa">
                                            <label for="Casa">
                                              Casa
                                            </label>
                                          </div>
                                          <div class="radio3 radio-check radio-danger radio-inline">
                                            <input type="radio" id="Apto" name="tipo_vivienda" value="Apto">
                                            <label for="Apto">
                                              Apto
                                            </label>
                                          </div>
                                          <div class="radio3 radio-check radio-danger radio-inline">
                                            <input type="radio" id="Hab" name="tipo_vivienda" value="Hab">
                                            <label for="Hab">
                                              Hab
                                            </label>
                                          </div>
                                          <div class="radio3 radio-check radio-danger radio-inline">
                                            <input type="radio" id="Anexo" name="tipo_vivienda" value="Anexo">
                                            <label for="Anexo">
                                              Anexo
                                            </label>
                                          </div>
                                          <div class="radio3 radio-check radio-danger radio-inline">
                                            <input type="radio" id="Rancho" name="tipo_vivienda" value="Rancho">
                                            <label for="Rancho">
                                              Rancho
                                            </label>
                                          </div>
                                        </div>
<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////--> 
                                        <div class="form-group">
                                            <label for="exampleInputEmail2"> &nbsp;&nbsp;Situacion Habitacion</label><br>
                                            <div class="radio3 radio-check radio-danger radio-inline">
                                            <input type="radio" id="Arrimado" name="sit_habit" value="Arrimado">
                                            <label for="Arrimado">
                                              Arrimado
                                            </label>
                                          </div>
                                          <div class="radio3 radio-check radio-danger radio-inline">
                                            <input type="radio" id="Al_cuido" name="sit_habit" value="Al cuido">
                                            <label for="Al_cuido">
                                              Al cuido
                                            </label>
                                          </div>
                                          <div class="radio3 radio-check radio-danger radio-inline">
                                            <input type="radio" id="Alquilado" name="sit_habit" value="Alquilado">
                                            <label for="Alquilado">
                                              Alquilado
                                            </label>
                                          </div>
                                          <div class="radio3 radio-check radio-danger radio-inline">
                                            <input type="radio" id="De_calle" name="sit_habit" value="De calle">
                                            <label for="De_calle">
                                             De calle
                                            </label>
                                          </div>
                                        </div><br><br>
<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////--> 
                                        <div class="form-group">
                                            <label for="exampleInputEmail2">&nbsp;Situacion Salud</label><br>
                                            <div class="radio3 radio-check radio-danger radio-inline">
                                            <input type="radio" id="Discapacidad" name="sitsalud" value="Discapacidad">
                                            <label for="Discapacidad">
                                              Discapacidad
                                            </label>
                                          </div>
                                          <div class="radio3 radio-check radio-danger radio-inline">
                                            <input type="radio" id="Enfermedad" name="sitsalud" value="Enfermedad">
                                            <label for="Enfermedad">
                                              Enfermedad
                                            </label>
                                          </div>
                                        </div>
<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->                                         
                                        <div class="form-group">
                                            <label for="exampleInputEmail2">&nbsp;Terreno Propio</label><br>
                                            <div class="radio3 radio-check radio-danger radio-inline">
                                            <input type="radio" id="Alto_Riesgo" name="terreno" value="Alto Riesgo">
                                            <label for="Alto_Riesgo">
                                              Alto Riesgo
                                            </label>
                                          </div>
                                          <div class="radio3 radio-check radio-danger radio-inline">
                                            <input type="radio" id="Hacinamiento" name="terreno" value="Hacinamiento">
                                            <label for="Hacinamiento">
                                              Hacinamiento
                                            </label>
                                          </div>
                                        </div>
<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->                                         
                                         <div class="form-group">
                                            <label for="exampleInputEmail2"> &nbsp;&nbsp;Motivo</label><br>
                                            <textarea class="form-control" name="motivo" rows="2" cold="20"></textarea>
                                        </div>                
                                        <button type="submit" class="btn btn-danger">Guardar</button>
                                        
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>

                    