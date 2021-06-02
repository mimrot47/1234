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

		function onlyAlphabets(e, t) {
	            try {
	                if (window.event) {
	                    var charCode = window.event.keyCode;
	                }
	                else if (e) {
	                    var charCode = e.which;
	                }
	                else { return true; }
	                if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123) )
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
			
			function onlyGotra(e, t) {
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
        
     document.addEventListener('DOMContentLoaded', function() {
	  
	  var input = document.getElementById('gotra');
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
	  
	  var input = document.getElementById('birth_name');
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
	  
	  var input = document.getElementById('own_kul');
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
	  
	  var input = document.getElementById('mamkul');
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

<h2 style="color:#e74c3c; font-family:BerlinSans; font-size:32px"><img src="../img/ICON 1/Astrological Information.png" style="width:40px; height:40px">
Update Astrological Information </h2>
<table class="table table-hover" >

							<hr>
								<div class="dataTable_wrapper" style="font-family:CenturyGothict;">
                                
                                
                                	<form action="update_astrology_info.php" method="post" enctype="multipart/form-data">
                                    <?php
					    
				$show=mysqli_query($conn,"select * from matrimonialall where is_del='no' and email='$email'  ") or die(mysqli_error($conn));
				while($row=mysqli_fetch_array($show))
				{
						
					$birth_name=$row['birth_name'];
					$own_kul=$row['own_kul'];
					$mamkul=$row['mamkul'];
					$gotra=$row['gotra'];
					$nakshtra=$row['nakshtra'];
					$charan=$row['charan'];
					$rashi=$row['rashi'];
					$nadi=$row['nadi'];
					$gan=$row['gan'];
					$guru=$row['guru'];
					$manglik_status=$row['manglik_status'];
				}?>
                                  
                               
                               <div class="form-group" style="padding-bottom:30px;">
                                    <label class="col-sm-4 control-label" for="birth_name">Birth Name</label>  
                                    <div class="col-md-8">
                                        <input id="birth_name" name="birth_name" type="text" value="<?php echo "$birth_name"; ?>" class="form-control input-md hied_border" required onKeyPress="return onlyGotra(event,this);">

                                    </div>
                                </div>
								
                                <!-- Text input-->
                                <div class="form-group" style="padding-bottom:30px;">
                                    <label class="col-sm-4 control-label" for="own_kul">Own Kul</label>  
                                    <div class="col-md-8">
                                        <input id="own_kul" name="own_kul" type="text" value="<?php echo "$own_kul"; ?>" class="form-control input-md hied_border" required onKeyPress="return onlyGotra(event,this);">

                                    </div>
                                </div>
								
                                <div class="form-group" style="padding-bottom:30px;">
                                    <label class="col-sm-4 control-label" for="mamkul">Mama Kul </label>  
                                    <div class="col-md-8">
                                        <input id="mamkul" name="mamkul" type="text" value="<?php echo "$mamkul"; ?>" class="form-control input-md hied_border" required onKeyPress="return onlyGotra(event,this);" >

                                    </div>
                                </div>
                                <div class="form-group" style="padding-bottom:30px;">
                                    <label class="col-sm-4 control-label" for="gotra">Gotra</label>
                                    <div class="col-md-8">
                                        <input id="gotra" name="gotra" type="text" value="<?php echo "$gotra"; ?>" class="form-control input-md hied_border" required onKeyPress="return onlyGotra(event,this);" >

                                    </div>
                                </div>

                                <div class="form-group" style="padding-bottom:30px;">
                                    <label class="col-sm-4 control-label" for="nakshtra">Nakshtra</label>  
                                    <div class="col-md-8">
                                        <select id="nakshtra" name="nakshtra"  class="form-control input-md hied_border" required > 
                                            <option value="">Select</option>
                                            <option value="Ashwini"<?php if($nakshtra=='Ashwini') echo "selected";?>>Ashwini</option>
                                            <option value="Bharani"<?php if($nakshtra=='Bharani') echo "selected";?>>Bharani</option>
                                            <option value="Krittika"<?php if($nakshtra=='Krittika') echo "selected";?>>Krittika</option>
                                            <option value="Rohini"<?php if($nakshtra=='Rohini') echo "selected";?>>Rohini</option>
                                            <option value="Mrigcira"<?php if($nakshtra=='Mrigcira') echo "selected";?>>Mrigcira</option>
                                            <option value="Ardra"<?php if($nakshtra=='Ardra') echo "selected";?>>Ardra</option>
                                            <option value="Punarvasu"<?php if($nakshtra=='Punarvasu') echo "selected";?>>Punarvasu</option>
                                            <option value="Pushya"<?php if($nakshtra=='Pushya') echo "selected";?>>Pushya</option>
                                            <option value="Ashlesha"<?php if($nakshtra=='Ashlesha') echo "selected";?>>Ashlesha</option>
                                            <option value="Magha"<?php if($nakshtra=='Magha') echo "selected";?>>Magha</option>
                                            <option value="Poorva Phalguni"<?php if($nakshtra=='Poorva Phalguni') echo "selected";?>>Poorva Phalguni</option>
                                            <option value="Uttara Phalgun"<?php if($nakshtra=='Uttara Phalgun') echo "selected";?>>Uttara Phalguni</option>
                                            <option value="Hasta"<?php if($nakshtra=='Hasta') echo "selected";?>>Hasta</option>
                                            <option value="Chitra"<?php if($nakshtra=='Chitra') echo "selected";?>>Chitra</option>
                                            <option value="Swati"<?php if($nakshtra=='Swati') echo "selected";?>>Swati</option>
                                            <option value="Vishaka"<?php if($nakshtra=='Vishaka') echo "selected";?>>Vishaka</option>
                                            <option value="Anuradha"<?php if($nakshtra=='Anuradha') echo "selected";?>>Anuradha</option>
                                            <option value="Jyeshta"<?php if($nakshtra=='Jyeshta') echo "selected";?>>Jyeshta</option>
                                            <option value="Moola"<?php if($nakshtra=='Moola') echo "selected";?>>Moola</option>
                                            <option value="Poorvashadha"<?php if($nakshtra=='Poorvashadha') echo "selected";?>>Poorvashadha</option>
                                            <option value="Uttarashadha"<?php if($nakshtra=='Uttarashadha') echo "selected";?>>Uttarashadha</option>
                                            <option value="Sharavan"<?php if($nakshtra=='Sharavan') echo "selected";?>>Sharavan</option>
                                            <option value="Dhanishta"<?php if($nakshtra=='Dhanishta') echo "selected";?>>Dhanishta</option>
                                            <option value="Satbhij"<?php if($nakshtra=='Satbhij') echo "selected";?>>Satbhij</option>
                                            <option value="Poorva Bhadrpad"<?php if($nakshtra=='Poorva Bhadrpad') echo "selected";?>>Poorva Bhadrpada</option>
                                            <option value="Uttara Bhadrapada"<?php if($nakshtra=='Uttara Bhadrapada') echo "selected";?>>Uttara Bhadrapada</option>
                                            <option value="Revati"<?php if($nakshtra=='Revati') echo "selected";?>>Revati</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group" style="padding-bottom:30px;">
                                    <label class="col-sm-4 control-label" for="charan">Charan</label>  
                                    <div class="col-md-8">
                                        <select id="charan" name="charan" class="form-control input-md hied_border" required > 
                                             <option value="">Select</option>
                                            <option value="1"<?php if($charan=='1') echo "selected";?>>1</option>
                                            <option value="2"<?php if($charan=='2') echo "selected";?>>2</option>
                                            <option value="3"<?php if($charan=='3') echo "selected";?>>3</option>
                                            <option value="4"<?php if($charan=='4') echo "selected";?>>4</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group" style="padding-bottom:30px;">
                                    <label class="col-sm-4 control-label" for="rashi">Rashi</label>  
                                    <div class="col-md-8">
                                        <select id="rashi" name="rashi" class="form-control input-md hied_border" required >
                                            
                                             <option value="">Select</option>
                                            <option value="Mesh (Aries)"<?php if($rashi=='Mesh (Aries)') echo "selected";?>>Mesh (Aries)</option>
                                            <option value="Vrishabh (Taurus)"<?php if($rashi=='Vrishabh (Taurus)') echo "selected";?>>Vrishabh (Taurus)</option>
                                            <option value="Mithun (Gemini)"<?php if($rashi=='Mithun (Gemini)') echo "selected";?>>Mithun (Gemini)</option>
                                            <option value="Karka (Cancer)"<?php if($rashi=='Karka (Cancer)') echo "selected";?>>Karka (Cancer)</option>
                                            <option value="Simha (Leo)"<?php if($rashi=='Simha (Leo)') echo "selected";?>>Simha (Leo)</option>
                                            <option value="Kanya (Virgo)"<?php if($rashi=='Kanya (Virgo)') echo "selected";?>>Kanya (Virgo)</option>
                                            <option value="Tula (Libra)"<?php if($rashi=='Tula (Libra)') echo "selected";?>>Tula (Libra)</option>
                                            <option value="Vrishchika (Scorpius)"<?php if($rashi=='Vrishchika (Scorpius)') echo "selected";?>>Vrishchika (Scorpius)</option>
                                            <option value="Dhanu (Sagittarius)"<?php if($rashi=='Dhanu (Sagittarius)') echo "selected";?>>Dhanu (Sagittarius)</option>
                                            <option value="Makara (Capricornus)"<?php if($rashi=='Makara (Capricornus)') echo "selected";?>>Makara (Capricornus)</option>
                                            <option value="Kumbha (Aquarius"<?php if($rashi=='Kumbha (Aquarius') echo "selected";?>>Kumbha (Aquarius)</option>
                                            <option value="Meen (Pisces)"<?php if($rashi=='Meen (Pisces)') echo "selected";?>>Meen (Pisces)</option>
					</select>
                                    </div>
                                </div>
                                <div class="form-group" style="padding-bottom:30px;">
                                    <label class="col-sm-4 control-label" for="nadi">Nadi</label>  
                                    <div class="col-md-8">
                                        <select id="nadi" name="nadi" class="form-control input-md hied_border" required >
                                            <option value="">Select</option>
                                            <option value="Aadya"<?php if($nadi=='Aadya') echo "selected";?>>Aadya </option>
                                            <option value="Madhya"<?php if($nadi=='Madhya') echo "selected";?>>Madhya</option>
                                            <option value="Antya"<?php if($nadi=='Antya') echo "selected";?>>Antya</option>
										</select>
                                    </div>
                                </div>
                                <div class="form-group" style="padding-bottom:30px;">
                                    <label class="col-sm-4 control-label" for="gan">Gan</label>  
                                    <div class="col-md-8">
                                    	<select id="gan" name="gan" class="form-control input-md hied_border" required >
                                              <option value="">Select</option>
                                             <option value="Dev Gan"<?php if($gan=='Dev Gan') echo "selected";?>>Dev Gan</option>
                                            <option value="Manush Gan"<?php if($gan=='Manush Gan') echo "selected";?>>Manush Gan</option>
                                            <option value="Rakshas Gan"<?php if($gan=='Rakshas Gan') echo "selected";?>>Rakshas Gan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group" style="padding-bottom:30px;">
                                    <label class="col-sm-4 control-label" for="guru">Guru</label>  
                                    <div class="col-md-8">
                                        <select id="guru" name="guru"  class="form-control input-md hied_border" required >
                                             <option value="">Select</option>
                                            <option value="1"<?php if($guru=='1') echo "selected";?>>1</option>
                                            <option value="2"<?php if($guru=='2') echo "selected";?>>2</option>
                                            <option value="3"<?php if($guru=='3') echo "selected";?>>3</option>
                                            <option value="4"<?php if($guru=='4') echo "selected";?>>4</option>
                                            <option value="5"<?php if($guru=='5') echo "selected";?>>5</option>
                                            <option value="6"<?php if($guru=='6') echo "selected";?>>6</option>
                                            <option value="7"<?php if($guru=='7') echo "selected";?>>7</option>
                                            <option value="8"<?php if($guru=='8') echo "selected";?>>8</option>
                                            <option value="9"<?php if($guru=='9') echo "selected";?>>9</option>
                                            <option value="10"<?php if($guru=='10') echo "selected";?>>10</option>
                                            <option value="11"<?php if($guru=='11') echo "selected";?>>11</option>
                                            <option value="12"<?php if($guru=='12') echo "selected";?>>12</option>
                                            <option value="Dont Know"<?php if($guru=='Dont Know') echo "selected";?>>Don't Know</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group" style="padding-bottom:30px;">
                                    <label class="col-sm-4 control-label" for="manglik_status">Manglik Status</label>  
                                    <div class="col-md-8">
                                    	<select id="manglik_status" name="manglik_status" class="form-control input-md hied_border" required >
                                        	 <option value="">Select</option>
                                        	<option value="Yes"<?php if($manglik_status=='Yes') echo "selected";?>>Yes</option>
                                                <option value="No"<?php if($manglik_status=='No') echo "selected";?>>No</option>
                                        </select>

                                    </div>
                                </div>
                                <div class="form-group" style="padding-bottom:30px;">
                                	 <label class="col-sm-4 control-label" for="work_place_address"></label>  
                                    <div class="col-sm-8"> <br>
                                       <center><button type="submit" name="submit" class="btn btn-success" style="border:none">Update</button><center></center>
                                        </div>
                                    </div>
                                    </table>
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