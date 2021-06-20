<?php 	

require_once 'core.php';

$sql = "SELECT historia.id_historia,
historia.nombre_historia, historia.id_proyecto,
historia.id_usuario, proyecto.nombre_proyecto,
cuenta.usuario FROM historia INNER JOIN proyecto ON proyecto.id_proyecto = historia.id_proyecto
INNER JOIN cuenta ON cuenta.id_usuario = historia.id_usuario";
$result = $con->query($sql);

$output = array('data' => array());

if($result->num_rows > 0) { 

 while($row = $result->fetch_array()) {  
                        
$button = '<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#dataUpdate" data-id="'.$row[0].'" data-nombre="'.$row[1].'" data-proyecto="'.$row[2].'"><i class="glyphicon glyphicon-edit"></i></button></i> </button></div>';
	
 	$output['data'][] = array( 		
 		$row[0],
		$row[1],
		$row[4],
		$row[5],
		$button 		
 		); 	
 } 
}
$con->close();

echo json_encode($output);