<div class="col-lg-3 content-left">
					
					<div class="well well-sm hidden-lg">
						<div class="mobile-categories"></div>
					</div>
					<div class="well well-sm">
						<center>
                        <?php
						
                        	$show123=mysql_query("select * from matrimonialall where email='$email'") or die(mysql_error());
									$image_mime_type123="image/jpeg";
									while($row123=mysql_fetch_array($show123))
									{ 
										//$img_pic=$row123['profile_pic'];
										if($row123['profile_pic']=="")
										{											
											$gender=$row123['gender'] ;										
											if($gender=="Bride")
											{
												echo "<img class='img-responsive img-rounded' src=img/bride.png>";
											}
											else if($gender=="Groom")
											{
												echo "<img class='img-responsive img-rounded' src=img/groom.png >";
											}
										}
										else 
										{
										 	echo '<img src="data:'.$image_mime_type123.';base64,'.base64_encode ($row123['profile_pic']).'"alt="image" class="img-responsive img-rounded " id="image_list" />'; ?>	
												
										<?php
										}
									}
									?>	
                        </center>
                        <br>
                        <form action="change_profile_pic.php" method="post"  enctype="multipart/form-data">
                        <input type="file" class="form-control" name="photo" required="required" />
                        <br><center>
                        <button type="submit" name="sumbit" class="btn btn-danger" style="background-color: #4caf50;border-color: #4caf50">Submit</button></center>
                        </form>
					</div>
                    
                    <div class="categories list-group hidden-xs hidden-sm hidden-md">
						<a href="home.php" class="list-group-item"><img src="img/home.png" style="height:20px;width:20px;">
                        	&nbsp;&nbsp;&nbsp; Home <span class="glyphicon glyphicon-chevron-right">
                        </span></a>
                        <li class="dropdown"style="list-style:none;" >
						<a href="#" class="list-group-item" data-toggle="dropdown"><img src="img/profile1.png" style="height:20px;width:20px;">
                        	&nbsp;&nbsp;&nbsp;Update Profile <span class="glyphicon glyphicon-chevron-right"></span></a>
                        
							<ul class="dropdown-menu" style="margin-left: 270px; margin-top:-40px;">
								<li ><a href="edit_personal_info.php">PERSONAL INFORMATION</a></li>
								<li><a href="edit_professional_info.php">PROFESSIONAL INFORMATION</a></li>
								<li><a href="edit_family_info.php"> FAMILY INFORMATION</a></li>
								<li><a href="edit_astrology_info.php">ASTROLOGICAL INFORMATION</a></li>
								<?php 
						 	$show=mysql_query("select * from matrimonialall where is_del='no' and email='$email' ") or die(mysql_error());
							while($row=mysql_fetch_array($show))
							{
									
							 $marriageType=$row['marriageType'];
							 $uniq_id=$row['unique_id'];
							 $gender=$row['gender'];
							 if($marriageType=='divorcee')
							 {
							 echo "<li><a href=edit_widow_divorce_info.php?type=$marriageType&id=$uniq_id&gender=$gender >DIVORCEE INFORMATION</a></li>";
							 }
							 if($marriageType=='widow')
							 {
								 echo "<li><a href=edit_widow_divorce_info.php?type=$marriageType&&id=$uniq_id&gender=$gender>WIDOW INFORMATION</a></li>";
							 }
							 if($marriageType=='widower')
							 {
								 echo "<li><a href=edit_widow_divorce_info.php?type=$marriageType&&id=$uniq_id&gender=$gender>WIDOWER INFORMATION</a></li>";
							 }
							}
						 ?>
							</ul>
						</li>
						
						<a href="gallery.php" class="list-group-item"><img src="img/galleary.png" style="height:20px;width:20px;">
                        	&nbsp;&nbsp;&nbsp;Gallery <span class="glyphicon glyphicon-chevron-right">
                        </span></a>
						<a href="testimonial.php" class="list-group-item"><img src="img/TestimonialIcon.png" style="height:20px;width:20px;">
                        	&nbsp;&nbsp;&nbsp;Testimonial 
                        <span class="glyphicon glyphicon-chevron-right">
                        </span></a>
						<a href="change_pass.php" class="list-group-item"><img src="img/pass.png" style="height:20px;width:20px;">
                        	&nbsp;&nbsp;&nbsp;Change Password <span class="glyphicon glyphicon-chevron-right">
                        </span></a>
						
						<a href="../logout.php" class="list-group-item"><img src="img/logout.png" style="height:20px;width:20px;">
                        	&nbsp;&nbsp;&nbsp;Logout <span class="glyphicon glyphicon-chevron-right">
                        </span></a>
						
					</div>
					
				</div>