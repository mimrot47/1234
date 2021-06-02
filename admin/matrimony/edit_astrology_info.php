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
							$birth_name=$row123['birth_name'];
							$own_kul=$row123['own_kul'];
							$mamkul=$row123['mamkul'];
							$gotra=$row123['gotra'];
							$nakshtra=$row123['nakshtra'];
							$charan=$row123['charan'];
							$rashi=$row123['rashi'];
							$nadi=$row123['nadi'];
							$gan=$row123['gan'];
							$guru=$row123['guru'];
							$manglik_status=$row123['manglik_status'];
							$marriageType=$row123['marriageType'];
						}
					?>

                        <div class="panel-heading">
							<h2 style="font-size:20px; margin-top: 7px; text-align:center;font-family: CaviarDreams;"> <b> Astrology Information of <?php echo ucfirst($first_name). " ".ucfirst($last_name);?></b> </h2> 
                        </div>
                        <div class="panel-body">
                         
                            <div class="row">
                           
                                <div class="col-lg-10">
                                    
									
<form action="update_astro_info.php" method="post" enctype="multipart/form-data">

<div class="form-horizontal form-bordered" style="font-family:CenturyGothict;">

<div class="form-group">
												

<input type="hidden" name="candidate_id" value="<?php echo $candidate_id;?>" />
<input type="hidden" name="unique_id" value="<?php echo $unique_id;?>" />



<br>


<label class="col-md-4 control-label" style="padding-left:100px;text-align: left;">Birth Name  </label> <div class="col-md-8">  <input type="text" name="birth_name" value="<?php echo $birth_name;?>" id="" class="form-control" required  onKeyPress="return onlyAlphabets(event,this);"/> </div> <br /><br /><br />

<label class="col-md-4 control-label" style="padding-left:100px;text-align: left;">Own Kul  </label> <div class="col-md-8">  <input type="text" name="own_kul" value="<?php echo $own_kul;?>" class="form-control"  required  onKeyPress="return onlyAlphabets(event,this);"/> </div> <br /><br /><br />

<label class="col-md-4 control-label" style="padding-left:100px;text-align: left;">Mama Kul  </label> <div class="col-md-8">  <input type="text" name="mamkul" value="<?php echo $mamkul;?>" class="form-control"  required  onKeyPress="return onlyAlphabets(event,this);"/> </div> <br /><br /><br />

<label class="col-md-4 control-label" style="padding-left:100px;text-align: left;">Gotra </label> <div class="col-md-8">  <input type="text" name="gotra" value="<?php echo $gotra;?>" class="form-control"  required  onKeyPress="return onlyAlphabets(event,this);"/> </div> <br /><br /><br />

<label class="col-md-4 control-label" style="padding-left:100px;text-align: left;">Nakshtra  </label> <div class="col-md-8"> 
<select id="nakshtra" name="nakshtra"  class="form-control input-md" required> 
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
                                        

 </div> <br /><br /><br />

<label class="col-md-4 control-label" style="padding-left:100px;text-align: left;">Charan  </label> <div class="col-md-8"> 
<select id="charan" name="charan" class="form-control input-md" required> 
	<option value="">Select</option>
	<option value="1"<?php if($charan=='1') echo "selected";?>>1</option>
	<option value="2"<?php if($charan=='2') echo "selected";?>>2</option>
	<option value="3"<?php if($charan=='3') echo "selected";?>>3</option>
	<option value="4"<?php if($charan=='4') echo "selected";?>>4</option>
</select>
 </div> <br /><br /><br />

<label class="col-md-4 control-label" style="padding-left:100px;text-align: left;">Rashi </label> <div class="col-md-8">  
<select id="rashi" name="rashi" class="form-control input-md"required >
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
</div> <br /><br /><br />

<label class="col-md-4 control-label" style="padding-left:100px;text-align: left;">Nadi  </label> <div class="col-md-8">
<select id="nadi" name="nadi" class="form-control input-md" required>
	<option value="">Select</option>
	<option value="Aadya"<?php if($nadi=='Aadya') echo "selected";?>>Aadya </option>
	<option value="Madhya"<?php if($nadi=='Madhya') echo "selected";?>>Madhya</option>
	<option value="Antya"<?php if($nadi=='Antya') echo "selected";?>>Antya</option>
</select>
</div> <br /><br /><br />

<label class="col-md-4 control-label" style="padding-left:100px;text-align: left;">Gan  </label> <div class="col-md-8">  
<select id="gan" name="gan" class="form-control input-md" required>
    <option value="">Select</option>
    <option value="Dev Gan"<?php if($gan=='Dev Gan') echo "selected";?>>Dev Gan</option>
    <option value="Manush Gan"<?php if($gan=='Manush Gan') echo "selected";?>>Manush Gan</option>
    <option value="Rakshas Gan"<?php if($gan=='Rakshas Gan') echo "selected";?>>Rakshas Gan</option>
</select>
</div> <br /><br /><br />

<label class="col-md-4 control-label" style="padding-left:100px;text-align: left;">Guru </label> <div class="col-md-8">  
<select id="guru" name="guru" class="form-control input-md" required>
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
</select>
</div> <br /><br /><br />

<label class="col-md-4 control-label" style="padding-left:100px;text-align: left;">Manglik Status  </label> <div class="col-md-8">
<select id="manglik_status" name="manglik_status" class="form-control input-md" required>
	<option value="">Select</option>
	<option value="Yes"<?php if($manglik_status=='Yes') echo "selected";?>>Yes</option>
	<option value="No"<?php if($manglik_status=='No') echo "selected";?>>No</option>
</select>
</div> <br /><br /><br />

<label class="col-md-4 control-label" style="padding-left:100px;text-align: left;">Marriage Type  </label> <div class="col-md-8">  <input type="text" name="marriageType" value="<?php echo $marriageType;?>" class="form-control"  /> </div> <br /><br /><br />


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
