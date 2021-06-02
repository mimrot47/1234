<?php
include('../connect.php');
$id=$_GET['id'];


mysqli_query($conn,"delete from contact_us where id='$id'") or die(mysqli_error($conn));
   echo '<script type="text/javascript">'; 
echo 'alert("Record Deleted..");'; 
echo 'window.location.href = "matrimony_contact.php";';
echo '</script>';

?>
