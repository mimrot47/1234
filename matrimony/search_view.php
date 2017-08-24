
<?php include "../connect.php";
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
<script>
$(document).ready(function(e) {
    $('#Personal').click(function(e) {
        $('#Personal_info').show();
		$('#Professional_info').hide();
		$('#Family_info').hide();
		$('#Astrological_info').hide();
		$('#Gallery_pic').hide();
		$('#Divorce').hide();
    });
    $('#Professional').click(function(e) {
        $('#Personal_info').hide();
		$('#Professional_info').show();
		$('#Family_info').hide();
		$('#Astrological_info').hide();
		$('#Gallery_pic').hide();
		$('#Divorce').hide();
    });
    $('#Family').click(function(e) {
        $('#Personal_info').hide();
		$('#Professional_info').hide();
		$('#Family_info').show();
		$('#Astrological_info').hide();
		$('#Gallery_pic').hide();
		$('#Divorce').hide();
    });
    $('#Astrological').click(function(e) {
        $('#Personal_info').hide();
		$('#Professional_info').hide();
		$('#Family_info').hide();
		$('#Astrological_info').show();
		$('#Gallery_pic').hide();
		$('#Divorce').hide();
    });
    $('#Gallery').click(function(e) {
        $('#Personal_info').hide();
		$('#Professional_info').hide();
		$('#Family_info').hide();
		$('#Astrological_info').hide();
		$('#Gallery_pic').show();
		$('#Divorce').hide();
    });
	 $('#Divorce').click(function(e) {
        $('#Personal_info').hide();
		$('#Professional_info').hide();
		$('#Family_info').hide();
		$('#Astrological_info').hide();
		$('#Gallery_pic').hide();
		$('#Divorce').show();
    });
});

</script>
	</head>
	<body>
		<div class="container wrapper">   
			<?php include "header.php";?>
			<div class="row content">
				<?php include "menubar.php"; ?>
				<div class="col-lg-9 content-right">
					<div class="col-lg-12" >
                    	
                       <div class="thumbnail"  >
                         <button id="Personal" style="background:none;border:none" >
                         <h5> 
                         	<img src="../img/ICON 1/name-people-person-user-icon--icon-search-engine-1.png"style="width:15px;15px">
                             Personal Information 
                             
                         </h5>
                         </button>|
                         <button id="Professional" style="background:none;border:none" >
                         <h5>
                         	<img src="../img/ICON 1/Professional Information.png" style="width:20px;20px">
                            Professional Information 
                         </h5>
                         </button>|
                         <button id="Family" style="background:none;border:none" >
                         <h5>
                         	<img src="../img/ICON 1/Family Information.png" style="width:25px;25px">
                            Family Information
                         </h5>
                         </button>|
                         <button id="Astrological" style="background:none;border:none" >
                         <h5>
                         	<img src="../img/ICON 1/Astrological Information.png" style="width:20px;20px">
                            Astrological Information
                         </h5>
                         </button>|
                         <button id="Gallery" style="background:none;border:none" >
                         <h5>
                         	<img src="../img/gallery1.png" style="width:20px;20px">
                         	Gallery
                         </h5>
                         </button>
                         
                         
						</div>
<div id="Personal_info" style="display:show">
    <?php
					     
