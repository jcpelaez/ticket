<!-- add centro -->
<div class="modal fade" id="dataRegister" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">

    	<form class="form-horizontal" id="guardarDatoss" name="guardarDatoss">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title"><i class="fa fa-plus"></i> Agregar Compañia</h4>
	      </div>
	      <div class="modal-body">

	      	<div id="datos_ajax_centro" align="center"></div>

	        <div class="form-group">
	        	<label for="nombre" class="col-sm-4 control-label">Nit: </label>
	        	<label class="col-sm-1 control-label">: </label>
				    <div class="col-sm-7">
				      <input type="text" class="form-control" id="nit" placeholder="Nit de la Compañia" name="nit" autocomplete="off" required="required" onKeyUp="this.value=this.value.toUpperCase()">
				    </div>
	        </div> <!-- /form-group-->	         	        
	        <div class="form-group">
	        	<label for="escuelaStatus" class="col-sm-4 control-label">Nombre: </label>
	        	<label class="col-sm-1 control-label">: </label>
				    <div class="col-sm-7">
			          <input type="text" class="form-control" id="nombre" placeholder="Nombre de la compañia" name="nombre" autocomplete="off" required="required" onKeyUp="this.value=this.value.toUpperCase()">
		      </div>
	        </div> <!-- /form-group-->	
            
            <div class="form-group">
	        	<label for="nombre" class="col-sm-4 control-label">Direccion: </label>
	        	<label class="col-sm-1 control-label">: </label>
				    <div class="col-sm-7">
				      <input type="text" class="form-control" id="direccion" placeholder="Direccion de la compañia" name="direccion" autocomplete="off" required="required" onKeyUp="this.value=this.value.toUpperCase()">
				    </div>
	        </div>
            
            <div class="form-group">
              <label for="nombre2" class="col-sm-4 control-label">Telefono: </label>
              <label class="col-sm-1 control-label">: </label>
 <div class="col-sm-7">
			          <input type="tel" class="form-control" id="telefono" placeholder="Telefono de la compañia" name="telefono" autocomplete="off" required="required">
		      </div>
	        </div>
            <div class="form-group">
              <label for="nombre2" class="col-sm-4 control-label">Email: </label>
              <label class="col-sm-1 control-label">: </label>
 <div class="col-sm-7">
			          <input name="email" type="email" class="form-control" id="email" autocomplete="off" placeholder="Email de la compañia" required="required"  onKeyUp="this.value=this.value.toUpperCase()" >
	         </div>
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
	        <h4 class="modal-title"><i class="fa fa-edit"></i> Modificar la información de la compania</h4>
	      </div>
	      <div class="modal-body">

	      	<div id="datos_ajax_editar" align="center"></div>

	        <div class="form-group">
	        	<label for="zona" class="col-sm-4 control-label">Nit: </label>
	        	<label class="col-sm-1 control-label">: </label>
				    <div class="col-sm-7">
				      <input type="text" class="form-control" id="nit" placeholder="Nit de la Compania" name="nit" autocomplete="off" required="required" onKeyUp="this.value=this.value.toUpperCase()">
				      <input type="hidden" name="id" id="id" />
				    </div>
	        </div> <!-- /form-group-->	         	        
	        <div class="form-group">
	        	<label for="escuelaStatus" class="col-sm-4 control-label">Nombre: </label>
	        	<label class="col-sm-1 control-label">: </label>
				    <div class="col-sm-7">
			          <input type="text" class="form-control" id="nombre" placeholder="Nombre de la compañia" name="nombre" autocomplete="off" required="required" onKeyUp="this.value=this.value.toUpperCase()">
		      </div>
	        </div> <!-- /form-group-->	
            
            <div class="form-group">
	        	<label for="nombre" class="col-sm-4 control-label">Direccion: </label>
	        	<label class="col-sm-1 control-label">: </label>
				    <div class="col-sm-7">
				      <input type="text" class="form-control" id="direccion" placeholder="Direccion de la compañia" name="direccion" autocomplete="off" required="required" onKeyUp="this.value=this.value.toUpperCase()">
				    </div>
	        </div>
            
            <div class="form-group">
              <label for="nombre2" class="col-sm-4 control-label">Telefono: </label>
              <label class="col-sm-1 control-label">: </label>
 <div class="col-sm-7">
			          <input type="tel" class="form-control" id="telefono" placeholder="Telefono de la compañia" name="telefono" autocomplete="off" required="required">
		      </div>
	        </div>
            
              <div class="form-group">
              <label for="nombre2" class="col-sm-4 control-label">Email: </label>
              <label class="col-sm-1 control-label">: </label>
 <div class="col-sm-7">
			          <input name="email" type="email" class="form-control" id="email" autocomplete="off" placeholder="Email de la compañia" required="required"  onKeyUp="this.value=this.value.toUpperCase()" >
	         </div>
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