<?php include "../connect.php";
session_start();
 $email=$_SESSION['myusername'];

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
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

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
		</style>
        <script>
function countAge(object, birthDay){
      now = new Date();
      bD = birthDay.value.split('/');
      if(bD.length==3){
              born = new Date(bD[2], bD[1]*1-1, bD[0]);
            years = new Date(now.getTime() - born.getTime());
            base = new Date(0);
            document.all['age'].value = years.getFullYear()-base.getFullYear();
      }
}

</script>

	</head>
	<body>
		<div class="container wrapper">   
			<?php include "header.php";?>
			<div class="row content">
				<?php include "menubar.php"; ?>
				<div class="col-lg-9 content-right">
					
                    
					<div class="row selected-classifieds">
                    
						
                                
                                <div class="col-lg-12" style="border-radius:5px; border:1px solid #CCC; padding:5px" >

<h4><img src="../img/ICON 1/name-people-person-user-icon--icon-search-engine-1.png" style="width:50px; height:50px">
Update Personal Information </h4>


<div class="dataTable_wrapper"><hr>
                                	<form action="update_personal_info.php" method="post" enctype="multipart/form-data">
                                    <?php
					    
$show=mysql_query("select * from matrimonialall where is_del='no' and email='$email'  ") or die(mysql_error());
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
				}?>
                                          <div class="form-group" style="padding-bottom:30px">
                                    <label class="col-sm-4 control-label" for="first_name">First Name</label>  
                                    <div class="col-sm-8">
                                        <input id="first_name" name="first_name" type="text" value="<?php echo $first_name; ?>" class="form-control input-md" >
                                    </div>
                                </div>
                                <!-- Text input-->
                                <div class="form-group" style="padding-bottom:30px">
                                    <label class="col-sm-4 control-label" for="middle_name">Middle Name</label>  
                                    <div class="col-sm-8">
                                        <input id="middle_name" name="middle_name" type="text" value="<?php echo $middle_name; ?>" class="form-control input-md">
                                    </div>
                                </div>
                                <div class="form-group" style="padding-bottom:30px">
                                    <label class="col-sm-4 control-label" for="last_name">Last Name </label>  
                                    <div class="col-sm-8">
                                        <input id="last_name" name="last_name" type="text"value="<?php echo $last_name; ?>"  class="form-control input-md" >
                                    </div>
                                </div>
                                
                                <div class="form-group" style="padding-bottom:30px">
                                    <label class="col-sm-4 control-label" for="address">States</label>
                                    <div class="col-sm-8">    
                                    	<select class="form-control" id="states" name="states" >
                                        	<option><?php echo $states; ?></option>
                                        	<option>Andrapradesh</option>
                                            <option>Gujrat</option>
                                            <option>Karnatka</option>
                                            <option>Madhyapradesh</option>
                                            <option>Maharashtra</option>
                                            <option>Rajasthan</option>
                                            <option>Tamilnadu</option>
                                        </select>                 
                                    </div>
                                </div>
                                <div class="form-group" style="padding-bottom:30px">
                                    <label class="col-sm-4 control-label" for="address">City</label>
                                    <div class="col-sm-8">                     
                                        <select class="form-control" id="city" name="city">
                                        	<option><?php echo $city; ?></option>
                                             <?php 
						 $show1=mysql_query("select * from city ORDER BY city  ASC");
									
							while($rw1=mysql_fetch_array($show1))
								{ 
								echo"<option  value='".$rw1['city']."'>"; echo $rw1['city']; echo"</option>";
								}
									
                   ?>
                                        </select>  
                                    </div>
                                </div>
                                <div class="form-group" style="padding-bottom:70px">
                                    <label class="col-sm-4 control-label" for="address">Address</label>
                                    <div class="col-sm-8">                     
                                        <textarea class="form-control" id="address" name="address"rows="0"><?php echo $address; ?></textarea>
                                    </div>
                                </div>
                                <div class="form-group" style="padding-bottom:30px">
                                    <label class="col-sm-4 control-label" for="mobile_no1">Mobile Number 1</label>
                                    <div class="col-sm-8">
                                        <input id="mobile_no1" name="mobile_no1" type="text" maxlength="10" value="<?php echo $mobile_no1; ?>" class="form-control input-md" max="12" >
                                    </div>
                                </div>
                                <div class="form-group" style="padding-bottom:30px">
                                    <label class="col-sm-4 control-label" for="mobile_no2">Mobile Number 2</label>
                                    <div class="col-sm-8">
                                        <input id="mobile_no2" name="mobile_no2" type="text" maxlength="10" value="<?php echo $mobile_no2; ?>" class="form-control input-md" >
                                    </div>
                                </div>
                               
                           
                            
                                <div class="form-group" style="padding-bottom:30px">
                                    <label class="col-sm-4 control-label" for="birth_date">Date of Birth </label>  
                                    <div class="col-sm-8">
                                        <input type="text" id="birth_date" placeholder="DD/MM/YYYY" name="DATEOFBIRTH" value="<?php echo $birth_date; ?>" class="form-control input-md" onChange="countAge(this.form, this);"> 
                                    </div>
                                </div>
                                <div class="form-group" style="padding-bottom:50px">
                                    <label class="col-sm-4 control-label" for="birth_time">Time of Birth(24 hrs Format)</label>  
                                    <div class="col-sm-8">
                                        <input id="birth_time" name="birth_time" type="time" value="<?php echo $birth_time; ?>" class="form-control input-md"> 
                                    </div>
                                </div>
                                <div class="form-group" style="padding-bottom:30px">
                                    <label class="col-sm-4 control-label" for="day_of_birth">Day of Birth </label>
                                    <div class="col-sm-8">
                                        <select id="day_of_birth" name="day_of_birth" class="form-control">
                                        <option><?php echo $day_of_birth; ?></option>
                                            <option value="Sunday">Sunday</option>
                                            <option value="Monday">Monday</option>
                                            <option value="Tuesday">Tuesday</option>
                                            <option value="Wednesday">Wednesday</option>
                                            <option value="Thursday">Thursday</option>
                                            <option value="Friday">Friday</option>
                                            <option value="Saturday">Saturday</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group" style="padding-bottom:30px">
                                    <label class="col-sm-4 control-label" for="birth_city">Place of Birth </label>  
                                    <div class="col-sm-8">
                                        <input id="birth_city" name="birth_city" type="text" value="<?php echo $birth_city; ?>" class="form-control input-md" >
                                    </div>
                                </div>
                                <div class="form-group" style="padding-bottom:30px">
                                    <label class="col-sm-4 control-label" for="birth_district">Birth Place District</label>  
                                    <div class="col-sm-8">
                                        <input id="birth_district" name="birth_district" type="text" value="<?php echo $birth_district; ?>"  class="form-control input-md" >
                                    </div>
                                </div>
                                <div class="form-group" style="padding-bottom:30px">
                                    <label class="col-sm-4 control-label" for="birth_state">Birth Place State  </label>  
                                    <div class="col-sm-8">
                                       <!-- <input id="birth_state" name="birth_state" type="text" value="<?php echo $birth_state; ?>"  class="form-control input-md" >-->
										 <select class="form-control" id="birth_state" required name="birth_state">
                                        	<option>Select</option>
                                        	<?php 
											 $show1=mysql_query("select DISTINCT state from city ORDER BY state  ASC");
														
												while($rw1=mysql_fetch_array($show1))
													{ 
											?>
											<option value="<?php echo $rw1['state'];?>"<?php if($birth_state==$rw1['state']) echo "selected";?>><?php echo $rw1['state'];?></option>
											<?php
													
													}
									   ?>
                                        </select>
                                    </div>
                                    </div>
                                     
                                
                                <!-- Text input-->
                                <div class="form-group" style="padding-bottom:30px">
                                    <label class="col-sm-4 control-label" for="age">Age</label>  
                                    <div class="col-md-8">
                                        <input type="text" readonly name="age"  id="age" value="<?php echo $age; ?>"  class="form-control input-md">
                                    </div>
                                </div>

                                <!-- Text input-->
                                <div class="form-group" style="padding-bottom:50px">
                                    <label class="col-sm-4 control-label" for="height">Height</label>  
                                    <div class="col-md-4" btn btn-success>Fit
                                        <input  id="height" name="fit" type="text" value="<?php echo $fit; ?>" class="form-control input-md">
                                    </div>
                                    <div class="col-md-4" btn btn-success>Inches
                                        <input  id="height" name="inches" type="text" value="<?php echo $inches; ?>"  class="form-control input-md">
                                    </div>
                                </div>
                                <div class="form-group" style="padding-bottom:30px">
                                    <label class="col-sm-4 control-label" for="body_weight">Weight (kg) </label>  
                                    <div class="col-md-8">
                                        <input type="text" class="form-control input-md" id="body_weight" value="<?php echo $body_weight; ?>" name="body_weight" placeholder="eg.50">
                                        	 
                                    </div>
                                </div>
                                <div class="form-group" style="padding-bottom:30px">
                                    <label class="col-sm-4 control-label" for="skin_tone">Skin tone  </label>  
                                    <div class="col-md-8">
                                        <!--<input id="skin_tone" name="skin_tone" type="text"  class="form-control input-md" >-->
										<select class="form-control input-md" id="skin_tone" name="skin_tone">
                                        	<option><?php echo $skin_tone; ?></option>
                                            <option>Faire</option>
                                            <option>Wheatish</option>
                                        </select>
                                    </div>
                                </div>


                                <div class="form-group" style="padding-bottom:30px">
                                    <label class="col-sm-4 control-label" for="blood_group">Blood group  </label>  
                                    <div class="col-md-8">
                                        <select id="blood_group" name="blood_group" class="form-control input-md">
                                        	<option ><?php echo $blood_group; ?></option>
                                        	<option>A+</option>
                                            <option>O+</option>
                                            <option>B+</option>
                                            <option>AB+</option>
                                            <option>A-</option>
                                            <option>O-</option>
                                            <option>B-</option>
                                            <option>AB-</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group" style="padding-bottom:30px">
                                    <label class="col-sm-4 control-label" for="spectacles">Spectacles </label>
                                    <div class="col-md-8">
                                        <select id="spectacles" name="spectacles"  class="form-control">
                                        	<option><?php echo $spectacles; ?></option>
                                            <option value="yes">Yes</option>
                                            <option value="no">No</option>
                                        </select>
                                    </div>
                                </div>


                           
                                <div class="form-group" style="padding-bottom:50px">
                                    <label class="col-sm-4 control-label" for="Hobbies">Hobbies </label>
                                    <div class="col-md-8">                     
                                        <textarea class="form-control" id="hobbies" name="hobbies" rows="1"><?php echo $hobbies; ?></textarea>
                                    </div>
                                </div>
                                 <script>
									   $(document).ready(function(){
										$('#any_disability').on('change', function() {
										  if ( this.value == 'yes')
										  {
											$("#description").show();
										  }
										  else
										  {
											$("#description").hide();
										  }
										});
									});
							    </script> 
                                
                                <div class="form-group" style="padding-bottom:30px">
                                    <label class="col-sm-4 control-label" for="any_disability">Any Disability  </label>
                                    <div class="col-md-8">                     
                                        <select id="any_disability" name="any_disability" class="form-control input-md" >
                                        	<option> <?php echo $any_disability; ?></option>
                                        	<option value="yes">Yes</option>
                                            <option value="no">No</option>
                                        </select>
                                        <div id="description" style="display:none;">Add Description
                                        <input type="text" name="any_disability_desc" value="<?php echo $any_disability_desc; ?>" class="form-control">
                                        </div>
                                    </div>
                                </div> 
                                <div class="form-group" style="padding-bottom:70px">
                                    <label class="col-sm-4 control-label" for="acceptation">Acceptations</label>
                                    <div class="col-md-8">                     
                                        <textarea class="form-control" id="acceptation" name="acceptation"  rows="2"><?php echo $acceptation; ?></textarea>
                                    </div>
                                </div>
                                <div class="form-group" style="padding-bottom:50px">
                                    <label class="col-sm-4 control-label" for="describe_yourself">Describe Yourself </label>
                                    <div class="col-md-8">                     
                                        <textarea class="form-control" id="describe_yourself" name="describe_yourself" rows="2"><?php echo $describe_yourself; ?></textarea>
                                    </div>
                                </div> 
                                
                         		<div class="form-group" style="padding-bottom:30px">
                                	 <label class="col-sm-4 control-label" for="work_place_address"></label>  
                                    <div class="col-sm-8"> <br>
                                        <button type="submit" name="submit" class="btn btn-success" style="border:none">Update</button>
                                        </div>
                                    </div>
                                    </form>
                                 </div>
							
						</div>
                      
					
						
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