$show=mysql_query("select * from matrimonialall where is_del='no' and unique_id='$id'  ") or die(mysql_error());
										
										$image_mime_type="image/png|image/jpeg|image/gif";
										

				while($row=mysql_fetch_array($show))
				{
						
				 $first_name=$row['first_name'];
$middle_name=$row['middle_name'];
$last_name=$row['last_name'];
//$gender=$_POST['gender'];
$states=$row['states'];
$city=$row['city'];
$address=$row['address'];
$mobile_no1=$row['mobile_no1'];
$email=$row['email'];
$birth_date=$row['birth_date'];
$birth_time=$row['birth_time'];
$day_of_birth=$row['day_of_birth'];
$birth_city=$row['birth_city'];
$birth_district=$row['birth_district'];
$birth_state=$row['birth_state'];
$mobile_no2=$row['mobile_no2'];
$pass=$row['pass'];
$cast=$row['cast'];
$age=$row['age'];
$fit=$row['fit'];
$inches=$row['inches'];
$body_weight=$row['body_weight'];
$skin_tone=$row['skin_tone'];
$blood_group=$row['blood_group'];
$spectacles=$row['spectacles'];
$hobbies=$row['hobbies'];
$any_disability=$row['any_disability'];
$any_disability_desc=$row['any_disability_desc'];
$acceptation=$row['acceptation'];
$describe_yourself=$row['describe_yourself'];
$faculty=$row['faculty'];
$academic_level=$row['academic_level'];
$college_name=$row['college_name'];
$college_address=$row['college_address'];
$office_contact=$row['office_contact'];
$job_busi_status=$row['job_busi_status'];
$working_post=$row['working_post'];
$annual_income=$row['annual_income'];
$work_place_address=$row['work_place_address'];
$father_name=$row['father_name'];
$occupation_father=$row['occupation_father'];
$mother_name=$row['mother_name'];
$occupation_mother=$row['occupation_mother'];
$no_of_brother=$row['no_of_brother'];
$married_brother=$row['married_brother'];
$unmarried_brother=$row['unmarried_brother'];
$no_of_sister=$row['no_of_sister'];
$married_sister=$row['married_sister'];
$unmarried_sister=$row['unmarried_sister'];
$permanent_residential_address=$row['permanent_residential_address'];
//$ancestral_address=$row['ancestral_address'];
$parent_conatct_no=$row['parent_conatct_no'];
$birth_name=$row['birth_name'];
$own_kul=$row['own_kul'];
$mamkul=$row['mamkul'];
$gotra=$row['gotra'];
$nakshtra=$row['nakshtra'];
$charan=$row['charan'];
$rashi=$row['rashi'];
$nadi=$row['nadi'];
$gan=$row['gan'];
$guru=$row['guru'];
$manglik_status=$row['manglik_status'];
  $marriageType=$row['marriageType'];


				}?>
                
                <div class="col-lg-12" style="border-radius:5px; border:1px solid #CCC; padding:5px" >
                <h3 align="center">Personal Information of <?php echo $first_name."&nbsp;".$middle_name."&nbsp;".$last_name ;?>  </h3><br>
                    	<div class="col-lg-6" >
<table class="table table-hover">
<tr><td><b>First Name</b></td><td><?php echo $first_name ?></td></tr>
<tr><td><b>Middle Name</b></td><td><?php echo $middle_name ?> </td></tr>
<tr><td><b>Last Name</b></td><td><?php echo $last_name ?></td></tr>
<tr><td><b>States</b></td><td><?php echo $states ?></td></tr>
<tr><td><b>City</b></td><td><?php echo $city ?></td></tr>                                     
<tr><td><b>Address</b></td><td><?php echo $address ?></td></tr>                                 
<tr><td><b>Mobile</b></td><td><?php echo $mobile_no1 ?></td></tr>                                   
<tr><td><b>Mobile</b></td><td><?php echo $mobile_no2 ?></td></tr>                                 
<tr><td><b>Email</b></td><td><?php echo $email ?></td></tr>                                     
<tr><td><b>Birth Date</b></td><td><?php echo $birth_date ?></td></tr>
<tr><td><b>Birth City</b></td><td><?php echo $birth_city ?></td></tr>                                  
<tr><td><b>Birth District</b></td><td><?php echo $birth_district ?></td></tr>                                    
<tr><td><b>Birth Time</b></td><td><?php echo $birth_time ?></td></tr>
<tr><td></td><td></td></tr>
</table>
</div>
<div class="col-lg-6">      
                   <table class="table table-hover">
  
<tr><td><b>Blood Group</b></td><td><?php echo $blood_group ?></td></tr>
<tr><td><b>Body Weight</b></td><td><?php echo $body_weight ?></td></tr>                                  
<tr><td><b>Cast</b></td><td><?php echo $cast ?></td></tr>                                    
<tr><td><b>Height</b></td><td><?php echo $fit."'".$inches."''" ?></td></tr>                                   
<tr><td><b>Spectacles</b></td><td><?php echo $spectacles ?></td></tr>
<tr><td><b>Age</b></td><td><?php echo $age ?></td></tr>
<tr><td><b>Skin Tone</b></td><td><?php echo $skin_tone ?></td></tr>
<tr><td><b>Acceptation</b></td><td><?php echo $acceptation ?></td></tr>
<tr><td><b>Hobbies</b></td><td><?php echo $hobbies ?></td></tr>
<tr><td><b>About Him/Her</b></td><td><?php echo $describe_yourself ?></td></tr>
<tr><td><b>Any Disability</b></td><td><?php echo $any_disability ?></td></tr>
<tr><td><b>Any Disability Desc</b></td><td><?php echo $any_disability_desc ?></td></tr>
<tr><td></td><td></td></tr>
</table>             

