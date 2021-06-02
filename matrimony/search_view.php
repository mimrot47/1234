<?php
error_reporting(0);
ini_set('display_errors', '1');
include "../connect.php";
session_start();
$email=$_SESSION['myusername'];
$id=$_GET['id'];
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
			.hr_line
			{
				/*border:1px solid #E0E0E0;*/
			}
			.panel_boder
			{
				border-radius:5px; border:1px solid #CCC;
			}
			
			
		</style>
        <script src="jquery-1.11.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.slides.min.js"></script>
		<script src="js/CZSale.js"></script>
<script>
$(document).ready(function(e) {
    $('#Personal').click(function(e) {
        $('#Personal_info').show();
       	$('#Professional_info').hide();
	$('#Family_info').hide();
	$('#Astrological_info').hide();
	$('#Gallery_pic').hide();
	$('#pmar').hide();
	$('#Personal').css("background-color", "#c73828");
	$('#Professional').css("background-color", "#225169");
	$('#Family').css("background-color", "#225169");
	$('#Astrological').css("background-color", "#225169");
	$('#Gallery').css("background-color", "#225169");
	$('#previousmarriage').css("background-color", "#225169");
    });
    $('#Professional').click(function(e) {
        $('#Personal_info').hide();
	$('#Professional_info').show();
	$('#Family_info').hide();
	$('#Astrological_info').hide();
	$('#Gallery_pic').hide();
	$('#pmar').hide();
	$('#Professional').css("background-color", "#c73828");
	$('#Personal').css("background-color", "#225169");
	$('#Family').css("background-color", "#225169");
	$('#Astrological').css("background-color", "#225169");
	$('#Gallery').css("background-color", "#225169");
	$('#previousmarriage').css("background-color", "#225169");
	
    });
    $('#Family').click(function(e) {
        $('#Personal_info').hide();
	$('#Professional_info').hide();
	$('#Family_info').show();
	$('#Astrological_info').hide();
	$('#Gallery_pic').hide();
	$('#pmar').hide();
	$('#Family').css("background-color", "#c73828");
	$('#Personal').css("background-color", "#225169");
	$('#Professional').css("background-color", "#225169");
	$('#Astrological').css("background-color", "#225169");
	$('#Gallery').css("background-color", "#225169");
	$('#previousmarriage').css("background-color", "#225169");
    });
    $('#Astrological').click(function(e) {
        $('#Personal_info').hide();
	$('#Professional_info').hide();
	$('#Family_info').hide();
	$('#Astrological_info').show();
	$('#Gallery_pic').hide();
	$('#pmar').hide();
	$('#Astrological').css("background-color", "#c73828");
	$('#Personal').css("background-color", "#225169");
	$('#Professional').css("background-color", "#225169");
	$('#Family').css("background-color", "#225169");
	$('#Gallery').css("background-color", "#225169");
	$('#previousmarriage').css("background-color", "#225169");
    });
    $('#Gallery').click(function(e) {
        $('#Personal_info').hide();
	$('#Professional_info').hide();
	$('#Family_info').hide();
	$('#Astrological_info').hide();
	$('#Gallery_pic').show();
	$('#pmar').hide();
	$('#Gallery').css("background-color", "#c73828");
	$('#Personal').css("background-color", "#225169");
	$('#Professional').css("background-color", "#225169");
	$('#Family').css("background-color", "#225169");
	$('#Astrological').css("background-color", "#225169");
	$('#previousmarriage').css("background-color", "#225169");
    });
	$('#previousmarriage').click(function(e) {
        $('#Personal_info').hide();
	$('#Professional_info').hide();
	$('#Family_info').hide();
	$('#Astrological_info').hide();
	$('#Gallery_pic').hide();
	$('#pmar').show();
	$('#previousmarriage').css("background-color", "#c73828");
	$('#Personal').css("background-color", "#225169");
	$('#Professional').css("background-color", "#225169");
	$('#Family').css("background-color", "#225169");
	$('#Astrological').css("background-color", "#225169");
	$('#Gallery').css("background-color", "#225169");
    });
});

