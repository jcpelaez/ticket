<?php
require_once '../php/core.php';

$q=$_POST['q'];

$sql = "SELECT * FROM historia WHERE id_proyecto='".$q."'";
$result = $con->query($sql);
?>

<select name="historia" id="historia" class="select2_single form-control">

<?php while($filaprograma = $result->fetch_array()){ ?>
 <option value="<?php echo $filaprograma['id_historia']; ?>"><?php echo $filaprograma['nombre_historia']; ?></option>
<?php 
} 
	?>
</select>