</div><hr>
<div class="col-lg-12">
<?php 
						 	
						
				
				 if($marriageType=='Divorce')
				 {
					 echo "<h3 align=center>Divorce</h3>";
					  $id;
					 $show1=mysql_query("select * from matrimonial_divorcee where unique_id='$id'  ") or die(mysql_error());
				while($row1=mysql_fetch_array($show1))
				{
					 ?>
                     <table class="table table-hover">	
                     <tr><td><b>previous_marriage_date_divorcee of <?php echo $first_name."&nbsp;".$middle_name."&nbsp;".$last_name ;?> s
                     </b></td><td>
					 <?php echo $row1['previous_marriage_date_divorcee'] ?></td></tr>

<tr><td><b>Date of Divorce</b></td><td><?php echo $row1['date_of_divorce']?></td></tr>	

<tr><td><b>Child Status Divorce</b></td><td><?php echo $row1['child_status_divorce'] ?></td></tr>

<tr><td><b>Child Custody Status Divorce</b></td><td><?php echo $row1['child_custody_status_divorce'] ?></td></tr>

<tr><td><b>Previous Marriage Address Divorce</b></td><td><?php echo $row1['previous_marriage_address_divorce'] ?></td></tr>
</table>

                     <?php
				}
					 }
					 if($marriageType=='widow')
					 {
						 echo "<h3 align=center>widow</h3>";
						 
						  $show2=mysql_query("select * from matrimonial_widow where unique_id='$id'  ") or die(mysql_error());
				while($row2=mysql_fetch_array($show2))
				{
					 ?><table class="table table-hover">
             <tr><td><b>Previous Marriage Date Widow</b></td><td><?php echo $row2['previous_marriage_date_widow'] ?></td></tr>

<tr><td><b>Date Partner Death Widow</b></td><td><?php echo $row2['date_partner_death_widow ']?></td></tr>

<tr><td><b>Child Status Widow</b></td><td><?php echo $row2['child_status_widow'] ?></td></tr>

<tr><td><b>Previous Marriage Address Widow</b></td><td><?php echo $row2['previous_marriage_address_widow'] ?></td></tr>
</table>


                     <?php
				}
					 }
				
						 ?>
</div>

</div></div>

<div id="Professional_info" style="display:none">
 <div class="col-lg-12" style="border-radius:5px; border:1px solid #CCC; padding:5px" >
 <h3 align="center">Professional Information of <?php echo $first_name."&nbsp;".$middle_name."&nbsp;".$last_name ;?> </h3><br>
<table class="table table-hover">
<tr><td><b>Faculty</b></td><td><?php echo $faculty ?></td></tr>
<tr><td><b>Academic Level</b></td><td><?php echo $academic_level ?></td></tr>
<tr><td><b>College Name</b></td><td><?php echo $college_name ?></td></tr>
<tr><td><b>College Address</b></td><td><?php echo $college_address ?></td></tr>
<tr><td><b>Job Busi Status</b></td><td><?php echo $job_busi_status ?></td></tr>
<tr><td><b>Working Post</b></td><td><?php echo $working_post ?></td></tr>
<tr><td><b>Work Place Address</b></td><td><?php echo $work_place_address ?></td></tr>
<tr><td><b>Office Contact</b></td><td><?php echo $office_contact?></td></tr>
<tr><td><b>Annual Income</b></td><td><?php echo $annual_income ?></td></tr>
<tr><td></td><td></td></tr>
</table>
</div>
</div>
<div id="Family_info" style="display:none">
<div class="col-lg-12" style="border-radius:5px; border:1px solid #CCC; padding:5px" >
                    	<h3 align="center">Family Information of <?php echo $first_name."&nbsp;".$middle_name."&nbsp;".$last_name ;?> </h3><br>
