<?php 
include_once "session.php";
include "connect.php";
include_once 'dbconfig.php';
error_reporting(0);
session_start();
if(isset($_SESSION['first_name'])){
	 ?>
 <script> 
    window.open('./registration_personal_page.php','_self');
    alert("You all information Inserted");
    </script> 
   <?php  
}

?>

<!DOCTYPE html>
<html>
<head>
<title>MATRIMONY</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Bootstrap -->

<link href='http://fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700,800' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800' rel='stylesheet' type='text/css'>
<link href="responcive.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet">
<link href="css/bootstrap.min.css" rel="stylesheet">
<!---->
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
<script>
function getAge(){
    var dob = document.getElementById('birth_date').value;
    dob = new Date(dob);
    var today = new Date();
    var age = Math.floor((today-dob) / (365.25 * 24 * 60 * 60 * 1000));
    document.getElementById('age').value=age;
    
}


var specialKeys = new Array();
specialKeys.push(8); //Backspace
specialKeys.push(9); //Tab
specialKeys.push(46); //Delete
specialKeys.push(36); //Home
specialKeys.push(35); //End
specialKeys.push(37); //Left
specialKeys.push(39); //Right
function IsValidData(e) {
    var keyCode = e.keyCode == 0 ? e.charCode : e.keyCode;
    var ret = ((keyCode >= 48 && keyCode <= 57) || (keyCode == 43) || (keyCode == 47) || (specialKeys.indexOf(e.keyCode) != -1 && e.charCode != e.keyCode));
    document.getElementById("error").style.display = ret ? "none" : "inline";
    return ret;
}
</script>
<script type="text/javascript" src="jquery.min.js"></script>
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
<script type="text/javascript">
	window.open('#','_self','1');
</script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="js/custom_js.js" type="text/javascript"></script>
        
       <script type="text/javascript">
	   //var arr = ['frm01', 'frm02', 'frm03', 'frm04', 'frm05', 'frm06', 'frm07'];
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
				 if (empty($_POST["email"]))
				 {
					alert("Email is required");
				  } 
				  else 
				  {
					$email = test_input($_POST["email"]);
					// check if e-mail address is well-formed
					if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
					  alert( "Invalid email format"); 
				}
			  	}
							
				});
				});
						  
	</script>
          <!--for state city-->
           <script src="jquery-2.1.1.min.js" type="text/javascript"></script>
