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
                    <h1 class="page-header"> Edit Data Of City</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            
            <div class="row" style="padding-left:250px;">
				<div class="col-lg-10">
                    <div class="panel panel-default">
                        <div class="panel-heading"><h2 style="font-size:20px; margin-top: 7px; text-align:center;font-family: CaviarDreams;"> <b> Edit Data of city</b></h2>
                        </div>
                        <div class="panel-body">
                         
                            <div class="row">
                           
                                <div class="col-lg-10">
                                    
                        <?php
									
					$id=$_GET['id'];
					
                    $show123=mysqli_query($conn,"select * from  city where id='$id' and is_del='approved'") or die(mysqli_error($conn));	
					 
					  while($row123=mysqli_fetch_array($show123))
					  {
							$state=$row123['state'];
							$city=$row123['city'];
					  }
						 ?>
									
<form action="update_state_city.php" method="post" enctype="multipart/form-data">

<div class="form-horizontal form-bordered" style="font-family:CenturyGothict;">

<div class="form-group">
												

<input type="hidden" name="id" value="<?php echo $id;?>" />

<label class="col-md-4 control-label" style="padding-left:100px;text-align: left;">State  </label> <div class="col-md-8">  <input type="text" name="state" value="<?php echo $state;?>" readonly class="form-control"  readonly/> </div> <br /><br /><br />

<label class="col-md-4 control-label" style="padding-left:100px;text-align: left;">City  </label> <div class="col-md-8">  <input type="text" name="city" value="<?php echo $city;?>" id="" class="form-control"  required  onKeyPress="return onlyAlphabets(event,this);"/> </div> <br /><br /><br />
<div class="col-md-6"><input type="submit" name="submit" style="margin-left: 450px;"  class="btn btn-primary"/> </div> <br /><br />

</div></div>
</form>
									





                             </div>
                               
                              
                               
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
