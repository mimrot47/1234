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
					<div class="selected-classifieds">
                    	<div class="col-lg-12" style="border-radius:2px; border:1px solid #CCC; padding:5px 25px 10px 50px;height: 1050px;" >
							<h2 style="color:#e74c3c; font-family:BerlinSans; font-size:32px">Deactive Account</h2><hr>	
							<div class="dataTable_wrapper" style="font-family:CenturyGothict;">
								<form action="deactive.php" method="post">
									<div class="form-group" style="padding-bottom:30px">
										<label class="col-sm-4 control-label label-pass" for="add_new_password" > User Name</label>  
										<div class="col-sm-6">                     
											 <input type="email" class="form-control" id="email" name="username" pattern="/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/" required onBlur="validateEmail(this);"  style="font-family:CaviarDreams;" placeholder="Username" value="<?php //echo $email;?>">
										</div>
									</div>
									<div class="form-group" style="padding-bottom:30px">
										<label class="col-sm-4 control-label label-pass" for="add_new_password" > Password</label>  
										<div class="col-sm-6">                     
											 <input type="password" class="form-control" required name="pass">
										</div>
									</div>
									<br>
									<div class="form-group" style="padding-bottom:30px">
										<label class="col-sm-4 control-label"></label>  
										<div class="col-sm-8"> <br>
											<button type="submit" class="btn btn-success" name="submit">Deactive Account</button>
										  </div>
									 </div>
								</form>
                         	</div>
							<div class="dataTable_wrapper" style="font-family:CenturyGothict;">
								<div class="form-group" style="margin-top:50px; color:#FF0000; font-size:16px; text-align:justify">
									 Note :- Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
								</div>
							</div>
						</div>
                     </div>
				</div>
			</div>
		</div>
		<p class="text-center" style="height:80px; background-color:#2e3c43;padding-top:30px; color:#ffffff;margin-bottom:0px;">Copyright &copy; 2020<a href="http://www.cloudsoft.com" style="color:#ffffff;"> Cloudsoft PVT.LTD</a>. All Rights Reserved.</p>
		<!-- JavaScript -->
		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.slides.min.js"></script>
		<script src="js/CZSale.js"></script>
		<script>
			function validateEmail(emailField)
			{ 
				var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
				if (reg.test(emailField.value) == false) 
				{
					document.getElementById('email').value= "";
					document.getElementById('email').style.borderColor = "red";
					return false;
				}
				document.getElementById('email').style.borderColor = "green";
				return true;
			}

		</script>
	</body>

</html>