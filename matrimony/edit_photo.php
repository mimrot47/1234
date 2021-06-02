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
			.hied_border{
			border-style:hidden; 
			border-top-style:hidden;
			border-bottom-style:groove;
			background-color: transparent;
			border-radius:0px;
			box-shadow:none;
			height:40px;
	         }
		</style>
		<script>
	   	function CheckFileName() 
	   	{
	
		    var fileName = document.getElementById("uploadFile").value
		
		    if (fileName == "")  
		    {  
		        alert("Browse to upload a valid image file only");  
		        return false;  
		    }  
		    else if (fileName.split(".")[1].toUpperCase() == "PNG" || fileName.split(".")[1].toUpperCase() == "JPG" || fileName.split(".")[1].toUpperCase() == "JPEG" || fileName.split(".")[1].toUpperCase() == "GIF")  
		    {  
		        //alert("A Valid Image file is attached !");  
		        return true;  
		    }  
		    else  
		    {  
		        alert("Not a Image File !");  
		        return false;  
		    }
		
		    return true;
		
		}
		
		function CheckFileName1() 
	   	{
	
		    var fileName = document.getElementById("uploadFile1").value
		
		    if (fileName == "")  
		    {  
		        alert("Browse to upload a valid image file only");  
		        return false;  
		    }  
		    else if (fileName.split(".")[1].toUpperCase() == "PNG" || fileName.split(".")[1].toUpperCase() == "JPG" || fileName.split(".")[1].toUpperCase() == "JPEG" || fileName.split(".")[1].toUpperCase() == "GIF")  
		    {  
		        //alert("A Valid Image file is attached !");  
		        return true;  
		    }  
		    else  
		    {  
		        alert("Not a Image File !");  
		        return false;  
		    }
		
		    return true;
		
		}
	   </script>
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
							<h2 style="color:#e74c3c; font-family:BerlinSans; font-size:32px">Change Photo</h2><hr>	
							<div class="dataTable_wrapper" style="font-family:CenturyGothict;">
							
                        				<form action="change_profile_pic.php" method="post"  enctype="multipart/form-data" onSubmit="return CheckFileName()">
                           					<div class="form-group" style="padding-bottom:50px">
				                                    <label class="col-sm-4 control-label"  style="padding-left: 50px;margin-top: 10px;"> Profile Photo</label>  		                                    	    <div class="col-sm-6">                     
				                                         <input type="file" class="form-control file-div hied_border" name="photo" accept="image/*"  id="uploadFile" required="required"  />
				                                    </div>
				                                    <div class="col-sm-2">
				                                    	<button type="submit" name="sumbit" class="btn btn-danger" style="background-color: #4caf50;border-color: #4caf50">Submit</button>
				                                    </div>
				                                    
				                                </div>
				                                
			                                 </form>
                         				</div>
                         				
                         				<div class="dataTable_wrapper" style="font-family:CenturyGothict;">
							
                        				<form action="change_profile_pic.php" method="post"  enctype="multipart/form-data" onSubmit="return CheckFileName1()">
                           					<div class="form-group" style="padding-bottom:30px;">
				                                    <label class="col-sm-4 control-label" style="padding-left: 50px;margin-top: 10px;"> Cover Photo</label>  	
				                                    <div class="col-sm-6" >                                             
				                                    	<input type="file" class="form-control file-div hied_border" name="cover_photo" accept="image/*"  id="uploadFile1" required="required" />
				                                    </div>
				                                    <div class="col-sm-2">
				                                    	<button type="submit" name="sumbit" class="btn btn-danger" style="background-color: #4caf50;border-color: #4caf50">Submit</button>
				                                    </div>
				                                </div>
                               					
			                                 </form>
                         				</div>
							
						</div>
                      
					
						
					</div>
				</div>
			</div>
			<!--<div class="footer">
				<?php //include "footer.php"; ?>
			</div>-->
		</div>
		<p class="text-center" style="height:80px; background-color:#2e3c43;padding-top:30px; color:#ffffff;margin-bottom:0px;">Copyright &copy; 2020<a href="http://www.cloudsoft.com" style="color:#ffffff;"> Cloudsoft PVT.LTD</a>. All Rights Reserved.</p>
		<!-- JavaScript -->
		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.slides.min.js"></script>
		<script src="js/CZSale.js"></script>
	</body>

</html>