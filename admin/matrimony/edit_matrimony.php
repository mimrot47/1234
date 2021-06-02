<?php
include'../connect.php';
error_reporting(0);
include'common_function_matrimony.php';
?>

<html lang="en">

<?php
links();
?>

<body>

    <div id="wrapper">

        <!-- Navigation -->
       <?php
       nav();
	   ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"> Edit Data Of Matrimony</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            
            <div class="row">
                <div class="col-lg-10" style="margin-left: 170px;">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Edit Data of Matrimony
                        </div>
                        <div class="panel-body">
                         
                            <div class="row">
                           
                                <div class="col-lg-10">
                                    
                       <?php
									
							$candidate_id=$_GET['candidate_id'];
					
                    $show123=mysqli_query($conn,"select * from matrimonialall where candidate_id='$candidate_id'") or die(mysqli_error($conn));	
					
					$image_mime_type="image/png|image/jpeg|image/gif"; 
					  
					  while($row123=mysqli_fetch_array($show123))
					  {
							$first_name=$row123['first_name'];
	
	 						$middle_name=$row123['middle_name'];
	 
	  						$last_name=$row123['last_name'];
	
	 						$gender=$row123['gender'];
	 
	  						$states=$row123['states'];
	
	 						$city=$row123['city'];
	 
	  						$address=$row123['address'];
	
	 						$mobile_no1=$row123['mobile_no1'];
	 
	  						$email=$row123['email'];
	
	 						$birth_date=$row123['birth_date'];
	 
	  						$birth_time=$row123['birth_time'];
	
	 						$day_of_birth=$row123['day_of_birth'];
	 
	  						$birth_city=$row123['birth_city'];
	
	 						$birth_district=$row123['birth_district'];
	 
	  						$birth_state=$row123['birth_state'];
	
	 						$mobile_no2=$row123['mobile_no2'];
	 						
							$age=$row123['age'];
	
	  						$pass=$row123['pass'];
										
	 						$cast=$row123['cast'];
	 
	  						$fit=$row123['fit'];
							
							$inches=$row123['inches'];
	
	 						$body_weight=$row123['body_weight'];
	 
	  						$skin_tone=$row123['skin_tone'];
	
	 						$blood_group=$row123['blood_group'];
	 
	  						$spectacles=$row123['spectacles'];
	
	 						$hobbies=$row123['hobbies'];
	 
	  						$any_disability=$row123['any_disability'];
							
							$any_disability_desc=$row123['any_disability_desc'];
							
	 						$acceptation=$row123['acceptation'];
	 
	  						$describe_yourself=$row123['describe_yourself'];
	
	 						$faculty=$row123['faculty'];
	 
	  						$academic_level=$row123['academic_level'];
	
	 						$college_name=$row123['college_name'];
	 
	  						$college_address=$row123['college_address'];
	
	 						$office_contact=$row123['office_contact'];
	 
	  						$job_busi_status=$row123['job_busi_status'];
	
	 						$working_post=$row123['working_post'];
	 
	  						$annual_income=$row123['annual_income'];
	
	 						$work_place_address=$row123['work_place_address'];
	 
	 						$father_name=$row123['father_name'];
	
	 						$occupation_father=$row123['occupation_father'];
	 
	  						$mother_name=$row123['mother_name'];
	
	 						$occupation_mother=$row123['occupation_mother'];
	 
	  						
							$no_of_brother=$row123['no_of_brother'];
	
	 						$married_brother=$row123['married_brother'];
							
							$unmarried_brother=$row123['unmarried_brother'];
	
	 						$no_of_sister=$row123['no_of_sister'];
							
							$married_sister=$row123['married_sister'];
	
	 						$unmarried_sister=$row123['unmarried_sister'];
							
		
		
	  						$permanent_residential_address=$row123['permanent_residential_address'];
							
							$parent_conatct_no=$row123['parent_conatct_no'];
							
							$birth_name=$row123['birth_name'];
	 
	  						$own_kul=$row123['own_kul'];
	 
	  						$mamkul=$row123['mamkul'];
	
	  						$gotra=$row123['gotra'];
	 
	  						$nakshtra=$row123['nakshtra'];
	
	  						$charan=$row123['charan'];
	 
	  						$rashi=$row123['rashi'];
	
	  						$nadi=$row123['nadi'];

	  						$gan=$row123['gan'];
	
	  						$guru=$row123['guru'];
	 
	  						$manglik_status=$row123['manglik_status'];
	
	  						$marriageType=$row123['marriageType'];
							
							$profile_pic=$row123['profile_pic'];
							
							
					  }
						 ?>
									
