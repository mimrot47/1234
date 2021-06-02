<?php 
include "../connect.php";

$marriageType=$_POST['marriageType'];
$academic_level=$_POST['academic_level'];
$cast=$_POST['cast'];
$states=$_POST['states'];
$age=$_POST['age'];
if($marriageType!='' && $academic_level=='' && $cast=='' && $states=='' && $age=='')
{
	echo"marriage";
	$show_marg=mysqli_query($conn,"select * from matrimonialall where marriageType='$marriageType' and is_del='no'  ") or die(mysqli_error($conn));
										while($row_marg=mysqli_fetch_array($show_marg))
										{
											echo $gender_1=$row_marg['email'];
										}
}

if($marriageType=='' && $academic_level!='' && $cast=='' && $states=='' && $age=='')
{
	echo"qulification";
	$show_al=mysqli_query($conn,"select * from matrimonialall where academic_level='$academic_level' and is_del='no'  ") or die(mysqli_error($conn));
										while($row_al=mysqli_fetch_array($show_al))
										{
											echo $row_al['email'];
										}
}
if($marriageType=='' && $academic_level=='' && $cast!='' && $states=='' && $age=='')
{
	echo"cast";
	$show_al=mysqli_query($conn,"select * from matrimonialall where cast='$cast' and is_del='no'  ") or die(mysqli_error($conn));
										while($row_al=mysqli_fetch_array($show_al))
										{
											echo $row_al['email'];
										}

}
if($marriageType=='' && $academic_level=='' && $cast=='' && $states!='' && $age=='')
{
	echo"state";
		$show_state=mysqli_query($conn,"select * from matrimonialall where states='$states' and is_del='no'  ") or die(mysqli_error($conn));
										while($row_state=mysqli_fetch_array($show_state))
										{
											echo $row_state['email'];
										}

}
if($marriageType=='' && $academic_level=='' && $cast=='' && $states=='' && $age!='')
{
	echo"age";
			$show_age=mysqli_query($conn,"select * from matrimonialall where age='$age' and is_del='no'  ") or die(mysqli_error($conn));
										while($row_age=mysqli_fetch_array($show_age))
										{
											echo $row_age['email'];
										}

}
if($marriageType!='' && $academic_level!='' && $cast!='' && $states!='' && $age!='')
{
	echo"sdjfhdsjbfdbfjdsgfdj";
				$show_age=mysqli_query($conn,"select * from matrimonialall where age='$age' and marriageType='$marriageType' and states='$states' and cast='$cast' and academic_level='$academic_level' and is_del='no'  ") or die(mysqli_error($conn));
		echo "select * from matrimonialall where age='$age' and marriageType='$marriageType' and states='$states' and cast='$cast' and academic_level='$academic_level' and is_del='no'  ";								
										while($row_age=mysqli_fetch_array($show_age))
										{
											echo $row_age['email'];
										}

}

?>