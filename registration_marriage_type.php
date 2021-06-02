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
		//margin-top:150px;
		border:1px solid #000;
		border-radius:25px;
		background-color: black;
		opacity: 0.4; 
		padding:50px;
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
 
 	function CompareDate() {

		var startDate=document.getElementById("previous_marriage_date_divorcee").value;
		var endDate=document.getElementById("date_of_divorce").value;
		var date1 = new Date(startDate);
		var date2 = new Date(endDate);
		
		 if(date1 >= date2)
		 {
		        alert("Divorcee date must be greater than previous marriage date");
		        document.getElementById("date_of_divorce").value = "";
		        return false;
		 }
		
	}
 	 
 	 function CompareDate1() {

		var startDate1=document.getElementById("previous_marriage_date").value;
		var endDate1=document.getElementById("date_partner_death_widow").value;
		var date11 = new Date(startDate1);
		var date12 = new Date(endDate1);
		
		 if(date11 >= date12)
		 {
		        alert("Partner death date must be greater than previous marriage date");
		        document.getElementById("date_partner_death_widow").value = "";
		        return false;
		 }
		
	}
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
	<div class="container" style="margin-top:450px; margin-bottom:100px;">
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
		<div class="container col-md-offset-8 reg-form1">
			<div class="col-sm-12 main_heading">
				<h2 style="color:#fff">REGISTRATION FORM</h2>
			</div>
			 <form class="form-horizontal" id="form1" name="form1" action="registration_user.php" method="post" > 
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
                          
				<div class="col-sm-12" style="background-color: #f6f6f6;">
					<div class="col-sm-12 _heading">&nbsp;</div>
					
					<img src="img/ICON 1/D W.png" style="width:50px;height:50px;">
		                                <ul id="myTab" class="nav nav-pills" style="margin-top: -50px;margin-left: 79px;">
		                                <input type="hidden" name="marriageType" value="Never married">
		                                    <li <?php if($_SESSION['marriageType']=='divorcee'){?> class="active"<?php }?>>
		                                        <a href="#1a" data-toggle="tab">
		                                            <div style="margin: 0;" class="checkbox">
		                                                <label style="float: left;">
		                                                    <input style="display: inline-block;" type="checkbox" id="marriageType" name="marriageType" value="divorcee" <?php if($_SESSION['marriageType']=='divorcee'){?> checked="checked"<?php }?> />
		                                                    <div style="display: inline-block;">Divorcee Information</div>
		                                                </label>
		                                            </div>
		                                        </a>
		                                       
		                                        
		                                    </li>
		                                    <li <?php if($_SESSION['marriageType']=='widow'){?> class="active"<?php }?>>
		                                        <a href="#2a" data-toggle="tab">
		                                            <div style="margin: 0;" class="checkbox">
		                                                <label style="float: left;">
		                                                    <input style="display: inline-block;" type="checkbox" id="marriageType" name="marriageType"  value="widow" <?php if($_SESSION['marriageType']=='widow'){?> checked="checked"<?php }?>/>
		                                                    <div style="display: inline-block;">Widow/Widower Information</div>
		                                                </label>
		                                            </div>
		                                        </a>
		                                        
		                                    </li>
		
		                                </ul>
						<hr> <b> <font color="#FF0000">This is only for Divorcee or Widow/Widower</font> </b>
						
						<div class="tab-content clearfix">
                                    		<div class="tab-pane <?php if($_SESSION['marriageType']=='divorcee'){?>active<?php }else{?><?php }?>" id="1a">
	                                            <div class="form-group">
	                                                <label class="col-sm-4 control-label" for="previous_marriage_date">Previous Marriage Date</label>  
	                                                <div class="col-md-8">
	                                                    <input id="previous_marriage_date_divorcee" name="previous_marriage_date_divorcee" type="date" max="3000-12-31" class="form-control input-md" placeholder="DD/MM/YYYY" value="<?php echo $_SESSION['previous_marriage_date_divorcee'];?>" >
	
	                                                </div>
	                                            </div>
	                                            <div class="form-group">
	                                                <label class="col-sm-4 control-label" for="date_of_divorce">Date of Divorce </label>  
	                                                <div class="col-md-8">
	                                                    <input id="date_of_divorce" name="date_of_divorce" type="date" max="3000-12-31" class="form-control input-md" placeholder="DD/MM/YYYY" value="<?php echo $_SESSION['date_of_divorce'];?>"  onBlur="return  CompareDate()">
	
	                                                </div>
	                                            </div>
	                                            <div class="form-group">
	                                                <label class="col-sm-4 control-label" for="child_status">No. Of Child</label>  
	                                                <div class="col-sm-8">
							       <select class="form-control" id="faculty" name="child_status_divorce">
					                          <option value="None" <?php if($_SESSION['child_status_divorce']=='None') echo "selected";?> >None</option>
					                          <option value="1" <?php if($_SESSION['child_status_divorce']=='1') echo "selected";?> >1</option>
					                          <option value="2" <?php if($_SESSION['child_status_divorce']=='2') echo "selected";?> >2</option>
					                          <option value="3" <?php if($_SESSION['child_status_divorce']=='3') echo "selected";?> >3</option>
					                          <option value="4 and above" <?php if($_SESSION['child_status_divorce']=='4 and above') echo "selected";?> >4 and above</option>
					                       </select>
	                                                </div>
	                                            </div>
	                                            <div class="form-group">
	                                                <label class="col-sm-4 control-label" for="child_custody_status">Child Living Status</label>  
	                                                <div class="col-sm-8">
					                        <select class="form-control" id="child_custody_status_divorce" name="child_custody_status_divorce">
					                          <option value="Not Applicable" <?php if($_SESSION['child_custody_status_divorce']=='Not Applicable') echo "selected";?> >Not Applicable</option>
					                          <option value="Living With Me" <?php if($_SESSION['child_custody_status_divorce']=='Living With Me') echo "selected";?> >Living With Me</option>
					                          <option value="Not Living With Me" <?php if($_SESSION['child_custody_status_divorce']=='Not Living With Me') echo "selected";?> >Not Living With Me</option>                          
					                        </select>                                                                         
	                                                </div>
	                                            </div>
	                                            <?php if($gender=="Bride") { ?>
	                                            <div class="form-group">
	                                                <label class="col-sm-4 control-label" for="previous_marriage_address">Previous Marriage Address</label>  
	                                                <div class="col-sm-8">                     
	                                                    <textarea class="form-control" id="previous_marriage_address_divorce"  name="previous_marriage_address_divorce" rows="2"><?php echo $_SESSION['previous_marriage_address_divorce'];?></textarea>
	                                                </div>
	                                            </div>
	                                            <?php } ?>
	                                    </div>
	                                    <div class="tab-pane <?php if($_SESSION['marriageType']=='widow'){?>active<?php }?>" id="2a">
	                                            <div class="form-group">
	                                                <label class="col-sm-4 control-label" for="previous_marriage_date">Previous Marriage Date </label>  
	                                                <div class="col-md-8">
	                                                    <input id="previous_marriage_date" name="previous_marriage_date_widow" type="date" max="3000-12-31" class="form-control input-md" placeholder="DD/MM/YYYY" value="<?php echo $_SESSION['previous_marriage_date_widow'];?>" >
	
	                                                </div>
	                                            </div>
	                                            <div class="form-group">
	                                                <label class="col-sm-4 control-label" for="date_partner_death">Date of Partner &#39;s Death</label>  
	                                                <div class="col-md-8">
	                                                    <input id="date_partner_death_widow" name="date_partner_death_widow" type="date" max="3000-12-31" class="form-control input-md" placeholder="DD/MM/YYYY" value="<?php echo $_SESSION['date_partner_death_widow'];?>" onBlur="return  CompareDate1()">
	
	                                                </div>
	                                            </div>

	                                            <div class="form-group">
	                                                <label class="col-sm-4 control-label" for="child_status">No. Of Child</label>
	
	                                                <div class="col-sm-8">
						                <select class="form-control" id="faculty" name="child_status_widow">
						                    <option value="None" <?php if($_SESSION['child_status_widow']=='None') echo "selected";?> >None</option>
						                    <option value="1" <?php if($_SESSION['child_status_widow']=='1') echo "selected";?> >1</option>
						                    <option value="2" <?php if($_SESSION['child_status_widow']=='2') echo "selected";?> >2</option>
						                    <option value="3" <?php if($_SESSION['child_status_widow']=='3') echo "selected";?> >3</option>
						                    <option value="4 and above" <?php if($_SESSION['child_status_widow']=='4 and above') echo "selected";?> >4 and above</option>
						                </select>
	            					</div>
	                                            </div>
	                                             <?php if($gender=="Bride") { ?>
	                                            <div class="form-group">
	                     					 <label class="col-sm-4 control-label" for="previous_marriage_address">Previous Marriage Address</label>  
	                                                <div class="col-sm-8">                     
	                                                    <textarea class="form-control" id="previous_marriage_address_widow"  name="previous_marriage_address_widow" rows="2"><?php echo $_SESSION['previous_marriage_address_widow'];?></textarea>
	                                                </div>
	                                            </div>
	                                            <?php } ?>
	                                            
	                                    </div>
	
	                                </div>	
						
					
	
	                                
					<div class="form-group" style="margin-bottom:0px">
						<div class="navigation col-sm-6" align="left" style="padding-top:15px;">
							<a class="btn" href="reset.php" style="color:#FFFFFF; font-size:15px; font-weight:bold; text-align:right; border:1px solid;">Reset</a>
						</div>
						<div class="navigation col-sm-6" align="right">
							<button class="btn" type="submit" name="submit" style="float:right; color:#ffffff; background-color:#4b6a79; padding:0px; width:90px"> <img align="right" src="img/ICON 1/RegistrationFormNext.png" style="height:35px;width:90px"> </button>
							<a href="registration_astrological.php" name="prev" style="float:right; margin-right:15px;">
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
        
        <!--<section class="main__middle__container homepage" style="margin-top:100px;height:120vh" >
            <div class="container main_form" style="width:600px">
                <div class="col-sm-12 main_heading">
                    <h2 style="color:#fff">REGISTRATION FORM</h2>
                </div>
                <form class="form-horizontal" id="form1" name="form1" action="registration_user.php" method="post"> 
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
                       
                    <div id="frm06">
                        <div class="col-sm-12" id="id05">
                        
                            <div id="exTab1"><img src="img/ICON 1/D W.png" style="width:50px;height:50px;">
                                <ul id="myTab" class="nav nav-pills" style="margin-top: -50px;margin-left: 79px;">
                                <input type="hidden" name="marriageType" value="Never married">
                                    <li <?php if($_SESSION['marriageType']=='divorcee'){?> class="active"<?php }?>>
                                        <a href="#1a" data-toggle="tab">
                                            <div style="margin: 0;" class="checkbox">
                                                <label style="float: left;">
                                                    <input style="display: inline-block;" type="checkbox" id="marriageType" name="marriageType" value="divorcee" <?php if($_SESSION['marriageType']=='divorcee'){?> checked="checked"<?php }?> />
                                                    <div style="display: inline-block;">Divorcee Information</div>
                                                </label>
                                            </div>
                                        </a>
                                        
                                        
                                    </li>
                                    <li <?php if($_SESSION['marriageType']=='widow'){?> class="active"<?php }?>>
                                        <a href="#2a" data-toggle="tab">
                                            <div style="margin: 0;" class="checkbox">
                                                <label style="float: left;">
                                                    <input style="display: inline-block;" type="checkbox" id="marriageType" name="marriageType"  value="widow" <?php if($_SESSION['marriageType']=='widow'){?> checked="checked"<?php }?>/>
                                                    <div style="display: inline-block;">Widow/Widower Information</div>
                                                </label>
                                            </div>
                                        </a>
                                        
                                    </li>

                                </ul>
