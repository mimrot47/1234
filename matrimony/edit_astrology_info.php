
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

	</head>
	<body>
		<div class="container wrapper">   
			<?php include "header.php";?>
			<div class="row content">
				<?php include "menubar.php"; ?>
				<div class="col-lg-9 content-right">
					
                    
					<div class="row selected-classifieds">
                    
						
                        <div class="col-lg-12" style="border-radius:5px; border:1px solid #CCC; padding:5px" >

<h4><img src="../img/ICON 1/Astrological Information.png" style="width:50px; height:50px">
Update Astrological Information </h4>
<table class="table table-hover" >

							<hr>
								<div class="dataTable_wrapper">
                                
                                
                                	<form action="update_astrology_info.php" method="post" enctype="multipart/form-data">
                                    <?php
					    
$show=mysql_query("select * from matrimonialall where is_del='no' and email='$email'  ") or die(mysql_error());
				while($row=mysql_fetch_array($show))
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
                                    <label class="col-sm-4 control-label" for="birth_name">Birth name</label>  
                                    <div class="col-md-8">
                                        <input id="birth_name" name="birth_name" type="text" value="<?php echo "$birth_name"; ?>" class="form-control input-md" >

                                    </div>
                                </div>
								
                                <!-- Text input-->
                                <div class="form-group" style="padding-bottom:30px;">
                                    <label class="col-sm-4 control-label" for="own_kul">Own kul</label>  
                                    <div class="col-md-8">
                                        <input id="own_kul" name="own_kul" type="text" value="<?php echo "$own_kul"; ?>" class="form-control input-md">

                                    </div>
                                </div>
								
                                <div class="form-group" style="padding-bottom:30px;">
                                    <label class="col-sm-4 control-label" for="mamkul">Mamakul </label>  
                                    <div class="col-md-8">
                                        <input id="mamkul" name="mamkul" type="text" value="<?php echo "$mamkul"; ?>" class="form-control input-md" >

                                    </div>
                                </div>
                                <div class="form-group" style="padding-bottom:30px;">
                                    <label class="col-sm-4 control-label" for="gotra">Gotra</label>
                                    <div class="col-md-8">
                                        <input id="gotra" name="gotra" type="text" value="<?php echo "$gotra"; ?>" class="form-control input-md" >

                                    </div>
                                </div>

                                <div class="form-group" style="padding-bottom:30px;">
                                    <label class="col-sm-4 control-label" for="nakshtra">Nakshtra</label>  
                                    <div class="col-md-8">
                                        <select id="nakshtra" name="nakshtra"  class="form-control input-md"> 
                                        <option><?php echo "$nakshtra"; ?></option>
                                            <option>Ashwini</option>
                                            <option>Bharani</option>
                                            <option>Krittika</option>
                                            <option>Rohini</option>
                                            <option>Mrigcira</option>
                                            <option>Ardra</option>
                                            <option>Punarvasu</option>
                                            <option>Pushya</option>
                                            <option>Ashlesha</option>
                                            <option>Magha</option>
                                            <option>Poorva Phalguni</option>
                                            <option>Uttara Phalguni</option>
                                            <option>Hasta</option>
                                            <option>Chitra</option>
                                            <option>Swati</option>
                                            <option>Vishaka</option>
                                            <option>Anuradha</option>
                                            <option>Jyeshta</option>
                                            <option>Moola</option>
                                            <option>Poorvashadha</option>
                                            <option>Uttarashadha</option>
                                            <option>Sharavan</option>
                                            <option>Dhanishta</option>
                                            <option>Satbhij</option>
                                            <option>Poorva Bhadrpada</option>
                                            <option>Uttara Bhadrapada</option>
                                            <option>Revati</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group" style="padding-bottom:30px;">
                                    <label class="col-sm-4 control-label" for="charan">Charan</label>  
                                    <div class="col-md-8">
                                        <select id="charan" name="charan" class="form-control input-md"> 
                                        	<option><?php echo "$charan"; ?></option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group" style="padding-bottom:30px;">
                                    <label class="col-sm-4 control-label" for="rashi">Rashi</label>  
                                    <div class="col-md-8">
                                        <select id="rashi" name="rashi" class="form-control input-md" >
                                        	<option><?php echo "$rashi"; ?></option>
                                            <option>Mesh (Aries)</option>
                                            <option>Vrushabh (Taurus)</option>
                                            <option>Mithun (Gemini)</option>
                                            <option>Kark (Cancer)</option>
                                            <option>Sinh (Leo)</option>
                                            <option>Kanya (Virgo)</option>
                                            <option>Tula (Libra)</option>
                                            <option>Vrushchik (Scorpius)</option>
                                            <option>Dhanu (Sagittarius)</option>
                                            <option>Makar (Capricornus)</option>
                                            <option>Kumbha (Aquarius)</option>
                                            <option>Meen (Pisces)</option>
										</select>
                                    </div>
                                </div>
                                <div class="form-group" style="padding-bottom:30px;">
                                    <label class="col-sm-4 control-label" for="nadi">Nadi</label>  
                                    <div class="col-md-8">
                                        <select id="nadi" name="nadi" class="form-control input-md" >
                                        	<option><?php echo "$nadi"; ?></option>
                                            <option>Aadya </option>
                                            <option>Madhya</option>
                                            <option>Antya</option>
										</select>
                                    </div>
                                </div>
                                <div class="form-group" style="padding-bottom:30px;">
                                    <label class="col-sm-4 control-label" for="gan">Gan</label>  
                                    <div class="col-md-8">
                                    	<select id="gan" name="gan" class="form-control input-md">
                                        	<option><?php echo "$gan"; ?></option>
                                            <option>Dev Gan</option>
                                            <option> Manush Gan</option>
                                            <option>Rakshas Gan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group" style="padding-bottom:30px;">
                                    <label class="col-sm-4 control-label" for="guru">Guru</label>  
                                    <div class="col-md-8">
                                        <select id="guru" name="guru"  class="form-control input-md">
                                        	<option><?php echo "$guru"; ?></option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                            <option>6</option>
                                            <option>7</option>
                                            <option>8</option>
                                            <option>9</option>
                                            <option>10</option>
                                            <option>11</option>
                                            <option>12</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group" style="padding-bottom:30px;">
                                    <label class="col-sm-4 control-label" for="manglik_status">Manglik Status</label>  
                                    <div class="col-md-8">
                                    	<select id="manglik_status" name="manglik_status" class="form-control input-md" >
                                        	<option><?php echo "$manglik_status"; ?></option>
                                        	<option>Yes</option>
                                            <option>No</option>
                                        </select>

                                    </div>
                                </div>
                                <div class="form-group" style="padding-bottom:30px;">
                                	 <label class="col-sm-4 control-label" for="work_place_address"></label>  
                                    <div class="col-sm-8"> <br>
                                        <button type="submit" name="submit" class="btn btn-success" style="border:none">Update</button>
                                        </div>
                                    </div>
                                    </table>
                                    </form>
                                 </div>
							
						</div>
                      
					
						
					</div>
				</div>
			</div>
			<div class="footer">
				<?php include "footer.php"; ?>
			</div>
		</div>
		<!-- JavaScript -->
		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.slides.min.js"></script>
		<script src="js/CZSale.js"></script>
	</body>

</html>