<?php 	
require_once 'core.php';

$sql = "SELECT * FROM compania";

$result = $con->query($sql);

if($result->num_rows > 0) { 							  
		$return['companias'] =  $result->num_rows;
} else{
		$return['companias'] =  0;
}
	echo json_encode($return);
$con->close();