<?php 
include_once "session.php";
include "connect.php";
error_reporting(0);?>

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

function validateEmail(emailField){
        var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

        if (reg.test(emailField.value) == false) 
        {
         document.getElementById("email").value= "";
         document.getElementById('email').style.borderColor = "red";
            //alert('Invalid Email Address');
            return false;
        }
	document.getElementById('email').style.borderColor = "green";
        return true;

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
           
          </script>
          
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
        <script src="js/custom_js.js" type="text/javascript"></script>
        <style>
            @font-face {
			font-family: CenturyGothict;
			src: url(fonts/CenturyGothic.ttf);
		}
		@font-face {
			font-family: CaviarDreams_Bold;
			src: url(fonts/CaviarDreams_Bold.ttf);
		}
		@font-face {
			font-family: CaviarDreams;
			src: url(fonts/CaviarDreams.ttf);
		}
		@font-face {
			font-family: BerlinSans;
			src: url(fonts/BRLNSR.ttf);
		}
		@font-face {
			font-family: BebasNeue;
			src: url(fonts/BebasNeue.otf);
		}
            ._heading{
               text-align:center;
            }
            .main_heading h2{
                margin:0;
                padding:10px;
                text-align: center;
				font-family:Arial;
				font-size:26px;
			}
            ._heading h4{
                color:#225169;
                padding:10px 0;
                margin-bottom:15px;
                margin-top:10px;
				font-family:Arial;
             }
            .col-sm-4.control-label {
                text-align: left;
				font-family:CenturyGothict;
            }
            .navigation{
                margin-top:15px;
                padding:15px;
                height:60px;
                background-color:#225169;

            }

            .homepage{
                margin-top:170px;
                margin-bottom:20px;
            }
            .main_heading{
                background-color:#225169;
				border-bottom: 2px solid orangered;
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
			
	.form-panel:not(.active) {
		display:none;
	}
	.steps{
		margin-top:70px;
		border:1px solid #000;
		border-radius:25px;
		background-color: black;
		opacity: 0.4; 
		padding:50px;
	}
	.hied_border{
		border-style:hidden; 
		border-top-style:hidden;
		border-bottom-style:groove;
		background-color:#F8F8F9;
		border-radius:0px;
		box-shadow:none;
	}

        </style>
        <script language="Javascript" type="text/javascript">
 
        function onlyAlphabets(e, t) {
            try {
                if (window.event) 
                {
                    var charCode = window.event.keyCode;
                    
                }
                else if (e) 
                {
                    var charCode = e.which;
                }
                else 
                { 
                	return true; 
                }
                if ((charCode > 45 && charCode <= 190)) 
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
    <script src="js/jquery-1.7.1.min.js" type="text/javascript"></script>
   <script>
   
        function register_user()
        {
            $.ajax({
                type: "POST",
                data: {
                    username: $('#email').val(),
                },
                url: "userexists.php",
                success: function(data)
                {
                    var res= data.split(","); 
                    
               	    if(res[0]=== 'USER_EXISTS')
                    {
                       $('#user')
                            .css('color', 'red')
                            .html("This "+res[1]+" already exists!");
                            document.getElementById("email").value= "";
                            return false;
                            
                    }
                    else if(data === 'USER_AVAILABLE')
                    {
                        $('#user')
                            .css('color', 'green')
                            .html("");
                            //document.getElementById("myForm").submit();
                            return true;
                    }
                }
            })              
        }
        
         document.addEventListener('DOMContentLoaded', function() {
	  
	  var input = document.getElementById('email');
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
<body style="color:#0d0e0e" onLoad="activate('frm01', arr);"> 
<header class="main__header" >
	<div style="background-color:#225169; height:50px">&nbsp;</div>
		<div class="container">
			<nav class="navbar navbar-default" role="navigation"> 
			<div class="navbar-header">
				<h1 class="navbar-brand" style="font-family:CenturyGothict; font-size:30px"><a href="index.php"><span style="color:#FF4500">MALI</span> <span style="color:#225169">MATRIMONY</span></a></h1>
				<a href="#" class="submenu" style="background-image:url(img/default-logo.png); width:40px; height:40px">Menus</a> 
			</div>
			<div class="menuBar">
				<ul class="menu">
					<li ><a href="index.php">Home</a></li>
					<li ><a href="login.php">Login</a></li>
          			</ul>
			</div>
			<!-- /.navbar-collapse --> 
		</nav>
	</div>
</header>
<div class="reg_container col-sm-12" style="background-image:url(img/RegisterpagePreview.jpg); background-repeat:round; margin-top:120px;">
	<div class="container" style="margin-top:300px; margin-bottom:100px;">
		<div class="container col-md-7 steps" style="">
			<div class="form-panel active">
				<h2 class='list-h2'>How To Register</h2>
				<h4 class='list-h4'><strong>Step 1</strong></h4>
				<p class='list-p'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fill all forms carefully.All fields are mandatory of each form. </p>
			</div>
			<div class="form-panel">
				<h2 class='list-h2'>How To Register</h2>
				<h4 class='list-h4'><strong>Step 2</strong></h4>
				<p class='list-p'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Check all information filled by you. </p>
			</div>
			<div class="form-panel">
				<h2 class='list-h2'>How To Register</h2>
				<h4 class='list-h4'><strong>Step 3</strong></h4>
				<p class='list-p'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Make payment and signup. </p>
			</div>
			
			<img align="right" class="next" src="img/ICON 1/next.png" height="50" width="50" style="cursor:pointer;">
			<img align="right" class="previous" src="img/ICON 1/Prev.png" height="50" width="50" style="cursor:pointer;">
		</div>
		<div class="container col-md-offset-8 reg-form" >
			<div class="col-sm-12 main_heading">
				<h2 style="color:#fff">REGISTRATION FORM</h2>
			</div>
			 <form class="form-horizontal" name="form1" id="myForm" action="reg_insert.php" method="post">
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
				if(isset($_POST['subcast'])){$subcast=$_SESSION['subcast']=$_POST['subcast'];}
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
				if(isset($_POST['faculty'])){$faculty=$_SESSION['faculty']=$_POST['faculty'];}
				//if(isset($_POST['academic_level'])){$academic_level=$_POST['academic_level'];}
				if(isset($_POST['college_name'])){$college_name=$_SESSION['college_name']=$_POST['college_name'];}
				if(isset($_POST['college_address'])){$college_address=$_SESSION['college_address']=$_POST['college_address'];}
				if(isset($_POST['office_contact'])){$office_contact=$_SESSION['office_contact']=$_POST['office_contact'];}
				if(isset($_POST['job_busi_status'])){$job_busi_status=$_SESSION['job_busi_status']=$_POST['job_busi_status'];}
				if(isset($_POST['working_post'])){$working_post=$_SESSION['working_post']=$_POST['working_post'];}
				if(isset($_POST['annual_income'])){$annual_income=$_SESSION['annual_income']=$_POST['annual_income'];}
				if(isset($_POST['work_place_address'])){$work_place_address=$_SESSION['work_place_address']=$_POST['work_place_address'];}
				
				if(isset($_POST['father_name'])){$father_name=$_SESSION['father_name']=$_POST['father_name'];}
				if(isset($_POST['occupation_father'])){$occupation_father=$_SESSION['occupation_father']=$_POST['occupation_father'];}
				if(isset($_POST['mother_name'])){$mother_name=$_SESSION['mother_name']=$_POST['mother_name'];}
				if(isset($_POST['occupation_mother'])){$occupation_mother=$_SESSION['occupation_mother']=$_POST['occupation_mother'];}
				if(isset($_POST['no_of_brother'])){$no_of_brother=$_SESSION['no_of_brother']=$_POST['no_of_brother'];}
				if(isset($_POST['married_brother'])){$married_brother=$_SESSION['married_brother']=$_POST['married_brother'];}
				if(isset($_POST['unmarried_brother'])){$unmarried_brother=$_SESSION['unmarried_brother']=$_POST['unmarried_brother'];}
				if(isset($_POST['no_of_sister'])){$no_of_sister=$_SESSION['no_of_sister']=$_POST['no_of_sister'];}
				if(isset($_POST['married_sister'])){$married_sister=$_SESSION['married_sister']=$_POST['married_sister'];}
				if(isset($_POST['unmarried_sister'])){$unmarried_sister=$_SESSION['unmarried_sister']=$_POST['unmarried_sister'];}
				if(isset($_POST['permanent_residential_address'])){$permanent_residential_address=$_SESSION['permanent_residential_address']=$_POST['permanent_residential_address'];}
				if(isset($_POST['parent_conatct_no'])){$parent_conatct_no=$_SESSION['parent_conatct_no']=$_POST['parent_conatct_no'];}
				if(isset($_POST['birth_name'])){$birth_name=$_SESSION['birth_name']=$_POST['birth_name'];}
				if(isset($_POST['own_kul'])){$own_kul=$_SESSION['own_kul']=$_POST['own_kul'];}
				if(isset($_POST['mamkul'])){$mamkul=$_SESSION['mamkul']=$_POST['mamkul'];}
				if(isset($_POST['gotra'])){$gotra=$_SESSION['gotra']=$_POST['gotra'];}
				if(isset($_POST['nakshtra'])){$nakshtra=$_SESSION['nakshtra']=$_POST['nakshtra'];}
				if(isset($_POST['charan'])){$charan=$_SESSION['charan']=$_POST['charan'];}
				if(isset($_POST['rashi'])){$rashi=$_SESSION['rashi']=$_POST['rashi'];}
				if(isset($_POST['nadi'])){$nadi=$_SESSION['nadi']=$_POST['nadi'];}
				if(isset($_POST['gan'])){$gan=$_SESSION['gan']=$_POST['gan'];}
				if(isset($_POST['guru'])){$guru=$_SESSION['guru']=$_POST['guru'];}
				if(isset($_POST['manglik_status'])){$manglik_status=$_SESSION['manglik_status']=$_POST['manglik_status'];}
				
				if(isset($_POST['marriageType'])){$marriageType=$_SESSION['marriageType']=$_POST['marriageType'];}
				if(isset($_POST['previous_marriage_date_divorcee'])){$previous_marriage_date_divorcee=$_SESSION['previous_marriage_date_divorcee']=$_POST['previous_marriage_date_divorcee'];}
				if(isset($_POST['date_of_divorce'])){$date_of_divorce=$_SESSION['date_of_divorce']=$_POST['date_of_divorce'];}
				if(isset($_POST['child_status_divorce'])){$child_status_divorce=$_SESSION['child_status_divorce']=$_POST['child_status_divorce'];}
				if(isset($_POST['child_custody_status_divorce'])){$child_custody_status_divorce=$_SESSION['child_custody_status_divorce']=$_POST['child_custody_status_divorce'];}
				if(isset($_POST['previous_marriage_address_divorce'])){$previous_marriage_address_divorce=$_SESSION['previous_marriage_address_divorce']=$_POST['previous_marriage_address_divorce'];}
				if(isset($_POST['previous_marriage_date_widow'])){$previous_marriage_date_widow=$_SESSION['previous_marriage_date_widow']=$_POST['previous_marriage_date_widow'];}
				if(isset($_POST['date_partner_death_widow'])){$date_partner_death_widow=$_SESSION['date_partner_death_widow']=$_POST['date_partner_death_widow'];}
				if(isset($_POST['child_status_widow'])){$child_status_widow=$_SESSION['child_status_widow']=$_POST['child_status_widow'];}
				if(isset($_POST['previous_marriage_address_widow'])){$previous_marriage_address_widow=$_SESSION['previous_marriage_address_widow']=$_POST['previous_marriage_address_widow'];}
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
                          <input type="hidden" name="DATEOFBIRTH" value="<?php echo $birth_date;  ?>">
                          <input type="hidden" name="age" value="<?php echo $age; ?>"> 
                          <input name="birth_time" type="hidden" value="<?php echo $birth_time;  ?>"> 
                          <input type="hidden" name="day_of_birth" value="<?php echo $day_of_birth;  ?>">
                          <input name="birth_city" type="hidden" value="<?php echo $birth_city;  ?>" >
                          <input name="birth_district" type="hidden" value="<?php echo $birth_district;  ?>">
                          <input type="hidden" name="birth_state" value="<?php echo $birth_state;  ?>">
                          
                          <input name="cast" type="hidden"value="<?php echo $cast;  ?>"   >
						   <input name="subcast" type="hidden" value="<?php echo $subcast; ?>" >
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
                          
                          <input type="hidden" name="faculty" value="<?php echo $faculty;  ?>">
                          <input type="hidden" name="academic_level" value="<?php echo $academic_level;  ?>">
                          <input name="college_name" type="hidden" value="<?php echo $college_name;  ?>" >
                          <input name="college_address" type="hidden" value="<?php echo $college_address;  ?>" >
                          <input name="job_busi_status" type="hidden" value="<?php echo $job_busi_status;  ?>" >
                          <input name="working_post" type="hidden" value="<?php echo $working_post;  ?>" >
                          <input name="annual_income" type="hidden" value="<?php echo $annual_income;  ?>" >
                          <input name="office_contact" type="hidden" value="<?php echo $office_contact;  ?>" >
                          <input name="work_place_address" type="hidden" value="<?php echo $work_place_address;  ?>" >
                         
                          <input name="father_name" type="hidden" value="<?php echo $father_name;  ?>">
                          <input name="occupation_father" type="hidden" value="<?php echo $occupation_father;  ?>">
                          <input name="mother_name" type="hidden" value="<?php echo $mother_name;  ?>">
                          <input type="hidden" name="occupation_mother" value="<?php echo $occupation_mother;  ?>">
                          <input type="hidden" name="no_of_brother" value="<?php echo $no_of_brother;  ?>">
                          <input type="hidden" name="married_brother" value="<?php echo $married_brother;  ?>">
                          <input type="hidden" name="unmarried_brother" value="<?php echo $unmarried_brother;  ?>">
                          <input type="hidden" name="no_of_sister" value="<?php echo $no_of_sister;  ?>">
                          <input type="hidden" name="married_sister" value="<?php echo $married_sister;  ?>">
                          <input type="hidden" name="unmarried_sister" value="<?php echo $unmarried_sister;  ?>">
                          <input type="hidden" name="permanent_residential_address" value="<?php echo $permanent_residential_address;  ?>">
                          <input type="hidden" name="parent_conatct_no" value="<?php echo $parent_conatct_no;  ?>">  
                          
                          <input name="birth_name" type="hidden" value="<?php echo $birth_name;  ?>">
                          <input name="own_kul" type="hidden" value="<?php echo $own_kul;  ?>">
			  <input name="mamkul" type="hidden" value="<?php echo $mamkul;  ?>" >
			  <input name="gotra" type="hidden" value="<?php echo $gotra;  ?>">
                          <input type="hidden" name="nakshtra" value="<?php echo $nakshtra;  ?>">
			  <input type="hidden" name="charan" value="<?php echo $charan ?>">
                          <input type="hidden" name="rashi" value="<?php echo $rashi ?>">
                          <input type="hidden" name="nadi" value="<?php echo $nadi ?>">
                          <input type="hidden" name="gan" value="<?php echo $gan ?>">
                          <input type="hidden" name="guru" value="<?php echo $guru ?>" >
                          <input type="hidden" name="manglik_status" value="<?php echo $manglik_status ?>" >
                          
			<input type="hidden" name="marriageType" value="<?php echo $marriageType ?>" />
			<input name="previous_marriage_date_divorcee" type="hidden" value="<?php echo $previous_marriage_date_divorcee ?>">
			<input name="date_of_divorce" type="hidden" value="<?php echo $date_of_divorce ?>" >
			<input name="child_status_divorce" type="hidden" value="<?php echo $child_status_divorce ?>" >
			<input name="child_custody_status_divorce" type="hidden" value="<?php echo $child_custody_status_divorce ?>" >
			<input name="previous_marriage_address_divorce" type="hidden" value="<?php echo $previous_marriage_address_divorce ?>" >
			<input  name="previous_marriage_date_widow" type="hidden" value="<?php echo $previous_marriage_date_widow ?>">
			<input name="date_partner_death_widow" type="hidden" value="<?php echo $date_partner_death_widow ?>" >
			<input name="child_status_widow" type="hidden" value="<?php echo $child_status_widow ?>" >
			<input name="previous_marriage_address_widow" type="hidden" value="<?php echo $previous_marriage_address_widow ?>" >
                          
				<div class="col-sm-12" style="background-color:#F8F8F9;">
					<div class="col-sm-12 _heading">
						<h5> <img src="img/ICON 1/Safetycord-Login.png" style="width:50px;height:50px;"> Please Provide Your Email Id and Password for Login</h5>
					</div>
					
					 <div class="form-group" >
	                                    <label class="col-sm-4 control-label" for="first_name">Email Id</label>
	                                    <div class="col-sm-7">
	                                        <img src="img/ICON 1/lock_secure_security_password-512.png" style="height:25px; width:25px"><input id="email" name="email" type="email" class="form-control input-md hied_border" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required style="width: 90%;display: inline;" onBlur="validateEmail(this); return register_user();" onKeyPress="return onlyAlphabets(event,this);"><span id="user"></span>
	                                    </div>
	                                </div>
	                                
	                                <div class="form-group" >
	                                    <label class="col-sm-4 control-label" for="middle_name">Password</label>  
	                                    
	                                    <div class="col-sm-7">
	                                        <img src="img/ICON 1/password.png" style="width:25px; height:25px;"><input  name="pass" type="password" id="txtPassword" required  class="form-control input-md hied_border" width="300px" style="width: 90%;display: inline;">
	                                    </div>
	                                </div>
	                                
	                                <div class="form-group">
	                                    <label class="col-sm-4 control-label" for="middle_name">Confirm Password</label>  
	                                    
	                                    <div class="col-sm-7">
	                                        <img src="img/ICON 1/password.png" style="width:25px; height:25px;"><input id="txtConfirmPassword" name="con_pass" type="password" required  class="form-control input-md hied_border" style="width: 90%;display: inline;">
	                                    </div>
	    
	                            </div>
					<input type="checkbox" name="agree" value="check" checked required><span style="margin-left:20px;">I Agree <a href="terms.php">Terms and Conditions</a> (Registration Fee Rs 2100 /- For 3 years)</span>
					<br>
					<br>
		                            <div class=" col-sm-12" style="text-align:center">
		                                <input type="submit" value="PAY AND SIGN UP" name="button" id="button" onKeyUp="return register_user();" class="btn btn-primary  "><!--allLetter(document.form1.text1)-->
		                                <div id="w8"></div>
		                                <div id="info" ></div>
		                            </div>
	
                               
					<div class="form-group" style="margin-bottom:0px">
						<div class="navigation col-sm-6" align="left" style="padding-top:15px;">
							
						</div>
						<div class="navigation col-sm-6" align="right">
							<a href="registration_marriage_type.php" name="prev" style="float:right; margin-right:15px;">
								<img align="right" src="img/ICON 1//RegistrationFormPrevious.png" style="height:37px">
							</a>
						</div>
					</div>
			</form>  
		</div> 
	</div> 
</div>
<script src="js/jquery.min.js"></script>
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
        <!--<section class="main__middle__container homepage" style="margin-top:100px; height:120vh">
            <div class="container main_form" style="width:600px">
                <div class="col-sm-12 main_heading">
                    <h2 style="color:#fff">REGISTRATION FORM</h2>
                </div>
                <form class="form-horizontal" name="form1" id="myForm" action="reg_insert.php" method="post"  > 
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
						if(isset($_POST['faculty'])){$faculty=$_SESSION['faculty']=$_POST['faculty'];}
						//if(isset($_POST['academic_level'])){$academic_level=$_POST['academic_level'];}
						if(isset($_POST['college_name'])){$college_name=$_SESSION['college_name']=$_POST['college_name'];}
						if(isset($_POST['college_address'])){$college_address=$_SESSION['college_address']=$_POST['college_address'];}
						if(isset($_POST['office_contact'])){$office_contact=$_SESSION['office_contact']=$_POST['office_contact'];}
						if(isset($_POST['job_busi_status'])){$job_busi_status=$_SESSION['job_busi_status']=$_POST['job_busi_status'];}
						if(isset($_POST['working_post'])){$working_post=$_SESSION['working_post']=$_POST['working_post'];}
						if(isset($_POST['annual_income'])){$annual_income=$_SESSION['annual_income']=$_POST['annual_income'];}
						if(isset($_POST['work_place_address'])){$work_place_address=$_SESSION['work_place_address']=$_POST['work_place_address'];}
						
						if(isset($_POST['father_name'])){$father_name=$_SESSION['father_name']=$_POST['father_name'];}
						if(isset($_POST['occupation_father'])){$occupation_father=$_SESSION['occupation_father']=$_POST['occupation_father'];}
						if(isset($_POST['mother_name'])){$mother_name=$_SESSION['mother_name']=$_POST['mother_name'];}
						if(isset($_POST['occupation_mother'])){$occupation_mother=$_SESSION['occupation_mother']=$_POST['occupation_mother'];}
						if(isset($_POST['no_of_brother'])){$no_of_brother=$_SESSION['no_of_brother']=$_POST['no_of_brother'];}
						if(isset($_POST['married_brother'])){$married_brother=$_SESSION['married_brother']=$_POST['married_brother'];}
						if(isset($_POST['unmarried_brother'])){$unmarried_brother=$_SESSION['unmarried_brother']=$_POST['unmarried_brother'];}
						if(isset($_POST['no_of_sister'])){$no_of_sister=$_SESSION['no_of_sister']=$_POST['no_of_sister'];}
						if(isset($_POST['married_sister'])){$married_sister=$_SESSION['married_sister']=$_POST['married_sister'];}
						if(isset($_POST['unmarried_sister'])){$unmarried_sister=$_SESSION['unmarried_sister']=$_POST['unmarried_sister'];}
						if(isset($_POST['permanent_residential_address'])){$permanent_residential_address=$_SESSION['permanent_residential_address']=$_POST['permanent_residential_address'];}
						if(isset($_POST['parent_conatct_no'])){$parent_conatct_no=$_SESSION['parent_conatct_no']=$_POST['parent_conatct_no'];}
						if(isset($_POST['birth_name'])){$birth_name=$_SESSION['birth_name']=$_POST['birth_name'];}
						if(isset($_POST['own_kul'])){$own_kul=$_SESSION['own_kul']=$_POST['own_kul'];}
						if(isset($_POST['mamkul'])){$mamkul=$_SESSION['mamkul']=$_POST['mamkul'];}
						if(isset($_POST['gotra'])){$gotra=$_SESSION['gotra']=$_POST['gotra'];}
						if(isset($_POST['nakshtra'])){$nakshtra=$_SESSION['nakshtra']=$_POST['nakshtra'];}
						if(isset($_POST['charan'])){$charan=$_SESSION['charan']=$_POST['charan'];}
						if(isset($_POST['rashi'])){$rashi=$_SESSION['rashi']=$_POST['rashi'];}
						if(isset($_POST['nadi'])){$nadi=$_SESSION['nadi']=$_POST['nadi'];}
						if(isset($_POST['gan'])){$gan=$_SESSION['gan']=$_POST['gan'];}
						if(isset($_POST['guru'])){$guru=$_SESSION['guru']=$_POST['guru'];}
						if(isset($_POST['manglik_status'])){$manglik_status=$_SESSION['manglik_status']=$_POST['manglik_status'];}
						
						if(isset($_POST['marriageType'])){$marriageType=$_SESSION['marriageType']=$_POST['marriageType'];}
						if(isset($_POST['previous_marriage_date_divorcee'])){$previous_marriage_date_divorcee=$_SESSION['previous_marriage_date_divorcee']=$_POST['previous_marriage_date_divorcee'];}
						if(isset($_POST['date_of_divorce'])){$date_of_divorce=$_SESSION['date_of_divorce']=$_POST['date_of_divorce'];}
						if(isset($_POST['child_status_divorce'])){$child_status_divorce=$_SESSION['child_status_divorce']=$_POST['child_status_divorce'];}
						if(isset($_POST['child_custody_status_divorce'])){$child_custody_status_divorce=$_SESSION['child_custody_status_divorce']=$_POST['child_custody_status_divorce'];}
						if(isset($_POST['previous_marriage_address_divorce'])){$previous_marriage_address_divorce=$_SESSION['previous_marriage_address_divorce']=$_POST['previous_marriage_address_divorce'];}
						if(isset($_POST['previous_marriage_date_widow'])){$previous_marriage_date_widow=$_SESSION['previous_marriage_date_widow']=$_POST['previous_marriage_date_widow'];}
						if(isset($_POST['date_partner_death_widow'])){$date_partner_death_widow=$_SESSION['date_partner_death_widow']=$_POST['date_partner_death_widow'];}
						if(isset($_POST['child_status_widow'])){$child_status_widow=$_SESSION['child_status_widow']=$_POST['child_status_widow'];}
						if(isset($_POST['previous_marriage_address_widow'])){$previous_marriage_address_widow=$_SESSION['previous_marriage_address_widow']=$_POST['previous_marriage_address_widow'];}
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
                          <input type="hidden" name="DATEOFBIRTH" value="<?php echo $birth_date;  ?>">
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
                          
                          <input type="hidden" name="faculty" value="<?php echo $faculty;  ?>">
                          <input type="hidden" name="academic_level" value="<?php echo $academic_level;  ?>">
                          <input name="college_name" type="hidden" value="<?php echo $college_name;  ?>" >
                          <input name="college_address" type="hidden" value="<?php echo $college_address;  ?>" >
                          <input name="job_busi_status" type="hidden" value="<?php echo $job_busi_status;  ?>" >
                          <input name="working_post" type="hidden" value="<?php echo $working_post;  ?>" >
                          <input name="annual_income" type="hidden" value="<?php echo $annual_income;  ?>" >
                          <input name="office_contact" type="hidden" value="<?php echo $office_contact;  ?>" >
                          <input name="work_place_address" type="hidden" value="<?php echo $work_place_address;  ?>" >
                         
                          <input name="father_name" type="hidden" value="<?php echo $father_name;  ?>">
                          <input name="occupation_father" type="hidden" value="<?php echo $occupation_father;  ?>">
                          <input name="mother_name" type="hidden" value="<?php echo $mother_name;  ?>">
                          <input type="hidden" name="occupation_mother" value="<?php echo $occupation_mother;  ?>">
                          <input type="hidden" name="no_of_brother" value="<?php echo $no_of_brother;  ?>">
                          <input type="hidden" name="married_brother" value="<?php echo $married_brother;  ?>">
                          <input type="hidden" name="unmarried_brother" value="<?php echo $unmarried_brother;  ?>">
                          <input type="hidden" name="no_of_sister" value="<?php echo $no_of_sister;  ?>">
                          <input type="hidden" name="married_sister" value="<?php echo $married_sister;  ?>">
                          <input type="hidden" name="unmarried_sister" value="<?php echo $unmarried_sister;  ?>">
                          <input type="hidden" name="permanent_residential_address" value="<?php echo $permanent_residential_address;  ?>">
                          <input type="hidden" name="parent_conatct_no" value="<?php echo $parent_conatct_no;  ?>">  
                          
                          <input name="birth_name" type="hidden" value="<?php echo $birth_name;  ?>">
                          <input name="own_kul" type="hidden" value="<?php echo $own_kul;  ?>">
						  <input name="mamkul" type="hidden" value="<?php echo $mamkul;  ?>" >
						  <input name="gotra" type="hidden" value="<?php echo $gotra;  ?>">
                          <input type="hidden" name="nakshtra" value="<?php echo $nakshtra;  ?>">
						  <input type="hidden" name="charan" value="<?php echo $charan ?>">
                          <input type="hidden" name="rashi" value="<?php echo $rashi ?>">
                          <input type="hidden" name="nadi" value="<?php echo $nadi ?>">
                          <input type="hidden" name="gan" value="<?php echo $gan ?>">
                          <input type="hidden" name="guru" value="<?php echo $guru ?>" >
                          <input type="hidden" name="manglik_status" value="<?php echo $manglik_status ?>" >
                          
						<input type="hidden" name="marriageType" value="<?php echo $marriageType ?>" />
						<input name="previous_marriage_date_divorcee" type="hidden" value="<?php echo $previous_marriage_date_divorcee ?>">
						<input name="date_of_divorce" type="hidden" value="<?php echo $date_of_divorce ?>" >
						<input name="child_status_divorce" type="hidden" value="<?php echo $child_status_divorce ?>" >
						<input name="child_custody_status_divorce" type="hidden" value="<?php echo $child_custody_status_divorce ?>" >
						<input name="previous_marriage_address_divorce" type="hidden" value="<?php echo $previous_marriage_address_divorce ?>" >
						<input  name="previous_marriage_date_widow" type="hidden" value="<?php echo $previous_marriage_date_widow ?>">
						<input name="date_partner_death_widow" type="hidden" value="<?php echo $date_partner_death_widow ?>" >
						<input name="child_status_widow" type="hidden" value="<?php echo $child_status_widow ?>" >
						<input name="previous_marriage_address_widow" type="hidden" value="<?php echo $previous_marriage_address_widow ?>" >
					
					<div id="frm07">
                        <div class="col-sm-12" id="id05">
                         <div class="col-sm-12 _heading">
                                <h5> <img src="img/ICON 1/Safetycord-Login.png" style="width:50px;height:50px;">
                                Please Provide Your Email Id and Password for Login</h5>
                            </div>
                            <hr>
                            <div class="form-group" >
                                    <label class="col-sm-4 control-label" for="first_name">Email Id</label>
                                    
                                    <div class="col-sm-7">
                                        <img src="img/ICON 1/lock_secure_security_password-512.png" style="height:25px; width:25px"><input id="email" name="email" type="email" class="form-control input-md" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required style="width: 90%;display: inline;" onblur="validateEmail(this); return register_user();" onKeyPress="return onlyAlphabets(event,this);"><span id="user"></span>
                                    </div>
                                </div>
                               
                                <div class="form-group" >
                                    <label class="col-sm-4 control-label" for="middle_name">Password</label>  
                                   
                                    <div class="col-sm-7">
                                        <img src="img/ICON 1/password.png" style="width:25px; height:25px;"><input  name="pass" type="password" id="txtPassword" required  class="form-control input-md" width="300px" style="width: 90%;display: inline;">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="middle_name">Confirm Password</label>  
                                    
                                    <div class="col-sm-7">
                                        <img src="img/ICON 1/password.png" style="width:25px; height:25px;"><input id="txtConfirmPassword" name="con_pass" type="password" required  class="form-control input-md" style="width: 90%;display: inline;">
                                    </div>
    
<br>                            </div>
<input type="checkbox" name="agree" value="check" checked required><span style="margin-left:20px;">I Agree <a href="terms.php">Terms and Conditions</a> (Registration Fee Rs 500 /-)</span>
<br>
<br>
                            <div class=" col-sm-12" style="text-align:center">
                                <input type="submit" value="PAY AND SIGN UP" name="button" id="button" onkeyup="return register_user();" class="btn btn-primary  ">
                                <div id="w8"></div>
                                <div id="info" ></div>
                            </div>
                            <div class="navigation col-sm-12" style="width: 596px;margin-left: -15px;">
                           <a href="registration_marriage_type.php" class="btn btn-danger" style="background-color:#054c48;border-color:#1ba39c">Previous
                        
                          
                        </div>
                         
                    </div>
                    
                </form>

            </div>           
        </section>-->
  <?php include "main/footer.php" ;?>
     </body>
</html>

