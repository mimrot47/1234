<?php include "../connect.php";
session_start();
 $email=$_SESSION['myusername'];

?>
<!DOCTYPE html>
<html lang="en">
	
<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="...">
		<meta name="keywords" content="...">
		<meta name="author" content="...">
		<title>MATRIMONY</title>
		<link rel="stylesheet" href="css/CZSale.css" type="text/css" />
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

        <style>
			.logo_img
			{
				width:200px;
				height:50px;
				margin-top:45px;
			}
			.event-img
			{
				width:100px;
				height:100px;
			}
            .hied_border{
            border-style:hidden; 
            border-top-style:hidden;
            border-bottom-style:groove;
            background-color: transparent;
            border-radius:0px;
            box-shadow:none;
            height:40px;
            }
		</style>
        <script>
function countAge(object, birthDay){
      now = new Date();
      bD = birthDay.value.split('/');
      if(bD.length==3){
              born = new Date(bD[2], bD[1]*1-1, bD[0]);
            years = new Date(now.getTime() - born.getTime());
            base = new Date(0);
            document.all['age'].value = years.getFullYear()-base.getFullYear();
      }
}

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
	});
	
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
	});
	
	document.addEventListener('DOMContentLoaded', function() {
	  
	  var input = document.getElementById('working_post');
	  input.addEventListener('keydown', function(e){      
	       var input = e.target;
	       var val = input.value;
	       var end = input.selectionEnd;
	       if(e.keyCode == 32 && (val[end - 1] == " " || val[end] == " ")) {
	         e.preventDefault();
	         return false;
	      }      
	    });
	});
	
	document.addEventListener('DOMContentLoaded', function() {
	  
	  var input = document.getElementById('work_place_address');
	  input.addEventListener('keydown', function(e){      
	       var input = e.target;
	       var val = input.value;
	       var end = input.selectionEnd;
	       if(e.keyCode == 32 && (val[end - 1] == " " || val[end] == " ")) {
	         e.preventDefault();
	         return false;
	      }      
	    });
	});
    </script>
	</head>
	<body>
	<div style="background-color:#225169; height:50px">&nbsp;</div>
	<div class="container">
		<div class="navbar-header">
			<h1 class="navbar-brand" style="font-family:CenturyGothict; font-size:30px"><a href="" style=" text-decoration: none;"><span style="color:#FF4500">MALI</span> <span style="color:#225169">MATRIMONY</span></a></h1>
		</div>
	</div>
</div>
		<div class="container wrapper">   
			<?php //include "header.php";?>
			<div class="content">
				<?php include "menubar.php"; ?>
				<div class="col-lg-9 content-right">
					
                    
					<div class="selected-classifieds">
                    
						<div class="col-lg-12" style="border-radius:2px; border:1px solid #CCC; padding:5px 25px 10px 50px;height: 1050px;" >
							<h2 style="color:#e74c3c; font-family:BerlinSans; font-size:32px"><img src="../img/ICON 1/Professional Information.png" style="width:40px; height:40px">Update Professional Information </h2><hr>
								<div class="dataTable_wrapper" style="font-family:CenturyGothict;">
                                	<form action="update_professional_info.php" method="post" enctype="multipart/form-data">
                                    <?php
					    
