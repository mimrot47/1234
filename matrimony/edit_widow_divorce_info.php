
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
							<h4>Update <?php echo $_GET['type']; ?> Information </h4><hr>	
								<div class="dataTable_wrapper">
                                <?php
								 $uniq_id=$_GET['id'];
                                if($_GET['type']=="divorcee")
								{
                                ?>
                                	<form action="update_widow_devorce_info.php" method="post" enctype="multipart/form-data">
                                    <input type="hidden" name="type" value="<?php echo $_GET['type'] ?>">
                                    <input type="hidden" name="unique_id" value="<?php echo $uniq_id ?>">
                                    <?php
					   
								$show=mysql_query("select * from matrimonial_divorcee where  unique_id='$uniq_id'  ") or die(mysql_error());
								while($row=mysql_fetch_array($show))
								{
										
									$previous_marriage_date_divorcee=$row['previous_marriage_date_divorcee'];
									$date_of_divorce=$row['date_of_divorce'];
									$child_status_divorce=$row['child_status_divorce'];
									$child_custody_status_divorce=$row['child_custody_status_divorce'];
									$previous_marriage_address_divorce=$row['previous_marriage_address_divorce'];
								}
								?>
                
                                          
                               <div class="form-group" style="padding-bottom:30px">
                                    <label class="col-sm-4 control-label" for="birth_name">Previous Marriage Date Divorcee</label>  
                                    <div class="col-md-8">
                                        <input id="birth_name" name="previous_marriage_date_divorcee" type="text" value="<?php echo "$previous_marriage_date_divorcee"; ?>" class="form-control input-md" >

                                    </div>
                                </div>

                                <!-- Text input-->
                                <div class="form-group" style="padding-bottom:30px">
                                    <label class="col-sm-4 control-label" for="own_kul">Date of Divorce</label>  
                                    <div class="col-md-8">
                                        <input id="own_kul" name="date_of_divorce" type="text" value="<?php echo "$date_of_divorce"; ?>" class="form-control input-md">

                                    </div>
                                </div>

                                <div class="form-group" style="padding-bottom:30px">
                                    <label class="col-sm-4 control-label" for="mamkul">No. Of Child</label>  
                                    <div class="col-md-8">
                                        <select class="form-control" id="faculty" name="child_status_divorce">
                    <option value="None" <?php if($child_status_divorce=='None') echo "selected";?> >None</option>
                    <option value="1" <?php if($child_status_divorce=='1') echo "selected";?> >1</option>
                    <option value="2" <?php if($child_status_divorce=='2') echo "selected";?> >2</option>
                    <option value="3" <?php if($child_status_divorce=='3') echo "selected";?> >3</option>
                    <option value="4 and above" <?php if($child_status_divorce=='4 and above') echo "selected";?> >4 and above</option>
                </select>

                                    </div>
                                </div>
                                <div class="form-group" style="padding-bottom:30px">
                                    <label class="col-sm-4 control-label" for="gotra">Child Living Status</label>
                                    <div class="col-md-8">                                        
                                        <select class="form-control" id="child_custody_status_divorce" name="child_custody_status_divorce">
                          <option value="Not Applicable" <?php if($child_custody_status_divorce=='Not Applicable') echo "selected";?> >Not Applicable</option>
                          <option value="Living With Me" <?php if($child_custody_status_divorce=='Living With Me') echo "selected";?> >Living With Me</option>
                          <option value="Not Living With Me" <?php if($child_custody_status_divorce=='Not Living With Me') echo "selected";?> >Not Living With Me</option>                          
                        </select> 

                                    </div>
                                </div>
                                <?php if($_GET['gender']=="Bride"){ ?>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="nakshtra">Previous Marriage Address</label>  
                                    <div class="col-md-8">
                                    <input type="text" name="previous_marriage_address_divorce" value="<?php echo $previous_marriage_address_divorce ?>" class="form-control input-md"	>
                                        
                                    </div>
                                </div>
                                <?php } ?>
                             
                                <div class="form-group">
                                	 <label class="col-sm-4 control-label" for="work_place_address"></label>  
                                    <div class="col-sm-8"> <br>
                                        <button type="submit" name="submit" class="btn btn-success" style="border:none">Update</button>
                                        </div>
                                    </div>
                                    </form>
                                    <?php 
									}
									else 
									{
										?>
                                        
                                       
										
										<form action="update_widow_devorce_info.php" method="post" >
                                        <input type="hidden" name="type" value="<?php echo $_GET['type'] ?>">
                                    <input type="hidden" name="unique_id" value="<?php echo $uniq_id ?>">
                                    <?php
					    
									$show1=mysql_query("select * from matrimonial_widow where  unique_id='$uniq_id'  ") or die(mysql_error());
													while($row1=mysql_fetch_array($show1))
													{
															
									$previous_marriage_date_widow=$row1['previous_marriage_date_widow'];
									$date_partner_death_widow=$row1['date_partner_death_widow'];
									$child_status_widow=$row1['child_status_widow'];
									$previous_marriage_address_widow=$row1['previous_marriage_address_widow'];

				}?>
                                          
                               <div class="form-group" style="padding-bottom:30px">
                                    <label class="col-sm-4 control-label" for="birth_name">Previous Marriage Date</label>  
                                    <div class="col-md-8">
                                        <input id="birth_name" name="previous_marriage_date_widow" type="text" value="<?php echo "$previous_marriage_date_widow"; ?>" class="form-control input-md" >

                                    </div>
                                </div>

                                <!-- Text input-->
                                <div class="form-group" style="padding-bottom:30px">
                                <label class="col-sm-4 control-label" for="birth_name">
Date Partner Death                                  </label>
									  <div class="col-md-8">
                                        <input id="own_kul" name="date_partner_death_widow" type="text" value="<?php echo "$date_partner_death_widow"; ?>" class="form-control input-md">

                                    </div>
                                </div>

                                <div class="form-group" style="padding-bottom:30px">
                                    <label class="col-sm-4 control-label" for="mamkul">No. of Child</label>  
                                    <div class="col-md-8">
                                        <select class="form-control" id="faculty" name="child_status_widow">
                    <option value="None" <?php if($child_status_widow=='None') echo "selected";?> >None</option>
                    <option value="1" <?php if($child_status_widow=='1') echo "selected";?> >1</option>
                    <option value="2" <?php if($child_status_widow=='2') echo "selected";?> >2</option>
                    <option value="3" <?php if($child_status_widow=='3') echo "selected";?> >3</option>
                    <option value="4 and above" <?php if($child_status_widow=='4 and above') echo "selected";?> >4 and above</option>
                </select>

                                    </div>
                                </div>
                                <?php if($_GET['gender']=="Bride"){ ?>
                                <div class="form-group" style="padding-bottom:30px">
                                    <label class="col-sm-4 control-label" for="gotra">Previous Marriage Address</label>
                                    <div class="col-md-8">
                                        <input id="gotra" name="previous_marriage_address_widow" type="text" value="<?php echo "$previous_marriage_address_widow"; ?>" class="form-control input-md" >

                                    </div>
                                </div>
                                <?php } ?>
                               
                                
                             
                                <div class="form-group">
                                	 <label class="col-sm-4 control-label" for="work_place_address"></label>  
                                    <div class="col-sm-8"> <br>
                                        <button type="submit" name="submit" class="btn btn-success" style="border:none">Update</button>
                                        </div>
                                    </div>
                                    </form>
								<?php	}
									
									?>
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