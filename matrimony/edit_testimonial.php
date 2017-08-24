
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
							<a href="testimonial.php"><h4><button class="btn btn-danger">Show Testimonial</button></h4></a><hr>
								<div class="dataTable_wrapper">
                                	<form action="testimonial_update.php" method="post">
                                   <?php
								   $id=$_GET['id'];
								   $show1=mysql_query("select * from testimonial");
                            while($row=mysql_fetch_array($show1))
                            {
                            $dec= $row['description'];
                           
							}
								   
								   ?><input type="hidden" name="id" value="<?php echo $id; ?>">
                                        Edit Testimonial :
                                        <textarea class="form-control" name="description"><?php echo $dec; ?> </textarea><br>
                                        <button type="submit" class="btn btn-success" name="submit">Update</button>
                                    </form>
                                 </div>
							
						</div>
                      
					
						
					</div>
				</div>
			</div>
			<div class="footer">
				<div class="footer-content">
					<div class="row">
						<div class="col-xs-6">
							<img src="../bhavsar.org_img/Karykarni.png" alt="CZSale" title="CZSale" 
                            style="width: 100px; height: 58px;" />
						</div>
						<div class="col-xs-6 text-right">
							<a href="help.html" class="btn btn-link">Help</a>
							<span class="bar">|</span>
							<a href="contact.html" class="btn btn-link">Contact</a>
							
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- JavaScript -->
		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.slides.min.js"></script>
		<script src="js/CZSale.js"></script>
	</body>

</html>