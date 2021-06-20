<?php
session_start();
require_once 'core.php';

if($_POST) {
	
		$nombre=mysqli_real_escape_string($con,(strip_tags($_POST["nombre"],ENT_QUOTES)));
		$proyecto=mysqli_real_escape_string($con,(strip_tags($_POST["proyecto"],ENT_QUOTES)));
		$usuario = $_SESSION['id'];
		
			$consulta = "INSERT INTO historia (nombre_historia, id_proyecto, id_usuario) VALUES ('$nombre','$proyecto','$usuario')";
		
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