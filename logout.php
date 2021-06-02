<?php
 session_start();
    unset($_SESSION['myusername']);
session_destroy();

echo '<script type="text/javascript">'; 
echo 'alert("Successfully Log Out ");'; 
echo 'window.location.href = "index.php";';
echo '</script>';

?>

 