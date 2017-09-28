
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
                    
						<div class="col-lg-12" style="border-radius:5px; border:1px solid #CCC; padding:5px">
							<h4><img src="../img/ICON 1/Family Information.png" style="width:100px; height:100px">Update Family Information </h4><hr>
								<div class="dataTable_wrapper">
                                	<form action="update_family_info.php" method="post" enctype="multipart/form-data">
                                    <?php
					    
$show=mysql_query("select * from matrimonialall where is_del='no' and email='$email'  ") or die(mysql_error());
				while($row=mysql_fetch_array($show))
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
                                        <input id="father_name" name="father_name" type="text" value="<?php echo $father_name ?>" class="form-control input-md" >
                                    </div>
                                </div>
                                <!-- Text input-->
                                <div class="form-group" style="padding-bottom:30px">
                                    <label class="col-sm-4 control-label" for="occupation">Occupation</label>  
                                    <div class="col-sm-8">
                                        <input id="occupation" name="occupation_father" type="text" value="<?php echo $occupation_father ?>" class="form-control input-md">
                                    </div>
                                </div>
                                <div class="form-group" style="padding-bottom:30px">
                                    <label class="col-sm-4 control-label" for="mother_name">Mother's Name </label>  
                                    <div class="col-sm-8">
                                        <input id="mother_name" name="mother_name" type="text" value="<?php echo $mother_name ?>" class="form-control input-md" >
                                    </div>
                                </div>
                                <div class="form-group" style="padding-bottom:30px">
                                    <label class="col-sm-4 control-label" for="occupation_mother">Occupation</label>
                                    <div class="col-sm-8">                     
                                        <input type="text" class="form-control" id="occupation_mother" value="<?php echo $occupation_mother ?>" name="occupation_mother" >
                                    </div>
                                </div>
                                <div class="form-group" style="padding-bottom:30px">
                                    <label class="col-sm-4 control-label" for="no_of_siblings">No of Brother  </label>  
                                    <div class="col-sm-8">
                                        <!--<input id="no_of_siblings" name="no_of_brother" type="text" value="<?php echo $no_of_brother ?>" class="form-control input-md" >-->
										<select id="no_of_siblings" name="no_of_brother"   class="form-control input-md" required>
                                        	<option value="0"<?php if($no_of_brother=='0') echo "selected";?>>0</option>
                                            <option value="1"<?php if($no_of_brother=='1') echo "selected";?>>1</option>
                                            <option value="2"<?php if($no_of_brother=='2') echo "selected";?>>2</option>
                                            <option value="3"<?php if($no_of_brother=='3') echo "selected";?>>3</option>
                                            <option value="4"<?php if($no_of_brother=='4') echo "selected";?>>4</option>
                                            <option value="5"<?php if($no_of_brother=='5') echo "selected";?>>5</option>
                                            <option value="6"<?php if($no_of_brother=='6') echo "selected";?>>6</option>
                                            <option value="None"<?php if($no_of_brother=='None') echo "selected";?>>None</option>
                                        </select>
                                    </div>
                                </div>
                            
                                <div class="form-group" style="padding-bottom:30px">
                                    <label class="col-sm-4 control-label" for="marital_satus_of_siblings">Married Brother</label>  
                                    <div class="col-sm-8">
                                       <!-- <input id="marital_satus_of_siblings" name="married_brother" value="<?php echo $married_brother; ?>" type="text"  class="form-control input-md"> -->
									<select id="marital_satus_of_siblings" name="married_brother"   class="form-control input-md" required>
                                    	<option value="0"<?php if($married_brother=='0') echo "selected";?>>0</option>
										<option value="1"<?php if($married_brother=='1') echo "selected";?>>1</option>
										<option value="2"<?php if($married_brother=='2') echo "selected";?>>2</option>
										<option value="3"<?php if($married_brother=='3') echo "selected";?>>3</option>
										<option value="4"<?php if($married_brother=='4') echo "selected";?>>4</option>
										<option value="5"<?php if($married_brother=='5') echo "selected";?>>5</option>                                    </select>
                                    </div>
                                </div>
                                <div class="form-group" style="padding-bottom:30px">
                                    <label class="col-sm-4 control-label" for="marital_satus_of_siblings">Unmarried Brother</label>  
                                    <div class="col-sm-8">
                                        <!--<input id="marital_satus_of_siblings" name="unmarried_brother" value="<?php echo $unmarried_brother ?>" type="text"  class="form-control input-md"> -->
										<select id="marital_satus_of_siblings" name="unmarried_brother"   class="form-control input-md" required>
                                    	<option value="0"<?php if($unmarried_brother=='0') echo "selected";?>>0</option>
										<option value="1"<?php if($unmarried_brother=='1') echo "selected";?>>1</option>
										<option value="2"<?php if($unmarried_brother=='2') echo "selected";?>>2</option>
										<option value="3"<?php if($unmarried_brother=='3') echo "selected";?>>3</option>
										<option value="4"<?php if($unmarried_brother=='4') echo "selected";?>>4</option>
										<option value="5"<?php if($unmarried_brother=='5') echo "selected";?>>5</option>                                        </select>
                                    </div>
                                </div>
                                 <div class="form-group" style="padding-bottom:30px">
                                    <label class="col-sm-4 control-label" for="no_of_siblings">No of Sister  </label>  
                                    <div class="col-sm-8">
                                        <!--<input id="no_of_siblings" name="no_of_sister" type="text" value="<?php echo $no_of_sister ?>" class="form-control input-md" >-->
										 <select id="no_of_siblings" name="no_of_sister"   class="form-control input-md" required>
                                        	<option value="0"<?php if($no_of_sister=='0') echo "selected";?>>0</option>
                                            <option value="1"<?php if($no_of_sister=='1') echo "selected";?>>1</option>
                                            <option value="2"<?php if($no_of_sister=='2') echo "selected";?>>2</option>
                                            <option value="3"<?php if($no_of_sister=='3') echo "selected";?>>3</option>
                                            <option value="4"<?php if($no_of_sister=='4') echo "selected";?>>4</option>
                                            <option value="5"<?php if($no_of_sister=='5') echo "selected";?>>5</option>
                                            <option value="6"<?php if($no_of_sister=='6') echo "selected";?>>6</option>
                                            <option value="None"<?php if($no_of_sister=='None') echo "selected";?>>None</option>
                                        </select>
                                    </div>
                                </div>
                            
                                <div class="form-group" style="padding-bottom:30px">
                                    <label class="col-sm-4 control-label" for="marital_satus_of_siblings">Married Sister</label>  
                                    <div class="col-sm-8">
                                       <!-- <input id="marital_satus_of_siblings" name="married_sister" value="<?php echo $married_sister ?>" type="text"  class="form-control input-md"> -->
									<select id="marital_satus_of_siblings" name="married_sister"   class="form-control input-md" required>
                                     	<option value="0"<?php if($married_sister=='0') echo "selected";?>>0</option>
										<option value="1"<?php if($married_sister=='1') echo "selected";?>>1</option>
										<option value="2"<?php if($married_sister=='2') echo "selected";?>>2</option>
										<option value="3"<?php if($married_sister=='3') echo "selected";?>>3</option>
										<option value="4"<?php if($married_sister=='4') echo "selected";?>>4</option>
										<option value="5"<?php if($married_sister=='5') echo "selected";?>>5</option>                                        </select>
                                    </div>
                                </div>
                                
                                <div class="form-group" style="padding-bottom:30px">
                                    <label class="col-sm-4 control-label" for="marital_satus_of_siblings">Unmarried Sister</label>  
                                    <div class="col-sm-8">
                                        <!--<input id="marital_satus_of_siblings" name="unmarried_sister" value="<?php echo $unmarried_sister ?>" type="text"  class="form-control input-md"> -->
										<select  id="marital_satus_of_siblings" name="unmarried_sister"   class="form-control input-md" required>
                                        	<option value="0"<?php if($unmarried_sister=='0') echo "selected";?>>0</option>
                                            <option value="1"<?php if($unmarried_sister=='1') echo "selected";?>>1</option>
                                            <option value="2"<?php if($unmarried_sister=='2') echo "selected";?>>2</option>
                                            <option value="3"<?php if($unmarried_sister=='3') echo "selected";?>>3</option>
                                            <option value="4"<?php if($unmarried_sister=='4') echo "selected";?>>4</option>
                                            <option value="5"<?php if($unmarried_sister=='5') echo "selected";?>>5</option>                                        </select>
                                    </div>
                                </div>
                                
                                <div class="form-group" style="padding-bottom:70px">
                                    <label class="col-sm-4 control-label" for="permanent_residential_address">Permanent Residential Address</label>  
                                    <div class="col-sm-8">
                                        <textarea id="permanent_residential_address" name="permanent_residential_address" rows="2"  class="form-control input-md"><?php echo $permanent_residential_address ?></textarea>
                                    </div>
                                </div>
                               
                                <div class="form-group" style="padding-bottom:30px">
                                    <label class="col-sm-4 control-label" for="parent_conatct_no">Contact Number for Parents</label>  
                                    <div class="col-sm-8">                     
                                        <input type="text" class="form-control input-md" maxlength="10" id="parent_conatct_no" value="<?php echo $parent_conatct_no ?>" name="parent_conatct_no" >
                                    </div>
                                </div>
                                <div class="form-group" style="padding-bottom:30px">
                                	 <label class="col-sm-4 control-label" for="work_place_address"></label>  
                                    <div class="col-sm-8"> <br>
                                        <button type="submit" name="submit" class=" btn btn-success" style="border:none">Update</button>
                                        </div>
                                    </div>
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