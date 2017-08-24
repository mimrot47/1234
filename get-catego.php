<?php
require_once("dbcontroller.php");
$db_handle = new DBController();
if(!empty($_POST["state"]))
 {
	echo $query ="SELECT * FROM city WHERE state = '" . $_POST["state"] . "'";
	$results = $db_handle->runQuery($query);
?>
	<option value="">Select City</option>
<?php
	foreach($results as $sub_city) {
		
		$subcity1 = $sub_city["sub_city"];
		$sub_city = str_replace('_',' ',$subcity1);
?>
	<option value="<?php echo $sub_city["city_unique_id"]; ?>"><?php echo $sub_city; ?></option>
<?php
	}
}
?>