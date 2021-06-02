<?php
define ("DB_HOST", "localhost"); // Your database host name
define ("DB_USER", "techiub1_raahul"); // Your database user
define ("DB_PASS","^BZZO*m+9},^"); // Your database password
define ("DB_NAME","techiub1_mali_matrimony"); // Your database name

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
if(!$conn)
{
	die("cannot connect");
}
?>
 