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
          <li ><a href="#bride">Register</a></li>
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

  $marriageType=$_POST['marriageType'];
  $academic_level=$_POST['academic_level'];
  $gender=$_POST['gender'];
  $states=$_POST['states'];
   $city=$_POST['city'];
  $from=$_POST['from'];
  $to=$_POST['to'];
  $age=$from ." ". $to;
if($marriageType!='' && $academic_level==''  && $states=='' && $age=='' && $gender=='' && $city=='')
{
	?>
    	<div class="row grey-info-block text-center"  >
    <div class="container"  style="float:left">

    <?php
	$show_marg=mysql_query("select * from matrimonialall where marriageType='$marriageType' and is_del='no'  ") or die(mysql_error());
						$image_mime_type="image/png|image/jpeg|image/gif";

										while($row_marg=mysql_fetch_array($show_marg))
										{
											?>
    
     <div class="col-md-4"> 
     <?php echo '<img src="data:'.$image_mime_type.';base64,'.base64_encode
								($row_marg['profile_pic']).'" class="img-rounded img-responsive" 
     id="img-success" style="width:150px"/>';?>
        <center><h3><font color="#000099"><?php echo $row_marg['first_name']." ".$row_marg['last_name']; ?></font></h3>
        <p> <?php echo $row_marg['academic_level']; ?><br>
        <?php echo "<button class=btn btn-info><a role=button href=login.php?id=".$row_marg['unique_id']." >View Details</a></button>"?></p></center>
      </div>
					<?php					}?>    </div>
  </div>
<?php
}

if($marriageType!='' && $academic_level!=''  && $states!=''  && $gender!='' && $age!='' )
{
	
	
    	if($gender=='Bride')
	{
		$show_state=mysql_query("select * from matrimonialall where states='$states' and marriageType='$marriageType'  and age BETWEEN $from AND $to and gender='Bride' and is_del='no' and faculty='$academic_level'  ") or die(mysql_error());
													$image_mime_type="image/png|image/jpeg|image/gif";
										while($row_state=mysql_fetch_array($show_state))
										{
											?>
	<div class="row grey-info-block text-center"  >
    <div class="container">
    
     <div class="col-md-4"> 
     <?php echo '<img src="data:'.$image_mime_type.';base64,'.base64_encode
								($row_state['profile_pic']).'" class="img-rounded img-responsive" 
     id="img-success" style="width:150px"/>';?>
        <center><h3><font color="#000099"><?php echo $row_state['first_name']." ".$row_state['last_name']; ?></font></h3>
        <p><?php echo $row_state['academic_level']; ?><br>
        <?php echo "<button class=btn btn-info><a role=button href=login.php?id=".$row_state['unique_id']." >View Details</a></button>"?></p></center>
      </div>
    </div>
  </div>
					<?php					
										}
	}
	else
		{
			$show_state=mysql_query("select * from matrimonialall where states='$states' and marriageType='$marriageType' and  age BETWEEN $from AND $to and gender='Groom' and is_del='no' and faculty='$academic_level' ") or die(mysql_error());
													$image_mime_type="image/png|image/jpeg|image/gif";
										while($row_state=mysql_fetch_array($show_state))
										{
											?>
	<div class="row grey-info-block text-center"  >
    <div class="container">
    
     <div class="col-md-4"> 
     <?php echo '<img src="data:'.$image_mime_type.';base64,'.base64_encode
								($row_state['profile_pic']).'" class="img-rounded img-responsive" 
     id="img-success" style="width:150px"/>';?>
        <center><h3><font color="#000099"><?php echo $row_state['first_name']." ".$row_state['last_name']; ?></font></h3>
        <p><?php echo $row_state['academic_level']; ?><br>
       <?php echo "<a class=btn btn-info role=button href=login.php?id=".$row_state['unique_id']." >View Details</a>"?></p></center>
      </div>
    </div>
  </div>
					<?php					
										}
		}

}



