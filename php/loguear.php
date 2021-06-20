<?php 	
	session_start();
	require_once 'db_connect.php';
	
	date_default_timezone_set('America/Bogota');
	
	$usuario = $_POST["usuario"];
	$pass = $_POST["clave"];


	$sql = "SELECT * FROM cuenta WHERE usuario='".$usuario."' AND clave='".$pass."'";
	$result = $con->query($sql);
	
		if($result->num_rows > 0) { 
			
		while($row = $result->fetch_array()) {
			
				$_SESSION['usuario']= $row[1];
				$_SESSION['id']= $row[0];
				$_SESSION["ultimoAcceso"]= date("Y-n-j H:i:s"); 
			echo 1;
					}
				}
		else
			echo 0;
		
$con->close();
?>