<hr> <b> <font color="#FF0000">This is only for Divorcee or Widow/Widower</font> </b>
                                <div class="tab-content clearfix">
                                    <div class="tab-pane <?php if($_SESSION['marriageType']=='divorcee'){?>active<?php }else{?><?php }?>" id="1a">
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label" for="previous_marriage_date">Previous Marriage Date<br>(in DD/MM/YYYY)</label>  
                                                <div class="col-md-8">
                                                    <input id="previous_marriage_date_divorcee" name="previous_marriage_date_divorcee" type="date" max="3000-12-31" class="form-control input-md" placeholder="DD/MM/YYYY" value="<?php echo $_SESSION['previous_marriage_date_divorcee'];?>" >

                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label" for="date_of_divorce">Date of Divorce <br>(in DD/MM/YYYY)</label>  
                                                <div class="col-md-8">
                                                    <input id="date_of_divorce" name="date_of_divorce" type="date" max="3000-12-31" class="form-control input-md" placeholder="DD/MM/YYYY" value="<?php echo $_SESSION['date_of_divorce'];?>" >

                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label" for="child_status">No. Of Child</label>  
                                                <div class="col-sm-8">
						       <select class="form-control" id="faculty" name="child_status_divorce">
				                          <option value="None" <?php if($_SESSION['child_status_divorce']=='None') echo "selected";?> >None</option>
				                          <option value="1" <?php if($_SESSION['child_status_divorce']=='1') echo "selected";?> >1</option>
				                          <option value="2" <?php if($_SESSION['child_status_divorce']=='2') echo "selected";?> >2</option>
				                          <option value="3" <?php if($_SESSION['child_status_divorce']=='3') echo "selected";?> >3</option>
				                          <option value="4 and above" <?php if($_SESSION['child_status_divorce']=='4 and above') echo "selected";?> >4 and above</option>
				                       </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label" for="child_custody_status">Child Living Status</label>  
                                                <div class="col-sm-8">
				                        <select class="form-control" id="child_custody_status_divorce" name="child_custody_status_divorce">
				                          <option value="Not Applicable" <?php if($_SESSION['child_custody_status_divorce']=='Not Applicable') echo "selected";?> >Not Applicable</option>
				                          <option value="Living With Me" <?php if($_SESSION['child_custody_status_divorce']=='Living With Me') echo "selected";?> >Living With Me</option>
				                          <option value="Not Living With Me" <?php if($_SESSION['child_custody_status_divorce']=='Not Living With Me') echo "selected";?> >Not Living With Me</option>                          
				                        </select>                                                                         
                                                </div>
                                            </div>
                                            <?php if($gender=="Bride") { ?>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label" for="previous_marriage_address">Previous Marriage Address</label>  
                                                <div class="col-sm-8">                     
                                                    <textarea class="form-control" id="previous_marriage_address_divorce"  name="previous_marriage_address_divorce" rows="2"><?php echo $_SESSION['previous_marriage_address_divorce'];?></textarea>
                                                </div>
                                            </div>
                                            <?php } ?>
                                    </div>
                                    <div class="tab-pane <?php if($_SESSION['marriageType']=='widow'){?>active<?php }?>" id="2a">
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label" for="previous_marriage_date">Previous Marriage Date <br>(in DD/MM/YYYY)</label>  
                                                <div class="col-md-8">
                                                    <input id="previous_marriage_date" name="previous_marriage_date_widow" type="date" max="3000-12-31" class="form-control input-md" placeholder="DD/MM/YYYY" value="<?php echo $_SESSION['previous_marriage_date_widow'];?>">

                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label" for="date_partner_death">Date of Partner&#39;s Death <br>(in DD/MM/YYYY)</label>  
                                                <div class="col-md-8">
                                                    <input id="date_partner_death_widow" name="date_partner_death_widow" type="date" max="3000-12-31" class="form-control input-md" placeholder="DD/MM/YYYY" value="<?php echo $_SESSION['date_partner_death_widow'];?>">

                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-sm-4 control-label" for="child_status">No. Of Child</label>

                                                <div class="col-sm-8">
					                <select class="form-control" id="faculty" name="child_status_widow">
					                    <option value="None" <?php if($_SESSION['child_status_widow']=='None') echo "selected";?> >None</option>
					                    <option value="1" <?php if($_SESSION['child_status_widow']=='1') echo "selected";?> >1</option>
					                    <option value="2" <?php if($_SESSION['child_status_widow']=='2') echo "selected";?> >2</option>
					                    <option value="3" <?php if($_SESSION['child_status_widow']=='3') echo "selected";?> >3</option>
					                    <option value="4 and above" <?php if($_SESSION['child_status_widow']=='4 and above') echo "selected";?> >4 and above</option>
					                </select>
            					</div>
                                            </div>
                                             <?php if($gender=="Bride") { ?>
                                            <div class="form-group">
                     					 <label class="col-sm-4 control-label" for="previous_marriage_address">Previous Marriage Address</label>  
                                                <div class="col-sm-8">                     
                                                    <textarea class="form-control" id="previous_marriage_address_widow"  name="previous_marriage_address_widow" rows="2"><?php echo $_SESSION['previous_marriage_address_widow'];?></textarea>
                                                </div>
                                            </div>
                                            <?php } ?>
                                            
                                    </div>

                                </div>
                            </div>
                            
                        </div>
                        
                        <div class="navigation col-sm-6" align="right">
                           <a href="registration_astrological.php" class="btn btn-danger" style="background-color:#054c48;border-color:#1ba39c" name="prev">
                           Previous</a>
                           <button type="submit" name="submit" class="btn btn-danger" style="background-color:#054c48;border-color:#1ba39c">Next</button></div>
						    <div class="navigation col-sm-6"  align="right" style="padding-top:20px;">
						   <a href="reset.php" style="color:#FFFFFF; font-size:13px; font-weight:bold">Reset</a>
                        </div>
                    </div>
                    
                    
                </form>

            </div>           
        </section>-->
  <?php include "main/footer.php" ; ?>
     </body>
</html>

