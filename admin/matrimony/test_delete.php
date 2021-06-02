<?php
include('../connect.php');
$id=$_GET['id'];


mysqli_query($conn,"UPDATE testimonial set is_del='deleted' where id='$id'") or die(mysqli_error($conn));
   echo '<script type="text/javascript">'; 
echo 'alert("Record Deleted..");'; 
echo 'window.location.href = "matrimony_testimonial.php";';
echo '</script>';

?>
