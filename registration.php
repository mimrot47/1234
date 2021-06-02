<?php include "connect.php";
include_once 'dbconfig.php';
?>

<!DOCTYPE html>
<html>
<head>
<title>MATRIMONY</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Bootstrap -->
<link href="http://www.htmlpreviews.com/cloud/badminton/credon8/css/bootstrap.min.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700,800' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet">

<!------------------------------>
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
						  
	/*					 $.ajax({
                              type:"post",
                              url:"register-insert.php",
                              data:"first_name="+first_name+"&middle_name="+middle_name+"&last_name="+last_name+" &gender="+gender+"&states="+states+"&city="+city+"&address="+address+"&mobile_no1="+mobile_no1+"&email="+email+"&birth_date="+birth_date+"&birth_time="+birth_time+"&day_of_birth="+day_of_birth+"&birth_city="+birth_city+"&birth_district="+birth_district+"&birth_state="+birth_state+"&mobile_no2="+mobile_no2+"&pass="+pass+"&age="+age+"&height="+height+"&body_weight="+body_weight+&skin_tone="+skin_tone+"&blood_group="+blood_group+"&spectacles="+spectacles+"&hobbies="+hobbies+"&any_disability="+any_disability+"&acceptation="+acceptation+"&describe_yourself="+describe_yourself+"&faculty="+faculty+"&academic_level="+academic_level+"&college_name="+college_name+"&college_address="+
							  college_address+"&office_contact="+office_contact+"&job_busi_status="+job_busi_status+"&working_post="+working_post+"&annual_income="+annual_income+"&work_place_address="+work_place_address+"&father_name="
							  +father_name+"&occupation_father="+occupation_father+"&mother_name="+mother_name+"&occupation_mother="+occupation_mother+"&no_of_siblings="+no_of_siblings+"&marital_satus_of_siblings="+
							  marital_satus_of_siblings+"&ancestral_address="+ancestral_address+"&parent_conatct_no"+parent_conatct_no+"&birth_name="+birth_name+"&own_kul="+own_kul+"&mamkul="+mamkul+"&gotra="+gotra+"
							  &nakshtra="+nakshtra+"&charan="+charan+"&rashi="+rashi+"&nadi="+nadi+"&gan="+gan+"&guru="+guru+"
							  &manglik_status="+manglik_status+"&marriageType="+marriageType+"&previous_marriage_date_divorcee="+previous_marriage_date_divorcee+"&date_of_divorce="+date_of_divorce+"&child_status_divorce="+child_status_divorce+"&child_custody_status_divorce="+child_custody_status_divorce+"&previous_marriage_address="+previous_marriage_address+"&previous_marriage_date_widow="+previous_marriage_date_widow+"&previous_marriage_address_divorce="+previous_marriage_address_divorce+"&date_partner_death_widow="+date_partner_death_widow+"&child_status_widow="+child_status_widow+"&previous_marriage_address_widow="+previous_marriage_address_widow+"&button="+button,
                              success:function(data){
                                 $("#info").html(data);
								  $("#w8").html("");
                              }
 
                          
 
                    });
               });
    */
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
                text-align: center;
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
                <form class="form-horizontal" name="form1" action="reg_insert.php" method="post"> 
                    <div id="frm01">
                        <div class="col-sm-12">
                            <div class="col-sm-12 _heading">
                             <h4><img src="img/ICON 1/name-people-person-user-icon--icon-search-engine-1.png" style="width:50px;height:50px;">
                             Personal Information</h4>
                            </div>
                            
                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="first_name">First Name</label>  
                                    <div class="col-sm-8">
                                        <input id="first_name" name="first_name" type="text" onkeypress="return onlyAlphabets(event,this);" class="form-control input-md" required >
                                    </div>
                                </div>
                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="middle_name">Middle Name</label>  
                                    <div class="col-sm-8">
                                        <input id="middle-name" name="middle_name" type="text" onkeypress="return onlyAlphabets(event,this);" class="form-control input-md" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="last_name">Last Name </label>  
                                    <div class="col-sm-8">
                                        <input id="last_name" name="last_name" type="text" onkeypress="return onlyAlphabets(event,this);" class="form-control input-md" required >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="gender">Gender</label>
                                    <div class="col-sm-8">
                                        <label class="radio-inline"><input type="radio" name="gender" id="gender" value="Groom">Male</label>
                                        <label class="radio-inline"><input type="radio" name="gender" id="gender" value="Bride">Female</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="address">State</label>
                                    <div class="col-sm-8">    
                                    	<select class="form-control" id="state" required name="states">
                                        	<option></option>
                                        	<?php 
											 /*$show1=mysqli_query($conn,"select DISTINCT state from city ORDER BY state  ASC");
														
												while($rw1=mysqli_fetch_array($show1))
													{ 
													echo"<option  value='".$rw1['state']."'>"; echo $rw1['state']; echo"</option>";
													}*/
						$stmt = $DB_con->prepare("SELECT * FROM state where is_del='approved' ORDER BY state  ASC");
	$stmt->execute();
	while($row=$stmt->fetch(PDO::FETCH_ASSOC))
	{
		?>
        <option value="<?php echo $row['state_unique_id']; ?>"><?php echo $row['state']; ?></option>
        <?php
	} 						
									   ?>
                                        </select>                 
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="address">City</label>
                                    <div class="col-sm-8">                     
                                        <select class="form-control" required id="city" name="city">
                                        	<option></option>
                                        	<?php 
						 /*$show1=mysqli_query($conn,"select * from city ORDER BY city  ASC");
									
							while($rw1=mysqli_fetch_array($show1))
								{ 
								echo"<option  value='".$rw1['city']."'>"; echo $rw1['city']; echo"</option>";
								}*/
									
                   ?>
                                        </select>  
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="address">Address</label>
                                    <div class="col-sm-8">                     
                                        <textarea class="form-control" id="address" name="address"rows="5" required ></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="mobile_no1">Mobile Number 1</label>
                                    <div class="col-sm-8">
                                        <input id="mobile_no1" name="mobile_no1" type="text" maxlength="12" required class="form-control input-md" onkeypress="return onlyNos(event,this);"   >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="mobile_no2">Mobile Number 2</label>
                                    <div class="col-sm-8">
                                        <input id="mobile_no2" name="mobile_no2" type="text" maxlength="12" required onkeypress="return onlyNos(event,this);"  class="form-control input-md" >
                                    </div>
                                </div>
                               
                           
                            
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="birth_date">Date of Birth </label>  
                                    <div class="col-sm-8">
                                        <input type="text" id="birth_date" placeholder="DD/MM/YYYY" name="DATEOFBIRTH" class="form-control input-md" onchange="countAge(this.form, this);" onkeypress="return isNumber(event)" required> 
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="birth_time">Time of Birth</label>  
                                    <div class="col-sm-8">
                                        <input id="birth_time" name="birth_time" type="time" required onkeypress="return isNumber(event)"  class="form-control input-md"> 
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="day_of_birth">Day of Birth </label>
                                    <div class="col-sm-8">
                                        <select id="day_of_birth" name="day_of_birth" class="form-control" required>
                                        <option></option>
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
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="birth_city">Place of Birth </label>  
                                    <div class="col-sm-8">
                                        <input id="birth_city" name="birth_city" type="text" required class="form-control input-md" onkeypress="return onlyAlphabets(event,this);" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="birth_district">Birth Place District</label>  
                                    <div class="col-sm-8">
                                        <input id="birth_district" name="birth_district" type="text" required class="form-control input-md" onkeypress="return onlyAlphabets(event,this);">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="birth_state">Birth Place State  </label>  
                                    <div class="col-sm-8">
                                        
                                        <select class="form-control" id="birth_state" required name="birth_state">
                                        	<option></option>
                                        	<?php 
											 $show1=mysqli_query($conn,"select DISTINCT state from city ORDER BY state  ASC");
														
												while($rw1=mysqli_fetch_array($show1))
													{ 
													echo"<option  value='".$rw1['state']."'>"; echo $rw1['state']; echo"</option>";
													}
														
									   ?>
                                        </select>
                                    </div>
                                </div>
                               
                              
                           
                        </div>
                        <div class="navigation col-sm-12">
							
                            <a href="#" onclick="activate('frm02', arr);" class="block_next">
                            <font color="#FFFFFF ">Next</font></a>
                           
                        </div>
                    </div>
                    <div id="frm02">
                        <div class="col-sm-12">
                            <div class="col-sm-12 _heading">
                                <h4><img src="img/ICON 1/name-people-person-user-icon--icon-search-engine-1.png" style="width:50px;height:50px;">
                                Personal Information</h4>
                            </div>
                            
                             <div class="form-group">
                                    <label class="col-sm-4 control-label" >Cast</label>  
                                    <div class="col-md-8">
                                        
                                        <input type="text" name="cast"  value="Bhavsar"  readonly="" class="form-control input-md">
                              		</div>
                                </div>
                                
                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="age">Age</label>  
                                    <div class="col-md-8">
                                        <input type="text" name="age"  id="age"  readonly="" class="form-control input-md">
                                    </div>
                                </div>

                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="height">Height</label>  
                                    <div class="col-md-4">Fit
                                        <select name="fit" class="form-control input-md">
                                        	<option></option>
                                        	<option>4</option>
                                            <option>5</option>
                                            <option>6</option>
                                            <option>7</option>
                                            <option>8</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">Inches
                                        <select name="inches" class="form-control input-md" >
                                        <option></option>
                                       		<option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                            <option>6</option>
                                            <option>7</option>
                                            <option>8</option>
                                            <option>9</option>
                                            <option>10</option>
                                            <option>11</option>
                                            <option>12</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="body_weight">Weight (kg) </label>  
                                    <div class="col-md-8">
                                        <input type="text" class="form-control input-md" id="body_weight" name="body_weight" onkeypress="return isNumber(event)"  placeholder="eg.50">
                                        	 
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="skin_tone">Skin tone  </label>  
                                    <div class="col-md-8">
                                        <!--<input id="skin_tone" name="skin_tone" type="text"  class="form-control input-md" >-->
										<select class="form-control input-md" id="skin_tone" name="skin_tone">
                                        	<option></option>
                                            <option>Fair</option>
                                            <option>Wheatish</option>
                                        </select>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="blood_group">Blood group  </label>  
                                    <div class="col-md-8">
                                        <select id="blood_group" name="blood_group" class="form-control input-md">
                                        	<option ></option>
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
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="spectacles">Spectacles </label>
                                    <div class="col-md-8">
                                        <select id="spectacles" name="spectacles" class="form-control">
                                        	<option></option>
                                            <option value="yes">Yes</option>
                                            <option value="no">No</option>
                                        </select>
                                    </div>
                                </div>


                           
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="Hobbies">Hobbies </label>
                                    <div class="col-md-8">                     
                                        <textarea class="form-control" id="hobbies" name="hobbies" rows="1"></textarea>
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
                                
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="any_disability">Any Disability  </label>
                                    <div class="col-md-8">                     
                                        <select id="any_disability" name="any_disability" class="form-control input-md" >
                                        	<option></option>
                                        	<option value="yes">Yes</option>
                                            <option value="no">No</option>
                                        </select>
                                        <div id="description" style="display:none;">Add Description
                                        <input type="text" name="any_disability_desc" class="form-control" onkeypress="return onlyAlphabets(event,this);">
                                        </div>
                                    </div>
                                </div> 
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="acceptation">Acceptations</label>
                                    <div class="col-md-8">                     
                                        <textarea class="form-control" id="acceptation" name="acceptation"  rows="2"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="describe_yourself">Describe Yourself </label>
                                    <div class="col-md-8">                     
                                        <textarea class="form-control" id="describe_yourself" name="describe_yourself" rows="2"></textarea>
                                    </div>
                                </div> 

                           
                        </div>
                        <div class="navigation col-sm-12">
                            <a href="#" onclick="activate('frm01', arr);" class="block_prev">
                            <font color="#FFFFFF ">Previous</font></a>&nbsp;&nbsp;&nbsp;
                            <a href="#" onclick="activate('frm03', arr);" class="block_next">
                            <font color="#FFFFFF ">Next</font></a>
                        </div>
                    </div>
                    <div id="frm03">
                        <div class="col-sm-12">
                            <div class="col-sm-12 _heading">
                                <h4><img src="img/ICON 1/Professional Information.png" style="width:50px;height:50px;">
                               Professional Information</h4>
                            </div>
                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="faculty">Faculty</label>  
                                    <div class="col-sm-8">
                                         <select class="form-control input-md" id="faculty" name="faculty" >
                                            <option></option>
                                            <option>Undergraduate</option>
                                            <option>Diploma</option>
                                            <option>Art</option>
                                            <option>Commerce</option>
                                            <option>Science</option>
                                            <option>Post Graduation</option>
                                      </select>
                                    </div>
                                </div>
                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="academic_level">Academic Level</label>  
                                    <div class="col-sm-8">
                                        <select class="form-control input-md" id="academic_level" name="academic_level" >
                                            <option></option>
                                            <option>Undergraduate</option>
                                            <option>Diploma</option>
                                            <option>Art</option>
                                            <option>Commerce</option>
                                            <option>Science</option>
                                            <option>Post Graduation</option>
                                      </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="college_name">College Name </label>  
                                    <div class="col-sm-8">
                                        <input id="college_name" name="college_name" type="text" class="form-control input-md" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="college_address">College Address</label>
                                    <div class="col-sm-8">                     
                                        <textarea class="form-control" id="college_address" name="college_address"  rows="2"></textarea>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="job_busi_status">Job / Business Status</label>  
                                    <div class="col-sm-8">
                                        <input id="job_busi_status" name="job_busi_status" type="text" onkeypress="return onlyAlphabets(event,this);" class="form-control input-md"> 
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="working_post">Working Post</label>  
                                    <div class="col-sm-8">
                                        <input id="working_post" name="working_post" type="text" class="form-control input-md"> 
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="annual_income">Monthly / Yearly Income </label>  
                                    <div class="col-sm-8">
                                        <input id="annual_income" name="annual_income" type="text" onkeypress="return isNumber(event)"  class="form-control input-md" >
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="office_contact">Office Contact ( if any )  </label>  
                                    <div class="col-sm-8">
                                        <input id="office_contact" name="office_contact" type="text" maxlength="12" onkeypress="return onlyNos(event,this);" class="form-control input-md" >
                                    </div>
                                </div>
                                
                                
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="work_place_address">Working Place Address</label>  
                                    <div class="col-sm-8">                     
                                        <textarea class="form-control" id="work_place_address" name="work_place_address"  rows="2"></textarea>
                                    </div>
                                </div>
                        </div>
                        <div class="navigation col-sm-12">
                            <a href="#" onclick="activate('frm02', arr);" class="block_prev">
                            <font color="#FFFFFF ">Previous</font></a>&nbsp;&nbsp;&nbsp;</a>
                            <a href="#" onclick="activate('frm04', arr);" class="block_next">
                            <font color="#FFFFFF ">Next</font></a></a>
                        </div>
                    </div>
                    
                    <div id="frm04">
                        <div class="col-sm-12">
                            <div class="col-sm-12 _heading">
                                <h4><img src="img/ICON 1/Family Information.png" style="width:50px;height:50px;">
                               Family Information</h4>
                            </div>
                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="Father's name ">Father's Name</label>  
                                    <div class="col-sm-8">
                                        <input id="father_name" name="father_name" type="text" onkeypress="return onlyAlphabets(event,this);" class="form-control input-md" >
                                    </div>
                                </div>
                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="occupation">Occupation</label>  
                                    <div class="col-sm-8">
                                        <input id="occupation" name="occupation_father" type="text"  class="form-control input-md">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="mother_name">Mother's Name </label>  
                                    <div class="col-sm-8">
                                        <input id="mother_name" name="mother_name" type="text" onkeypress="return onlyAlphabets(event,this);" class="form-control input-md" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="occupation_mother">Occupation</label>
                                    <div class="col-sm-8">                     
                                        <input type="text" class="form-control" id="occupation_mother" name="occupation_mother" ></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="no_of_siblings">No. of Brother  </label>  
                                    <div class="col-sm-8">
                                        
                                        <select name="no_of_brother"   class="form-control input-md" >
                                        	<option>0 </option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                            <option>6</option>
                                            <option>None</option>
                                        </select>
                                    </div>
                                </div>
                            
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="marital_satus_of_siblings">Married Brother</label>  
                                    <div class="col-sm-8">
                                       
                                        	 <select name="married_brother"   class="form-control input-md" >
                                        	<option>0 </option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                </div>
                                
                                 <div class="form-group">
                                    <label class="col-sm-4 control-label" for="marital_satus_of_siblings">Unmarried Brother</label>  
                                    <div class="col-sm-8">
                                       
                                        	 <select name="unmarried_brother"   class="form-control input-md" >
                                        	<option>0 </option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="no_of_siblings">No. of Sister  </label>  
                                    <div class="col-sm-8">
                                        
                                        <select name="no_of_sister"   class="form-control input-md" >
                                        	<option> 0</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                            <option>6</option>
                                            <option>None</option>
                                        </select>
                                    </div>
                                </div>
                            
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="marital_satus_of_siblings">Married sister</label>  
                                    <div class="col-sm-8">
                                       
                                        	 <select name="marital_satus_of_sister"   class="form-control input-md" >
                                        	<option>0 </option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                </div>
                                
                                 <div class="form-group">
                                    <label class="col-sm-4 control-label" for="marital_satus_of_siblings">Unmarried Sister</label>  
                                    <div class="col-sm-8">
                                       
                                        	 <select name="unmarried_sister"   class="form-control input-md" >
                                        	<option>0 </option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="permanent_residential_address">Permanent Residential Address</label>  
                                    <div class="col-sm-8">
                                        <textarea id="permanent_residential_address" name="permanent_residential_address" rows="2"  class="form-control input-md"> </textarea>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="parent_conatct_no">Contact Number for Parents</label>  
                                    <div class="col-sm-8">                     
                                        <input type="text" class="form-control input-md" maxlength="12" onkeypress="return onlyNos(event,this);" name="parent_conatct_no" >
                                    </div>
                                </div>
                        </div>
                        <div class="navigation col-sm-12">
                            <a href="#" onclick="activate('frm03', arr);" class="block_prev">
                            <font color="#FFFFFF ">Previous</font></a>&nbsp;&nbsp;&nbsp;</a>
                            <a href="#" onclick="activate('frm05', arr);" class="block_next">
                            <font color="#FFFFFF ">Next</font></a>&nbsp;&nbsp;&nbsp;</a>
                        </div>
                    </div>
                    <div id="frm05">
                        <div class="col-sm-12">
                            <div class="col-sm-12 _heading">
                                <h4><img src="img/ICON 1/Astrological Information.png" style="width:50px;height:50px;">
                               Astrological Information</h4>
                            </div>
                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="birth_name">Birth name</label>  
                                    <div class="col-md-8">
                                        <input id="birth_name" name="birth_name" type="text" onkeypress="return onlyAlphabets(event,this);" class="form-control input-md" >

                                    </div>
                                </div>

                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="own_kul">Own kul</label>  
                                    <div class="col-md-8">
                                        <input id="own_kul" name="own_kul" type="text" onkeypress="return onlyAlphabets(event,this);" class="form-control input-md">

                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="mamkul">Mamakul </label>  
                                    <div class="col-md-8">
                                        <input id="mamkul" name="mamkul" type="text" onkeypress="return onlyAlphabets(event,this);" class="form-control input-md" >

                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="gotra">Gotra</label>
                                    <div class="col-md-8">
                                        <input id="gotra" name="gotra" type="text" onkeypress="return onlyAlphabets(event,this);" class="form-control input-md" >

                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="nakshtra">Nakshtra</label>  
                                    <div class="col-md-8">
                                        <select id="nakshtra" name="nakshtra"  class="form-control input-md"> 
                                        <option></option>
                                            <option>Ashwini</option>
                                            <option>Bharani</option>
                                            <option>Krittika</option>
                                            <option>Rohini</option>
                                            <option>Mrigcira</option>
                                            <option>Ardra</option>
                                            <option>Punarvasu</option>
                                            <option>Pushya</option>
                                            <option>Ashlesha</option>
                                            <option>Magha</option>
                                            <option>Poorva Phalguni</option>
                                            <option>Uttara Phalguni</option>
                                            <option>Hasta</option>
                                            <option>Chitra</option>
                                            <option>Swati</option>
                                            <option>Vishaka</option>
                                            <option>Anuradha</option>
                                            <option>Jyeshta</option>
                                            <option>Moola</option>
                                            <option>Poorvashadha</option>
                                            <option>Uttarashadha</option>
                                            <option>Sharavan</option>
                                            <option>Dhanishta</option>
                                            <option>Satbhij</option>
                                            <option>Poorva Bhadrpada</option>
                                            <option>Uttara Bhadrapada</option>
                                            <option>Revati</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="charan">Charan</label>  
                                    <div class="col-md-8">
                                        <select id="charan" name="charan" class="form-control input-md"> 
                                        	<option></option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="rashi">Rashi</label>  
                                    <div class="col-md-8">
                                        <select id="rashi" name="rashi" class="form-control input-md" >
                                        	<option></option>
                                            <option>Mesh (Aries)</option>
                                            <option>Vrushabh (Taurus)</option>
                                            <option>Mithun (Gemini)</option>
                                            <option>Kark (Cancer)</option>
                                            <option>Sinh (Leo)</option>
                                            <option>Kanya (Virgo)</option>
                                            <option>Tula (Libra)</option>
                                            <option>Vrushchik (Scorpius)</option>
                                            <option>Dhanu (Sagittarius)</option>
                                            <option>Makar (Capricornus)</option>
                                            <option>Kumbha (Aquarius)</option>
                                            <option>Meen (Pisces)</option>
										</select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="nadi">Nadi</label>  
                                    <div class="col-md-8">
                                        <select id="nadi" name="nadi" class="form-control input-md" >
                                        	<option></option>
                                            <option>Aadya </option>
                                            <option>Madhya</option>
                                            <option>Antya</option>
										</select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="gan">Gan</label>  
                                    <div class="col-md-8">
                                    	<select id="gan" name="gan" class="form-control input-md">
                                        	<option></option>
                                            <option>Dev Gan</option>
                                            <option> Manush Gan</option>
                                            <option>Rakshas Gan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="guru">Guru</label>  
                                    <div class="col-md-8">
                                        <select id="guru" name="guru" class="form-control input-md">
                                        	<option></option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                            <option>6</option>
                                            <option>7</option>
                                            <option>8</option>
                                            <option>9</option>
                                            <option>10</option>
                                            <option>11</option>
                                            <option>12</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="manglik_status">Manglik Status</label>  
                                    <div class="col-md-8">
                                    	<select id="manglik_status" name="manglik_status" class="form-control input-md" >
                                        	<option></option>
                                        	<option>Yes</option>
                                            <option>No</option>
                                        </select>

                                    </div>
                                </div>

                        </div>
                        <div class="navigation col-sm-12">
                            <a href="#"  onclick="activate('frm04', arr);" class="block_prev">
                            <font color="#FFFFFF ">Previous</font></a>&nbsp;&nbsp;&nbsp;</a>
                            <a href="#" onclick="activate('frm06', arr);" class="block_next">
                            <font color="#FFFFFF ">Next</font></a>&nbsp;&nbsp;&nbsp;</a>
                        </div>
                    </div>
                    <div id="frm06">
                        <div class="col-sm-12" id="id05">
                        
                            <div id="exTab1"><img src="img/ICON 1/D W.png" style="width:50px;height:50px;">
                                <ul id="myTab" class="nav nav-pills" style="margin-top: -50px;margin-left: 79px;">
                                
                                    <li class="active">
                                        <a href="#1a" data-toggle="tab">
                                            <div style="margin: 0;" class="checkbox">
                                                <label style="float: left;">
                                                    <input style="display: inline-block;" type="checkbox" id="marriageType" name="marriageType" value="divorcee" />
                                                    <div style="display: inline-block;">Divorcee Information</div>
                                                </label>
                                            </div>
                                        </a>
                                        <!--                                    <a  href="#1a" data-toggle="tab">Divorcee Information</a>-->
                                        <input type="hidden" name="marriageType" value="Never married">
                                    </li>
                                    <li>
                                        <a href="#2a" data-toggle="tab">
                                            <div style="margin: 0;" class="checkbox">
                                                <label style="float: left;">
                                                    <input style="display: inline-block;" type="checkbox" id="marriageType" name="marriageType" value="widow" />
                                                    <div style="display: inline-block;">Widow/Widower Information</div>
                                                </label>
                                            </div>
                                        </a>
                                        <!--                                    <a href="#2a" data-toggle="tab">Widow Information </a>-->
                                    </li>

                                </ul>

                                <div class="tab-content clearfix">
                                    <div class="tab-pane active" id="1a">
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label" for="previous_marriage_date">Previous Marriage Date<br>(in DD/MM/YYYY)</label>  
                                                <div class="col-md-8">
                                                    <input id="previous_marriage_date_divorce" name="previous_marriage_date_divorcee" type="text" class="form-control input-md" placeholder="DD/MM/YYYY">

                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label" for="date_of_divorce">Date of Divorce <br>(in DD/MM/YYYY)</label>  
                                                <div class="col-md-8">
                                                    <input id="date_of_divorce" name="date_of_divorce" type="text" class="form-control input-md" placeholder="DD/MM/YYYY" >

                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label" for="child_status">Child Status</label>  
                                                <div class="col-sm-8">                     
                                                    <textarea class="form-control" id="child_status_divorce" name="child_status_divorce" rows="2"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label" for="child_custody_status">Child Custody Status</label>  
                                                <div class="col-sm-8">                     
                                                    <textarea class="form-control" id="child_custody_status_divorce" onkeypress="return onlyAlphabets(event,this);" name="child_custody_status_divorce" rows="2"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label" for="previous_marriage_address">Previous Marriage Address</label>  
                                                <div class="col-sm-8">                     
                                                    <textarea class="form-control" id="previous_marriage_address_divorce" onkeypress="return onlyAlphabets(event,this);" name="previous_marriage_address_divorce" rows="2"></textarea>
                                                </div>
                                            </div>
                                    </div>
                                    <div class="tab-pane" id="2a">
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label" for="previous_marriage_date">Previous Marriage Date <br>(in DD/MM/YYYY)</label>  
                                                <div class="col-md-8">
                                                    <input id="previous_marriage_date" name="previous_marriage_date_widow" type="text" class="form-control input-md" placeholder="DD/MM/YYYY">

                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label" for="date_partner_death">Date of Partner's Death <br>(in DD/MM/YYYY)</label>  
                                                <div class="col-md-8">
                                                    <input id="date_partner_death_widow" name="date_partner_death_widow" type="text" class="form-control input-md" placeholder="DD/MM/YYYY" >

                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-sm-4 control-label" for="child_status">Child Status</label>  
                                                <div class="col-sm-8">                     
                                                    <textarea class="form-control" id="child_status_widow" name="child_status_widow" rows="2"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label" for="previous_marriage_address">Previous Marriage Address</label>  
                                                <div class="col-sm-8">                     
                                                    <textarea class="form-control" id="previous_marriage_address_widow"  name="previous_marriage_address_widow" rows="2"></textarea>
                                                </div>
                                            </div>
                                            
                                    </div>

                                </div>
                            </div>
                            
                        </div>
                        <div class="navigation col-sm-12">
                            <a href="#" onclick="activate('frm05', arr);" class="block_prev">
                            <font color="#FFFFFF ">Previous</font></a>&nbsp;&nbsp;&nbsp;</a>
							<a href="#" onclick="activate('frm07', arr);" class="block_next">
                            <font color="#FFFFFF ">Next</font></a>&nbsp;&nbsp;&nbsp;</a>
                        </div>
                    </div>
                    <div id="frm07">
                        <div class="col-sm-12" id="id05">
                         <div class="col-sm-12 _heading">
                                <h5> <img src="img/ICON 1/Safetycord-Login.png" style="width:50px;height:50px;">
                                Please Provide Your Username and Password for Login</h5>
                            </div>
                            <hr>
                            <div class="form-group" >
                                    <label class="col-sm-4 control-label" for="first_name">Username<img src="img/ICON 1/lock_secure_security_password-512.png" style="height:25px; width:25px"></label>
                                   <!-- <div class="col-lg-1">
                                    
                                    </div>-->  
                                    <div class="col-sm-7">
                                        <input id="email" name="email" type="email" class="form-control input-md" required style="width:">
                                    </div>
                                </div>
                                <!-- Text input-->
                                <div class="form-group" >
                                    <label class="col-sm-4 control-label" for="middle_name">Password<img src="img/ICON 1/password.png" style="width:25px; height:25px;"></label>  
                                    <!--<div class="col-lg-1">
                                    
                                    </div> --> 
                                    <div class="col-sm-7">
                                        <input  name="pass" type="password" id="txtPassword"  class="form-control input-md" width="300px">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="middle_name">Confirm Password<img src="img/ICON 1/password.png" style="width:25px; height:25px;"></label>  
                                    
                                    <div class="col-sm-7">
                                        <input id="txtConfirmPassword" name="con_pass" type="password"  class="form-control input-md">
                                    </div>
                                </div>
                                
                            <div class=" col-sm-12" style="text-align:center">
                                <input type="submit" value="SIGN IN" name="button" id="button" 
                                 onclick="allLetter(document.form1.text1)" class="btn btn-primary  ">
                                <div id="w8"></div>
                                <div id="info" ></div>
                            </div>
                        </div>
                        <div class="navigation col-sm-12" style="margin-top:80px;">
                            <a href="#" onclick="activate('frm06', arr);" class="block_prev">
                            <font color="#FFFFFF ">Previous</font></a>&nbsp;&nbsp;&nbsp;</a>

                        </div>
                    </div>
                    
                </form>

            </div>           
        </section>
  <?php include "main/footer.php" ; ?>
     </body>
</html>

