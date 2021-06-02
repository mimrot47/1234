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
               if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123) || charCode == 32 || charCode == 46)
                    return true;
                else
                    return false;
            }
            catch (err) {
                alert(err.Description);
            }
        }
 
    </script>
    <script language="Javascript" type="text/javascript">
 
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
	});
	
	document.addEventListener('DOMContentLoaded', function() {
	  
	  var input = document.getElementById('father_name');
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
	  
	  var input = document.getElementById('mother_name');
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
	  
	  var input = document.getElementById('occupation');
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
	  
	  var input = document.getElementById('occupation_mother');
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
							<h2 style="color:#e74c3c; font-family:BerlinSans; font-size:32px"><img src="../img/ICON 1/Family Information.png" style="width:40px; height:40px"> Update Family Information </h2><hr>
								<div class="dataTable_wrapper" style="font-family:CenturyGothict;">
                                	<form action="update_family_info.php" method="post" enctype="multipart/form-data">
                                    <?php
					    
$show=mysqli_query($conn,"select * from matrimonialall where is_del='no' and email='$email'  ") or die(mysqli_error($conn));
				while($row=mysqli_fetch_array($show))
				{
						
$father_name=$row['father_name'];
$occupation_father=$row['occupation_father'];
$mother_name=$row['mother_name'];
$occupation_mother=$row['occupation_mother'];
$no_of_brother=$row['no_of_brother'];
$married_brother=$row['married_brother'];
$unmarried_brother=$row['unmarried_brother'];
$no_of_sister=$row['no_of_sister'];
$married_sister=$row['married_sister'];
$unmarried_sister=$row['unmarried_sister'];
$permanent_residential_address=$row['permanent_residential_address'];
//$ancestral_address=$row['ancestral_address'];
$parent_conatct_no=$row['parent_conatct_no'];
				}?>
                                          
                                   <div class="form-group" style="padding-bottom:30px">
                                    <label class="col-sm-4 control-label" for="Father's name ">Father's Name</label>  
                                    <div class="col-sm-8">
                                        <input id="father_name" name="father_name" type="text" value="<?php echo $father_name ?>" class="form-control input-md hied_border " required onKeyPress="return onlyAlphabets(event,this);">
                                    </div>
                                </div>
                                <!-- Text input-->
                                <div class="form-group" style="padding-bottom:30px">
                                    <label class="col-sm-4 control-label" for="occupation">Occupation</label>  
                                    <div class="col-sm-8">
                                        <input id="occupation" name="occupation_father" type="text" value="<?php echo $occupation_father ?>" class="form-control input-md hied_border " required onKeyPress="return onlyAlphabets(event,this);">
                                    </div>
                                </div>
                                <div class="form-group" style="padding-bottom:30px">
                                    <label class="col-sm-4 control-label" for="mother_name">Mother's Name </label>  
                                    <div class="col-sm-8">
                                        <input id="mother_name" name="mother_name" type="text" value="<?php echo $mother_name ?>" class="form-control input-md hied_border" required onKeyPress="return onlyAlphabets(event,this);">
                                    </div>
                                </div>
                                <div class="form-group" style="padding-bottom:30px">
                                    <label class="col-sm-4 control-label" for="occupation_mother">Occupation</label>
                                    <div class="col-sm-8">                     
                                        <input type="text" class="form-control hied_border" id="occupation_mother" value="<?php echo $occupation_mother ?>" name="occupation_mother" required onKeyPress="return onlyAlphabets(event,this);">
                                    </div>
                                </div>
                                <div class="form-group" style="padding-bottom:30px">
                                    <label class="col-sm-4 control-label" for="no_of_siblings">No of Brother  </label>  
                                    <div class="col-sm-8">
                                       <select id="no_of_brother" name="no_of_brother"   class="form-control input-md hied_border" required>
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
                                    </div>
                                </div>
                            
                                <div class="form-group" style="padding-bottom:30px">
                                    <label class="col-sm-4 control-label" for="marital_satus_of_siblings">Married Brother</label>  
                                    <div class="col-sm-8">
                                      <select id="married_brother" name="married_brother"   class="form-control input-md hied_border" required>
                                    	<?php
                                    		$id = $married_brother;
                                    		$i = 0;
                                    		while($i <= $id )
						{
						 ?>
						 <option value="<?php echo $i;?>"<?php if($married_brother==$i) echo "selected";?>><?php echo $i;?></option>
						 <?php 
						  $i++;
						} 
                                    		
                                    	?>
                                    	<!--<option value="0"<?php if($married_brother=='0') echo "selected";?>>0</option>
					<option value="1"<?php if($married_brother=='1') echo "selected";?>>1</option>
					<option value="2"<?php if($married_brother=='2') echo "selected";?>>2</option>
					<option value="3"<?php if($married_brother=='3') echo "selected";?>>3</option>
					<option value="4"<?php if($married_brother=='4') echo "selected";?>>4</option>
					<option value="5"<?php if($married_brother=='5') echo "selected";?>>5</option> -->
				</select>
                                    </div>
                                </div>
                                <div class="form-group" style="padding-bottom:30px">
                                    <label class="col-sm-4 control-label" for="marital_satus_of_siblings">Unmarried Brother</label>  
                                    <div class="col-sm-8">
                                    <input type="text" class="form-control input-md hied_border" id="unmarried_brother"  name="unmarried_brother" value="<?php if($unmarried_brother){echo $unmarried_brother;}else{echo "0";}?>" readonly required>
                                      <!--<select id="marital_satus_of_siblings" name="unmarried_brother"   class="form-control input-md" required>
                                    	<option value="0"<?php if($unmarried_brother=='0') echo "selected";?>>0</option>
					<option value="1"<?php if($unmarried_brother=='1') echo "selected";?>>1</option>
					<option value="2"<?php if($unmarried_brother=='2') echo "selected";?>>2</option>
					<option value="3"<?php if($unmarried_brother=='3') echo "selected";?>>3</option>
					<option value="4"<?php if($unmarried_brother=='4') echo "selected";?>>4</option>
					<option value="5"<?php if($unmarried_brother=='5') echo "selected";?>>5</option>                                       
				     </select>-->
                                    </div>
                                </div>
                                 <div class="form-group" style="padding-bottom:30px">
                                    <label class="col-sm-4 control-label" for="no_of_siblings">No of Sister  </label>  
                                    <div class="col-sm-8">
                                       <select id="no_of_sister" name="no_of_sister"   class="form-control input-md hied_border" required>
                                            <option value="0"<?php if($no_of_sister=='0') echo "selected";?>>0</option>
                                            <option value="1"<?php if($no_of_sister=='1') echo "selected";?>>1</option>
                                            <option value="2"<?php if($no_of_sister=='2') echo "selected";?>>2</option>
                                            <option value="3"<?php if($no_of_sister=='3') echo "selected";?>>3</option>
                                            <option value="4"<?php if($no_of_sister=='4') echo "selected";?>>4</option>
                                            <option value="5"<?php if($no_of_sister=='5') echo "selected";?>>5</option>
                                            <option value="6"<?php if($no_of_sister=='6') echo "selected";?>>6</option>
                                            <option value="7"<?php if($no_of_brother=='7') echo "selected";?>>7</option>
                                            <option value="8"<?php if($no_of_brother=='8') echo "selected";?>>8</option>
                                            <option value="9"<?php if($no_of_brother=='9') echo "selected";?>>9</option>
                                            <option value="10"<?php if($no_of_brother=='10') echo "selected";?>>10</option>
                                        </select>
                                    </div>
                                </div>
                            
                                <div class="form-group" style="padding-bottom:30px">
                                    <label class="col-sm-4 control-label" for="marital_satus_of_siblings">Married Sister</label>  
                                    <div class="col-sm-8">
                                     <select id="married_sister" name="married_sister"   class="form-control input-md hied_border" required>
                                    <?php
                                    		$idd = $married_sister;
                                    		$j = 0;
                                    		while($j <= $idd )
						{
						 ?>
						 <option value="<?php echo $j;?>"<?php if($married_sister==$j) echo "selected";?>><?php echo $j;?></option>
						 <?php 
						  $j++;
						} 
                                    		
                                    	?>
                                     
                                     	<!--<option value="0"<?php if($married_sister=='0') echo "selected";?>>0</option>
					<option value="1"<?php if($married_sister=='1') echo "selected";?>>1</option>
					<option value="2"<?php if($married_sister=='2') echo "selected";?>>2</option>
					<option value="3"<?php if($married_sister=='3') echo "selected";?>>3</option>
					<option value="4"<?php if($married_sister=='4') echo "selected";?>>4</option>
					<option value="5"<?php if($married_sister=='5') echo "selected";?>>5</option> -->
				       </select>
                                    </div>
                                </div>
                                
                                <div class="form-group" style="padding-bottom:30px">
                                    <label class="col-sm-4 control-label" for="marital_satus_of_siblings">Unmarried Sister</label>  
                                    <div class="col-sm-8">
                                     <input type="text" class="form-control input-md hied_border" id="unmarried_sister"  name="unmarried_sister" value="<?php if($unmarried_sister){echo $unmarried_sister;}else{echo "0";}?>" readonly>
                                       <!--<select  id="unmarried_sister" name="unmarried_sister"   class="form-control input-md" required>
                                            <option value="0"<?php if($unmarried_sister=='0') echo "selected";?>>0</option>
                                            <option value="1"<?php if($unmarried_sister=='1') echo "selected";?>>1</option>
                                            <option value="2"<?php if($unmarried_sister=='2') echo "selected";?>>2</option>
                                            <option value="3"<?php if($unmarried_sister=='3') echo "selected";?>>3</option>
                                            <option value="4"<?php if($unmarried_sister=='4') echo "selected";?>>4</option>
                                            <option value="5"<?php if($unmarried_sister=='5') echo "selected";?>>5</option>
                                         </select>-->
                                    </div>
                                </div>
                                
                                <div class="form-group" style="padding-bottom:70px">
                                    <label class="col-sm-4 control-label" for="permanent_residential_address">Permanent Residential Address</label>  
                                    <div class="col-sm-8">
                                        <textarea id="permanent_residential_address" name="permanent_residential_address" rows="2"  class="form-control input-md hied_border" required><?php echo $permanent_residential_address ?></textarea>
                                    </div>
                                </div>
                               
                                <div class="form-group" style="padding-bottom:30px">
                                    <label class="col-sm-4 control-label" for="parent_conatct_no">Contact Number of Parents</label>  
                                    <div class="col-sm-8">                     
                                        <input type="text" class="form-control input-md hied_border" maxlength="12" id="parent_conatct_no" value="<?php echo $parent_conatct_no ?>" name="parent_conatct_no" required onKeyPress="return onlyNos(event,this);">
                                    </div>
                                </div>
                                <div class="form-group" style="padding-bottom:30px">
                                	 <label class="col-sm-4 control-label" for="work_place_address"></label>  
                                    <div class="col-sm-8"> <br>
                                       <center> <button type="submit" name="submit" class=" btn btn-success" style="border:none">Update</button></center>
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