<?php 	

require_once 'core.php';

$sql = "SELECT * FROM compania";
$result = $con->query($sql);

$output = array('data' => array());

if($result->num_rows > 0) { 

 while($row = $result->fetch_array()) {  
                        
$button = '<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#dataUpdate" data-id="'.$row[0].'" data-nombre="'.$row[1].'" data-nit="'.$row[2].'" data-direccion="'.$row[3].'" data-telefono="'.$row[4].'" data-correo="'.$row[5].'"><i class="glyphicon glyphicon-edit"></i></button></i> </button></div>';
	
 	$output['data'][] = array( 		
 		$row[2],
		$row[1],
 		$row[3],
		$row[4],
		$row[5],
		$button 		
 		); 	
 } 
}
$con->close();

echo json_encode($output);