<?php
include'../connect.php';
error_reporting(0);
include'common_function_matrimony.php';
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
            <div class="row" style="margin-left:230px;">
                <div class="col-lg-12" style="font-family:CaviarDreams_Bold;color:#4c4743;">
				<?php 
				$unique_id=$_GET['unique_id'];
				$data=mysqli_fetch_array(mysqli_query($conn,"select * from matrimonialall where unique_id='$unique_id'")); 
				$first_name=$data['first_name'];
				$last_name=$data['last_name'];
				?>
				<?php if($data['marriageType'] == 'Never married'){?><h1 class="page-header"> Edit <?php echo $data['gender'];?> Matrimony</h1><?php }?>
				<?php if($data['marriageType'] == 'divorcee'){?><h1 class="page-header"> Edit <?php echo $data['gender'];?> Divorce Matrimony</h1><?php }?>   
				<?php if($data['marriageType'] == 'widow'){?><h1 class="page-header"> Edit <?php echo $data['gender'];?> Widow Matrimony</h1><?php }?>   				<?php if($data['marriageType'] == 'widower'){?><h1 class="page-header"> Edit <?php echo $data['gender'];?> Widower Matrimony</h1><?php }?>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            
           <div class="row" style="padding-left:250px;">
                <div class="col-lg-10">
                    <div class="panel panel-default">
					<?php

						$unique_id=$_GET['unique_id'];
						
						$show123=mysqli_query($conn,"select matrimonial_widow.*,matrimonialall.gender from matrimonial_widow inner join  matrimonialall on matrimonial_widow.unique_id = matrimonialall.unique_id where matrimonial_widow.unique_id = '$unique_id'") or die(mysqli_error($conn));	
						
						$image_mime_type="image/png|image/jpeg|image/gif"; 
						
						while($row123=mysqli_fetch_array($show123))
						{
							$previous_marriage_date_widow=$row123['previous_marriage_date_widow'];
	
	 						$date_partner_death_widow=$row123['date_partner_death_widow'];
	 
	  						$child_status_widow=$row123['child_status_widow'];
	
	 						$previous_marriage_address_widow=$row123['previous_marriage_address_widow'];
						}
					?>
                        <div class="panel-heading"><h2 style="font-size:20px; margin-top: 7px; text-align:center;font-family: CaviarDreams;"> <b><?php echo ucfirst($data['marriageType']);?> Information of <?php echo ucfirst($first_name). " ".ucfirst($last_name);?> </b> </h2>
                        
                        </div>
                        <div class="panel-body">
                         
                            <div class="row">
                           
                                <div class="col-lg-10">
                                    


									
<form action="update_widow.php" method="post" enctype="multipart/form-data">

<div class="form-horizontal form-bordered" style="font-family:CenturyGothict;">

<div class="form-group">
												

<input type="hidden" name="unique_id" value="<?php echo $unique_id;?>" />

<br>

<label class="col-md-4 control-label" style="padding-left:100px;text-align: left;">Previous Marriage Date   </label> <div class="col-md-8">  <input type="date" max="3000-12-31" name="previous_marriage_date_widow" value="<?php echo $previous_marriage_date_widow;?>" class="form-control" required /> </div> <br /><br /><br />

<label class="col-md-4 control-label" style="padding-left:100px;text-align: left;">Date of Partners Death  </label> <div class="col-md-8">  <input type="date" max="3000-12-31" name="date_partner_death_widow" value="<?php echo $date_partner_death_widow;?>" class="form-control" required /> </div> <br /><br /><br />

<label class="col-md-4 control-label" style="padding-left:100px;text-align: left;">No. Of Child </label> <div class="col-md-8">  
<select class="form-control" id="faculty" name="child_status_widow">
    <option value="None" <?php if($child_status_widow=='None') echo "selected";?> >None</option>
    <option value="1" <?php if($child_status_widow=='1') echo "selected";?> >1</option>
    <option value="2" <?php if($child_status_widow=='2') echo "selected";?> >2</option>
    <option value="3" <?php if($child_status_widow=='3') echo "selected";?> >3</option>
    <option value="4 and above" <?php if($child_status_widow=='4 and above') echo "selected";?> >4 and above</option>
</select>
</div> <br /><br /><br />

<?php if($row123['gender']=="Bride"){ ?>
<label class="col-md-4 control-label" style="padding-left:100px;text-align: left;">Previous Marriage Address </label> <div class="col-md-8"> 
<textarea class="form-control" id="previous_marriage_address_widow"  name="previous_marriage_address_widow" rows="2"><?php echo $previous_marriage_address_widow;?></textarea>
  </div> <br /><br /><br />
<?php } ?>



<div class="col-md-6"><input type="submit" name="submit" style="margin-left: 450px;"  class="btn btn-primary"/> </div> <br />


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
<script>
document.addEventListener('DOMContentLoaded', function() {
	  
	  var input = document.getElementById('previous_marriage_address_widow');
	  input.addEventListener('keydown', function(e){      
	       var input = e.target;
	       var val = input.value;
	       var end = input.selectionEnd;
	       if(e.keyCode == 32 && (val[end - 1] == " " || val[end] == " ")) {
	         e.preventDefault();
	         return false;
	      }      
	    });
	})
</script>
</body>

</html>
