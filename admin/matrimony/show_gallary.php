<?php
include'../connect.php';
include'common_function_matrimony.php';
error_reporting(0);
?>

<html lang="en">
<?php
links();
?>

<body>

    <div id="wrapper">

        <!-- Navigation -->
      <?php
      nav();
	  ?>

        <div id="page-wrapper">
            <div class="row" style="margin-left:30px;">
                <div class="col-lg-12" style="font-family:CaviarDreams_Bold;color:#4c4743;">
                    <h1 class="page-header"> Gallary</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
           
            
            <div class="row" style="padding-left:50px;">
              
                    <div class="panel panel-default">
                      
                        <div class="panel-body">
                         <div class="table-responsive">
                            <div class="row">
                           
                                <div class="col-lg-12">
                                    
							   <?php	
							   
							
							$unique_id=$_GET['unique_id'];
							
 $show_g=mysqli_query($conn,"select * from matrimonial_gallery where unique_id='$unique_id' ") or die(mysqli_error($conn));
										
										$image_mime_type="image/png|image/jpeg|image/gif";
										$count = 0;
										while($row_g=mysqli_fetch_array($show_g))
										{
$count++;
?>
						<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
							<div class="thumbnail" >
									<?php  echo '<img src="data:'.$image_mime_type.';base64,'.base64_encode($row_g['img']).'" onmouseover="bigImg(this)" onmouseout="normalImg(this)"  style="height: 300px;width: 300px;"/>'; ?></a>
								<div class="caption">
                                <p class="price"><?php //echo "<a href=gallery_edit.php?id=".$row_g['id']."> <b> Edit </b> </a>";?></p>
                                
                           <?php    echo "<a href=gallery_edit.php?id=".$row_g['id']."&unique_id=".$unique_id."><input type=submit name=Edit value=Delete class=btn btn-warning></a>"; ?>
                           
						   <?php   // echo "<a href=gallery_approve.php?id=".$row_g['id']."><input type=submit name=Approve value=Approve class=btn btn-warning></a>"; ?>

                           <?php   // echo "<a href=gallery_reject.php?id=".$row_g['id']."><input type=submit name=Reject value=Reject class=btn btn-warning></a>"; ?>
									
                                   
                          
								</div>
							</div>
						</div>
             <?php } ?>  
                                    
                                 
                              
                               
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
