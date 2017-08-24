
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
									$id=$_GET['id'];
 $show_g=mysql_query("select * from matrimonial_gallery where is_del='no' and id='$id'  ") or die(mysql_error());
										
										$image_mime_type="image/png|image/jpeg|image/gif";
										
										while($row_g=mysql_fetch_array($show_g))
										{
								 echo '<img src="data:'.$image_mime_type.';base64,'.base64_encode($row_g['img']).'" 
											 style="width:300px; height:300px"/>'; 
										
											 ?>									
                                             
										<form action="galleryl_update.php" method="post" enctype="multipart/form-data">
                                        <input type="hidden" name="id" value="<?php echo $row_g['id']; }?>">
                                        Add Photo 1 :
                                        <input type="file" class="form-control" name="img"><br>
                                        
                                        <button type="submit" class="btn btn-success" name="submit">Sumbit</button>
                                    </form>
								
                                	
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