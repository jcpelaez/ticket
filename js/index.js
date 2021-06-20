 var manageIngresoTable;
   
 $(document).ready(function(){
	    manageIngresoTable = $('#example1').DataTable({
		'ajax' : 'php/fetch_usuarios.php',
		'order': []
	}); 
	
	MostrarProyectos();
	MostrarHistorias();
	MostrarTickets();
	MostrarCompanias();
 });
 
	
	$('#dataUpdate').on('show.bs.modal', function (event) {
		 var button = $(event.relatedTarget) // Botón que activó el modal
		 var id = button.data('id') // Extraer la información de atributos de datos
		 var email = button.data('email') // Extraer la información de atributos de datos
		 var compania = button.data('compania') // Extraer la información de atributos de datos
		
				  
		 var modal = $(this)
		  modal.find('.modal-title').text('Modificar usuario: ')
		  modal.find('.modal-body #id').val(id)
		  modal.find('.modal-body #email').val(email)
		  modal.find('.modal-body #compania').val(compania)
		 });	
		
	
	$("#actualizarDatos").submit(function( event ) {
		var parametros = $(this).serialize();
			 $.ajax({
					type: "POST",
					url: "php/usuario_editar.php",
					data: parametros,
					 beforeSend: function(objeto){
						$("#datos_ajax_editar").html("<img src='modal/ajax.gif' width='64' height='50'>");
					  },
					success: function(datos){
					$("#datos_ajax_editar").html(datos);
					
					 // reload the manage member table 
					manageIngresoTable.ajax.reload(null, false);		          
							
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
		
		
	function MostrarProyectos(){
	$.ajax({
		 	beforeSend: function(){
                 $("#proyectos").html("<img src='modal/ajax.gif' width='40' height='32'>")
               },
			url: "php/fetch_cantidad_proyectos.php",
			type: 'post',
			dataType: 'json',
			data:  0,
			success: function (data) {
				$('#proyectos').html(data.cantidad);
			},
		});
	}
	
	
	function MostrarHistorias(){
	$.ajax({
		 	beforeSend: function(){
                 $("#historias").html("<img src='modal/ajax.gif' width='40' height='32'>")
               },
			url: "php/fetch_cantidad_historias.php",
			type: 'post',
			dataType: 'json',
			data:  0,
			success: function (data) {
				$('#historias').html(data.historia);
			},
		});
	}
	
	function MostrarTickets(){
	$.ajax({
		 	beforeSend: function(){
                 $("#tickets").html("<img src='modal/ajax.gif' width='40' height='32'>")
               },
			url: "php/fetch_cantidad_tickets.php",
			type: 'post',
			dataType: 'json',
			data:  0,
			success: function (data) {
				$('#tickets').html(data.ticket);
			},
		});
	}
	
	function MostrarCompanias(){
	$.ajax({
		 	beforeSend: function(){
                 $("#companias").html("<img src='modal/ajax.gif' width='40' height='32'>")
               },
			url: "php/fetch_cantidad_companias.php",
			type: 'post',
			dataType: 'json',
			data:  0,
			success: function (data) {
				$('#companias').html(data.companias);
			},
		});
	}