<?php
include ('../connect.php');
$candidate_id=$_POST['candidate_id'];
$unique_id=$_POST['unique_id'];
	
	
$file = $_FILES['profile_pic']['tmp_name'];
$file=file_get_contents($file);
$file=mysqli_real_escape_string($conn,$file);

$file_size=$_FILES["profile_pic"]["size"];
$file_type=$_FILES["profile_pic"]["type"];
           	
if($file!='')
{
	$tt1= $_FILES["profile_pic"]["name"];
	$filename=date("d-m-Y")."_".rand().str_replace(" ","_",$tt1);
	move_uploaded_file($_FILES["profile_pic"]["tmp_name"],"../../profile_photos/".$filename);
	$query=mysqli_query($conn,"UPDATE  matrimonialall SET profile_pic='$filename' WHERE unique_id='$unique_id'") or die(mysqli_error($conn));
}
/*---------------------------------------------------------------------------*/
	

	
//$query=mysqli_query($conn,"UPDATE matrimonialall SET profile_pic='$file'  WHERE unique_id='$unique_id'") or die(mysqli_error($conn));
	
	
	$data=mysqli_fetch_array(mysqli_query($conn,"select * from matrimonialall where unique_id='$unique_id'"));
	if($data['marriageType'] == 'Never married')
	{
		if($data['gender'] == 'Bride')
		{
			echo '<script type="text/javascript">'; 
			echo 'alert("Matrimony Updated..");'; 
			echo 'window.location.href = "matrimony_show_bride.php";';
			echo '</script>';
		}
		else
		{
			echo '<script type="text/javascript">'; 
			echo 'alert("Matrimony Updated..");'; 
			echo 'window.location.href = "matrimony_show_groom.php";';
			echo '</script>';
		}
	}	
	else
	{
		if($data['marriageType'] == 'divorcee')
		{
			if($data['gender'] == 'Bride')
			{
				echo '<script type="text/javascript">'; 
				echo 'alert("Matrimony Updated..");'; 
				echo 'window.location.href = "matrimony_show_divorce_bride.php";';
				echo '</script>';
			}
			else
			{
				echo '<script type="text/javascript">'; 
				echo 'alert("Matrimony Updated..");'; 
				echo 'window.location.href = "matrimony_show_divorce_groom.php";';
				echo '</script>';
			}
		}	
		else
		{
			if($data['marriageType'] == 'widow')
			{
				echo '<script type="text/javascript">'; 
				echo 'alert("Matrimony Updated..");'; 
				echo 'window.location.href = "matrimony_show_widow_bride.php";';
				echo '</script>';
			}	
			else
			{
				if($data['marriageType'] == 'widower')
				{
					echo '<script type="text/javascript">'; 
					echo 'alert("Matrimony Updated..");'; 
					echo 'window.location.href = "matrimony_show_widow_groom.php";';
					echo '</script>';
				}	
			}
		}
	
	}

?>

