<?php include "../connect.php";
 session_start();
 $email=$_SESSION['myusername'];
error_reporting(0);
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
			<div class="content">
				<?php include "menubar.php"; ?>
				<div class="col-lg-9 content-right">
					<div class="selected-classifieds">
						<div class="col-lg-12" style="border-radius:2px; border:1px solid #CCC; padding:5px 25px 10px 50px;height: 1050px;" >
									<div class="dataTable_wrapper" >
	                        				<form action="testimonial_insert.php" method="post">
	                                         	<h2 style="color:#e74c3c; font-family:BerlinSans; font-size:32px;text-align: center;margin-top:50px;margin-bottom:50px;"> Testimonial </h2>
												<?php
												$id=$_GET['id'];
												$show2=mysqli_query($conn,"select * from testimonial where id='$id'");
												while($row1=mysqli_fetch_array($show2))
												{
													$dec= $row1['description'];
												}
								   
								        		?>
								        		<input type="hidden" name="id" value="<?php echo $id; ?>">
		                                        <div align="center" class="form-group" style="padding-bottom:30px;margin-left: 80px;">
												   <div class="col-sm-10">                     
														 <textarea class="form-control" name="description" required='true' rows="10"><?php echo $dec; ?></textarea>
													</div>
					                                </div>
					                                <div class="form-group" style="padding-bottom:30px;margin-left: 80px;">
					                                    <label class="col-sm-4 control-label"></label>  
					                                    <div class="col-sm-8">
					                                        <button type="submit" class="btn btn-danger" name="<?php if($id!=''){ echo "Update"; }else{echo "Submit";}?>" style="margin-top:20px;margin-bottom:50px;"><?php if($id!=''){ echo "Update"; }else{echo "Submit";}?></button>
					                                      </div>
					                                 </div>
	                                			                       			
	                            			</form>
                         				</div>
                         				<div class="dataTable_wrapper" style="font-family:CenturyGothict;">									
                                				<table class="table table-striped table-bordered table-hover" id="dataTables-example" style="margin-left: 80px;width: 76%;">
													<?php
														echo'<tr style="background-color:#e74c3c;color:#ffffff" ><th style="text-align:center;">';
														echo' Testimonial';
														echo'</th>';
																					
														echo'<th style="text-align:center;">';
														echo'Edit ';
														echo'</th>';
																						
														echo'<th style="text-align:center;">';
														echo'Delete ';
														echo'</th>';;
														
													   echo'<th style="text-align:center;">';
														
														echo'Approved';
														echo'</th</tr>';
																
														$show1=mysqli_query($conn,"select * from testimonial where is_del='no' and email='$email'");
														while($row=mysqli_fetch_array($show1))
														{
																echo "<tr><td>"	;
																$id=$row['id'];
																echo $row['description'];
																echo "</td><td style='text-align:center'>";
															
																echo "<a href=testimonial.php?id=".$row['id']."><input type=submit name=Edit class='btn btn-danger' value=Edit style='padding-left: 20px;padding-right: 20px;'></a>";
																echo "</td><td style='text-align:center'>";
															
																echo "<a href=delete_testimonial.php?id=".$row['id']."><button class='btn btn-danger'>Delete</button></a>";
																echo "</td>";	
								
																echo "<td style='text-align:center'>".ucfirst($row['status'])."</td></tr>";
											
											
														}
													?>
	                            				</table>
                                      </div>
								</div>
						</div>
				</div>
			</div>
			
		</div>
		<p class="text-center" style="height:80px; background-color:#2e3c43;padding-top:40px; color:#ffffff;margin-bottom:0px;">Copyright &copy; 2017<a href="http://www.backtechs.com" style="color:#ffffff;"> Backend Technologies PVT.LTD</a>. All Rights Reserved.</p>
		<!-- JavaScript -->
		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.slides.min.js"></script>
		<script src="js/CZSale.js"></script>
	</body>

</html>