<form action="update_matrimony.php" method="post" enctype="multipart/form-data">

<div class="form-horizontal form-bordered">

<div class="form-group">
												

<input type="hidden" name="candidate_id" value="<?php echo $candidate_id;?>" /><br>

<input type="hidden" name="profile_pic" value="<?php echo $profile_pic; ?>" />
<!--<input type="hidden" name="img1" value="<?php //echo $img1; ?>" />
<input type="hidden" name="img2" value="<?php //echo $img2; ?>" />
<input type="hidden" name="img3" value="<?php //echo $img3; ?>" />
<input type="hidden" name="img4" value="<?php //echo $img4; ?>" />
-->
<center> <h3> <b>Personal Information : </b> </h3> </center>
<br>
<label class="col-md-3 control-label">first_name : </label> <div class="col-md-8">  <input type="text" name="first_name" value="<?php echo $first_name;?>" class="form-control"  /> </div> <br /><br /><br />

<label class="col-md-3 control-label">middle_name : </label> <div class="col-md-8">  <input type="text" name="middle_name" value="<?php echo $middle_name;?>" class="form-control"  /> </div> <br /><br /><br />

<label class="col-md-3 control-label">last_name : </label> <div class="col-md-8">  <input type="text" name="last_name" value="<?php echo $last_name;?>" class="form-control"  /> </div> <br /><br /><br />

<label class="col-md-3 control-label">gender : </label> <div class="col-md-8">  <input type="text" name="gender" value="<?php echo $gender;?>" class="form-control"  /> </div> <br /><br /><br />

<label class="col-md-3 control-label">states : </label> <div class="col-md-8">  <input type="text" name="states" value="<?php echo $states;?>" class="form-control"  /> </div> <br /><br /><br />

<label class="col-md-3 control-label">city : </label> <div class="col-md-8">  <input type="text" name="city" value="<?php echo $city;?>" class="form-control"  /> </div> <br /><br /><br />

<label class="col-md-3 control-label">address : </label> <div class="col-md-8">  <input type="text" name="address" value="<?php echo $address;?>" class="form-control"  /> </div> <br /><br /><br />

<label class="col-md-3 control-label">mobile_no1 : </label> <div class="col-md-8">  <input type="text" name="mobile_no1" value="<?php echo $mobile_no1;?>" class="form-control"  /> </div> <br /><br /><br />

<label class="col-md-3 control-label">email : </label> <div class="col-md-8">  <input type="text" name="email" value="<?php echo $email;?>" class="form-control"  /> </div> <br /><br /><br />

<label class="col-md-3 control-label">birth_date : </label> <div class="col-md-8">  <input type="text" name="birth_date" value="<?php echo $birth_date;?>" class="form-control"  /> </div> <br /><br /><br />

<label class="col-md-3 control-label">birth_time : </label> <div class="col-md-8">  <input type="text" name="birth_time" value="<?php echo $birth_time;?>" class="form-control"  /> </div> <br /><br /><br />

<label class="col-md-3 control-label">day_of_birth : </label> <div class="col-md-8">  <input type="text" name="day_of_birth" value="<?php echo $day_of_birth;?>" class="form-control"  /> </div> <br /><br /><br />

<label class="col-md-3 control-label">birth_city : </label> <div class="col-md-8">  <input type="text" name="birth_city" value="<?php echo $birth_city;?>" class="form-control"  /> </div> <br /><br /><br />

<label class="col-md-3 control-label">birth_district : </label> <div class="col-md-8">  <input type="text" name="birth_district" value="<?php echo $birth_district;?>" class="form-control"  /> </div> <br /><br /><br />

<label class="col-md-3 control-label">birth_state : </label> <div class="col-md-8">  <input type="text" name="birth_state" value="<?php echo $birth_state;?>" class="form-control"  /> </div> <br /><br /><br />

