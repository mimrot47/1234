<?php
include('../connect.php');
$unique_id=$_GET['unique_id'];
$type=$_GET['type'];
$gender=$_GET['gender'];

mysqli_query($conn,"UPDATE  matrimonialall set is_del='deleted' where unique_id='$unique_id'") or die(mysqli_error($conn));
   echo '<script type="text/javascript">'; 
echo 'alert("Record Deleted..");'; 

//echo 'window.location.href = "matrimony_home.php";';
if($type=='Never_married')
{
	if($gender=='Bride')
	{
	echo 'window.location.href = "matrimony_show_bride.php";';
	}
	else
	{
	echo 'window.location.href = "matrimony_show_groom.php";';
	}
}
else
{
	if($type=='divorcee')
	{
		if($gender=='Bride')
		{
		echo 'window.location.href = "matrimony_show_divorce_bride.php";';
		}
		else
		{
		echo 'window.location.href = "matrimony_show_divorce_groom.php";';
		}
	}
	else
	{
		if($type=='widow')
		{
			if($gender=='Bride')
			{
				echo 'window.location.href = "matrimony_show_widow_bride.php";';
			}
		}
		else
		{
			if($type=='widower')
			{
				if($gender=='Groom')
				{
					echo 'window.location.href = "matrimony_show_widow_groom.php";';
				}
			}
		}
	}
}
echo '</script>';

?>
