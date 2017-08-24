
<?php include "../connect.php";
session_start();
 $email=$_SESSION['myusername'];

?>
<!DOCTYPE html>
<html lang="en">
	
<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="...">
		<meta name="keywords" content="...">
		<meta name="author" content="...">
		<title>MATRIMONY</title>
		<link rel="stylesheet" href="css/CZSale.css" type="text/css" />
        <style>
			.logo_img
			{
				width:200px;
				height:50px;
				margin-top:45px;
			}
			.event-img
			{
				width:100px;
				height:100px;
			}
		</style>
	</head>
	<body>
		<div class="container wrapper">   
			<?php include "header.php";?>
			<div class="row content">
				<?php include "menubar.php"; ?>
				<div class="col-lg-9 content-right">
					
                    
					<div class="row selected-classifieds">
                    
						<div class="col-lg-12" style="border-radius:5px; border:1px solid #CCC; padding:5px" >
							<h4><a href="gallery.php"><button class="btn btn-danger">Show Photo</button></a></h4><hr>
								<div class="dataTable_wrapper">
                                    <?php
									$nb_new34 = mysql_query("select COUNT(id) as frnd_id  from matrimonial_gallery
												    							where email='$email'");
                                                        while($rownb_new34 = mysql_fetch_array($nb_new34))
                                                        {
                                                             $frnd= $rownb_new34['frnd_id'];
                                              "count".$frnd ."<br>";} 
									if($frnd=='4')
									{
										echo "<font color=#FF0000><h3>Limit Over</h3></font>";
									}
									else
									{?>
										<form action="galleryl_insert.php" method="post" enctype="multipart/form-data">
                                        Add Photo  :
                                        <input type="file" class="form-control" name="img1" required><br>
                                        
                                        <button type="submit" class="btn btn-success" name="submit">Sumbit</button>
                                    </form>
								<?php	}
										
									?>
                                	
                                 </div>
							
						</div>
                      
					
						
					</div>
				</div>
			</div>
			<div class="footer">
				<?php include "footer.php"; ?>
			</div>
		</div>
		<!-- JavaScript -->
		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.slides.min.js"></script>
		<script src="js/CZSale.js"></script>
	</body>

</html>