<table class="table table-hover">
<tr><td><b>Father Name</b></td><td><?php echo $father_name ?></td></tr>
<tr><td><b>Occupation Father</b></td><td><?php echo $occupation_father ?></td></tr>
<tr><td><b>Mother Name</b></td><td><?php echo $mother_name ?></td></tr>
<tr><td><b>Occupation Mother</b></td><td><?php echo $occupation_mother ?></td></tr>
<tr><td><b>Number of Brother</b></td><td><?php echo $no_of_brother ?></td></tr>
<tr><td><b>Married Brother</b></td><td><?php echo $married_brother ?></td></tr>
<tr><td><b>Unmarried Brother</b></td><td><?php echo $unmarried_brother ?></td></tr>
<tr><td><b>Number of Sister</b></td><td><?php echo $no_of_sister ?></td></tr>
<tr><td><b>Married Sister</b></td><td><?php echo $married_sister ?></td></tr>
<tr><td><b>Unmarried Sister</b></td><td><?php echo $unmarried_sister ?></td></tr>
<tr><td><b>Parent Conatct Number</b></td><td><?php echo $parent_conatct_no ?></td></tr>
<tr><td><b>Permanent Residential Address</b></td><td><?php echo $permanent_residential_address ?></td></tr>
<tr><td></td><td></td></tr>
</table>
</div>
</div>


<div id="Astrological_info" style="display:none">
<div class="col-lg-12" style="border-radius:5px; border:1px solid #CCC; padding:5px" >
                    	<h3 align="center">Astrological Information of <?php echo $first_name."&nbsp;".$middle_name."&nbsp;".$last_name ;?> </h3><br>
<table class="table table-hover">
<tr><td><b>Birth Name</b></td><td><?php echo $birth_name ?></td></tr>
<tr><td><b>OwnKul</b></td><td><?php echo $own_kul ?></td></tr>
<tr><td><b>MamaKul</b></td><td><?php echo $mamkul ?></td></tr>
<tr><td><b>Gotra</b></td><td><?php echo $gotra ?></td></tr>
<tr><td><b>Charan</b></td><td><?php echo $charan ?></td></tr>
<tr><td><b>Nakshtra</b></td><td><?php echo $nakshtra ?></td></tr>
<tr><td><b>Nadi</b></td><td><?php echo $nadi ?></td></tr>
<tr><td><b>Guru</b></td><td><?php echo $guru ?></td></tr>
<tr><td><b>Rashi</b></td><td><?php echo $rashi ?></td></tr>
<tr><td><b>Manglik Status</b></td><td><?php echo $manglik_status ?></td></tr>
<tr><td><b>Gan</b></td><td><?php echo $gan ?></td></tr>
<tr><td></td><td></td></tr>
</table>
</div>
</div>
<div id="Gallery_pic" style="display:none">
<div class="col-lg-12" style="border-radius:5px; border:1px solid #CCC; padding:5px" >

<h3 align="center">Gallery Images</h3><br>
<table class="table table-hover" >
<script>
function bigImg(x) {
    x.style.height = "400px";
    x.style.width = "400px";
}

function normalImg(x) {
    x.style.height = "250px";
    x.style.width = "250px";
}
</script>
	<?php 
	
	$show=mysql_query("select * from matrimonial_gallery where is_del='no' and unique_id='$id' ") or die(mysql_error());
										
										$image_mime_type="image/png|image/jpeg|image/gif";
										

				while($row=mysql_fetch_array($show))
				{?>
  <tr style="width:400px;float:left;">              
<td >
<?php
	 echo '<img src="data:'.$image_mime_type.';base64,'.base64_encode($row['img']).'" 
		 width="250px" onmouseover="bigImg(this)" onmouseout="normalImg(this)"  />'; 
				?>
</td></tr>
<?php }?>
</table>
</div>
</div>



                    </div>
					<div class="row selected-classifieds">
                      
					</div>
				</div>
			</div>
			<div class="footer">
				<?php include "footer.php"; ?>
			</div>
		</div>
		<!-- JavaScript -->
		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.slides.min.js"></script>
		<script src="js/CZSale.js"></script>
	</body>

</html>