if($marriageType=='' && $academic_level!='' && $gender==''  && $states=='' && $age=='' && $city=='')
{
	$show_al=mysql_query("select * from matrimonialall where faculty='$academic_level' and is_del='no'  ") or die(mysql_error());
																					$image_mime_type="image/png|image/jpeg|image/gif";
										while($row_al=mysql_fetch_array($show_al))
										{
											?>
	<div class="row grey-info-block text-center"  >
    <div class="container">
    
     <div class="col-md-4"> 
     <?php echo '<img src="data:'.$image_mime_type.';base64,'.base64_encode
								($row_al['profile_pic']).'" class="img-rounded img-responsive" 
     id="img-success" style="width:150px"/>';?>
        <center><h3><font color="#000099"><?php echo $row_al['first_name']." ".$row_al['last_name']; ?></font></h3>
        <p><?php echo $row_al['academic_level']; ?><br>
        <?php echo "<button class=btn btn-info><a role=button href=login.php?id=".$row_al['unique_id']." >View Details</a></button>"?></p></center>
      </div>
    </div>
  </div>
					<?php					}
}

if($marriageType=='' && $academic_level=='' && $states!='' && $age=='' && $gender=='' && $city=='')
{
		$show_state=mysql_query("select * from matrimonialall where states='$states' and is_del='no'  ") or die(mysql_error());
													$image_mime_type="image/png|image/jpeg|image/gif";
										while($row_state=mysql_fetch_array($show_state))
										{
											?>
	<div class="row grey-info-block text-center"  >
    <div class="container">
    
     <div class="col-md-4"> 
     <?php echo '<img src="data:'.$image_mime_type.';base64,'.base64_encode
								($row_age['profile_pic']).'" class="img-rounded img-responsive" 
     id="img-success" style="width:150px"/>';?>
        <center><h3><font color="#000099"><?php echo $row_state['first_name']." ".$row_state['last_name']; ?></font></h3>
        <p> <?php echo $row_state['academic_level']; ?><br>
        <?php echo "<button class=btn btn-info><a role=button href=login.php?id=".$row_state['unique_id']." >View Details</a></button>"?></p></center>
      </div>
    </div>
  </div>
  
					<?php					}
}
$age=$from ."".$to;
if($marriageType!=''  && $states!='' && $age!=''  && $city!='' && $gender!='' && $city=='' && $academic_level=='')
{
	if($gender=='Bride')
	{
		$show_state=mysql_query("select * from matrimonialall where states='$states' and marriageType='$marriageType' and city='$city' and age BETWEEN $from AND $to and gender='Bride' and is_del='no' and faculty='$academic_level' ") or die(mysql_error());
													$image_mime_type="image/png|image/jpeg|image/gif";
										while($row_state=mysql_fetch_array($show_state))
										{
											?>
	<div class="row grey-info-block text-center"  >
    <div class="container">
    
     <div class="col-md-4"> 
     <?php echo '<img src="data:'.$image_mime_type.';base64,'.base64_encode
								($row_state['profile_pic']).'" class="img-rounded img-responsive" 
     id="img-success" style="width:150px"/>';?>
        <center><h3><font color="#000099"><?php echo $row_state['first_name']." ".$row_state['last_name']; ?></font></h3>
        <p><?php echo $row_state['academic_level']; ?><br>
        <?php echo "<button class=btn btn-info><a role=button href=login.php?id=".$row_state['unique_id']." >View Details</a></button>"?></p></center>
      </div>
    </div>
  </div>
					<?php					
										}
	}
	else
		{
			$show_state=mysql_query("select * from matrimonialall where states='$states' and marriageType='$marriageType' and city='$city' and age BETWEEN $from AND $to and gender='Groom' and is_del='no' and faculty='$academic_level' ") or die(mysql_error());
													$image_mime_type="image/png|image/jpeg|image/gif";
										while($row_state=mysql_fetch_array($show_state))
										{
											?>
	<div class="row grey-info-block text-center"  >
    <div class="container">
    
     <div class="col-md-4"> 
     <?php echo '<img src="data:'.$image_mime_type.';base64,'.base64_encode
								($row_state['profile_pic']).'" class="img-rounded img-responsive" 
     id="img-success" style="width:150px"/>';?>
        <center><h3><font color="#000099"><?php echo $row_state['first_name']." ".$row_state['last_name']; ?></font></h3>
        <p><?php echo $row_state['academic_level']; ?><br>
       <?php echo "<a class=btn btn-info role=button href=login.php?id=".$row_state['unique_id']." >View Details</a>"?></p></center>
      </div>
    </div>
  </div>
					<?php					
										}
		}
}
?>
<div class="row grey-info-block text-center"  >
    <div class="container">
    
      
