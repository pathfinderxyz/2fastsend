  <div class="col-xs-3">
                         </div>
                        <div class="col-xs-6">
                            <div class="card card-info">
                                <div class="card-header">
                                    <div class="card-title">
                                        <div class="title">Registrar un Usuario</div>
                                    </div>
                                </div><br>
                                <div class="container">
                            
                                    <div class="col-xs-1">
                                     </div>
                                    <div class="col-xs-7">
                                <?php  
                                     if (isset($_GET['mensaje'])) {
                                         if ($_GET['mensaje'] == 1) {
                                             echo 
                                             '<div class="row">
                                                 <div class="col-md-7">
                                                     <div class="alert alert-success">
                                                          <strong>Usuario registrado con exito</strong>
                                                     </div>
                                                 </div>
                                             </div>';
                                         }elseif ($_GET['mensaje'] == 0) {
                                             echo
                                             '<div class="row">
                                                 <div class="col-md-7    ">
                                                     <div class="alert alert-danger">
                                                         <strong>Error al registrar el usuario ya existe</strong>
                                                     </div>
                                                 </div>
                                             </div>';
                                             }
                                          }
                                 ?>
                                 </div>
                             </div>
                                <div class="card-body">
                                    <form action="app_server/usuarios/registrarphp.php" method="post">
                                      
                                        <div class="form-group">
                                            <label for="cedula">Ingrese Cedula de Identidad</label>
                                            <input type="text" class="form-control" name="cedula" id="cedula" placeholder="Cedula del Encargado" required="">
                                        </div>

                                        <div class="form-group">
                                            <label for="nombre">Ingrese Nombre</label>
                                            <input type="text" class="form-control" name="nombre" placeholder="Nombre del Encargado" required="">
                                        </div>
                                        
                                        <div class="form-group">
                                           <label for="usuario">Ingrese Nombre de Usuario</label>
                                            <input type="text" class="form-control" name="usuario" id="usuario" placeholder="Username" required="">
                                        </div>
                                        <div class="form-group">
                                           <label for="password">Ingrese Contraseña</label>
                                            <input type="text" class="form-control" name="password" id="password" placeholder="Password" required="">
                                        </div>
                                       <div class="form-group">
                                            <label for="rol">Especifique el Rol de Usuario</label>
                                        <select class="form-control" name="rol" id="rol" required="">
                                                
                                               <option value=""></option>
                                               <option value="Bienes">Bienes Nacionales</option>
                                               <option value="Especialista">Especialista</option>
                                               <option value="Informatica">Unidad de Informatica</option> 
                                               <option value="Estadistica">Unidad de Estadistica</option>
                                               <option value="Administracion">Unidad de Administracion</option>
                                                <option value="Contaduria">Unidad de Contaduria</option>
                                               <option value="Hoteleria">Unidad de Hoteleria y Turismo</option>
                                                <option value="Admon hoteleras">Unidad de T.S.U de Empresas Hoteleras</option>
                                                <option value="Turismo">Unidad de Turismo</option>
                                                <option value="Educacion">Unidad de Educacion</option>
                                                <option value="Cursos Basicos">Unidad de Cursos Basicos</option>
                                                <option value="Ciencias">Unidad de Ciencias</option>
                                                 <option value="Socio Humanidades">Unidad de SocioHumanidades</option>
                                                 <option value="Desarrollo">Unidad de Desarrollo Estudiantil</option>
                                                 <option value="Acuicultura">Unidad de Acuicultura</option>
                                                 <option value="Biologia">Unidad de Biologia MArina</option>
                                                 <option value="Deportes">Unidad de Deportes</option>
                                                 <option value="Enfermeria">Unidad de Enfermeria</option>
                                                 
                                        </select>
                                        </div>
                                        
                                        <button  class="btn btn-info" type="submit" >Guardar</button> &nbsp;&nbsp;&nbsp;&nbsp;<a href="?page=regusuario"><button class="btn btn" type="button">Cancelar</button></a>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-3">
                        </div>
                 </div>