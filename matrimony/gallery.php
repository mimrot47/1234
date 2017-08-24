
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
		<div class="container wrapper">   
			<?php include "header.php";?>
			<div class="row content">
				<?php include "menubar.php"; ?>
				<div class="col-lg-9 content-right">
					<div style="border-radius:5px; border:1px solid #CCC; padding:5px" >
                    <h4> <a href="add_gallery.php"><button class="btn btn-danger">Add Photo</button></a></h4><hr>
                    <div class="row selected-classifieds">
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
 $show_g=mysql_query("select * from matrimonial_gallery where is_del='no' and email='$email' ") or die(mysql_error());
										
										$image_mime_type="image/png|image/jpeg|image/gif";
										
										while($row_g=mysql_fetch_array($show_g))
										{
?>
						<div class="col-xs-6">
							<div class="thumbnail" >
								<a href="#"><?php  echo '<img src="data:'.$image_mime_type.';base64,'.base64_encode($row_g['img']).'" onmouseover="bigImg(this)" onmouseout="normalImg(this)" />'; ?></a>
								<div class="caption">
                                <p class="price"><?php echo "<a href=gallery_edit.php?id=".$row_g['id'].">Edit </a>";?>
								</p>
								</div>
							</div>
						</div>
             <?php } ?>           
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