<?php 	

require_once 'core.php';

date_default_timezone_set('America/Bogota');

$sql = "SELECT cuenta.id_usuario,
cuenta.usuario, cuenta.id_compania,
compania.nombre FROM compania
INNER JOIN cuenta ON cuenta.id_compania = compania.id_compania";

$result = $con->query($sql);

$output = array('data' => array());

if($result->num_rows > 0) { 

 while($row = $result->fetch_array()) {  

$button = '<div align="center"><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#dataUpdate" data-id="'.$row[0].'" data-email="'.$row[1].'"  data-compania="'.$row[2].'"><i class="glyphicon glyphicon-edit"></i> </button></div>';
	
 		$output['data'][] = array( 		
 		$row[0],
		$row[1],
		$row[2]." - " .$row[3],
		$button,		
 		); 	
 } 
}
$con->close();

echo json_encode($output);