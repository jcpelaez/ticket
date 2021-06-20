<!-- edit escuela -->
<div class="modal fade" id="dataUpdate" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
    	
       <form class="form-horizontal" id="actualizarDatos">
	        <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title"><i class="fa fa-plus"></i> Modificar usuario</h4>
	      </div>
	      
	      <div class="modal-body">

	      	<div id="datos_ajax_editar" align="center"></div>
             <!-- /form-group-->	         	        
	        <div class="form-group">
	        	<label for="escuelaStatus" class="col-sm-4 control-label">Email: </label>
	        	<label class="col-sm-1 control-label">: <span class="col-sm-7">
	        	  <input type="hidden" name="id" id="id" />
	        	</span></label>
				    <div class="col-sm-7">
			          <input type="text" class="form-control" id="email" placeholder="Email" name="email" autocomplete="off" required="required" onKeyUp="this.value=this.value.toUpperCase()">
		      </div>
	        </div> <!-- /form-group-->  
            
            
            <div class="form-group">
	        	<label for="nombre" class="col-sm-4 control-label">Compañia: </label>
	        	<label class="col-sm-1 control-label">: </label>
				    <div class="col-sm-7"><select name="compania" id="compania" class="select2_single form-control" tabindex="-1">
              <?php
	require_once 'php/core.php';
	$query = "SELECT * FROM compania";
	$result = $con->query($query);
	
			 while($row = $result->fetch_array()) {  
			  echo  "<option value='".$row[0]."'>".$row[1]."</option>";
			  $con->close();
				 			  }
			  ?>
            </select></div>
	        </div>
             	
         </div> <!-- /modal-body -->

	      <div class="modal-footer">
	        <button type="button" name="cerrar" id="cerrar" class="btn btn-default" data-dismiss="modal"> <i class="glyphicon glyphicon-remove-sign"></i> Cerrar</button>
	        <button type="submit" class="btn btn-success" autocomplete="off"> <i class="glyphicon glyphicon-ok-sign"></i> Modificar usuario</button>
	      </div>
           
          </form>
	      <!-- /modal-footer -->
    </div>
    </div>
    <!-- /modal-content -->
  </div>
  <!-- /modal-dailog -->
	  