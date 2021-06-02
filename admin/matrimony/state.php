<?php
include'../connect.php';
include'common_function_matrimony.php';
?>

<html lang="en">

<?php
links();
?>
   <script type="text/javascript" src="http://code.jquery.com/jquery-1.8.2.js"></script>
<script type="text/javascript">
$(function () {
$('#txtNumeric').keydown(function (e) {
if (e.shiftKey || e.ctrlKey || e.altKey) {
e.preventDefault();
} else {
var key = e.keyCode;
if (!((key == 8) || (key == 32) || (key == 46) || (key >= 35 && key <= 40) || (key >= 65 && key <= 90))) {
e.preventDefault();
}
}
});
});

 function onlyAlphabets(e, t) {
            try {
                if (window.event) {
                    var charCode = window.event.keyCode;
                }
                else if (e) {
                    var charCode = e.which;
                }
                else { return true; }
                if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123)|| charCode == 8 || charCode == 32)
                    return true;
                else
                    return false;
            }
            catch (err) {
                alert(err.Description);
            }
        }
</script>

<body>
    <div id="wrapper">

        <!-- Navigation -->
       <?php
       nav();
	   ?>

         <div id="page-wrapper">
            <div class="row" style="margin-left:230px;">
                <div class="col-lg-12" style="font-family:CaviarDreams_Bold;color:#4c4743;">
                  <h1 class="page-header">  State</h1>
                  <!--<a href="show_states.php">   <input type="button" class="btn btn-danger" value="Show State"> </a>-->
               </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        	           
            <div class="row" style="padding-left:250px;">
				<div class="col-lg-10">
                    <div class="panel panel-default">
                        <div class="panel-heading"><h2 style="font-size:20px; margin-top: 7px; text-align:center;font-family: CaviarDreams;"> <b> Insert Data of State</b></h2>  </div>
                        <div class="panel-body">
                       <center>
							<form action="insert_state.php" method="post" enctype="multipart/form-data">
							
								<div class="form-horizontal form-bordered" style="font-family:CenturyGothict;">
								
									<div class="form-group">
									
										<label class="col-md-4 control-label" style="padding-left:100px;text-align: left;"> State  </label> <div class="col-md-7"> <input type="text" name="state" class="form-control" id="" required onKeyPress="return onlyAlphabets(event,this);" /> </div> <br /><br /><br />
										<div class="col-md-12"><input type="submit" name="submit" class="btn btn-primary"/> </div>
										
									</div>
								</div>
							
							</form>              
                   </center>
                        
                               
                       
                            
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
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