<script>
function getsub_category(val1) {
	
	$.ajax({
	type: "POST",
	url: "get-catego.php",
	data:'state='+val1,
	success: function(data){
		$("#sub_city").html(data);
	}
	});
	
}
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
		margin-top:150px;
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
	
	 $(document).ready(function(){
  	 	$("#mobile_no1").on("blur", function(){
	        var mobNum = $(this).val();
	        var filter = /^\d*(?:\.\d{1,2})?$/;
	
	          if (filter.test(mobNum)) 
	          {
	            if(mobNum.length==10)
	            {
	                $("#mobile_no1").css({"border":"1px solid green"});
	                $("#folio-invalid").addClass("hidden");
	            } 
	            else 
	            {
	                $("#folio-invalid").removeClass("hidden");
	                $("#mobile_no1").val('');
	                $("#mobile_no1").css({"border":"1px solid red"});
	                return false;
	            }
	         }
	   });
	});
	
	$(document).ready(function(){
  	 	$("#mobile_no2").on("blur", function(){
	        var mobNum = $(this).val();
	        var filter = /^\d*(?:\.\d{1,2})?$/;
	
	          if (filter.test(mobNum)) 
	          {
	            if(mobNum.length==10)
	            {
	                $("#mobile_no2").css({"border":"1px solid green"});
	                $("#folio-invalid1").addClass("hidden");
	            } 
	            else 
	            {
	                $("#folio-invalid1").removeClass("hidden");
	                $("#mobile_no2").val('');
	                $("#mobile_no2").css({"border":"1px solid red"});
	                return false;
	            }
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
<div class="reg_container col-sm-12" style="background-image:url(img/RegisterpagePreview.jpg); background-repeat:round; margin-top:0%;">
	<div class="container" style="margin-top:1px; margin-bottom:100px;">
		<div class="container col-md-7 steps" style="">
			<div class="form-panel active">
				<h2 class='list-h2 ' style="color:white;">How To Register</h2>
				<h4 class='list-h4 ' style="color:white;"><strong>Step 1</strong></h4>
				<p class='list-p' style="color:white;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fill all forms carefully.All fields are mandatory of each form. </p>
			</div>
			<div class="form-panel">
				<h2 class='list-h2' style="color:white;">How To Register</h2>
				<h4 class='list-h4' style="color:white;"><strong>Step 2</strong></h4>
				<p class='list-p' style="color:white;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Check all information filled by you. </p>
			</div>
			<div class="form-panel">
				<h2 class='list-h2' style="color:white;">How To Register</h2>
				<h4 class='list-h4' style="color:white;"><strong>Step 3</strong></h4>
				<p class='list-p' style="color:white;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Make payment and signup. </p>
			</div>
			
			<img align="right" class="next" src="img/ICON 1/next.png" height="50" width="50" style="cursor:pointer; ">
			<img align="right" class="previous" src="img/ICON 1/Prev.png" height="50" width="50" style="cursor:pointer;">
		</div>
		<br>
		<div class="container col-md-offset-8 reg-form" style="background-color:#F8F8F9; margin-top:10%;">
			<div class="col-sm-12 main_heading">
				<h2 style="color:#fff">REGISTRATION FORM</h2>
			</div>
			<form class="form-horizontal" name="form1" action="registration_personal_page.php" method="POST"> 
				<div class="col-sm-12">
					<div class="col-sm-12 _heading">
						<h4><img src="img/ICON 1/name-people-person-user-icon--icon-search-engine-1.png" style="width:25px;height:25px;margin-top: -10px"> &nbsp;Personal Information</h4>
					</div>
					<h5 style="font-size:14px;text-transform:none; color:red;text-align:right;margin-bottom:15px;font-family:Arial;">* All fields are mandatory</h5>
					
                             <div class="form-group">
	                                    <label class="col-sm-4 control-label" for="first_name">First Name</label>  
	                                    <div class="col-sm-8">
	                                        <input id="first_name" name="first_name" type="text" onKeyPress="return onlyAlphabets(event,this);" class="form-control input-md hied_border" required value="<?php echo $_SESSION['first_name']; ?>">
	                                    </div>
	                                </div>
                               
	                                <div class="form-group">
	                                    <label class="col-sm-4 control-label" for="middle_name">Middle Name</label>  
	                                    <div class="col-sm-8">
	                                        <input id="middle-name" name="middle_name" type="text" onKeyPress="return onlyAlphabets(event,this);" class="form-control input-md hied_border" required value="<?php echo $_SESSION['middle_name']; ?>" >
	                                    </div>
	                                </div>
	                                
	                                <div class="form-group">
	                                    <label class="col-sm-4 control-label" for="last_name">Last Name </label>  
	                                    <div class="col-sm-8">
	                                        <input id="last_name" name="last_name" type="text" onKeyPress="return onlyAlphabets(event,this);" class="form-control input-md hied_border" required value="<?php echo $_SESSION['last_name']; ?>">
	                                    </div>
	                                </div>
	                                
	                                <div class="form-group">
	                                    <label class="col-sm-4 control-label" for="gender">Gender</label>
	                                    <div class="col-sm-8">
	                                        <label class="radio-inline"><input type="radio" name="gender" id="gender" value="Groom" <?php echo ($_SESSION['gender'] == "Groom") ? 'checked="checked"' : ''; ?> required >Male</label>
	                                        <label class="radio-inline"><input type="radio" name="gender" id="gender" value="Bride" <?php echo ($_SESSION['gender'] == "Bride") ? 'checked="checked"' : ''; ?> required >Female</label>
	                                    </div>
	                                </div>
	                                
	                                <div class="form-group">
	                                    <label class="col-sm-4 control-label " for="address">State</label>
	                                    <div class="col-sm-8">    
	                                    	<select class="form-control hied_border" id="state" name="states" required>
	                                        	<option value="">Select State</option>
	                                        	<?php 
								$stmt = $DB_con->prepare("SELECT * FROM state where is_del='approved' ORDER BY state  ASC");
								$stmt->execute();
								
								while($row=$stmt->fetch(PDO::FETCH_ASSOC))
								{
							?>
							<option value="<?php echo $row['state'];?>"<?php if($_SESSION['states']==$row['state']) echo "selected";?>><?php echo $row['state']; ?></option>
							<?php
								} 	
														
							?>
	                                        </select>                 
	                                    </div>
	                                </div>
	                                
	                                <div class="form-group">
	                                    <label class="col-sm-4 control-label" for="address">City</label>
	                                    <div class="col-sm-8">                     
	                                        <select name="city" class="form-control hied_border" id="city" required>
						<?php 
							$id = $_SESSION['states'];
							$stmt = $DB_con->prepare("SELECT * FROM city WHERE state='$id' and is_del='approved' ORDER BY city  ASC");
							$stmt->execute(array(':id' => $id));
							while($row=$stmt->fetch(PDO::FETCH_ASSOC))
							{
								?>
								<option class="hied_borde" value="<?php echo $row['city']; ?>"<?php if($_SESSION['city']==$row['city']) echo "selected";?>><?php echo $row['city']; ?></option>
								<?php
							}
						?>
	                                        	<option value=""class="hied_borde">Select City</option>
	                                        </select>  
	                                    </div>
	                                </div>
	                                
	                                <div class="form-group">
	                                    <label class="col-sm-4 control-label" for="address">Address</label>
	                                    <div class="col-sm-8">                     
	                                        <textarea class="form-control hied_border" id="txtNumeric" name="address"rows="5" required ><?php echo $_SESSION['address']; ?></textarea>
	                                    </div>
	                                </div>
	                                
	                                <div class="form-group">
	                                    <label class="col-sm-4 control-label" for="mobile_no1">Mobile Number 1</label>
	                                    <div class="col-sm-8">
	                                        <input id="mobile_no1" name="mobile_no1" type="text" maxlength="10" required class="form-control input-md hied_border" onKeyPress="return onlyNos(event,this);"  value="<?php echo $_SESSION['mobile_no1']; ?>">
	                                        <span id="folio-invalid" class="hidden mob-helpers">
												<i class="fa fa-times mobile-invalid"></i>Invalid mobile Number
											</span>
	                                    </div>
	                                </div>
	                                
	                                <div class="form-group">
	                                    <label class="col-sm-4 control-label" for="mobile_no2">Mobile Number 2</label>
	                                    <div class="col-sm-8">
	                                        <input id="mobile_no2" name="mobile_no2" type="text" maxlength="10"  onKeyPress="return onlyNos(event,this);"  class="form-control input-md hied_border" value="<?php echo $_SESSION['mobile_no2']; ?>" >
	                                        <span id="folio-invalid1" class="hidden mob-helpers">
							<i class="fa fa-times mobile-invalid"></i>Invalid mobile Number
						</span>
	                                    </div>
	                                </div>
                               
	                                <div class="form-group">
	                                    <label class="col-sm-4 control-label" for="birth_date">Date of Birth </label>  
	                                    <div class="col-sm-8">
	                                        <input type="date" id="birth_date" placeholder="DD/MM/YYYY" max="3000-12-31" name="DATEOFBIRTH" class="form-control input-md hied_border" onChange="getAge()" onKeyPress="return IsValidData(event)" required value="<?php echo $_SESSION['DATEOFBIRTH']; ?>" > <span id="error" style="color: Red; display: none">* Invalid Character</span>
	                                    </div>
	                                </div>
                                
	                                <div class="form-group">
	                                    <label class="col-sm-4 control-label" for="age">Age</label>  
	                                    <div class="col-md-8">
	                                        <input type="text" name="age"  id="age"  readonly="" class="form-control input-md " value="<?php echo $_SESSION['age']; ?>">
	                                    </div>
	                                </div>
	                                
	                                <div class="form-group">
	                                    <label class="col-sm-4 control-label" for="birth_time">Time of Birth <br> (24 hr format)</label>  
	                                    <div class="col-sm-8">
	                                        <input id="birth_time" name="birth_time" type="time" required onKeyPress="return isNumber(event)"  pattern="([01]?[0-9]{1}|2[0-3]{1}):[0-5]{1}[0-9]{1}" class="form-control input-md hied_border" value="<?php echo $_SESSION['birth_time']; ?>"> 
	                                    </div>
	                                </div>
	                                
	                                <div class="form-group">
	                                    <label class="col-sm-4 control-label" for="day_of_birth">Day of Birth </label>
	                                    <div class="col-sm-8">
	                                        <select id="day_of_birth" name="day_of_birth" class="form-control hied_border"  required>
	                                        <option value="">Select</option>
	                                            <option value="Sunday"<?php if($_SESSION['day_of_birth']=='Sunday') echo "selected";?>>Sunday</option>
	                                            <option value="Monday"<?php if($_SESSION['day_of_birth']=='Monday') echo "selected";?>>Monday</option>
	                                            <option value="Tuesday"<?php if($_SESSION['day_of_birth']=='Tuesday') echo "selected";?>>Tuesday</option>
	                                            <option value="Wednesday"<?php if($_SESSION['day_of_birth']=='Wednesday') echo "selected";?>>Wednesday</option>
	                                            <option value="Thursday"<?php if($_SESSION['day_of_birth']=='Thursday') echo "selected";?>>Thursday</option>
	                                            <option value="Friday"<?php if($_SESSION['day_of_birth']=='Friday') echo "selected";?>>Friday</option>
	                                            <option value="Saturday"<?php if($_SESSION['day_of_birth']=='Saturday') echo "selected";?>>Saturday</option>
	                                        </select>
	                                    </div>
	                                </div>
	                                
	                                <div class="form-group">
	                                    <label class="col-sm-4 control-label" for="birth_city">Place of Birth </label>  
	                                    <div class="col-sm-8">
	                                        <input id="birth_city" name="birth_city" type="text" required class="form-control input-md hied_border" onKeyPress="return onlyAlphabets(event,this);" value="<?php echo $_SESSION['birth_city']; ?>" >
	                                    </div>
	                                </div>
	                                
	                                <div class="form-group">
	                                    <label class="col-sm-4 control-label" for="birth_district">Birth Place District</label>  
	                                    <div class="col-sm-8">
	                                        <input id="birth_district" name="birth_district" type="text" required class="form-control input-md hied_border" onKeyPress="return onlyAlphabets(event,this);" value="<?php echo $_SESSION['birth_district']; ?>">
	                                    </div>
	                                </div>
	                                
	                                <div class="form-group">
	                                    <label class="col-sm-4 control-label" for="birth_state">Birth Place State  </label>  
	                                    <div class="col-sm-8">
	                                        
	                                        <select class="form-control hied_border" id="birth_state" required name="birth_state" >
	                                        	<option value="">Select</option>
	                                        	<?php 
								 $show1=mysqli_query($conn,"SELECT * FROM state where is_del='approved' ORDER BY state  ASC");
											
									while($rw1=mysqli_fetch_array($show1))
										{ 
							?>
								<option value="<?php echo $rw1['state'];?>"<?php if($_SESSION['birth_state']==$rw1['state']) echo "selected";?>><?php echo $rw1['state'];?></option>
								<?php
										
										}
							   ?>
	                                        </select>
	                                    </div>
	                                </div>
					
					<div class="form-group" style="margin-bottom:0px">
						<div class="navigation col-sm-6" align="left" style="padding-top:15px;">
							<a class="btn" href="reset.php" style="color:#FFFFFF; font-size:15px; font-weight:bold; text-align:right; border:1px solid;">Reset</a>
						</div>
						<div class="navigation col-sm-6" align="right">
							<button class="btn" type="submit" name="submit" style="float:right; color:#ffffff; background-color:#4b6a79; padding:0px; width:90px"> <img align="right" src="img/ICON 1/RegistrationFormNext.png" style="height:35px;width:90px"> </button>
							
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
 </body>
  <?php include "main/footer.php" ; ?>
</html>
 
