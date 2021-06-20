<?php 	

require_once 'core.php';

$sql = "SELECT proyecto.id_proyecto,
proyecto.nombre_proyecto, proyecto.id_compania,
compania.nombre FROM compania INNER JOIN proyecto ON compania.id_compania = proyecto.id_compania";
$result = $con->query($sql);

$output = array('data' => array());

if($result->num_rows > 0) { 

 while($row = $result->fetch_array()) {  
                        
$button = '<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#dataUpdate" data-id="'.$row[0].'" data-nombre="'.$row[1].'" data-compania="'.$row[2].'"><i class="glyphicon glyphicon-edit"></i></button></i> </button></div>';
	
 	$output['data'][] = array( 		
 		$row[0],
		$row[1],
		$row[3],
		$button 		
 		); 	
 } 
}
$con->close();

echo json_encode($output);