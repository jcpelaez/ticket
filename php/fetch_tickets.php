<?php 	

require_once 'core.php';

$filtro = $_POST['filtro'];

if ($filtro=='0')
{
	$sql = "SELECT ticket.id_ticket, ticket.ticket,
ticket.comentarios, ticket.estado, ticket.id_historia,
historia.nombre_historia FROM historia INNER JOIN ticket ON historia.id_historia = ticket.id_historia";
} 
else { 
	$sql = "SELECT ticket.id_ticket, ticket.ticket,
ticket.comentarios, ticket.estado, ticket.id_historia,
historia.nombre_historia FROM historia INNER JOIN ticket ON historia.id_historia = ticket.id_historia WHERE ticket.id_historia='".$filtro."'";
}
$result = $con->query($sql);

$output = array('data' => array());

if($result->num_rows > 0) { 

 while($row = $result->fetch_array()) {  
                        
$button = '<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#dataUpdate" data-id="'.$row[0].'" data-nombre="'.$row[1].'" data-comentarios="'.$row[2].'" data-estado="'.$row[3].'" data-historia="'.$row[4].'"><i class="glyphicon glyphicon-edit"></i></button></i> </button></div>';
	
	if($row[3] == '1') {
 		$button2 = '<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#dataDelete" data-id="'.$row[0].'" data-nombre="'.$row[1].'"><i class="glyphicon glyphicon-trash"></i></button></i> </button></div>';
	}
		else
		$button2 = '';
	
	if($row[3] == '1') {
 		// deactivate member
 		$estado = "<label class='label label-success'>Activo</label>";
 	} 
	if($row[3] == '2') {
 		// deactivate member
 		$estado = "<label class='label label-warning'>En Proceso</label>";
 	} 
	if($row[3] == '3') {
 		// deactivate member
 		$estado = "<label class='label label-info'>Finalizado</label>";
 	} 
	if($row[3] == '4') {
 		// deactivate member
 		$estado = "<label class='label label-danger'>Cancelado</label>";
 	} 
	
 	$output['data'][] = array( 		
 		$row[0],
		$row[1],
		$row[2],
		$row[5],
		$estado,
		$button ." ". $button2,		
 		); 	
 } 
}
$con->close();

echo json_encode($output);