</script>
	</head>
	<body>
	<div style="background-color:#225169; height:50px">&nbsp;</div>
			<div class="container">
				<div class="navbar-header">
					<h1 class="navbar-brand" style="font-family:CenturyGothict; font-size:30px"><a href="" style=" text-decoration: none;"><span style="color:#FF4500">BRAHMIN</span> <span style="color:#225169">MATRIMONY</span></a></h1>
				</div>
			</div>
		</div>
		<div class="container wrapper">   
			<div class="content">
				<?php include "menubar.php"; ?>
				<div class="col-lg-9 content-right">
					<div class="col-lg-12" style="border-radius:2px; border:1px solid #CCC; padding:5px 0px 10px 0px;height: 1050px;" >
					<?php
						$show=mysqli_query($conn,"select * from matrimonialall where is_del='no' and unique_id='$id'  ") or die(mysqli_error($conn));
						$image_mime_type="image/png|image/jpeg|image/gif";
						
						while($row=mysqli_fetch_array($show))
						{ 
						
						$first_name=ucfirst($row['first_name']);
						$middle_name=ucfirst($row['middle_name']);
						$last_name=ucfirst($row['last_name']);
						$gender=$row['gender'];
						$states=$row['states'];
						$city=$row['city'];
						$address=ucfirst($row['address']);
						$mobile_no1=$row['mobile_no1'];
						$email=$row['email'];
						$birth_date=date("d-m-Y", strtotime($row['birth_date']));
						$birth_time=$row['birth_time'];
						$birth_state = $row['birth_state'];
						$day_of_birth=$row['day_of_birth'];
						$birth_city=ucfirst($row['birth_city']);
						$birth_district=ucfirst($row['birth_district']);
						$birth_state=$row['birth_state'];
						$mobile_no2=$row['mobile_no2'];
						$pass=$row['pass'];
						$cast=$row['cast'];
						$subcast=$row['subcast'];
						$age=$row['age'];
						$fit=$row['fit'];
						$inches=$row['inches'];
						$body_weight=$row['body_weight'];
						$skin_tone=$row['skin_tone'];
						$blood_group=$row['blood_group'];
						$spectacles=ucfirst($row['spectacles']);
						$hobbies=ucfirst($row['hobbies']);
						$any_disability=ucfirst($row['any_disability_desc']);
						$any_disability_desc=ucfirst($row['any_disability']);
						$acceptation=ucfirst($row['acceptation']);
						$describe_yourself=ucfirst($row['describe_yourself']);
						$faculty=$row['faculty'];
						$academic_level=$row['academic_level'];
						$college_name=ucfirst($row['college_name']);
						$college_address=ucfirst($row['college_address']);
						$office_contact=$row['office_contact'];
						$job_busi_status=ucfirst($row['job_busi_status']);
						$working_post=ucfirst($row['working_post']);
						$annual_income=$row['annual_income'];
						$work_place_address=ucfirst($row['work_place_address']);
						$father_name=ucfirst($row['father_name']);
						$occupation_father=ucfirst($row['occupation_father']);
						$mother_name=ucfirst($row['mother_name']);
						$occupation_mother=ucfirst($row['occupation_mother']);
						$no_of_brother=$row['no_of_brother'];
						$married_brother=$row['married_brother'];
						$unmarried_brother=$row['unmarried_brother'];
						$no_of_sister=$row['no_of_sister'];
						$married_sister=$row['married_sister'];
						$unmarried_sister=$row['unmarried_sister'];
						$permanent_residential_address=ucfirst($row['permanent_residential_address']);
						$parent_conatct_no=$row['parent_conatct_no'];
						$birth_name=ucfirst($row['birth_name']);
						$own_kul=ucfirst($row['own_kul']);
						$mamkul=ucfirst($row['mamkul']);
						$gotra=ucfirst($row['gotra']);
						$nakshtra=$row['nakshtra'];
						$charan=$row['charan'];
						$rashi=$row['rashi'];
						$nadi=$row['nadi'];
						$gan=$row['gan'];
						$guru=$row['guru'];
						$manglik_status=$row['manglik_status'];
						$marriageType=$row['marriageType'];
						$images = $row['profile_pic'];
					
					}
					?>
                    				 <div class="col-lg-12" style="background-color:#ebecec; margin-top:-4px;">
                    				 	<div class="col-lg-3 small-icon" >
										<?php 
										if($images =="")
										{											
											if($gender=="Bride")
											{
											echo "<img class='img-rounded' style='display: block;width:80px;height:80px;border:5px solid #fff;border-radius:50px;' src=img/bride.png>";
											}
											else if($gender=="Groom")
											{
											echo "<img class='img-rounded' style='display: block;width:80px;height:80px;border:5px solid #fff;border-radius:50px;' src=img/groom.png >";
											}
										}
										else
										{
										?>
										<img src="../profile_photos/<?php echo $images;?>" alt="image" style="display: block;width:80px;height:80px;border:5px solid #fff;border-radius:50px;" class="img-rounded " id="image_list">
										<?php	
										//echo '<img src="data:'.$image_mime_type.';base64,'.base64_encode ($images).'"alt="image" style="display: block;width:80px;height:80px;border:5px solid #fff;border-radius:50px;" class="img-rounded " id="image_list" />';
										} 
										?>	
			                		</div>
			                		<div class="col-lg-7 text-div" >
			                			<h3 class="name-h3" ><?php echo ucwords($first_name)."&nbsp;".ucwords($last_name) ;?> </h3>
			                		</div>
                    				 </div>
                    				 
                    				 <div class="thumbnail menu-bar">
			                         <button id="Personal" style="background-color:#c73828;color: #fff;border:none;padding-left: 20px;padding-right: 20px;" >
			                         <h5> Personal Info</h5>
			                         </button>
			                         <button id="Professional" style="background-color:#225169;color: #fff;border:none;padding-left: 20px;padding-right: 20px;" >
			                         <h5> Professional Info
			                         </h5>
			                         </button>
			                         <button id="Family" style="background-color:#225169;color:#fff;border:none;padding-left: 20px;padding-right: 20px;">
			                         <h5> Family Info
			                         </h5>
			                         </button>
			                         <button id="Astrological" style="background-color:#225169;color: #fff;border:none;padding-left: 20px;padding-right: 20px;">
			                         <h5> Astrological Info
			                         </h5>
			                         </button>
			                         <button id="Gallery" style="background-color:#225169;color: #fff;border:none;padding-left: 20px;padding-right: 20px;">
			                         <h5> Gallery
			                         </h5>
			                         </button>
			                         <?php
			                        	if($marriageType=="divorcee")
			                        	{
			                        ?>
			                        <button id="previousmarriage"  style="background-color:#225169;color:#fff;border:none;padding-left: 20px;padding-right: 20px;">			                         <h5>
			                         	<span id="pmstatus">Divorcee Info</span>
			                         </h5>
			                         </button>
			                        <?php
			                        	}
			                        	else if($marriageType=="widower")
			                        	{
			                        ?>
			                        <button id="previousmarriage"  style="background-color:#225169;color:#fff;border:none;padding-left: 20px;padding-right: 20px;">			                         <h5>
			                         	<span id="pmstatus">Widower Info</span>
			                         </h5>
			                         </button>
			                        <?php
			                        	}
			                        	else if($marriageType=="widow")
			                        	{
			                        ?>
			                        <button id="previousmarriage"  style="background-color:#225169;color:#fff;border:none;padding-left: 20px;padding-right: 20px;">			                         <h5>
			                         	<span id="pmstatus">Widow Info</span>
			                         </h5>
			                         </button>
			                        <?php
			                        	}
			                         ?>
			                         
			                         
			                        </div>
		<div id="Personal_info" style="display:show">
                    <div class="col-lg-12 div-main"  >
                	<div class="col-lg-12" style="padding:5px;margin-bottom:10px" >
                		<div class="col-lg-10">
                			<h2 style="color:#e74c3c; font-family:BerlinSans; font-size:32px;text-align:center;margin-left:100px;"><img src="../img/ICON 1/name-people-person-user-icon--icon-search-engine-1.png" style="width:30px; height:30px;margin-top: -10px;"> Personal Information </h2>
                			
                		</div>
                		
                	</div>
					<div class="col-lg-12" style="display: -webkit-box;">
                    <div class="col-lg-4 div-prof">
						<table class="table table-striped">
							<tr>
								<td style="padding-left: 15px;"><strong>First Name</strong></td>
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
								<td align="right" style="padding-right: 15px;"><strong> <?php echo ucfirst($mobile_no1);?></strong></td>
							</tr>                                   
							<tr>
								<td style="padding-left: 15px;"><strong>Mobile 2</strong></td>
								<td align="right" style="padding-right: 15px;"><strong> <?php echo ucfirst($mobile_no2);?></strong></td>
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
								<td align="right" style="padding-right: 15px;"><strong><?php echo ucfirst($birth_district);?></strong></td>
							</tr>                                   
							<tr>
								<td style="padding-left: 15px;"><strong>Birth State </strong></td>
								<td align="right" style="padding-right: 15px;"><strong><?php echo ($birth_state);?></strong></td>
							</tr>
							<tr>
								<td style="padding-left: 15px;"><strong>Birth Time </strong><br>(24Hr Format)</td>
								<td align="right" style="padding-right: 15px;"><strong><?php echo ($birth_time);?></strong></td>
							</tr>
						</table>
					</div>
					<div class="col-lg-4" style="margin-left:40px">      
						<table class="table table-striped">
							
							<tr>
								<td style="padding-left: 15px;"><strong>Blood Group</strong></td>
								<td align="right" style="padding-right: 15px;"><strong><?php echo $blood_group;?></strong></td>
							</tr>
							<tr>
								<td style="padding-left: 15px;"><strong>Body Weight</strong></td>
								<td align="right" style="padding-right: 15px;"><strong><?php echo $body_weight;?></strong></td>
							</tr>
							<tr>
								<td style="padding-left: 15px;"><strong>Caste</strong></td>
								<td align="right" style="padding-right: 15px;"><strong><?php echo $cast;?></strong></td>
							</tr>
							<tr>
								<td style="padding-left: 15px;"><strong>Sub-Caste</strong></td>
								<td align="right" style="padding-right: 15px;"><strong><?php echo $subcast;?></strong></td>
							</tr>
							<tr>
								<td style="padding-left: 15px;"><strong>Height</strong></td>
								<td align="right" style="padding-right: 15px;"><strong><?php echo $fit."'".$inches."''";?></strong></td>
							</tr>                          
							<tr>
								<td style="padding-left: 15px;"><strong>Spectacles</strong></td>
								<td align="right" style="padding-right: 15px;"><strong><?php echo ucfirst($spectacles);?></strong></td>
							</tr>
							<tr>
								<td style="padding-left: 15px;"><strong>Age</strong></td>
								<td align="right" style="padding-right: 15px;"><strong><?php echo ($age);?></strong></td>
							</tr>
							<tr>
								<td style="padding-left: 15px;"><strong>Skeen Tone</strong></td>
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
								<td style="padding-left: 15px;"><strong>About Him/Her</strong></td>
								<td align="right" style="padding-right: 15px;"><strong><?php echo ucfirst($describe_yourself);?></strong></td>
							</tr>
							<tr>
								<td style="padding-left: 15px;"><strong>Any Disability</strong></td>
								<td align="right" style="padding-right: 15px;"><strong><?php echo ucfirst($any_disability);?></strong></td>
							</tr>
							<tr>
								<td style="padding-left: 15px;"><strong>Any Disability Desc</strong></td>
								<td align="right" style="padding-right: 15px;"><strong><?php echo ucfirst($any_disability_desc);?></strong></td>
							</tr>
							
							
						</table>             
		
					</div>
					</div>
			
			<div class="col-lg-12" style="display: none;">
			<?php 
				 if($marriageType=='Divorce')
				 {
					 echo "<h3 align=center>Divorce</h3>";
					 $id;
					 $show1=mysqli_query($conn,"select * from matrimonial_divorcee where unique_id='$id'  ") or die(mysqli_error($conn));
					while($row1=mysqli_fetch_array($show1))
					{
			?>
                     	<table class="table table-striped"  style="margin-left:110px;font-family:CenturyGothict;width:75%;">
                     		<tr>
					<td style="padding-left: 15px;"><strong>Date of Divorce</strong></td>
					<td align="right" style="padding-right: 15px;"><strong><?php echo date("d-m-Y", strtotime($row1['date_of_divorce']));?></strong></td>
				</tr>
				<tr>
					<td style="padding-left: 15px;"><strong>No. Of Child</strong></td>
					<td align="right" style="padding-right: 15px;"><strong><?php echo $row1['child_status_divorce'];?></strong></td>
				</tr>
				<tr>
					<td style="padding-left: 15px;"><strong>Child Custody Status</strong></td>
					<td align="right" style="padding-right: 15px;"><strong><?php echo $row1['child_custody_status_divorce'];?></strong></td>
				</tr>
				
				<tr>
					<td style="padding-left: 15px;"><strong>Previous Marriage Address</strong></td>
					<td align="right" style="padding-right: 15px;"><strong><?php echo $row1['previous_marriage_address_divorce'];?></strong></td>
				</tr>
	                     	
			</table>
	                <?php
					}
				}
				if($marriageType=='widow')
				{
					echo "<h3 align=center>Widow</h3>";
					$show2=mysqli_query($conn,"select * from matrimonial_widow where unique_id='$id'  ") or die(mysqli_error($conn));
					while($row2=mysqli_fetch_array($show2))
					{
			?>
			<table class="table table-striped"  style="margin-left:110px;font-family:CenturyGothict;width:75%;">
				<tr>
					<td style="padding-left: 15px;"><strong>Previous Marriage Date</strong></td>
					<td align="right" style="padding-right: 15px;"><strong><?php echo date("d-m-Y", strtotime($row2['previous_marriage_date_widow']));?></strong></td>
				</tr>
				<tr>
					<td style="padding-left: 15px;"><strong>Date of Partners Death</strong></td>
					<td align="right" style="padding-right: 15px;"><strong><?php echo date("d-m-Y", strtotime($row2['date_partner_death_widow']));?></strong></td>
				</tr>
				<tr>
					<td style="padding-left: 15px;"><strong>Child Status</strong></td>
					<td align="right" style="padding-right: 15px;"><strong><?php echo $row2['child_status_widow'];?></strong></td>
				</tr>
				
				<tr>
					<td style="padding-left: 15px;"><strong>Previous Marriage Address</strong></td>
					<td align="right" style="padding-right: 15px;"><strong><?php echo $row2['previous_marriage_address_widow'] ?></strong></td>
				</tr>
			</table>
	                <?php
					}
				}
			?>
			</div>

			</div></div>

			<div id="pmar" style="display:none">
			 	<div class="col-lg-12 div-main"  >
                			<div class="col-lg-12" style="padding:5px;margin-bottom:10px" >
						<div class="col-lg-10">
							<h2 style="color:#e74c3c; font-family:BerlinSans; font-size:32px;text-align:center;margin-left:100px;"><img src="../img/ICON 1/divorce.png" style="width:30px; height:30px;margin-top: -10px;"> Previous Marriage Information </h2>
						</div>
					</div>
 
 				<?php 
				 if($marriageType=='divorcee')
				 {					 
					 $id;
					 $show1=mysqli_query($conn,"select matrimonial_divorcee.*,matrimonialall.gender from matrimonial_divorcee inner join  matrimonialall on matrimonial_divorcee.unique_id = matrimonialall.unique_id where matrimonial_divorcee.unique_id = '$id'") or die(mysqli_error($conn));
					 while($row1=mysqli_fetch_array($show1))
					 {
				?>
					<table class="table table-striped"  style="margin-left:110px;font-family:CenturyGothict;width:75%;">
						<tr>
							<td style="padding-left: 15px;"><strong>Previous Marriage Date</strong></td>
							<td align="right" style="padding-right: 15px;"><strong><?php echo date("d-m-Y", strtotime($row1['previous_marriage_date_divorcee']));?></strong></td>
						</tr>
						<tr>
							<td style="padding-left: 15px;"><strong>Date of Divorce</strong></td>
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
						if($row1['gender']=="Bride")
						{ 
						?>
						<tr>
							<td style="padding-left: 15px;"><strong>Previous Marriage Address</strong></td>
							<td align="right" style="padding-right: 15px;"><strong><?php echo $row1['previous_marriage_address_divorce']; ?>
							</strong></td>
						</tr>
						<?php 
						} 
						?>
					</table>
	                     		<?php
					}
				}
				if($marriageType=='widow' || $marriageType=='widower')
				{						 
					 
					  $show2=mysqli_query($conn,"select matrimonial_widow.*,matrimonialall.gender from matrimonial_widow inner join  matrimonialall on matrimonial_widow.unique_id = matrimonialall.unique_id where matrimonial_widow.unique_id = '$id'") or die(mysqli_error($conn));
					while($row2=mysqli_fetch_array($show2))
					{
						 ?>
						 <table class="table table-striped"  style="margin-left:110px;font-family:CenturyGothict;width:75%;">
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
						<?php
					}
				}
				?>
				</table>
			</div>
			</div>


			<div id="Professional_info" style="display:none">
				<div class="col-lg-12 div-main"  >
			 		<div class="col-lg-12" style="padding:5px;margin-bottom:10px" >
			 			<div class="col-lg-10">
							<h2 style="color:#e74c3c; font-family:BerlinSans; font-size:32px;text-align:center;margin-left:100px;"><img src="../img/ICON 1/Professional Information.png" style="width:30px; height:30px;margin-top: -10px;"> Professional Information </h2>
						</div>
					</div>
 
					<table class="table table-striped"  style="margin-left:110px;font-family:CenturyGothict;width:75%;">
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

			<div id="Astrological_info" style="display:none">
				<div class="col-lg-12 div-main"  >
			 		<div class="col-lg-12" style="padding:5px;margin-bottom:10px" >
						<div class="col-lg-10">
							<h2 style="color:#e74c3c; font-family:BerlinSans; font-size:32px;text-align:center;margin-left:100px;"><img src="../img/ICON 1/Astrological Information.png" style="width:30px; height:30px;margin-top: -10px;"> Astrological Information </h2>
							
						</div>
					</div>
			                    	
					<table class="table table-striped"  style="margin-left:110px;font-family:CenturyGothict;width:75%;">
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
							<td style="padding-left: 15px;"><strong>Charan</strong></td>
							<td align="right" style="padding-right: 15px;"><strong><?php echo $charan;?></strong></td>
						</tr>
						<tr>
							<td style="padding-left: 15px;"><strong>Nakshtra</strong></td>
							<td align="right" style="padding-right: 15px;"><strong><?php echo $nakshtra;?></strong></td>
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

			<div id="Family_info" style="display:none">
				<div class="col-lg-12 div-main"  >
					<div class="col-lg-12" style="padding:5px;margin-bottom:10px" >
			 			<div class="col-lg-10">
							<h2 style="color:#e74c3c; font-family:BerlinSans; font-size:32px;text-align:center;margin-left:100px;"><img src="../img/ICON 1/Family Information.png" style="width:30px; height:30px;margin-top: -10px;"> Family Information </h2>
						</div>
					</div>
			                    	
					<table class="table table-striped"  style="margin-left:110px;font-family:CenturyGothict;width:75%;">
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
							<td style="padding-left: 15px;"><strong>Parent Contact Number</strong></td>
							<td align="right" style="padding-right: 15px;"><strong><?php echo $parent_conatct_no;?></strong></td>
						</tr>
						<tr>
							<td style="padding-left: 15px;"><strong>Permanent Residential Address</strong></td>
							<td align="right" style="padding-right: 15px;"><strong><?php echo ucfirst($permanent_residential_address);?></strong></td>
						</tr>
					</table>
				</div>
			</div>

			<div id="Gallery_pic" style="display:none">
				<div class="col-lg-12 div-main"  >
					<div class="col-lg-12" style="padding:5px;margin-bottom:10px" >
						<div class="col-lg-10">
							<h2 style="color:#e74c3c; font-family:BerlinSans; font-size:32px;text-align:center;margin-left:100px;"><img src="img/icon/gallery_icon.png" style="width:30px; height:30px;margin-top: -10px;"> Gallery</h2>
						</div>
					</div>
			
					<table class=""  style="margin-left:110px;">
						<script>
						function bigImg(x) {
						    x.style.height = "300px";
						    x.style.width = "300px";
						}
						
						function normalImg(x) {
						    x.style.height = "250px";
						    x.style.width = "250px";
						}
						</script>
						<?php 
						
						$show=mysqli_query($conn,"select * from matrimonial_gallery where is_del='no' and unique_id='$id' ") or die(mysqli_error($conn));
															
						$image_mime_type="image/png|image/jpeg|image/gif";
						while($row=mysqli_fetch_array($show))
						{
						?>
						<tr style="width:400px;float:left;height: 300px;margin-top:20px">              
							<td style="width: 400px;" align="center">
							<img src="gallery_img/<?php echo $row['img'];?>" width="250px" height="250px">
							</td>
						</tr>
						<?php 
						}
						?>
					</table>
				</div>
			</div>
		    </div>
	      </div>
	</div>
</div>
<p class="text-center" style="height:100px; background-color:#2e3c43;padding-top:30px; color:#ffffff;">Copyright &copy; 2017<a href="http://www.backtechs.com" style="color:#ffffff;"> Backend Technologies PVT.LTD</a>. All Rights Reserved.</p>
</body>

</html>
