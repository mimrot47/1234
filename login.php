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
</head>
<body > 

<header class="main__header" style="background-image:url(img/header.png)">
  <div class="container">
    <nav class="navbar navbar-default" role="navigation"> 
      <div class="navbar-header">
        <h1 class="navbar-brand"><a href="index.php">MATRIMONY</a></h1>
        <a href="#" class="submenu">Menus</a> </div>
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
<section class="main__middle__container homepage" style="margin-top:100px;">
<class="col-sm-12 ">
            <div class="container main_form" style="width:600px">
                <div class="col-sm-12 main_heading">
                    <h2 style="color:#fff">USER LOGIN </h2>
                </div>
                <form class="form-horizontal" name="as400samplecode"  action="login_check.php" method="post" > 
                <?php 
				include"connect.php";
				error_reporting(0);
				?><input type="hidden" name="id" value="<?php echo $_GET['id'];  ?>">
					<div id="frm07">
                        <div class="col-sm-12" id="id05">
                        <br><br>
                            <div class="form-group">
                                    <label class="col-sm-3 control-label" for="first_name">Email Id</label> 
                                    <div class="col-sm-1">
                                    	<img src="img/ICON 1/Oxygen-Icons.org-Oxygen-Apps-preferences-desktop-user-password.ico" style="width:30px;height:20px;">
                                    </div> 
                                    <div class="col-sm-8">
                                        <input type="email" class="form-control input-md" name="email" required>
                                    </div>
                                </div>
                                <!-- Text input-->
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
					</div>
                    </div>
  <!--<div class="row three__blocks no_padding no-margin">
    <div class="container"><div class="col-md-6">
     <section class="main__middle__container homepage" style="margin-top:100px;">
            <div class="container main_form" style="width:500px">
                <div class="col-sm-12 main_heading" >
                    <h2>LOGIN FORM</h2>
                </div>
                <form action="login_check.php" method="post" >
                <div  style="padding-top:80px;padding-left:60px;">
                  <table>
                  <tr>
                    <td><span class="head_color_css"> Email</span></td>
                    <td>
                        <input type="email" class="form-control form-control-lg" style="width:300px;" name="email" required>
                    </td>
                   </tr>
                   <tr>
                    <td><span class="head_color_css">Password</span></td>
                    <td>
                        <input type="password" class="form-control form-control-lg" style="padding:10px;" name="pass" required>
                    </td>
                   </tr>
                   <tr><td></td></tr>
                   <tr>
                  <td></td>
                  <td>
                  <input type="submit" value="Submit" name="button"  class="btn btn-primary  ">
                  </td>
                  </tr>
                  <tr>
                  <td></td>
                  <td><a href="forgot_password.php"><h5>Forgot Password</h5></a></td></tr>
                  </table></div>
              </form></div>
			</div>
<div class="col-md-6">
    <img src="img/Maharashtrian-Wedding-RR-155.jpg" width="450px;" height="350px" class="img-responsive img-rounded" style="margin-top:50px;">
    </div>
    </section>
    </div>
    
  </div>-->
  
  
  
 
</section>

 <div style="margin-top:72px;">
  

</div>
<p style="position: fixed;bottom: 0px;width: 100%;" class="text-center copyright">&copy; Copyright<a href="www.backtechs.com"> Backend Technologies PVT.LTD</a>. All Rights Reserved.</p>
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