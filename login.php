 <?php 
include"connect.php";
session_start();

if(isset($_SESSION['myusername']))
{
	header('location:http://bhavsarmarriage.com/matrimony/my_account.php');
}
//error_reporting(0);
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
 <script src="js/custom_js.js" type="text/javascript"></script>
 <script>
 function validateEmail(emailField){ 
        var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

        if (reg.test(emailField.value) == false) 
        {
             document.getElementById('email').value= "";
            //alert('Invalid Email Address');
             document.getElementById('email').style.borderColor = "red";
            return false;
           
        }
	document.getElementById('email').style.borderColor = "green";
        return true;

}



 </script>
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
		src: url(fonts/BRLNSR.TTF);
	}
	
		body { 
		 background:url(img/Register logine page BG.jpg) no-repeat center center fixed; 
		 -webkit-background-size: cover;
		 -moz-background-size: cover;
		 -o-background-size: cover;
		 background-size: cover;
		}
		
		.panel-default {
		 opacity: 0.9;
		 margin-top:30px;
		 padding-left:20px;
		 padding-right:20px;
		 padding-top:20px;
		 background-color:#FFFFFF;
		}
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
</head>
<body > 
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
          				<li ><a href="registration_personal.php">Register</a></li> 
				</ul>
			</div>
			<!-- /.navbar-collapse --> 
		</nav>
	</div>
</header>


<!--end of slider section-->
<section class="main__middle__container homepage" style="margin-top:100px;margin-top:2%;height:90vh;">
  	<div style="background-image:url(img/couple22.jpg); background-repeat:round;margin-top:7%;  height:100%; width:100%">
  	<?php
  if(isset($_GET["success"])){

  ?>
  <br>
  <br>
  <center><span style="color: green;font-weight: bold;font-size: 18px;">Registration and Payment Successfully Done</span></center>
  <br>
  <br>
  <?php
  } else if(isset($_GET["fail"])){
  ?>
  <br>
  <br>
  <center><span style="color: red;font-weight: bold;font-size: 18px;">Payment Failed</span></center>
  <br>
  <br>
  <?php
  }
  ?>
		<div class="col-md-3 col-md-offset-8" style="margin-top:120px">
			<div class="panel panel-default log-panel">
				<div align="center">
				  <strong style="font-size:25px; font-family:CaviarDreams_Bold;">Login</strong>
				</div>
				<div class="panel-body">
					 <form class="form-horizontal" role="form" name="as400samplecode"  action="login_check.php" method="post" > 
                			 <input type="hidden" name="id" value="<?php if(empty($_GET['id'])){}else{echo $_GET['id']; } ?>">
					
					<div class="form-group">
						<div class="col-sm-12">
							 <input type="email" class="form-control" id="" name="email" pattern="/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/" required onBlur="validateEmail(this);" onKeyPress="return onlyAlphabets(event,this);" style="font-family:CaviarDreams;" placeholder="Username">
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-12">
							<input type="password" class="form-control input-md" name="pass" placeholder="Password" required style="font-family:CaviarDreams;">
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-12">
							
							<input type="submit" value="Sign In" name="button" id="button" class="btn btn-success col-sm-12" style="font-family:CaviarDreams_Bold; font-size:18px">
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-8">
							<div class="checkbox">
								<label class='login-label' ><input type="checkbox" >Remember me</label>
							</div>
						</div>
						<div class="col-sm-offset-8">
							<div class="checkbox">
								<label class='login-label' ><a href="forgot_password.php" style="text-decoration: none;">Forgot Password?</a></label>
							</div>
						</div>
					</div>
					</form>
				</div>
			</div>
			<span class='login-span'>Don't have an account? <a href="registration_personal.php" style="color:#54aa51;font-family:CaviarDreams_Bold;text-decoration: none;">Sign Up</a> here !</span>
		</div>
	</div>
		
            <!--<div class="container main_form" style="width:600px;">
                <div class="col-sm-12 main_heading">
                    <h2 style="color:#fff">USER LOGIN </h2>
                </div>
                <form class="form-horizontal" name="as400samplecode"  action="login_check.php" method="post" > 
               
				<input type="hidden" name="id" value="<?php echo $_GET['id'];  ?>">
					<div id="frm07">
                        <div class="col-sm-12" id="id05">                          
                        <br><br>
                            <div class="form-group">
                                    <label class="col-sm-3 control-label" for="first_name">Email Id</label> 
                                    <div class="col-sm-1">
                                    	<img src="img/ICON 1/Oxygen-Icons.org-Oxygen-Apps-preferences-desktop-user-password.ico" style="width:30px;height:20px;">
                                    </div> 
                                    <div class="col-sm-8">
                                        <input type="email" class="form-control input-md" id="email" name="email" pattern="/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/" required onblur="validateEmail(this);" onKeyPress="return onlyAlphabets(event,this);">
                                    </div>
                                </div>
                                
                               
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="middle_name">Password</label>  
                                    <div class="col-sm-1">
                                    	<img src="img/ICON 1/UyeGirisi.png" style="width:30px;height:20px;">
                                    </div>
                                    <div class="col-sm-8">
                                        <input type="password" class="form-control input-md" name="pass" required>
                                    </div>
                                </div>
                            	 
                        </div>
                         <div class="col-sm-12 _heading">
                                <a href="forgot_password.php" style="float:right">Forgot Password</a>
                            </div><div>&nbsp;</div>
							<div align="center" class="col-sm-12">
							<label>Login if you're a member. If not, please <a href="registration_personal.php">Register here</a> and become a member.</label>
							</div>
                        <div class="navigation col-sm-12" style="margin-top:50px;">
                            <input type="submit" value="Sign In" name="button" id="button" class="btn btn-primary  ">

                        </div>
                    </div>
                    </form>
		</div>-->
  
</section>

 <div style="margin-top:-20px;">
  

</div>
<p class="text-center copyright">Copyright &copy; 2020<a href="www.cloudsoft.com"> Cloudsoft PVT.LTD</a>. All Rights Reserved.</p>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script type="text/javascript" src="http://www.htmlpreviews.com/cloud/badminton/credon8/js/jquery.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="http://www.htmlpreviews.com/cloud/badminton/credon8/js/bootstrap.min.js"></script> 
<script type="text/javascript">
$('.carousel').carousel({
  interval: 3500, // in milliseconds
  pause: 'none' // set to 'true' to pause slider on mouse hover
})
</script>


<script type="text/javascript">
$( "a.submenu" ).click(function() {
$( ".menuBar" ).slideToggle( "normal", function() {
// Animation complete.
});
});
$( "ul li.dropdown a" ).click(function() {
$( "ul li.dropdown ul" ).slideToggle( "normal", function() {
// Animation complete.
});
$('ul li.dropdown').toggleClass('current');
});
</script>
</body>

</html>