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
					?>
					<?php if($data['marriageType'] == 'Never married'){?><h1 class="page-header"> Edit <?php echo $data['gender'];?> Matrimony</h1><?php }?>
					<?php if($data['marriageType'] == 'divorcee'){?><h1 class="page-header"> Edit <?php echo $data['gender'];?> Divorce Matrimony</h1><?php }?>   
					<?php if($data['marriageType'] == 'widow'){?><h1 class="page-header"> Edit <?php echo $data['gender'];?> Widow Matrimony</h1><?php }?>   				
					<?php if($data['marriageType'] == 'widower'){?><h1 class="page-header"> Edit <?php echo $data['gender'];?> Widower Matrimony</h1><?php }?>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            
             <div class="row" style="padding-left:250px;">
                <div class="col-lg-10">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           <h2 style="font-size:20px; margin-top: 7px; text-align:center;font-family: CaviarDreams;"> <b>Edit Profile Photo </b> </h2>
                        </div>
                        <div class="panel-body">
                         
                            <div class="row">
                           
                                <div class="col-lg-10">
                               
<br>
                                    
<?php

$candidate_id=$_GET['candidate_id'];
$unique_id=$_GET['unique_id'];


$show123=mysqli_query($conn,"select * from matrimonialall where unique_id='$unique_id'") or die(mysqli_error($conn));	

$image_mime_type12="image/png|image/jpeg|image/gif"; 

while($row123=mysqli_fetch_array($show123))
{
 $profile_pic=$row123['profile_pic'];
?>
<img src="../../profile_photos/<?php echo $profile_pic;?>"  height="120" width="120" style=" border: 2px solid #666;margin-left: 53px;">
<?php
//echo '<img src="data:'.$image_mime_type12.';base64,'.base64_encode($row123['profile_pic']).'" height="120" width="120" style=" border: 2px solid #666;margin-left: 53px;">';
}
?>

<form action="update_matrimony_profile_pic.php" method="post" enctype="multipart/form-data" onSubmit="return CheckFileName()">

<div class="form-horizontal form-bordered" style="font-family:CenturyGothict;">

<div class="form-group" style="margin-left: 172px;margin-top: -108px;">
												

<input type="hidden" name="candidate_id" value="<?php echo $candidate_id;?>" /><br>

<input type="hidden" name="unique_id" value="<?php echo $unique_id;?>" /><br>


<input type="hidden" name="profile_pic" value="<?php //echo $profile_pic; ?>" />



<label class="col-md-3 control-label">Profile Photo  </label> <div class="col-md-7">
<input type="file" name="profile_pic" value="<?php //echo $profile_pic;?>" accept="image/*"  id="uploadFile" class="form-control"  />

</div>
<div class="col-md-2"><input type="submit" name="submit" style="margin-left: 50px;"  class="btn btn-primary"/> </div>
<br /><br /><br />




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
   </script>

</body>

</html>
