<?php 
include_once "session.php";
include "connect.php";
error_reporting(0);
?>

<!DOCTYPE html>
<html>
<head>
<title>MATRIMONY</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700,800' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet">
<link href="responcive.css" rel="stylesheet" type="text/css">
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
 <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript">
    $(function () {
        $("#button").click(function () {
            var password = $("#txtPassword").val();
            var confirmPassword = $("#txtConfirmPassword").val();
            if (password != confirmPassword) {
                alert("Passwords do not match.");
                return false;
            }
            return true;
        });
    });
</script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="js/custom_js.js" type="text/javascript"></script>
        
       <script type="text/javascript">
	   var arr = ['frm01', 'frm02', 'frm03', 'frm04', 'frm05', 'frm06', 'frm07'];
              $(document).ready(function(){
                    $("#button").click(function(){
						 var button=$("#button").val();
                          var first_name=$("#first_name").val();
						  var middle_name=$("#middle-name").val();
						  var last_name=$("#last_name").val();
						  var gender=$("#gender").val();
						  var states=$("#states").val(); 
						  var city=$("#city").val();
						  var address=$("#address").val();
						  var mobile_no1=$("#mobile_no1").val();
						  var email=$("#email").val();
						  var birth_date=$("#birth_date").val();
						  var birth_time=$("#birth_time").val();
						  var day_of_birth=$("#day_of_birth").val();
						  var birth_city=$("#birth_city").val();
						  var birth_district=$("#birth_district").val();
						  var birth_state=$("#birth_state").val();
						  var mobile_no2=$("#mobile_no2").val();
						  var pass=$("#pass").val();
						  var age=$("#age").val();
						  var height=$("#height").val();
						  var body_weight=$("#body_weight").val();
						  var skin_tone=$("#skin_tone").val();
						  var blood_group=$("#blood_group").val();
						  var spectacles=$("#spectacles").val();
						  var hobbies=$("#hobbies").val();
						  var any_disability=$("#any_disability").val();
						  var acceptation=$("#acceptation").val();
						  var describe_yourself=$("#describe_yourself").val();
						  var faculty=$("#faculty").val();
						  var academic_level=$("#academic_level").val();
						  var college_name=$("#college_name").val();
						  var college_address=$("#college_address").val();
						  var office_contact=$("#office_contact").val();
						  var job_busi_status=$("#job_busi_status").val();
						  var working_post=$("#working_post").val();
						  var annual_income=$("#annual_income").val();
						  var work_place_address=$("#work_place_address").val();
						  var father_name=$("#father_name").val();
						  var occupation_father=$("#occupation_father").val();
						  var mother_name=$("#mother_name").val();
						  var occupation_mother=$("#occupation_mother").val();
						  var no_of_brother=$("#no_of_brother").val();
						  var married_brother=$("#married_brother").val();
						  var unmarried_brother=$("#unmarried_brother").val();
						  var no_of_sister=$("#no_of_sister").val();
						  var married_sister=$("#married_sister").val();
						  var unmarried_sister=$("#unmarried_sister").val();
						  var permanent_residential_address=$("#permanent_residential_address").val();
						  var ancestral_address=$("#ancestral_address").val();
						  var parent_conatct_no=$("#parent_conatct_no").val();
						  var birth_name=$("#birth_name").val();
						  var own_kul=$("#own_kul").val();
						  var mamkul=$("#mamkul").val();
						  var gotra=$("#gotra").val();
						  var nakshtra=$("#nakshtra").val();
						  var charan=$("#charan").val();
						  var rashi=$("#rashi").val();
						  var nadi=$("#nadi").val();
						  var gan=$("#gan").val();
						  var guru=$("#guru").val();
						  var manglik_status=$("#manglik_status").val();
						  var marriageType=$("#marriageType").val();
						  var previous_marriage_date_divorcee=$("#previous_marriage_date_divorcee").val();
						  var date_of_divorce=$("#date_of_divorce").val();
						  var child_status_divorce=$("#child_status_divorce").val();
						  var child_custody_status_divorce=$("#child_custody_status_divorce").val();
						  var previous_marriage_address_divorce=$("#previous_marriage_address_divorce").val();
					      var previous_marriage_date_widow=$("#previous_marriage_date_widow").val();
						  var date_partner_death_widow=$("#date_partner_death_widow").val();
						  var child_status_widow=$("#child_status_widow").val();
						  var previous_marriage_address_widow=$("#previous_marriage_address_widow").val();
								
			    if(first_name==null || first_name=="")
				{    
					  alert("Enter First Name");
					  return false;
				}
				 else if(!preg_match("/^[a-zA-Z ]*$/",$first_name))
					{
						 alert("Please Enter Valid Name");
					}
					
					if(middle-name==null || middle-name=="")
				{
					alert("Enter Middle Name");
					return false;
				}
				else if(!preg_match("/^[a-zA-Z ]*$/",$middle_name))
					{
						 alert("Please Enter Valid Name");
					}
				
				    if(last_name==null || last_name=="")
				{    
					  alert("Enter Last Name");
					  return false;
				}
				else if(!preg_match("/^[a-zA-Z ]*$/",$last_name))
					{
						 alert("Please Enter Valid Name");
					}
								
				    if(gender==null || gender=="")
				{    
					  alert("Please Enter Gender");
					  return false;
				}
				  
				    if(address==null || address=="")
				{    
					  alert("Enter your Address");
					  return false;
				}
				
				    if(city==null || city=="")
				{    
					  alert("Enter your City");
					  return false;
				}
				
				    if(state==null || state=="")
				{    
					  alert("Enter your State");
					  return false;
				}
				
				if(mobile_no1==null || mobile_no1=="")
				{    
					  alert("Enter your Mobile No1");
					  return false;
				}
				if(email==null || email=="")
				{    
					  alert("Enter your Email");
					  return false;
				}
				if(birth_date==null || birth_date=="")
				{    
					  alert("Enter your Birth Date");
					  return false;
				}
				if(birth_time==null || birth_time=="")
				{    
					  alert("Enter your Birth Time");
					  return false;
				}
				if(day_of_birth==null || day_of_birth=="")
				{    
					  alert("Enter your Day of Birth");
					  return false;
				}
				if(birth_city==null || birth_city=="")
				{    
					  alert("Enter your Birth City");
					  return false;
				}
				if(birth_district==null || birth_district=="")
				{    
					  alert("Enter your Birth District");
					  return false;
				}
				if(birth_state==null || birth_state=="")
				{    
					  alert("Enter your Birth State");
					  return false;
				}
				if(mobile_no2==null || mobile_no2=="")
				{    
					  alert("Enter your Mobile Number");
					  return false;
				}if(pass==null || pass=="")
				{    
					  alert("Enter your Password");
					  return false;
				}
				if(fit==null || fit=="")
				{    
					  alert("Enter your Fit");
					  return false;
				}
				if(inches==null || inches=="")
				{    
					  alert("Enter your Inches");
					  return false;
				}
				if(body_weight==null || body_weight=="")
				{    
					  alert("Enter your Body Weight ");
					  return false;
				}
				if(skin_tone==null || skin_tone=="")
				{    
					  alert("Enter your Skin Tone");
					  return false;
				}
				if(blood_group==null || blood_group=="")
				{    
					  alert("Enter your Body Group ");
					  return false;
				}
				if(spectacles==null || spectacles=="")
				{    
					  alert("Enter your Spectacles ");
					  return false;
				}
				if(hobbies==null || hobbies=="")
				{    
					  alert("Enter your Hobbies ");
					  return false;
				}
				if(any_disability==null || any_disability=="")
				{    
					  alert("Enter your Any Disability ");
					  return false;
				}
				if(acceptation==null || acceptation=="")
				{    
					  alert("Enter your Acceptation ");
					  return false;
				}
				else if (!preg_match("/^[a-zA-Z ]*$/",$acceptation)) {
      alert("Only letters and white space allowed"); 
	  return false;
    }
				if(describe_yourself==null || describe_yourself=="")
				{    
					  alert("Enter your Describe Yourself ");
					  return false;
				}
				if(faculty==null || faculty=="")
				{    
					  alert("Enter your Faculty ");
					  return false;
				}
				if(academic_level==null || academic_level=="")
				{    
					  alert("Enter your Academic Level ");
					  return false;
				}if(college_name==null || college_name=="")
				{    
					  alert("Enter your College Name ");
					  return false;
				}
				if(college_address==null || college_address=="")
				{    
					  alert("Enter your College Address ");
					  return false;
				}
				if(office_contact==null || office_contact=="")
				{    
					  alert("Enter your Office Contact");
					  return false;
				}
				if(job_busi_status==null || job_busi_status=="")
				{    
					  alert("Enter your Job Business Status");
					  return false;
				}
				if(working_post==null || working_post=="")
				{    
					  alert("Enter your Working Post ");
					  return false;
				}
				if(annual_income==null || annual_income=="")
				{    
					  alert("Enter your Annual Income ");
					  return false;
				}
				if(work_place_address==null || work_place_address=="")
				{    
					  alert("Enter your Work Place Address ");
					  return false;
				}
				if(father_name==null || father_name=="")
				{    
					  alert("Enter your Father Name ");
					  return false;
				}
				if(occupation_father==null || occupation_father=="")
				{    
					  alert("Enter your Occupation Father ");
					  return false;
				}
				if(mother_name==null || mother_name=="")
				{    
					  alert("Enter your Mother Name ");
					  return false;
				}
				if(occupation_mother==null || occupation_mother=="")
				{    
					  alert("Enter your Occupation Mother ");
					  return false;
				}
				if(no_of_brother==null || no_of_brother=="")
				{    
					  alert("Enter Your Number of Siblings Brother");
					  return false;
				}
				if(married_brother==null || married_brother=="")
				{    
					  alert("Enter your Marital Satus of Married Siblings Brother ");
					  return false;
				}
				if(unmarried_brother==null || unmarried_brother=="")
				{    
					  alert("Enter your Marital Satus of Unmarried Siblings Brother ");
					  return false;
				}
				if(no_of_sister==null || no_of_sister=="")
				{    
					  alert("Enter Your Number of Siblings Sister");
					  return false;
				}
				if(married_sister==null || married_sister=="")
				{    
					  alert("Enter your Marital Satus of Married Siblings Sister ");
					  return false;
				}
				if(unmarried_sister==null || unmarried_sister=="")
				{    
					  alert("Enter your Marital Satus of Unmarried Siblings Sister ");
					  return false;
				}
				if(ancestral_address==null || ancestral_address=="")
				{    
					  alert("Enter your Ancestral Address ");
					  return false;
				}
				if(parent_conatct_no==null || parent_conatct_no=="")
				{    
					  alert("Enter your Parent Conatct Number");
					  return false;
				}
				if(birth_name==null || birth_name=="")
				{    
					  alert("Enter your Birth Name ");
					  return false;
				}
				if(own_kul==null || own_kul=="")
				{    
					  alert("Enter your OwnKul");
					  return false;
				}
				if(mamkul==null || mamkul=="")
				{    
					  alert("Enter your Mamkul ");
					  return false;
				}
				if(gotra==null || gotra=="")
				{    
					  alert("Enter your Gotra ");
					  return false;
				}
				if(nakshtra==null || nakshtra=="")
				{    
					  alert("Enter your Nakshtra ");
					  return false;
				}
				if(charan==null || charan=="")
				{    
					  alert("Enter your Charan ");
					  return false;
				}
				if(rashi==null || rashi=="")
				{    
					  alert("Enter your Rashi ");
					  return false;
				}
				if(nadi==null || nadi=="")
				{    
					  alert("Enter your Nadi ");
					  return false;
				}
				if(gan==null || gan=="")
				{    
					  alert("Enter your Gan ");
					  return false;
				}
				if(guru==null || guru=="")
				{    
					  alert("Enter your Guru ");
					  return false;
				}
				if(manglik_status==null || manglik_status=="")
				{    
					  alert("Enter your Manglik Status ");
					  return false;
				}
				 if (empty($_POST["email"])) {
    alert("Email is required");
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      alert( "Invalid email format"); 
    }
  }
				
				});
				});
						  
	
          </script>
          
        <script src="js/custom_js.js" type="text/javascript"></script>
        <style>
            ._heading{
                text-align: center;
            }
            .main_heading h2{
                margin:0;
                padding:10px;
                text-align: center;
            }
            ._heading h4{
                color:#1ba39c;
                padding:10px 0;
                margin-bottom:30px;
                margin-top:10px;
                text-align: left;
                border-bottom: 1px solid #1ba39c;
            }
            .col-sm-4.control-label {
                text-align: left;
            }
              .navigation{
                margin-top:15px;
                padding:15px;
                //text-align: center;
				height:60px;
                background-color:#1ba39c;

            }
            .homepage{
                margin-top:170px;
                margin-bottom:20px;
            }
            .main_heading{
                background-color:#1ba39c;
            }
            .main_form{
                border:2px solid #1ba39c;
                background-color:white;
                padding:0;
            }
            .nextbtn{
                height:40px;
                width:90px;
            }
            #id05{
                padding-top:15px;
            }
            #id05 .tab-content{
                padding-top:20px;
            }

        </style>
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
                if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123))
                    return true;
                else
                    return false;
            }
            catch (err) {
                alert(err.Description);
            }
        }
 
    </script>
    <script language="Javascript" type="text/javascript">
 
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
 
    </script>
   

