<?php
include "../connect.php";
session_start();
$email=$_SESSION['myusername'];

if(!(isset($_SESSION['myusername']) && $_SESSION['myusername']!=""))
{
header("Location:http://localhost/malimatrimony.org");	
}




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
	
		.navi {
		width: 100%;
		margin: 5px;
		padding:2px 5px;
		border:1px solid #eee;
		}
	
		.show {
		//color: blue;
		margin: 5px 0;
		padding: 3px 5px;
		cursor: pointer;
		font: 15px/19px Arial,Helvetica,sans-serif;
		}
		.show a {
		text-decoration: none;
		}
		.show:hover {
		text-decoration: none;
		}


		ul.setPaginate li.setPage{
		padding:15px 10px;
		font-size:14px;
		}
	
		ul.setPaginate{
		margin:0px;
		padding:0px;
		height:100%;
		overflow:hidden;
		font:12px 'Tahoma';
		list-style-type:none;	
		}  
	
		ul.setPaginate li.dot{padding: 3px 0;}
	
		ul.setPaginate li{
		float:left;
		margin:0px;
		padding:0px;
		margin-left:5px;
		}



		ul.setPaginate li a
		{
		background: none repeat scroll 0 0 #ffffff;
		border: 1px solid #cccccc;
		color: #999999;
		display: inline-block;
		font: 15px/25px Arial,Helvetica,sans-serif;
		margin: 5px 3px 0 0;
		padding: 0 5px;
		text-align: center;
		text-decoration: none;
		}	
	
		ul.setPaginate li a:hover,
		ul.setPaginate li a.current_page
		{
		background: none repeat scroll 0 0 #0d92e1;
		border: 1px solid #000000;
		color: #ffffff;
		text-decoration: none;
		}
	
		ul.setPaginate li a{
		color:black;
		display:block;
		text-decoration:none;
		padding:5px 8px;
		text-decoration: none;
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
	   	select{
		color:white;
		font-size:40px;
		box-shaow:none;
	    }
	</style>    
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
				<div class="col-lg-12">
					<div class="thumbnail" style="background-color:#ebecec;">
						<h4 align="center" style="font-size:32px; margin-bottom:40px; font-family:CenturyGothict; margin-top:35px;"> Search Your Life Partner</h4>
						<form action="search.php" method="post">
							<div class="col-lg-6" style="padding-left: 70px;font-family: CenturyGothict;">
								<div class="col-lg-4"> Marriage Status </div>
								<div class="col-lg-7">
									<select class="form-control hied_border" name="marriageType" required> 
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
										<select class="form-control hied_border" style="width:120px;" name="from" required> 
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
											<select class="form-control hied_border" style="width:120px;" name="to" required>  
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
								<select class="form-control hied_border" name="subcast" required>  
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
								<select class="form-control hied_border" id="academic_level" name="academic_level" required>
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
								<select class="form-control hied_border" name="states" required>
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
							<input type="text" name="SearchName" class="form-control name-text hied_border" required style="margin-right:5px; margin-top:20px;font-family: CenturyGothict;" placeholder="Search By Name">
						</div>
						<div class="col-sm-2">
							<input type="submit" class="btn btn-danger search_btn hied_border" value="Search" style="margin-top:20px;;border:none;background-color: #7ab42c;border-color: #4caf50; font-family:BerlinSans;font-size: 18px;;">
						 </div>
					</form>
					</div>
				</div>
			<div class="col-md-12" style="margin-left:30px;margin-bottom: 60px;">
			<?php
				$email; 
			  	$show_gender=mysqli_query($conn,"select * from matrimonialall where email='$email' and is_del='no' and payment='Yes' and acc_type!='Deactive'") or die(mysqli_error($conn));
			  	while($row_gender=mysqli_fetch_array($show_gender))
    			 	{
					$gender_1=$row_gender['gender'];
					if($gender_1=='Bride')
			  		{
				  		$start=0;
						$limit=8;
						
						if(isset($_GET['id']))
						{
						$id=$_GET['id'];
						$start=($id-1)*$limit;
						}
						else
						{
						$id=1;
						}
				  
						$show_b=mysqli_query($conn,"select * from matrimonialall where gender='Groom' and is_del='no' and payment='Yes' and acc_type!='Deactive' LIMIT $start, $limit ") or die(mysqli_error($conn));
										
						$image_mime_type="image/png|image/jpeg|image/gif";
										
						while($row_b=mysqli_fetch_array($show_b))
						{
							$first_name=$row_b['first_name'];
							$last_name=$row_b['last_name'];
							$city=$row_b['city'];
							$age=$row_b['age'];
							$states=$row_b['states'];
						?>
						<div class="col-xs-3" style="margin-bottom:25px">
							<p class="brideslider"> <?php echo ucfirst($first_name);?><br>
								<a href="search_view.php?id=<?php echo $row_b['unique_id'];?>">
								<?php
									if($row_b['profile_pic']=="")
									{
										if($gender_1=="Groom")
										{
											echo '<img src="img/bride.png" class="img-responsive image-search" />';
										} 
										else 
										{
											echo '<img src="img/groom.png" class="img-responsive image-search" />';
										}
							    		} 
							    		else 
							    		{
							    		
										?>
										<img src="../profile_photos/<?php echo $row_b['profile_pic'];?>" class="img-responsive image-search">
										<?php
										}
							    	?>
									
								</a>
								Age - <?php echo $age;?><br> City - <?php echo ucfirst($city);?>,<br>State - <?php echo ucfirst($states);?>
							</P>
						</div>
						<?php
						}
						?>
					</div>
					<?php
					$query="select * from matrimonialall where gender='Groom' and is_del='no' and payment='Yes' and acc_type!='Deactive'";
					$rws=mysqli_num_rows(mysqli_query($conn,$query));
					//calculate total page number for the given table in the database 
					$total=ceil($rws/$limit);
					if($id>1)
					{
						//Go to previous page to show previous 10 items. If its in page 1 then it is inactive
						echo "<a href='?id=".($id-1)."' class='btn btn-info' style='margin-left:25px;'>PREV</a>";
						echo "&nbsp;";
					}
					for($i=1;$i<=$total;$i++)
					{
						if($i==$id) 
						{ 
							echo "<label class='btn' style='color:#0033FF'>".$i."</label>&nbsp;";
						}
						else 
						{  
							echo "<a class='btn' href='?id=".$i."'>".$i."&nbsp;</a>"; 
												
						}
					}
					if($id!=$total)
					{
						////Go to previous page to show next 10 items.
						echo "&nbsp;";
						echo "<a href='?id=".($id+1)."' class='btn btn-info'>NEXT</a>";
					}
					?>
					<?php
					}
					else
					{
						$start=0;
						$limit=8;
						
						if(isset($_GET['id']))
						{
							$id=$_GET['id'];
							$start=($id-1)*$limit;
						}
						else
						{
							$id=1;
						}
						
				  		$show_g=mysqli_query($conn,"select * from matrimonialall where gender='Bride' and is_del='no' and payment='Yes' and acc_type!='Deactive' LIMIT $start, $limit ") or die(mysqli_error($conn));
						$image_mime_type="image/png|image/jpeg|image/gif";
										
						while($row_g=mysqli_fetch_array($show_g))
						{
								
							$first_name=$row_g['first_name'];
							$last_name=$row_g['last_name'];
							$city=$row_g['city'];$age=$row_g['age'];
							$mobile_no1=$row_g['mobile_no1'];
							$states=$row_g['states'];
						?>
						<div class="col-xs-3" style="margin-bottom:25px">
							<p class="brideslider"> <?php echo ucfirst($first_name);?><br>
								<a href="search_view.php?id=<?php echo $row_g['unique_id'];?>">
								<?php
									if($row_g['profile_pic']=="")
									{
										if($gender_1=="Groom")
										{
											echo '<img src="img/bride.png" class="img-responsive image-search"/>';
										} 
										else 
										{
											echo '<img src="img/groom.png" class="img-responsive image-search" />';
										}
							    		} 
							    		else 
							    		{
							    		
										?>
										<img src="../profile_photos/<?php echo $row_g['profile_pic'];?>" class="img-responsive image-search">
										<?php
										}
							    	?>
									
								</a>
								Age - <?php echo $age;?><br> City - <?php echo ucfirst($city);?>,<br>State - <?php echo ucfirst($states);?>
							</P>
						</div>
						<?php
						}
				   		?>
				   		</div>
				   		<?php
										
						$query="select * from matrimonialall where gender='Bride' and is_del='no' and payment='Yes' and acc_type!='Deactive'";
						$rws=mysqli_num_rows(mysqli_query($conn,$query));
						//calculate total page number for the given table in the database 
						$total=ceil($rws/$limit);
						if($id>1)
						{
							//Go to previous page to show previous 10 items. If its in page 1 then it is inactive
							echo "<a href='?id=".($id-1)."' class='btn btn-info' style='margin-left:25px;'>PREV</a>";
							echo "&nbsp;";
						}
						for($i=1;$i<=$total;$i++)
						{
							if($i==$id) 
							{ 
								echo "<label class='btn' style='color:#0033FF'>".$i."</label>&nbsp;";
							}
							else 
							{  
								echo "<a class='btn' href='?id=".$i."'>".$i."&nbsp;</a>"; 
													
							}
						}
						if($id!=$total)
						{
							////Go to previous page to show next 10 items.
							echo "&nbsp;";
							echo "<a href='?id=".($id+1)."' class='btn btn-info'>NEXT</a>";
						}
					}
					
				}
										
			?>
				
			</div>
		
			
          </div>       
		
	
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-38304687-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
						
                        </div>
					</div>
				</div>
			</div>
			<p class="text-center" style="height:80px; background-color:#2e3c43;padding-top:30px; color:#ffffff;margin-bottom:0px;">Copyright &copy; 2020<a href="http://www.cloudsoft.com" style="color:#ffffff;"> Cloudsoft PVT.LTD</a>. All Rights Reserved.</p>
			<!--<div class="footer">
				<?php //include "footer.php"; ?>
			</div>-->
		</div>
		<!-- JavaScript -->
		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.slides.min.js"></script>
		<script src="js/CZSale.js"></script>
	</body>

</html>