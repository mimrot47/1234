<?php
include('../connect.php');
//$unique_id=$_GET['unique_id'];
$id=$_GET['id'];


mysqli_query($conn,"UPDATE matrimonial_gallery set status='approved' where id='$id'") or die(mysqli_error($conn));
   echo '<script type="text/javascript">'; 
echo 'alert("Record Approved..");'; 
echo 'window.location.href = "matrimony_home.php";';
echo '</script>';

?>
