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
          <li ><a href="registration_personal.php">Register</a></li>
        </ul>
      </div>
      <!-- /.navbar-collapse --> 
    </nav>
  </div>
</header>


<!--end of slider section-->
<section class="main__middle__container homepage" style="margin-top:100px;height: 100vh;">
<?php include_once "session.php";
include "connect.php";

    $marriageType=$_POST['marriageType'];
    $academic_level=$_POST['academic_level'];
    $gender=$_POST['gender'];
    $states=$_SESSION['states']=$_POST['states'];
    $city=$_POST['city'];
    $from=$_POST['from'];
    $to=$_POST['to'];
    $age=$from ." ". $to;
	?>
    <div class="row grey-info-block text-center"  >
    <div class="container"  style="float:left">

    <?php 
	if($city!='' && $city!='Select City')
	{
		$from=$_POST['from'];
		$to=$_POST['to']; 
		$qry="select * from matrimonialall where gender='$gender' and is_del='no' and marriageType='$marriageType' and faculty='$academic_level' and states='$states'and city='$city' and age BETWEEN $from AND $to ";
		$show_marg=mysql_query($qry) or die(mysql_error());
		$image_mime_type="image/png|image/jpeg|image/gif";
		$number = mysql_num_rows($show_marg);
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
		while($row_marg=mysql_fetch_array($show_marg))
		{
	?>
    
     <div class="col-md-4"> 
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
        <p> <?php echo $row_marg['city']; ?><br>
        <?php  echo "<a href=login.php?id=".$row_marg['unique_id']." >View Details</a>";
		//echo "<button class=btn btn-info ><a role=button href=login.php?id=".$row_marg['unique_id']." >View Details</a></button>"?></p></center>
      </div>
	<?php			
		}/*while*/		
	}
	}/*if*/
	else
	{
		if($marriageType!='Select Marriage Status' && $academic_level!='Select Qualification')
		{
		$from=$_POST['from'];
		$to=$_POST['to'];
		$qry="select * from matrimonialall where gender='$gender' and is_del='no' and marriageType='$marriageType' and faculty='$academic_level' and states='$states' and age BETWEEN $from AND $to ";
		$show_marg=mysql_query($qry) or die(mysql_error());
		$image_mime_type="image/png|image/jpeg|image/gif";
		$number = mysql_num_rows($show_marg);
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
		while($row_marg=mysql_fetch_array($show_marg))
		{
	?>
    
     <div class="col-md-4"> 
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
        <p> <?php echo $row_marg['city']; ?><br>
        <?php  echo "<a href=login.php?id=".$row_marg['unique_id']." >View Details</a>";
		//echo "<button class=btn btn-info ><a role=button href=login.php?id=".$row_marg['unique_id']." >View Details</a></button>"?></p></center>
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

 <div style="margin-top:72px;">
  
  <?php include "main/footer.php" ; ?>
</div>
</body>

</html>