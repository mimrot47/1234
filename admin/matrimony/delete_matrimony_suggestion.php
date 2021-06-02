<?php
include('../connect.php');
$id=$_GET['id'];


mysqli_query($conn,"delete from suggestions where id='$id'") or die(mysqli_error($conn));
   echo '<script type="text/javascript">'; 
echo 'alert("Record Deleted..");'; 
echo 'window.location.href = "matrimony_suggestion.php";';
echo '</script>';

?>
