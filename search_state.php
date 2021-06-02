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
<?php 
error_reporting(0);
$gender=$_POST['gender'];$gender=$_REQUEST['gender'];
$states=$_POST['states'];
?>

<!--end of slider section-->
<section class="main__middle__container homepage" style="margin-top:100px;background-color:#ebecec;height:120vh">
<div style="background-color:#ebecec; margin-top:120px;min-height: 100%;">
	<div style="padding-top:30px;"></div>
	<h2 class="text-center"><span style="font-family:CaviarDreams_Bold;text-transform:none; color:#c73828;">All Registered <?php echo $gender.'s';?> <?php if($states!='') { echo 'in '.$states;}?></span></h2>
		<?php 
		include "connect.php";
		error_reporting(0);
		$gender=$_POST['gender'];
		$states=$_POST['states'];
		$marriageType=$_POST['marriageType'];
		?>
		<div class="container" style="margin-top:25px;">
			<div class="col-md-12">
				<?php
				$gender=$_REQUEST['gender'];
				$states=$_REQUEST['states'];
				$marriageType=$_REQUEST['marriageType'];
				if($states!='')
				{
					$start=0;
					$limit=20;
					
					if(isset($_GET['id']))
					{
						$id=$_GET['id'];
						$start=($id-1)*$limit;
					}
					else
					{
						$id=1;
					}
					if($marriageType=='Select Marriage Status')
					{
					$query = "select * from matrimonialall where gender='$gender' and is_del='no' and states='$states' and payment='Yes' and acc_type!='Deactive' order by candidate_id";
					$show_marg=mysqli_query($conn,"select * from matrimonialall where gender='$gender' and is_del='no' and states='$states' and payment='Yes' and acc_type!='Deactive' order by candidate_id limit $start,$limit") or die(mysqli_error($conn));
					}
					else
					{
					$query = "select * from matrimonialall where gender='$gender' and is_del='no' and states='$states' and payment='Yes' and marriageType='$marriageType' and acc_type!='Deactive' order by candidate_id";
					$show_marg=mysqli_query($conn,"select * from matrimonialall where gender='$gender' and is_del='no' and states='$states' and marriageType='$marriageType' and payment='Yes' and acc_type!='Deactive' order by candidate_id limit $start,$limit") or die(mysqli_error($conn));
					}
					$image_mime_type="image/png|image/jpeg|image/gif";
					while($row_marg=mysqli_fetch_array($show_marg))
					{ 
					?>
					<div class="col-xs-3" style="margin-bottom:25px">
					<p class="brideslider"> <?php echo ucfirst($row_marg['first_name']);?><br>
					<?php echo "<a href=login.php?id=".$row_marg['unique_id']." >";?>
					<?php 
						 if($row_marg['profile_pic']=='')
						 {
							 if($gender=="Bride")
							 {
							 ?>         
					         		<img src="matrimony/img/bride.png" class="img-responsive slide-image" id="img-success" >
					         <?php
							 }
							 else
							 {?>
								 <img src="matrimony/img/groom.png" class="img-responsive slide-image" id="img-success" >
					          <?php
							 }
						 }
						 else
						 {
						?>
						<img src="profile_photos/<?php echo $row_marg['profile_pic'];?>" alt="image" class="img-responsive slide-image" id="img-success">
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
				<div align="center" >
				<?php
					$rws=mysqli_num_rows(mysqli_query($conn,$query));
					//calculate total page number for the given table in the database 
					$total=ceil($rws/$limit);
					if($id>1)
					{
						//Go to previous page to show previous 10 items. If its in page 1 then it is inactive
						echo "<a href='?id=".($id-1)."&marriageType=".$marriageType."&gender=".$gender."&states=".$states."' class='btn btn-info'>PREV</a>";
						echo "&nbsp;";
					}
					for($i=1;$i<=$total;$i++)
					{
						if($i==$id) 
						{ 
							echo "<label class='btn' style='color:#0033FF'>".$i."</label>&nbsp;";
						}
						else 
						{  
							echo "<a class='btn' href='?id=".$i."&marriageType=".$marriageType."&gender=".$gender."&states=".$states."'>".$i."&nbsp;</a>"; 
												
						}
					}
					if($id!=$total)
					{
						////Go to previous page to show next 10 items.
						echo "&nbsp;";
						echo "<a href='?id=".($id+1)."&gender=".$gender."&states=".$states."' class='btn btn-info'>NEXT</a>";
					}
				?>
				</div>
			</div>
			<?php 
					
				}
				else
				{
				?>  
				<?php
					$gender_1=$_GET['gender'];
					$start=0;
					$limit=20;
					
					if(isset($_GET['id']))
					{
						$id=$_GET['id'];
						$start=($id-1)*$limit;
					}
					else
					{
						$id=1;
					}
				
					$query = "select * from matrimonialall where gender='$gender_1' and is_del='no' and payment='Yes' and acc_type!='Deactive' order by candidate_id";
					$show_marg=mysqli_query($conn,"select * from matrimonialall where gender='$gender_1' and is_del='no' and payment='Yes' and acc_type!='Deactive' order by candidate_id limit $start,$limit") or die(mysqli_error($conn));
					$image_mime_type="image/png|image/jpeg|image/gif";
					while($row_marg=mysqli_fetch_array($show_marg))
					{
					?>
					<div class="col-xs-3" style="margin-bottom:25px">
					<p class="brideslider"> <?php echo ucfirst($row_marg['first_name']);?><br>
					<?php echo "<a href=login.php?id=".$row_marg['unique_id']." >";?>
					<?php 
						 if($row_marg['profile_pic']=='')
						 {
							 if($gender=="Bride")
							 {
							 ?>         
					         		<img src="matrimony/img/bride.png" class="img-responsive slide-image" id="img-success" >
					         <?php
							 }
							 else
							 {
							 ?>
								 <img src="matrimony/img/groom.png" class="img-responsive slide-image" id="img-success" >
					          <?php
							 }
						 }
						 else
						 {
						  ?>
						  <img src="profile_photos/<?php echo $row_marg['profile_pic'];?>" alt="image" class="img-responsive slide-image" id="img-success">
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
				</div>
				<div align="center">
				<?php
					$rws=mysqli_num_rows(mysqli_query($conn,$query));
					//calculate total page number for the given table in the database 
					$total=ceil($rws/$limit);
										
					if($id>1)
					{
						//Go to previous page to show previous 10 items. If its in page 1 then it is inactive
						echo "<a href='?id=".($id-1)."&marriageType=".$marriageType."&gender=".$gender_1."' class='btn btn-info'>PREV</a>";
						echo "&nbsp;";
					}
					for($i=1;$i<=$total;$i++)
					{
						if($i==$id) 
						{ 
							echo "<label class='btn' style='color:#0033FF'>".$i."</label>&nbsp;";
						}
						else 
						{  
							echo "<a class='btn' href='?id=".$i."&marriageType=".$marriageType."&gender=".$gender_1."'>".$i."&nbsp;</a>"; 
												
						}
					}
					if($id!=$total)
					{
						////Go to previous page to show next 10 items.
						echo "&nbsp;";
						echo "<a href='?id=".($id+1)."&gender=".$gender_1."' class='btn btn-info'>NEXT</a>";
					}
				}
				?>	
				</div>
		</div>
		
	</div>
	<div>
		<p class="text-center" style="height:80px; background-color:#2e3c43;padding-top:30px; color:#ffffff;">Copyright &copy; 2020 <a href="http://www.cloudsoft.com" style="color:#ffffff;">cloudsoft PVT.LTD</a>. All Rights Reserved.</p>
	</div>
</section>
<div>
</div>
</body>

</html>