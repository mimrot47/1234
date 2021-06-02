<?php
include'../connect.php';
?>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Brahmin Matrimony | Admin</title>
	<link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
	<link href="dist/css/sb-admin-2.css" rel="stylesheet">
	<link href="bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<style>
	@font-face {
		font-family: CenturyGothict;
		src: url(fonts/CenturyGothic.ttf);
	}
	@font-face {
		font-family: CaviarDreams_Bold;
		src: url(fonts/CaviarDreams_Bold.ttf);
	}
	@font-face {
		font-family: CaviarDreams;
		src: url(fonts/CaviarDreams.ttf);
	}
	@font-face {
		font-family: BerlinSans;
		src: url(fonts/BRLNSR.ttf);
	}
	@font-face {
		font-family: futura_medium_bt;
		src: url(fonts/futura_medium_bt.ttf);
	}
	</style>
</head>

<body>
	<div class="container" style="padding:0; margin:0;width:100%">
		<div class="col-lg-12" style="padding:0">
			<div class="col-lg-6" style="padding:0">
				<img src="login_banner.jpg" style="width: 100%; min-height:974px;">
			</div>
			<div class="col-lg-6" style="padding:0">
				<div class="col-md-12" style="width:600px;margin-top:300px;margin-left:200px;">
					<font style="color: #400606;font-weight: 700;text-shadow: 5px 5px 10px #736c6c;margin-left: 90px;font-family: CaviarDreams_Bold;" size="+5" > Brahmin Matrimony </font> 
					<div class="panel panel-default" style="box-shadow: 10px 10px 36px 0px rgba(0,0,0,0.75);margin-top:25px;">
						<div class="panel-heading" align="center" style="background-color:#337ab7; color:#fff;">
							<h3 class="panel-title" style="font-family: CaviarDreams_Bold; font-size:28px;">Login</h3>
						</div>
						<div class="panel-body" style="padding:45px;font-family: futura_medium_bt;">
							<form action="check_login.php" method="post" role="form">
								<fieldset>
									<div class="form-group">
										<input class="form-control" placeholder="Username" name="username" type="text" required autofocus>
									</div>
									<div class="form-group">
										<input class="form-control" placeholder="Password" name="pass" type="password" value="">
									</div>
									<div class="form-group" style="text-align:center;">
										<input type="submit" name="Login" value="Login" class="btn btn-lg btn-success" style="background-color: #337ab7;border-color: #337ab7;margin-top: 25px;width:125px;margin-bottom: -25px;">
									</div>
								</fieldset>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<!-- jQuery -->
	<script src="bower_components/jquery/dist/jquery.min.js"></script>
	
	<!-- Bootstrap Core JavaScript -->
	<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
	
	<!-- Metis Menu Plugin JavaScript -->
	<script src="bower_components/metisMenu/dist/metisMenu.min.js"></script>
	
	<!-- Custom Theme JavaScript -->
	<script src="dist/js/sb-admin-2.js"></script>

</body>

</html>
