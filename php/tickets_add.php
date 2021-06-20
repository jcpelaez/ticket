<?php
session_start();
require_once 'core.php';

if($_POST) {
	
		$nombre=mysqli_real_escape_string($con,(strip_tags($_POST["nombre"],ENT_QUOTES)));
		$comentarios=mysqli_real_escape_string($con,(strip_tags($_POST["comentarios"],ENT_QUOTES)));
		$estado=mysqli_real_escape_string($con,(strip_tags($_POST["estado"],ENT_QUOTES)));
		$id_historia=mysqli_real_escape_string($con,(strip_tags($_POST["historia"],ENT_QUOTES)));
		
		
			$consulta = "INSERT INTO ticket (ticket, comentarios, estado, id_historia) VALUES ('$nombre','$comentarios', '$estado', '$id_historia')";
		
		if($con->query($consulta) === TRUE) {
					
				$messages[] = "Los datos han sido guardados satisfactoriamente.";
			} else{
				$errors []= "Lo siento algo ha salido mal intenta nuevamente.".mysqli_error($con);
			}
		
		
		if (isset($errors)){
			
			?>
			<div class="alert alert-danger" role="alert">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
					<strong>Error!</strong> 
					<?php
						foreach ($errors as $error) {
								echo $error;
							}
						?>
			</div>
			<?php
			}
			if (isset($messages)){
				
				?>
				<div class="alert alert-info" role="alert">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						<strong>¡Bien hecho!</strong>
						<?php
							foreach ($messages as $message) {
									echo $message;
								}
							?>
				</div>
				<?php
			}
			$con->close();
}

?>	