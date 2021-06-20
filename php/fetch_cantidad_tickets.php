<?php 	
require_once 'core.php';

$sql = "SELECT * FROM ticket";

$result = $con->query($sql);

if($result->num_rows > 0) { 							  
		$return['ticket'] =  $result->num_rows;
} else{
		$return['ticket'] =  0;
}
	echo json_encode($return);
$con->close();