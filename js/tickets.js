var manageMovimientosTable;

$(document).ready(function() {
	
	cargarDataTable();
	
  	$('#filtro').on('change', function(e) {
	  	cargarDataTable();	
	});
	
	
	function cargarDataTable() {
    	var selectedOption = $('#filtro').find(":selected").val();
    	manageMovimientosTable = $('#example1').DataTable({
        destroy: true,
        'ajax' : {
            'url' : 'php/fetch_tickets.php',
            'data' : { 'filtro' : selectedOption },
            'type' : 'post'
        },
        'order': []
    });
	}
	
	
	$("#guardarDatos").on('click', '#cerrar', function(ev){
          ev.preventDefault()
		 cargarDataTable();	
    });
	
	 $("#actualizarDatos").on('click', '#cerrar', function(ev){
          ev.preventDefault()
		 cargarDataTable();	
	});
	
	
	
	$('#dataUpdate').on('show.bs.modal', function (event) {
		 var button = $(event.relatedTarget) // Botón que activó el modal
		 var id = button.data('id') // Extraer la información de atributos de datos
		 var nombre = button.data('nombre') // Extraer la información de atributos de datos
		 var comentarios = button.data('comentarios') // Extraer la información de atributos de datos
		 var estado = button.data('estado') // Extraer la información de atributos de datos
		 var historia = button.data('historia') // Extraer la información de atributos de datos
		
		  var modal = $(this)
		  modal.find('.modal-title').text('Modificar ticket: '+ nombre)
		  modal.find('.modal-body #id').val(id)
		  modal.find('.modal-body #nombre').val(nombre)
		  modal.find('.modal-body #comentarios').val(comentarios)
		  modal.find('.modal-body #estado').val(estado)
		  modal.find('.modal-body #historia').val(historia)
		 
		  $('.alert').hide();//Oculto alert
		});	
	
	$("#actualizarDatos").submit(function( event ) {
		var parametros = $(this).serialize();
			 $.ajax({
					type: "POST",
					url: "php/tickets_editar.php",
					data: parametros,
					 beforeSend: function(objeto){
						$("#datos_ajax_editar").html("<img src='modal/ajax.gif' width='64' height='50'>");
					  },
					success: function(datos){
					$("#datos_ajax_editar").html(datos);
					           
					cargarDataTable();		                
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
		
		
		$('#dataDelete').on('show.bs.modal', function (event) {
		 var button = $(event.relatedTarget) // Botón que activó el modal
		 var id = button.data('id') // Extraer la información de atributos de datos
		 var nombre = button.data('nombre') // Extraer la información de atributos de datos
		
		  var modal = $(this)
		  modal.find('.modal-title').text('Cancelar ticket: '+ nombre)
		  modal.find('.modal-body #id').val(id)
		 
		  $('.alert').hide();//Oculto alert
		});	
	
	$("#eliminarDatoss").submit(function( event ) {
		var parametros = $(this).serialize();
			 $.ajax({
					type: "POST",
					url: "php/tickets_cancelar.php",
					data: parametros,
					 beforeSend: function(objeto){
						$("#datos_ajax_centro").html("<img src='modal/ajax.gif' width='64' height='50'>");
					  },
					success: function(datos){
					$("#datos_ajax_centro").html(datos);
					           
					cargarDataTable();		                
					// remove the mesages
		          	$("#datos_ajax_centro").delay(500).show(10, function() {
								$(this).delay(3000).hide(10, function() {
								$('#dataDelete').modal('hide');									
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
					url: "php/tickets_add.php",
					data: parametros,
					 beforeSend: function(objeto){
						$("#datos_ajax_centro").html("<img src='modal/ajax.gif' width='64' height='50'>");
					  },
					success: function(datos){
					$("#datos_ajax_centro").html(datos);
								
					  // reload the manage member table 
					cargarDataTable();	        
					// remove the mesages
		          	$("#datos_ajax_centro").delay(500).show(10, function() {
								$(this).delay(3000).hide(10, function() {
									$(this).hide();
													
									$("#dataRegister").find('#nombre').val('');
									$("#dataRegister").find('#comentarios').val('');
									$("#dataRegister").find('#estado').val('');
									$("#dataRegister").find('#historia').val('');
									$('#dataRegister').modal('hide');	
								});
							}); // /.alert												
				  }
			});
		  event.preventDefault();
		});
		
});