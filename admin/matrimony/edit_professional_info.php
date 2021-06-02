<?php
include'../connect.php';
error_reporting(0);
include'common_function_matrimony.php';
?>

<html lang="en">

<?php
links();
?>
<script language="Javascript" type="text/javascript">
 
function onlyAlphabets(e, t) {
    try {
        if (window.event) {
            var charCode = window.event.keyCode;
        }
        else if (e) {
            var charCode = e.which;
        }
        else { return true; }
        if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123) || charCode == 32)
            return true;
        else
            return false;
    }
    catch (err) {
        alert(err.Description);
    }
}


function onlyNos(e, t) {
    try {
        if (window.event) {
            var charCode = window.event.keyCode;
        }
        else if (e) {
            var charCode = e.which;
        }
        else { return true; }
        if (charCode > 31 && (charCode < 48 || charCode > 57)) {
            return false;
        }
        return true;
    }
    catch (err) {
        alert(err.Description);
    }
}

document.addEventListener('DOMContentLoaded', function() {
	  
  var input = document.getElementById('txtNumeric');
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

document.addEventListener('DOMContentLoaded', function() {
	  
  var input = document.getElementById('txtNumeric1');
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

document.addEventListener('DOMContentLoaded', function() {
	  
  var input = document.getElementById('txtNumeric2');
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

document.addEventListener('DOMContentLoaded', function() {
	  
  var input = document.getElementById('txtNumeric3');
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

							$candidate_id=$_GET['candidate_id'];
							$unique_id=$_GET['unique_id'];
							
							
							$show123=mysqli_query($conn,"select * from matrimonialall where unique_id='$unique_id'") or die(mysqli_error($conn));	
							
							$image_mime_type="image/png|image/jpeg|image/gif"; 
							
							while($row123=mysqli_fetch_array($show123))
							{
							$first_name=$row123['first_name'];
							$last_name=$row123['last_name'];
							$faculty=$row123['faculty'];
							
							$academic_level=$row123['academic_level'];
							
							$college_name=$row123['college_name'];
							
							$college_address=$row123['college_address'];
							
							$office_contact=$row123['office_contact'];
							
							$job_busi_status=$row123['job_busi_status'];
							
							$working_post=$row123['working_post'];
							
							$annual_income=$row123['annual_income'];
							
							$work_place_address=$row123['work_place_address'];
							
							
							
							}
						?>

                        <div class="panel-heading"><h2 style="font-size:20px; margin-top: 7px; text-align:center;font-family: CaviarDreams;"> <b> Professional Information of <?php echo ucfirst($first_name). " ".ucfirst($last_name);?></b> </h2></div>
                        <div class="panel-body">
                         
                            <div class="row">
                           
                                <div class="col-lg-10">
                                    
									
<form action="update_professional_info.php" method="post" enctype="multipart/form-data">

<div class="form-horizontal form-bordered" style="font-family:CenturyGothict;">

<div class="form-group">
												

<input type="hidden" name="candidate_id" value="<?php echo $candidate_id;?>" />

<input type="hidden" name="unique_id" value="<?php echo $unique_id;?>" />



<br>

<label class="col-md-4 control-label" style="padding-left:100px;text-align: left;">Qualification  </label> <div class="col-md-8">  
<select class="form-control input-md" id="faculty" name="faculty" required>
	<option value="">Select Qualification</option>
	<option value="MBA"<?php if($faculty=='MBA') echo "selected";?>>MBA</option>
	<option value="CA"<?php if($faculty=='CA') echo "selected";?>>CA</option>
	<option value="Doctor"<?php if($faculty=='Doctor') echo "selected";?>>Doctor</option>
	<option value="Advocate"<?php if($faculty=='Advocate') echo "selected";?>>Advocate</option>
	<option value="Engineer"<?php if($faculty=='Engineer') echo "selected";?>>Engineer</option>
	<option value="Diploma"<?php if($faculty=='Diploma') echo "selected";?>>Diploma</option>
	<option value="PostGraduate"<?php if($faculty=='PostGraduate') echo "selected";?>>PostGraduate</option>
	<option value="Graduate"<?php if($faculty=='Graduate') echo "selected";?>>Graduate</option>
	<option value="Undergraduate"<?php if($faculty=='Undergraduate') echo "selected";?>>Undergraduate</option>
	<option value="HSC"<?php if($faculty=='HSC') echo "selected";?>>HSC</option>
	<option value="SSC"<?php if($faculty=='SSC') echo "selected";?>>SSC</option>
</select>
</div> <br /><br /><br />

<!--<label class="col-md-4 control-label" style="padding-left:100px;text-align: left;">Academic Level : </label> <div class="col-md-8">  <input type="text" name="academic_level" value="<?php echo $academic_level;?>" class="form-control"  /> </div> <br /><br /><br />-->

<label class="col-md-4 control-label" style="padding-left:100px;text-align: left;">college_name </label> <div class="col-md-8">  <input type="text" id="txtNumeric" name="college_name" value="<?php echo $college_name;?>" class="form-control"  required  onKeyPress="return onlyAlphabets(event,this);"/> </div> <br /><br /><br />

<label class="col-md-4 control-label" style="padding-left:100px;text-align: left;">College Aaddress : </label> <div class="col-md-8">  <textarea class="form-control"  id="txtNumeric1" name="college_address" required rows="2"><?php echo $college_address;?></textarea> </div> <br /><br /><br />

<label class="col-md-4 control-label" style="padding-left:100px;text-align: left;">Office Contact </label> <div class="col-md-8">  <input type="text" name="office_contact" value="<?php echo $office_contact;?>" class="form-control"  required maxlength="12" onKeyPress="return onlyNos(event,this);"/> </div> <br /><br /><br />

<label class="col-md-4 control-label" style="padding-left:100px;text-align: left;">Occupation Status </label> <div class="col-md-8">  
<select class="form-control input-md" id="job_busi_status" name="job_busi_status" required>
		<option value="">Select</option>
		<option <?php if($job_busi_status=='Goverment Job') echo "selected";?>  value="Goverment Job">Goverment Job</option>
		<option <?php if($job_busi_status=='Private Job') echo "selected";?>  value="Private Job">Private  Job</option>
		<option <?php if($job_busi_status=='Business') echo "selected";?>  value="Business">Business</option>
		<option <?php if($job_busi_status=='Self Employed') echo "selected";?>  value="Self">Self Employed</option>	
		<option <?php if($job_busi_status=='None') echo "selected";?>  value="None">None</option>										
	</select>
 </div> <br /><br /><br />

<label class="col-md-4 control-label" style="padding-left:100px;text-align: left;">Working Post </label> <div class="col-md-8">  <input type="text" name="working_post" id="txtNumeric2" value="<?php echo $working_post;?>" class="form-control"  required onKeyPress="return onlyAlphabets(event,this);"/> </div> <br /><br /><br />

<label class="col-md-4 control-label" style="padding-left:100px;text-align: left;">Annual Income </label> <div class="col-md-8">  
<select class="form-control input-md" id="annual_income" name="annual_income"  required>
	<option value="">Select</option>
	<option <?php if($annual_income=='Upto 1 Lac') echo "selected";?>  value="Upto 1 Lac">Upto 1 Lac</option>
	<option <?php if($annual_income=='1 - 2.5 Lac') echo "selected";?>  value="1 - 2.5 Lac">1 - 2.5 Lac</option>
	<option <?php if($annual_income=='2.5 - 5 Lac') echo "selected";?>  value="2.5 - 5 Lac">2.5 - 5 Lac</option>
	<option <?php if($annual_income=='5 - 10 Lac') echo "selected";?>  value="5 - 10 Lac">5 - 10 Lac</option>
	<option <?php if($annual_income=='10 - 25 Lac') echo "selected";?>  value="10 - 25 Lac">10 - 25 Lac</option>
	<option <?php if($annual_income=='25 - 50 Lac') echo "selected";?>  value="25 - 50 Lac">25 - 50 Lac</option>
	<option <?php if($annual_income=='50 - 1 Cr') echo "selected";?>  value="50 - 1 Cr">50 - 1 Cr</option>
	<option <?php if($annual_income=='1 - 2.5 Cr') echo "selected";?>  value="1 - 2.5 Cr">1 - 2.5 Cr</option>
	<option <?php if($annual_income=='2.5 - 5 Cr') echo "selected";?>  value="2.5 - 5 Cr">2.5 - 5 Cr</option>
	<option <?php if($annual_income=='5 - 10 Cr') echo "selected";?>  value="5 - 10 Cr">5 - 10 Cr</option>
	<option <?php if($annual_income=='above 10 Cr') echo "selected";?>  value="above 10 Cr">above 10 Cr</option>
	<option <?php if($annual_income=='No Income') echo "selected";?>  value="No Income">No Income</option>
</select>   
 </div> <br /><br /><br />

<label class="col-md-4 control-label" style="padding-left:100px;text-align: left;">Working Place Address </label> <div class="col-md-8">  <textarea class="form-control" id="txtNumeric3"  required name="work_place_address"  rows="2"><?php echo $work_place_address;?></textarea> </div> <br /><br /><br /><br /><br />


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

</body>

</html>
