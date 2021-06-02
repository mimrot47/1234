<?php 
include'common_function_matrimony.php';
include'../connect.php';
?>
<html lang="en">

<?php
links();
$user = mysqli_fetch_array(mysqli_query($conn,"select username from admin"));
?>

<script type="text/javascript" src="http://code.jquery.com/jquery-1.8.2.js"></script>
<script type="text/javascript" src="jquery-1.4.1.min.js"></script>
<body>

    <div id="wrapper">

        <!-- Navigation -->
     <?php
     nav();
	 ?>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
               <div class="row" style="margin-left:230px;">
                     <div class="col-lg-12" style="font-family:CaviarDreams_Bold;color:#4c4743;">
                        <h1 class="page-header">Change Username</h1>
                    </div>
                    
                   <div class="row" style="padding-left:20px;">
						<div class="col-lg-10">
                    		<div class="panel panel-default">
                        		<div class="panel-heading"><h2 style="font-size:20px; margin-top: 7px; text-align:center;font-family: CaviarDreams;"> <b>Change Username </b></h2></div>
                       			 <div class="panel-body">
                         
                            		<div class="row">
                           				<form action="change_username_insert.php" method="post" enctype="multipart/form-data" >
										
										<div class="form-horizontal form-bordered" style="font-family:CenturyGothict;">
										
										<div class="form-group">
																						
										<label class="col-md-4 control-label" style="padding-left:100px;text-align: left;">Username</label> <div class="col-md-7">
										<input type="text" class="form-control" required name="username" value="<?php echo $user[0];?>">
										</div> <br /><br><br />
										
										</div> 
										
														
										
										<div class="col-md-6"><input type="submit" name="submit" style="margin-left: 450px;"  class="btn btn-primary"/> </div> <br /><br />
										
										</div>
										</div>
										</form>

                                    
                                
                               
                              
                               
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
                    
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../../dist/js/sb-admin-2.js"></script>

</body>

</html>
