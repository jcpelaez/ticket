<?php 	
	require_once 'db_connect.php';
	
	$emailusuario = $_POST["emailusuario"];
	$clave = $_POST["clave"];
	$compania = $_POST["compania"];

				$consul = "INSERT INTO cuenta (usuario, clave, id_compania) VALUES ('$emailusuario','$clave','$compania')";
				
				if($con->query($consul) === TRUE) {
			
			echo 1;
				}
				else{
			echo 0;
				}
	
	
$con->close();
?>