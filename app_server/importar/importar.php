
<script type="text/javascript">
	function cargarHojaExcel()
	{
		if(document.frmcargararchivo.excel.value=="")
		{
			alert("Suba un archivo");
			document.frmcargararchivo.excel.focus();
			return false;
		}		

		document.frmcargararchivo.action = "?page=procesar";
		document.frmcargararchivo.submit();
	}

</script>

<div class="row">
     <div class="col-sm-12">
         <div class="card">

         	                     <div class="card-header">
                                    <div class="card-title">
                                        <div class="title">Subir Archivo de clientes</div>
                                    </div>
                                    <div class="pull-right card-action">
                                        <div class="btn-group" role="group" aria-label="...">
                                            <button type="button" class="btn btn-link" data-toggle="modal" data-target="#modalCardProfileExample"><i class="fa fa-code"></i></button>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <p>
                                        NOTA: por favor seleccione el archivo en formato csv y delimitado por comas para subirlo al servidor<br><br>

                                    </p>
                                    
                                </div>
                                    <form class="form-inline" name="frmcargararchivo" method="post" enctype="multipart/form-data">
		                             
		                              <div class="form-group" style="margin-left: 25px;">
		                              	<input type="file"  name="excel" id="excel">
		                              </div>


		                              <button type="button" class="btn btn-info" value="subir" onclick="cargarHojaExcel();">&nbsp;&nbsp;Subir&nbsp;&nbsp;</button><br><br><br>
	                             	</form>
		
		

                                  </div>
	
      </div>
</div>      