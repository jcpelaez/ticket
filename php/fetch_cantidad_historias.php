<?php 	
require_once 'core.php';

$sql = "SELECT * FROM historia";

$result = $con->query($sql);

if($result->num_rows > 0) { 							  
		$return['historia'] =  $result->num_rows;
} else{
		$return['historia'] =  0;
}
	echo json_encode($return);
$con->close();