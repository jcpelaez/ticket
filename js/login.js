$(document).ready(function(){
	var timeSlide = 1000;
	$('#usuario').focus();
	$('#timer').hide(0);
	$('#timer').css('display','none');
	
	$('#login_userbttn').click(function(){
		$('#timer').fadeIn(300);
		$('.box-info, .box-success, .box-alert, .box-error').slideUp(timeSlide);
		setTimeout(function(){
			if ( $('#usuario').val() != "" && $('#clave').val() != ""){
					var usuario = $('#usuario').val();
					var clave = $('#clave').val();
				$.ajax({
					type: 'POST',
					url: 'php/loguear.php',
					data: {
					    usuario: usuario,
					    clave: clave 
					},
					
					success:function(msj){
						if ( msj == 1 ){
							$('#alertBoxes').html('<div class="box-success"></div>');
							$('.box-success').hide(0).html('Espera un momento&#133;');
							$('.box-success').slideDown(timeSlide);
							setTimeout(function(){
								window.location.href = "index.php";
							},(timeSlide + 500));
						}
						if ( msj == 0 ){
							$('#alertBoxes').html('<div class="box-error"></div>');
							$('.box-error').hide(0).html('Lo sentimos, pero los datos son incorrectos');
							$('.box-error').slideDown(timeSlide);
						}
			
						$('#timer').fadeOut(300);
					},
					error:function(){
						$('#timer').fadeOut(300);
						$('#alertBoxes').html('<div class="box-error"></div>');
						$('.box-error').hide(0).html('Ha ocurrido un error durante el logueo');
						$('.box-error').slideDown(timeSlide);
					}
				});
				
			}
			else{
				$('#alertBoxes').html('<div class="box-error"></div>');
				$('.box-error').hide(0).html('Los campos estan vacios.');
				$('.box-error').slideDown(timeSlide);
				$('#timer').fadeOut(300);
			}
		},timeSlide);
		
		return false;	
	});	

	
	$('#add_userbttn').click(function(){
		$('#timer').fadeIn(300);
		$('.box-info, .box-success, .box-alert, .box-error').slideUp(timeSlide);
		setTimeout(function(){
			if ( $('#emailusuario').val() != "" && $('#claves').val() != "" && $('#compania').val() != "0" && $('#claverepetir').val() != ""){
				if ($('#claves').val() !=  $('#claverepetir').val() != ""){
					$('#alertBoxes').html('<div class="box-error"></div>');
							$('.box-error').hide(0).html('Las clave no coinciden ');
							$('.box-error').slideDown(timeSlide);
				} 
				else
				
				$.ajax({
					type: 'POST',
					url: 'php/usuario_add.php',
					data: 'emailusuario=' + $('#emailusuario').val() + '&clave=' + $('#claves').val()+ '&compania=' + $('#compania').val(),
					
					success:function(msj){
						if ( msj == 1 ){
							$('#alertBoxes').html('<div class="box-success"></div>');
							$('.box-success').hide(0).html('usuario registrado satisfactoriamente');
							$('.box-success').slideDown(timeSlide);
							setTimeout(function(){
								window.location.href = "login.php";
							},(timeSlide + 600));
						}
						if ( msj == 0 ){
							$('#alertBoxes').html('<div class="box-error"></div>');
							$('.box-error').hide(0).html('usuario no registrado ' + msj);
							$('.box-error').slideDown(timeSlide);
						}
						
						$('#timer').fadeOut(300);
					},
					error:function(){
						$('#timer').fadeOut(300);
						$('#alertBoxes').html('<div class="box-error"></div>');
						$('.box-error').hide(0).html('Ha ocurrido un error durante el registro');
						$('.box-error').slideDown(timeSlide);
					}
				});
				
			}
			else{
				$('#alertBoxes').html('<div class="box-error"></div>');
				$('.box-error').hide(0).html('Los campos estan vacios.');
				$('.box-error').slideDown(timeSlide);
				$('#timer').fadeOut(300);
			}
		},timeSlide);
		
		return false;	
	});	
	
});