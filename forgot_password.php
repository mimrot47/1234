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
          <li ><a href="registration.php">Register</a></li>
          <li ><a href="login.php">Login</a></li>
        </ul>
      </div>
      <!-- /.navbar-collapse --> 
    </nav>
  </div>
</header>


<!--end of slider section-->
<section class="main__middle__container homepage" style="margin-top:100px;">
            <div class="container main_form" style="width:600px">
                <div class="col-sm-12 main_heading">
                    <h2 style="color:#fff">Forgot Password</h2>
                </div>
                <form class="form-horizontal" name="as400samplecode"  action="forgot_pass_check.php" method="post" > 
					<div id="frm07">
                        <div class="col-sm-12" id="id05">
                        <br><br>
                            <div class="form-group">
                                    <label class="col-sm-4 control-label" for="first_name">Enter Your Email-id</label> 
                                    <div class="col-sm-1">
                                    	<img src="img/ICON 1/Oxygen-Icons.org-Oxygen-Apps-preferences-desktop-user-password.ico" style="width:30px;height:30px;">
                                    </div> 
                                    <div class="col-sm-7">
                                        <input type="email" style="padding:10px; border-radius:10px; border:none; border:solid 1px #000" name="email" required>
                                    </div>
                                </div>
                                <!-- Text input-->
                                
                            
                        </div>
                         <div class="col-sm-12 _heading">
                            </div>
                        <div class="navigation col-sm-12" style="margin-top:90px;">
                            <button type="submit" name="submit" class="btn btn-default btn-lg"role="button" value="Submit">Submit</button>

                        </div>
                    </div>
                    </form>
                    
                    </div>

  
  
 
</section>

 <div style="margin-top:118px;">
  
  <?php include "main/footer.php" ; ?>
</div>
</body>

</html>