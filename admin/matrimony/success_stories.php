<?php 
include'common_function_matrimony.php';
include'../connect.php';
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


<script type="text/javascript" src="jquery-1.4.1.min.js"></script>
<script type="text/javascript">
$(document).ready(function()
{

	$("#loding2").hide();
	
	
	$("#state").change(function()
	{
		$("#loding2").show();
		var id=$(this).val();
		var dataString = 'id='+ id;
	
		$.ajax
		({
			type: "POST",
			url: "get_city.php",
			data: dataString,
			cache: false,
			success: function(html)
			{
				$("#loding2").hide();
				$("#city").html(html);
			} 
		});
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
	  
  var input = document.getElementById('ss_heading');
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
    </script>
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
                        <h1 class="page-header">Success Stories of Matrimony</h1>
                    </div>
                    
                   <div class="row" style="padding-left:20px;">
						<div class="col-lg-10">
                    		<div class="panel panel-default">
                        		<div class="panel-heading"><h2 style="font-size:20px; margin-top: 7px; text-align:center;font-family: CaviarDreams;"> <b>Insert Data of Success Stories </b></h2></div>
                       			 <div class="panel-body">
                         
                            		<div class="row">
                           				<form action="insert_success_stories.php" method="post" enctype="multipart/form-data" onSubmit="return CheckFileName()" >
										
										<div class="form-horizontal form-bordered" style="font-family:CenturyGothict;">
										
										<div class="form-group">
																						
										<label class="col-md-4 control-label" style="padding-left:100px;text-align: left;">Bride Name </label> <div class="col-md-7"><input type="text" name="bride_name"  class="form-control" required onKeyPress="return onlyAlphabets(event,this);"/> </div> <br /><br><br />
										
										<label class="col-md-4 control-label" style="padding-left:100px;text-align: left;">Groom Name </label> <div class="col-md-7"> <input type="text" name="groom_name"  class="form-control" required onKeyPress="return onlyAlphabets(event,this);"/> </div> <br /><br /><br />
										
										<label class="col-md-4 control-label" style="padding-left:100px;text-align: left;">Marriage Date</label> <div class="col-md-7"> <input type="date" name="marriage_date" max="3000-12-31" class="form-control" required/> </div> <br /><br /><br />
										
										<label class="col-md-4 control-label" style="padding-left:100px;text-align: left;">Heading</label> <div class="col-md-7"> <input type="text" id="ss_heading" name="ss_heading"  class="form-control" required onKeyPress="return onlyAlphabetsHeading(event,this);"/> </div> <br /><br /><br />
										
										<label class="col-md-4 control-label" style="padding-left:100px;text-align: left;">Image  <br> (Image size should be 450 X 300)</label> <div class="col-md-7"><input type="file" name="photo" class="form-control"  accept="image/*"  id="uploadFile" required/> </div> <br /><br /><br /><br />
										
										<label class="col-md-4 control-label" style="padding-left:100px;text-align: left;">Description </label> <div class="col-md-7">  <textarea rows="4" cols="50" id="ss_desc" name="ss_desc" class="form-control" required> </textarea>  </div></div> <br />
										
										<label class="col-md-4 control-label" style="padding-left:100px;text-align: left;">State</label> <div class="col-md-7">
										
										<select class="form-control" name="state" id="state" required>
										<option value="">Select State</option>
										<?php
										include_once 'dbconfig.php';
										
										$stmt = $DB_con->prepare("SELECT * FROM state where is_del='approved' ORDER BY state  ASC");
										$stmt->execute();
										while($row=$stmt->fetch(PDO::FETCH_ASSOC))
										{
										?>
										<option value="<?php echo $row['state']; ?>"><?php echo $row['state']; ?></option>
										<?php
										} ?>
										</select>
										
										 </div> <br /><br /><br />
										
										<label class="col-md-4 control-label" style="padding-left:100px;text-align: left;">City</label> <div class="col-md-7">
										 <select class="form-control" name="city" id="city" required>
												  <option value="">Select City</option>
										 </select>                                
																		
										</div> 
										
										
										<br /><br /><br /><br />
										
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
