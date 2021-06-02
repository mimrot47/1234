<?php
include('dbconfig.php');
if($_POST['id'])
{
	$id=$_POST['id'];
	
	$stmt = $DB_con->prepare("SELECT * FROM city WHERE state='$id' and is_del='approved' ORDER BY city  ASC");
	$stmt->execute(array(':id' => $id));
	?><!--<option value=""> Select City</option>-->
	<?php while($row=$stmt->fetch(PDO::FETCH_ASSOC))
	{
		?>
		<option value="<?php echo $row['city']; ?>"><?php echo $row['city']; ?></option>
		<?php
	}
}
?>