<label class="col-md-3 control-label">mobile_no2 : </label> <div class="col-md-8">  <input type="text" name="mobile_no2" value="<?php echo $mobile_no2;?>" class="form-control"  /> </div> <br /><br /><br />

<label class="col-md-3 control-label">pass : </label> <div class="col-md-8">  <input type="text" name="pass" value="<?php echo $pass;?>" class="form-control"  /> </div> <br /><br /><br />

<label class="col-md-3 control-label">Cast : </label> <div class="col-md-8">  <input type="text" name="cast" value="<?php echo $cast;?>" class="form-control"  /> </div> <br /><br /><br />

<label class="col-md-3 control-label">age : </label> <div class="col-md-8">  <input type="text" name="age" value="<?php echo $age;?>" class="form-control"  /> </div> <br /><br /><br />

<label class="col-md-3 control-label">Fit : </label> <div class="col-md-8">  <input type="text" name="fit" value="<?php echo $fit;?>" class="form-control"  /> </div> <br /><br /><br />

<label class="col-md-3 control-label">Inches : </label> <div class="col-md-8">  <input type="text" name="inches" value="<?php echo $inches;?>" class="form-control"  /> </div> <br /><br /><br />

<label class="col-md-3 control-label">body_weight : </label> <div class="col-md-8">  <input type="text" name="body_weight" value="<?php echo $body_weight;?>" class="form-control"  /> </div> <br /><br /><br />

<label class="col-md-3 control-label">skin_tone : </label> <div class="col-md-8">  <input type="text" name="skin_tone" value="<?php echo $skin_tone;?>" class="form-control"  /> </div> <br /><br /><br />

<label class="col-md-3 control-label">blood_group : </label> <div class="col-md-8">  <input type="text" name="blood_group" value="<?php echo $blood_group;?>" class="form-control"  /> </div> <br /><br /><br />

<label class="col-md-3 control-label">spectacles : </label> <div class="col-md-8">  <input type="text" name="spectacles" value="<?php echo $spectacles;?>" class="form-control"  /> </div> <br /><br /><br />

<label class="col-md-3 control-label">hobbies : </label> <div class="col-md-8">  <input type="text" name="hobbies" value="<?php echo $hobbies;?>" class="form-control"  /> </div> <br /><br /><br />

<label class="col-md-3 control-label">any_disability : </label> <div class="col-md-8">  <input type="text" name="any_disability_desc" value="<?php echo $any_disability_desc;?>" class="form-control"  /> </div> <br /><br /><br />

<label class="col-md-3 control-label">any_disability Description : </label> <div class="col-md-8">  <input type="text" name="any_disability" value="<?php echo $any_disability;?>" class="form-control"  /> </div> <br /><br /><br />

<label class="col-md-3 control-label">acceptation : </label> <div class="col-md-8">  <input type="text" name="acceptation" value="<?php echo $acceptation;?>" class="form-control"  /> </div> <br /><br /><br />

<label class="col-md-3 control-label">describe_yourself : </label> <div class="col-md-8">  <input type="text" name="describe_yourself" value="<?php echo $describe_yourself;?>" class="form-control"  /> </div> <br /><br /><br />

<center> <h3> <b>Professional Information : </b> </h3> </center>
<br>


<label class="col-md-3 control-label">faculty : </label> <div class="col-md-8">  <input type="text" name="faculty" value="<?php echo $faculty;?>" class="form-control"  /> </div> <br /><br /><br />

<label class="col-md-3 control-label">academic_level : </label> <div class="col-md-8">  <input type="text" name="academic_level" value="<?php echo $academic_level;?>" class="form-control"  /> </div> <br /><br /><br />

<label class="col-md-3 control-label">college_name : </label> <div class="col-md-8">  <input type="text" name="college_name" value="<?php echo $college_name;?>" class="form-control"  /> </div> <br /><br /><br />

<label class="col-md-3 control-label">college_address : </label> <div class="col-md-8">  <input type="text" name="college_address" value="<?php echo $college_address;?>" class="form-control"  /> </div> <br /><br /><br />

<label class="col-md-3 control-label">office_contact : </label> <div class="col-md-8">  <input type="text" name="office_contact" value="<?php echo $office_contact;?>" class="form-control"  /> </div> <br /><br /><br />

