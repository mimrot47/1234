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
          				<li ><a href="login.php">Login</a></li>
				</ul>
			</div>
			<!-- /.navbar-collapse --> 
		</nav>
	</div>
</header>


<!--end of slider section-->
<section class="main__middle__container homepage" style="margin-top:100px;height:90vh;">
	<div style="background-image:url(img/couple22.jpg); background-repeat:round; margin-top:120px;height:100%; width:100%">
			<div class="col-md-3 col-md-offset-8" style="margin-top:250px">
				<div class="panel panel-default log-panel">
					<div align="center" style="margin-bottom:15px">
					  <strong style="font-size:25px; font-family:CaviarDreams_Bold;">Forgot Password</strong>
					</div>
					<div class="panel-body">
						<form class="form-horizontal" role="form" action="forgot_pass_check.php" method="post">
						<div class="form-group">
							<div class="col-sm-12">
								<input type="email" class="form-control" id="email" name="email" placeholder="Enter your registered Email-Id" required="" style="font-family:CaviarDreams;" onBlur="validateEmail(this);" onKeyPress="return onlyAlphabets(event,this);">
								
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-12">
								<button type="submit" name="submit" class="btn btn-success col-sm-12" style="font-family:CaviarDreams_Bold; font-size:18px">Submit</button>
							</div>
						</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	
</section>

 <div style="margin-top:-20px;">
  
  <?php include "main/footer.php" ; ?>
</div>
</body>

</html>