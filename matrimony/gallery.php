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
        <link rel="stylesheet" href="css/w3.css" type="text/css">
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
		<div style="background-color:#225169; height:50px">&nbsp;</div>
			<div class="container">
				<div class="navbar-header">
					<h1 class="navbar-brand" style="font-family:CenturyGothict; font-size:30px"><a href="" style=" text-decoration: none;"><span style="color:#FF4500">MALI</span> <span style="color:#225169">MATRIMONY</span></a></h1>
				</div>
			</div>
		</div>
		<div class="container wrapper">   
			<?php //include "header.php";?>
			<div class="content">
				<?php include "menubar.php"; ?>
				<div class="col-lg-9 content-right">
					<div class="col-lg-12" style="border-radius:2px; border:1px solid #CCC; padding:5px 25px 10px 50px;height: 1050px;" >
                    <h4> <a href="add_gallery.php"><button class="btn btn-danger" style="font-family:CenturyGothict;">Add Photo</button></a></h4><hr>
                    <div class="selected-classifieds">
					<script>
						function bigImg(x) {
							x.style.height ="400px";
							x.style.width = "400px";
						}
						
						function normalImg(x) {
							x.style.height = "250px";
							x.style.width = "250px";
						}
						</script>
                                        <?php	
 $show_g=mysqli_query($conn,"select * from matrimonial_gallery where is_del='no' and email='$email' ") or die(mysqli_error($conn));
										
										$image_mime_type="image/png|image/jpeg|image/gif";
										
										while($row_g=mysqli_fetch_array($show_g))
										{
?>
						<div class="col-xs-6">
							<div class="thumbnail" >
								<a href="#">
								<img src="gallery_img/<?php echo $row_g['img'];?>" style="width:200px;height:200px;">
								</a>
								<div class="caption">    

                                <p class="price"><?php echo "<a href=gallery_edit.php?id=".$row_g['id']."&del=1>";?>
                                	<button type="button" class="btn btn-primary" style="font-family:CenturyGothict;">Delete</button>                            
                                </a>
								</p>
								</div>
							</div>
						</div>
             <?php } ?>           
                         </div>
                       
                    </div>
					
				</div>
			</div>
			<!--<div class="footer">
				<?php //include "footer.php"; ?>
			</div>-->
		</div>
		<p class="text-center" style="height:80px; background-color:#2e3c43;padding-top:40px; color:#ffffff;margin-bottom:0px;">Copyright &copy; 2017<a href="http://www.backtechs.com" style="color:#ffffff;"> Backend Technologies PVT.LTD</a>. All Rights Reserved.</p>
		<!-- JavaScript -->
		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.slides.min.js"></script>
		<script src="js/CZSale.js"></script>
	</body>

</html>