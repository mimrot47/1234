<?php
	include ('../connect.php');
	
	 $id=$_POST['id'];
	
							$bride_name=$_POST['bride_name'];
							$groom_name=$_POST['groom_name'];
							$marriage_date=$_POST['marriage_date'];
							$ss_heading=$_POST['ss_heading'];
							
							$ss_desc=$_POST['ss_desc'];
							$state=$_POST['state'];
							$city=$_POST['city'];
	
	$keyword=$bride_name.' , '.$groom_name;

		
$image_mime_type="image/png|image/jpeg|image/gif"; 

if($_FILES["photo"]["tmp_name"] !=''){

$file_size=$_FILES["photo"]["size"];
$file_type=$_FILES["photo"]["type"];
           
	
	if($_FILES["photo"]["tmp_name"])
	    {
		  $tt1= $_FILES["photo"]["name"];
                        $filename1=date("d-m")."_".rand().str_replace(" ","_",$tt1);
                         move_uploaded_file($_FILES["photo"]["tmp_name"],"matrimony_success_img/".$filename1);
                
         }
	
	
	$query=mysqli_query($conn,"UPDATE success_stories
 SET photo='$filename1',bride_name='$bride_name',groom_name='$groom_name',marriage_date='$marriage_date',ss_heading='$ss_heading',ss_desc='$ss_desc',state='$state',city='$city',keyword='$keyword' WHERE id='$id'") or die(mysqli_error($conn));
	}
	else
	{
		
$query=mysqli_query($conn,"UPDATE success_stories
 SET photo='".$_POST['photo']."',bride_name='$bride_name',groom_name='$groom_name',marriage_date='$marriage_date',ss_heading='$ss_heading',ss_desc='$ss_desc',state='$state',city='$city',keyword='$keyword' WHERE id='$id'") or die(mysqli_error($conn));
	}
	
	echo '<script type="text/javascript">'; 
		echo 'alert("Success Stories Updated..");'; 
		echo 'window.location.href = "success_stories_show.php";';
	echo '</script>';
 
 
?>