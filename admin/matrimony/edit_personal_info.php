<?php
include'../connect.php';
include_once '../dbconfig.php';
error_reporting(0);
include'common_function_matrimony.php';
?>

<html lang="en">

<?php
links();
?>
<script>
function getAge(){
    var dob = document.getElementById('birth_date').value;
    dob = new Date(dob);
    var today = new Date();
    var age = Math.floor((today-dob) / (365.25 * 24 * 60 * 60 * 1000));
    document.getElementById('age').value=age;
    
}

function validateEmail(emailField){
        var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

        if (reg.test(emailField.value) == false) 
        {
            alert('Invalid Email Address');
            return false;
        }

        return true;

}
</script>
<script type="text/javascript" src="jquery-1.4.1.min.js"></script>
<script type="text/javascript">
	$(document).ready(function()
	{
	
		$("#loding2").hide();
		
		
		$("#state").change(function()
		{
			$("#loding2").show();
			var id=$(this).val();
			var dataString = 'id='+ id;
		
			$.ajax
			({
				type: "POST",
				url: "get_city.php",
				data: dataString,
				cache: false,
				success: function(html)
				{
					$("#loding2").hide();
					$("#city").html(html);
				} 
			});
		});
		
	});
</script>
<script language="Javascript" type="text/javascript">
	 function onlyAlphabets(e, t) {
	    try {
	        if (window.event) {
	            var charCode = window.event.keyCode;
	        }
	        else if (e) {
	            var charCode = e.which;
	        }
	        else { return true; }
	        if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123) || charCode == 8 )
	            return true;
	        else
	            return false;
	    }
	    catch (err) {
	        alert(err.Description);
	    }
	}
	
	 function onlyNos(e, t) {
	    try {
	        if (window.event) {
	            var charCode = window.event.keyCode;
	        }
	        else if (e) {
	            var charCode = e.which;
	        }
	        else { return true; }
	        if (charCode > 31 && (charCode < 48 || charCode > 57)) {
	            return false;
	        }
	        return true;
	    }
	    catch (err) {
	        alert(err.Description);
	    }
	}
 
 	function onlyAlphabetsHobbies(e, t) {
            try {
                if (window.event) {
                    var charCode = window.event.keyCode;
                }
                else if (e) {
                    var charCode = e.which;
                }
                else { return true; }
                if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123) || charCode == 32 || charCode == 44)
                    return true;
                else
                    return false;
            }
            catch (err) {
                alert(err.Description);
            }
        }
        
        document.addEventListener('DOMContentLoaded', function() {
	  
	  var input = document.getElementById('txtNumeric');
	  input.addEventListener('keydown', function(e){      
	       var input = e.target;
	       var val = input.value;
	       var end = input.selectionEnd;
	       if(e.keyCode == 32 && (val[end - 1] == " " || val[end] == " ")) {
	         e.preventDefault();
	         return false;
	      }      
	    });
	})
	
	document.addEventListener('DOMContentLoaded', function() {
	  
	  var input = document.getElementById('txtNumeric1');
	  input.addEventListener('keydown', function(e){      
	       var input = e.target;
	       var val = input.value;
	       var end = input.selectionEnd;
	       if(e.keyCode == 32 && (val[end - 1] == " " || val[end] == " ")) {
	         e.preventDefault();
	         return false;
	      }      
	    });
	})
	document.addEventListener('DOMContentLoaded', function() {
	  
	  var input = document.getElementById('acceptation');
	  input.addEventListener('keydown', function(e){      
	       var input = e.target;
	       var val = input.value;
	       var end = input.selectionEnd;
	       if(e.keyCode == 32 && (val[end - 1] == " " || val[end] == " ")) {
	         e.preventDefault();
	         return false;
	      }      
	    });
	})
	document.addEventListener('DOMContentLoaded', function() {
	  
	  var input = document.getElementById('describe_yourself');
	  input.addEventListener('keydown', function(e){      
	       var input = e.target;
	       var val = input.value;
	       var end = input.selectionEnd;
	       if(e.keyCode == 32 && (val[end - 1] == " " || val[end] == " ")) {
	         e.preventDefault();
	         return false;
	      }      
	    });
	})
