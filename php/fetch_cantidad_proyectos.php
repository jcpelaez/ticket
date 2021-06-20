<?php 	
require_once 'core.php';

$sql = "SELECT * FROM proyecto";

$result = $con->query($sql);

if($result->num_rows > 0) { 							  
		$return['cantidad'] =  $result->num_rows;
} else{
		$return['cantidad'] =  0;
}
	echo json_encode($return);
$con->close();