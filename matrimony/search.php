
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
	</head>
	<body>
		<div class="container wrapper">   
			<?php include "header.php";?>
			<div class="row content">
				<?php include "menubar.php"; ?>
				<div class="col-lg-9 content-right">
					<div class="col-lg-12">
                    
                    	<div class="thumbnail" style="height:220px">
                        <h4 align="center"> Search Your Life Parner</h4><hr>
							<form action="search.php" method="post">
                            	<div class="col-lg-6">
                                <div class="col-lg-5">
                                	Marriage Status :
                                </div>
                                <div class="col-lg-7">
                            	<select class="form-control" name="marriageType"> 
                                    <option></option>
                                        <option>Never married</option>
                                        <option>Divorce</option>
                                        <option>Widow</option>
                                        <option>Widower</option>
                                    </select>
                                    </div>
                                    <br>
                                   <div class="col-lg-5"> 
                                    Age :
                                   </div>
                                   <div class="col-lg-7">
                             <table>
                             <tr>
                             <td>
                From<select class="form-control" style="width:90px;" name="from">
            	<option></option>
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
                </td><td>&nbsp;&nbsp;&nbsp;</td><td>
                To<select class="form-control" style="width:90px;" name="to">
            	<option></option>
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
                         </table>  </div>     
                                </div>
                                <div class="col-lg-6">
                                <div class="col-lg-4">
                                Qualification :
                                </div>
                                <div class="col-lg-8">
                                <select class="form-control" id="academic_level" name="academic_level" >
                                	<option></option>
									<option>MBA</option>
									<option>CA</option>
									<option>Doctor</option>
									<option>Engineer</option>
									<option>Diploma</option>
									<option>PostGraduate</option>
									<option>Graduate</option>
									<option>Undergraduate</option>
									<option>HSC</option>
									<option>SSC</option>
                                </select>
                                      </div>
                                <br><br>
                                <div class="col-lg-4">
                                State :
                                </div>
                                <div class="col-lg-8">
                            	<select class="form-control " name="states" >
                                    <option></option>
                                    <?php 
											 $show1=mysql_query("select DISTINCT state from city ORDER BY state  ASC");
														
												while($rw1=mysql_fetch_array($show1))
													{ 
													echo"<option  value='".$rw1['state']."'>"; echo $rw1['state']; echo"</option>";
													}
														
									   ?>
                                </select><br>
                               </div>
                               
                                </div><center>
                                <button type="submit" name="submit" class="btn btn-danger" style="border:none;">Submit</button>
                            	</center>
                            </form>
						</div>
                    </div>
					<div class="row selected-classifieds">
                      <?php
					  	$show_gender=mysql_query("select * from matrimonialall where email='$email' and is_del='no'  ") or die(mysql_error());
						//$image_mime_type="image/png|image/jpeg|image/gif";
						while($row_gender=mysql_fetch_array($show_gender))
						{
							$gender=$row_gender['gender'];
						}
						$marriageType=$_POST['marriageType'];
						$academic_level=$_POST['academic_level'];
						//$cast=$_POST['cast'];
						$states=$_POST['states'];
						//$age=$_POST['age'];
						$from=$_POST['from'];
						$to=$_POST['to'];
						$age=$from. "". $to;
						if($gender=='Groom')
						{
										
							if($marriageType!='' && $academic_level=='' && $states=='' && $age=='')
							{
								
								$show_marg=mysql_query("select * from matrimonialall where marriageType='$marriageType' and gender='Bride' and is_del='no'  ") or die(mysql_error());
								$image_mime_type="image/png|image/jpeg|image/gif";
								while($row_marg=mysql_fetch_array($show_marg))
								{
									$unique_id=$row_marg['unique_id'];
								 	$first_name=$row_marg['first_name'];
									$last_name=$row_marg['last_name'];
									$city=$row_marg['city'];
									$mobile_no1=$row_marg['mobile_no1'];
				   	?>
						<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6" >
							<div class="thumbnail" >
								<?php echo '<img src="data:'.$image_mime_type.';base64,'.base64_encode
								($row_marg['profile_pic']).'" style="width:150px; height:150px;" />';?>
								<div class="caption">
									<h5><?php echo "<a href=search_view.php?id=".$row_marg['unique_id'].">". $first_name." ".$last_name."</a>"; ?></h5>
                                    <h5><?php echo $mobile_no1; ?></a></h5>
									<p class="price"><?php echo $city; ?></p>
                                    <button type="button" class="btn btn-danger" ><?php echo"<a href=search_view.php?id=".$row_marg['unique_id']." >";?><span style="color:#fff">View Detail</span><?php echo "</a>"; ?></button>
								</div>
							</div>
						</div>
						<?php
								}
					  	}
						
						if($marriageType=='' && $academic_level!='' &&  $states=='' && $age=='')
						{
							$show_al=mysql_query("select * from matrimonialall where faculty='$academic_level' and gender='Bride' and is_del='no'  ") or die(mysql_error());
							$image_mime_type="image/png|image/jpeg|image/gif";
							while($row_al=mysql_fetch_array($show_al))
							{
								$first_name=$row_al['first_name'];
								$last_name=$row_al['last_name'];
								$city=$row_al['city'];
								$mobile_no1=$row_al['mobile_no1'];
						?>

						<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6" >
							<div class="thumbnail" >
								<?php echo '<img src="data:'.$image_mime_type.';base64,'.base64_encode
								($row_al['profile_pic']).'" style="width:150px; height:150px;" />';?>
								<div class="caption">
									<h5><?php echo $first_name." ".$last_name; ?></h5>
                                    <h5><?php echo $mobile_no1; ?></h5>
									<p class="price"><?php echo $city; ?></p>
                                    <button type="button" class="btn btn-danger" ><?php echo"<a href=search_view.php?id=".$row_al['unique_id']." >";?><span style="color:#fff">View Detail</span><?php echo "</a>"; ?></button>
								</div>
							</div>
						</div>
						<?php
							}
					  	}
						if($marriageType=='' && $academic_level==''  && $states!='' && $age=='')
						{
							$show_state=mysql_query("select * from matrimonialall where states='$states' and is_del='no' and gender='Bride' ") or die(mysql_error());
							$image_mime_type="image/png|image/jpeg|image/gif";
							while($row_state=mysql_fetch_array($show_state))
							{
								$first_name=$row_state['first_name'];
								$last_name=$row_state['last_name'];
								$city=$row_state['city'];
								$mobile_no1=$row_state['mobile_no1'];
						?>

						<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6" >
							<div class="thumbnail" >
								<?php echo '<img src="data:'.$image_mime_type.';base64,'.base64_encode
								($row_state['profile_pic']).'" style="width:150px; height:150px;" />';?>
								<div class="caption">
									<h5><?php echo "<a href=search_view.php?id=".$row_state['unique_id'].">". $first_name." ".$last_name."</a>"; ?></h5>
                                    <h5><?php echo $mobile_no1; ?></h5>
									<p class="price"><?php echo $city; ?></p>
                                    <button type="button" class="btn btn-danger" ><?php echo"<a href=search_view.php?id=".$row_state['unique_id']." >";?><span style="color:#fff">View Detail</span><?php echo "</a>"; ?></button>
								</div>
							</div>
						</div>
						<?php
							}
						}
						if($marriageType=='' && $academic_level==''  && $states=='' && $age!='')
						{
							$show_age=mysql_query("select * from matrimonialall where age BETWEEN $from AND $to and is_del='no' and gender='Bride' ") or die(mysql_error());
							$image_mime_type="image/png|image/jpeg|image/gif";
							while($row_age=mysql_fetch_array($show_age))
							{
							$first_name=$row_age['first_name'];
							$last_name=$row_age['last_name'];
							$city=$row_age['city'];
							$mobile_no1=$row_age['mobile_no1'];
						?>

						<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6" >
							<div class="thumbnail" >
								<?php echo '<img src="data:'.$image_mime_type.';base64,'.base64_encode
								($row_age['profile_pic']).'" style="width:150px; height:150px;" />';?>
								<div class="caption">
									<h5><?php echo "<a href=search_view.php?id=".$row_age['unique_id'].">". $first_name." ".$last_name."</a>"; ?></h5>
                                    <h5><?php echo $mobile_no1; ?></h5>
									<p class="price"><?php echo $city; ?></p>
                                    <button type="button" class="btn btn-danger" ><?php echo"<a href=search_view.php?id=".$row_age['unique_id']." >";?><span style="color:#fff">View Detail</span><?php echo "</a>"; ?></button>
								</div>
							</div>
						</div>
						<?php
							}
					  	}
						if($marriageType!='' && $academic_level!='' &&  $states!='' && $age!='')
						{
							
							$show_m=mysql_query("select * from matrimonialall where age BETWEEN $from AND $to and marriageType='$marriageType' and states='$states' and faculty='$academic_level' and is_del='no' and gender='Bride'  ") or die(mysql_error());
						
							$image_mime_type="image/png|image/jpeg|image/gif";
							while($row_m=mysql_fetch_array($show_m))
							{
							$first_name=$row_m['first_name'];
							$last_name=$row_m['last_name'];
							$city=$row_m['city'];
							$mobile_no1=$row_m['mobile_no1'];
						?>

						<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6" >
							<div class="thumbnail" >
								<?php echo '<img src="data:'.$image_mime_type.';base64,'.base64_encode
								($row_m['profile_pic']).'" style="width:150px; height:150px;" />';?>
								<div class="caption">
									<h5><?php echo "<a href=search_view.php?id=".$row_m['unique_id'].">". $first_name." ".$last_name."</a>"; ?></h5>
                                    <h5><?php echo $mobile_no1; ?></h5>
									<p class="price"><?php echo $city; ?></p>
                                    <button type="button" class="btn btn-danger" ><?php echo"<a href=search_view.php?id=".$row_m['unique_id']." >";?><span style="color:#fff">View Detail</span><?php echo "</a>"; ?></button>
								</div>
							</div>
						</div>
						<?php
							}
					  	}
					}
					else if($gender=='Bride')
					{
											 
						if($marriageType!='' && $academic_level=='' && $states=='' && $age=='')
						{
	
							$show_marg=mysql_query("select * from matrimonialall where marriageType='$marriageType' and gender='Groom' and is_del='no'  ") or die(mysql_error());
							$image_mime_type="image/png|image/jpeg|image/gif";
							while($row_marg=mysql_fetch_array($show_marg))
							{
								$unique_id=$row_marg['unique_id'];
							 	$first_name=$row_marg['first_name'];
								$last_name=$row_marg['last_name'];
								$city=$row_marg['city'];
								$mobile_no1=$row_marg['mobile_no1'];
				   	?>
						<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6" >
							<div class="thumbnail" >
								<?php echo '<img src="data:'.$image_mime_type.';base64,'.base64_encode
								($row_marg['profile_pic']).'" style="width:150px; height:150px;" />';?>
								<div class="caption">
									<h5><?php echo "<a href=search_view.php?id=".$row_marg['unique_id'].">". $first_name." ".$last_name."</a>"; ?></h5>
                                    <h5><?php echo $mobile_no1; ?></a></h5>
									<p class="price"><?php echo $city; ?></p>
                                    <button type="button" class="btn btn-danger" ><?php echo"<a href=search_view.php?id=".$row_marg['unique_id']." >";?><span style="color:#fff">View Detail</span><?php echo "</a>"; ?></button>
								</div>
							</div>
						</div>
						<?php
							}
					  	}
						
						if($marriageType=='' && $academic_level!='' &&  $states=='' && $age=='')
						{
							$show_al=mysql_query("select * from matrimonialall where faculty='$academic_level' and gender='Groom' and is_del='no'  ") or die(mysql_error());
							$image_mime_type="image/png|image/jpeg|image/gif";
							while($row_al=mysql_fetch_array($show_al))
							{
								$first_name=$row_al['first_name'];
								$last_name=$row_al['last_name'];
								$city=$row_al['city'];
								$mobile_no1=$row_al['mobile_no1'];
						?>

						<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6" >
							<div class="thumbnail" >
							<?php echo '<img src="data:'.$image_mime_type.';base64,'.base64_encode
								($row_al['profile_pic']).'" style="width:150px; height:150px;" />';?>
								<div class="caption">
									<h5><?php echo $first_name." ".$last_name; ?></h5>
                                    <h5><?php echo $mobile_no1; ?></h5>
									<p class="price"><?php echo $city; ?></p>
                                    <button type="button" class="btn btn-danger" ><?php echo"<a href=search_view.php?id=".$row_al['unique_id']." >";?><span style="color:#fff">View Detail</span><?php echo "</a>"; ?></button>
								</div>
							</div>
						</div>
						<?php
							}
					 	 }
					  
					  	if($marriageType=='' && $academic_level==''  && $states!='' && $age=='')
						{
							$show_state=mysql_query("select * from matrimonialall where states='$states' and is_del='no' and gender='Groom' ") or die(mysql_error());
							$image_mime_type="image/png|image/jpeg|image/gif";
							while($row_state=mysql_fetch_array($show_state))
							{
							$first_name=$row_state['first_name'];
							$last_name=$row_state['last_name'];
							$city=$row_state['city'];
							$mobile_no1=$row_state['mobile_no1'];
						?>

						<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6" >
							<div class="thumbnail" >
							<?php echo '<img src="data:'.$image_mime_type.';base64,'.base64_encode
								($row_state['profile_pic']).'" style="width:150px; height:150px;" />';?>
								<div class="caption">
									<h5><?php echo "<a href=search_view.php?id=".$row_state['unique_id'].">". $first_name." ".$last_name."</a>"; ?></h5>
                                    <h5><?php echo $mobile_no1; ?></h5>
									<p class="price"><?php echo $city; ?></p>
                                    <button type="button" class="btn btn-danger" ><?php echo"<a href=search_view.php?id=".$row_state['unique_id']." >";?><span style="color:#fff">View Detail</span><?php echo "</a>"; ?></button>
								</div>
							</div>
						</div>
						<?php
							}
					 	 }
						if($marriageType=='' && $academic_level==''  && $states=='' && $age!='')
						{
							$show_age=mysql_query("select * from matrimonialall where age BETWEEN $from AND $to and is_del='no' and gender='Groom' ") or die(mysql_error());
							$image_mime_type="image/png|image/jpeg|image/gif";
							while($row_age=mysql_fetch_array($show_age))
							{
								$first_name=$row_age['first_name'];
								$last_name=$row_age['last_name'];
								$city=$row_age['city'];
								$mobile_no1=$row_age['mobile_no1'];
						?>
						
						<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6" >
							<div class="thumbnail" >
								<?php echo '<img src="data:'.$image_mime_type.';base64,'.base64_encode
								($row_age['profile_pic']).'" style="width:150px; height:150px;" />';?>
								<div class="caption">
									<h5><?php echo "<a href=search_view.php?id=".$row_age['unique_id'].">". $first_name." ".$last_name."</a>"; ?></h5>
                                    <h5><?php echo $mobile_no1; ?></h5>
									<p class="price"><?php echo $city; ?></p>
                                    <button type="button" class="btn btn-danger" ><?php echo"<a href=search_view.php?id=".$row_age['unique_id']." >";?><span style="color:#fff">View Detail</span><?php echo "</a>"; ?></button>
								</div>
							</div>
						</div>
						<?php
							}
					 	 }
						if($marriageType!='' && $academic_level!='' &&  $states!='' && $age!='')
						{
	
							$show_m=mysql_query("select * from matrimonialall where age BETWEEN $from AND $to and marriageType='$marriageType' and states='$states' and faculty='$academic_level' and is_del='no' and gender='Groom'  ") or die(mysql_error());
							
							$image_mime_type="image/png|image/jpeg|image/gif";
							while($row_m=mysql_fetch_array($show_m))
							{
							$first_name=$row_m['first_name'];
							$last_name=$row_m['last_name'];
							$city=$row_m['city'];
							$mobile_no1=$row_m['mobile_no1'];
						?>
						
						<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6" >
							<div class="thumbnail" >
								<?php echo '<img src="data:'.$image_mime_type.';base64,'.base64_encode
								($row_m['profile_pic']).'" style="width:150px; height:150px;" />';?>
								<div class="caption">
									<h5><?php echo "<a href=search_view.php?id=".$row_m['unique_id'].">". $first_name." ".$last_name."</a>"; ?></h5>
                                    <h5><?php echo $mobile_no1; ?></h5>
									<p class="price"><?php echo $city; ?></p>
                                    <button type="button" class="btn btn-danger" ><?php echo"<a href=search_view.php?id=".$row_m['unique_id']." >";?><span style="color:#fff">View Detail</span><?php echo "</a>"; ?></button>
								</div>
							</div>
						</div>
						<?php
							}
						  }
						}
						?>
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