<?php 	
require_once 'core.php';

if($_POST) {
	
	$id=mysqli_real_escape_string($con,(strip_tags($_POST["id"],ENT_QUOTES)));	
	$email=mysqli_real_escape_string($con,(strip_tags($_POST["email"],ENT_QUOTES)));
	$compania=mysqli_real_escape_string($con,(strip_tags($_POST["compania"],ENT_QUOTES)));

					
		$sql = "UPDATE cuenta SET usuario='".$email."',id_compania='".$compania."' WHERE id_usuario='".$id."'";
		if($con->query($sql) === TRUE) {
	 
				$messages[] = "Los datos han sido actualizados satisfactoriamente.";
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