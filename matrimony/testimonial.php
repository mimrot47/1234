
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
							<a href="add_testimonial.php"><h4><button class="btn btn-danger">Add Testimonial</button></h4></a><hr>
								<div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
						<?php
                           
                           // $show=mysql_query("select * from current_event ") or die(mysql_error());
                                
                                echo'<th>';
                                echo' Testimonial';
                                echo'</th>';
								
								
                                echo'<th>';
                                echo'Edit ';
                                echo'</th>';
								
								 echo'<th>';
                                echo'Delete ';
                                echo'</th>';
								
                        
						
						$show1=mysql_query("select * from testimonial where is_del='no' and status='approved' and email='$email'");
                            while($row=mysql_fetch_array($show1))
                            {
                            echo "<tr><td>"	;
                       		$id=$row['id'];
							echo $row['description'];
                            echo "</td><td>";
                            
                            echo "<a href=edit_testimonial.php?id=".$row['id']."><input type=submit name=Edit value=Edit class=btn btn-danger></a>";
							echo "</td><td>";
							
                            echo "<a href=delete_testimonial.php?id=".$row['id']."><button class=btn btn-danger>Delete</button></a>";
                            echo "</td></tr>";	
                            
                            
							}
                            ?>
                            </table>
                                    
                                    </div>
							
						</div>
                      
					
						
					</div>
				</div>
			</div>
			<hr>	
		</div>
		<!-- JavaScript -->
		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.slides.min.js"></script>
		<script src="js/CZSale.js"></script>
	</body>

</html>