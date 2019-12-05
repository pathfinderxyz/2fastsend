<?php
 

?>

     <div class="col-xs-3">
     </div>
     <div class="col-xs-6">
        
            
                <div class="card card-info">
                    <div class="card-header">
                                    <div class="card-title">
                                        <div class="title">Cambiar Contraseña</div>
                                    </div>
                                </div>
               
                <div class="card-body">
                <form name="formulario" action="app_server/usuarios/editarphp.php" method="post">

                          <?php  
                             if (isset($_GET['mensaje'])) {
                                 if ($_GET['mensaje'] == 1) {
                                     echo '<div class="row">
                                             <div class="col-md-12">
                                                 <div class="alert alert-success">
                                                     <center><strong>Clave cambiada con exito</strong></center>
                                                 </div>
                                             </div>
                                         </div>';
                                 }elseif ($_GET['mensaje'] == 0) {
                                     echo '<div class="row">
                                             <div class="col-md-12">
                                                 <div class="alert alert-danger">
                                                     <center><strong>Error al cambiar la clave, las claves no coinciden</strong></center>
                                                 </div>
                                             </div>
                                         </div>';
                                 }
                             }
                          ?>
                        
                        <div class="form-group">
                            <label for="cedula">Ingrese Contrasena anterior</label>
                            <input type="text" class="form-control" name="password" id="cedula" placeholder="Contrasena anterior" required="">
                        </div>

                      

                        <div class="form-group">
                            <label for="p1">Ingrese contrasena nueva</label>
                            <input type="password" class="form-control" name="p1" placeholder="Contraseña" required=""><div id="mensaje"></div>
                        </div>

                        <div class="form-group">
                            <label for="nombre">confirme contrasena nueva</label>
                        <input type="password" class="form-control" name="p2" placeholder="Repita Contraseña" required="" onkeyup="comprobar();">
                        </div>

                     

                       <br>
                        <button type="submit" class="btn btn-info" >Guardar</button>
                        &nbsp;&nbsp;<a href="?page=edi_usuario"><button type="button" class="btn">Cancelar</button></a>
                </form>
                </div>
                </div>
            
     </div>
     <div class="col-xs-3">
     </div>


                <script type="text/javascript" >
                        function comprobar() {
                                var p1 = document.formulario.p1.value;
                                var p2 = document.formulario.p2.value;
                               
                                if (p1 != p2) {
                                        document.getElementById("mensaje").innerHTML = "<h4>Las Contraseña no coinciden</h4>";
                                } else {
                                        document.getElementById("mensaje").innerHTML = "<h4>coinciden</h4>";
                                }
                        }
                </script>