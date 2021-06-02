<?php include "../connect.php";
include "../dbconfig.php";
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
			.hied_border{
			border-style:hidden; 
			border-top-style:hidden;
			border-bottom-style:groove;
			background-color: transparent;
			border-radius:0px;
			box-shadow:none;
			height:40px;
	     }

		</style>
	<script type="text/javascript" src="jquery-1.4.1.min.js"></script>
	<script type="text/javascript">
	$(document).ready(function()
	{
	
		$("#loding2").hide();
		
		
		$("#states").change(function()
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
        <script>
        function getAge(){
	    var dob = document.getElementById('birth_date').value;
	    dob = new Date(dob);
	    var today = new Date();
	    var age = Math.floor((today-dob) / (365.25 * 24 * 60 * 60 * 1000));
	    document.getElementById('age').value=age;
	    
	}



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
	});
	
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
	});
	
	document.addEventListener('DOMContentLoaded', function() {
	  
	  var input = document.getElementById('txtNumeric2');
	  input.addEventListener('keydown', function(e){      
	       var input = e.target;
	       var val = input.value;
	       var end = input.selectionEnd;
	       if(e.keyCode == 32 && (val[end - 1] == " " || val[end] == " ")) {
	         e.preventDefault();
	         return false;
	      }      
	    });
	});
	
	document.addEventListener('DOMContentLoaded', function() {
	  
	  var input = document.getElementById('txtNumeric3');
	  input.addEventListener('keydown', function(e){      
	       var input = e.target;
	       var val = input.value;
	       var end = input.selectionEnd;
	       if(e.keyCode == 32 && (val[end - 1] == " " || val[end] == " ")) {
	         e.preventDefault();
	         return false;
	      }      
	    });
	});
	
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
	});
	</script>
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
			<?php //include "header.php";?>
			<div class="content">
				<?php include "menubar.php"; ?>
				<div class="col-lg-9 content-right">
					
                    
					<div class="selected-classifieds">
                    
						
                                
                                <div class="col-lg-12" style="border-radius:2px; border:1px solid #CCC; padding:5px 25px 10px 50px;" >

<h2 style="color:#e74c3c; font-family:BerlinSans; font-size:32px"><img src="../img/ICON 1/name-people-person-user-icon--icon-search-engine-1.png" style="width:40px; height:40px">
Update Personal Information </h2>


<div class="dataTable_wrapper" style="font-family:CenturyGothict;"><hr>
                                <form action="update_personal_info.php" method="post" enctype="multipart/form-data">
                                    <?php
					    
