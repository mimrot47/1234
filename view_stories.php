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
<section class="main__middle__container homepage" style="margin-top:100px;" ><center>
<?php 
include "connect.php";
$id=$_GET['id'];

$show=mysql_query("select * from success_stories where is_del='no' and id=$id ") or die(mysql_error());
				
				$image_mime_type="image/png|image/jpeg|image/gif";
				
				while($row=mysql_fetch_array($show))
				{
						echo "<div class=mySlides>";
						$photo_path=$row['photo'];
					echo '<img src="http://bhavsar.org/admin/pages/matrimony/matrimony_success_img/'.$photo_path .'" id="img-success" />';
					//echo '<img src="data:'.$image_mime_type.';base64,'.base64_encode($row['photo']).'"  id="img-success" />';
						$id=$row['id'];
				   		echo "&nbsp;&nbsp;&nbsp;";
						echo "<h3>".$row['bride_name']." & ".$row['groom_name']."</h3>";
       				echo " <p>".$row['ss_desc']."</p>";
       				//echo " <p><a href=view_stories.php?id=$id>View Details</a></p></div> </div>";
				}

?>  
  
  </center>
 
</section>

 <div style="margin-top:72px;">
  
  <?php include "main/footer.php" ; ?>
</div>
</body>

</html>