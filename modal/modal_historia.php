<?php 
	require_once 'php/core.php';
	$query = "SELECT * FROM proyecto";
	?>
<div class="modal fade" id="dataRegister" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">

    	<form class="form-horizontal" id="guardarDatoss" name="guardarDatoss">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title"><i class="fa fa-plus"></i> Agregar Historia</h4>
	      </div>
	      <div class="modal-body">

	      	<div id="datos_ajax_centro" align="center"></div><!-- /form-group-->	         	        
	        <div class="form-group">
	        	<label for="escuelaStatus" class="col-sm-4 control-label">Nombre: </label>
	        	<label class="col-sm-1 control-label">: </label>
				    <div class="col-sm-7">
			          <input type="text" class="form-control" id="nombre" placeholder="Descripcion de la historia" name="nombre" autocomplete="off" required="required" onKeyUp="this.value=this.value.toUpperCase()">
		      </div>
	        </div> <!-- /form-group-->	
              
               <div class="form-group">
	        	<label for="nombre" class="col-sm-4 control-label">Proyecto: </label>
	        	<label class="col-sm-1 control-label">: </label>
				    <div class="col-sm-7"><select name="proyecto" id="proyecto" class="select2_single form-control" tabindex="-1">
              <?php
	
	$result = $con->query($query);
	
			 while($row = $result->fetch_array()) {  
			  echo  "<option value='".$row[0]."'>".$row[1]."</option>";
			  }
			  ?>
            </select></div>
	        </div>
                     	        
	      </div> <!-- /modal-body -->

	      <div class="modal-footer">
	        <button type="button" name="cerrar" id="cerrar" class="btn btn-default" data-dismiss="modal"> <i class="glyphicon glyphicon-remove-sign"></i> Cerrar</button>
	        
	        <button type="submit" class="btn btn-primary" id="guardarDatos" autocomplete="off"> <i class="glyphicon glyphicon-ok-sign"></i> Guardar información</button>
	      </div> <!-- /modal-footer -->	      
     		
        </form> <!-- /.form -->	     
    </div> <!-- /modal-content -->    
  </div> <!-- /modal-dailog -->
</div> 
<!-- /add centro -->

<!-- add centro -->
<div class="modal fade" id="dataUpdate" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">

    	<form class="form-horizontal" id="actualizarDatos">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title"><i class="fa fa-edit"></i> Modificar la información del proyecto</h4>
	      </div>
	      <div class="modal-body">

	      	<div id="datos_ajax_editar" align="center"><span class="form-group"><span class="col-sm-7">
	      	  <input type="hidden" name="id" id="id" />
	      	</span></span></div>

	        <div class="form-group">
	        	<label for="escuelaStatus" class="col-sm-4 control-label">Nombre: </label>
	        	<label class="col-sm-1 control-label">: </label>
				    <div class="col-sm-7">
			          <input type="text" class="form-control" id="nombre" placeholder="Descripcion de la historia" name="nombre" autocomplete="off" required="required" onKeyUp="this.value=this.value.toUpperCase()">
		      </div>
	        </div>
            
            
           <div class="form-group">
	        	<label for="nombre" class="col-sm-4 control-label">Proyecto: </label>
	        	<label class="col-sm-1 control-label">: </label>
				    <div class="col-sm-7"><select name="proyecto" id="proyecto" class="select2_single form-control" tabindex="-1">
              <?php
	
	$result = $con->query($query);
	
			 while($row = $result->fetch_array()) {  
			  echo  "<option value='".$row[0]."'>".$row[1]."</option>";
			  }
			  ?>
            </select></div>
	        </div>
                           	        
	      </div> <!-- /modal-body -->
	         
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal" name="cerrar" id="cerrar"> <i class="glyphicon glyphicon-remove-sign"></i> Cerrar</button>
	        
	        <button type="submit" class="btn btn-primary" id="guardarDatos" autocomplete="off"> <i class="glyphicon glyphicon-ok-sign"></i> Confirmar información</button>
	      </div> <!-- /modal-footer -->
    	</form> <!-- /.form -->	     
    </div> <!-- /modal-content -->    
  </div> <!-- /modal-dailog -->
</div> 
<!-- /add centro -->