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
<?php 
include "connect.php";
error_reporting(0);
$gender=$_POST['gender'];
$states=$_POST['states'];
$marriageType=$_POST['marriageType'];
?>

<div class="row grey-info-block text-center"  >
<div class="container" >

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
		$query = "select * from matrimonialall where gender='$gender' and is_del='no' and states='$states' order by candidate_id";
		$show_marg=mysql_query("select * from matrimonialall where gender='$gender' and is_del='no' and states='$states' order by candidate_id limit $start,$limit") or die(mysql_error());
		}
		else
		{
		$query = "select * from matrimonialall where gender='$gender' and is_del='no' and states='$states' and marriageType='$marriageType' order by candidate_id";
		$show_marg=mysql_query("select * from matrimonialall where gender='$gender' and is_del='no' and states='$states'and marriageType='$marriageType' order by candidate_id limit $start,$limit") or die(mysql_error());
		}
		$image_mime_type="image/png|image/jpeg|image/gif";
		while($row_marg=mysql_fetch_array($show_marg))
		{ 
	?>
    
	<div class="col-md-3"  style="border: 1px solid black; border-left:none; border-right:none; border-top:none; padding: 10px;"> 
     <?php 
	 if($row_marg['profile_pic']=='')
	 {
		 if($gender=="Bride")
		 {
		 ?>         
         <img src="img/Female.png" class="img-rounded img-responsive" id="img-success" style="width:150px; height: 160px;">
         <?php
		 }
		 else
		 {?>
			 <img src="img/Male.png" class="img-rounded img-responsive" id="img-success" style="width:150px; height: 160px;">
          <?php
		 }
	 }
	 else
	 {
	 echo '<img src="data:'.$image_mime_type.';base64,'.base64_encode($row_marg['profile_pic']).'" class="img-rounded img-responsive" 
     id="img-success" style="width:150px; height: 160px;"/>';
	 }
	 ?>
        <center><font color="#000099"><strong><?php echo ucfirst($row_marg['first_name'])." ".ucfirst($row_marg['last_name']);?></strong><?php echo ", ".$row_marg['age']; ?></font>
        <p> <?php echo ucfirst($row_marg['city']); ?><br>
        <?php echo "<a href=login.php?id=".$row_marg['unique_id']." >View Details</a>";
		//echo "<button class=btn btn-info ><a role=button href=login.php?id=".$row_marg['unique_id']." >View Details</a></button>";?></p></center>
      </div>
	<?php			
	}/*while*/
	?></div>
	<?php		
	$rws=mysql_num_rows(mysql_query($query));
	//calculate total page number for the given table in the database 
	$total=ceil($rws/$limit);
	if($id>1)
	{
		//Go to previous page to show previous 10 items. If its in page 1 then it is inactive
		echo "<a href='?id=".($id-1)."&gender=".$gender."&states=".$states."' class='btn btn-info'>PREV</a>";
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
			echo "<a class='btn' href='?id=".$i."&gender=".$gender."&states=".$states."'>".$i."&nbsp;</a>"; 
								
		}
	}
	if($id!=$total)
	{
		////Go to previous page to show next 10 items.
		echo "&nbsp;";
		echo "<a href='?id=".($id+1)."&gender=".$gender."&states=".$states."' class='btn btn-info'>NEXT</a>";
	}
		
}/*if*/
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

	$query = "select * from matrimonialall where gender='$gender_1' and is_del='no' order by candidate_id";
	$show_marg=mysql_query("select * from matrimonialall where gender='$gender_1' and is_del='no' order by candidate_id limit $start,$limit") or die(mysql_error());
	$image_mime_type="image/png|image/jpeg|image/gif";
	while($row_marg=mysql_fetch_array($show_marg))
	{
	?>
	<div class="col-md-3" style="border: 1px solid black; border-left:none; border-right:none; border-top:none; padding: 10px;"> 
     <?php 
	 if($row_marg['profile_pic']=='')
	 {
		 if($gender=="Bride")
		 {
		 ?>         
         <img src="img/Female.png" class="img-rounded img-responsive" id="img-success" style="width:150px; height: 160px;">
         <?php
		 }
		 else
		 {?>
			 <img src="img/Male.png" class="img-rounded img-responsive" id="img-success" style="width:150px; height: 160px;">
          <?php
		 }
	 }
	 else
	 {
	 echo '<img src="data:'.$image_mime_type.';base64,'.base64_encode($row_marg['profile_pic']).'" class="img-rounded img-responsive" 
     id="img-success" style="width:150px; height: 160px;"/>';
	 }
	 ?>
        <center><font color="#000099"><strong><?php echo ucfirst($row_marg['first_name'])." ".ucfirst($row_marg['last_name']);?></strong><?php echo ", ".$row_marg['age']; ?></font>
        <p> <?php echo ucfirst($row_marg['city']); ?><br>
        <?php 
		echo "<a href=login.php?id=".$row_marg['unique_id']." >View Details</a>";
		//echo "<button class=btn btn-info ><a role=button href=login.php?id=".$row_marg['unique_id']." >View Details</a></button>";?></p></center>
      </div>
	<?php			
	}/*while*/		
	
	?> 
   </div>
   <?php
   $rws=mysql_num_rows(mysql_query($query));
	//calculate total page number for the given table in the database 
	$total=ceil($rws/$limit);
	if($id>1)
	{
		//Go to previous page to show previous 10 items. If its in page 1 then it is inactive
		echo "<a href='?id=".($id-1)."&gender=".$gender_1."' class='btn btn-info'>PREV</a>";
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
			echo "<a class='btn' href='?id=".$i."&gender=".$gender_1."'>".$i."&nbsp;</a>"; 
								
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

</section>
<div style="margin-top:72px;">
<?php include "main/footer.php" ; ?>
</div>
</body>

</html>