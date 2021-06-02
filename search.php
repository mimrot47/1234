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
		@font-face {
			font-family: BebasNeue;
			src: url(fonts/BebasNeue.otf);
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
<section class="main__middle__container homepage" style="margin-top:132px;height: 100vh;background-color: #ebecec;">
<?php
header('Cache-Control: no cache'); //no cache
session_cache_limiter('private_no_expire'); // works
 include_once "session.php";
//error_reporting(0);
 ob_start();
include "connect.php";

    $marriageType=$_SESSION['marriageType'] = $_POST['marriageType'];
    $academic_level=$_POST['academic_level'];
    $gender=$_POST['gender'];
	$subcast=$_POST['subcast'];
    $states=$_SESSION['states']=$_POST['states'];
    $city=$_POST['city'];
    $from=$_POST['from'];
    $to=$_POST['to'];
    $age=$from ." ". $to;
	?>
    <div class="row grey-info-block text-center"  >
    <div class="container"  >
<h2 class="text-center" style='margin-top: 0;margin-bottom: 25px;'><span style="font-family:CaviarDreams_Bold;text-transform:none;color:#c73828;">All Registered <?php echo $gender.'s';?> <?php if($city!='') { echo 'in '.$city.' ('.$states.')';}?></span></h2>
    <?php 
	if($city!='' && $city!='Select City')
	{
		$from=$_POST['from'];
		$to=$_POST['to']; 
		$qry="select * from matrimonialall where gender='$gender' and subcast='$subcast' and is_del='no' and marriageType='$marriageType' and payment='Yes' and faculty='$academic_level' and states='$states' and city='$city' and age BETWEEN $from AND $to ";
		$show_marg=mysqli_query($conn,$qry) or die(mysqli_error($conn));
		$image_mime_type="image/png|image/jpeg|image/gif";
		$number = mysqli_num_rows($show_marg);
		if($number==0)
		{
		?><strong style="color:#FF0000; font-size:24px">
		<?php	
			echo "No Record Found......";
		?>
		</strong>
		<?php
		}
		else
		{  
		while($row_marg=mysqli_fetch_array($show_marg))
		{
	?>
    <div class="col-xs-3" style="margin-bottom:25px">
		<p class="brideslider" style="text-align:left;"> <?php echo ucfirst($row_marg['first_name']);?><br>
		<?php echo "<a href=login.php?id=".$row_marg['unique_id']." >";?>
		<?php 
			 if($row_marg['profile_pic']=='')
			 {
				 if($gender=="Bride")
				 {
				 ?>         
					<img src="img/bride.png" class="img-responsive slide-image" id="img-success" >
				 <?php
				 }
				 else
				 {?>
					 <img src="img/groom.png" class="img-responsive slide-image" id="img-success" >
				  <?php
				 }
			 }
			 else
			 {
				?>
				<img src="profile_photos/<?php echo $row_marg['profile_pic'];?>" class="img-rounded img-responsive slide-image" id="img-success">
				<?php
				
			 }
			?>
			</a>
		Age - <?php echo $row_marg['age'];?><br> City - <?php echo $row_marg['city'];?>,<br> State - <?php echo $row_marg['states'];?>
		</P>
		</div>
		<?php
		}
		?>
	</div>	
     <?php			
		}	
	}
	else
	{
		if($marriageType!='Select Marriage Status' && $academic_level!='Select Qualification')
		{
		$from=$_POST['from'];
		$to=$_POST['to'];
		$qry="select * from matrimonialall where gender='$gender' and subcast='$subcast' and is_del='no' and marriageType='$marriageType' and payment='Yes' and faculty='$academic_level' and states='$states' and age BETWEEN $from AND $to ";
		$show_marg=mysqli_query($conn,$qry) or die(mysqli_error($conn));
		$image_mime_type="image/png|image/jpeg|image/gif";
		$number = mysqli_num_rows($show_marg);
		if($number==0)
		{
		?><strong style="color:#FF0000; font-size:24px">
		<?php	
			echo "No Record Found......";
		?>
		</strong>
		<?php
		}
		else
		{ 
		while($row_marg=mysqli_fetch_array($show_marg))
		{
	?>
    
     <div class="col-md-3"> 
     <?php 
	 if($row_marg['profile_pic']=='')
	 {
		 if($gender=="Bride")
		 {
		 ?>         
         		<img src="img/bide.png" class="img-rounded img-responsive slide-image" id="img-success" >
         <?php
		 }
		 else
		 {?>
			 <img src="img/groom.png" class="img-rounded img-responsive slide-image" id="img-success" >
          <?php
		 }
	 }
	 else
	 {
	 ?>
	 <img src="profile_photos/<?php echo $row_marg['profile_pic'];?>" class="img-rounded img-responsive slide-image" id="img-success">
	 <?php
	 }
	 ?>
       <center>
	   <font color="#000099"><strong><?php echo ucfirst($row_marg['first_name'])." ".ucfirst($row_marg['last_name']);?></strong><?php echo ", ".$row_marg['age']; ?></font>
        <p> <?php echo $row_marg['city']; ?><br>
        <?php  echo "<a href=login.php?id=".$row_marg['unique_id']." >View Details</a>";?>
		</p>
		</center>
      </div>
		<?php			
		}
		}/*while*/
		}	
		else
		{
		?>
		<strong style="color:#FF0000; font-size:24px">
		<?php	
			echo "No Record Found......";
		?>
		</strong>
		<?php
		}	
	}/*if*/
	?> 
   </div>
 </div>
 
 
</section>
<div style="margin-top:-20px;">
<?php include "main/footer.php" ; ?>
</div>
</body>

</html>