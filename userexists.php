<?php
include 'connect.php';

    $username = mysqli_real_escape_string($conn,$_POST['username']);
   
    $sql = "SELECT email FROM matrimonialall WHERE email='".$username."'";

    $query = mysqli_query($conn,$sql);

    if(mysqli_num_rows($query) == 0)
    {
        echo('USER_AVAILABLE');
    }
    else
    {
        echo 'USER_EXISTS,'.$username;
    }
    
?>