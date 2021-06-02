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
			src: url(fonts/BRLNSR.TTF);
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
                //margin-bottom:20px;
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
           

        </style>
</head>
<body> 
<header class="main__header" >
	<div style="background-color:#225169; height:50px">&nbsp;</div>
		<div class="container">
			<nav class="navbar navbar-default" role="navigation"> 
			<div class="navbar-header">
				<h1 class="navbar-brand" style="font-family:CenturyGothict; font-size:28px"><a href="index.php"><span style="color:#FF4500">MALI</span> <span style="color:#225169">MATRIMONY</span></a></h1>
				<a href="#" class="submenu" style="background-image:url(img/default-logo.png); width:40px; height:40px">Menus</a> 
			</div>
			<div class="menuBar">
				<ul class="menu">
					    <li class="active"><a href="index.php">Home</a></li>
				        <li><a href="#search">SEARCH</a></li>
				        <li><a href="#bride">BRIDE</a></li>
				        <li><a href="#groom">GROOM</a></li>
				        <li><a href="#success">SUCCESS STORIES</a></li>
				        <li><a href="terms.php">TERMS AND CONDITIONS</a></li>
				        <li><a href="#contact">Contact Us</a></li>     
				</ul>
			</div>
			<!-- /.navbar-collapse --> 
		</nav>
	</div>
</header>
</body>
	<div style="background-color:#ebecec; margin-top:120px;">
		<div style="padding-top:30px;"></div>
		<h2 class="text-center"><span style="font-family:CaviarDreams_Bold;text-transform:none; color:#c73828;">Success Stories From Us &nbsp;</span></h2>
		<div class="container" style="margin-top:25px;">
			<div class="col-md-12">
			<?php 
				include "connect.php";
				$show=mysqli_query($conn,"select * from success_stories where is_del='no' order by id ") or die(mysqli_error($conn));
				$image_mime_type="image/png|image/jpeg|image/gif";
				while($row=mysqli_fetch_array($show))
				{
					$photo_path=$row['photo'];
					$id=$row['id'];
			?>
				<div class="col-xs-3" style="margin-bottom:25px">
					<p class="brideslider"><?php echo ucfirst($row['bride_name'])." & ".ucfirst($row['groom_name']);?><br>
					<a href="view_stories.php?id=<?php echo $id;?>"><img src="admin/matrimony/matrimony_success_img/<?php echo $photo_path;?>" class="img-responsive slide-image" ></a>
					Marriage - <?php echo date("d M Y", strtotime($row['marriage_date'])); ?><br>State - <?php echo ucfirst($row['state']);?>,<br> City - <?php echo ucfirst($row['city']);?>
					</P>
				</div>
				
			<?php
				}
			?>
			</div>
		</div>
		<p class="text-center" style="height:80px; background-color:#2e3c43;padding-top:30px; color:#ffffff;">Copyright &copy; 2020<a href="http://www.cloudsoft.com" style="color:#ffffff;"> cloudsoft PVT.LTD</a>. All Rights Reserved.</p>
</html>