</head>
<body style="color:#0d0e0e" onLoad="activate('frm01', arr);"> 
<header class="main__header" style="background-image:url(img/header.png)">
  <div class="container">
    <nav class="navbar navbar-default" role="navigation"> 
      <div class="navbar-header">
        <h1 class="navbar-brand"><a href="index.php">MATRIMONY</a></h1>
        <a href="#" class="submenu">Menus</a> </div>
      <div class="menuBar">
        <ul class="menu">
          <li class="active"><a href="index.php">Home</a></li>
           <li><a href="login.php">Login</a></li>
        </ul>
      </div>
      <!-- /.navbar-collapse --> 
    </nav>
  </div>
</header>

        <section class="main__middle__container homepage" style="margin-top:100px;">
            <div class="container main_form" style="width:600px">
                <div class="col-sm-12 main_heading">
                    <h2 style="color:#fff">REGISTRATION FORM</h2>
                </div>
                <form class="form-horizontal" name="form1" action="registration_family.php" method="post"> 
                 <?php
				if(isset($_POST['first_name'])){$first_name = $_SESSION['first_name']=$_POST['first_name'];}
				if(isset($_POST['middle_name'])){$middle_name = $_SESSION['middle_name'] = $_POST['middle_name'];}
				if(isset($_POST['last_name'])){$last_name = $_SESSION['last_name'] = $_POST['last_name'];}
				if(isset($_POST['gender'])){$gender = $_SESSION['gender'] = $_POST['gender'];}
				if(isset($_POST['states'])){$states = $_SESSION['states'] = $_POST['states'];}
				if(isset($_POST['city'])){$city = $_SESSION['city'] = $_POST['city'];}
				if(isset($_POST['address'])){$address = $_SESSION['address'] = $_POST['address'];}
				if(isset($_POST['mobile_no1'])){$mobile_no1 = $_SESSION['mobile_no1'] =$_POST['mobile_no1'];}
				if(isset($_POST['mobile_no2'])){$mobile_no2 = $_SESSION['mobile_no2'] = $_POST['mobile_no2'];}
				if(isset($_POST['DATEOFBIRTH'])){$birth_date = $_SESSION['DATEOFBIRTH'] = $_POST['DATEOFBIRTH'];}
				if(isset($_POST['age'])){$age = $_SESSION['age'] = $_POST['age'];}
				if(isset($_POST['birth_time'])){$birth_time = $_SESSION['birth_time'] = $_POST['birth_time'];}
				if(isset($_POST['day_of_birth'])){$day_of_birth = $_SESSION['day_of_birth'] = $_POST['day_of_birth'];}
				if(isset($_POST['birth_city'])){$birth_city = $_SESSION['birth_city'] = $_POST['birth_city'];}
				if(isset($_POST['birth_district'])){$birth_district = $_SESSION['birth_district'] =$_POST['birth_district'];}
				if(isset($_POST['birth_state'])){$birth_state = $_SESSION['birth_state'] = $_POST['birth_state'];}
				if(isset($_POST['cast'])){$cast=$_SESSION['cast']=$_POST['cast'];}
				if(isset($_POST['fit'])){$fit=$_SESSION['fit']=$_POST['fit'];}
				if(isset($_POST['inches'])){$inches=$_SESSION['inches']=$_POST['inches'];}
				if(isset($_POST['body_weight'])){$body_weight=$_SESSION['body_weight']=$_POST['body_weight'];}
				if(isset($_POST['skin_tone'])){$skin_tone=$_SESSION['skin_tone']=$_POST['skin_tone'];}
				if(isset($_POST['blood_group'])){$blood_group=$_SESSION['blood_group']=$_POST['blood_group'];}
				if(isset($_POST['spectacles'])){$spectacles=$_SESSION['spectacles']=$_POST['spectacles'];}
				if(isset($_POST['hobbies'])){$hobbies=$_SESSION['hobbies']=$_POST['hobbies'];}
				if(isset($_POST['any_disability'])){$any_disability=$_SESSION['any_disability']=$_POST['any_disability'];}
				if(isset($_POST['any_disability_desc'])){$any_disability_desc=$_SESSION['any_disability_desc']=$_POST['any_disability_desc'];}
				if(isset($_POST['acceptation'])){$acceptation=$_SESSION['acceptation']=$_POST['acceptation'];}
				if(isset($_POST['describe_yourself'])){$describe_yourself=$_SESSION['describe_yourself']=$_POST['describe_yourself'];}
							?>
                          <input name="first_name" type="hidden" value="<?php echo $first_name;  ?>"  >
                          <input name="middle_name" type="hidden" value="<?php echo $middle_name;  ?>" >
                          <input name="last_name" type="hidden" value="<?php echo $last_name;  ?>">
                          <input type="hidden" name="gender" value="<?php echo $gender;  ?>">
                          <input type="hidden" name="states" value="<?php echo $states;  ?>">
                          <input type="hidden" name="city" value="<?php echo $city;  ?>">
                          <input type="hidden" name="address" value="<?php echo $address;  ?>">
                          <input name="mobile_no1" type="hidden"value="<?php echo $mobile_no1;  ?>"   >
                          <input name="mobile_no2" type="hidden" value="<?php echo $mobile_no2;  ?>">
                          <input type="hidden" name="DATEOFBIRTH" value="<?php echo $day_of_birth;  ?>">
                          <input type="hidden" name="age" value="<?php echo $age; ?>"> 
                          <input name="birth_time" type="hidden" value="<?php echo $birth_time;  ?>"> 
                          <input type="hidden" name="day_of_birth" value="<?php echo $day_of_birth;  ?>">
                          <input name="birth_city" type="hidden" value="<?php echo $birth_city;  ?>" >
                          <input name="birth_district" type="hidden" value="<?php echo $birth_district;  ?>">
                          <input type="hidden" name="birth_state" value="<?php echo $birth_state;  ?>">
                          
                          <input name="cast" type="hidden"value="<?php echo $cast;  ?>"   >
                          <input name="fit" type="hidden" value="<?php echo $fit;  ?>">
                          <input type="hidden" name="inches" value="<?php echo $inches;  ?>">
                          <input type="hidden" name="body_weight" value="<?php echo $body_weight; ?>"> 
                          <input name="skin_tone" type="hidden" value="<?php echo $skin_tone;  ?>"> 
                          <input type="hidden" name="blood_group" value="<?php echo $blood_group;  ?>">
                          <input name="spectacles" type="hidden" value="<?php echo $spectacles;  ?>" >
                          <input name="hobbies" type="hidden" value="<?php echo $hobbies;  ?>">
                          <input type="hidden" name="any_disability" value="<?php echo $any_disability;  ?>">
                          <input name="any_disability_desc" type="hidden" value="<?php echo $any_disability_desc;  ?>" >
                          <input name="acceptation" type="hidden" value="<?php echo $acceptation;  ?>">
                          <input type="hidden" name="describe_yourself" value="<?php echo $describe_yourself;  ?>">
                          
                          
                    <div id="frm03">
                        <div class="col-sm-12">
                            <div class="col-sm-12 _heading">
                                <h4><img src="img/ICON 1/Professional Information.png" style="width:50px;height:50px;">
                               Professional Information</h4>
                            </div>
                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="faculty">Qualification</label>  
                                    <div class="col-sm-8">
                                         <select class="form-control input-md" id="faculty" name="faculty" required>
                                            <option>Select Qualification</option>
											<option value="MBA"<?php if($_SESSION['faculty']=='MBA') echo "selected";?>>MBA</option>
											<option value="CA"<?php if($_SESSION['faculty']=='CA') echo "selected";?>>CA</option>
											<option value="Doctor"<?php if($_SESSION['faculty']=='Doctor') echo "selected";?>>Doctor</option>
											<option value="Advocate"<?php if($_SESSION['faculty']=='Advocate') echo "selected";?>>Advocate</option>
											<option value="Engineer"<?php if($_SESSION['faculty']=='Engineer') echo "selected";?>>Engineer</option>
											<option value="Diploma"<?php if($_SESSION['faculty']=='Diploma') echo "selected";?>>Diploma</option>
											<option value="PostGraduate"<?php if($_SESSION['faculty']=='PostGraduate') echo "selected";?>>PostGraduate</option>
											<option value="Graduate"<?php if($_SESSION['faculty']=='Graduate') echo "selected";?>>Graduate</option>
											<option value="Undergraduate"<?php if($_SESSION['faculty']=='Undergraduate') echo "selected";?>>Undergraduate</option>
											<option value="HSC"<?php if($_SESSION['faculty']=='HSC') echo "selected";?>>HSC</option>
											<option value="SSC"<?php if($_SESSION['faculty']=='SSC') echo "selected";?>>SSC</option>

                                      </select>
                                    </div>
                                </div>
                                <!-- Text input-->
                                <!--<div class="form-group">
                                    <label class="col-sm-4 control-label" for="academic_level">Academic Level</label>  
                                    <div class="col-sm-8">
                                        <select class="form-control input-md" id="academic_level" name="academic_level" required>
                                            <option></option>
                                            <option>Undergraduate</option>
                                            <option>Appear</option>
                                            <option>Graduation</option>
                                            <option>Post Graduation</option>
                                      </select>
                                    </div>
                                </div>-->
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="college_name">College Name </label>  
                                    <div class="col-sm-8">
                                        <input id="college_name" name="college_name" type="text" required class="form-control input-md" value="<?php echo $_SESSION['college_name'];?>" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="college_address">College Address</label>
                                    <div class="col-sm-8">                     
                                        <textarea class="form-control" id="college_address" name="college_address" required rows="2"><?php echo $_SESSION['college_address'];?></textarea>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="job_busi_status">Job / Business Status</label>  
                                    <div class="col-sm-8">
                                        <input id="job_busi_status" name="job_busi_status" type="text" required class="form-control input-md" value="<?php echo $_SESSION['job_busi_status'];?>"> 
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="working_post">Working Post</label>  
                                    <div class="col-sm-8">
                                        <input id="working_post" name="working_post" type="text" required class="form-control input-md" value="<?php echo $_SESSION['working_post'];?>"> 
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="annual_income">Monthly / Yearly Income </label>  
                                    <div class="col-sm-8">
                                        <input id="annual_income" name="annual_income" type="text" required onKeyPress="return isNumber(event)"  class="form-control input-md" value="<?php echo $_SESSION['annual_income'];?>">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="office_contact">Office Contact ( if any )  </label>  
                                    <div class="col-sm-8">
                                        <input id="office_contact" name="office_contact" type="text" required maxlength="12" onKeyPress="return onlyNos(event,this);" class="form-control input-md" value="<?php echo $_SESSION['office_contact'];?>">
                                    </div>
                                </div>
                                
                                
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="work_place_address">Working Place Address</label>  
                                    <div class="col-sm-8">                     
                                        <textarea class="form-control" id="work_place_address" required name="work_place_address"  rows="2"><?php echo $_SESSION['work_place_address'];?></textarea>
                                    </div>
                                </div>
                        </div>
                        <div class="navigation col-sm-6" align="right">
                           <a href="registration_personal_page.php">
                           <button type="button" name="prev" class="btn btn-danger" style="background-color:#1ba39c;border-color:#1ba39c">Previous</button></a>
                           <button type="submit" name="submit" class="btn btn-danger" style="background-color:#1ba39c;border-color:#1ba39c">Next</button></div>
						    <div class="navigation col-sm-6"  align="right" style="padding-top:20px;">
						   <a href="reset.php" style="color:#FFFFFF; font-size:13px; font-weight:bold">Reset</a>
                       </div>
                    </div>
                    
                </form>

            </div>           
        </section>
  <?php include "main/footer.php" ; ?>
     </body>
</html>

