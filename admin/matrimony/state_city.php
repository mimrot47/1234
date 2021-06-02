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
    
    <script type="text/javaScript">
function validate_dropdown1(){
var dropdown = document.getElementById('age_group');
var age_group_info=document.getElementById("age_group_info")
if(dropdown.selectedIndex==0){
alert("Please select State");
age_group_info.innerHTML="Select State";
dropdown.focus();
return false; 
}else{
age_group_info.innerHTML="";
alert("You have selected "+dropdown[dropdown.selectedIndex].text+" as your Age Group");
return true;
}
}

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
                  <h1 class="page-header">  State/City</h1>
                    
                     <!--<a href="show_state_citys.php">   <input type="button" class="btn btn-danger" value="Show State/City"> </a>-->
                     
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        
          
            
           <div class="row" style="padding-left:250px;">
				<div class="col-lg-10">
                    <div class="panel panel-default">
                        <div class="panel-heading"><h2 style="font-size:20px; margin-top: 7px; text-align:center;font-family: CaviarDreams;"> <b>Insert Data of State/City</b></h2>
                        </div>
                        <div class="panel-body">
                         
                            <div class="row">
   
<form action="insert_state_city.php" method="post" enctype="multipart/form-data" id="drop_down_validation_1" name="drop_down_validation_1"  onSubmit="javaScript:return validate_form();">
                         
<div class="form-horizontal form-bordered" style="font-family:CenturyGothict;">

<div class="form-group">


												<label class="col-md-4 control-label" style="padding-left:100px;text-align: left;">State</label>
												<div class="col-md-7">
													<select name="state" class="normal_lb_border" id="age_group" style="display: block;
    width: 100%;
    height: 34px;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.42857143;
    color: #555;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
    -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;">
                                       
                                <option >Select State</option>
                                 <?php 
								 $show=mysqli_query($conn,"select * from state where is_del='approved' ");
									
									while($rw=mysqli_fetch_array($show))
									{ 
									echo"<option value='".$rw['state']."'>"; echo $rw['state']; echo"</option>";
									
									}
									
                                ?>
                                </select>
												</div>
											<br /><br /><br />
<label class="col-md-4 control-label" style="padding-left:100px;text-align: left;">City  </label><div class="col-md-7"> <input type="text" name="city" id="" class="form-control" required onKeyPress="return onlyAlphabets(event,this);"/> </div> <br /><br /><br />


<div class="col-md-12"><center> <input type="submit" name="Submit" class="btn btn-primary"/></center> </div>
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