<label class="col-md-3 control-label">job_busi_status : </label> <div class="col-md-8">  <input type="text" name="job_busi_status" value="<?php echo $job_busi_status;?>" class="form-control"  /> </div> <br /><br /><br />

<label class="col-md-3 control-label">working_post : </label> <div class="col-md-8">  <input type="text" name="working_post" value="<?php echo $working_post;?>" class="form-control"  /> </div> <br /><br /><br />

<label class="col-md-3 control-label">annual_income : </label> <div class="col-md-8">  <input type="text" name="annual_income" value="<?php echo $annual_income;?>" class="form-control"  /> </div> <br /><br /><br />

<label class="col-md-3 control-label">work_place_address : </label> <div class="col-md-8">  <input type="text" name="work_place_address" value="<?php echo $work_place_address;?>" class="form-control"  /> </div> <br /><br /><br />

<center> <h3> <b>Family Information : </b> </h3> </center>
<br>

<label class="col-md-3 control-label">father_name : </label> <div class="col-md-8">  <input type="text" name="father_name" value="<?php echo $father_name;?>" class="form-control"  /> </div> <br /><br /><br />

<label class="col-md-3 control-label">occupation_father : </label> <div class="col-md-8">  <input type="text" name="occupation_father" value="<?php echo $occupation_father;?>" class="form-control"  /> </div> <br /><br /><br />

<label class="col-md-3 control-label">mother_name : </label> <div class="col-md-8">  <input type="text" name="mother_name" value="<?php echo $mother_name;?>" class="form-control"  /> </div> <br /><br /><br />

<label class="col-md-3 control-label">occupation_mother : </label> <div class="col-md-8">  <input type="text" name="occupation_mother" value="<?php echo $occupation_mother;?>" class="form-control"  /> </div> <br /><br /><br />



<label class="col-md-3 control-label">no_of_brother : </label> <div class="col-md-8">  <input type="text" name="no_of_brother" value="<?php echo $no_of_brother;?>" class="form-control"  /> </div> <br /><br /><br />

<label class="col-md-3 control-label">married_brother : </label> <div class="col-md-8">  <input type="text" name="married_brother" value="<?php echo $married_brother;?>" class="form-control"  /> </div> <br /><br /><br />

<label class="col-md-3 control-label">unmarried_brother	 : </label> <div class="col-md-8">  <input type="text" name="unmarried_brother" value="<?php echo $unmarried_brother;?>" class="form-control"  /> </div> <br /><br /><br />

<label class="col-md-3 control-label">no_of_sister : </label> <div class="col-md-8">  <input type="text" name="no_of_sister" value="<?php echo $no_of_sister;?>" class="form-control"  /> </div> <br /><br /><br />

<label class="col-md-3 control-label">married_sister : </label> <div class="col-md-8">  <input type="text" name="married_sister" value="<?php echo $married_sister;?>" class="form-control"  /> </div> <br /><br /><br />

<label class="col-md-3 control-label">unmarried_sister : </label> <div class="col-md-8">  <input type="text" name="unmarried_sister" value="<?php echo $unmarried_sister;?>" class="form-control"  /> </div> <br /><br /><br />




<label class="col-md-3 control-label">permanent_residential_address : </label> <div class="col-md-8">  <input type="text" name="permanent_residential_address" value="<?php echo $permanent_residential_address;?>" class="form-control"  /> </div> <br /><br /><br />


<label class="col-md-3 control-label">parent_conatct_no : </label> <div class="col-md-8">  <input type="text" name="parent_conatct_no" value="<?php echo $parent_conatct_no;?>" class="form-control"  /> </div> <br /><br /><br />

<label class="col-md-3 control-label">birth_name : </label> <div class="col-md-8">  <input type="text" name="birth_name" value="<?php echo $birth_name;?>" class="form-control"  /> </div> <br /><br /><br />

<label class="col-md-3 control-label">own_kul : </label> <div class="col-md-8">  <input type="text" name="own_kul" value="<?php echo $own_kul;?>" class="form-control"  /> </div> <br /><br /><br />

<label class="col-md-3 control-label">mamkul : </label> <div class="col-md-8">  <input type="text" name="mamkul" value="<?php echo $mamkul;?>" class="form-control"  /> </div> <br /><br /><br />

