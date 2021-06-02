<?php
include('../connect.php');
$unique_id=$_GET['unique_id'];


mysqli_query($conn,"UPDATE matrimonial_divorcee where unique_id='$unique_id'") or die(mysqli_error($conn));
   echo '<script type="text/javascript">'; 
echo 'alert("Record Deleted..");'; 
echo 'window.location.href = "matrimony_divorce.php";';
echo '</script>';

?>
