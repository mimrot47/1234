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
</script>

<script type="text/javascript">
$(function () {
$('#txtNumeric1').keydown(function (e) {
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
</script>


<script type="text/javascript">
$(function () {
$('#txtNumeric2').keydown(function (e) {
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
</script>

<script type="text/javascript">
$(function () {
$('#txtNumeric3').keydown(function (e) {
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
</script>


<script type="text/javascript">
$(function () {
$('#txtNumeric4').keydown(function (e) {
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
</script>
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
                if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123))
                    return true;
                else
                    return false;
            }
            catch (err) {
                alert(err.Description);
            }
        }
 
  function onlyAlphabetsHeading(e, t) {
            try {
                if (window.event) {
                    var charCode = window.event.keyCode;
                }
                else if (e) {
                    var charCode = e.which;
                }
                else { return true; }
                if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123) || charCode==32)
                    return true;
                else
                    return false;
            }
            catch (err) {
                alert(err.Description);
            }
        }
        
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
	  
  var input = document.getElementById('ss_desc');
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
<body>

    <div id="wrapper">

        <!-- Navigation -->
       <?php
       nav();
	   ?>

        <div id="page-wrapper">
             <div class="row" style="margin-left:230px;">
                 <div class="col-lg-12" style="font-family:CaviarDreams_Bold;color:#4c4743;">
                    <h1 class="page-header"> Edit Data Of Success Stories</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            
            <div class="row" style="padding-left:250px;">
				<div class="col-lg-10">
                    <div class="panel panel-default">
                        <div class="panel-heading"><h2 style="font-size:20px; margin-top: 7px; text-align:center;font-family: CaviarDreams;"> <b>
                           Edit Data of Success Stories</b></h2>
                        </div>
                        <div class="panel-body">
                         
                            <div class="row">
                           
                                <div class="col-lg-10">
                                    
                       <?php
									
					$id=$_GET['id'];
					//echo $id ;
                    $show123=mysqli_query($conn,"select * from  success_stories where id='$id' and is_del='no' ") or die(mysqli_error($conn));	
					
					$image_mime_type="image/png|image/jpeg|image/gif"; 
					  
					  while($row123=mysqli_fetch_array($show123))
					  {
						
							$bride_name=$row123['bride_name'];
							$groom_name=$row123['groom_name'];
							$marriage_date=$row123['marriage_date'];
							$ss_heading=$row123['ss_heading'];
							$ss_desc=$row123['ss_desc'];
							$state=$row123['state'];
							$city=$row123['city'];
							$photo=$row123['photo'];	
								
					
					  }
						 ?>
									
<form action="update_success_stories.php" method="post" enctype="multipart/form-data" onSubmit="return CheckFileName()">

<div class="form-horizontal form-bordered" style="font-family:CenturyGothict;">

<div class="form-group">
												

<input type="hidden" name="id" value="<?php echo $id;?>" />

<input type="hidden" name="photo" value="<?php echo $photo; ?>" />

<label class="col-md-5 control-label" style="padding-left:100px;text-align: left;">Bride Name </label> <div class="col-md-7">  <input type="text" name="bride_name" id="txtNumeric" value="<?php echo $bride_name;?>" class="form-control"  required onKeyPress="return onlyAlphabets(event,this);"/> </div> <br /><br /><br />

<label class="col-md-5 control-label" style="padding-left:100px;text-align: left;">Groom Name </label> <div class="col-md-7">  <input type="text" name="groom_name" id="txtNumeric1" value="<?php echo $groom_name;?>" class="form-control"  required onKeyPress="return onlyAlphabets(event,this);"/> </div> <br /><br /><br />

<label class="col-md-5 control-label" style="padding-left:100px;text-align: left;">Marriage Date </label> <div class="col-md-7">  <input type="date" name="marriage_date" value="<?php echo $marriage_date;?>"  max="3000-12-31" class="form-control"  required/> </div> <br /><br /><br />

<label class="col-md-5 control-label" style="padding-left:100px;text-align: left;">Heading </label> <div class="col-md-7">  <input type="text" name="ss_heading" id="txtNumeric2" value="<?php echo $ss_heading;?>" class="form-control"  /> </div> <br /><br /><br />

<label class="col-md-5 control-label" style="padding-left:100px;text-align: left;margin-top: 35px;">Image  <br> (Image size should be 450*300)</label> <div class="col-md-5">  <input type="file" name="photo" value="<?php echo $photo;?>" style="margin-top: 45px;" class="form-control"  accept="image/*"  id="uploadFile"/> </div>

<div class="col-md-2"> <?php echo  '<img src="matrimony_success_img/'. $photo.'" height="120" width="120" style=" border: 2px solid #666;border-radius:50%;">';		?></div>
 <br /><br /><br /><br /><br /> <br /><br />
<label class="col-md-5 control-label" style="padding-left:100px;text-align: left;">Description  </label> <div class="col-md-7">  <textarea rows="4" cols="50" id="ss_desc" name="ss_desc" class="form-control"><?php echo $ss_desc;?> </textarea>  </div> <br /><br /><br /><br /><br /><br />

<label class="col-md-5 control-label" style="padding-left:100px;text-align: left;">State </label> <div class="col-md-7">  <input type="text" name="state" value="<?php echo $state;?>" id="txtNumeric3" class="form-control"  /> </div> <br /><br /><br />

<label class="col-md-5 control-label" style="padding-left:100px;text-align: left;">City  </label> <div class="col-md-7">  <input type="text" name="city" value="<?php echo $city;?>" id="txtNumeric4" class="form-control"  /> </div> <br /><br /><br />

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