<label class="col-md-3 control-label">gotra : </label> <div class="col-md-8">  <input type="text" name="gotra" value="<?php echo $gotra;?>" class="form-control"  /> </div> <br /><br /><br />

<label class="col-md-3 control-label">nakshtra : </label> <div class="col-md-8">  <input type="text" name="nakshtra" value="<?php echo $nakshtra;?>" class="form-control"  /> </div> <br /><br /><br />

<label class="col-md-3 control-label">charan : </label> <div class="col-md-8">  <input type="text" name="charan" value="<?php echo $charan;?>" class="form-control"  /> </div> <br /><br /><br />

<label class="col-md-3 control-label">rashi : </label> <div class="col-md-8">  <input type="text" name="rashi" value="<?php echo $rashi;?>" class="form-control"  /> </div> <br /><br /><br />

<label class="col-md-3 control-label">nadi : </label> <div class="col-md-8">  <input type="text" name="nadi" value="<?php echo $nadi;?>" class="form-control"  /> </div> <br /><br /><br />

<label class="col-md-3 control-label">gan : </label> <div class="col-md-8">  <input type="text" name="gan" value="<?php echo $gan;?>" class="form-control"  /> </div> <br /><br /><br />

<label class="col-md-3 control-label">guru : </label> <div class="col-md-8">  <input type="text" name="guru" value="<?php echo $guru;?>" class="form-control"  /> </div> <br /><br /><br />

<label class="col-md-3 control-label">manglik_status : </label> <div class="col-md-8">  <input type="text" name="manglik_status" value="<?php echo $manglik_status;?>" class="form-control"  /> </div> <br /><br /><br />

<label class="col-md-3 control-label">marriageType : </label> <div class="col-md-8">  <input type="text" name="marriageType" value="<?php echo $marriageType;?>" class="form-control"  /> </div> <br /><br /><br />


<!--<label class="col-md-3 control-label">Profile Photo : </label> <div class="col-md-8"><input type="file" class="form-control" name="profile_pic" value='<img src="<?php //echo 'matrimony_img/'.$profile_pic ?>" style="width:100px;height:100px;">'> </div> <br /><br /><br />

<label class="col-md-3 control-label">Image1 : </label> <div class="col-md-8"><input type="file" class="form-control" name="img1" value='<img src="<?php //echo 'matrimony_img/'.$img1 ?>" style="width:100px;height:100px;">'> </div> <br /><br /><br />

<label class="col-md-3 control-label">Image2 : </label> <div class="col-md-8"><input type="file" class="form-control" name="img2" value='<img src="<?php //echo 'matrimony_img/'.$img2 ?>" style="width:100px;height:100px;">'> </div> <br /><br /><br />

<label class="col-md-3 control-label">Image3 : </label> <div class="col-md-8"><input type="file" class="form-control" name="img3" value='<img src="<?php //echo 'matrimony_img/'.$img3 ?>" style="width:100px;height:100px;">'> </div> <br /><br /><br />

<label class="col-md-3 control-label">Image4 : </label> <div class="col-md-8"><input type="file" class="form-control" name="img4" value='<img src="<?php //echo 'matrimony_img/'.$img4 ?>" style="width:100px;height:100px;">'> </div> <br /><br /><br />
-->


										 <?php if($profile_pic!=""){?>
                                              <center><img src="<?php echo 'matrimony_img/'.$profile_pic ?>" style="width:100px;height:100px;"></center><br><br>
				                             <?php }
                                             else echo "<center>No Image Added !</center>";
											 ?>                                            
                                            <div class="form-group">
												<label class="col-md-3 control-label" for="inputDefault">Profile Photo : </label>
												<div class="col-md-6">
                                                 <input type="hidden" name="hidden_image_name" value="<?php echo $profile_pic;?>">
													<input type="file" class="form-control" id="profile_pic"  name="profile_pic">
												</div>
											</div>
                                            
                                            
                                           


<div class="col-md-6"><input type="submit" name="submit" style="margin-left: 250px;"  class="btn btn-warning"/> </div> <br />


</div></div>
</form>
									





                             </div>
                               
                              
                               
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
