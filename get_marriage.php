<?php
include('dbconfig.php');
error_reporting(0);

if($_POST['id']=="Groom")
{
?>
<option>Select Marriage Status </option>
<option>Never married</option>
<option>Divorcee</option>
<option>Widower</option>
<?php
}
else
{
if($_POST['id']=="Bride")
{
?>
<option>Select Marriage Status </option>
<option>Never married</option>
<option>Divorcee</option>
<option>Widow</option>
<?php
}
else
{
?>
<option>Select Marriage Status </option>
<option>Never married</option>
<option>Divorcee</option>
<option>Widow</option>
<option>Widower</option>
<?php
}
}
?>

