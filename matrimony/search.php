<?php
header('Cache-Control: no cache');
session_cache_limiter('private, must-revalidate');
session_cache_expire(60);
session_cache_limiter('private_no_expire'); // works
include "../connect.php";
session_start();
$email=$_SESSION['myusername'];
error_reporting(0);
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
       		<style>
			
			.centered {
				font-family:CenturyGothict; 
				position: absolute;
				top: 80%;
				left: 50%;
				transform: translate(-50%, -50%);
				color:#f8eded;
				font-size:26px;
				
			}	
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
	</head>
	<body>
	<div style="background-color:#225169; height:50px">&nbsp;</div>
		<div class="container">
			<div class="navbar-header">
				<h1 class="navbar-brand" style="font-family:CenturyGothict; font-size:30px"><a href="index.php" style=" text-decoration: none;"><span style="color:#FF4500">MALI</span> <span style="color:#225169">MATRIMONY</span></a></h1>
			</div>
		</div>
	</div>

		<div class="container wrapper">   
			<?php //include "header.php";?>
			<div class="content">
				<?php include "menubar.php"; ?>
				<div class="col-lg-9 content-right">
			                   
                    		<div class="col-lg-12">
					<div class="thumbnail" style="background-color:#ebecec;">
						<h4 align="center" style="font-size:32px; margin-bottom:40px; font-family:CenturyGothict; margin-top:35px;"> Search Your Life Partner</h4>
						<form action="search.php" method="post">
							<div class="col-lg-6" style="padding-left: 70px;font-family: CenturyGothict;">
								<div class="col-lg-4"> Marriage Status </div>
								<div class="col-lg-7">
									<select class="form-control" name="marriageType" required> 
										<option value="">Select Marriage Status</option>
										<option>Never married</option>
										<option>Divorcee</option>
										<?php if($genders[0]!='Bride'){?>
					                                        <option>Widow</option>
					                                        <?php }?>
					                                        <?php if($genders[0]!='Groom'){?>
					                                        <option>Widower</option>
					                                        <?php }?>
										
									</select>
								</div>
								<br>
								<br>
								<br>
				
								<div class="col-lg-4"> Age </div>
								<div class="col-lg-7">
								<table>
									<tr>
										<td>
										<select class="form-control" style="width:120px;" name="from" required> 
											<option value="">From</option>
											<option>18</option>
											<option>19</option>
											<option>20</option>
											<option>21</option>
											<option>22</option>
											<option>23</option>
											<option>24</option>
											<option>25</option>
											<option>26</option>
											<option>27</option>
											<option>28</option>
											<option>29</option>
											<option>30</option>
											<option>31</option>
											<option>32</option>
											<option>33</option>
											<option>34</option>
											<option>35</option>
											<option>36</option>
											<option>37</option>
											<option>37</option>
											<option>38</option>
											<option>39</option>
											<option>40</option>
											<option>41</option>
											<option>42</option>
											<option>43</option>
											<option>44</option>
											<option>45</option>
											<option>46</option>
											<option>47</option>
											<option>48</option>
											<option>49</option>
											<option>50</option>
										</select>
										</td>
										<td>&nbsp;&nbsp;&nbsp;</td>
										<td>
											<select class="form-control" style="width:120px;" name="to" required>  
												<option value="">To</option>
												<option>18</option>
												<option>19</option>
												<option>20</option>
												<option>21</option>
												<option>22</option>
												<option>23</option>
												<option>24</option>
												<option>25</option>
												<option>26</option>
												<option>27</option>
												<option>28</option>
												<option>29</option>
												<option>30</option>
												<option>31</option>
												<option>32</option>
												<option>33</option>
												<option>34</option>
												<option>35</option>
												<option>36</option>
												<option>37</option>
												<option>37</option>
												<option>38</option>
												<option>39</option>
												<option>40</option>
												<option>41</option>
												<option>42</option>
												<option>43</option>
												<option>44</option>
												<option>45</option>
												<option>46</option>
												<option>47</option>
												<option>48</option>
												<option>49</option>
												<option>50</option>
											</select>
										</td>
									</tr>
								</table>  
							</div> 
							<br><br><br>
							<div class="col-lg-4"> Sub-Caste </div>
							<div class="col-lg-7">
								<select class="form-control" name="subcast" required>  
									<option value="">Select Sub-caste </option>
									<option>Full Mali</option>
									<option>Jire Mali</option>
									<option>Kach Mali</option>
								</select>
							</div>     
						</div>
						<div class="col-lg-6" style="padding-left: 70px;font-family: CenturyGothict;">
							<div class="col-lg-4"> Qualification </div>
							<div class="col-lg-7">
								<select class="form-control" id="academic_level" name="academic_level" required>
									<option value="">Select Qualification</option>
									<option>MBA</option>
									<option>CA</option>
									<option>Doctor</option>
									<option>Advocate</option>
									<option>Engineer</option>
									<option>Diploma</option>
									<option>PostGraduate</option>
									<option>Graduate</option>
									<option>Undergraduate</option>
									<option>HSC</option>
									<option>SSC</option>
								</select>
							</div>
							<br><br><br>
							<div class="col-lg-4"> State</div>
							<div class="col-lg-7">
								<select class="form-control " name="states" required>
									<option value="">Select State</option>
									<?php 
									 $show1=mysqli_query($conn,"select * from state where is_del='approved' ORDER BY state  ASC");
									 while($rw1=mysqli_fetch_array($show1))
									 { 
									 echo"<option  value='".$rw1['state']."'>"; echo $rw1['state']; echo"</option>";
									 }
													
								  	?>
								</select>
							</div><br><br><br><br>
							<div class="col-lg-4">&nbsp;</div>
							<div class="col-lg-7">&nbsp;</div>
						</div>
						
						<center>
							<button type="submit" name="submit" class="btn btn-danger" style="border:none;background-color: #7ab42c;border-color: #4caf50; margin-top:25px; padding-left:25px; padding-right:25px; font-family:BerlinSans;font-size: 18px;;">Submit</button>
						</center>
					</form>
				</div>
			</div>
			
			<div class="col-lg-12 div-height">
			<div class="selected-classifieds sug-margin">
				<div class="col-sm-12" style="margin-bottom:10px;">
					<div class="col-sm-6">
						<h2 class="sug_h2" style="margin-left:30px;font-family: CenturyGothict;">Suggestions</h2>
					</div>
					<div class="col-sm-6">
					<form action="search.php" method="post">
						 <div class="col-sm-9"> 
							<input type="text" name="SearchName" class="form-control name-text" required style="margin-right:5px; margin-top:20px;font-family: CenturyGothict;" placeholder="Search By Name">
						</div>
						<div class="col-sm-2">
							<input type="submit" class="btn btn-danger search_btn" value="Search" style="margin-top:20px;;border:none;background-color: #7ab42c;border-color: #4caf50; font-family:BerlinSans;font-size: 18px;;">
						 </div>
					</form>
					</div>
				</div>
			<div class="col-md-12" style="margin-left:30px;margin-bottom: 60px;">
                        <?php
					  	$show_gender=mysqli_query($conn,"select * from matrimonialall where email='$email' and is_del='no' and payment='Yes' and acc_type!='Deactive'") or die(mysqli_error($conn));
						//$image_mime_type="image/png|image/jpeg|image/gif";
						while($row_gender=mysqli_fetch_array($show_gender))
						{
							$gender=$row_gender['gender'];
						}
						$marriageType=$_POST['marriageType'];
						$academic_level=$_POST['academic_level'];
						$subcast=$_POST['subcast'];
						$states=$_POST['states'];
						$from=$_POST['from'];
						$to=$_POST['to'];
						$age=$from. "". $to;
						if($gender=='Groom')
						{
							if($marriageType!='' && $academic_level=='' && $states=='' && $age=='')
							{
								$res1 = mysqli_num_rows(mysqli_query($conn,"select * from matrimonialall where marriageType='$marriageType' and gender='Bride' and is_del='no' and payment='Yes' and acc_type!='Deactive'"));
								if($res1==0)
								{
								?>
								<h3>No Records Found</h3>
								<?php
								}
								else
								{
									$show_marg=mysqli_query($conn,"select * from matrimonialall where marriageType='$marriageType' and gender='Bride' and is_del='no' and payment='Yes' and acc_type!='Deactive'") or die(mysqli_error($conn));
									$image_mime_type="image/png|image/jpeg|image/gif";
									while($row_marg=mysqli_fetch_array($show_marg))
									{
										$unique_id=$row_marg['unique_id'];
										$first_name=$row_marg['first_name'];
										$last_name=$row_marg['last_name'];
										$city=$row_marg['city'];
										$age=$row_marg['age'];
										$mobile_no1=$row_marg['mobile_no1'];
						?>
						<div class="col-xs-3" style="margin-bottom:25px">
							<p class="brideslider"> <?php echo ucfirst($first_name);?><br>
								<a href="search_view.php?id=<?php echo $row_marg['unique_id'];?>">
								<?php
									if($row_marg['profile_pic']=="")
									{
										echo '<img src="img/bride.png" class="img-responsive image-search"  />';
							    		} 
							    		else 
							    		{
							    		
										?>
										<img src="../profile_photos/<?php echo $row_marg['profile_pic'];?>" class="img-responsive image-search">
										<?php
										}
							    	?>
									
								</a>
								Age - <?php echo $age;?><br> City - <?php echo ucfirst($city);?>,<br>State - <?php echo ucfirst($states);?>
							</P>
						</div>
						
							
							<?php
									}
								}
					  	}
						
						if($marriageType=='' && $academic_level!='' &&  $states=='' && $age=='')
						{
							$res2 = mysqli_num_rows(mysqli_query($conn,"select * from matrimonialall where faculty='$academic_level' and gender='Bride' and is_del='no' and payment='Yes' and acc_type!='Deactive'"));
							if($res2==0)
							{
							?>
							<h3>No Records Found</h3>
							<?php
							}
							else
							{
								$show_al=mysqli_query($conn,"select * from matrimonialall where faculty='$academic_level' and gender='Bride' and is_del='no' and payment='Yes' and acc_type!='Deactive' ") or die(mysqli_error($conn));
								$image_mime_type="image/png|image/jpeg|image/gif";
								while($row_al=mysqli_fetch_array($show_al))
								{
									$first_name=$row_al['first_name'];
									$last_name=$row_al['last_name'];
									$city=$row_al['city'];
									$age=$row_al['age'];
									$mobile_no1=$row_al['mobile_no1'];
							?>
							<div class="col-xs-3" style="margin-bottom:25px">
								<p class="brideslider"> <?php echo ucfirst($first_name);?><br>
									<a href="search_view.php?id=<?php echo $row_al['unique_id'];?>">
									<?php
										if($row_al['profile_pic']=="")
										{
											echo '<img src="img/bride.png" class="img-responsive image-search"  />';
								    		} 
								    		else 
								    		{
											?>
											<img src="../profile_photos/<?php echo $row_al['profile_pic'];?>" class="img-responsive image-search">
											<?php
								    		}
								    	?>
										
									</a>
									Age - <?php echo $age;?><br> City - <?php echo ucfirst($city);?>,<br>State - <?php echo ucfirst($states);?>
								</P>
							</div>
							
						<?php

								}
							}
					  	}
						if($marriageType=='' && $academic_level==''  && $states!='' && $age=='')
						{
							$res3 = mysqli_num_rows(mysqli_query($conn,"select * from matrimonialall where states='$states' and is_del='no' and gender='Bride' and payment='Yes' and acc_type!='Deactive'"));
							if($res3==0)
							{
							?>
							<h3>No Records Found</h3>
							<?php
							}
							else
							{
								$show_state=mysqli_query($conn,"select * from matrimonialall where states='$states' and is_del='no' and gender='Bride' and payment='Yes' and acc_type!='Deactive'") or die(mysqli_error($conn));
								$image_mime_type="image/png|image/jpeg|image/gif";
								while($row_state=mysqli_fetch_array($show_state))
								{
									$first_name=$row_state['first_name'];
									$last_name=$row_state['last_name'];
									$city=$row_state['city'];
									$age=$row_state['age'];
									$mobile_no1=$row_state['mobile_no1'];
							?>
							<div class="col-xs-3" style="margin-bottom:25px">
								<p class="brideslider"> <?php echo ucfirst($first_name);?><br>
									<a href="search_view.php?id=<?php echo $row_state['unique_id'];?>">
									<?php
										if($row_state['profile_pic']=="")
										{
											echo '<img src="img/bride.png" class="img-responsive image-search"  />';
								    		} 
								    		else 
											{
											
											?>
											<img src="../profile_photos/<?php echo $row_state['profile_pic'];?>" class="img-responsive image-search">
											<?php
											}
											?>
										
									</a>
									Age - <?php echo $age;?><br> City - <?php echo ucfirst($city);?>,<br>State - <?php echo ucfirst($states);?>
								</P>
							</div>
							
							
							<?php
								}
							}
						}
						if($marriageType=='' && $academic_level==''  && $states=='' && $age!='')
						{
							$res4 = mysqli_num_rows(mysqli_query($conn,"select * from matrimonialall where age BETWEEN $from AND $to and is_del='no' and gender='Bride' and payment='Yes' and acc_type!='Deactive'"));
							if($res4==0)
							{
							?>
							<h3>No Records Found</h3>
							<?php
							}
							else
							{
							$show_age=mysqli_query($conn,"select * from matrimonialall where age BETWEEN $from AND $to and is_del='no' and gender='Bride' and payment='Yes' and acc_type!='Deactive'") or die(mysqli_error($conn));
							$image_mime_type="image/png|image/jpeg|image/gif";
							while($row_age=mysqli_fetch_array($show_age))
							{
							$first_name=$row_age['first_name'];
							$last_name=$row_age['last_name'];
							$city=$row_age['city'];
							$age=$row_age['age'];
							$mobile_no1=$row_age['mobile_no1'];
						?>
						<div class="col-xs-3" style="margin-bottom:25px">
							<p class="brideslider"> <?php echo ucfirst($first_name);?><br>
								<a href="search_view.php?id=<?php echo $row_age['unique_id'];?>">
								<?php
									if($row_age['profile_pic']=="")
									{
										echo '<img src="img/bride.png" class="img-responsive image-search"  />';
							    		} 
							    		else 
							    		{
							    		
										?>
										<img src="../profile_photos/<?php echo $row_age['profile_pic'];?>" class="img-responsive image-search">
										<?php
										}
							    	?>
									
								</a>
								Age - <?php echo $age;?><br> City - <?php echo ucfirst($city);?>,<br>State - <?php echo ucfirst($states);?>
							</P>
						</div>
						
						<?php
							}
							}
							
					  	}
						if($marriageType!='' && $academic_level!='' &&  $states!='' && $age!='')
						{
							$res5 = mysqli_num_rows(mysqli_query($conn,"select * from matrimonialall where age BETWEEN $from AND $to and marriageType='$marriageType' and subcast='$subcast' and states='$states' and faculty='$academic_level' and is_del='no' and gender='Bride' and payment='Yes' and acc_type!='Deactive'"));
							if($res5==0)
							{
							?>
							<h3>No Records Found</h3>
							<?php
							}
							else
							{
							$show_m=mysqli_query($conn,"select * from matrimonialall where age BETWEEN $from AND $to and marriageType='$marriageType' and states='$states' and faculty='$academic_level' and is_del='no' and gender='Bride' and payment='Yes' and acc_type!='Deactive'") or die(mysqli_error($conn));
						
							$image_mime_type="image/png|image/jpeg|image/gif";
							while($row_m=mysqli_fetch_array($show_m))
							{
							$first_name=$row_m['first_name'];
							$last_name=$row_m['last_name'];
							$city=$row_m['city'];
							$age=$row_m['age'];
							$mobile_no1=$row_m['mobile_no1'];
						?>
						<div class="col-xs-3" style="margin-bottom:25px">
							<p class="brideslider"> <?php echo ucfirst($first_name);?><br>
								<a href="search_view.php?id=<?php echo $row_m['unique_id'];?>">
								<?php
									if($row_m['profile_pic']=="")
									{
										echo '<img src="img/bride.png" class="img-responsive image-search"  />';
							    		} 
							    		else 
							    		{
							    		
										?>
										<img src="../profile_photos/<?php echo $row_m['profile_pic'];?>" class="img-responsive image-search">
										<?php
										}
							    	?>
									
								</a>
								Age - <?php echo $age;?><br> City - <?php echo ucfirst($city);?>,<br>State - <?php echo ucfirst($states);?>
							</P>
						</div>
						
						<?php
							}
							}
					  	}
						if($marriageType=='' && $academic_level=='' &&  $states=='' && $age=='')
						{
							$fname=$_POST['SearchName'];
							$res15 = mysqli_num_rows(mysqli_query($conn,"select * from matrimonialall where first_name='$fname' and is_del='no' and gender='Bride' and payment='Yes' and acc_type!='Deactive'"));
							if($res15==0)
							{
							?>
							<h3>No Records Found</h3>
							<?php
							}
							else
							{
								$show_name=mysqli_query($conn,"select * from matrimonialall where first_name='$fname' and is_del='no' and gender='Bride' and payment='Yes' and acc_type!='Deactive'") or die(mysqli_error($conn));
								$image_mime_type="image/png|image/jpeg|image/gif";
								while($row_name=mysqli_fetch_array($show_name))
								{
									$first_name=$row_name['first_name'];
									$last_name=$row_name['last_name'];
									$city=$row_name['city'];
									$age=$row_name['age'];
									$mobile_no1=$row_name['mobile_no1'];
							?>
							<div class="col-xs-3" style="margin-bottom:25px">
								<p class="brideslider"> <?php echo ucfirst($first_name);?><br>
									<a href="search_view.php?id=<?php echo $row_name['unique_id'];?>">
									<?php
										if($row_name['profile_pic']=="")
										{
											echo '<img src="img/bride.png" class="img-responsive image-search"  />';
											} 
											else 
											{
											
											?>
											<img src="../profile_photos/<?php echo $row_name['profile_pic'];?>" class="img-responsive image-search">
											<?php
											}
										?>
										
									</a>
									Age - <?php echo $age;?><br> City - <?php echo ucfirst($city);?>,<br>State - <?php echo ucfirst($row_name['states']);?>
								</P>
							</div>
							
							<?php
								}
							}
						}
					}
					else if($gender=='Bride')
					{ 				 
						if($marriageType!='' && $academic_level=='' && $states=='' && $age=='')
						{
	
							$res6 = mysqli_num_rows(mysqli_query($conn,"select * from matrimonialall where marriageType='$marriageType' and gender='Groom' and is_del='no' and payment='Yes' and acc_type!='Deactive'"));
							if($res6==0)
							{
							?>
							<h3>No Records Found</h3>
							<?php
							}
							else
							{
							$show_marg=mysqli_query($conn,"select * from matrimonialall where marriageType='$marriageType' and gender='Groom' and is_del='no' and payment='Yes' and acc_type!='Deactive'") or die(mysqli_error($conn));
							$image_mime_type="image/png|image/jpeg|image/gif";
							while($row_marg=mysqli_fetch_array($show_marg))
							{
								$unique_id=$row_marg['unique_id'];
							 	$first_name=$row_marg['first_name'];
								$last_name=$row_marg['last_name'];
								$city=$row_marg['city'];
								$age=$row_marg['age'];
								$mobile_no1=$row_marg['mobile_no1'];
				   	?>
						<div class="col-xs-3" style="margin-bottom:25px">
							<p class="brideslider"> <?php echo ucfirst($first_name);?><br>
								<a href="search_view.php?id=<?php echo $row_marg['unique_id'];?>">
								<?php
									if($row_marg['profile_pic']=="")
									{
										echo '<img src="img/groom.png" class="img-responsive image-search"  />';
							    		} 
							    		else 
							    		{
							    		
										?>
										<img src="../profile_photos/<?php echo $row_marg['profile_pic'];?>" class="img-responsive image-search">
										<?php
										}
							    	?>
									
								</a>
								Age - <?php echo $age;?><br> City - <?php echo ucfirst($city);?>,<br>State - <?php echo ucfirst($states);?>
							</P>
						</div>
						
						
						<?php
							}
							}
					  	}
						
						if($marriageType=='' && $academic_level!='' &&  $states=='' && $age=='')
						{
							$res7 = mysqli_num_rows(mysqli_query($conn,"select * from matrimonialall where faculty='$academic_level' and gender='Groom' and is_del='no' and payment='Yes' and acc_type!='Deactive'"));
							if($res7==0)
							{
							?>
							<h3>No Records Found</h3>
							<?php
							}
							else
							{
							$show_al=mysqli_query($conn,"select * from matrimonialall where faculty='$academic_level' and gender='Groom' and is_del='no' and payment='Yes' and acc_type!='Deactive'") or die(mysqli_error($conn));
							$image_mime_type="image/png|image/jpeg|image/gif";
							while($row_al=mysqli_fetch_array($show_al))
							{
								$first_name=$row_al['first_name'];
								$last_name=$row_al['last_name'];
								$city=$row_al['city'];
								$age=$row_al['age'];
								$mobile_no1=$row_al['mobile_no1'];
						?>

						<div class="col-xs-3" style="margin-bottom:25px">
							<p class="brideslider"> <?php echo ucfirst($first_name);?><br>
								<a href="search_view.php?id=<?php echo $row_al['unique_id'];?>">
								<?php
									if($row_al['profile_pic']=="")
									{
										echo '<img src="img/groom.png" class="img-responsive image-search"  />';
							    		} 
							    		else 
							    		{
							    		
										?>
										<img src="../profile_photos/<?php echo $row_al['profile_pic'];?>" class="img-responsive image-search">
										<?php
										}
							    	?>
									
								</a>
								Age - <?php echo $age;?><br> City - <?php echo ucfirst($city);?>,<br>State - <?php echo ucfirst($states);?>
							</P>
						</div>
						
						
						<?php
							}
							}
					 	 }
					  
					  	if($marriageType=='' && $academic_level==''  && $states!='' && $age=='')
						{
							$res8 = mysqli_num_rows(mysqli_query($conn,"select * from matrimonialall where states='$states' and is_del='no' and gender='Groom' and payment='Yes' and acc_type!='Deactive'"));
							if($res8==0)
							{
							?>
							<h3>No Records Found</h3>
							<?php
							}
							else
							{
							$show_state=mysqli_query($conn,"select * from matrimonialall where states='$states' and is_del='no' and gender='Groom' and payment='Yes' and acc_type!='Deactive'") or die(mysqli_error($conn));
							$image_mime_type="image/png|image/jpeg|image/gif";
							while($row_state=mysqli_fetch_array($show_state))
							{
							$first_name=$row_state['first_name'];
							$last_name=$row_state['last_name'];
							$city=$row_state['city'];
							$age=$row_state['age'];
							$mobile_no1=$row_state['mobile_no1'];
						?>
						<div class="col-xs-3" style="margin-bottom:25px">
							<p class="brideslider"> <?php echo ucfirst($first_name);?><br>
								<a href="search_view.php?id=<?php echo $row_state['unique_id'];?>">
								<?php
									if($row_state['profile_pic']=="")
									{
										echo '<img src="img/groom.png" class="img-responsive image-search"  />';
							    		} 
							    		else 
							    		{
							    		
										?>
										<img src="../profile_photos/<?php echo $row_state['profile_pic'];?>" class="img-responsive image-search">
										<?php
										}
							    	?>
									
								</a>
								Age - <?php echo $age;?><br> City - <?php echo ucfirst($city);?>,<br>State - <?php echo ucfirst($states);?>
							</P>
						</div>
						
						<?php
							}
							}
					 	 }
						if($marriageType=='' && $academic_level==''  && $states=='' && $age!='')
						{
							$res9 = mysqli_num_rows(mysqli_query($conn,"select * from matrimonialall where age BETWEEN $from AND $to and is_del='no' and gender='Groom' and payment='Yes' and acc_type!='Deactive'"));
							if($res9==0)
							{
							?>
							<h3>No Records Found</h3>
							<?php
							}
							else
							{
							$show_age=mysqli_query($conn,"select * from matrimonialall where age BETWEEN $from AND $to and is_del='no' and gender='Groom' and payment='Yes' and acc_type!='Deactive'") or die(mysqli_error($conn));
							$image_mime_type="image/png|image/jpeg|image/gif";
							while($row_age=mysqli_fetch_array($show_age))
							{
								$first_name=$row_age['first_name'];
								$last_name=$row_age['last_name'];
								$city=$row_age['city'];
								$age=$row_age['age'];
								$mobile_no1=$row_age['mobile_no1'];
						?>
						<div class="col-xs-3" style="margin-bottom:25px">
							<p class="brideslider"> <?php echo ucfirst($first_name);?><br>
								<a href="search_view.php?id=<?php echo $row_age['unique_id'];?>">
								<?php
									if($row_age['profile_pic']=="")
									{
										echo '<img src="img/groom.png" class="img-responsive image-search"  />';
							    		} 
							    		else 
							    		{
							    		
										?>
										<img src="../profile_photos/<?php echo $row_age['profile_pic'];?>" class="img-responsive image-search">
										<?php
										}
							    	?>
									
								</a>
								Age - <?php echo $age;?><br> City - <?php echo ucfirst($city);?>,<br>State - <?php echo ucfirst($states);?>
							</P>
						</div>
						
						<?php
							}
							}
					 	 }
						if($marriageType!='' && $academic_level!='' &&  $states!='' && $age!='')
						{
	
							$res10 = mysqli_num_rows(mysqli_query($conn,"select * from matrimonialall where age BETWEEN $from AND $to and marriageType='$marriageType' and states='$states' and $subcast and faculty='$academic_level' and is_del='no' and gender='Groom' and payment='Yes' and acc_type!='Deactive'"));
							if($res10==0)
							{
							?>
							<h3>No Records Found</h3>
							<?php
							}
							else
							{
							$show_m=mysqli_query($conn,"select * from matrimonialall where age BETWEEN $from AND $to and marriageType='$marriageType' and states='$states' and faculty='$academic_level' and is_del='no' and gender='Groom' and payment='Yes' and acc_type!='Deactive'") or die(mysqli_error($conn));
							
							$image_mime_type="image/png|image/jpeg|image/gif";
							while($row_m=mysqli_fetch_array($show_m))
							{
							$first_name=$row_m['first_name'];
							$last_name=$row_m['last_name'];
							$city=$row_m['city'];
							$age=$row_m['age'];
							$mobile_no1=$row_m['mobile_no1'];
						?>
						<div class="col-xs-3" style="margin-bottom:25px">
							<p class="brideslider"> <?php echo ucfirst($first_name);?><br>
								<a href="search_view.php?id=<?php echo $row_m['unique_id'];?>">
								<?php
									if($row_m['profile_pic']=="")
									{
										echo '<img src="img/groom.png" class="img-responsive image-search" />';
							    		} 
							    		else 
							    		{
							    		
										?>
										<img src="../profile_photos/<?php echo $row_m['profile_pic'];?>" class="img-responsive image-search">
										<?php
										}
							    	?>
									
								</a>
								Age - <?php echo $age;?><br> City - <?php echo ucfirst($city);?>,<br>State - <?php echo ucfirst($states);?>
							</P>
						</div>
						
						
						<?php
							}
							}
							}
							if($marriageType=='' && $academic_level=='' &&  $states=='' && $age=='')
							{
								$fname=$_POST['SearchName'];
								$res16 = mysqli_num_rows(mysqli_query($conn,"select * from matrimonialall where first_name='$fname' and is_del='no' and gender='Groom' and payment='Yes' and acc_type!='Deactive'"));
								if($res16==0)
								{
								?>
								<h3>No Records Found</h3>
								<?php
								}
								else
								{
									$show_name1=mysqli_query($conn,"select * from matrimonialall where first_name='$fname' and is_del='no' and gender='Groom' and payment='Yes' and acc_type!='Deactive' ") or die(mysqli_error($conn));
									$image_mime_type="image/png|image/jpeg|image/gif";
									while($row_name1=mysqli_fetch_array($show_name1))
									{
										$first_name=$row_name1['first_name'];
										$last_name=$row_name1['last_name'];
										$city=$row_name1['city'];
										$age=$row_name1['age'];
										$mobile_no1=$row_name1['mobile_no1'];
								?>
								<div class="col-xs-3" style="margin-bottom:25px">
									<p class="brideslider"> <?php echo ucfirst($first_name);?><br>
										<a href="search_view.php?id=<?php echo $row_name1['unique_id'];?>">
										<?php
											if($row_name1['profile_pic']=="")
											{
												echo '<img src="img/groom.png" class="img-responsive image-search" />';
												} 
												else 
												{
												
												?>
												<img src="../profile_photos/<?php echo $row_name1['profile_pic'];?>" class="img-responsive image-search">
												<?php
												}
											?>
											
										</a>
										Age - <?php echo $age;?><br> City - <?php echo ucfirst($city);?>,<br>State - <?php echo ucfirst($row_name1['states']);?>
									</P>
								</div>
								<?php
									}
								}
							}
						}
						?>
					</div>
					</div>
					</div>
				</div>
			</div>
			
			<!--<div class="footer">
			<?php //include "footer.php"; ?>
			</div>-->
		</div>
		<p class="text-center" style="height:80px; background-color:#2e3c43;padding-top:30px; color:#ffffff;">Copyright &copy; 2017<a href="http://www.backtechs.com" style="color:#ffffff;"> Backend Technologies PVT.LTD</a>. All Rights Reserved.</p>
		<!-- JavaScript -->
		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.slides.min.js"></script>
		<script src="js/CZSale.js"></script>
	</body>

</html>