$show=mysqli_query($conn,"select * from matrimonialall where is_del='no' and email='$email'  ") or die(mysqli_error($conn));
				while($row=mysqli_fetch_array($show))
				{
						
				$faculty=$row['faculty'];
				//$academic_level=$row['academic_level'];
				$college_name=$row['college_name'];
				$college_address=$row['college_address'];
				$office_contact=$row['office_contact'];
				$job_busi_status=$row['job_busi_status'];
				$working_post=$row['working_post'];
				$annual_income=$row['annual_income'];
				$work_place_address=$row['work_place_address'];
				}?>
                                          
                                  <div class="form-group" style="padding-bottom:30px">
                                    <label class="col-sm-4 control-label" for="faculty">Qualification</label>  
                                    <div class="col-sm-8">
                                         <select class="form-control input-md hied_border" id="faculty"  name="faculty" required>
                                        <option value="">Select</option>
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
                                    </div>
                                </div>
                                <!-- Text input-->
                               <!-- <div class="form-group" style="padding-bottom:30px">
                                    <label class="col-sm-4 control-label" for="academic_level">Academic Level</label>  
                                    <div class="col-sm-8">
                                        <select class="form-control input-md" id="academic_level" name="academic_level" required>
                                            <option><?php //echo $academic_level; ?></option>
                                            <option>Undergraduate</option>
                                            <option>Diploma</option>
                                            <option>Art</option>
                                            <option>Commerce</option>
                                            <option>Science</option>
                                            <option>Post Graduation</option>
                                      </select>
                                    </div>
                                </div>-->
                                <div class="form-group" style="padding-bottom:30px">
                                    <label class="col-sm-4 control-label" for="college_name">College Name </label>  
                                    <div class="col-sm-8">
                                        <input id="txtNumeric" name="college_name" type="text" value="<?php echo $college_name; ?>" class="form-control input-md hied_border" required onKeyPress="return onlyAlphabets(event,this);">
                                    </div>
                                </div>
                                <div class="form-group" style="padding-bottom:70px">
                                    <label class="col-sm-4 control-label" for="college_address">College Address</label>
                                    <div class="col-sm-8">                     
                                        <textarea class="form-control  hied_border" id="txtNumeric1" name="college_address" rows="2" required ><?php echo $college_address; ?></textarea>
                                    </div>
                                </div>
                                <div class="form-group" style="padding-bottom:30px">
                                    <label class="col-sm-4 control-label " for="office_contact">Office Contact ( if any )  </label>  
                                    <div class="col-sm-8">
                                        <input id="office_contact" name="office_contact" type="text" maxlength="12"  onKeyPress="return onlyNos(event,this);" required  value="<?php echo $office_contact; ?>" class="form-control input-md  hied_border" >
                                    </div>
                                </div>                                
                                <div class="form-group" style="padding-bottom:30px">
                                    <label class="col-sm-4 control-label" for="job_busi_status">Occupation Status</label>  
                                    <div class="col-sm-8">
                                        <select class="form-control input-md  hied_border" id="job_busi_status" name="job_busi_status" required >
                                            <option value="">Select</option>
                                            <option <?php if($job_busi_status=='Government Job') echo "selected";?>  value="Government Job">Government Job</option>
                                            <option <?php if($job_busi_status=='Private Job') echo "selected";?>  value="Private Job">Private Job</option>
                                            <option <?php if($job_busi_status=='Business') echo "selected";?>  value="Business">Business</option>
                                            <option <?php if($job_busi_status=='Self Employed') echo "selected";?>  value="Self">Self Employed</option> 
                                            <option <?php if($job_busi_status=='None') echo "selected";?>  value="None">None</option>                                        
                                        </select>                                                 
                                    </div>
                                </div>
                                <div class="form-group" style="padding-bottom:30px">
                                    <label class="col-sm-4 control-label" for="working_post">Working Post</label>  
                                    <div class="col-sm-8">
                                        <input id="working_post" name="working_post" type="text"  value="<?php echo $working_post; ?>"  class="form-control input-md  hied_border" required onKeyPress="return onlyAlphabets(event,this);"> 
                                    </div>
                                </div>
                                <div class="form-group" style="padding-bottom:30px">
                                    <label class="col-sm-4 control-label" for="annual_income">Annual Income </label>  
                                    <div class="col-sm-8">
                                        <select class="form-control input-md  hied_border" id="faculty" name="annual_income"  required="" value="<?php echo $_SESSION['annual_income'];?>" required >
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
                                    </div>
                                </div>
                                <div class="form-group" style="padding-bottom:50px">
                                    <label class="col-sm-4 control-label" for="work_place_address">Working Place Address</label>  
                                    <div class="col-sm-8">                     
                                        <textarea class="form-control  hied_border" id="work_place_address" name="work_place_address" rows="2" required > <?php echo $work_place_address; ?></textarea>
                                    </div>
                                </div>
                         		<div class="form-group">
                                	 <label class="col-sm-4 control-label" for="work_place_address"></label>  
                                    <div class="col-sm-8"> <br>
                                       <center>  <button type="submit" name="submit" class="btn btn-success" style="border:none">Update</button></center>
                                        </div>
                                    </div>
                                    </form>
                                 </div>
                             </div>
					</div>
				</div>
			</div>
			<!--<div class="footer">
				<?php //include "footer.php"; ?>
			</div>-->
		</div>
		<p class="text-center" style="height:80px; background-color:#2e3c43;padding-top:30px; color:#ffffff;margin-bottom:0px;">Copyright &copy; 2020<a href="http://www.cloudsoft.com" style="color:#ffffff;"> Cloudsoft PVT.LTD</a>. All Rights Reserved.</p>
		<!-- JavaScript -->
		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.slides.min.js"></script>
		<script src="js/CZSale.js"></script>
	</body>

</html>