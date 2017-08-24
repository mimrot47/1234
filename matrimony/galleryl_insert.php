<?php
session_start();
include "../connect.php";
 $email=$_SESSION['myusername'];
  $show_g=mysql_query("select * from matrimonialall where is_del='no' and email='$email'  ") or die(mysql_error());
										while($row_g=mysql_fetch_array($show_g))
										{
											$unique_id=$row_g['unique_id'];
										}

$file = $_FILES['img1']['tmp_name'];
$file = $_FILES['img1']['tmp_name'];
$file=file_get_contents($file);
$file=mysql_real_escape_string($file);


$file_size=$_FILES["img1"]["size"];
$file_type=$_FILES["img1"]["type"];
           	
//
//$file2 = $_FILES['img2']['tmp_name'];
//$file2 = $_FILES['img2']['tmp_name'];
//$file2=file_get_contents($file2);
//$file2=mysql_real_escape_string($file2);
//
//
//$file_size=$_FILES["img2"]["size"];
//$file_type=$_FILES["img2"]["type"];
//           	
//
//$file3 = $_FILES['img3']['tmp_name'];
//$file3 = $_FILES['img3']['tmp_name'];
//$file3=file_get_contents($file3);''
//$file3=mysql_real_escape_string($file3);
//
//
//$file_size=$_FILES["img3"]["size"];
//$file_type=$_FILES["img3"]["type"];
//           	
//	if($_FILES["img3"]["tmp_name"])
//	    {
//		  $tt3= $_FILES["img3"]["name"];
//                        $filename3=date("d-m")."_".rand().str_replace(" ","_",$tt3);
//                         move_uploaded_file($_FILES["img3"]["tmp_name"],"gallery_img/".$filename3);
//                
//        }
		
		
//$file4 = $_FILES['img4']['tmp_name'];
//$file4 = $_FILES['img4']['tmp_name'];
//$file4=file_get_contents($file4);
//$file4=mysql_real_escape_string($file4);
//
//
//$file_size=$_FILES["img4"]["size"];
//$file_type=$_FILES["img4"]["type"];
           	
		

		
  // $query=mysql_query("UPDATE matrimonialall SET img1='$filename1', img2='$filename2', img3='$filename3', img4='$filename4' where email='$email'") or die(mysql_error());
   $unique_id;
$query=mysql_query("INSERT INTO `matrimonial_gallery` (id,unique_id,email,img,is_del) VALUES('','$unique_id','$email','$file','no')");
		echo '<script type="text/javascript">'; 
		echo 'window.location.href = "add_gallery.php";';
		echo '</script>';

		
?>