$show=mysqli_query($conn,"select * from matrimonialall where is_del='no' and email='$email'  ") or die(mysqli_error($conn));
				while($row=mysqli_fetch_array($show))
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
				$subcast=$row['subcast'];
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
                                        <input id="first_name" name="first_name" type="text" value="<?php echo $first_name; ?>" class="form-control input-md hied_border"  onKeyPress="return onlyAlphabets(event,this);" required>
                                    </div>
                                </div>
                                <!-- Text input-->
                                <div class="form-group" style="padding-bottom:30px">
                                    <label class="col-sm-4 control-label" for="middle_name">Middle Name</label>  
                                    <div class="col-sm-8">
                                        <input id="middle_name" name="middle_name" type="text" value="<?php echo $middle_name; ?>" class="form-control input-md hied_border" onKeyPress="return onlyAlphabets(event,this);" required>
                                    </div>
                                </div>
                                <div class="form-group" style="padding-bottom:30px">
                                    <label class="col-sm-4 control-label" for="last_name">Last Name </label>  
                                    <div class="col-sm-8">
                                        <input id="last_name" name="last_name" type="text"value="<?php echo $last_name; ?>"  class="form-control input-md hied_border" onKeyPress="return onlyAlphabets(event,this);" required>
                                    </div>
                                </div>
                                
                                <div class="form-group" style="padding-bottom:30px">
                                    <label class="col-sm-4 control-label" for="address">States</label>
                                    <div class="col-sm-8">    
                                    	<select class="form-control hied_border" id="states" name="states" required>
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
                                    </div>
                                </div>
                                <div class="form-group" style="padding-bottom:30px">
                                    <label class="col-sm-4 control-label" for="address">City</label>
                                    <div class="col-sm-8">                     
                                        <select class="form-control hied_border" id="city" name="city" required>
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
                                    </div>
                                </div>
                                <div class="form-group" style="padding-bottom:70px">
                                    <label class="col-sm-4 control-label" for="address">Address</label>
                                    <div class="col-sm-8">                     
                                        <textarea class="form-control hied_border" id="txtNumeric" name="address"rows="0" required><?php echo $address; ?></textarea>
                                    </div>
                                </div>
                                <div class="form-group" style="padding-bottom:30px">
                                    <label class="col-sm-4 control-label" for="mobile_no1">Mobile Number 1</label>
                                    <div class="col-sm-8">
                                        <input id="mobile_no1" name="mobile_no1" type="text" maxlength="12" value="<?php echo $mobile_no1; ?>" class="form-control input-md hied_border" max="12" onKeyPress="return onlyNos(event,this);" required> 
                                    </div>
                                </div>
                                <div class="form-group" style="padding-bottom:30px">
                                    <label class="col-sm-4 control-label" for="mobile_no2">Mobile Number 2</label>
                                    <div class="col-sm-8">
                                        <input id="mobile_no2" name="mobile_no2" type="text" maxlength="12" value="<?php echo $mobile_no2; ?>" class="form-control input-md hied_border" onKeyPress="return onlyNos(event,this);" required>
                                    </div>
                                </div>
                               
                           
                            
                                <div class="form-group" style="padding-bottom:50px">
                                    <label class="col-sm-4 control-label" for="birth_date">Date of Birth </label>  
                                    <div class="col-sm-8">
                                        <input type="date" id="birth_date" placeholder="DD/MM/YYYY" name="DATEOFBIRTH" value="<?php echo $birth_date; ?>" max="3000-12-31" class="form-control input-md hied_border" onChange="getAge();" required> 
                                    </div>
                                </div>
                                <br>
                                <div class="form-group" style="padding-bottom:50px">
                                    <label class="col-sm-4 control-label" for="birth_time">Time of Birth(24 hrs Format)</label>  
                                    <div class="col-sm-8">
                                        <input id="birth_time" name="birth_time" type="time" value="<?php echo $birth_time; ?>" class="form-control input-md hied_border" required> 
                                    </div>
                                </div>
                                <div class="form-group" style="padding-bottom:30px">
                                    <label class="col-sm-4 control-label" for="day_of_birth">Day of Birth </label>
                                    <div class="col-sm-8">
                                        <select id="day_of_birth" name="day_of_birth" class="form-control hied_border" required>
                                       	    <option value="">Select</option>
                                            <option value="Sunday"<?php if($day_of_birth=='Sunday') echo "selected";?>>Sunday</option>
                                            <option value="Monday"<?php if($day_of_birth=='Monday') echo "selected";?>>Monday</option>
                                            <option value="Tuesday"<?php if($day_of_birth=='Tuesday') echo "selected";?>>Tuesday</option>
                                            <option value="Wednesday"<?php if($day_of_birth=='Wednesday') echo "selected";?>>Wednesday</option>
                                            <option value="Thursday"<?php if($day_of_birth=='Thursday') echo "selected";?>>Thursday</option>
                                            <option value="Friday"<?php if($day_of_birth=='Friday') echo "selected";?>>Friday</option>
                                            <option value="Saturday"<?php if($day_of_birth=='Saturday') echo "selected";?>>Saturday</option>
                                           
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group" style="padding-bottom:30px">
                                    <label class="col-sm-4 control-label hied_border" for="birth_city">Place of Birth </label>  
                                    <div class="col-sm-8">
                                        <input id="birth_city" name="birth_city" type="text" value="<?php echo $birth_city; ?>" class="form-control input-md hied_border" onKeyPress="return onlyAlphabets(event,this);" required>
                                    </div>
                                </div>
                                <div class="form-group" style="padding-bottom:30px">
                                    <label class="col-sm-4 control-label" for="birth_district">Birth Place District</label>  
                                    <div class="col-sm-8">
                                        <input id="birth_district" name="birth_district" type="text" value="<?php echo $birth_district; ?>"  class="form-control input-md  hied_border" onKeyPress="return onlyAlphabets(event,this);" required>
                                    </div>
                                </div>
                                <div class="form-group" style="padding-bottom:30px">
                                    <label class="col-sm-4 control-label" for="birth_state">Birth Place State  </label>  
                                    <div class="col-sm-8">
                                       <!-- <input id="birth_state" name="birth_state" type="text" value="<?php echo $birth_state; ?>"  class="form-control input-md" >-->
						<select class="form-control hied_border" id="birth_state" required name="birth_state">
                                        	<option value="">Select</option>
                                        	<?php 
											 $show1=mysqli_query($conn,"select * from state where is_del='approved' ORDER BY state  ASC");
														
												while($rw1=mysqli_fetch_array($show1))
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
                                        <input type="text" readonly name="age"  id="age" value="<?php echo $age; ?>"  class="form-control input-md hied_border" required>
                                    </div>
                                </div>
								
								<div class="form-group" style="padding-bottom:30px">
                                    <label class="col-sm-4 control-label" for="age">Caste</label>  
                                    <div class="col-md-8">
                                        <input type="text" readonly name="cast"  id="cast" value="<?php echo $cast; ?>"  class="form-control input-md hied_border" required>
                                    </div>
                                </div>
								
								<div class="form-group" style="padding-bottom:30px">
                                    <label class="col-sm-4 control-label" for="skin_tone">Sub-caste  </label>  
                                    <div class="col-md-8">
                                       	<select class="form-control input-md hied_border" id="subcast" name="subcast" required>
                                            <option value="">Select</option>
                                            <option value="Full Mali"<?php if($subcast=='Full Mali') echo "selected";?>>Full Mali</option>
                                            <option value="Jire Mali"<?php if($subcast=='Jire Mali') echo "selected";?>>Jire Mali</option>
											<option value="Kach Mali"<?php if($subcast=='Kach Mali') echo "selected";?>>Kach Mali</option>
                                        </select>
                                    </div>
                                </div>
								
                                <!-- Text input-->
                                <div class="form-group" style="padding-bottom:50px">
                                    <label class="col-sm-4 control-label" for="height">Height</label>  
                                    <div class="col-md-3" style="margin-right:80px">Feet
                                    	<select id="height" name="fit" class="form-control input-md feet hied_border"  required>
                                            <option value="">Select</option>
                                            <option value="4"<?php if($fit=='4') echo "selected";?>>4</option>
                                            <option value="5"<?php if($fit=='5') echo "selected";?>>5</option>
                                            <option value="6"<?php if($fit=='6') echo "selected";?>>6</option>
                                            <option value="7"<?php if($fit=='7') echo "selected";?>>7</option>
                                            <option value="8"<?php if($fit=='8') echo "selected";?>>8</option>
                                        </select>
                                        
                                    </div>
                                    <div class="col-md-3" >Inches
                                    	<select id="height" name="inches" class="form-control input-md feet hied_border" required>
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
                                       
                                    </div>
                                </div>
                                <div class="form-group" style="padding-bottom:30px">
                                    <label class="col-sm-4 control-label" for="body_weight">Weight (kg) </label>  
                                    <div class="col-md-8">
                                        <input type="text" class="form-control input-md hied_border" id="body_weight" value="<?php echo $body_weight; ?>" name="body_weight" placeholder="eg.50" onKeyPress="return onlyNos(event,this);" required>
                                        	 
                                    </div>
                                </div>
                                <div class="form-group" style="padding-bottom:30px">
                                    <label class="col-sm-4 control-label" for="skin_tone">Skin Tone  </label>  
                                    <div class="col-md-8">
                                       	<select class="form-control input-md hied_border" id="skin_tone" name="skin_tone" required>
                                            <option value="">Select</option>
                                            <option value="Fair"<?php if($skin_tone=='Fair') echo "selected";?>>Fair</option>
                                            <option value="Wheatish"<?php if($skin_tone=='Wheatish') echo "selected";?>>Wheatish</option>
                                        </select>
                                    </div>
                                </div>


                                <div class="form-group" style="padding-bottom:30px">
                                    <label class="col-sm-4 control-label" for="blood_group">Blood Group  </label>  
                                    <div class="col-md-8">
                                        <select id="blood_group" name="blood_group" class="form-control input-md hied_border" required>
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
                                    </div>
                                </div>
                                <div class="form-group" style="padding-bottom:30px">
                                    <label class="col-sm-4 control-label" for="spectacles">Spectacles </label>
                                    <div class="col-md-8">
                                        <select id="spectacles" name="spectacles"  class="form-control hied_border" required>
                                            
                                             <option value="">Select</option>
                                            <option value="yes"<?php if($spectacles=='yes') echo "selected";?>>Yes</option>
                                            <option value="no"<?php if($spectacles=='no') echo "selected";?>>No</option>
                                        </select>
                                    </div>
                                </div>


                           
                                <div class="form-group" style="padding-bottom:50px">
                                    <label class="col-sm-4 control-label" for="Hobbies">Hobbies </label>
                                    <div class="col-md-8">                     
                                        <textarea class="form-control hied_border" id="txtNumeric1" name="hobbies" rows="1" required onKeyPress="return onlyAlphabetsHobbies(event,this);"><?php echo $hobbies; ?></textarea>
                                    </div>
                                </div>
                                 <script>
									   $(document).ready(function(){
										$('#any_disability').on('change', function() {
										  if ( this.value == 'yes')
										  {
											$("#description").show();
											$("#txtNumeric3").prop('required',true);
										  }
										  else
										  {
											$("#description").hide();
											$("#txtNumeric3").prop('required',false);
										  }
										});
									});
							    </script> 
                                
                                <div class="form-group" style="padding-bottom:30px">
                                    <label class="col-sm-4 control-label" for="any_disability">Any Disability </label>
                                    <div class="col-md-8">                     
                                        <select id="any_disability" name="any_disability" class="form-control input-md hied_border" required>
                                            <option value="">Select</option>
                                            <option value="yes"<?php if($any_disability=='yes') echo "selected";?>>Yes</option>
                                            <option value="no"<?php if($any_disability=='no') echo "selected";?>>No</option>
                                        </select>
                                        <div id="description" style="<?php if($any_disability!='yes'){ ?>display:none;<?php }?>margin-bottom:10px;margin-top:10px">Add Description
                                        	<input type="text" id="txtNumeric3" name="any_disability_desc" value="<?php echo $any_disability_desc; ?>" class="form-control hied_border">
                                        </div>
                                    </div>
                                </div> 
                                <div class="form-group" style="padding-bottom:70px;">
                                    <label class="col-sm-4 control-label" for="acceptation">Expectations</label>
                                    <div class="col-md-8">                     
                                        <textarea class="form-control hied_border" id="txtNumeric2" name="acceptation" rows="2" required ><?php echo $acceptation; ?></textarea>
                                    </div>
                                </div>
                                <div class="form-group" style="padding-bottom:70px">
                                    <label class="col-sm-4 control-label" for="describe_yourself">Describe Yourself </label>
                                    <div class="col-md-8">                     
                                        <textarea class="form-control hied_border" id="describe_yourself" name="describe_yourself" rows="2" required ><?php echo $describe_yourself; ?></textarea>
                                    </div>
                                </div> 
                                
                         		<div class="form-group" style="padding-bottom:30px">
                                	 <label class="col-sm-4 control-label" for="work_place_address"></label>  
                                   	 <div class="col-sm-8"> <br>
                                        	<center><button type="submit" name="submit" class="btn btn-success" style="border:none">Update</button></center>
                                         </div>
                                    </div>
                                    </form>
                                 </div>
							
						</div>
                      
					
						
					</div>
				</div>
			</div>
			
		</div><p class="text-center" style="height:80px; background-color:#2e3c43;padding-top:30px; color:#ffffff;margin-bottom:0px;">Copyright &copy; 2020<a href="http://www.cloudsoft.com" style="color:#ffffff;"> Cloudsoft PVT.LTD</a>. All Rights Reserved.</p>
		<!-- JavaScript -->
		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.slides.min.js"></script>
		<script src="js/CZSale.js"></script>
	</body>

</html>