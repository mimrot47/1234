<?php
if($_POST['id'])
{
	$id=$_POST['id'];
	if($id == 'More than 6')
	{
	?>
		<option value="0">0</option>
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
		<option value="6">6</option>
		<option value="More than 6">More than 6</option>
	<?php 
	}
	else
	{$i=0;
	?>
	 <option value=""></option>
	<?php
		while($i <= $id )
		{
		 ?>
		 <option value="<?php echo $i;?>"><?php echo $i;?></option>
		 <?php 
		  $i++;
		} 
	}
}
else
{
?>
 <option value="0">0</option>
<?php
}
?>

