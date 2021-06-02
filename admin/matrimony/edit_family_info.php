<?php
include'../connect.php';
error_reporting(0);
include'common_function_matrimony.php';
?>

<html lang="en">

<?php
links();
?>
<script type="text/javascript" src="jquery-1.4.1.min.js"></script>
<script type="text/javascript">
$(document).ready(function()
{

	$("#loding2").hide();
	
	
	$("#no_of_brother").change(function()
	{
		$("#loding2").show();
		var id=$(this).val();
		var dataString = 'id='+ id;
	        if(id==0)
	        {
	         $("#married_brother").val(0);
	         $("#unmarried_brother").val(0);
	        }
	        else
	        {
		$.ajax
		({
			type: "POST",
			url: "get_brother.php",
			data: dataString,
			cache: false,
			success: function(html)
			{
				$("#loding2").hide();
				$("#married_brother").html(html);
				//$("#unmarried_brother").html(html);
			} 
		});
		}
	});
	
	$("#married_brother").change(function()
	{
		$("#loding2").show();
		var id=$(this).val();
		var i = $("#no_of_brother").val();
		var j= ((i - id));
		
	        $("#unmarried_brother").val(j);
		
	})
	
	
	$("#no_of_sister").change(function()
	{
		$("#loding2").show();
		var id=$(this).val();
		var dataString = 'id='+ id;
	       if(id==0)
	        {
	         $("#married_sister").val(0);
	         $("#unmarried_sister").val(0);
	        }
	        else
	        {
		$.ajax
		({
			type: "POST",
			url: "get_sister.php",
			data: dataString,
			cache: false,
			success: function(html)
			{
				$("#loding2").hide();
				$("#married_sister").html(html);
				
			} 
		});
		}
	});
	
	$("#married_sister").change(function()
	{
		$("#loding2").show();
		var id=$(this).val();
		var i = $("#no_of_sister").val();
		var j= ((i - id));
		
	        $("#unmarried_sister").val(j);
		
	})
	
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
	  
	  var input = document.getElementById('permanent_residential_address');
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
					<?php if($data['marriageType'] == 'widow'){?><h1 class="page-header"> Edit <?php echo $data['gender'];?> Widow Matrimony</h1><?php }?> 
					<?php if($data['marriageType'] == 'widower'){?><h1 class="page-header"> Edit <?php echo $data['gender'];?> Widower Matrimony</h1><?php }?>
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
							$father_name=$row123['father_name'];
							
							$occupation_father=$row123['occupation_father'];
							
							$mother_name=$row123['mother_name'];
							
							$occupation_mother=$row123['occupation_mother'];
							
							
							$no_of_brother=$row123['no_of_brother'];
							
							$married_brother=$row123['married_brother'];
							
							$unmarried_brother=$row123['unmarried_brother'];
							
							$no_of_sister=$row123['no_of_sister'];
							
							$married_sister=$row123['married_sister'];
							
							$unmarried_sister=$row123['unmarried_sister'];
							
							
							
							$permanent_residential_address=$row123['permanent_residential_address'];
							
							$parent_conatct_no=$row123['parent_conatct_no'];
							
							
							}
							?>

                        <div class="panel-heading">
                          <h2 style="font-size:20px; margin-top: 7px; text-align:center;font-family: CaviarDreams;"> <b>Family Information of <?php echo ucfirst($first_name). " ".ucfirst($last_name);?> </b> </h2>
                        </div>
                        <div class="panel-body">
                         
                            <div class="row">
                           
                                <div class="col-lg-10">
                                    
									
<form action="update_family_info.php" method="post" enctype="multipart/form-data">

<div class="form-horizontal form-bordered" style="font-family:CenturyGothict;">

<div class="form-group">
												

<input type="hidden" name="candidate_id" value="<?php echo $candidate_id;?>" />
<input type="hidden" name="unique_id" value="<?php echo $unique_id;?>" />



<br>


<label class="col-md-4 control-label" style="padding-left:100px;text-align: left;">Father's Name </label> <div class="col-md-8">  <input type="text" name="father_name" value="<?php echo $father_name;?>" class="form-control" required onKeyPress="return onlyAlphabets(event,this);"/> </div> <br /><br /><br />

<label class="col-md-4 control-label" style="padding-left:100px;text-align: left;">Occupation Of father  </label> <div class="col-md-8">  <input type="text" name="occupation_father" value="<?php echo $occupation_father;?>" class="form-control"  required onKeyPress="return onlyAlphabets(event,this);"/> </div> <br /><br /><br />

<label class="col-md-4 control-label" style="padding-left:100px;text-align: left;">Mother's Name  </label> <div class="col-md-8">  <input type="text" name="mother_name" value="<?php echo $mother_name;?>" class="form-control"  required onKeyPress="return onlyAlphabets(event,this);"/> </div> <br /><br /><br />

<label class="col-md-4 control-label" style="padding-left:100px;text-align: left;">Occupation of mother  </label> <div class="col-md-8">  <input type="text" name="occupation_mother" value="<?php echo $occupation_mother;?>" class="form-control"  required onKeyPress="return onlyAlphabets(event,this);"/> </div> <br /><br /><br />

<label class="col-md-4 control-label" style="padding-left:100px;text-align: left;">No of Brother  </label> <div class="col-md-8">
<select name="no_of_brother" id="no_of_brother"  class="form-control input-md" required>
    <option value="0"<?php if($no_of_brother=='0') echo "selected";?>>0</option>
    <option value="1"<?php if($no_of_brother=='1') echo "selected";?>>1</option>
    <option value="2"<?php if($no_of_brother=='2') echo "selected";?>>2</option>
    <option value="3"<?php if($no_of_brother=='3') echo "selected";?>>3</option>
    <option value="4"<?php if($no_of_brother=='4') echo "selected";?>>4</option>
    <option value="5"<?php if($no_of_brother=='5') echo "selected";?>>5</option>
    <option value="6"<?php if($no_of_brother=='6') echo "selected";?>>6</option>
    <option value="7"<?php if($no_of_brother=='7') echo "selected";?>>7</option>
    <option value="8"<?php if($no_of_brother=='8') echo "selected";?>>8</option>
    <option value="9"<?php if($no_of_brother=='9') echo "selected";?>>9</option>
    <option value="10"<?php if($no_of_brother=='10') echo "selected";?>>10</option>
    
</select>
                                        
 </div> <br /><br /><br />

<label class="col-md-4 control-label" style="padding-left:100px;text-align: left;">Married Brother  </label> <div class="col-md-8"> 
<select name="married_brother"  id="married_brother" class="form-control input-md" required>
	<option value="0"<?php if($married_brother=='0') echo "selected";?>>0</option>
	<option value="1"<?php if($married_brother=='1') echo "selected";?>>1</option>
	<option value="2"<?php if($married_brother=='2') echo "selected";?>>2</option>
	<option value="3"<?php if($married_brother=='3') echo "selected";?>>3</option>
	<option value="4"<?php if($married_brother=='4') echo "selected";?>>4</option>
	<option value="5"<?php if($married_brother=='5') echo "selected";?>>5</option>  
</select>
				    
 </div> <br /><br /><br />

<label class="col-md-4 control-label" style="padding-left:100px;text-align: left;">Unmarried Brother </label> <div class="col-md-8"> 
<input type="text" class="form-control input-md" id="unmarried_brother"  name="unmarried_brother" value="<?php if($unmarried_brother){echo $unmarried_brother;}else{echo "0";}?>" readonly>
  </div> <br /><br /><br />

<label class="col-md-4 control-label" style="padding-left:100px;text-align: left;">No of sister </label> <div class="col-md-8">  
<select name="no_of_sister"  id="no_of_sister" class="form-control input-md" required>
	<option value="0"<?php if($no_of_sister=='0') echo "selected";?>>0</option>
	<option value="1"<?php if($no_of_sister=='1') echo "selected";?>>1</option>
	<option value="2"<?php if($no_of_sister=='2') echo "selected";?>>2</option>
	<option value="3"<?php if($no_of_sister=='3') echo "selected";?>>3</option>
	<option value="4"<?php if($no_of_sister=='4') echo "selected";?>>4</option>
	<option value="5"<?php if($no_of_sister=='5') echo "selected";?>>5</option>
	<option value="6"<?php if($no_of_sister=='6') echo "selected";?>>6</option>
	<option value="7"<?php if($no_of_sister=='7') echo "selected";?>>7</option>
	<option value="8"<?php if($no_of_sister=='8') echo "selected";?>>8</option>
	<option value="9"<?php if($no_of_sister=='9') echo "selected";?>>9</option>
	<option value="10"<?php if($no_of_sister=='10') echo "selected";?>>10</option>
</select>
 </div> <br /><br /><br />

<label class="col-md-4 control-label" style="padding-left:100px;text-align: left;">Married sister </label> <div class="col-md-8">  
 <select name="married_sister" id="married_sister"  class="form-control input-md" required>
<option value="0"<?php if($married_sister=='0') echo "selected";?>>0</option>
<option value="1"<?php if($married_sister=='1') echo "selected";?>>1</option>
<option value="2"<?php if($married_sister=='2') echo "selected";?>>2</option>
<option value="3"<?php if($married_sister=='3') echo "selected";?>>3</option>
<option value="4"<?php if($married_sister=='4') echo "selected";?>>4</option>
<option value="5"<?php if($married_sister=='5') echo "selected";?>>5</option>
<option value="6"<?php if($married_sister=='6') echo "selected";?>>6</option>
<option value="7"<?php if($married_sister=='7') echo "selected";?>>7</option>
<option value="8"<?php if($married_sister=='8') echo "selected";?>>8</option>
<option value="9"<?php if($married_sister=='9') echo "selected";?>>9</option>
<option value="10"<?php if($married_sister=='10') echo "selected";?>>10</option>

</select>
 </div> <br /><br /><br />

<label class="col-md-4 control-label" style="padding-left:100px;text-align: left;">Unmarried sister  </label> <div class="col-md-8">  
<input type="text" class="form-control input-md" id="unmarried_sister"  name="unmarried_sister" value="<?php if($unmarried_sister){echo $unmarried_sister;}else{echo "0";}?>" readonly>
</div> <br /><br /><br />

<label class="col-md-4 control-label" style="padding-left:100px;text-align: left;">Permanent Residential Address  </label> <div class="col-md-8" style="margin-bottom:10px">
 <textarea class="form-control" id="permanent_residential_address" name="permanent_residential_address"rows="2" required ><?php echo $permanent_residential_address; ?></textarea>
                                    
  </div> <br /><br /><br />

<label class="col-md-4 control-label" style="padding-left:100px;text-align: left;">Contact Number of Parents </label> <div class="col-md-8">  <input type="text" name="parent_conatct_no" maxlength="12" value="<?php echo $parent_conatct_no;?>" class="form-control"  required onKeyPress="return onlyNos(event,this);"/> </div> <br /><br /><br />

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
