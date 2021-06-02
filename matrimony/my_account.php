<?php
include "../connect.php";
session_start();
// $email='rajshree@gmail.com';

 $email=$_SESSION['myusername'];
//$email use in this real login 

$show_b=mysqli_query($conn,"select * from matrimonialall where email='$email' and is_del='no'") or die(mysqli_error($conn));
while($row_b=mysqli_fetch_array($show_b))
{
$first_name=$row_b['first_name'];
$middle_name=$row_b['middle_name'];
$last_name=$row_b['last_name'];
$city=$row_b['city'];
$gender=$row_b['gender'];
$age=$row_b['age'];
$states=$row_b['states'];
$address=$row_b['address'];
$mobile1=$row_b['mobile_no1'];
$mobile2=$row_b['mobile_no2'];
$birth_date=date("d-m-Y", strtotime($row_b['birth_date']));
$birth_city=$row_b['birth_city'];
$birth_dist=$row_b['birth_district'];
$birth_state=$row_b['birth_state'];
$birth_time=$row_b['birth_time'];
$blood_group=$row_b['blood_group'];
$body_weight=$row_b['body_weight'];
$day_of_birth=$row_b['day_of_birth'];
$cast=$row_b['cast'];
$subcast=$row_b['subcast'];
$height=$row_b['fit']."' ".$row_b['inches'].'"';
$spectacles=$row_b['spectacles'];
$acceptation=$row_b['acceptation'];
$skin_tone=$row_b['skin_tone'];
$hobbies=$row_b['hobbies'];
$any_disability=$row_b['any_disability'];
$any_disability_desc=$row_b['any_disability_desc'];
$faculty=$row_b['faculty'];
$academic_level=$row_b['academic_level'];
$college_name=ucfirst($row_b['college_name']);
$college_address=ucfirst($row_b['college_address']);
$office_contact=$row_b['office_contact'];
$job_busi_status=ucfirst($row_b['job_busi_status']);
$working_post=ucfirst($row_b['working_post']);
$annual_income=$row_b['annual_income'];
$work_place_address=ucfirst($row_b['work_place_address']);
$father_name=ucfirst($row_b['father_name']);
$occupation_father=ucfirst($row_b['occupation_father']);
$mother_name=ucfirst($row_b['mother_name']);
$occupation_mother=ucfirst($row_b['occupation_mother']);
$no_of_brother=$row_b['no_of_brother'];
$married_brother=$row_b['married_brother'];
$unmarried_brother=$row_b['unmarried_brother'];
$no_of_sister=$row_b['no_of_sister'];
$married_sister=$row_b['married_sister'];
$unmarried_sister=$row_b['unmarried_sister'];
$permanent_residential_address=ucfirst($row_b['permanent_residential_address']);
$parent_conatct_no=$row_b['parent_conatct_no'];
$birth_name=ucfirst($row_b['birth_name']);
$own_kul=ucfirst($row_b['own_kul']);
$mamkul=ucfirst($row_b['mamkul']);
$gotra=ucfirst($row_b['gotra']);
$nakshtra=$row_b['nakshtra'];
$charan=$row_b['charan'];
$rashi=$row_b['rashi'];
$nadi=$row_b['nadi'];
$gan=$row_b['gan'];
$guru=$row_b['guru'];
$manglik_status=$row_b['manglik_status'];
$marriageType=$row_b['marriageType'];
$photo=$row_b['profile_pic'];
$cover_photo = $row_b['cover_photo'];
$image_mime_type123="image/jpeg";
$unique_id=$row_b['unique_id'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="...">
	<meta name="keywords" content="...">
	<meta name="author" content="...">
	<title>MATRIMONY</title>
	<link rel="stylesheet" href="css/CZSale.css" type="text/css" />
	<style>
		.brideslider
		{
			background-color:#FFFFFF;
			color:#000000; 
			padding-top: 12px;
			padding-left: 18px;
			padding-bottom:15px;
			font-size:15px; 
			font-family:CaviarDreams_Bold; 
			border-radius:5px;
			width: 220px;
		}
		
		.centered {
			font-family:CenturyGothict; 
			position: absolute;
			top: 80%;
			left: 50%;
			transform: translate(-50%, -50%);
			color:#f8eded;
			font-size:26px;
			
		}	
			
		.logo_img
		{
			width:200px;
			height:50px;
			margin-top:45px;
		}
		.event-img
		{
			width:100px;
			height:100px;
		}
	
		.navi {
		width: 100%;
		margin: 5px;
		padding:2px 5px;
		border:1px solid #eee;
		}
	
		.show {
		//color: blue;
		margin: 5px 0;
		padding: 3px 5px;
		cursor: pointer;
		font: 15px/19px Arial,Helvetica,sans-serif;
		}
		.show a {
		text-decoration: none;
		}
		.show:hover {
		text-decoration: none;
		}


		ul.setPaginate li.setPage{
		padding:15px 10px;
		font-size:14px;
		}
	
		ul.setPaginate{
		margin:0px;
		padding:0px;
		height:100%;
		overflow:hidden;
		font:12px 'Tahoma';
		list-style-type:none;	
		}  
	
		ul.setPaginate li.dot{padding: 3px 0;}
	
		ul.setPaginate li{
		float:left;
		margin:0px;
		padding:0px;
		margin-left:5px;
		}



		ul.setPaginate li a
		{
		background: none repeat scroll 0 0 #ffffff;
		border: 1px solid #cccccc;
		color: #999999;
		display: inline-block;
		font: 15px/25px Arial,Helvetica,sans-serif;
		margin: 5px 3px 0 0;
		padding: 0 5px;
		text-align: center;
		text-decoration: none;
		}	
	
		ul.setPaginate li a:hover,
		ul.setPaginate li a.current_page
		{
		background: none repeat scroll 0 0 #0d92e1;
		border: 1px solid #000000;
		color: #ffffff;
		text-decoration: none;
		}
	
		ul.setPaginate li a{
		color:black;
		display:block;
		text-decoration:none;
		padding:5px 8px;
		text-decoration: none;
		}
	
		.form-panel:not(.active) 
		{
			display:none;
		}
	</style>    
</head>
<body>
<div style="background-color:#225169; height:50px">&nbsp;</div>
	<div class="container">
		<div class="navbar-header">
			<h1 class="navbar-brand" style="font-family:CenturyGothict; font-size:30px"><a href="" style=" text-decoration: none;"><span style="color:#FF4500">MALI</span> <span style="color:#225169">MATRIMONY</span></a></h1>
		</div>
	</div>
</div>
<div class="container wrapper">
		<?php include "menubar.php";?>
		<div class="col-lg-9 content-left">
			<div class="well well-sm image-cover" style="padding-top: 250px; background-size:cover;background-position: center;background-repeat:no-repeat; background-image:<?php if($cover_photo!=''){?>url(cover_photos/<?php echo $cover_photo; ?>)<?php }else{ ?> background-color:#e5e5e5; <?php } ?>;  height:315px;">
			<a href="edit_photo.php"><img class='img-responsive image-cover-menu' src=img/AddCvrRed.png  style='display: block;width:50px;height:50px;'></a>
			</div>
			
			<div style="background-color:#FFFFFF;margin-top:-90px;width:225px;height:250px;border-radius:250px;padding: 10px; margin-left:50px">
			        <?php 
			        $image_mime_type123="image/jpeg";
			        if($photo=="")
					{											
						if($gender=="Bride")
						{
							echo "<img class='img-responsive' src=img/bride.png  style='display: block;width:200px;height:200px;border-radius:150px;margin-left:3px'>";
						}
						else if($gender=="Groom")
						{
							echo "<img class='img-responsive' src=img/groom.png  style='display: block;width:200px;height:200px;border-radius:150px;margin-left:3px'>";
						}
					}
					else 
					{
				 ?>
				 	<img  src="../profile_photos/<?php echo $photo;?>" alt="image" style="display: block;width:200px;height:200px;border-radius:150px;margin-left:3px;" class="img-responsive" id="image_list"/>
				<?php
				}
				?>
				<a href="edit_photo.php"><img class='img-responsive' src='img/AddCvrRed.png'  style='display: block;width:50px;height:50px;margin-top: -60px;margin-left: 150px;'></a>
				<div style="float:left;margin-top: -110px;width: 950px;padding-left: 290px;"> <h3 style="text-transform:uppercase; color:#e74c3c; font-size:40px;font-family:BebasNeue;"><?php echo ucfirst($first_name)." ".ucfirst($last_name);?></h3> </div>
			</div>
			<div class="form-panel active" style="height:620px;">
				<div class="container cont-title" align="center"> 
					<h2 class='title-h2' style="color:#e74c3c; font-family:BerlinSans;"><img src="../img/ICON 1/name-people-person-user-icon--icon-search-engine-1.png" style="width:30px; height:30px;margin-top: -10px;"> Personal Information </h2>
				</div>
				<div class="container" style="font-family:CenturyGothict">
					<div class="col-lg-12 div-resize" style="display:-webkit-box">
					<div class="col-lg-4 div-left" >
						<table class="table table-striped">
							<tr>
								<td style="padding-left: 15px;width:190px;"><strong>First Name</strong></td>
								<td align="right" style="padding-right: 15px;"><strong><?php echo ucfirst($first_name);?></strong></td>
							</tr>
							<tr>
								<td style="padding-left: 15px;"><strong>Middle Name</strong></td>
								<td align="right" style="padding-right: 15px;"><strong><?php echo ucfirst($middle_name);?></strong></td>
							</tr>
							<tr>
								<td style="padding-left: 15px;"><strong>Last Name</strong></td>
								<td align="right" style="padding-right: 15px;"><strong><?php echo ucfirst($last_name);?></strong></td>
							</tr>
							<tr>
								<td style="padding-left: 15px;"><strong>State</strong></td>
								<td align="right" style="padding-right: 15px;"><strong><?php echo ucfirst($states);?></strong></td>
							</tr>
							<tr>
								<td style="padding-left: 15px;"><strong>City</strong></td>
								<td align="right" style="padding-right: 15px;"><strong><?php echo ucfirst($city);?></strong></td>
							</tr>
							<tr>
								<td style="padding-left: 15px;"><strong>Address</strong></td>
								<td align="right" style="padding-right: 15px;"><strong><?php echo ucfirst($address);?></strong></td>
							</tr>
							<tr>
								<td style="padding-left: 15px;"><strong>Mobile 1</strong></td>
								<td align="right" style="padding-right: 15px;"><strong> <?php echo ucfirst($mobile1);?></strong></td>
							</tr>
							<tr>
								<td style="padding-left: 15px;"><strong>Mobile 2</strong></td>
								<td align="right" style="padding-right: 15px;"><strong><?php echo ucfirst($mobile2);?></strong></td>
							</tr>
							<tr>
								<td style="padding-left: 15px;"><strong>Email</strong></td>
								<td align="right" style="padding-right: 15px;"><strong><?php echo ($email);?></strong></td>
							</tr>
							<tr>
								<td style="padding-left: 15px;"><strong>Birth Date</strong></td>
								<td align="right" style="padding-right: 15px;"><strong><?php echo ($birth_date);?></strong></td>
							</tr>
							<tr>
								<td style="padding-left: 15px;"><strong>Birth City</strong></td>
								<td align="right" style="padding-right: 15px;"><strong><?php echo ucfirst($birth_city);?></strong></td>
							</tr>
							<tr>
								<td style="padding-left: 15px;"><strong>Birth District</strong></td>
								<td align="right" style="padding-right: 15px;"><strong><?php echo ucfirst($birth_dist);?></strong></td>
							</tr>
							<tr>
								<td style="padding-left: 15px;"><strong>Birth State </strong></td>
								<td align="right" style="padding-right: 15px;"><strong><?php echo ($birth_state);?></strong></td>
							</tr>
						</table>
					</div>
					<div class="col-lg-4" style="margin-left:40px">
						<table class="table table-striped">
							<tr>
								<td style="padding-left: 15px;"><strong>Birth Time </strong>(24Hr Format)</td>
								<td align="right" style="padding-right: 15px;"><strong><?php echo ($birth_time);?></strong></td>
							</tr>
							<tr>
								<td style="padding-left: 15px;"><strong>Blood Group</strong></td>
								<td align="right" style="padding-right: 15px;"><strong><?php echo $blood_group;?></strong></td>
							</tr>
							<tr>
								<td style="padding-left: 15px;"><strong>Body Weight</strong></td>
								<td align="right" style="padding-right: 15px;"><strong><?php echo $body_weight." Kg";?></strong></td>
							</tr>
							<tr>
								<td style="padding-left: 15px;"><strong>Caste</strong></td>
								<td align="right" style="padding-right: 15px;"><strong><?php echo $cast;?></strong></td>
							</tr>
							<tr>
								<td style="padding-left: 15px;"><strong>Sub-caste</strong></td>
								<td align="right" style="padding-right: 15px;"><strong><?php echo $subcast;?></strong></td>
							</tr>
							<tr>
								<td style="padding-left: 15px;"><strong>Height</strong></td>
								<td align="right" style="padding-right: 15px;"><strong><?php echo $height;?></strong></td>
							</tr>
							<tr>
								<td style="padding-left: 15px;"><strong>Spectacles</strong></td>
								<td align="right" style="padding-right: 15px;"><strong><?php echo ucfirst($spectacles);?></strong></td>
							</tr>
							<tr>
								<td style="padding-left: 15px;"><strong>Age</strong></td>
								<td align="right" style="padding-right: 15px;"><strong><?php echo ($age)." Years";?></strong></td>
							</tr>
							<tr>
								<td style="padding-left: 15px;"><strong>Day Of Birth</strong></td>
								<td align="right" style="padding-right: 15px;"><strong><?php echo ($day_of_birth);?></strong></td>
							</tr>
							<tr>
								<td style="padding-left: 15px;"><strong>Skin Tone</strong></td>
								<td align="right" style="padding-right: 15px;"><strong><?php echo ucfirst($skin_tone);?></strong></td>
							</tr>
							<tr>
								<td style="padding-left: 15px;"><strong>Expectation</strong></td>
								<td align="right" style="padding-right: 15px;"><strong><?php echo ucfirst($acceptation);?></strong></td>
							</tr>
							<tr>
								<td style="padding-left: 15px;"><strong>Hobbies</strong></td>
								<td align="right" style="padding-right: 15px;"><strong><?php echo ucfirst($hobbies);?></strong></td>
							</tr>
							<tr>
								<td style="padding-left: 15px;"><strong>Any Disability</strong></td>
								<td align="right" style="padding-right: 15px;"><strong><?php echo ucfirst($any_disability);?></strong></td>
							</tr>
							<?php 
							if($any_disability!='no')
							{							
							?>
							<tr>
								<td style="padding-left: 15px;"><strong>Any Disability Desc</strong></td>
								<td align="right" style="padding-right: 15px;"><strong><?php echo ucfirst($any_disability_desc);?></strong></td>
							</tr>
							<?php
							}
							?>
						</table>
					</div>
					</div>
				</div>
			</div>
			<div class="form-panel" style="height:620px;">
				<div class="container title-up" align="center"> 
					<h2 style="color:#e74c3c; font-family:BerlinSans; font-size:32px"><img src="../img/ICON 1/Professional Information.png" style="width:40px; height:40px;margin-top: -10px;"> Professional Information </h2>
				</div>
				<div class="container" style="font-family:CenturyGothict">
					<div class="col-lg-12" style="display:-webkit-box">
					<table class="table table-striped table-margin"  style="font-family:CenturyGothict;width:50%;">
						<tr>
							<td style="padding-left: 15px;"><strong>Qualification</strong></td>
							<td align="right" style="padding-right: 15px;"><strong><?php echo $faculty;?></strong></td>
						</tr>
						<tr>
							<td style="padding-left: 15px;"><strong>College Name</strong></td>
							<td align="right" style="padding-right: 15px;"><strong><?php echo $college_name;?></strong></td>
						</tr>
						<tr>
							<td style="padding-left: 15px;"><strong>College Address</strong></td>
							<td align="right" style="padding-right: 15px;"><strong><?php echo $college_address;?></strong></td>
						</tr>
						<tr>
							<td style="padding-left: 15px;"><strong>Occupation Status</strong></td>
							<td align="right" style="padding-right: 15px;"><strong><?php echo $job_busi_status;?></strong></td>
						</tr>
						<tr>
							<td style="padding-left: 15px;"><strong>Working Post</strong></td>
							<td align="right" style="padding-right: 15px;"><strong><?php echo $working_post;?></strong></td>
						</tr>
						<tr>
							<td style="padding-left: 15px;"><strong>Work Place Address</strong></td>
							<td align="right" style="padding-right: 15px;"><strong><?php echo $work_place_address;?></strong></td>
						</tr>
						<tr>
							<td style="padding-left: 15px;"><strong>Office Contact</strong></td>
							<td align="right" style="padding-right: 15px;"><strong><?php echo $office_contact;?></strong></td>
						</tr>
						<tr>
							<td style="padding-left: 15px;"><strong>Annual Income</strong></td>
							<td align="right" style="padding-right: 15px;"><strong><?php echo $annual_income;?></strong></td>
						</tr>
						
					</table>
					</div>
				</div>
			</div>
			<div class="form-panel" style="height:620px;">
				<div class="container title-up" align="center"> 
					<h2 style="color:#e74c3c; font-family:BerlinSans; font-size:32px"><img src="../img/ICON 1/Family Information.png" style="width:30px; height:30px;margin-top: -10px;"> Family Information </h2>
				</div>
				<div class="container" style="font-family:CenturyGothict">
					<table class="table table-striped table-margin"  style="font-family:CenturyGothict;width:50%;">
						<tr>
							<td style="padding-left: 15px;"><strong>Father Name</strong></td>
							<td align="right" style="padding-right: 15px;"><strong><?php echo $father_name;?></strong></td>
						</tr>
						<tr>
							<td style="padding-left: 15px;"><strong>Occupation Father</strong></td>
							<td align="right" style="padding-right: 15px;"><strong><?php echo $occupation_father;?></strong></td>
						</tr>
						<tr>
							<td style="padding-left: 15px;"><strong>Mother Name</strong></td>
							<td align="right" style="padding-right: 15px;"><strong><?php echo $mother_name;?></strong></td>
						</tr>
						<tr>
							<td style="padding-left: 15px;"><strong>Occupation Mother</strong></td>
							<td align="right" style="padding-right: 15px;"><strong><?php echo $occupation_mother;;?></strong></td>
						</tr>
						<tr>
							<td style="padding-left: 15px;"><strong>Number of Brother</strong></td>
							<td align="right" style="padding-right: 15px;"><strong><?php echo $no_of_brother;?></strong></td>
						</tr>
						<tr>
							<td style="padding-left: 15px;"><strong>Married Brother</strong></td>
							<td align="right" style="padding-right: 15px;"><strong><?php echo $married_brother;?></strong></td>
						</tr>
						<tr>
							<td style="padding-left: 15px;"><strong>Unmarried Brother</strong></td>
							<td align="right" style="padding-right: 15px;"><strong><?php echo $unmarried_brother;?></strong></td>
						</tr>
						<tr>
							<td style="padding-left: 15px;"><strong>Number of Sister</strong></td>
							<td align="right" style="padding-right: 15px;"><strong><?php echo $no_of_sister;?></strong></td>
						</tr>
						<tr>
							<td style="padding-left: 15px;"><strong>Married Sister</strong></td>
							<td align="right" style="padding-right: 15px;"><strong><?php echo $married_sister;?></strong></td>
						</tr>
						<tr>
							<td style="padding-left: 15px;"><strong>Unmarried Sister</strong></td>
							<td align="right" style="padding-right: 15px;"><strong><?php echo $unmarried_sister;?></strong></td>
						</tr>
						<tr>
							<td style="padding-left: 15px;"><strong>Parent Conatct Number</strong></td>
							<td align="right" style="padding-right: 15px;"><strong><?php echo $parent_conatct_no;?></strong></td>
						</tr>
						<tr>
							<td style="padding-left: 15px;"><strong>Permanent Residential Address</strong></td>
							<td align="right" style="padding-right: 15px;"><strong><?php echo ucfirst($permanent_residential_address);?></strong></td>
						</tr>
					</table>
				</div>
			</div>
			<div class="form-panel" style="height:620px;">
				<div class="container title-up" align="center"> 
					<h2 style="color:#e74c3c; font-family:BerlinSans; font-size:32px"><img src="../img/ICON 1/Astrological Information.png" style="width:30px; height:30px;margin-top: -10px;"> Astrological Information </h2>
				</div>
				<div class="container" style="font-family:CenturyGothict">
					<table class="table table-striped table-margin"  style="font-family:CenturyGothict;width:50%;">
						<tr>
							<td style="padding-left: 15px;"><strong>Birth Name</strong></td>
							<td align="right" style="padding-right: 15px;"><strong><?php echo $birth_name;?></strong></td>
						</tr>
						<tr>
							<td style="padding-left: 15px;"><strong>Own Kul</strong></td>
							<td align="right" style="padding-right: 15px;"><strong><?php echo $own_kul;?></strong></td>
						</tr>
						<tr>
							<td style="padding-left: 15px;"><strong>Mama Kul</strong></td>
							<td align="right" style="padding-right: 15px;"><strong><?php echo $mamkul;?></strong></td>
						</tr>
						<tr>
							<td style="padding-left: 15px;"><strong>Gotra</strong></td>
							<td align="right" style="padding-right: 15px;"><strong><?php echo $gotra;?></strong></td>
						</tr>
						<tr>
							<td style="padding-left: 15px;"><strong>Nakshtra</strong></td>
							<td align="right" style="padding-right: 15px;"><strong><?php echo $nakshtra;?></strong></td>
						</tr>
						<tr>
							<td style="padding-left: 15px;"><strong>Charan</strong></td>
							<td align="right" style="padding-right: 15px;"><strong><?php echo $charan;?></strong></td>
						</tr>
						<tr>
							<td style="padding-left: 15px;"><strong>Nadi</strong></td>
							<td align="right" style="padding-right: 15px;"><strong><?php echo $nadi;?></strong></td>
						</tr>
						<tr>
							<td style="padding-left: 15px;"><strong>Guru</strong></td>
							<td align="right" style="padding-right: 15px;"><strong><?php echo $guru;?></strong></td>
						</tr>
						<tr>
							<td style="padding-left: 15px;"><strong>Rashi</strong></td>
							<td align="right" style="padding-right: 15px;"><strong><?php echo $rashi;?></strong></td>
						</tr>
						<tr>
							<td style="padding-left: 15px;"><strong>Manglik Status</strong></td>
							<td align="right" style="padding-right: 15px;"><strong><?php echo $manglik_status;?></strong></td>
						</tr>
						<tr>
							<td style="padding-left: 15px;"><strong>Gan</strong></td>
							<td align="right" style="padding-right: 15px;"><strong><?php echo $gan;?></strong></td>
						</tr>
									
					</table>
				</div>
			</div>
			<?php 
				if($marriageType=='divorcee')
				{					 
					 $show1=mysqli_query($conn,"select * from matrimonial_divorcee where unique_id = '$unique_id'") or die(mysqli_error($conn));
					 while($row1=mysqli_fetch_array($show1))
					 {
			?>
			<div class="form-panel" style="height:620px;">
				<div class="container title-up" align="center"> 
					<h2 style="color:#e74c3c; font-family:BerlinSans; font-size:32px"><img src="../img/ICON 1/divorce.png" style="width:30px; height:30px;margin-top: -10px;"> <?php echo ucfirst($marriageType);?> Information </h2>
				</div>
				<div class="container" style="font-family:CenturyGothict">
					<table class="table table-striped table-margin"  style="font-family:CenturyGothict;width:50%;">
		                     		<tr>
							<td style="padding-left: 15px;"><strong>Previous Marriage Date</strong></td>
							<td align="right" style="padding-right: 15px;"><strong><?php echo date("d-m-Y", strtotime($row1['previous_marriage_date_divorcee']));?></strong></td>
		                     		<tr>
							<td style="padding-left: 15px;"><strong>Date of Divorcee</strong></td>
							<td align="right" style="padding-right: 15px;"><strong><?php echo date("d-m-Y", strtotime($row1['date_of_divorce']));?></strong></td>
						</tr>
						<tr>
							<td style="padding-left: 15px;"><strong>No. Of Child</strong></td>
							<td align="right" style="padding-right: 15px;"><strong><?php echo $row1['child_status_divorce'];?></strong></td>
						</tr>
						<tr>
							<td style="padding-left: 15px;"><strong>Child Living Status</strong></td>
							<td align="right" style="padding-right: 15px;"><strong><?php echo $row1['child_custody_status_divorce'];?></strong></td>
						</tr>
						<?php
							if($gender!='Groom')
							{
						?>
						<tr>
							<td style="padding-left: 15px;"><strong>Previous Marriage Address</strong></td>
							<td align="right" style="padding-right: 15px;"><strong><?php echo $row1['previous_marriage_address_divorce'];?></strong></td>
						</tr>
			                     	<?php
			                     		}
			                     	?>
					</table>
				</div>
			</div>
			<?php
					 }
				}
				else if($marriageType=='widower')
				{					 
					 $show2=mysqli_query($conn,"select * from matrimonial_widow where unique_id = '$unique_id'") or die(mysqli_error($conn));
					 while($row2=mysqli_fetch_array($show2))
					 {
			?>
			<div class="form-panel" style="height:620px;">
				<div class="container title-up" align="center">  
					<h2 style="color:#e74c3c; font-family:BerlinSans; font-size:32px"><img src="../img/ICON 1/divorce.png" style="width:30px; height:30px;margin-top: -10px;"> <?php echo ucfirst($marriageType);?> Information </h2>
				</div>
				<div class="container" style="font-family:CenturyGothict">
					<table class="table table-striped table-margin"  style="font-family:CenturyGothict;width:50%;">
				         	<tr>
							<td style="padding-left: 15px;"><strong>Previous Marriage Date</strong></td>
							<td align="right" style="padding-right: 15px;"><strong><?php echo date("d-m-Y", strtotime($row2['previous_marriage_date_widow']));?></strong></td>
						</tr>
						<tr>
							<td style="padding-left: 15px;"><strong>Date of Partners Death</strong></td>
							<td align="right" style="padding-right: 15px;"><strong><?php echo date("d-m-Y", strtotime($row2['date_partner_death_widow']));?></strong></td>
						</tr>
						<tr>
							<td style="padding-left: 15px;"><strong>No. Of Child</strong></td>
							<td align="right" style="padding-right: 15px;"><strong><?php echo $row2['child_status_widow'];?></strong></td>
						</tr>
						
					
				            <tr>
				            <?php if($row2['gender']=="Bride"){ ?>
					    <tr>
					    	<td style="padding-left: 15px;"><strong>Previous Marriage Address</strong></td>
					    	<td align="right" style="padding-right: 15px;"><strong><?php echo $row2['previous_marriage_address_widow'] ?></strong></td>
					    </tr>
					    <?php } ?>
					  </table>
				</div>
			</div>
			<?php
					 }
				}
				else if($marriageType=='widow')
				{					 
					 $show2=mysqli_query($conn,"select * from matrimonial_widow where unique_id = '$unique_id'") or die(mysqli_error($conn));
					 while($row2=mysqli_fetch_array($show2))
					 {
			?>
			<div class="form-panel" style="height:620px;">
				<div class="container title-up" align="center"> 
					<h2 style="color:#e74c3c; font-family:BerlinSans; font-size:32px"><img src="../img/ICON 1/divorce.png" style="width:30px; height:30px;margin-top: -10px;"> <?php echo ucfirst($marriageType);?> Information </h2>
				</div>
				<div class="container" style="font-family:CenturyGothict">
					<table class="table table-striped table-margin"  style="font-family:CenturyGothict;width:50%;">
				         	<tr>
							<td style="padding-left: 15px;"><strong>Previous Marriage Date</strong></td>
							<td align="right" style="padding-right: 15px;"><strong><?php echo date("d-m-Y", strtotime($row2['previous_marriage_date_widow']));?></strong></td>
						</tr>
						<tr>
							<td style="padding-left: 15px;"><strong>Date of Partners Death</strong></td>
							<td align="right" style="padding-right: 15px;"><strong><?php echo date("d-m-Y", strtotime($row2['date_partner_death_widow']));?></strong></td>
						</tr>
						<tr>
							<td style="padding-left: 15px;"><strong>No. Of Child</strong></td>
							<td align="right" style="padding-right: 15px;"><strong><?php echo $row2['child_status_widow'];?></strong></td>
						</tr>
						
					
				            <tr>
				            <?php if($row2['gender']=="Bride"){ ?>
					    <tr>
					    	<td style="padding-left: 15px;"><strong>Previous Marriage Address</strong></td>
					    	<td align="right" style="padding-right: 15px;"><strong><?php echo $row2['previous_marriage_address_widow'] ?></strong></td>
					    </tr>
					    <?php } ?>
					  </table>
				</div>
			</div>
			<?php
					 }
				}
			?>
			
			<div class="container" style="margin-bottom: 10px;display:inline-block">
				<div class="container prev-next" align="left"> 
					<img align="right" class="next" src="img/icon/bride groom next scroll.png" height="50" width="50" style="margin-left:10px;cursor:pointer;">
					<img align="right" class="previous" src="img/icon/bride groom prev scroll.png" height="50" width="50" style="cursor:pointer;"> 
				</div>
			</div>
		    </div>
		 <script src="../js/jquery.min.js"></script>
		<script>
			$('.previous').click(function () {
				var cur = $('.form-panel').index($('.form-panel.active'));
				if (cur!=0) {
					$('.form-panel').removeClass('active');
					$('.form-panel').eq(cur-1).addClass('active');
				}
			});
			$('.next').click(function () {
				var cur = $('.form-panel').index($('.form-panel.active'));
				if (cur!=$('.form-panel').length-1) {
					$('.form-panel').removeClass('active');
					$('.form-panel').eq(cur+1).addClass('active');
				}
			});
		</script>   
		</div>
		<p class="text-center" style="height:80px; background-color:#2e3c43;padding-top:30px; color:#ffffff;margin-bottom:0px;">Copyright &copy; 2020<a href="http://www.cloudsoft.com" style="color:#ffffff;"> Cloudsoft PVT.LTD</a>. All Rights Reserved.</p>
</body>
</html>