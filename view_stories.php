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

<header class="main__header">
  <div style="background-color:#225169; height:50px">&nbsp;</div>
  <div class="container">
    <nav class="navbar navbar-default" role="navigation"> 
      <div class="navbar-header">
        <h1 class="navbar-brand" style="font-family:CenturyGothict; font-size:30px"><a href="index.php"><span style="color:#FF4500">MALI</span> <span style="color:#225169">MATRIMONY</span></a></h1>
        <a href="#" class="submenu" style="background-image:url(img/default-logo.png); width:40px; height:40px">Menus</a> </div>
      <div class="menuBar">
        <ul class="menu">
        	<li ><a href="index.php">Home</a></li>
          <li ><a href="registration_personal.php">Register</a></li>        
        </ul>
        
      </div>
      
    </nav>
  </div>
</header>

<!--end of slider section-->
<section class="main__middle__container homepage" style="height:100vh">
<center>
<?php 
include "connect.php";
$id=$_GET['id'];

$show=mysqli_query($conn,"select * from success_stories where is_del='no' and id=$id ") or die(mysqli_error($conn));
				
$image_mime_type="image/png|image/jpeg|image/gif";

while($row=mysqli_fetch_array($show))
{
	echo "<div class='container'>";
	$photo_path=$row['photo'];
	echo '<img src="admin/matrimony/matrimony_success_img/'.$photo_path .'" id="img-success" style="height:500px;width:900px"/>';
	$id=$row['id'];
	echo "&nbsp;&nbsp;&nbsp;";
	echo "<h3>".$row['bride_name']." & ".$row['groom_name']."</h3>";
	echo "<p>".$row['ss_desc']."</p>";
	echo "</div>";
}

?>  
</center>
 
</section>
<p class="text-center" style="height:80px; background-color:#2e3c43;padding-top:30px; color:#ffffff;margin:0px;">Copyright &copy; 2017<a href="http://www.backtechs.com" style="color:#ffffff;"> Backend Technologies PVT.LTD</a>. All Rights Reserved.</p>
</body>

</html>