</script>
<body>

    <div id="wrapper">

        <!-- Navigation -->
       <?php
       nav();
	   ?>

        <div id="page-wrapper">
            <div class="row" style="margin-left:230px;">
                <div class="col-lg-12" style="font-family:CaviarDreams_Bold;color:#4c4743;">
					<?php 
						$unique_id=$_GET['unique_id'];
						$data=mysqli_fetch_array(mysqli_query($conn,"select * from matrimonialall where unique_id='$unique_id'")); 
					?>
					<?php if($data['marriageType'] == 'Never married'){?><h1 class="page-header"> Edit <?php echo $data['gender'];?> Matrimony</h1><?php }?>
					<?php if($data['marriageType'] == 'divorcee'){?><h1 class="page-header"> Edit <?php echo $data['gender'];?> Divorce Matrimony</h1><?php }?>   
					<?php if($data['marriageType'] == 'widow'){?><h1 class="page-header"> Edit <?php echo $data['gender'];?> Widow Matrimony</h1><?php }?> 
					<?php if($data['marriageType'] == 'widower'){?><h1 class="page-header"> Edit <?php echo $data['gender'];?> Widower Matrimony</h1><?php }?>
				</div>
                <!-- /.col-lg-12 -->
            </div>
           <div class="row" style="padding-left:250px;">
				<div class="col-lg-10">
					<div class="panel panel-default">
						<?php
							$candidate_id=$_GET['candidate_id'];
							$unique_id=$_GET['unique_id'];
							
							
							$show123=mysqli_query($conn,"select * from matrimonialall where unique_id='$unique_id'") or die(mysqli_error($conn));	
							
							$image_mime_type12="image/png|image/jpeg|image/gif"; 
							
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
								$pass=$row123['pass'];
								$cast=$row123['cast'];
								$age=$row123['age'];
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
								
							}
						 ?>
						<div class="panel-heading"><h2 style="font-size:20px; margin-top: 7px; text-align:center;font-family: CaviarDreams;"> <b>Personal Information of <?php echo ucfirst($first_name). " ".ucfirst($last_name);?></b> </h2></div>
							<div class="panel-body">
								<div class="row">
									<div class="col-lg-10">
									  
										
	<form action="update_personal_info.php" method="post" enctype="multipart/form-data">
	
	<div class="form-horizontal form-bordered" style="font-family:CenturyGothict;">
	
	<div class="form-group">
													
	
	<input type="hidden" name="candidate_id" value="<?php echo $candidate_id;?>" />
	
	<input type="hidden" name="unique_id" value="<?php echo $unique_id;?>" />
	
	
	<input type="hidden" name="profile_pic" value="<?php //echo $profile_pic; ?>" />
	
	
	<label class="col-md-4 control-label" style="padding-left:100px;text-align: left;">First Name </label> <div class="col-md-8">  <input type="text" name="first_name" value="<?php echo $first_name;?>" class="form-control"  onKeyPress="return onlyAlphabets(event,this);" required/> </div> <br /><br /><br />
	
	<label class="col-md-4 control-label" style="padding-left:100px;text-align: left;">Middle Name </label> <div class="col-md-8">  <input type="text" name="middle_name" value="<?php echo $middle_name;?>" class="form-control"  onKeyPress="return onlyAlphabets(event,this);" required/> </div> <br /><br /><br />
	
	<label class="col-md-4 control-label" style="padding-left:100px;text-align: left;">Last Name  </label> <div class="col-md-8">  <input type="text" name="last_name" value="<?php echo $last_name;?>" class="form-control"  onKeyPress="return onlyAlphabets(event,this);" required/> </div> <br /><br /><br />
	
	<label class="col-md-4 control-label" style="padding-left:100px;text-align: left;">Gender  </label> <div class="col-md-8"> 
	<label class="radio-inline"><input type="radio" name="gender" id="gender" value="Groom" <?php echo ($gender == "Groom") ? 'checked="checked"' : ''; ?> required >Male</label>
	<label class="radio-inline"><input type="radio" name="gender" id="gender" value="Bride" <?php echo ($gender == "Bride") ? 'checked="checked"' : ''; ?> required >Female</label>
	 </div> <br /><br /><br />
	
	<label class="col-md-4 control-label" style="padding-left:100px;text-align: left;">State </label> <div class="col-md-8">  
	<select class="form-control" id="state" name="states" required>
		<option value="">Select State</option>
		<?php 
			$stmt = $DB_con->prepare("SELECT * FROM state where is_del='approved' ORDER BY state  ASC");
			$stmt->execute();
			
			while($row=$stmt->fetch(PDO::FETCH_ASSOC))
			{
		?>
		<option value="<?php echo $row['state'];?>"<?php if($states==$row['state']) echo "selected";?>><?php echo $row['state']; ?></option>
		<?php
			} 	
									
		?>
	</select>  
	 </div> <br /><br /><br />
	
	<label class="col-md-4 control-label" style="padding-left:100px;text-align: left;">City  </label> <div class="col-md-8">  
	 <select name="city" class="form-control" id="city" required>
		<?php 
			$id = $states;
			$stmt = $DB_con->prepare("SELECT * FROM city WHERE state='$id' and is_del='approved' ORDER BY city  ASC");
			$stmt->execute(array(':id' => $id));
			while($row=$stmt->fetch(PDO::FETCH_ASSOC))
			{
				?>
				<option value="<?php echo $row['city']; ?>"<?php if($city==$row['city']) echo "selected";?>><?php echo $row['city']; ?></option>
				<?php
			}
		?>
		<option value="">Select City</option>
	</select>
												
	 </div> <br /><br /><br />
	
	<label class="col-md-4 control-label" style="padding-left:100px;text-align: left;">Address  </label> <div class="col-md-8" style="margin-bottom:15px;">
	 <textarea class="form-control" id="txtNumeric" name="address"rows="5" required ><?php echo $address; ?></textarea>
	 </div> <br /><br /><br />
	
	<label class="col-md-4 control-label" style="padding-left:100px;text-align: left;">Mobile Number(1)  </label> <div class="col-md-8" style="margin-bottom:15px;">  <input type="text" name="mobile_no1" value="<?php echo $mobile_no1;?>" class="form-control"   maxlength="12" required onKeyPress="return onlyNos(event,this);"/> </div> <br /><br /><br />
	
	<label class="col-md-4 control-label" style="padding-left:100px;text-align: left;">Email  </label> <div class="col-md-8" style="margin-bottom:15px;">  <input type="email" name="email" value="<?php echo $email;?>" class="form-control"  required  onblur="validateEmail(this);"/> </div> <br /><br /><br />
	
	<label class="col-md-4 control-label" style="padding-left:100px;text-align: left;">Birth Date  </label> <div class="col-md-8" style="margin-bottom:15px;">  <input type="date" id="birth_date"  name="birth_date" value="<?php echo $birth_date;?>" class="form-control"  max="3000-12-31" required onChange="getAge()"/> </div> <br /><br /><br />
	
	<label class="col-md-4 control-label" style="padding-left:100px;text-align: left;">Age  </label> <div class="col-md-8" style="margin-bottom:15px;">  <input type="text" id="age" name="age" value="<?php echo $age;?>" class="form-control" readonly /> </div> <br /><br /><br />
	
	<label class="col-md-4 control-label" style="padding-left:100px;text-align: left;">Birth Time(24 hr format)  </label> <div class="col-md-8" style="margin-bottom:15px;">  <input type="time" name="birth_time" value="<?php echo $birth_time;?>" class="form-control"  required  /> </div> <br /><br /><br />
	
	<label class="col-md-4 control-label" style="padding-left:100px;text-align: left;">Day Of Birth  </label> <div class="col-md-8" style="margin-bottom:15px;"> 
	<select id="day_of_birth" name="day_of_birth" class="form-control"  required>
	<option value="">Select</option>
		<option value="Sunday"<?php if($day_of_birth=='Sunday') echo "selected";?>>Sunday</option>
		<option value="Monday"<?php if($day_of_birth=='Monday') echo "selected";?>>Monday</option>
		<option value="Tuesday"<?php if($day_of_birth=='Tuesday') echo "selected";?>>Tuesday</option>
		<option value="Wednesday"<?php if($day_of_birth=='Wednesday') echo "selected";?>>Wednesday</option>
		<option value="Thursday"<?php if($day_of_birth=='Thursday') echo "selected";?>>Thursday</option>
		<option value="Friday"<?php if($day_of_birth=='Friday') echo "selected";?>>Friday</option>
		<option value="Saturday"<?php if($day_of_birth=='Saturday') echo "selected";?>>Saturday</option>
	</select>
	 </div> <br /><br /><br />
	
	<label class="col-md-4 control-label" style="padding-left:100px;text-align: left;">Birth City  </label> <div class="col-md-8" style="margin-bottom:15px;">  <input type="text" name="birth_city" value="<?php echo $birth_city;?>" class="form-control"  required onKeyPress="return onlyAlphabets(event,this);"/> </div> <br /><br /><br />
	
	<label class="col-md-4 control-label" style="padding-left:100px;text-align: left;">Birth District </label> <div class="col-md-8" style="margin-bottom:15px;">  <input type="text" name="birth_district" value="<?php echo $birth_district;?>" class="form-control"  required onKeyPress="return onlyAlphabets(event,this);"/> </div> <br /><br /><br />
	
	<label class="col-md-4 control-label" style="padding-left:100px;text-align: left;">Birth State  </label> <div class="col-md-8" style="margin-bottom:15px;"> 
	<select class="form-control" id="birth_state" required name="birth_state" >
		<option value="">Select</option>
		<?php 
		 $show1=mysqli_query($conn,"SELECT * FROM state where is_del='approved' ORDER BY state  ASC");
		 while($rw1=mysqli_fetch_array($show1))
		 { 
		?>
		<option value="<?php echo $rw1['state'];?>"<?php if($birth_state==$rw1['state']) echo "selected";?>><?php echo $rw1['state'];?></option>
		<?php
		}
	?>
	</select>
	  </div> <br /><br /><br />
	
	<label class="col-md-4 control-label" style="padding-left:100px;text-align: left;">Mobile Number(2) </label> <div class="col-md-8" style="margin-bottom:15px;">  <input type="text" name="mobile_no2" value="<?php echo $mobile_no2;?>" class="form-control"  maxlength="12" required onKeyPress="return onlyNos(event,this);"/> </div> <br /><br /><br />
	
	<label class="col-md-4 control-label" style="padding-left:100px;text-align: left;">Password  </label> <div class="col-md-8" style="margin-bottom:15px;">  <input type="text" name="pass" value="<?php echo $pass;?>" class="form-control"  /> </div> <br /><br /><br />
	
	<label class="col-md-4 control-label" style="padding-left:100px;text-align: left;">Cast  </label> <div class="col-md-8">  <input type="text" name="cast" value="<?php echo $cast;?>" class="form-control"  readonly/> </div> <br /><br /><br />
	
	
	
	<label class="col-md-4 control-label" style="padding-left:100px;text-align: left;">Feet  </label> <div class="col-md-8"> 
	<select name="fit" class="form-control input-md"  required>
		<option value="">Select</option>
		<option value="4"<?php if($fit=='4') echo "selected";?>>4</option>
		<option value="5"<?php if($fit=='5') echo "selected";?>>5</option>
		<option value="6"<?php if($fit=='6') echo "selected";?>>6</option>
		<option value="7"<?php if($fit=='7') echo "selected";?>>7</option>
		<option value="8"<?php if($fit=='8') echo "selected";?>>8</option>
	</select>
	 </div> <br /><br /><br />
	
	<label class="col-md-4 control-label" style="padding-left:100px;text-align: left;">Inches  </label> <div class="col-md-8">  
	<select name="inches" class="form-control input-md" required>
	<option value="">Select</option>
		 <option value="0"<?php if($inches=='0') echo "selected";?>>0</option>
		 <option value="1"<?php if($inches=='1') echo "selected";?>>1</option>
		<option value="2"<?php if($inches=='2') echo "selected";?>>2</option>
		<option value="3"<?php if($inches=='3') echo "selected";?>>3</option>
		<option value="4"<?php if($inches=='4') echo "selected";?>>4</option>
		<option value="5"<?php if($inches=='5') echo "selected";?>>5</option>
		<option value="6"<?php if($inches=='6') echo "selected";?>>6</option>
		<option value="7"<?php if($inches=='7') echo "selected";?>>7</option>
		<option value="8"<?php if($inches=='8') echo "selected";?>>8</option>
		<option value="9"<?php if($inches=='9') echo "selected";?>>9</option>
		<option value="10"<?php if($inches=='10') echo "selected";?>>10</option>
		<option value="11"<?php if($inches=='11') echo "selected";?>>11</option>
	   
	</select>
	 </div> <br /><br /><br />
	
	<label class="col-md-4 control-label" style="padding-left:100px;text-align: left;">Body Weight  </label> <div class="col-md-8">  <input type="text" name="body_weight" value="<?php echo $body_weight;?>" class="form-control" required  onKeyPress="return onlyNos(event,this);"/> </div> <br /><br /><br />
	
	<label class="col-md-4 control-label" style="padding-left:100px;text-align: left;">Skin Tone  </label> <div class="col-md-8"> 
	<select class="form-control input-md" id="skin_tone" name="skin_tone" required>
	<option value="">Select</option>
	<option value="Fair"<?php if($skin_tone=='Fair') echo "selected";?>>Fair</option>
	<option value="Wheatish"<?php if($skin_tone=='Wheatish') echo "selected";?>>Wheatish</option>
	</select>
	</div> <br /><br /><br />
	
	<label class="col-md-4 control-label" style="padding-left:100px;text-align: left;">Blood Group  </label> <div class="col-md-8">  
	<select id="blood_group" name="blood_group" class="form-control input-md" required>
		<option value="">Select</option>
		<option value="A+"<?php if($blood_group=='A+') echo "selected";?>>A+</option>
		<option value="O+"<?php if($blood_group=='O+') echo "selected";?>>O+</option>
		<option value="B+"<?php if($blood_group=='B+') echo "selected";?>>B+</option>
		<option value="AB+"<?php if($blood_group=='AB+') echo "selected";?>>AB+</option>
		<option value="A-"<?php if($blood_group=='A-') echo "selected";?>>A-</option>
		<option value="O-"<?php if($blood_group=='O-') echo "selected";?>>O-</option>
		<option value="B-"<?php if($blood_group=='B-') echo "selected";?>>B-</option>
		<option value="AB-"<?php if($blood_group=='AB-') echo "selected";?>>AB-</option>
	</select>
	 </div> <br /><br /><br />
	
	<label class="col-md-4 control-label" style="padding-left:100px;text-align: left;">Spectacles </label> <div class="col-md-8">  
	<select id="spectacles" name="spectacles" class="form-control" required>
		<option value="">Select</option>
		<option value="yes"<?php if($spectacles=='yes') echo "selected";?>>Yes</option>
		<option value="no"<?php if($spectacles=='no') echo "selected";?>>No</option>
	</select>
	</div> <br /><br /><br />
	
	<label class="col-md-4 control-label" style="padding-left:100px;text-align: left;">Hobbies  </label> <div class="col-md-8">  <input type="text" id="txtNumeric1" name="hobbies" value="<?php echo $hobbies;?>" class="form-control"  required onKeyPress="return onlyAlphabetsHobbies(event,this);"/> </div> <br /><br /><br />
	
	<label class="col-md-4 control-label" style="padding-left:100px;text-align: left;">Any Disability  </label> <div class="col-md-8">  
	<select id="any_disability" name="any_disability_desc" class="form-control input-md" required>
		<option value="">Select</option>
		<option value="yes"<?php if($any_disability_desc=='yes') echo "selected";?>>Yes</option>
		<option value="no"<?php if($any_disability_desc=='no') echo "selected";?>>No</option>
	</select>
											
	 </div> <br /><br /><br />
	
	<label class="col-md-4 control-label" style="padding-left:100px;text-align: left;">Any Disability Description  </label> <div class="col-md-8">  <input type="text" name="any_disability" value="<?php echo $any_disability;?>" class="form-control"  onKeyPress="return onlyAlphabets(event,this);"/> </div> <br /><br /><br />
	
	<label class="col-md-4 control-label" style="padding-left:100px;text-align: left;">Expectations: </label> <div class="col-md-8">  <textarea class="form-control" id="acceptation" name="acceptation" required rows="2"><?php echo $acceptation;?></textarea>  </div> <br /><br /><br />
	
	<label class="col-md-4 control-label" style="padding-left:100px;text-align: left;">Describe Yourself  </label> <div class="col-md-8"><textarea class="form-control" id="describe_yourself" name="describe_yourself" required rows="2"><?php echo $describe_yourself;?></textarea>  </div> <br /><br /><br />
	
	<!--<label class="col-md-3 control-label">Profile Photo : </label> <div class="col-md-8">
	<input type="file" name="profile_pic" value="<?php //echo $profile_pic;?>" class="form-control"  />
	-->
	</div>
	
	<div class="col-md-6"><input type="submit" name="submit" style="margin-left: 450px;"  class="btn btn-primary"/> </div> <br />
	
	
	</div></div>
	</form>
										
	
	
	
	
	
								 </div>
								  
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
