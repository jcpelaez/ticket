var manageMovimientosTable;

$(document).ready(function() {
	
	manageMovimientosTable = $('#example1').DataTable({
		'ajax' : 'php/fetch_proyecto.php',
		'order': []
	}); 
	
	
	$("#guardarDatos").on('click', '#cerrar', function(ev){
          ev.preventDefault()
		  manageMovimientosTable.ajax.reload(null, false);
    });
	
	 $("#actualizarDatos").on('click', '#cerrar', function(ev){
          ev.preventDefault()
		  manageMovimientosTable.ajax.reload(null, false);
	});
	
	
	
	$('#dataUpdate').on('show.bs.modal', function (event) {
		 var button = $(event.relatedTarget) // Botón que activó el modal
		 var id = button.data('id') // Extraer la información de atributos de datos
		 var nombre = button.data('nombre') // Extraer la información de atributos de datos
		 var compania = button.data('compania') // Extraer la información de atributos de datos
		
				  
		 var modal = $(this)
		  modal.find('.modal-title').text('Modificar proyecto: '+ nombre)
		  modal.find('.modal-body #id').val(id)
		  modal.find('.modal-body #nombre').val(nombre)
		  modal.find('.modal-body #companias').val(compania)
		 
		  $('.alert').hide();//Oculto alert
		});	
	
	$("#actualizarDatos").submit(function( event ) {
		var parametros = $(this).serialize();
			 $.ajax({
					type: "POST",
					url: "php/proyecto_editar.php",
					data: parametros,
					 beforeSend: function(objeto){
						$("#datos_ajax_editar").html("<img src='modal/ajax.gif' width='64' height='50'>");
					  },
					success: function(datos){
					$("#datos_ajax_editar").html(datos);
					           
					manageMovimientosTable.ajax.reload(null, false);		                
					// remove the mesages
		          	$("#datos_ajax_editar").delay(500).show(10, function() {
								$(this).delay(3000).hide(10, function() {
								$('#dataUpdate').modal('hide');									
								});
							}); // /.alert
							
				  }
			});
														
		  event.preventDefault();
		});
		
				
	$("#guardarDatoss" ).submit(function( event ) {
		var parametros = $(this).serialize();
			 $.ajax({
					type: "POST",
					url: "php/proyecto_add.php",
					data: parametros,
					 beforeSend: function(objeto){
						$("#datos_ajax_centro").html("<img src='modal/ajax.gif' width='64' height='50'>");
					  },
					success: function(datos){
					$("#datos_ajax_centro").html(datos);
								
					  // reload the manage member table 
					manageMovimientosTable.ajax.reload(null, false);		           
					// remove the mesages
		          	$("#datos_ajax_centro").delay(500).show(10, function() {
								$(this).delay(3000).hide(10, function() {
									$(this).hide();
													
									$("#dataRegister").find('#nit').val('');
									$("#dataRegister").find('#nombre').val('');
									$("#dataRegister").find('#compania').val('');
									$('#dataRegister').modal('hide');	
								});
							}); // /.alert												
				  }
			});
		  event.preventDefault();
		});
		
});