<?php
$age= $from . " ". $to;
if($marriageType=='' && $academic_level==''  && $states=='' && $age!='' && $gender=='' && $city=='')
{
	//echo"age";
	 $from;
	 $to;
			$show_age=mysql_query("select * from matrimonialall where age BETWEEN $from AND $to and is_del='no'  ") or die(mysql_error());
														$image_mime_type="image/png|image/jpeg|image/gif";
										while($row_age=mysql_fetch_array($show_age))
										{
											?>
	<div class="col-md-4">
     <?php echo '<img src="data:'.$image_mime_type.';base64,'.base64_encode
								($row_age['profile_pic']).'" class="img-rounded img-responsive" 
     id="img-success" style="width:150px"/>';?>
        <center><h3><font color="#000099"><?php echo $row_age['first_name']." ".$row_age['last_name']; ?></font></h3>
        <p><?php echo $row_age['academic_level']; ?><br>
        <?php echo "<button class=btn btn-info><a role=button href=login.php?id=".$row_age['unique_id']." >View Details</a></button>"?></p></center>
      </div>
  <?php					
										}

}
?>


    </div>
  </div>
  
  <?php
if($marriageType=='' && $academic_level==''  && $states=='' && $age!='' && $gender!='' && $city=='' )
{
	if($gender=='Bride')
	{
			$show_age=mysql_query("select * from matrimonialall where gender='Bride' and is_del='no'  ") or die(mysql_error());
														$image_mime_type="image/png|image/jpeg|image/gif";
										while($row_age=mysql_fetch_array($show_age))
										{
											?>
	<div class="row grey-info-block text-center"  >
    <div class="container">
    
     <div class="col-md-4"> 
     <?php echo '<img src="data:'.$image_mime_type.';base64,'.base64_encode
								($row_age['profile_pic']).'" class="img-rounded img-responsive" 
     id="img-success" style="width:150px"/>';?>
        <center><h3><font color="#000099"><?php echo $row_age['first_name']." ".$row_age['last_name']; ?></font></h3>
        <p> <?php echo $row_age['academic_level']; ?><br>
        <?php echo "<button class=btn btn-info><a role=button href=login.php?id=".$row_age['unique_id']." >View Details</a></button>"?></p></center>
      </div>
    </div>
  </div>
					
					<?php					}
}
else{
	$show_age=mysql_query("select * from matrimonialall where gender='Groom' and is_del='no'  ") or die(mysql_error());
														$image_mime_type="image/png|image/jpeg|image/gif";
										while($row_age=mysql_fetch_array($show_age))
										{
											?>
	<div class="row grey-info-block text-center"  >
    <div class="container">
    
     <div class="col-md-4"> 
     <?php echo '<img src="data:'.$image_mime_type.';base64,'.base64_encode
								($row_age['profile_pic']).'" class="img-rounded img-responsive" 
     id="img-success" style="width:150px"/>';?>
        <center><h3><font color="#000099"><?php echo $row_age['first_name']." ".$row_age['last_name']; ?></font></h3>
        <p> <?php echo $row_age['academic_level']; ?><br>
        <?php echo "<button class=btn btn-info><a role=button href=login.php?id=".$row_age['unique_id']." >View Details</a></button>"?></p></center>
      </div>
    </div>
  </div>
					
					<?php					}
}
}
if($marriageType!='' && $academic_level!='' && $states!='' && $age!='' && $gender!='' && $city!='')
{
				$show_age=mysql_query("select * from matrimonialall where age='$age' and marriageType='$marriageType' and states='$states' and cast='$cast' and faculty='$academic_level' and is_del='no'  ") or die(mysql_error());
											$image_mime_type="image/png|image/jpeg|image/gif";

										while($row_age=mysql_fetch_array($show_age))
										{
											?>
	<div class="row grey-info-block text-center"  >
    <div class="container">
    
     <div class="col-md-4"> 
     <?php echo '<img src="data:'.$image_mime_type.';base64,'.base64_encode
								($row_age['profile_pic']).'" class="img-rounded img-responsive" 
     id="img-success" style="width:150px"/>';?>
        <center><h3><font color="#000099"><?php echo $row_age['first_name']." ".$row_age['last_name']; ?></font></h3>
        <p><?php echo $row_age['academic_level']; ?><br>
        <?php echo "<button class=btn btn-info><a  role=button href=login.php?id=".$row_age['unique_id']." >View Details
		</a></button>"?></p></center>
      </div>
    </div>
  </div>
					<?php					}

}

?>  
  
  
 
</section>

 <div style="margin-top:72px;">
  
  <?php include "main/footer.php" ; ?>
</div>
</body>

</html>